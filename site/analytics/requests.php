<?php 

    //======================================================================
    // WORDINGS FOR REPORTS
    //======================================================================

    $wording = [
        'fr' => [
            'ACTIONS' => 'Actions',
            'CERTIFICATIONS' => 'Certifications',
            'CITIES' => 'Villes',
            'COMPANIES' => 'Entreprises',
            'COUNTRIES' => 'Pays',
            'EVENTS' => 'Événements',
            'FORMATIONS' => 'Formations',
            'FROM' => 'Du',
            'JOBS' => 'Postes',
            'LABELS' => 'Libellés',
            'NUMBERS' => 'Nombres',
            'PAGES' => 'Pages',
            'PROVIDERS' => 'Fournisseurs',
            'READ' => 'Lus',
            'REGIONS' => 'Régions',
            'REPORTS' => 'Rapports',
            'SOURCES' => 'Sources',
            'SYSTEMS' => 'Systèmes',
            'TITLES' => 'Titres',
            'TO' => 'au',
            'VIEWS' => 'Vues',
            'VISITORS' => 'Visiteurs'
        ],
        'en' => [
            'ACTIONS' => 'Actions',
            'CERTIFICATIONS' => 'Certifications',
            'CITIES' => 'Cities',
            'COMPANIES' => 'Companies',
            'COUNTRIES' => 'Countries',
            'EVENTS' => 'Events',
            'FORMATIONS' => 'Formations',
            'FROM' => 'From',
            'JOBS' => 'Jobs',
            'LABELS' => 'Labels',
            'NUMBERS' => 'Numbers',
            'PAGES' => 'Pages',
            'PROVIDERS' => 'Fournisseurs',
            'READ' => 'Read',
            'REGIONS' => 'Regions',
            'REPORTS' => 'Reports',
            'SOURCES' => 'Sources',
            'SYSTEMS' => 'Systems',
            'TITLES' => 'Titles',
            'TO' => 'to',
            'VIEWS' => 'Views',
            'VISITORS' => 'Visitors'
        ]
    ];

    $lang = substr($_SERVER['REQUEST_URI'], 1, 2);


    //======================================================================
    // DATA BASE CONNECTION
    //======================================================================

    include '../analytics/connection.php';

    
    //======================================================================
    // START SCRIPT
    //======================================================================

    echo "<script type='text/javascript'>";


    //======================================================================
    // GET DATE RANGE
    //======================================================================

    $sql = "SELECT MIN(`date_full`) as firstDate, MAX(`date_full`) as lastDate FROM `data`";
    $res = mysqli_query($conn, $sql);
    $data = '';

    while ($row = $res->fetch_assoc()) {
        $data = $wording[$lang]['FROM'] . ' ' . $row['firstDate'] . ' ' . $wording[$lang]['TO'] . ' ' . $row['lastDate'];
    }

    echo "counter('.date-range', " . json_encode($data) . ");";


    
    //======================================================================
    // REAL TIME
    //======================================================================

    //-----------------------------------------------------
    // SET REAL TIME VISITORS COUNTER
    //-----------------------------------------------------

    $sql = "SELECT COUNT( DISTINCT `session_id`) as Total FROM `data` WHERE `timestamp` >= NOW() - INTERVAL 30 MINUTE";
    $res = mysqli_query($conn, $sql);
    $data = '';

    while ($row = $res->fetch_assoc()) {
        $data = $row['Total'];
    }

    echo "counter('#chart-real-time-visitors', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET REAL TIME SOURCES COUNTER
    //-----------------------------------------------------

    $sql = "SELECT COUNT(DISTINCT `referrer_host`) as Total FROM `data` WHERE `timestamp` >= NOW() - INTERVAL 30 MINUTE";
    $res = mysqli_query($conn, $sql); 
    $data = '';

    while ($row = $res->fetch_assoc()) {
        $data = $row['Total'];
    }

    echo "counter('#chart-real-time-sources-total', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET REAL TIME PAGES COUNTER
    //-----------------------------------------------------

    $sql = "SELECT COUNT(*) as Total FROM(SELECT `page_uri` FROM `data` WHERE `timestamp` >= NOW() - INTERVAL 30 MINUTE && `event_name` = 'page_view') as Pages GROUP BY `page_uri` ORDER BY Total DESC";
    $res = mysqli_query($conn, $sql);
    $data = 0;

    while ($row = $res->fetch_assoc()) {
        $data += $row['Total'];
    }

    echo "counter('#chart-real-time-pages-total', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET REAL TIME EVENTS COUNTER
    //-----------------------------------------------------

    $sql = "SELECT `event_name`, COUNT(*) as Total FROM(SELECT `event_name` FROM `data` WHERE `timestamp` >= NOW() - INTERVAL 30 MINUTE && `event_name` != 'page_view') as Event GROUP BY `event_name` ORDER BY Total DESC";
    $res = mysqli_query($conn, $sql);
    $data = 0;
    
    while ($row = $res->fetch_assoc()) {
        $data += $row['Total'];
    }

    echo "counter('#chart-real-time-events-total', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET REAL TIME DEVICE CATEGORY DONUT
    //-----------------------------------------------------

    $sql = "SELECT `device_category`, COUNT(*) as Total FROM(SELECT `device_category` FROM `data` WHERE `timestamp` >= NOW() - INTERVAL 30 MINUTE GROUP BY `session_id`) as Device GROUP BY `device_category`";

    $res = mysqli_query($conn, $sql);
    $data = [];

    while ($row = $res->fetch_assoc()) {
        array_push($data, [$row['device_category'], $row['Total']]);
    }

    echo "donut('#chart-real-time-device', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET REAL TIME LOCALISATION TABLE
    //-----------------------------------------------------

    $sql = "SELECT `geo_country`, `geo_region`, `geo_city`, COUNT(*) as Total FROM (SELECT `geo_country`, `geo_region`, `geo_city`, `session_id` FROM `data` WHERE `timestamp` >= NOW() - INTERVAL 30 MINUTE AND `geo_country` != '' GROUP BY `session_id`) as Geo GROUP BY `geo_country`, `geo_region`, `geo_city` ORDER BY Total DESC";
    $res = mysqli_query($conn, $sql);
    $data = [];
    
    while ($row = $res->fetch_assoc()) {
        array_push($data, (object)[$wording[$lang]['COUNTRIES'] => $row['geo_country'], $wording[$lang]['REGIONS'] => $row['geo_region'], $wording[$lang]['CITIES'] => $row['geo_city'], $wording[$lang]['VISITORS'] => $row['Total']]);
    }

    echo "table('#chart-real-time-localisation', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET REAL TIME SOURCES TABLE
    //-----------------------------------------------------

    $sql = "SELECT `referrer_host`, COUNT(*) as Total FROM(SELECT REPLACE(REPLACE(`referrer_host`, 'guillaume-sinnaeve.com', 'Direct'), 'www.Direct', 'Direct') as referrer_host FROM `data` WHERE `timestamp` >= NOW() - INTERVAL 30 MINUTE GROUP BY `session_id`) as Referrer GROUP BY `referrer_host`";
    $res = mysqli_query($conn, $sql);
    $dataX = ['Sources'];
    $dataY = [];

    while ($row = $res->fetch_assoc()) {
        array_push($dataX, $row['Total']);
        array_push($dataY, $row['referrer_host']);
    }

    echo "bars('#chart-real-time-sources-list', " . json_encode($dataX) . ", " . json_encode($dataY) . ", false, true);";


    //-----------------------------------------------------
    // SET REAL TIME PAGES TABLE
    //-----------------------------------------------------

    $sql = "SELECT `page_uri`, COUNT(1) as Total FROM `data` WHERE `timestamp` >= NOW() - INTERVAL 30 MINUTE && `event_name` = 'page_view' GROUP BY `page_uri` ORDER BY Total DESC";
    $res = mysqli_query($conn, $sql);
    $data = [];

    while ($row = $res->fetch_assoc()) {
        array_push($data, (object)[$wording[$lang]['PAGES'] => $row['page_uri'], $wording[$lang]['VIEWS'] => $row['Total']]);
    }

    echo "table('#chart-real-time-pages-list', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET REAL TIME EVENTS TABLE
    //-----------------------------------------------------

    $sql = "SELECT `event_name`, `event_custom_1`, COUNT(*) as Total FROM(SELECT `event_name`, `event_custom_1` FROM `data` WHERE `timestamp` >= NOW() - INTERVAL 30 MINUTE && `event_name` != 'page_view') as Event GROUP BY `event_custom_1` ORDER BY Total DESC";
    $res = mysqli_query($conn, $sql);
    $data = [];

    while ($row = $res->fetch_assoc()) {
        array_push($data, (object)[$wording[$lang]['ACTIONS'] => $row['event_name'], $wording[$lang]['LABELS'] => $row['event_custom_1'], $wording[$lang]['NUMBERS'] => $row['Total']]);
    }

    echo "table('#chart-real-time-events-list', " . json_encode($data) . ");";



    //======================================================================
    // VISITORS
    //======================================================================

    //-----------------------------------------------------
    // SET GLOBAL VISITORS TOTAL
    //-----------------------------------------------------

    $sql = "SELECT COUNT(DISTINCT `session_id`) as Total FROM `data`";
    $res = mysqli_query($conn, $sql);
    $data = '';

    while ($row = $res->fetch_assoc()) {
        $data = $row['Total'];
    }

    echo "counter('#chart-global-visitors-total', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET GLOBAL BOUNCE RATE
    //-----------------------------------------------------

    $sql = "SELECT ROUND((Bounce/Total) * 100) as Ratio FROM (SELECT COUNT(`hit`) as Bounce FROM(SELECT COUNT(`event_name`) as hit FROM `data` GROUP BY `session_id`) as hits WHERE hit = 1) as c1, (SELECT COUNT(DISTINCT `session_id`) as Total FROM `data`) as c2";
    $res = mysqli_query($conn, $sql);
    $data = '';

    while ($row = $res->fetch_assoc()) {
        $data = $row['Ratio'] . '%';
    }

    echo "counter('#chart-global-visitors-bounce-rate', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET GLOBAL AVERAGE VISITS DURATION
    //-----------------------------------------------------

    $sql = "SELECT ROUND(AVG(duration)) as Total FROM(SELECT `session_id`, (MAX(`timestamp`) - MIN(`timestamp`)) as duration FROM `data` WHERE `session_id` IS NOT NULL GROUP BY `session_id` ORDER BY `session_id`) as average";
    $res = mysqli_query($conn, $sql);
    $data = '';

    while ($row = $res->fetch_assoc()) {
        $data = $row['Total'];
    }

    $data = gmdate("H\h i\m s\s", $data);

    echo "counter('#chart-global-visitors-average-duration', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET GLOBAL VISITORS WITH EVENTS TOTAL
    //-----------------------------------------------------

    $sql = "SELECT COUNT(DISTINCT `session_id`) as Total FROM `data` WHERE `event_name` != 'page_view' && `event_name` IS NOT NULL";
    $res = mysqli_query($conn, $sql);
    $data = '';

    while ($row = $res->fetch_assoc()) {
        $data = $row['Total'];
    }

    echo "counter('#chart-global-visitors-with-events', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET GLOBAL VISITORS BY DATE
    //-----------------------------------------------------

    $sql = "SELECT `date_full`, COUNT(*) as Total FROM(SELECT `session_id`, `date_full` FROM `data` GROUP BY `session_id`) as Visitors GROUP BY `date_full`";
    $res = mysqli_query($conn, $sql);
    $dataX = ["x"];
    $dataY = [$wording[$lang]['VISITORS']];

    while ($row = $res->fetch_assoc()) {
        array_push($dataX, $row['date_full']);
        array_push($dataY, $row['Total']);
    }

    echo "line('#chart-global-visitors-by-date', 'x', '" . $wording[$lang]['VISITORS'] . "', " . json_encode($dataX) . ", ". json_encode($dataY) . ", false);";

    //-----------------------------------------------------
    // SET GLOBAL VISITORS BY DAY
    //-----------------------------------------------------

    $sql = "SELECT `date_day`, COUNT(*) as Total FROM(SELECT `session_id`, `date_day` FROM `data` GROUP BY `session_id`) as Visitors GROUP BY `date_day` ORDER BY FIELD(`date_day`, 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday')";
    $res = mysqli_query($conn, $sql);
    $dataX = [$wording[$lang]['VISITORS']];
    $dataY = [];

    while ($row = $res->fetch_assoc()) {
        array_push($dataX, $row['Total']);
        array_push($dataY, $row['date_day']);
    }

    echo "bars('#chart-global-visitors-by-day', " . json_encode($dataX) . ", ". json_encode($dataY) . ", false);";

    //-----------------------------------------------------
    // SET GLOBAL VISITORS BY HOUR
    //-----------------------------------------------------

    $sql = "SELECT `date_hour`, COUNT(*) as Total FROM(SELECT `session_id`, `date_hour` FROM `data` GROUP BY `session_id`) as Visitors GROUP BY `date_hour`";
    $res = mysqli_query($conn, $sql);
    $dataX = [$wording[$lang]['VISITORS']];
    $dataY = [];

    while ($row = $res->fetch_assoc()) {
        array_push($dataX, $row['Total']);
        array_push($dataY, $row['date_hour']);
    }

    echo "bars('#chart-global-visitors-by-hour', " . json_encode($dataX) . ", ". json_encode($dataY) . ", false);";


    //-----------------------------------------------------
    // SET GLOBAL VISITORS BY DEVICE
    //-----------------------------------------------------

    $sql = "SELECT `device_category`, COUNT(*) as Total FROM(SELECT `device_category` FROM `data` WHERE `device_category` IS NOT NULL GROUP BY `session_id`) as Device GROUP BY `device_category`";

    $res = mysqli_query($conn, $sql);
    $data = [];

    while ($row = $res->fetch_assoc()) {
        array_push($data, [$row['device_category'], $row['Total']]);
    }

    echo "donut('#chart-global-visitors-by-device', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET GLOBAL VISITORS BY SYSTEM
    //-----------------------------------------------------

    $sql = "SELECT `device_system`, COUNT(*) as Total FROM(SELECT `device_system` FROM `data` WHERE `device_system` IS NOT NULL GROUP BY `session_id`) as System GROUP BY `device_system` ORDER BY Total DESC";

    $res = mysqli_query($conn, $sql);
    $data = [];

    while ($row = $res->fetch_assoc()) {
        array_push($data, [$wording[$lang]['SYSTEMS'] => $row['device_system'], $wording[$lang]['VISITORS'] => $row['Total']]);
    }

    echo "table('#chart-global-visitors-by-system', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET GLOBAL VISITORS BY BROWSER
    //-----------------------------------------------------

    $sql = "SELECT `device_browser`, COUNT(*) as Total FROM(SELECT `device_browser` FROM `data` WHERE `device_browser` IS NOT NULL GROUP BY `session_id`) as Browser GROUP BY `device_browser` ORDER BY Total DESC";

    $res = mysqli_query($conn, $sql);
    $data = [];

    while ($row = $res->fetch_assoc()) {
        array_push($data, [$row['device_browser'], $row['Total']]);
    }

    echo "donut('#chart-global-visitors-by-browser', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET GLOBAL VISITORS BY COUNTRY
    //-----------------------------------------------------

    $sql = "SELECT `geo_country`, COUNT(DISTINCT `session_id`) as Total FROM `data` WHERE `geo_country` != '' GROUP BY `geo_country` ORDER BY Total DESC LIMIT 10";

    $res = mysqli_query($conn, $sql);
    $data = [];

    while ($row = $res->fetch_assoc()) {
        array_push($data, [$wording[$lang]['COUNTRIES'] => $row['geo_country'], $wording[$lang]['VISITORS'] => $row['Total']]);
    }

    echo "table('#chart-global-visitors-by-country', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET GLOBAL VISITORS BY REGION
    //-----------------------------------------------------

    $sql = "SELECT `geo_region`, COUNT(*) as Total FROM(SELECT `geo_region` FROM `data` WHERE `geo_region` != '' && `geo_country` = 'France' GROUP BY `session_id`) as System GROUP BY `geo_region` ORDER BY Total DESC LIMIT 10";

    $res = mysqli_query($conn, $sql);
    $data = [];

    while ($row = $res->fetch_assoc()) {
        array_push($data, [$wording[$lang]['REGIONS'] => $row['geo_region'], $wording[$lang]['VISITORS'] => $row['Total']]);
    }

    echo "table('#chart-global-visitors-by-region', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET GLOBAL VISITORS BY REGION AND CITY
    //-----------------------------------------------------

    $sql = "SELECT `geo_region`, `geo_city`, COUNT(*) as Total FROM(SELECT `geo_region`, `geo_city`  FROM `data` WHERE `geo_city` != '' && `geo_region` != '' && `geo_country` = 'France' GROUP BY `session_id`) as System GROUP BY `geo_city` ORDER BY Total DESC LIMIT 10";

    $res = mysqli_query($conn, $sql);
    $data = [];

    while ($row = $res->fetch_assoc()) {
        array_push($data, [$wording[$lang]['REGIONS'] => $row['geo_region'], $wording[$lang]['CITIES'] => $row['geo_city'], $wording[$lang]['VISITORS'] => $row['Total']]);
    }

    echo "table('#chart-global-visitors-by-city', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET GLOBAL VISITORS BY LANGUAGE
    //-----------------------------------------------------

    $sql = "SELECT `device_language`, COUNT(*) as Total FROM(SELECT `device_language` FROM `data` WHERE `device_language` IS NOT NULL && `device_language` != 1 GROUP BY `session_id`) as Browser GROUP BY `device_language`";

    $res = mysqli_query($conn, $sql);
    $data = [];

    while ($row = $res->fetch_assoc()) {
        array_push($data, [$row['device_language'], $row['Total']]);
    }

    echo "donut('#chart-global-visitors-by-language', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET GLOBAL VISITORS BY SOURCES
    //-----------------------------------------------------

    $sql = "SELECT `referrer_host`, COUNT(*) as Total FROM(SELECT REPLACE(REPLACE(`referrer_host`, 'guillaume-sinnaeve.com', 'Direct'), 'www.Direct', 'Direct') as referrer_host FROM `data` GROUP BY `session_id`) as Referrer GROUP BY `referrer_host` ORDER BY Total DESC";
    $res = mysqli_query($conn, $sql);
    $dataX = [$wording[$lang]['SOURCES']];
    $dataY = [];

    while ($row = $res->fetch_assoc()) {
        array_push($dataX, $row['Total']);
        array_push($dataY, $row['referrer_host']);
    }

    echo "bars('#chart-global-visitors-by-sources', " . json_encode($dataX) . ", " . json_encode($dataY) . ", false, true);";



    //======================================================================
    // PAGES
    //======================================================================

    //-----------------------------------------------------
    // SET GLOBAL PAGES TOTAL
    //-----------------------------------------------------

    $sql = "SELECT COUNT(1) as Total FROM `data` WHERE `event_name` = 'page_view'";
    $res = mysqli_query($conn, $sql);
    $data = '';

    while ($row = $res->fetch_assoc()) {
        $data = $row['Total'];
    }

    echo "counter('#chart-global-pages-total', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET AVERAGE PAGES BY VISITORS
    //-----------------------------------------------------

    $sql = "SELECT ROUND((SUM(pages)/COUNT(`session_id`)), 1) as Total FROM (SELECT `session_id`, COUNT(`event_name`) as pages FROM `data` WHERE `session_id` IS NOT NULL && `event_name` = 'page_view' GROUP BY `session_id`) as visitors";
    $res = mysqli_query($conn, $sql);
    $data = '';

    while ($row = $res->fetch_assoc()) {
        $data = $row['Total'];
    }

    echo "counter('#chart-global-pages-average-by-visitors', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET 404 PAGES TOTAL
    //-----------------------------------------------------

    $sql = "SELECT COUNT(1) as Total FROM `data` WHERE `event_name` = 'page_view' && `page_uri` LIKE '%404%'";
    $res = mysqli_query($conn, $sql);
    $data = '';

    while ($row = $res->fetch_assoc()) {
        $data = $row['Total'];
    }

    echo "counter('#chart-global-pages-not-found', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET GLOBAL PAGES BY DATE
    //-----------------------------------------------------

    $sql = "SELECT `date_full`, COUNT(`event_name`) as Total FROM `data` WHERE `event_name` = 'page_view' GROUP BY `date_full`";
    $res = mysqli_query($conn, $sql);
    $dataX = ['x'];
    $dataY = [$wording[$lang]['PAGES']];

    while ($row = $res->fetch_assoc()) {
        array_push($dataX, $row['date_full']);
        array_push($dataY, $row['Total']);
    }

    echo "line('#chart-global-pages-by-date', 'x', '" . $wording[$lang]['PAGES'] . "', " . json_encode($dataX) . ", ". json_encode($dataY) . ", false);";


    //-----------------------------------------------------
    // SET GLOBAL PAGES BY DAY
    //-----------------------------------------------------

    $sql = "SELECT `date_day`, COUNT(*) as Total FROM(SELECT `event_name`, `date_day` FROM `data` WHERE `event_name` = 'page_view') as pages GROUP BY `date_day` ORDER BY FIELD(`date_day`, 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday')";
    $res = mysqli_query($conn, $sql);
    $dataX = [$wording[$lang]['PAGES']];
    $dataY = [];

    while ($row = $res->fetch_assoc()) {
        array_push($dataX, $row['Total']);
        array_push($dataY, $row['date_day']);
    }

    echo "bars('#chart-global-pages-by-day', " . json_encode($dataX) . ", ". json_encode($dataY) . ", false);";

    //-----------------------------------------------------
    // SET GLOBAL PAGES BY HOUR
    //-----------------------------------------------------

    $sql = "SELECT `date_hour`, COUNT(*) as Total FROM(SELECT `event_name`, `date_hour` FROM `data`WHERE `event_name` = 'page_view') as pages GROUP BY `date_hour`";
    $res = mysqli_query($conn, $sql);
    $dataX = [$wording[$lang]['PAGES']];
    $dataY = [];

    while ($row = $res->fetch_assoc()) {
        array_push($dataX, $row['Total']);
        array_push($dataY, $row['date_hour']);
    }

    echo "bars('#chart-global-pages-by-hour', " . json_encode($dataX) . ", ". json_encode($dataY) . ", false);";


    //-----------------------------------------------------
    // SET GLOBAL PAGES BY LANDING
    //-----------------------------------------------------

    $sql = "SELECT `page_uri`, COUNT(`page_uri`) as Total FROM (SELECT `session_id`, `page_uri`, MIN(`timestamp`) FROM `data` WHERE `event_name` = 'page_view' GROUP BY `session_id`) as landing GROUP BY `page_uri` ORDER By Total DESC";
    $res = mysqli_query($conn, $sql);
    $data = [];

    while ($row = $res->fetch_assoc()) {
        array_push($data, (object)[$wording[$lang]['PAGES'] => $row['page_uri'], $wording[$lang]['VIEWS'] => $row['Total']]);
    }

    echo "table('#chart-global-pages-by-landing', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET GLOBAL PAGES BY LANGUAGE
    //-----------------------------------------------------

    $sql = "SELECT  SUBSTRING_INDEX(SUBSTRING_INDEX(`page_uri`, '/', 2), '/', -1) as pages, COUNT(`page_uri`) as Total FROM `data` WHERE `event_name` = 'page_view' GROUP BY SUBSTRING_INDEX(`page_uri`, '/', 2) ORDER BY TOTAL DESC";
    $res = mysqli_query($conn, $sql);
    $data = [];

    while ($row = $res->fetch_assoc()) {
        array_push($data, [$row['pages'], $row['Total']]);
    }

    echo "donut('#chart-global-pages-by-language', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET GLOBAL PAGES BY NAME
    //-----------------------------------------------------

    $sql = "SELECT SUBSTRING_INDEX(`page_uri`, '/', -1) as pages, COUNT(`page_uri`) as Total FROM `data` WHERE `event_name` = 'page_view' GROUP BY SUBSTRING_INDEX(`page_uri`, '/', -1) ORDER BY TOTAL DESC";
    $res = mysqli_query($conn, $sql);
    $data = [];

    while ($row = $res->fetch_assoc()) {
        array_push($data, (object)[$wording[$lang]['PAGES'] => $row['pages'], $wording[$lang]['VIEWS'] => $row['Total']]);
    }

    echo "table('#chart-global-pages-by-name', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET GLOBAL PAGES BY EXIT
    //-----------------------------------------------------

    $sql = "SELECT `page_uri`, COUNT(`page_uri`) as Total FROM ( SELECT @row_num := CASE `session_id` WHEN @session_id THEN @row_num + 1 ELSE 1 END AS row_num, @session_id := `session_id` as session_id, `page_uri`, `timestamp` FROM `data`, (SELECT @session_id:=0, @row_num:=0) as t WHERE `event_name` = 'page_view' ORDER BY session_id, `timestamp` DESC ) as info WHERE row_num = 1 GROUP BY `page_uri` ORDER BY Total DESC";
    $res = mysqli_query($conn, $sql);
    $data = [];

    while ($row = $res->fetch_assoc()) {
        array_push($data, (object)[$wording[$lang]['PAGES'] => $row['page_uri'], $wording[$lang]['VIEWS'] => $row['Total']]);
    }

    echo "table('#chart-global-pages-by-exit', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET GLOBAL PAGES BY VIEWS
    //-----------------------------------------------------

    $sql = "SELECT `page_uri`, COUNT(1) as Total FROM `data` WHERE `event_name` = 'page_view' GROUP BY `page_uri` ORDER BY Total DESC";
    $res = mysqli_query($conn, $sql);
    $data = [];

    while ($row = $res->fetch_assoc()) {
        array_push($data, (object)[$wording[$lang]['PAGES'] => $row['page_uri'], $wording[$lang]['VIEWS'] => $row['Total']]);
    }

    echo "table('#chart-global-pages-by-views', " . json_encode($data) . ");";



    //======================================================================
    // EVENTS
    //======================================================================

    //-----------------------------------------------------
    // SET GLOBAL EVENTS TOTAL
    //-----------------------------------------------------

    $sql = "SELECT COUNT(1) as Total FROM `data` WHERE `event_name` != 'page_view'";
    $res = mysqli_query($conn, $sql);
    $data = '';

    while ($row = $res->fetch_assoc()) {
        $data = $row['Total'];
    }

    echo "counter('#chart-global-events-total', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET READ MORE BY VISITORS
    //-----------------------------------------------------

    $sql = "SELECT COUNT(DISTINCT `session_id`) as Total FROM `data` WHERE `event_name` = 'read_more'";
    $res = mysqli_query($conn, $sql);
    $data = '';

    while ($row = $res->fetch_assoc()) {
        $data = $row['Total'];
    }

    echo "counter('#chart-global-events-by-articles-read', " . json_encode($data) . ");";


    //-----------------------------------------------------
    // SET CALL BY VISITORS
    //-----------------------------------------------------

    $sql = "SELECT COUNT(DISTINCT `session_id`) as Total FROM `data` WHERE `event_name` = 'call_me'";
    $res = mysqli_query($conn, $sql);
    $data = '';

    while ($row = $res->fetch_assoc()) {
        $data = $row['Total'];
    }

    echo "counter('#chart-global-events-by-call', " . json_encode($data) . ");";



    //-----------------------------------------------------
    // SET GLOBAL EVENTS BY DATE
    //-----------------------------------------------------

    $sql = "SELECT `date_full`, COUNT(`event_name`) as Total FROM `data` WHERE `event_name` != 'page_view' GROUP BY `date_full`";
    $res = mysqli_query($conn, $sql);
    $dataX = ['x'];
    $dataY = [$wording[$lang]['EVENTS']];

    while ($row = $res->fetch_assoc()) {
        array_push($dataX, $row['date_full']);
        array_push($dataY, $row['Total']);
    }

    echo "line('#chart-global-events-by-date', 'x', '" . $wording[$lang]['EVENTS'] . "', " . json_encode($dataX) . ", ". json_encode($dataY) . ", false);";


    //-----------------------------------------------------
    // SET GLOBAL EVENTS BY DAY
    //-----------------------------------------------------

    $sql = "SELECT `date_day`, COUNT(*) as Total FROM(SELECT `event_name`, `date_day` FROM `data` WHERE `event_name` != 'page_view') as events GROUP BY `date_day` ORDER BY FIELD(`date_day`, 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday')";
    $res = mysqli_query($conn, $sql);
    $dataX = [$wording[$lang]['EVENTS']];
    $dataY = [];

    while ($row = $res->fetch_assoc()) {
        array_push($dataX, $row['Total']);
        array_push($dataY, $row['date_day']);
    }

    echo "bars('#chart-global-events-by-day', " . json_encode($dataX) . ", ". json_encode($dataY) . ", false);";


    //-----------------------------------------------------
    // SET GLOBAL EVENTS BY HOUR
    //-----------------------------------------------------

    $sql = "SELECT `date_hour`, COUNT(*) as Total FROM(SELECT `event_name`, `date_hour` FROM `data`WHERE `event_name` != 'page_view') as pages GROUP BY `date_hour`";
    $res = mysqli_query($conn, $sql);
    $dataX = [$wording[$lang]['EVENTS']];
    $dataY = [];

    while ($row = $res->fetch_assoc()) {
        array_push($dataX, $row['Total']);
        array_push($dataY, $row['date_hour']);
    }

    echo "bars('#chart-global-events-by-hour', " . json_encode($dataX) . ", ". json_encode($dataY) . ", false);";


    //-----------------------------------------------------
    // GET EVENTS BY EVENT NAME
    //-----------------------------------------------------

    $sql = "SELECT `event_name`, `event_custom_1`, `event_custom_2`, COUNT(1) as Total FROM `data` WHERE `event_name` != 'page_view' GROUP BY `event_custom_1` ORDER BY Total DESC";
    $res = mysqli_query($conn, $sql);
    $dataCompetences = [];
    $dataCertifications = [];
    $dataExperiences = [];
    $dataFormations = [];

    while ($row = $res->fetch_assoc()) {
        if($row['event_name'] == 'show_competences') {
            array_push($dataCompetences, [$row['event_custom_1'], $row['Total']]);
        }
        else if($row['event_name'] == 'show_certifications') {
            array_push($dataCertifications, (object)[$wording[$lang]['CERTIFICATIONS'] => $row['event_custom_1'], $wording[$lang]['PROVIDERS'] => $row['event_custom_2'], $wording[$lang]['NUMBERS'] => $row['Total']]);
        }
        else if($row['event_name'] == 'show_experiences') {
            array_push($dataExperiences, (object)[$wording[$lang]['JOBS'] => $row['event_custom_1'], $wording[$lang]['COMPANIES'] => $row['event_custom_2'], $wording[$lang]['NUMBERS'] => $row['Total']]);
        }
        else if($row['event_name'] == 'show_formations') {
            array_push($dataFormations, (object)[$wording[$lang]['FORMATIONS'] => $row['event_custom_1'], $wording[$lang]['PROVIDERS'] => $row['event_custom_2'], $wording[$lang]['NUMBERS'] => $row['Total']]);
        }
    }

    echo "donut('#chart-global-events-by-competences', " . json_encode($dataCompetences) . ");";

    echo "table('#chart-global-events-by-certifications', " . json_encode($dataCertifications) . ");";

    echo "table('#chart-global-events-by-experiences', " . json_encode($dataExperiences) . ");";

    echo "table('#chart-global-events-by-formations', " . json_encode($dataFormations) . ");";


    //-----------------------------------------------------
    // SET ARTICLES BY READ MORE
    //-----------------------------------------------------

    $sql = "SELECT `event_name`, `event_custom_1`, COUNT(1) as Total FROM `data` WHERE `event_name` = 'read_more' GROUP BY `event_custom_1` ORDER BY Total DESC";
    $res = mysqli_query($conn, $sql);
    $data = [];

    while ($row = $res->fetch_assoc()) {
        array_push($data, (object)[$wording[$lang]['TITLES'] => $row['event_custom_1'], $wording[$lang]['READ'] => $row['Total']]);
    }

    echo "table('#chart-global-events-by-article-name', " . json_encode($data) . ");";
    

    echo "</script>";



    //======================================================================
    // DATA BASE DISCONNECTION
    //======================================================================

    mysqli_close($conn);

?>