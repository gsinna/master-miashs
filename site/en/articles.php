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
    <title>Articles | Guillaume Sinnaeve</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <style type="text/css">
        #atitw:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_articles&event_custom_1=We have created a template to connect AT Internet and Google Tag Manager');
            background-size: 0px;
        } 
        #button-atitw:focus {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=read_more&event_custom_1=We have created a template to connect AT Internet and Google Tag Manager');
            background-size: 0px;
        }
        #gtmdebug:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_articles&event_custom_1=Tutorial: how to deal with GTM New Preview and Debug Modes');
            background-size: 0px;
        } 
        #button-gtmdebug:focus {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=read_more&event_custom_1=Tutorial: how to deal with GTM New Preview and Debug Modes');
            background-size: 0px;
        }
        #amp2:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_articles&event_custom_1=AMP: how to collect advanced e-commerce data? – Part 2');
            background-size: 0px;
        } 
        #button-amp2:focus {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=read_more&event_custom_1=AMP: how to collect advanced e-commerce data? – Part 2');
            background-size: 0px;
        }
        #amp1:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_articles&event_custom_1=AAMP: a mobile-first development method to boost your SEO – Part 1');
            background-size: 0px;
        } 
        #button-amp1:focus {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=read_more&event_custom_1=AMP: a mobile-first development method to boost your SEO – Part 1');
            background-size: 0px;
        }
        #bigbro:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_articles&event_custom_1=Big Brother is watching... From the fridge?');
            background-size: 0px;
        } 
        #button-big-brother:focus {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=read_more&event_custom_1=Big Brother is watching... From the fridge?');
            background-size: 0px;
        }
    </style>
</head>

