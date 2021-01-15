<?php 
    include '../analytics/collect.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="author" content="Guillaume Sinnaeve">
    <meta name="keywords" content="Google Tag Manager, Google Analytics, TMS, Tag Management System, Firebase, TagCommander, Tealium, AT Internet, Web, App, Data">
    <meta name="description" content="Guillaume Sinnaeve is an expert in data collection, web and applications, with and without TMS.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Analyzes | Guillaume Sinnaeve</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.20/c3.min.css">
</head>

<body>
    <div id="header" class="nav">
        <div class="container">
            <a href="home?sid=<?php echo $session_id ?>">Guillaume Sinnaeve</a>
            <a href="thesis?sid=<?php echo $session_id ?>">Thesis</a>
            <a href="analyzes?sid=<?php echo $session_id ?>" class="active">Analyzes</a>
            <a href="articles?sid=<?php echo $session_id ?>">Articles</a>
            <a href="experiences?sid=<?php echo $session_id ?>">Experiences</a>
            <a href="certifications?sid=<?php echo $session_id ?>">Certifications</a>
            <a href="formations?sid=<?php echo $session_id ?>">Formations</a>
            <span class="language"><a href="/fr/analyzes?sid=<?php echo $session_id ?>">fr</a> | <a class="active">en</a></span>
            <a href="javascript:void(0);" class="icon" onclick="showMenu()"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div id="main" class="dash">
        <div class="full-container">
            <div class="dash-container">
                <h1>Analyzes</h1>
                <section>
                    <div>
                        <h2>Real time</h2>
                        <h3>In the last 30 minutes</h3>
                        <div class="cards large-25 medium-50 small-100">
                            <div class="cards-titles">Visitors</div>
                            <div class="cards-subtitles">Total number of visitors</div>
                            <div id="chart-real-time-visitors" class="counter"></div>
                        </div>
                        <div class="cards large-25 medium-50 small-100">
                            <div class="cards-titles">Sources</div>                        
                            <div class="cards-subtitles">Number of different sources</div>
                            <div id="chart-real-time-sources-total" class="counter"></div>
                        </div>
                        <div class="cards large-25 medium-50 small-100">
                            <div class="cards-titles">Pages</div>                        
                            <div class="cards-subtitles">Total number of page views</div>
                            <div id="chart-real-time-pages-total" class="counter"></div>
                        </div>
                        <div class="cards large-25 medium-50 small-100">
                            <div class="cards-titles">Events</div>                        
                            <div class="cards-subtitles">Total number of events</div>
                            <div id="chart-real-time-events-total" class="counter"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-25 medium-100 small-100">
                            <div class="cards-titles">Device categories</div>    
                            <div class="cards-subtitles">Percentage of visitors by device</div>
                            <div id="chart-real-time-device"></div>
                        </div>
                        <div class="cards large-75 medium-100 small-100">
                            <div class="cards-titles">Sources</div>    
                            <div class="cards-subtitles">Number of visitors by source</div>
                            <div id="chart-real-time-sources-list"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-100 medium-100 small-100">
                            <div class="cards-titles">Location</div>
                            <div class="cards-subtitles">Number of visitors by location</div>
                            <div id="chart-real-time-localisation"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-25 medium-100 small-100">
                            <div class="cards-titles">Pages</div>
                            <div class="cards-subtitles">Number of page views per URL</div>
                            <div id="chart-real-time-pages-list"></div>
                        </div>
                        <div class="cards large-75 medium-100 small-100">
                            <div class="cards-titles">Events</div>
                            <div class="cards-subtitles">Number of events per action and label</div>
                            <div id="chart-real-time-events-list"></div>
                        </div>
                    </div>
                </section> 
                <section>
                    <div>
                        <h2>Visitors</h2>                        
                        <h3 class="date-range"></h3>
                        <div class="cards large-25 medium-50 small-100">
                            <div class="cards-titles">Total</div>
                            <div class="cards-subtitles">Total number of visitors</div>
                            <div id="chart-global-visitors-total" class="counter"></div>
                        </div>
                        <div class="cards large-25 medium-50 small-100">
                            <div class="cards-titles">Bounce rate</div>
                            <div class="cards-subtitles">Percentage of visitors with a page viewed</div>
                            <div id="chart-global-visitors-bounce-rate" class="counter"></div>
                        </div>
                        <div class="cards large-25 medium-50 small-100">
                            <div class="cards-titles">Average duration of visits</div>
                            <div class="cards-subtitles">Average time spent on the website by visitors</div>
                            <div id="chart-global-visitors-average-duration" class="counter"></div>
                        </div>
                        <div class="cards large-25 medium-50 small-100">
                            <div class="cards-titles">Visits with events</div>
                            <div class="cards-subtitles">Number of visitors with events</div>
                            <div id="chart-global-visitors-with-events" class="counter"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-100 medium-100 small-100">
                            <div class="cards-titles">Visitors by date</div>
                            <div class="cards-subtitles">Number of visitors by date</div>
                            <div id="chart-global-visitors-by-date"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-50 medium-100 small-100">
                            <div class="cards-titles">Frequency per day</div>
                            <div class="cards-subtitles">Number of visitors per day</div>
                            <div id="chart-global-visitors-by-day"></div>
                        </div>
                        <div class="cards large-50 medium-100 small-100">
                            <div class="cards-titles">Frequency per hour</div>
                            <div class="cards-subtitles">Number of visitors per hour</div>
                            <div id="chart-global-visitors-by-hour"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-33 medium-100 small-100">
                            <div class="cards-titles">Device categories</div>
                            <div class="cards-subtitles">Percentage of visitors by device category</div>
                            <div id="chart-global-visitors-by-device"></div>
                        </div>
                        <div class="cards large-34 medium-100 small-100">
                            <div class="cards-titles">Operating systems</div>
                            <div class="cards-subtitles">Number of visitors by operating system</div>
                            <div id="chart-global-visitors-by-system"></div>
                        </div>  
                        <div class="cards large-33 medium-100 small-100">
                            <div class="cards-titles">Browsers</div>
                            <div class="cards-subtitles">Percentage of visitors by browsers</div>
                            <div id="chart-global-visitors-by-browser"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-50 medium-100 small-100">
                            <div class="cards-titles">Top 10 countries</div>
                            <div class="cards-subtitles">Number of visitors per country</div>
                            <div id="chart-global-visitors-by-country"></div>
                        </div> 
                        <div class="cards large-50 medium-100 small-100">
                            <div class="cards-titles">Top 10 French regions</div>
                            <div class="cards-subtitles">Number of visitors per French region</div>
                            <div id="chart-global-visitors-by-region"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-100 medium-100 small-100">
                            <div class="cards-titles">Top 10 French cities</div>
                            <div class="cards-subtitles">Number of visitors per French city</div>
                            <div id="chart-global-visitors-by-city"></div>
                        </div>  
                        <div class="break"></div>                  
                        <div class="cards large-25 medium-100 small-100">
                            <div class="cards-titles">Languages</div>
                            <div class="cards-subtitles">Percentage of visitors by language</div>
                            <div id="chart-global-visitors-by-language"></div>
                        </div>
                        <div class="cards large-75 medium-100 small-100">
                            <div class="cards-titles">Sources</div>
                            <div class="cards-subtitles">Number of visitors by source</div>
                            <div id="chart-global-visitors-by-sources"></div>
                        </div> 
                    </div>
                </section>  
                <section>
                    <div>
                        <h2>Pages</h2>
                        <h3 class="date-range"></h3>
                        <div class="cards large-33 medium-50 small-100">
                            <div class="cards-titles">Total</div>
                            <div class="cards-subtitles">Total number of page views</div>
                            <div id="chart-global-pages-total" class="counter"></div>
                        </div>
                        <div class="cards large-34 medium-50 small-100">
                            <div class="cards-titles">Average per visitor</div>
                            <div class="cards-subtitles">Average page views per visitor</div>
                            <div id="chart-global-pages-average-by-visitors" class="counter"></div>
                        </div>
                        <div class="cards large-33 medium-100 small-100">
                            <div class="cards-titles">Pages not found</div>
                            <div class="cards-subtitles">Total number of pages 404 views</div>
                            <div id="chart-global-pages-not-found" class="counter"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-100 medium-100 small-100">
                            <div class="cards-titles">Pages by date</div>
                            <div class="cards-subtitles">Number of pages per date</div>
                            <div id="chart-global-pages-by-date"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-50 medium-100 small-100">
                            <div class="cards-titles">Frequency per day</div>
                            <div class="cards-subtitles">Number of pages per day</div>
                            <div id="chart-global-pages-by-day"></div>
                        </div>
                        <div class="cards large-50 medium-100 small-100">
                            <div class="cards-titles">Frequency per hour</div>
                            <div class="cards-subtitles">Number of pages per hour</div>
                            <div id="chart-global-pages-by-hour"></div>
                        </div>         
                        <div class="break"></div>          
                        <div class="cards large-25 medium-100 small-100">
                            <div class="cards-titles">Entrances</div>
                            <div class="cards-subtitles">First page seen by visitors</div>
                            <div id="chart-global-pages-by-landing"></div>
                        </div>                   
                        <div class="cards large-25 medium-100 small-100">
                            <div class="cards-titles">Languages</div>                        
                            <div class="cards-subtitles">Pages viewed by language</div>
                            <div id="chart-global-pages-by-language"></div>
                        </div>
                        <div class="cards large-25 medium-100 small-100">
                            <div class="cards-titles">Names</div>                                         
                            <div class="cards-subtitles">Pages viewed by name</div>
                            <div id="chart-global-pages-by-name"></div>
                        </div>
                        <div class="cards large-25 medium-100 small-100">
                            <div class="cards-titles">Exits</div>
                            <div class="cards-subtitles">Last page viewed by visitors</div>
                            <div id="chart-global-pages-by-exit"></div>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <h2>Events</h2>
                        <h3 class="date-range"></h3>
                        <div class="cards large-33 medium-50 small-100">
                            <div class="cards-titles">Total</div>
                            <div class="cards-subtitles">Total number of events</div>
                            <div id="chart-global-events-total" class="counter"></div>
                        </div>
                        <div class="cards large-34 medium-50 small-100">
                            <div class="cards-titles">Readers</div>
                            <div class="cards-subtitles">Number of visitors who read an article</div>
                            <div id="chart-global-events-by-articles-read" class="counter"></div>
                        </div>
                        <div class="cards large-33 medium-100 small-100">
                            <div class="cards-titles">Contact request</div>
                            <div class="cards-subtitles">Number of visitors who called</div>
                            <div id="chart-global-events-by-call" class="counter"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-100 medium-100 small-100">
                            <div class="cards-titles">Events by date</div>
                            <div class="cards-subtitles">Number of events per date</div>
                            <div id="chart-global-events-by-date"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-50 medium-100 small-100">
                            <div class="cards-titles">Frequency per day</div>
                            <div class="cards-subtitles">Number of events per day</div>
                            <div id="chart-global-events-by-day"></div>
                        </div>
                        <div class="cards large-50 medium-100 small-100">
                            <div class="cards-titles">Frequency per hour</div>
                            <div class="cards-subtitles">Number of events per hour</div>
                            <div id="chart-global-events-by-hour"></div>
                        </div>
                        <div class="break"></div>      
                        <div class="cards large-25 medium-100 small-100">
                            <div class="cards-titles">Required skills</div>                        
                            <div class="cards-subtitles">Number of events by skills</div>
                            <div id="chart-global-events-by-competences"></div>
                        </div>
                        <div class="cards large-75 medium-100 small-100">
                            <div class="cards-titles">Consulted certifications</div>                        
                            <div class="cards-subtitles">Number of events per certifications</div>
                            <div id="chart-global-events-by-certifications"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-50 medium-100 small-100">
                            <div class="cards-titles">Interest of professional career</div>
                            <div class="cards-subtitles">Number of events by job</div>
                            <div id="chart-global-events-by-experiences"></div>
                        </div>
                        <div class="cards large-50 medium-100 small-100">
                            <div class="cards-titles">Interest in formation</div>
                            <div class="cards-subtitles">Number of events per training</div>
                            <div id="chart-global-events-by-formations"></div>
                        </div>
                        <div class="break"></div>    
                        <div class="cards large-100 medium-100 small-100">
                            <div class="cards-titles">Read articles</div>
                            <div class="cards-subtitles">Number of "Read more" events per article</div>
                            <div id="chart-global-events-by-article-name"></div>
                        </div>
                    </div>
                </section>                                 
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="container">
            <p><a href="/en/privacy-policy?sid=<?php echo $session_id ?>">Privacy policy</a></p>
            <p>© 2020 Guillaume Sinnaeve | Experimental and non-commercial website</p>
        </div>
    </div>
    <script>
        function showMenu() {
            var x = document.getElementById("header");
            if (x.className === "nav") {
                x.className += " responsive";
            } else {
                x.className = "nav";
            }
        }
    </script>

    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.20/c3.min.js"></script>
    <script src="../analytics/dash.js"></script>

    <?php 
        include '../analytics/requests.php';
    ?>  

</body>