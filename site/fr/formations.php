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
            <a href="thesis?sid=<?php echo $session_id ?>">Mémoire</a>
            <a href="analyzes?sid=<?php echo $session_id ?>">Analyses</a>
            <a href="articles?sid=<?php echo $session_id ?>">Articles</a>
            <a href="experiences?sid=<?php echo $session_id ?>">Expériences</a>
            <a href="certifications?sid=<?php echo $session_id ?>">Certifications</a>
            <a href="formations?sid=<?php echo $session_id ?>" class="active">Formations</a>
            <span class="language"><a class="active">fr</a> | <a href="/en/formations?sid=<?php echo $session_id ?>">en</a></span>
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
                        <h3>Université de Lille</h3>
                        <h4>juin 2020 – Aujourd’hui</h4>
                        <div class="description">
                            <ul>
                                <li>Savoir utiliser les méthodes d’analyse de trafic web</li>
                                <li>Savoir étudier les comportements clients sur un site web</li>
                                <li>Maîtriser les notions de référencement des sites web</li>
                                <li>Maîtriser les méthodes de recommandation sur le web</li>
                                <li>Savoir utiliser des méthodes statistiques et économétriques</li>
                                <li>Maîtriser le traitement informatique des données et de la modélisation</li>
                                <li>Maîtriser les techniques de traitement de l’information pour l’entreprise</li>
                                <li>Savoir élaborer des rapportss chiffrés et des tableaux de bords</li>
                                <li>Savoir communiquer des informations et des résultats</li>
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
                            <span>Diplôme de Marketing Digital</span>
                            <label for="shaw" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>Shaw Academy</h3>
                        <h4>2015</h4>
                        <div class="description">
                            <ul>
                                <li>Commerce électronique</li>
                                <li>Développement Web et conception Web</li>
                                <li>Publicité au clic</li>
                                <li>Affiliation facile, acquérez de nouveaux clients</li>
                                <li>Source de clients à long terme</li>
                                <li>Convertissez plus pour moins</li>
                                <li>Analyse des données et retour sur investissement</li>
                                <li>Réseaux sociaux et réputation en ligne</li>
                                <li>Stratégie, construire une plateforme de réussite</li>
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
                            <span>Maquettiste Développeur Multimédia</span>
                            <label for="cetec" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>Cetec-INFO</h3>
                        <h4>2012 - 2013 (1 an)</h4>
                        <div class="description">
                            <ul>
                                <li>Techniques d'expression et de communication</li>
                                <li>Recherche d'images et droits d'image</li>
                                <li>Communication visuelle</li>
                                <li>Rédaction de scénario et conception de projet</li>
                                <li>Conception de projet et production multimédia</li>
                                <li>Création graphique</li>
                                <li>Édition d'image</li>
                                <li>Interactivité, intégration et développement Web</li>
                                <li>Serveur et bases de données relationnelles</li>
                                <li>Gestionnaires de contenu CMS</li>
                                <li>Conception de sites Web</li>
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
                        <h3>Université de Marne-la-Vallée</h3>
                        <h4>2011 - 2012 (1 an)</h4>
                        <div class="description">
                            <ul>
                                <li>Histoire des arts visuels</li>
                                <li>Programmation artistique et informatique</li>
                                <li>Théorie et esthétique des nouveaux médias</li>
                                <li>Recherche et création numérique</li>
                                <li>Imagerie et médias numériques</li>
                                <li>Actualités des arts</li>
                                <li>Patrimoine et infographie</li>
                                <li>Technologies Web</li>
                                <li>Synthèse d'images</li>
                                <li>Esthétique et philosophie de l'art</li>
                                <li>Théorie des images</li>
                                <li>Art, design et édition numérique</li>
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
                        <h3>IUT de Vélizy, Université de Versailles Saint-Quentin-en-Yvelines</h3>
                        <h4>2009 - 2011 (2 ans)</h4>
                        <div class="description">
                            <ul>
                                <li>Théories de l'information et de la communication</li>
                                <li>Esthétique, écrits, langues et communication</li>
                                <li>Gestion de projet, connaissance des organisations, projet personnel et professionnel</li>
                                <li>Culture scientifique et traitement de l'information</li>
                                <li>Réseaux et services sur réseaux</li>
                                <li>Outils et méthodes informatiques pour le multimédia</li>
                                <li>Création et intégration de médias numériques</li>
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
                            <span>Participation au programme d'égalité des chances "Une grande école, Pourquoi Pas Moi ?"</span>
                            <label for="essec" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>ESSEC Business School</h3>
                        <h4>2006 - 2009 (3 ans)</h4>
                        <div class="description">
                            <p>Formation pratique :</p>
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
                    <h2>Baccalauréat Scientifique, spécialité Mathématiques</h2>
                    <h3>Lycée de l'Hautil, Jouy-le-Moutier</h3>
                    <h4>2006 - 2009 (3 ans)</h4>
                </section>
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