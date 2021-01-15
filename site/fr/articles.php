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
        #atgtm:checked + h2 {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=show_articles&event_custom_1=Implementation of an AT Internet tag template in GTM');
            background-size: 0px;
        } 
        #button-atgtm:focus {
            background-image: url('../analytics/collect?sid=<?php echo $session_id ?>&event_name=read_more&event_custom_1=Implementation of an AT Internet tag template in GTM');
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
            <a href="thesis?sid=<?php echo $session_id ?>">Mémoire</a>
            <a href="analyzes?sid=<?php echo $session_id ?>">Analyses</a>
            <a href="articles?sid=<?php echo $session_id ?>" class="active">Articles</a>
            <a href="experiences?sid=<?php echo $session_id ?>">Expériences</a>
            <a href="certifications?sid=<?php echo $session_id ?>">Certifications</a>
            <a href="formations?sid=<?php echo $session_id ?>">Formations</a>
            <span class="language"><a class="active">fr</a> | <a href="/en/articles?sid=<?php echo $session_id ?>">en</a></span>
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
                            <span>Interview – Guillaume Sinnaeve (fifty-five) : « Nous avons créé un template pour connecter AT Internet et Google Tag Manager »</span>
                            <label for="atitw" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>Data Architecture</h3>
                        <h4>14 janvier 2021</h4>
                        <div class="description">
                            <p>Après une expérience de développeur Front-End, Guillaume Sinnaeve, passionné de JavaScript décide de rejoindre l’univers de la data en 2015 pour partager son expertise et relever de nouveaux défis. Au sein de fifty-five, data company au services des marques, Guillaume Sinnaeve est Tracking & Analytics Manager. Il est en charge de l’accompagnement technique des clients dans leurs projets de collecte de données, et notamment via l’Analytics Suite. Dans cet entretien, il nous explique comment il a collaboré avec AT Internet pour la création d’un template de tag au sein de Google Tag Manager. </p>
                            <a target="_blank" href="https://blog.atinternet.com/fr/interview-template-at-internet-gtm/"><button class="button" id="button-atitw">Lire la suite</button></a>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <input type="checkbox" class="hidden chevron-input" id="atgtm" name="atgtm">
                        <h2>
                            <span>Mise en oeuvre d’un template de tag AT Internet dans GTM</span>
                            <label for="atgtm" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>Data Architecture</h3>
                        <h4>6 janvier 2021</h4>
                        <div class="description">
                            <p>L’utilisation d’un TMS pour l’implémentation d’une solution de web analyse est devenu une pratique incontournable. Les TMS facilitent le contrôle et le déploiement des outils de collecte notamment en proposant des templates d’implémentation. Ces templates permettent de faciliter la mise en œuvre de certaines fonctionnalités et limitent la quantité de code à produire. Jusqu’à présent, les utilisateurs AT Internet pouvaient bénéficier de templates dans différents TMS (TagCommander, Tealium) mais pas dans Google Tag Manager.</p>

                            <p>Pour répondre aux besoins de ses clients, fifty-five a donc pris l’initiative de créer des templates dans GTM en partenariat avec AT Internet, et les met à disposition aujourd’hui pour vous. On vous explique notre approche et les bénéfices de ces templates dans cet article !</p>                            
                            <a target="_blank" href="https://teahouse.fifty-five.com/fr/mise-en-oeuvre-dun-template-de-tag-at-internet-dans-gtm/"><button class="button" id="button-atgtm">Lire la suite</button></a>
                        </div>
                    </div>
                </section>  
                <section>
                    <div>
                        <input type="checkbox" class="hidden chevron-input" id="gtmdebug" name="gtmdebug">
                        <h2>
                            <span>Tutoriel : comment utiliser les nouveaux modes de prévisualisation et de débogage de GTM</span>
                            <label for="gtmdebug" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>Data Architecture</h3>
                        <h4>21 octobre 2020</h4>
                        <div class="description">
                            <p>Comme certains d’entre vous l’ont peut-être remarqué, Google a récemment mis à jour le processus de débogage des workspaces Google Tag Manager (GTM) avec le déploiement de Google Tag Assistant.</p>

                            <p>Cette méthode possède de nombreux avantages mais complexifie certains tests. Un des problèmes que nous avons rencontré est la déconnexion régulière de l’outil. Mais n’ayez crainte, comme souvent en webanalyse, il existe une solution alternative.</p>

                            <p>Vous pouvez activer le mode Preview de GTM sans utiliser le nouveau Google Tag Assistant. Grâce à un outil de redirection comme Requestly, il est possible de modifier l’url d’appel à votre conteneur GTM pour activer la prévisualisation.</p>
                            <a target="_blank" href="https://teahouse.fifty-five.com/fr/tutoriel-comment-utiliser-les-nouveaux-modes-de-previsualisation-et-de-debogage-de-gtm/"><button class="button" id="button-gtmdebug">Lire la suite</button></a>
                        </div>
                    </div>
                </section>                
                <section>
                    <div>
                        <input type="checkbox" class="hidden chevron-input" id="amp1" name="amp1">
                        <h2>
                            <span>AMP : une méthode de développement dédiée au mobile à favoriser pour le SEO — Partie 1</span>
                            <label for="amp1" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>Data Architecture</h3>
                        <h4>4 octobre 2018</h4>
                        <div class="description">
                            <p>Que faites-vous lorsque vous ouvrez votre navigateur internet sur votre mobile et que la page ne s’est pas affichée dans les 5 premières secondes ? Le temps semble durer une éternité dans ces situations bien trop fréquentes, et il y a de grandes chances pour que vous vous rendiez sur un autre site, au grand désarroi des éditeurs de contenu.  Éviter ce type de déconvenue est tout l’enjeu des pages AMP !</p>

                            <p>Alors comment fonctionnent ces pages web mobiles ? Quels sont leurs avantages, mais également leurs contraintes, notamment en termes de collecte de données ?</p>

                            <a target="_blank" href="https://teahouse.fifty-five.com/fr/amp-developpement-mobile-seo-partie-1/"><button class="button" id="button-amp1">Lire la suite</button></a>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <input type="checkbox" class="hidden chevron-input" id="amp2" name="amp2">
                        <h2>
                            <span>AMP : comment transmettre des données e-commerce avancées ? — Partie 2</span>
                            <label for="amp2" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>Data Architecture</h3>
                        <h4>4 octobre 2018</h4>
                        <div class="description">
                            <p>Nous avons vu dans une première partie que la technologie AMP permet de proposer une meilleure expérience utilisateur sur un site mobile, tout en améliorant son référencement naturel et sa visibilité. Cependant, elle limite l’utilisation du JavaScript, ce qui impose certaines contraintes pour la collecte de données en webanalyse. Il faut bien avoir à l’esprit qu’à partir du moment où une solution est compatible avec la technologie AMP, tout est possible en terme de tracking. On pourra procéder avec ou sans TMS (Tag Management System).</p>

                            <p>Découvrez ici un tour d’horizon des possibilités techniques offertes aux marques pour collecter des données sur les pages AMP avec les solutions de webanalyse, et notamment avec la fonctionnalité Enhanced Ecommerce de Google Analytics.</p>

                            <p>Nous verrons notamment :</p>
                            <ul>
                                <li>Comment transmettre des données e-commerce à Google Analytics sur des pages AMP sans TMS</li>
                                <li>Comment transmettre ces données avec Google Tag Manager (GTM)</li>
                                <li>Enfin, comment envoyer ces données vers n’importe quel type d’outil de webanalyse, avec ou sans TMS</li>
                            </ul>
                            <a target="_blank" href="https://teahouse.fifty-five.com/fr/amp-transmettre-des-des-donnes-ecommerce-avancees-partie-2/"><button class="button" id="button-amp2">Lire la suite</button></a>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <input type="checkbox" class="hidden chevron-input" id="bigbro" name="bigbro">
                        <h2>
                            <span>Big Brother dans ton freezer ?</span>
                            <label for="bigbro" class="chevron fa fa-chevron-circle-down"></label>
                        </h2>
                        <h3>Data Architecture</h3>
                        <h4>18 mai 2017</h4>
                        <div class="description">
                            <p>Chez fifty-five, nous avons l’habitude de collecter des données sur les sites internet et les applications mobiles. C’est pourquoi l’idée de récupérer l’information du monde « réel » depuis un objet classique et de la transmettre à une interface nous a tout de suite intéressés. Ainsi, nous avons étudié l’ensemble des possibilités de tracking dans nos locaux en identifiant les différents KPIs des objets qui nous entourent.</p>

                            <p>Un article amusant sur l'IoT et notre expérience de collecte de données sur un réfrigérateur</p>
                            
                            <a target="_blank" href="https://teahouse.fifty-five.com/fr/big-brother-dans-ton-freezer/"><button class="button" id="button-big-brother">Lire la suite</button></a>
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