<body>
    <div id="header" class="nav">
        <div class="container">
            <a href="home?sid=<?php echo $session_id ?>">Guillaume Sinnaeve</a>
            <a href="thesis?sid=<?php echo $session_id ?>">Thesis</a>
            <a href="analyzes?sid=<?php echo $session_id ?>">Analyzes</a>
            <a href="articles?sid=<?php echo $session_id ?>" class="active">Articles</a>
            <a href="experiences?sid=<?php echo $session_id ?>">Experiences</a>
            <a href="certifications?sid=<?php echo $session_id ?>">Certifications</a>
            <a href="formations?sid=<?php echo $session_id ?>">Formations</a>
            <span class="language"><a href="/fr/articles?sid=<?php echo $session_id ?>">fr</a> | <a class="active">en</a></span>
            <a href="javascript:void(0);" class="icon" onclick="showMenu()"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div id="main">
        <div class="full-container">
            <div class="container">
                <h1>Articles</h1>
                <section>
                    <div>
                        <input type="checkbox" class="hidden chevron-input" id="atitw" name="atitw">
                        <h2>
                            <span>Interview – Guillaume Sinnaeve (fifty-five): “We have created a template to connect AT Internet and Google Tag Manager”</span>
                            <label for="atitw" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>Data Architecture</h3>
                        <h4>January 14, 2021</h4>
                        <div class="description">
                            <p>Following his experience as a Front-End developer, Guillaume Sinnaeve, a JavaScript enthusiast, decided to join the world of data in 2015 to share his expertise and take up new challenges. Guillaume Sinnaeve is Tracking & Analytics Manager at fifty-five, a data company specialized in brand services. He is in charge of the technical support of customers in their data collection projects, particularly via the Analytics Suite. In this interview, he explains how he has worked with AT Internet on the creation of a tag template within Google Tag Manager.</p>
                            <a target="_blank" href="https://blog.atinternet.com/en/interview-template-at-internet-gtm/"><button class="button" id="button-atitw">Read more</button></a>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <input type="checkbox" class="hidden chevron-input" id="gtmdebug" name="gtmdebug">
                        <h2>
                            <span>Tutorial: how to deal with GTM New Preview and Debug Modes</span>
                            <label for="gtmdebug" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>Data Architecture</h3>
                        <h4>October 21, 2020</h4>
                        <div class="description">
                            <p>As some of you may have noticed, Google recently released a new way to debug Google Tag Manager (GTM) workspaces extending Google Tag Assistant footprint.</p>

                            <p>This method has many advantages but makes it tricky to run certain tests. One of the issues we have encountered is regularly logging out of the tool. But fear not, there is an alternative solution.</p>

                            <p>You can activate GTM Preview mode without using the new Google Tag Assistant.</p>
                            <a target="_blank" href="https://teahouse.fifty-five.com/en/tutorial-how-to-deal-with-gtm-new-preview-and-debug-modes/"><button class="button" id="button-gtmdebug">Read more</button></a>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <input type="checkbox" class="hidden chevron-input" id="amp1" name="amp1">
                        <h2>
                            <span>AMP: a mobile-first development method to boost your SEO – Part 1</span>
                            <label for="amp1" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>Data Architecture</h3>
                        <h4>October 4, 2018</h4>
  
                        <div class="description">
                            <p>What do you do when you open your internet browser on your mobile and the page has not displayed in the first 5 seconds? Time seems to go on forever in these all-too-common situations, and there's a good chance you'll go to another site, much to the dismay of content editors. Avoiding this kind of disappointment is what AMP pages are all about!</p>

                            <p>So how do these mobile web pages work? What are their advantages, but also their constraints, particularly in terms of data collection?</p>

                            <a target="_blank" href="https://teahouse.fifty-five.com/en/amp-a-mobile-first-development-method-to-boost-your-seo-part-1/"><button class="button" id="button-amp1">Read more</button></a>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <input type="checkbox" class="hidden chevron-input" id="amp2" name="amp2">
                        <h2>
                            <span>AMP: how to collect advanced e-commerce data? – Part 2</span>
                            <label for="amp2" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>Data Architecture</h3>
                        <h4>October 4, 2018</h4>
                        <div class="description">
                            <p>We saw in the first part that AMP technology makes it possible to offer a better user experience on a mobile site, while improving its natural referencing and its visibility. However, it limits the use of JavaScript, which imposes certain constraints on data collection in web analysis. You have to keep in mind that as long as a solution is compatible with AMP technology, everything is possible in terms of tracking. You can proceed with or without TMS (Tag Management System).</p>

                            <p>Discover here an overview of the technical possibilities offered to brands to collect data on AMP pages with web analysis solutions, and in particular with the Enhanced Ecommerce functionality of Google Analytics.</p>

                            <p>We will see in particular:</p>
                            <ul>
                                <li>How to send e-commerce data to Google Analytics on AMP pages without TMS</li>
                                <li>How to transmit this data with Google Tag Manager (GTM)</li>
                                <li>Finally, how to send this data to any type of web analysis tool, with or without TMS</li>
                            </ul>
                            <a target="_blank" href="https://teahouse.fifty-five.com/en/amp-how-to-collect-advanced-e-commerce-data-part-2/"><button class="button" id="button-amp2">Read more</button></a>
                        </div>
                    </div>
                </section>                
                <section>
                    <div>
                        <input type="checkbox" class="hidden chevron-input" id="bigbro" name="bigbro">
                        <h2>
                            <span>Big Brother is watching... From the fridge?</span>
                            <label for="bigbro" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>Data Architecture</h3>
                        <h4>May 18, 2017</h4>

                        <div class="description">
                            <p>At fifty-five, we are used to collecting data from websites and mobile applications. That’s why the idea of grabbing “real” world information from a classic object and transmitting it to an interface immediately interested us. We have therefore studied all of the tracking possibilities in our premises by identifying the different KPIs of the objects around us.</p>

                            <p>A fun article about IoT and our experience of collecting data on a refrigerator</p>
                            
                            <a target="_blank" href="https://teahouse.fifty-five.com/en/big-brother-is-watching-from-the-fridge/"><button class="button" id="button-big-brother">Read more</button></a>
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
</body>