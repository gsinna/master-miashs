<?php

    //======================================================================
    // DATA BASE CONNECTION
    //======================================================================

    include '../analytics/connection.php';

    
    //======================================================================
    // START TABLE FOR QUERIES
    //======================================================================

    $realtime = date('Y-m-d H:i:s', (time() - 1800));

    echo '<table>';
    echo '<thead><tr><th>Queries</th><th>Execution Time (ms)</th></tr></thead>';
    echo '<tbody>';


    //======================================================================
    // QUERIES LIST
    //======================================================================
    
    $queries = [
        "SELECT MIN(`date_full`) as firstDate, MAX(`date_full`) as lastDate FROM `data`",
        "SELECT COUNT( DISTINCT `session_id`) as Total FROM `data` WHERE `timestamp` >= NOW() - INTERVAL 30 MINUTE",
        "SELECT COUNT(DISTINCT `referrer_host`) as Total FROM `data` WHERE `timestamp` >= NOW() - INTERVAL 30 MINUTE",
        "SELECT COUNT(*) as Total FROM(SELECT `page_uri` FROM `data` WHERE `timestamp` >= NOW() - INTERVAL 30 MINUTE && `event_name` = 'page_view') as Pages GROUP BY `page_uri` ORDER BY Total DESC",
        "SELECT `event_name`, COUNT(*) as Total FROM(SELECT `event_name` FROM `data` WHERE `timestamp` >= NOW() - INTERVAL 30 MINUTE && `event_name` != 'page_view') as Event GROUP BY `event_name` ORDER BY Total DESC",
        "SELECT `device_category`, COUNT(*) as Total FROM(SELECT `device_category` FROM `data` WHERE `timestamp` >= NOW() - INTERVAL 30 MINUTE GROUP BY `session_id`) as Device GROUP BY `device_category`",
        "SELECT `geo_country`, `geo_region`, `geo_city`, COUNT(*) as Total FROM (SELECT `geo_country`, `geo_region`, `geo_city`, `session_id` FROM `data` WHERE `timestamp` >= NOW() - INTERVAL 30 MINUTE AND `geo_country` != '' GROUP BY `session_id`) as Geo GROUP BY `geo_country`, `geo_region`, `geo_city` ORDER BY Total DESC",
        "SELECT `referrer_host`, COUNT(*) as Total FROM(SELECT REPLACE(REPLACE(`referrer_host`, 'guillaume-sinnaeve.com', 'Direct'), 'www.Direct', 'Direct') as referrer_host FROM `data` WHERE `timestamp` >= NOW() - INTERVAL 30 MINUTE GROUP BY `session_id`) as Referrer GROUP BY `referrer_host`",
        "SELECT `page_uri`, COUNT(1) as Total FROM `data` WHERE `timestamp` >= NOW() - INTERVAL 30 MINUTE && `event_name` = 'page_view' GROUP BY `page_uri` ORDER BY Total DESC",
        "SELECT `event_name`, `event_custom_1`, COUNT(*) as Total FROM(SELECT `event_name`, `event_custom_1` FROM `data` WHERE `timestamp` >= NOW() - INTERVAL 30 MINUTE && `event_name` != 'page_view') as Event GROUP BY `event_custom_1` ORDER BY Total DESC",
        "SELECT COUNT(DISTINCT `session_id`) as Total FROM `data`",
        "SELECT ROUND((Bounce/Total) * 100) as Ratio FROM (SELECT COUNT(`hit`) as Bounce FROM(SELECT COUNT(`event_name`) as hit FROM `data` GROUP BY `session_id`) as hits WHERE hit = 1) as c1, (SELECT COUNT(DISTINCT `session_id`) as Total FROM `data`) as c2",
        "SELECT ROUND(AVG(duration)) as Total FROM(SELECT `session_id`, (MAX(`timestamp`) - MIN(`timestamp`)) as duration FROM `data` WHERE `session_id` IS NOT NULL GROUP BY `session_id` ORDER BY `session_id`) as average",
        "SELECT COUNT(DISTINCT `session_id`) as Total FROM `data` WHERE `event_name` != 'page_view' && `event_name` IS NOT NULL",
        "SELECT `date_full`, COUNT(*) as Total FROM(SELECT `session_id`, `date_full` FROM `data` GROUP BY `session_id`) as Visitors GROUP BY `date_full`",
        "SELECT `date_day`, COUNT(*) as Total FROM(SELECT `session_id`, `date_day` FROM `data` GROUP BY `session_id`) as Visitors GROUP BY `date_day` ORDER BY FIELD(`date_day`, 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday')",
        "SELECT `date_hour`, COUNT(*) as Total FROM(SELECT `session_id`, `date_hour` FROM `data` GROUP BY `session_id`) as Visitors GROUP BY `date_hour`",
        "SELECT `device_category`, COUNT(*) as Total FROM(SELECT `device_category` FROM `data` WHERE `device_category` IS NOT NULL GROUP BY `session_id`) as Device GROUP BY `device_category`",
        "SELECT `device_system`, COUNT(*) as Total FROM(SELECT `device_system` FROM `data` WHERE `device_system` IS NOT NULL GROUP BY `session_id`) as System GROUP BY `device_system` ORDER BY Total DESC",
        "SELECT `device_browser`, COUNT(*) as Total FROM(SELECT `device_browser` FROM `data` WHERE `device_browser` IS NOT NULL GROUP BY `session_id`) as Browser GROUP BY `device_browser` ORDER BY Total DESC",
        "SELECT `geo_country`, COUNT(DISTINCT `session_id`) as Total FROM `data` WHERE `geo_country` != '' GROUP BY `geo_country` ORDER BY Total DESC LIMIT 10",
        "SELECT `geo_region`, COUNT(*) as Total FROM(SELECT `geo_region` FROM `data` WHERE `geo_region` != '' && `geo_country` = 'France' GROUP BY `session_id`) as System GROUP BY `geo_region` ORDER BY Total DESC LIMIT 10",
        "SELECT `geo_region`, `geo_city`, COUNT(*) as Total FROM(SELECT `geo_region`, `geo_city`  FROM `data` WHERE `geo_city` != '' && `geo_region` != '' && `geo_country` = 'France' GROUP BY `session_id`) as System GROUP BY `geo_city` ORDER BY Total DESC LIMIT 10",
        "SELECT `device_language`, COUNT(*) as Total FROM(SELECT `device_language` FROM `data` WHERE `device_language` IS NOT NULL && `device_language` != 1 GROUP BY `session_id`) as Browser GROUP BY `device_language`",
        "SELECT `referrer_host`, COUNT(*) as Total FROM(SELECT REPLACE(REPLACE(`referrer_host`, 'guillaume-sinnaeve.com', 'Direct'), 'www.Direct', 'Direct') as referrer_host FROM `data` GROUP BY `session_id`) as Referrer GROUP BY `referrer_host` ORDER BY Total DESC",
        "SELECT COUNT(1) as Total FROM `data` WHERE `event_name` = 'page_view'",
        "SELECT ROUND((SUM(pages)/COUNT(`session_id`)), 1) as Total FROM (SELECT `session_id`, COUNT(`event_name`) as pages FROM `data` WHERE `session_id` IS NOT NULL && `event_name` = 'page_view' GROUP BY `session_id`) as visitors",
        "SELECT COUNT(1) as Total FROM `data` WHERE `event_name` = 'page_view' && `page_uri` LIKE '%404%'",
        "SELECT `date_full`, COUNT(`event_name`) as Total FROM `data` WHERE `event_name` = 'page_view' GROUP BY `date_full`",
        "SELECT `date_day`, COUNT(*) as Total FROM(SELECT `event_name`, `date_day` FROM `data` WHERE `event_name` = 'page_view') as pages GROUP BY `date_day` ORDER BY FIELD(`date_day`, 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday')",
        "SELECT `date_hour`, COUNT(*) as Total FROM(SELECT `event_name`, `date_hour` FROM `data`WHERE `event_name` = 'page_view') as pages GROUP BY `date_hour`",
        "SELECT `page_uri`, COUNT(`page_uri`) as Total FROM (SELECT `session_id`, `page_uri`, MIN(`timestamp`) FROM `data` WHERE `event_name` = 'page_view' GROUP BY `session_id`) as landing GROUP BY `page_uri` ORDER By Total DESC",
        "SELECT  SUBSTRING_INDEX(SUBSTRING_INDEX(`page_uri`, '/', 2), '/', -1) as pages, COUNT(`page_uri`) as Total FROM `data` WHERE `event_name` = 'page_view' GROUP BY SUBSTRING_INDEX(`page_uri`, '/', 2) ORDER BY TOTAL DESC",
        "SELECT SUBSTRING_INDEX(`page_uri`, '/', -1) as pages, COUNT(`page_uri`) as Total FROM `data` WHERE `event_name` = 'page_view' GROUP BY SUBSTRING_INDEX(`page_uri`, '/', -1) ORDER BY TOTAL DESC",
        "SELECT `page_uri`, COUNT(`page_uri`) as Total FROM ( SELECT @row_num := CASE `session_id` WHEN @session_id THEN @row_num + 1 ELSE 1 END AS row_num, @session_id := `session_id` as session_id, `page_uri`, `timestamp` FROM `data`, (SELECT @session_id:=0, @row_num:=0) as t WHERE `event_name` = 'page_view' ORDER BY session_id, `timestamp` DESC ) as info WHERE row_num = 1 GROUP BY `page_uri` ORDER BY Total DESC",
        "SELECT `page_uri`, COUNT(1) as Total FROM `data` WHERE `event_name` = 'page_view' GROUP BY `page_uri` ORDER BY Total DESC",
        "SELECT COUNT(1) as Total FROM `data` WHERE `event_name` != 'page_view'",
        "SELECT COUNT(DISTINCT `session_id`) as Total FROM `data` WHERE `event_name` = 'read_more'",
        "SELECT COUNT(DISTINCT `session_id`) as Total FROM `data` WHERE `event_name` = 'call_me'",
        "SELECT `date_full`, COUNT(`event_name`) as Total FROM `data` WHERE `event_name` != 'page_view' GROUP BY `date_full`",
        "SELECT `date_day`, COUNT(*) as Total FROM(SELECT `event_name`, `date_day` FROM `data` WHERE `event_name` != 'page_view') as events GROUP BY `date_day` ORDER BY FIELD(`date_day`, 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday')",
        "SELECT `date_hour`, COUNT(*) as Total FROM(SELECT `event_name`, `date_hour` FROM `data`WHERE `event_name` != 'page_view') as pages GROUP BY `date_hour`",
        "SELECT `event_name`, `event_custom_1`, `event_custom_2`, COUNT(1) as Total FROM `data` WHERE `event_name` != 'page_view' GROUP BY `event_custom_1` ORDER BY Total DESC",
        "SELECT `event_name`, `event_custom_1`, COUNT(1) as Total FROM `data` WHERE `event_name` = 'Read more' GROUP BY `event_custom_1` ORDER BY Total DESC"
    ];

    foreach ($queries as &$sql) {
    	//Record the start time before the query is executed.
        $started = microtime(true);
        
        //Execute your SQL query.
        $res = mysqli_query($conn, $sql);
 
        //Record the end time after the query has finished running.
        $end = microtime(true);

        //Calculate the difference in microseconds.
        $difference = $end - $started;
 
        //Format the time so that it only shows 5 decimal places.
        $queryTime = number_format($difference, 5) * 1000;
 
        //Print out the seconds it took for the query to execute.
        echo '<tr><td style="border:1px solid #000;">' . $sql . '</td><td style="border:1px solid #000;text-align:right;">' . $queryTime . '</td></tr>';
    }

    echo '</tbody>';
    echo '</table>';


    //======================================================================
    // DATA BASE DISCONNECTION
    //======================================================================

    mysqli_close($conn);

?>