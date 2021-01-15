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
            <a href="thesis?sid=<?php echo $session_id ?>">Mémoire</a>
            <a href="analyzes?sid=<?php echo $session_id ?>">Analyses</a>
            <a href="articles?sid=<?php echo $session_id ?>">Articles</a>
            <a href="experiences?sid=<?php echo $session_id ?>">Expériences</a>
            <a href="certifications?sid=<?php echo $session_id ?>" class="active">Certifications</a>
            <a href="formations?sid=<?php echo $session_id ?>">Formations</a>
            <span class="language"><a class="active">fr</a> | <a href="/en/certifications?sid=<?php echo $session_id ?>">en</a></span>
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
                        <span>MOOC L'Atelier RGPD</span>
                        <label for="gdpr" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <h3>CNIL</h3>
                    <h4>mai 2019</h4>
                    <div class="description">
                        <ul>
                            <li>Le RGPD et ses notions clés</li>
                            <li>Les principes de la protection des données</li>
                            <li>Les responsabilités des acteurs</li>
                            <li>Le DPO et les outils de la conformité</li>
                        </ul>
                    </div>
                </section>
                <section>
                    <div class="logo">
                        <img src="/img/certifications/at.png">
                    </div>
                    <input type="checkbox" class="hidden chevron-input" id="atadmin" name="atadmin">
                    <h2>
                        <span>Administrateur Analytics Suite</span>
                        <label for="atadmin" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <h3>AT Internet</h3>
                    <h4>novembre 2018</h4>
                    <div class="description">
                        <ul>
                            <li>Configuration</li>
                            <li>Surveiller et exclure du trafic</li>
                            <li>Noms et URLs des sites</li>
                            <li>Droits utilisateurs</li>
                        </ul>                        
                    </div>
                </section>
                <section>
                    <div class="logo">
                        <img src="/img/certifications/at.png">
                    </div>
                    <input type="checkbox" class="hidden chevron-input" id="atuser" name="atuser">
                    <h2>
                        <span>Utilisateur Analytics Suite</span>
                        <label for="atuser" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <h3>AT Internet</h3>
                    <h4>juillet 2018</h4>
                    <div class="description">
                        <ul>
                            <li>Gestion de projet et méthodologies de marquage</li>
                            <li>Implémentation</li>
                            <li>Concevoir un plan de marquage</li>
                            <li>Contrôle qualité de la donnée</li>
                            <li>Sources de trafic et administration</li>
                        </ul> 
                    </div>
                </section>
                <section>
                    <div class="logo">
                        <img src="/img/certifications/anssi.png">
                    </div>
                    <input type="checkbox" class="hidden chevron-input" id="anssi" name="anssi">
                    <h2>
                        <span>MOOC Cybersécurité</span>
                        <label for="anssi" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <h3>ANSSI - Agence nationale de la sécurité des systèmes d'information</h3>
                    <h4>mars 2018</h4>
                    <div class="description">
                        <ul>
                            <li>Panorama de la SSI</li>
                            <li>Sécurité de l'authentification</li>
                            <li>Sécurité sur Internet</li>
                            <li>Sécurité du poste de travail et du nomadisme</li>
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
                    <h4>janvier 2018</h4>
                    <div class="description">
                        <ul>
                            <li>Concept de gestion des balises</li>
                            <li>La couche de données</li>
                            <li>Tags</li>
                            <li>Règles de chargement</li>
                            <li>Extensions</li>
                            <li>Architecture et ordre des opérations</li>
                            <li>Suivi des événements</li>
                            <li>Dépannage</li>
                            <li>Scénario de déploiement initial</li>
                            <li>Scénarios de configuration des balises</li>
                            <li>Scénario AJAX</li>
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
                    <h4>janvier 2017</h4>
                    <div class="description">
                        <ul>
                            <li>Avantages de la publicité en ligne et d'AdWords</li>
                            <li>Qualité de l'annonce</li>
                            <li>Investissement</li>
                            <li>Configurer une campagne AdWords</li>
                            <li>Ciblage</li>
                            <li>Stratégies d'enchères</li>
                            <li>Mesurer et optimiser les performances</li>
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
                    <h4>janvier 2017</h4>
                    <div class="description">
                        <ul>
                            <li>Commencer avec Google Tag Manager</li>
                            <li>Configurer Google Tag Manager</li>
                            <li>Collecte de données à l'aide de la couche de données, des variables et des événements</li>
                            <li>Utilisation de balises supplémentaires pour le marketing et le remarketing</li>
                        </ul> 
                    </div>
                </section>
                <section>
                    <div class="logo">
                        <img src="/img/certifications/tagco.png">
                    </div>
                    <input type="checkbox" class="hidden chevron-input" id="tcn2" name="tcn2">
                    <h2>
                        <span>Tag Management System certification, niveau 2</span>
                        <label for="tcn2" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <h3>TagCommander</h3>
                    <h4>mai 2016</h4>
                    <div class="description">
                        <ul>
                            <li>Les utilisations du server side</li>
                            <li>Création de conteneur</li>
                            <li>Ajout de tags</li>
                            <li>Mise en place de règles de déclenchement</li>
                            <li>Contrôle qualité de la donnée</li>
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
                    <h4>février 2016, janvier 2018, novembre 2019</h4>
                    <div class="description">
                        <ul>
                            <li>Présentation de Google Analytics</li>
                            <li>L'interface Google Analytics</li>
                            <li>Rapports de base</li>
                            <li>Campagne de base et suivi des conversions</li>
                            <li>Collecte et traitement des données</li>
                            <li>Configuration et mise en place de la collecte des données</li>
                            <li>Outils et techniques d'analyse avancés</li>
                            <li>Outils marketing avancés</li>
                        </ul> 
                    </div>
                </section>
                <section>
                    <div class="logo">
                        <img src="/img/certifications/tagco.png">
                    </div>
                    <input type="checkbox" class="hidden chevron-input" id="tcn1" name="tcn1">
                    <h2>
                        <span>Tag Management System certification, niveau 1</span>
                        <label for="tcn1" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <h3>TagCommander</h3>
                    <h4>septembre 2015</h4>
                    <div class="description">
                        <ul>
                            <li>Présentation de TagCommander</li>
                            <li>Structure du tag</li>
                            <li>Implémentation du tag</li>
                            <li>Recette de l'implémentation</li>
                            <li>Mode de synchronisation du conteneur</li>
                        </ul> 
                    </div>
                </section>
                <section>
                    <div class="logo">
                        <img src="/img/certifications/c2i.png">
                    </div>
                    <input type="checkbox" class="hidden chevron-input" id="c2i" name="c2i">
                    <h2>
                        <span>Certification Informatique et Internet, niveau 1</span>
                        <label for="c2i" class="chevron fa fa-chevron-circle-down"></label>
                    </h2>
                    <h3>C2i</h3>
                    <h4>mars 2011</h4>
                    <div class="description">
                        <ul>
                            <li>Travailler dans un environnement numérique évolutif</li>
                            <li>Être responsable à l’ère du numérique</li>
                            <li>Produire, traiter, exploiter et diffuser des documents numériques</li>
                            <li>Organiser la recherche d’informations à l’ère du numérique</li>
                            <li>Travailler en réseau, communiquer et collaborer</li>
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
                    <h4>mars 2010</h4>
                    <div class="description">
                        <ul>
                            <li>Réseaux</li>
                            <li>Routeurs et routage</li>
                            <li>Commutation et routage intermédiaire</li>
                            <li>Technologie WAN</li>
                        </ul>
                    </div>
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