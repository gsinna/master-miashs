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
    <title>Certifications | Guillaume Sinnaeve</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <style type="text/css">
        #gdpr:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_certifications&event_custom_1=MOOC GDPR&event_custom_2=CNIL');
            background-size: 0px;
        }     
        #atadmin:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_certifications&event_custom_1=Analytics Suite Administrator&event_custom_2=AT Internet');
            background-size: 0px;
        } 
        #atuser:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_certifications&event_custom_1=Analytics Suite User&event_custom_2=AT Internet');
            background-size: 0px;
        }  
        #anssi:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_certifications&event_custom_1=MOOC Cybersecurity&event_custom_2=ANSSI');
            background-size: 0px;
        }  
        #tealiumiq:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_certifications&event_custom_1=Tealium Certified Technical Professional - Tealium iQ Tag Management&event_custom_2=Tealium');
            background-size: 0px;
        } 
        #adwords:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_certifications&event_custom_1=Google AdWords Fundamentals&event_custom_2=Google');
            background-size: 0px;
        } 
        #gtm:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_certifications&event_custom_1=Google Tag Manager Fundamentals&event_custom_2=Google');
            background-size: 0px;
        }  
        #tcn2:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_certifications&event_custom_1=Tag Management System certification, level 2&event_custom_2=TagCommander');
            background-size: 0px;
        }
        #tcn1:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_certifications&event_custom_1=Tag Management System certification, level 1&event_custom_2=TagCommander');
            background-size: 0px;
        }
        #gaiq:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_certifications&event_custom_1=Google Analytics Individual Qualification (GAIQ)&event_custom_2=Google');
            background-size: 0px;
        }
        #c2i:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_certifications&event_custom_1=Certification Informatique et Internet, level 1&event_custom_2=C2i');
            background-size: 0px;
        }
        #cisco:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_certifications&event_custom_1=Certificat Cisco Networking Academy&event_custom_2=Cisco');
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
            <a href="experiences?sid=<?php echo $session_id ?>">Experiences</a>
            <a href="certifications?sid=<?php echo $session_id ?>" class="active">Certifications</a>
            <a href="formations?sid=<?php echo $session_id ?>">Formations</a>
            <span class="language"><a href="/fr/certifications?sid=<?php echo $session_id ?>">fr</a> | <a class="active">en</a></span>
            <a href="javascript:void(0);" class="icon" onclick="showMenu()"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div id="main">
        <div class="full-container">
            <div class="container">
                <h1>Certifications</h1>
                <section>
                    <div class="logo">
                        <img src="/img/certifications/cnil.jpg">
                    </div>
                    <input type="checkbox" class="hidden chevron-input" id="gdpr" name="gdpr">
                    <h2>
                        <span>MOOC GDPR</span>
                        <label for="gdpr" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <h3>CNIL</h3>
                    <h4>may 2019</h4>
                    <div class="description">
                        <ul>
                            <li>The GDPR and its key concepts</li>
                            <li>Principles of data protection</li>
                            <li>The responsibilities of the actors</li>
                            <li>The DPO and compliance tools</li>
                        </ul>
                    </div>
                </section>
                <section>
                    <div class="logo">
                        <img src="/img/certifications/at.png">
                    </div>
                    <input type="checkbox" class="hidden chevron-input" id="atadmin" name="atadmin">
                    <h2>
                        <span>Analytics Suite Administrator</span>
                        <label for="atadmin" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <h3>AT Internet</h3>
                    <h4>november 2018</h4>
                    <div class="description">
                        <ul>
                            <li>Configuration</li>
                            <li>Monitor and exclude traffic</li>
                            <li>Site names and URLs</li>
                            <li>User rights</li>
                        </ul>                        
                    </div>
                </section>
                <section>
                    <div class="logo">
                        <img src="/img/certifications/at.png">
                    </div>
                    <input type="checkbox" class="hidden chevron-input" id="atuser" name="atuser">
                    <h2>
                        <span>Analytics Suite User</span>
                        <label for="atuser" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <h3>AT Internet</h3>
                    <h4>july 2018</h4>
                    <div class="description">
                        <ul>
                            <li>Project management and tagging methodologies</li>
                            <li>Implementation</li>
                            <li>Design a tagging plan</li>
                            <li>Data quality control</li>
                            <li>Traffic sources and administration</li>
                        </ul> 
                    </div>
                </section>
                <section>
                    <div class="logo">
                        <img src="/img/certifications/anssi.png">
                    </div>
                    <input type="checkbox" class="hidden chevron-input" id="anssi" name="anssi">
                    <h2>
                        <span>MOOC Cybersecurity</span>
                        <label for="anssi" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <h3>ANSSI - Agence nationale de la sécurité des systèmes d'information</h3>
                    <h4>march 2018</h4>
                    <div class="description">
                        <ul>
                            <li>Panorama of the ISS</li>
                            <li>Authentication security</li>
                            <li>Internet security</li>
                            <li>Safety of the workplace and nomadism</li>
                        </ul> 
                    </div>
                </section>
                <section>
                    <div class="logo">
                        <img src="/img/certifications/tealium.png">
                    </div>
                    <input type="checkbox" class="hidden chevron-input" id="tealiumiq" name="tealiumiq">
                    <h2>
                        <span>Tealium Certified Technical Professional - Tealium iQ Tag Management</span>
                        <label for="tealiumiq" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <h3>Tealium</h3>
                    <h4>january 2018</h4>
                    <div class="description">
                        <ul>
                            <li>Tag Management Concepts</li>
                            <li>The Data Layer</li>
                            <li>Tags</li>
                            <li>Load Rules</li>
                            <li>Extensions</li>
                            <li>Architecture and Order of Operations</li>
                            <li>Event Tracking</li>
                            <li>Troubleshooting</li>
                            <li>Initial Deployment Scenario</li>
                            <li>Tag Configuration Scenarios</li>
                            <li>AJAX Scenario</li>
                        </ul> 
                    </div>
                </section>
                <section>
                    <div class="logo">
                        <img src="/img/certifications/google.png">
                    </div>
                    <input type="checkbox" class="hidden chevron-input" id="adwords" name="adwords">
                    <h2>
                        <span>Google AdWords Fundamentals</span>
                        <label for="adwords" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <h3>Google</h3>
                    <h4>january 2017</h4>
                    <div class="description">
                        <ul>
                            <li>Benefits of online advertising and AdWords</li>
                            <li>Ad Quality</li>
                            <li>What you pay</li>
                            <li>Setting Up an Adwords Campaign</li>
                            <li>Targeting</li>
                            <li>Bid Strategies</li>
                            <li>Measuring and optimizing performance</li>
                        </ul> 
                    </div>
                </section>
                <section>
                    <div class="logo">
                        <img src="/img/certifications/google.png">
                    </div>
                    <input type="checkbox" class="hidden chevron-input" id="gtm" name="gtm">
                    <h2>
                        <span>Google Tag Manager Fundamentals</span>
                        <label for="gtm" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <h3>Google</h3>
                    <h4>january 2017</h4>
                    <div class="description">
                        <ul>
                            <li>Starting out with Google Tag Manager</li>
                            <li>Setting up Google Tag Manager</li>
                            <li>Collecting data using the Data Layer, variables, and events</li>
                            <li>Using additional tags for marketing and remarketing</li>
                        </ul> 
                    </div>
                </section>
                <section>
                    <div class="logo">
                        <img src="/img/certifications/tagco.png">
                    </div>
                    <input type="checkbox" class="hidden chevron-input" id="tcn2" name="tcn2">
                    <h2>
                        <span>Tag Management System certification, level 2</span>
                        <label for="tcn2" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <h3>TagCommander</h3>
                    <h4>may 2016</h4>
                    <div class="description">
                        <ul>
                            <li>Uses of the server side</li>
                            <li>Container creation</li>
                            <li>Adding tags</li>
                            <li>Setting up trigger rules</li>
                            <li>Data quality control</li>
                        </ul> 
                    </div>
                </section>
                <section>
                    <div class="logo">
                        <img src="/img/certifications/google.png">
                    </div>
                    <input type="checkbox" class="hidden chevron-input" id="gaiq" name="gaiq">
                    <h2>
                        <span>Google Analytics Individual Qualification (GAIQ)</span>
                        <label for="gaiq" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <h3>Google</h3>
                    <h4>february 2016, january 2018, november 2019</h4>
                    <div class="description">
                        <ul>
                            <li>Introducing Google Analytics</li>
                            <li>The Google Analytics Interface</li>
                            <li>Basic Reports</li>
                            <li>Basic Campaign and Conversion Tracking</li>
                            <li>Data Collection and Processing</li>
                            <li>Setting Up Data Collection and Configuration</li>
                            <li>Advanced Analysis Tools and Techniques</li>
                            <li>Advanced Marketing Tools</li>
                        </ul> 
                    </div>
                </section>
                <section>
                    <div class="logo">
                        <img src="/img/certifications/tagco.png">
                    </div>
                    <input type="checkbox" class="hidden chevron-input" id="tcn1" name="tcn1">
                    <h2>
                        <span>Tag Management System certification, level 1</span>
                        <label for="tcn1" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <h3>TagCommander</h3>
                    <h4>september 2015</h4>
                    <div class="description">
                        <ul>
                            <li>Introducing TagCommander</li>
                            <li>Tag structure</li>
                            <li>Tag implementation</li>
                            <li>Implementation quality control</li>
                            <li>Container synchronization mode</li>
                        </ul> 
                    </div>
                </section>
                <section>
                    <div class="logo">
                        <img src="/img/certifications/c2i.png">
                    </div>
                    <input type="checkbox" class="hidden chevron-input" id="c2i" name="c2i">
                    <h2>
                        <span>Certification Informatique et Internet, level 1</span>
                        <label for="c2i" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <h3>c2i</h3>
                    <h4>march 2011</h4>
                    <div class="description">
                        <ul>
                            <li>Work in an evolving digital environment</li>
                            <li>Being responsible in the digital age</li>
                            <li>Produce, process, use and distribute digital documents</li>
                            <li>Organize information research in the digital age</li>
                            <li>Network, communicate and collaborate</li>
                        </ul> 
                    </div>
                </section>
                <section>
                    <div class="logo">
                        <img src="/img/certifications/cisco.jpg">
                    </div>
                    <input type="checkbox" class="hidden chevron-input" id="cisco" name="cisco">
                    <h2>
                        <span>Certificat Cisco Networking Academy</span>
                        <label for="cisco" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <h3>Cisco</h3>
                    <h4>march 2010</h4>
                    <div class="description">
                        <ul>
                            <li>Networks</li>
                            <li>Routers and routing</li>
                            <li>Switching and intermediate routing</li>
                            <li>WAN technology</li>
                        </ul>
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