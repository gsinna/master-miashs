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
    <title>Formations | Guillaume Sinnaeve</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <style type="text/css">
        #miashs:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_formations&event_custom_1=MIASHS&event_custom_2=University of Lille');
            background-size: 0px;
        }    
        #shaw:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_formations&event_custom_1=Diploma in Digital Marketing&event_custom_2=Shaw Academy');
            background-size: 0px;
        }  
        #cetec:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_formations&event_custom_1=Multimedia Developer Designer&event_custom_2=Cetec-INFO');
            background-size: 0px;
        }
        #evman:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_formations&event_custom_1=Licence EVMAN&event_custom_2=University of Marne-la-Vallée');
            background-size: 0px;
        }  
        #dut:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_formations&event_custom_1=DUT SRC&event_custom_2=IUT of Vélizy');
            background-size: 0px;
        }  
        #essec:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_formations&event_custom_1=PQPM&event_custom_2=ESSEC');
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
            <a href="certifications?sid=<?php echo $session_id ?>">Certifications</a>
            <a href="formations?sid=<?php echo $session_id ?>" class="active">Formations</a>
            <span class="language"><a href="/fr/formations?sid=<?php echo $session_id ?>">fr</a> | <a class="active">en</a></span>
            <a href="javascript:void(0);" class="icon" onclick="showMenu()"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div id="main">
        <div class="full-container">
            <div class="container">
                <h1>Formations</h1>
                <section>
                    <div>
                        <div class="logo">
                            <img src="/img/formations/uvlille.png">
                        </div>
                        <input type="checkbox" class="hidden chevron-input" id="miashs" name="miashs">
                        <h2>
                            <span>Master Mathématiques et Informatiques Appliquées aux Sciences Humaines et Sociales, parcours Web Analyste (VAE)</span>
                            <label for="miashs" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>University of Lille</h3>
                        <h4>june 2020 – today</h4>
                        <div class="description">
                            <ul>
                                <li>Know how to use web traffic analysis methods</li>
                                <li>Knowing how to study customer behavior on a website</li>
                                <li>Master the notions of SEO</li>
                                <li>Master the methods of recommendation on web</li>
                                <li>Knowing how to use statistical and econometric methods</li>
                                <li>Master the computer processing of data and modeling</li>
                                <li>Mastering information processing techniques for the company</li>
                                <li>Knowing how to draw up quantified reports and dashboards</li>
                                <li>Knowing how to communicate information and results</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <div class="logo">
                            <img src="/img/formations/shaw-academy.jpg">
                        </div>
                        <input type="checkbox" class="hidden chevron-input" id="shaw" name="shaw">
                        <h2>
                            <span>Diploma in Digital Marketing</span>
                            <label for="shaw" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>                        
                        <h3>Shaw Academy</h3>
                        <h4>2015</h4>
                        <div class="description">
                            <ul>
                                <li>E-commerce</li>
                                <li>Web development and web design</li>
                                <li>Click advertising</li>
                                <li>Easy affiliation, acquire new customers</li>
                                <li>Source of long-term customers</li>
                                <li>Convert more for less</li>
                                <li>Data analysis and return on investment</li>
                                <li>Social networks and online reputation</li>
                                <li>Strategy, build a platform for success</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <div class="logo">
                            <img src="/img/formations/cetec.jpg">
                        </div>
                        <input type="checkbox" class="hidden chevron-input" id="cetec" name="cetec">
                        <h2>
                            <span>Multimedia Developer Designer</span>
                            <label for="cetec" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>Cetec-INFO</h3>
                        <h4>2012 - 2013 (1 year)</h4>
                        <div class="description">
                            <ul>
                                <li>Expression and communication techniques</li>
                                <li>Image search and image rights</li>
                                <li>Visual communication</li>
                                <li>Script writing and project design</li>
                                <li>Project design and multimedia production</li>
                                <li>Graphic creation</li>
                                <li>Image Editing</li>
                                <li>Interactivity, integration and web development</li>
                                <li>Server and relational databases</li>
                                <li>CMS content managers</li>
                                <li>Web design</li>
                            </ul>                    
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <div class="logo">
                            <img src="/img/formations/upem.png">
                        </div>
                        <input type="checkbox" class="hidden chevron-input" id="evman" name="evman">
                        <h2>
                            <span>Licence Etudes Visuelles Multimédia et Arts Numériques</span>
                            <label for="evman" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>University of Marne-la-Vallée</h3>
                        <h4>2011 - 2012 (1 year)</h4>
                        <div class="description">
                            <ul>
                                <li>History of visual arts</li>
                                <li>Artistic and computer programming</li>
                                <li>Theory and aesthetics of new media</li>
                                <li>Research and digital creation</li>
                                <li>Imagery and digital media</li>
                                <li>Arts News</li>
                                <li>Heritage and infographics</li>
                                <li>Web technologies</li>
                                <li>Image synthesis</li>
                                <li>Aesthetics and philosophy of art</li>
                                <li>Image theory</li>
                                <li>Art, design and digital publishing</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <div class="logo">
                            <img src="/img/formations/uvsq.png">
                        </div>
                        <input type="checkbox" class="hidden chevron-input" id="dut" name="dut">
                        <h2>
                            <span>DUT Services et Réseaux de Communication</span>
                            <label for="dut" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>IUT of Vélizy, University of Versailles Saint-Quentin-en-Yvelines</h3>
                        <h4>2009 - 2011 (2 years)</h4>
                        <div class="description">
                            <ul>
                                <li>Information and communication theories</li>
                                <li>Aesthetics, writings, languages and communication</li>
                                <li>Project management, knowledge of organizations, personal and professional project</li>
                                <li>Scientific culture and information processing</li>
                                <li>Networks and network services</li>
                                <li>Computer tools and methods for multimedia</li>
                                <li>Creation and integration of digital media</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <div class="logo">
                            <img src="/img/formations/essec.jpg">
                        </div>
                        <input type="checkbox" class="hidden chevron-input" id="essec" name="essec">
                        <h2>
                            <span>Participation in the equal opportunities program "Une grande école, Pourquoi Pas Moi ?"</span>
                            <label for="essec" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>ESSEC Business School</h3>
                        <h4>2006 - 2009 (3 years)</h4>
                        <div class="description">
                            <p>Fpractical training:</p>
                            <ul>
                                <li>Pao Bang</li>
                                <li>Cisco Systems</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="logo">
                        <img src="/img/formations/jlm.jpg">
                    </div>
                    <div class="title">
                        <h2>Scientific Baccalaureate, Mathematics specialty</h2>
                        <h3>Hautil high school, Jouy-le-Moutier</h3>
                        <h4>2006 - 2009 (3 years)</h4>
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