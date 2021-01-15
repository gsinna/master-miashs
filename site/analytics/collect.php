<?php
    //======================================================================
    // SET SESSION ID
    //======================================================================

    // Set max inactivity session duration in seconds
    $max_session_duration = 1800;

    // Get the value of session ID
    $session_id = isset($_GET['sid']) ? $_GET['sid'] : '';

    // Flag to block data request
    $data_request = true;

    // session ID is defined
    if($session_id != '') {
        // session ID has not the format expected
        if(!preg_match('/^[0-9]{10}_[0-9]{9,10}$/i', $session_id)) {
            $session_id = round(microtime(true)) . '_' . mt_rand(0000000000,(int) 9999999999);
            $data_request = false;
            header('Location: ' . preg_replace('~(\?|&)sid=[^&]*~', '$1', $_SERVER['REQUEST_URI']) . 'sid=' . $session_id); 
        } 
        else {
            include 'connection.php';

            $sql = "SELECT `session_id`, MAX(`timestamp`) as lastTimestamp FROM `data` WHERE `session_id` = '" . $session_id . "'";
            $res = mysqli_query($conn, $sql);
            mysqli_close($conn);
            $data = [];

            while ($row = $res->fetch_assoc()) {
                array_push($data, ["session_id" => $row['session_id'], "lastTimestamp" => $row['lastTimestamp']]);
            }
            
            if(isset($data[0]['session_id']) && isset($data[0]['lastTimestamp'])) {

                $dif = strtotime(date("Y-m-d H:i:s")) - strtotime($data[0]['lastTimestamp']);

                //If the last session ID interaction is greater than 30 min, we change session_id
                if ($dif > $max_session_duration) {
                   header('Location: ' . preg_replace('~(\?|&)sid=[^&]*~', '$1', $_SERVER['REQUEST_URI']) . 'sid=' . round(microtime(true)) . '_' . mt_rand(0000000000,(int) 9999999999));
                   $data_request = false;
                }
            }
        }
    } 
    // session ID is not defined
    else {
        if($_SERVER['QUERY_STRING'] != '') {
            header('Location: ' . $_SERVER['REQUEST_URI'] . '&sid=' . round(microtime(true)) . '_' . mt_rand(0000000000,(int) 9999999999));
            $data_request = false;
        } 
        else {
            header('Location: ' . $_SERVER['REQUEST_URI'] . '?sid=' . round(microtime(true)) . '_' . mt_rand(0000000000,(int) 9999999999));
            $data_request = false;   
        }
    }



    //======================================================================
    // GET REQUEST TIME INFORMATIONS
    //======================================================================

    //-----------------------------------------------------
    // request_time
    //-----------------------------------------------------

    $request_time = round(microtime(true) * 1000);



    //======================================================================
    // GET DATE INFORMATIONS
    //======================================================================

    //-----------------------------------------------------
    // date_full
    //-----------------------------------------------------

    // date_full equals the date of the request
    $date_full = date('m/d/Y');

    //-----------------------------------------------------
    // date_day
    //-----------------------------------------------------

    // date_day equals the day of the request
    $date_day = date('l');

    //-----------------------------------------------------
    // date_hour
    //-----------------------------------------------------

    // date_hour equals the hour of the request
    $date_hour = date('H');

    //-----------------------------------------------------
    // date_minute
    //-----------------------------------------------------

    // date_minute equals the minute of the request
    $date_minute = date('i');


    //======================================================================
    // GET REFERRER INFORMATIONS
    //======================================================================

    //-----------------------------------------------------
    // referrer_full, referrer_host and referrer_path
    //-----------------------------------------------------

    // By default, referrer_full, referrer_host and referrer_path equal 'unknown'
    $referrer_full = 'unknown';
    $referrer_host = 'unknown';
    $referrer_path = 'unknown';

    // Check if http referer is not undefined
    if(isset($_SERVER['HTTP_REFERER'])) {
        
        $referrer_full = $_SERVER['HTTP_REFERER'];
        
        if (true === stripos($_SERVER['HTTP_REFERER'], 'guillaume-sinnaeve.com')){
            $referrer_host = 'www.guillaume-sinnaeve.com';
        }
        else if (true === stripos($_SERVER['HTTP_REFERER'], 'facebook')){
            $referrer_host = 'www.facebook.com';
        }
        else if ($_SERVER['HTTP_REFERER'] == 'android-app://com.linkedin.android/'){
            $referrer_host = 'www.linkedin.com';
        }
        else {
            $referrer_host = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
        }
        
        $referrer_path = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH);
    }
    else if(preg_match('/LinkedInApp/i', $device_userAgent)) {
        $referrer_full = 'https://www.linkedin.com/';
        $referrer_host = 'www.linkedin.com';
        $referrer_path = '/';
    }
    else {
        // Direct
        $referrer_full = 'Direct';
        $referrer_host = 'Direct';
        $referrer_path = 'Direct';
    }



    //======================================================================
    // GET GEOLOCALISATION INFORMATIONS
    //======================================================================

    //-----------------------------------------------------
    // geo_country, geo_region and geo_city
    //-----------------------------------------------------

        $geo_country = '';
        $geo_region = '';
        $geo_city = ''; 
    
    // Set geolocalisation informations only for the first pageview request or if the session ID changed
    if(!strpos($referrer_full, ('sid=')) || !strpos($referrer_full, $session_id)) {

        // Get visitor IP
        $visitor_ip = $_SERVER['REMOTE_ADDR'];

        // Connect to ip-api.com and get values
        $ip_query = @unserialize(file_get_contents('http://ip-api.com/php/' . $visitor_ip));
        
        // Get informations only if the request is OK
        if($ip_query && $ip_query['status'] == 'success') {

            //-----------------------------------------------------
            // geo_country 
            //-----------------------------------------------------

            $geo_country = $ip_query['country'];


            //-----------------------------------------------------
            // geo_region 
            //-----------------------------------------------------

            $geo_region = $ip_query['regionName'];


            //-----------------------------------------------------
            // geo_city 
            //-----------------------------------------------------

            $geo_city = $ip_query['city'];
        }
    }



    //======================================================================
    // GET DEVICE INFORMATIONS
    //======================================================================

    //-----------------------------------------------------
    // device_userAgent 
    //-----------------------------------------------------
  
    // Get the user agent
    $device_userAgent = $_SERVER['HTTP_USER_AGENT'];

    // Exclude Bot based on user agent
    if(preg_match('/Bot|LinkedInBot|facebookexternalhit|PostmanRuntime|Twitterbot|applebot|Facebot|bingbot|Googlebot|Scoop\.it|Go-http-client/i', $device_userAgent)) {
        $data_request = false;
    }


    //-----------------------------------------------------
    // device_category
    //-----------------------------------------------------

    // By default, device_category equals 'unknown'
    $device_category = 'unknown';
    
    // TV 
    if(preg_match('/GoogleTV|SmartTV|Internet.TV|NetCast|NETTV|AppleTV|boxee|Kylo|Roku|DLNADOC|CE-HTML/i', $device_userAgent)) {
        $device_category = 'TV';
    }
    // TV - gaming console
    else if(preg_match('/Xbox|PLAYSTATION.(3|4)|Wii/i', $device_userAgent)) {
        $device_category = 'TV';
    }
    // Tablet
    else if(preg_match('/iPad/i', $device_userAgent) || preg_match('/tablet/i', $device_userAgent) && !preg_match('/RX-34/i', $device_userAgent) || preg_match('/FOLIO/i', $device_userAgent)) {
        $device_category = 'Tablet';
    }
    // Tablet - Android
    else if(preg_match('/Linux/i', $device_userAgent) && preg_match('/Android/i', $device_userAgent) && !preg_match('/Fennec|mobi|HTC.Magic|HTCX06HT|Nexus.One|SC-02B|fone.945/i', $device_userAgent)) {
        $device_category = 'Tablet';
    }
    // Tablet - Kindle
    else if(preg_match('/Kindle|KFAPWI/i', $device_userAgent) || preg_match('/Mac.OS/i', $device_userAgent) && preg_match('/Silk/i', $device_userAgent)) {
        $device_category = 'Tablet';
    }
    // Tablet - pre Android 3.0
    else if(preg_match('/GT-P10|SC-01C|SHW-M180S|SGH-T849|SCH-I800|SHW-M180L|SPH-P100|SGH-I987|zt180|HTC(.Flyer|_Flyer)|Sprint.ATP51|ViewPad7|pandigital(sprnova|nova)|Ideos.S7|Dell.Streak.7|Advent.Vega|A101IT|A70BHT|MID7015|Next2|nook/i', $device_userAgent) || preg_match('/MB511/i', $device_userAgent) && preg_match('/RUTEM/i', $device_userAgent)) {
        $device_category = 'Tablet';
    }
    // Mobile - unique User Agent
    else if(preg_match('/BOLT|Fennec|Iris|Maemo|Minimo|Mobi|mowser|NetFront|Novarra|Prism|RX-34|Skyfire|Tear|XV6875|XV6975|Google.Wireless.Transcoder/i', $device_userAgent)) {
        $device_category = 'Mobile';
    }
    // Mobile - odd Opera User Agent (http://goo.gl/nK90K)
    else if(preg_match('/Opera/i', $device_userAgent) && preg_match('/Windows.NT.5/i', $device_userAgent) && preg_match('/HTC|Xda|Mini|Vario|SAMSUNG-GT-i8000|SAMSUNG-SGH-i9/i', $device_userAgent)) {
        $device_category = 'Mobile';
    }
    // Mobile - WhatsApp
    else if(preg_match('/WhatsApp/i', $device_userAgent)) {
        $device_category = 'Mobile';
    }
    // Desktop - Windows
    else if(preg_match('/Windows.(NT|XP|ME|9)/i', $device_userAgent) && !preg_match('/Phone/i', $device_userAgent) || preg_match('/Win(9|.9|NT)/i', $device_userAgent)) {
        $device_category = 'Desktop';
    }
    // Desktop - Mac
    else if(preg_match('/Macintosh|PowerPC/i', $device_userAgent) && !preg_match('/Silk/i', $device_userAgent)) {
        $device_category = 'Desktop';
    }
    // Desktop - Linux
    else if(preg_match('/Linux/i', $device_userAgent) && preg_match('/X11/i', $device_userAgent)) {
        $device_category = 'Desktop';
    }
    // Desktop - Solaris, SunOS, BSD
    else if(preg_match('/Solaris|SunOS|BSD/i', $device_userAgent)) {
        $device_category = 'Desktop';
    }
    // Desktop - BOT, Crawler, Spider
    else if(preg_match('/Bot|Crawler|Spider|Yahoo|ia_archiver|Covario-IDS|findlinks|DataparkSearch|larbin|Mediapartners-Google|NG-Search|Snappy|Teoma|Jeeves|TinEye/i', $device_userAgent) && !preg_match('/Mobile/i', $device_userAgent)) {
        $device_category = 'Desktop';
    }


    //-----------------------------------------------------
    // device_system
    //-----------------------------------------------------

    // By default, device_system equals 'unknown'
    $device_system = 'unknown';
    
    // iOS
    if(preg_match('/iPhone|iPad|iPod/i', $device_userAgent)) {
        $device_system = 'iOS';
    }
    // Mac OS 
    else if(preg_match('/Mac/i', $device_userAgent)) {
        $device_system = 'Mac OS';
    }
    // Windows
    else if(preg_match('/Win/i', $device_userAgent)) {
        $device_system = 'Windows';
    }
    // Android
    else if(preg_match('/Android/i', $device_userAgent)) {
        $device_system = 'Android';
    }
    // UNIX
    else if(preg_match('/X11/i', $device_userAgent)) {
        $device_system = 'UNIX';
    }
    // Linux
    else if(preg_match('/Linux/i', $device_userAgent)) {
        $device_system = 'Linux';
    }
    // BlackBerry
    else if(preg_match('/BB10|PlayBook/i', $device_userAgent)) {
        $device_system = 'BlackBerry';
    }


    //-----------------------------------------------------
    // device_browser 
    //-----------------------------------------------------

    // By default, device_browser equals 'unknown'
    $device_browser = 'unknown';

    // Opera
    if(preg_match('/Opera|OPR/i', $device_userAgent)) {
        $device_browser = 'Opera';
    }
    // Edge
    else if(preg_match('/Edg/i', $device_userAgent)) {
        $device_browser = 'Edge';
    }
    // Internet Explorer
    else if(preg_match('/MSIE|Trident\//i', $device_userAgent)) {
        $device_browser = 'Internet Explorer';
    }
    // Chromium
    else if(preg_match('/Chromium/i', $device_userAgent)) {
        $device_browser = 'Chromium';
    }
    // Firefox
    else if(preg_match('/Firefox/i', $device_userAgent)) {
        $device_browser = 'Firefox';
    }
    // Seamonkey
    else if(preg_match('/Seamonkey/i', $device_userAgent)) {
        $device_browser = 'Seamonkey';
    }
    // Chrome
    else if(preg_match('/Chrome/i', $device_userAgent)) {
        $device_browser = 'Chrome';
    }
    // Safari
    else if(preg_match('/Safari/i', $device_userAgent)) {
        $device_browser = 'Safari';
    }
    // SkypeUriPreview
    else if(preg_match('/SkypeUriPreview/i', $device_userAgent)) {
        $device_browser = 'SkypeUriPreview';
    }
    // LinkedIn App
    else if(preg_match('/LinkedInApp/i', $device_userAgent)) {
        $device_browser = 'LinkedIn App';
    }
    // WhatsApp
    else if(preg_match('/WhatsApp/i', $device_userAgent)) {
        $device_browser = 'WhatsApp';
    }
    // Facebook App
    else if(preg_match('/FBID/i', $device_userAgent)) {
        $device_browser = 'Facebook App';
    }



    //-----------------------------------------------------
    // device_language
    //-----------------------------------------------------

    // Get browser language
    $device_language = 'en';

    if(preg_match('/\/fr\//i', $_SERVER['REQUEST_URI'])) {
        $device_language = 'fr';
    }

    

    //======================================================================
    // GET EVENT INFORMATIONS
    //======================================================================

    //-----------------------------------------------------
    // event_name
    //-----------------------------------------------------

    $event_name = isset($_GET['event_name']) ? $_GET['event_name'] : 'page_view';


    //-----------------------------------------------------
    // event_custom_1
    //-----------------------------------------------------

    $event_custom_1 = isset($_GET['event_custom_1']) ? $_GET['event_custom_1'] : '';


    //-----------------------------------------------------
    // event_custom_2
    //-----------------------------------------------------

    $event_custom_2 = isset($_GET['event_custom_2']) ? $_GET['event_custom_2'] : '';



    //======================================================================
    // GET PAGE INFORMATIONS
    //======================================================================

    //-----------------------------------------------------
    // page_uri
    //-----------------------------------------------------

    // page_uri equals to the current page path for event page_view and referer path for other event
    $page_uri = ($event_name == 'page_view' ? strtok($_SERVER['REQUEST_URI'], '?') : parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH));



    //======================================================================
    // SEND INFORMATIONS TO DATABASE
    //======================================================================

    
    if($session_id != '' && $data_request) {

        include 'connection.php';

        $sql = "INSERT INTO data (
                session_id, 
                event_name,
                event_custom_1, 
                event_custom_2, 
                page_uri, 
                date_full, 
                date_day, 
                date_hour, 
                date_minute, 
                referrer_full,
                referrer_host,
                referrer_path,
                geo_country,
                geo_region,
                geo_city,
                device_userAgent,
                device_category,
                device_system,
                device_browser,
                device_language
            ) VALUES (
                '$session_id', 
                '$event_name',
                '$event_custom_1',
                '$event_custom_2',
                '$page_uri',
                '$date_full',
                '$date_day',
                '$date_hour',
                '$date_minute',
                '$referrer_full',
                '$referrer_host',
                '$referrer_path',
                '$geo_country',
                '$geo_region',
                '$geo_city',
                '$device_userAgent',
                '$device_category',
                '$device_system',
                '$device_browser',
                '$device_language'
            )";

        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }

    header('Analytics_request_time: ' . $request_time);
    header('Analytics_session_id: ' . $session_id);
    header('Analytics_event_name: ' . $event_name);
    header('Analytics_event_custom_1: ' . $event_custom_1);
    header('Analytics_event_custom_2: ' . $event_custom_2);
    header('Analytics_page_uri: ' . $page_uri);
    header('Analytics_date_full: ' . $date_full);
    header('Analytics_date_day: ' . $date_day);
    header('Analytics_date_hour: ' . $date_hour);
    header('Analytics_date_minute: ' . $date_minute);
    header('Analytics_referrer_full: ' . $referrer_full);
    header('Analytics_referrer_host: ' . $referrer_host);
    header('Analytics_referrer_path: ' . $referrer_path);
    header('Analytics_geo_country: ' . $geo_country);
    header('Analytics_geo_region: ' . $geo_region);
    header('Analytics_geo_city: ' . $geo_city);
    header('Analytics_device_userAgent: ' . $device_userAgent);
    header('Analytics_device_category: ' . $device_category);
    header('Analytics_device_system: ' . $device_system);
    header('Analytics_device_browser: ' . $device_browser);
    header('Analytics_device_language: ' . $device_language);
?>