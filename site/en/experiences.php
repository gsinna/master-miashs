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
    <title>Experiences | Guillaume Sinnaeve</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <style type="text/css">
        #tam:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_experiences&event_custom_1=Tracking and Analytics Manager&event_custom_2=fifty-five');
            background-size: 0px;
        } 
        #tal:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_experiences&event_custom_1=Tracking and Analytics Lead&event_custom_2=fifty-five');
            background-size: 0px;
        }
        #ts:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_experiences&event_custom_1=Tracking Specialist&event_custom_2=fifty-five');
            background-size: 0px;
        }
        #wfed:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_experiences&event_custom_1=Webmaster / Front-End Developer&event_custom_2=relaymark');
            background-size: 0px;
        }
        #owner:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_experiences&event_custom_1=Owner&event_custom_2=Auto-Entrepreneur');
            background-size: 0px;
        }
        #equi:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_experiences&event_custom_1=Equipier polyvalent&event_custom_2=McDonald\'s Corporation');
            background-size: 0px;
        }
        #webma:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_experiences&event_custom_1=Webmaster / Webdesigner / Integrator (traineeship)&event_custom_2=Intuito');
            background-size: 0px;
        }
        #camera:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_experiences&event_custom_1=Camera Operator, Editor and Post-Production Assistant&event_custom_2=Muse en Scène');
            background-size: 0px;
        }
        #trainee:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_experiences&event_custom_1=Traineeship&event_custom_2=360 degrés Services');
            background-size: 0px;
        }
        #fifty-five:focus {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=outbound_link&event_custom_1=fifty-five');
            background-size: 0px;
        }
        #relaymark:focus {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=outbound_link&event_custom_1=relaymark');
            background-size: 0px;
        }
        #relaymark-blog:focus {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=outbound_link&event_custom_1=relaymark-blog');
            background-size: 0px;
        }
        #ladresse-bienvenue:focus {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=outbound_link&event_custom_1=ladresse-bienvenue');
            background-size: 0px;
        }
        #ladresse-blog:focus {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=outbound_link&event_custom_1=ladresse-blog');
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
            <a href="articles?sid=<?php echo $session_id ?>">Articles</a>
            <a href="experiences?sid=<?php echo $session_id ?>" class="active">Experiences</a>
            <a href="certifications?sid=<?php echo $session_id ?>">Certifications</a>
            <a href="formations?sid=<?php echo $session_id ?>">Formations</a>
            <span class="language"><a href="/fr/experiences?sid=<?php echo $session_id ?>">fr</a> | <a class="active">en</a></span>
            <a href="javascript:void(0);" class="icon" onclick="showMenu()"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div id="main">
        <div class="full-container">
            <div class="container">
                <h1>Experiences</h1>
                <section>
                    <div>
                        <div class="logo">
                            <img src="/img/experiences/55.png">
                        </div>
                        <input type="checkbox" class="hidden chevron-input" id="tam" name="tam">
                        <h2>
                            <span>Tracking & Analytics Manager</span>
                            <label for="tam" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>fifty-five (Paris, Île-de-France, France)</h3>
                        <h4>january 2020 – Today</h4>
                        <div class="description">
                            <p>Expertise</p>
                            <ul>
                                <li>Participation in the data collection strategy on Google's new analytical tools</li>
                                <li>Development of a data measurement plan for our customers and developers for Google Analytics 4</li>
                                <li>Weekly meeting to provide solutions to new monitoring and analysis needs</li>
                                <li>Construction of a reference document on good practices</li>
                            </ul>
                            <p>Innovation</p>
                            <ul>
                                <li>Elaboration and development of AT Internet variable and tag templates in Google Tag Management</li>
                                <li>Creation of custom template of Google Tag Manager variables and tags to facilitate the configuration of analysis tools</li>
                                <li>Realization of a data quality control tool via Cloud Function, Big Query and Data Studio for mobile applications</li>
                            </ul>
                            <p>GDPR</p>
                                <li>Development of a user consent tool for cookies in accordance with the RGPD, visible on <a id="fifty-five" href="https://fifty-five.com/" target="_blank">www.fifty-five.com</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <div class="logo">
                            <img src="/img/experiences/55.png">
                        </div>
                        <input type="checkbox" class="hidden chevron-input" id="tal" name="tal">
                        <h2>
                            <span>Tracking & Analytics Lead</span>
                            <label for="tal" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>fifty-five (Paris, Île-de-France, France)</h3>
                        <h4>january 2018 – december 2019 (2 years)</h4>
                        <div class="description">
                            <p>Project management (different clients with several projects at the same time):</p>
                            <ul>
                                <li>Help the Consulting team to define the tagging plans adapted to clients' needs</li>
                                <li>Assignment of a Tracking Specialist to define technical requirements and configure tools</li>
                                <li>Verification and publication of the configurations made by the Tracking Specialist</li>
                                <li>Respect of client deadlines</li>
                            </ul>
                            <p>Management:</p>
                            <ul>
                                <li>Weekly meeting with 7 Tracking Specialists to follow their missions and objectives</li>
                            </ul>
                            <p>Technical Experience:</p>
                            <ul>
                                <li>Help the technical team to optimize the code and resolve bugs</li>
                                <li>Technical referent in the team on mobile applications</li>
                                <li>Development of a collecting data methodology in JavaScript compatible on all browsers</li>
                                <li>Creation of a conversational marketing bot for shopping centers</li>
                            </ul>
                            <p>Knowledge management:</p>
                            <ul>
                                <li>Organization of a weekly meeting to build the skills of the team</li>
                                <li>Evangelization of Tracking and Analytics inside other teams</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <div class="logo">
                            <img src="/img/experiences/55.png">
                        </div>
                        <input type="checkbox" class="hidden chevron-input" id="ts" name="ts">
                        <h2>
                            <span>Tracking Specialist</span>
                            <label for="ts" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>fifty-five (Paris, Île-de-France, France)</h3>
                        <h4>august 2015 – december 2017 (2 years and 5 months)</h4>
                        <div class="description">
                            <p>Specialization in website and mobile application tracking</p>
                            <p>Support for clients in their offices (AXA France, Accor Hotels, Vente Privée)</p>
                            <ul>
                                <li>Realization, implementation and quality assessment of Web and Mobile measurement plans (Android and iOS)</li>
                                <li>Technical support to developers during implementation</li>
                                <li>Implementation of all types of tags (functional, analytical, media, social, etc.) through a TMS</li>
                                <li>Definition and customization of strategic objectives adapted to customer needs</li>
                                <li>Creation and analysis of Google Analytics and AT Internet data reports</li>
                                <li>Specific JavaScript development to improve the relevance of the data collected</li>
                                <li>Implementation of synthetic documents and detailed supports intended for training</li>
                                <li>Configuration and installation of a Raspberry Pi 3 to create connected objects in the company</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <div class="logo">
                            <img src="/img/experiences/relaymark.png">
                        </div>
                        <input type="checkbox" class="hidden chevron-input" id="wfed" name="wfed">
                        <h2>
                            <span>Webmaster / Front-End Developer</span>
                            <label for="wfed" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>relaymark (Ivry sur Seine, Île-de-France, France)</h3>
                        <h4>october 2013 – july 2015 (1 year and 10 months)</h4>
                        <div class="description">
                            <ul>
                                <li>Monitoring and updating of the company's web solutions</li>
                                <li>Creation of JavaScript animations, image processing and integration on existing platforms</li>
                                <li>Administration of websites and internal solutions</li>
                                <li>Planning, implementation and management of emailing campaigns</li>
                                <li>Creation of forms and monitoring of results (satisfaction surveys, orders, registration management)</li>
                                <li>Establishment of commercial offers for sales networks (leaflets, communication kit)</li>
                                <li>Retention and development of existing customers</li>
                                <li>Recommendation and implementation of offers and product catalogs Customers online</li>
                                <li>Design, development, integration, publication and referencing of <a id="relaymark" target="_blank" href="http://www.relaymark.com">relaymark.com</a>, <a id="relaymark-blog" target="_blank" href="http://www.relaymark.com/blog">relaymark.com/blog</a>, <a id="ladresse-bienvenue" target="_blank" href="https://www.ladresse-bienvenue.com/">ladresse-bienvenue.com</a> and <a id="ladresse-blog" target="_blank" href="http://www.ladresse-blog.com/">ladresse-blog.com</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <div class="logo">
                            <img src="/img/experiences/gs.png">
                        </div>
                        <input type="checkbox" class="hidden chevron-input" id="owner" name="owner">
                        <h2>
                            <span>Owner</span>
                            <label for="owner" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>Auto-Entrepreneur</h3>
                        <h4>march 2013 – october 2014 (1 year and 8 months)</h4>
                        <div class="description">
                            <ul>
                                <li>Graphic design</li>
                                <li>Website development to strengthen corporate communication</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <div class="logo">
                            <img src="/img/experiences/intuito.png">
                        </div>
                        <input type="checkbox" class="hidden chevron-input" id="webma" name="webma">
                        <h2>
                            <span>Webmaster / Webdesigner / Integrator (traineeship)</span>
                            <label for="webma" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>Intuito (Paris, Île-de-France, France)</h3>
                        <h4>april 2013 – june 2013 (3 months)</h4>
                        <div class="description">
                            <ul>
                                <li>Website design and development of <a target="_blank" href="http://www.intuito.fr/">intuito.fr</a></li>
                            </ul>
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