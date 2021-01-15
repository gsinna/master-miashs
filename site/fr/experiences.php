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
    <title>Expériences | Guillaume Sinnaeve</title>
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
            <a href="thesis?sid=<?php echo $session_id ?>">Mémoire</a>
            <a href="analyzes?sid=<?php echo $session_id ?>">Analyses</a>
            <a href="articles?sid=<?php echo $session_id ?>">Articles</a>
            <a href="experiences?sid=<?php echo $session_id ?>" class="active">Expériences</a>
            <a href="certifications?sid=<?php echo $session_id ?>">Certifications</a>
            <a href="formations?sid=<?php echo $session_id ?>">Formations</a>
            <span class="language"><a class="active">fr</a> | <a href="/en/experiences?sid=<?php echo $session_id ?>">en</a></span>
            <a href="javascript:void(0);" class="icon" onclick="showMenu()"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div id="main">
        <div class="full-container">
            <div class="container">
                <h1>Expériences</h1>
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
                        <h4>janvier 2020 – Aujourd’hui</h4>
                        <div class="description">
                            <p>Expertise</p>
                            <ul>
                                <li>Participation à la stratégie de collecte de données sur les nouveaux outils analytiques de Google</li>
                                <li>Elaboration d’un plan de mesure de la donnée à destination de nos clients et des développeurs pour Google Analytics 4</li>
                                <li>Réunion hebdomadaire pour apportser des solutions aux nouveaux besoins de suivi et d’analyse</li>
                                <li>Construction d’un document de référence sur les bonnes pratiques</li>
                            </ul>
                            <p>Innovation</p>
                            <ul>
                                <li>Elaboration et développement des templates de variable et de tag AT Internet dans Google Tag Management</li>
                                <li>Création de modèles personnalisés de variables et de tags Google Tag Manager pour faciliter la configuration d’outils d’analyses</li>
                                <li>Réalisation d’un outil de contrôle qualité de données via Cloud Function, Big Query et Data Studio pour les applications mobiles</li>
                            </ul>
                            <p>RGPD</p>
                                <li>Développement d’un outil de consentement utilisateur pour les cookies en conformité avec la RGPD, visible sur <a id="fifty-five" href="https://fifty-five.com/" target="_blank">www.fifty-five.com</a></li>
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
                        <h4>janvier 2018 – décembre 2019 (2 ans)</h4>
                        <div class="description">
                            <p>Gestion de projet (différents clients avec plusieurs projets en même temps) :</p>
                            <ul>
                                <li>Aider l'équipe Conseil à définir les plans de tagging adaptés aux besoins des clients</li>
                                <li>Affectation d'un Tracking Specialist pour définir les exigences techniques et configurer les outils</li>
                                <li>Vérification et publication des configurations effectuées par le Tracking Specialist</li>
                                <li>Respect des dates d'échéances du client</li>
                            </ul>
                            <p>Management :</p>
                            <ul>
                                <li>Réunion hebdomadaire avec 7 Tracking Specialists pour suivre leurs missions et leurs objectifs</li>
                            </ul>
                            <p>Expérience Technique :</p>
                            <ul>
                                <li>Aider l’équipe technique à optmiser le code et résoudre des bugs</li>
                                <li>Référent technique de l’équipe sur les applications mobiles</li>
                                <li>Développement d’une méthodologie de collecte de la donnée en JavaScript compatible sur l'ensemble des navigateurs</li>
                                <li>Création d’un bot conversationnel marketing pour les centres commerciaux</li>
                            </ul>
                            <p>Gestion des connaissances :</p>
                            <ul>
                                <li>Organisation d'une réunion hebdomadaire pour la monter en compétences de l'équipe</li>
                                <li>Evangélisation du Tracking et de l'Analytics auprès d’autres équipes</li>
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
                        <h4>août 2015 – décembre 2017 (2 ans et 5 mois)</h4>
                        <div class="description">
                            <p>Spécialisation sur le suivi de sites web et d’applications mobiles</p>
                            <p>Accompagnement des clients dans leurs bureaux (AXA France, Accor Hotels, Vente Privée)</p>
                            <ul>
                                <li>Réalisation, implémentation et recette de plans de marquage Web et Mobiles (Android et iOS)</li>
                                <li>Support technique des développeurs au cours de l’implémentation</li>
                                <li>Mise en place de tags de toutes catégories (fonctionnel, analytique, média, social, etc.) via un TMS</li>
                                <li>Définition et personnalisation d’objectifs stratégiques adaptés aux besoins des clients</li>
                                <li>Création et analyse de rapportss de données Google Analytics et AT Internet</li>
                                <li>Développement JavaScript spécifique pour améliorer la pertinence des données collectées</li>
                                <li>Mise en œuvre de documents synthétiques et de supports détaillés destinés à la formation</li>
                                <li>Configuration et installation d’un Raspberry Pi 3 pour créer des objets connectés dans l’entreprise</li>
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
                            <span>Webmaster / Développeur Front-End</span>
                            <label for="wfed" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>relaymark (Ivry sur Seine, Île-de-France, France)</h3>
                        <h4>octobre 2013 – juillet 2015 (1 an et 10 mois)</h4>
                        <div class="description">
                            <ul>
                                <li>Suivi et mise à jour des solutions Web de l'entreprise</li>
                                <li>Création d'animations JavaScript, traitement d'images et intégration sur des plateformes existantes</li>
                                <li>Administration de sites web et de solutions internes</li>
                                <li>Planification, réalisation et gestion de campagnes emailing</li>
                                <li>Création de formulaires et suivi des résultats (enquêtes de satisfaction, commandes, gestion des inscriptions)</li>
                                <li>Mise en place d'offres commerciales pour les réseaux de vente (dépliants, kit de communication)</li>
                                <li>Rétention et développement des clients existants</li>
                                <li>Recommandation et mise en place d'offres et de catalogues de produits Clients en ligne</li>
                                <li>Conception, développement, intégration, publication et référencement de <a id="relaymark" target="_blank" href="http://www.relaymark.com">relaymark.com</a>, <a id="relaymark-blog" target="_blank" href="http://www.relaymark.com/blog">relaymark.com/blog</a>, <a id="ladresse-bienvenue" target="_blank" href="https://www.ladresse-bienvenue.com/">ladresse-bienvenue.com</a> et <a id="ladresse-blog" target="_blank" href="http://www.ladresse-blog.com/">ladresse-blog.com</a></li>
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
                            <span>Gérant</span>
                            <label for="owner" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>Auto-Entrepreneur</h3>
                        <h4>mars 2013 – octobre 2014 (1 an et 8 mois)</h4>
                        <div class="description">
                            <ul>
                                <li>Conception graphique</li>
                                <li>Développement de sites Web pour renforcer la communication d'entreprise</li>
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
                            <span>Webmaster / Webdesigner / Intégrateur (stage)</span>
                            <label for="webma" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>Intuito (Paris, Île-de-France, France)</h3>
                        <h4>avril 2013 – juin 2013 (3 mois)</h4>
                        <div class="description">
                            <ul>
                                <li>Design et développement du site web <a target="_blank" href="http://www.intuito.fr/">intuito.fr</a></li>
                            </ul>
                        </div>
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