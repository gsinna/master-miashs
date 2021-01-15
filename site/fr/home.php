<?php 
    include '../analytics/collect.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="author" content="Guillaume Sinnaeve">
    <meta name="keywords" content="Google Tag Manager, Google Analytics, TMS, Tag Management System, Firebase, TagCommander, Tealium, AT Internet, Web, App, Data">
    <meta name="description" content="Guillaume Sinnaeve est un expert de la collecte de données, sur le Web et les applications, avec et sans TMS.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Expert TMS et Analytics sur le Web et les Apps | Guillaume Sinnaeve</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <style type="text/css">
        .call-me:focus {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=call_me');
            background-size: 0px;
        }
        #tms:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_competences&event_custom_1=TMS');
            background-size: 0px;
        } 
        #analytics:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_competences&event_custom_1=Analytics');
            background-size: 0px;
        }    
        #gcp:checked + h2  {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_competences&event_custom_1=GCP');
            background-size: 0px;
        }    
        #apis:checked + h2  {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_competences&event_custom_1=Google APIs');
            background-size: 0px;
        }   
        #others:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_competences&event_custom_1=Others');
            background-size: 0px;
        }  
    </style>
</head>

<body>
    <div id="header" class="nav">
        <div class="container">
            <a href="home?sid=<?php echo $session_id ?>" class="active">Guillaume Sinnaeve</a>
            <a href="thesis?sid=<?php echo $session_id ?>">Mémoire</a>
            <a href="analyzes?sid=<?php echo $session_id ?>">Analyses</a>
            <a href="articles?sid=<?php echo $session_id ?>">Articles</a>
            <a href="experiences?sid=<?php echo $session_id ?>">Expériences</a>
            <a href="certifications?sid=<?php echo $session_id ?>">Certifications</a>
            <a href="formations?sid=<?php echo $session_id ?>>">Formations</a>
            <span class="language"><a class="active">fr</a> | <a href="/en/home?sid=<?php echo $session_id ?>">en</a></span>
            <a href="javascript:void(0);" class="icon" onclick="showMenu()"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div id="main">
        <div class="full-container">
            <div class="container">                
                <div id="me-picture">
                    <img src="/img/me.png">
                </div>
                <div id="me-description">
                    <h1>Guillaume Sinnaeve</h1>
                    <h2>&laquo; Papa Geek et mari connecté, je suis également un amoureux de la data &raquo;</h2>
                    <p>C'est en 2015 que j'ai rencontré pour la première fois le monde de la data. Et dès le début, nous nous sommes plu, à base de "GTM... moi non plus".</p>
                    <p>Après plusieurs années d'expertises, c'est avec plaisir et le sourire que je souhaite valider mes acquis via un Master Mathématiques et Informatique Appliquées aux Sciences Humaines et Sociales (MIASHS) parcours web analyse.</p>
                    <p>Ce site Web expérimental et non commercial propose la mise en place d'un outil de collecte de données statistiques sans cookies et sans JavaScript</p>
                    <p>Si vous souhaitez me contacter, n'hésitez pas. Cela ne coûte rien et un échange est toujours enrichissant.</p>
                    <a href="tel:+33695986533"><button class="button call-me"><i class="fa fa-phone"></i> +33 6 95 98 65 33</button></a>
                </div>
            </div>
        </div>
        <div class="full-container">
            <div class="container about-me">
                <h1>Découvrez moi également en vidéo</h1>
                <div class="video">
                    <span id="video">
                    <iframe src="https://www.youtube.com/embed/6U_Wh6YlMBg?enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;" allowfullscreen></iframe></span>
                </div>
            </div>            
        </div>
        <div class="full-container">
            <div class="container about-me">
                <h1>Compétences</h1>
                <div>
                    <input type="checkbox" class="hidden chevron-input" id="tms" name="tms">                     
                    <h2>
                        <span>Tag Management System (TMS)</span>
                        <label for="tms" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <div class="competences">
                        <div class="large-25 medium-50 small-100">
                            <img src="/img/competences/gtm.png">
                            <p>Google Tag Manager</p>
                        </div>
                        <div class="large-25 medium-50 small-100">
                            <img src="/img/competences/tagco.jpg">
                            <p>Tag Commander</p>
                        </div>
                        <div class="large-25 medium-50 small-100">
                            <img src="/img/competences/tealium.jpg">
                            <p>Tealium iQ Tag Management</p>
                        </div>
                        <div class="large-25 medium-50 small-100">
                            <img src="/img/competences/dtm.png">
                            <p>Adobe Dynamic Tag Management</p>
                        </div>
                    </div>                
                </div>
                <div>
                    <input type="checkbox" class="hidden chevron-input" id="analytics" name="analytics">            
                    <h2>
                        <span>Outils d'Analyses</span>
                        <label for="analytics" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <div class="competences">
                        <div class="large-33 medium-50 small-100">
                            <img src="/img/competences/ga.jpg">
                            <p>Google Analytics</p>
                        </div>
                        <div class="large-34 medium-50 small-100">
                            <img src="/img/competences/firebase.png">
                            <p>Firebase Analytics</p>
                        </div>
                        <div class="large-33 medium-100 small-100">
                            <img src="/img/competences/at.png">
                            <p>AT Internet</p>
                        </div>
                    </div>    
                </div>      
                <div>     
                    <input type="checkbox" class="hidden chevron-input" id="gcp" name="gcp">
                    <h2>
                        <span>Google Cloud Platform</span>
                        <label for="gcp" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <div class="competences">
                        <div class="large-25 medium-50 small-100">
                            <img src="/img/competences/bq.png">
                            <p>BigQuery</p>
                        </div>
                        <div class="large-25 medium-50 small-100">
                            <img src="/img/competences/cf.png">
                            <p>Cloud Functions</p>
                        </div>
                        <div class="large-25 medium-50 small-100">
                            <img src="/img/competences/gcs.png">
                            <p>Storage</p>
                        </div>
                        <div class="large-25 medium-50 small-100">
                            <img src="/img/competences/gapi.png">
                            <p>Google APIs</p>
                        </div>
                    </div>  
                </div>
                <div>
                    <input type="checkbox" class="hidden chevron-input" id="apis" name="apis">
                    <h2>
                        <span>Outils et APIs Google</span>
                        <label for="apis" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <div class="competences">
                        <div class="large-25 medium-50 small-100">
                            <img src="/img/competences/gdocs.png">
                            <p>Docs</p>
                        </div>
                        <div class="large-25 medium-50 small-100">
                            <img src="/img/competences/gsheets.png">
                            <p>Sheets</p>
                        </div>
                        <div class="large-25 medium-50 small-100">
                            <img src="/img/competences/gslides.png">
                            <p>Slides</p>
                        </div>
                        <div class="large-25 medium-50 small-100">
                            <img src="/img/competences/gforms.png">
                            <p>Forms</p>
                        </div>
                    </div>     
                </div>     
                <div>        
                    <input type="checkbox" class="hidden chevron-input" id="others" name="others">
                    <h2>
                        <span>Autres</span>
                        <label for="others" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <div class="competences">
                        <div class="large-25 medium-50 small-100">
                            <img src="/img/competences/ds.png">
                            <p>Google Data Studio</p>
                        </div>
                        <div class="large-25 medium-50 small-100">
                            <img src="/img/competences/optimize.png">
                            <p>Google Optimize</p>
                        </div>
                        <div class="large-25 medium-50 small-100">
                            <img src="/img/competences/dialogflow.jpg">
                            <p>Google Dialogflow</p>
                        </div>
                        <div class="large-25 medium-50 small-100">
                            <img src="/img/competences/chatbase.jpg">
                            <p>Google Chatbase</p>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <div id="footer">
        <div class="container">
            <p><a href="/fr/privacy-policy?sid=<?php echo $session_id ?>">Politique de confidentialité</a></p>
            <p>© 2020 Guillaume Sinnaeve | Site Web expérimental et non commercial</p>
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