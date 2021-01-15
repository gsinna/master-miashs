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
    <title>Analyses | Guillaume Sinnaeve</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.20/c3.min.css">
</head>

<body>
    <div id="header" class="nav">
        <div class="container">
            <a href="home?sid=<?php echo $session_id ?>">Guillaume Sinnaeve</a>
            <a href="thesis?sid=<?php echo $session_id ?>">Mémoire</a>
            <a href="analyzes?sid=<?php echo $session_id ?>" class="active">Analyses</a>
            <a href="articles?sid=<?php echo $session_id ?>">Articles</a>
            <a href="experiences?sid=<?php echo $session_id ?>">Expériences</a>
            <a href="certifications?sid=<?php echo $session_id ?>">Certifications</a>
            <a href="formations?sid=<?php echo $session_id ?>">Formations</a>
            <span class="language"><a class="active">fr</a> | <a href="/en/analyzes?sid=<?php echo $session_id ?>">en</a></span>
            <a href="javascript:void(0);" class="icon" onclick="showMenu()"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div id="main" class="dash">
        <div class="full-container">
            <div class="dash-container">
                <h1>Analyses</h1>
                <section>
                    <div>
                        <h2>Temps réel</h2>
                        <h3>Dans les 30 dernières minutes</h3>
                        <div class="cards large-25 medium-50 small-100">
                            <div class="cards-titles">Visiteurs</div>
                            <div class="cards-subtitles">Nombre total de visiteurs</div>
                            <div id="chart-real-time-visitors" class="counter"></div>
                        </div>
                        <div class="cards large-25 medium-50 small-100">
                            <div class="cards-titles">Sources</div>                        
                            <div class="cards-subtitles">Nombre de sources différentes</div>
                            <div id="chart-real-time-sources-total" class="counter"></div>
                        </div>
                        <div class="cards large-25 medium-50 small-100">
                            <div class="cards-titles">Pages</div>                        
                            <div class="cards-subtitles">Nombre total de pages vues</div>
                            <div id="chart-real-time-pages-total" class="counter"></div>
                        </div>
                        <div class="cards large-25 medium-50 small-100">
                            <div class="cards-titles">Événements</div>                        
                            <div class="cards-subtitles">Nombre total d'événements</div>
                            <div id="chart-real-time-events-total" class="counter"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-25 medium-100 small-100">
                            <div class="cards-titles">Catégories d'appareils</div>    
                            <div class="cards-subtitles">Pourcentage de visiteurs par appareil</div>
                            <div id="chart-real-time-device"></div>
                        </div>
                        <div class="cards large-75 medium-100 small-100">
                            <div class="cards-titles">Sources</div>    
                            <div class="cards-subtitles">Nombre de visiteurs par source</div>
                            <div id="chart-real-time-sources-list"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-100 medium-100 small-100">
                            <div class="cards-titles">Localisation</div>
                            <div class="cards-subtitles">Nombre de visiteurs par localisation</div>
                            <div id="chart-real-time-localisation"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-25 medium-100 small-100">
                            <div class="cards-titles">Pages</div>
                            <div class="cards-subtitles">Nombre de pages vues par URL</div>
                            <div id="chart-real-time-pages-list"></div>
                        </div>
                        <div class="cards large-75 medium-100 small-100">
                            <div class="cards-titles">Événements</div>
                            <div class="cards-subtitles">Nombre d'événements par action et libellé</div>
                            <div id="chart-real-time-events-list"></div>
                        </div>
                    </div>
                </section> 
                <section>
                    <div>
                        <h2>Visiteurs</h2>                        
                        <h3 class="date-range"></h3>
                        <div class="cards large-25 medium-50 small-100">
                            <div class="cards-titles">Total</div>
                            <div class="cards-subtitles">Nombre total de visiteurs</div>
                            <div id="chart-global-visitors-total" class="counter"></div>
                        </div>
                        <div class="cards large-25 medium-50 small-100">
                            <div class="cards-titles">Taux de rebond</div>
                            <div class="cards-subtitles">Pourcentage de visiteurs avec une page vue</div>
                            <div id="chart-global-visitors-bounce-rate" class="counter"></div>
                        </div>
                        <div class="cards large-25 medium-50 small-100">
                            <div class="cards-titles">Durée moyenne des visites</div>
                            <div class="cards-subtitles">Moyenne du temps passé sur le site par les visiteurs</div>
                            <div id="chart-global-visitors-average-duration" class="counter"></div>
                        </div>
                        <div class="cards large-25 medium-50 small-100">
                            <div class="cards-titles">Visites avec événements</div>
                            <div class="cards-subtitles">Nombre de visiteurs avec des événements</div>
                            <div id="chart-global-visitors-with-events" class="counter"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-100 medium-100 small-100">
                            <div class="cards-titles">Visiteurs par date</div>
                            <div class="cards-subtitles">Nombre de visiteurs par date</div>
                            <div id="chart-global-visitors-by-date"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-50 medium-100 small-100">
                            <div class="cards-titles">Fréquence par jour</div>
                            <div class="cards-subtitles">Nombre de visiteurs par jour</div>
                            <div id="chart-global-visitors-by-day"></div>
                        </div>
                        <div class="cards large-50 medium-100 small-100">
                            <div class="cards-titles">Fréquence par heure</div>
                            <div class="cards-subtitles">Nombre de visiteurs par heure</div>
                            <div id="chart-global-visitors-by-hour"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-33 medium-100 small-100">
                            <div class="cards-titles">Catégories d'appareils</div>
                            <div class="cards-subtitles">Pourcentage de visiteurs par catégorie d'appareil</div>
                            <div id="chart-global-visitors-by-device"></div>
                        </div>
                        <div class="cards large-34 medium-100 small-100">
                            <div class="cards-titles">Systèmes d'exploitation</div>
                            <div class="cards-subtitles">Nombre de visiteurs par système d'exploitation</div>
                            <div id="chart-global-visitors-by-system"></div>
                        </div>  
                        <div class="cards large-33 medium-100 small-100">
                            <div class="cards-titles">Navigateurs</div>
                            <div class="cards-subtitles">Pourcentage de visiteurs par navigateurs</div>
                            <div id="chart-global-visitors-by-browser"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-50 medium-100 small-100">
                            <div class="cards-titles">Top 10 des pays</div>
                            <div class="cards-subtitles">Nombre de visiteurs par pays</div>
                            <div id="chart-global-visitors-by-country"></div>
                        </div> 
                        <div class="cards large-50 medium-100 small-100">
                            <div class="cards-titles">Top 10 des régions françaises</div>
                            <div class="cards-subtitles">Nombre de visiteurs par région française</div>
                            <div id="chart-global-visitors-by-region"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-100 medium-100 small-100">
                            <div class="cards-titles">Top 10 des villes françaises</div>
                            <div class="cards-subtitles">Nombre de visiteurs par ville française</div>
                            <div id="chart-global-visitors-by-city"></div>
                        </div>  
                        <div class="break"></div>                  
                        <div class="cards large-25 medium-100 small-100">
                            <div class="cards-titles">Langues</div>
                            <div class="cards-subtitles">Pourcentage de visiteurs par langue</div>
                            <div id="chart-global-visitors-by-language"></div>
                        </div>
                        <div class="cards large-75 medium-100 small-100">
                            <div class="cards-titles">Sources</div>
                            <div class="cards-subtitles">Nombre de visiteurs par sources</div>
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
                            <div class="cards-subtitles">Nombre total de pages vues</div>
                            <div id="chart-global-pages-total" class="counter"></div>
                        </div>
                        <div class="cards large-34 medium-50 small-100">
                            <div class="cards-titles">Moyenne par visiteur</div>
                            <div class="cards-subtitles">Moyenne de pages vues par visiteur</div>
                            <div id="chart-global-pages-average-by-visitors" class="counter"></div>
                        </div>
                        <div class="cards large-33 medium-100 small-100">
                            <div class="cards-titles">Pages non trouvées</div>
                            <div class="cards-subtitles">Nombre total de pages 404 vues</div>
                            <div id="chart-global-pages-not-found" class="counter"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-100 medium-100 small-100">
                            <div class="cards-titles">Pages par date</div>
                            <div class="cards-subtitles">Nombre de pages par date</div>
                            <div id="chart-global-pages-by-date"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-50 medium-100 small-100">
                            <div class="cards-titles">Fréquence par jour</div>
                            <div class="cards-subtitles">Nombre de pages par jour</div>
                            <div id="chart-global-pages-by-day"></div>
                        </div>
                        <div class="cards large-50 medium-100 small-100">
                            <div class="cards-titles">Fréquence par heure</div>
                            <div class="cards-subtitles">Nombre de pages par heure</div>
                            <div id="chart-global-pages-by-hour"></div>
                        </div>         
                        <div class="break"></div>          
                        <div class="cards large-25 medium-100 small-100">
                            <div class="cards-titles">Entrées</div>
                            <div class="cards-subtitles">Première page vue par les visiteurs</div>
                            <div id="chart-global-pages-by-landing"></div>
                        </div>                   
                        <div class="cards large-25 medium-100 small-100">
                            <div class="cards-titles">Langues</div>                        
                            <div class="cards-subtitles">Nombre de pages vues par langue</div>
                            <div id="chart-global-pages-by-language"></div>
                        </div>
                        <div class="cards large-25 medium-100 small-100">
                            <div class="cards-titles">Noms</div>                                         
                            <div class="cards-subtitles">Nombre de pages vues par nom</div>
                            <div id="chart-global-pages-by-name"></div>
                        </div>
                        <div class="cards large-25 medium-100 small-100">
                            <div class="cards-titles">Sorties</div>
                            <div class="cards-subtitles">Dernière page vue par les visiteurs</div>
                            <div id="chart-global-pages-by-exit"></div>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <h2>Événements</h2>
                        <h3 class="date-range"></h3>
                        <div class="cards large-33 medium-50 small-100">
                            <div class="cards-titles">Total</div>
                            <div class="cards-subtitles">Nombre total d'événements</div>
                            <div id="chart-global-events-total" class="counter"></div>
                        </div>
                        <div class="cards large-34 medium-50 small-100">
                            <div class="cards-titles">Lecteurs</div>
                            <div class="cards-subtitles">Nombre de visiteurs ayant lu un article</div>
                            <div id="chart-global-events-by-articles-read" class="counter"></div>
                        </div>
                        <div class="cards large-33 medium-100 small-100">
                            <div class="cards-titles">Prise de contacts</div>
                            <div class="cards-subtitles">Nombre de visiteurs ayant téléphoné</div>
                            <div id="chart-global-events-by-call" class="counter"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-100 medium-100 small-100">
                            <div class="cards-titles">Événements par date</div>
                            <div class="cards-subtitles">Nombre d'événements par date</div>
                            <div id="chart-global-events-by-date"></div>
                        </div>
                        <div class="break"></div>
                        <div class="cards large-50 medium-100 small-100">
                            <div class="cards-titles">Fréquence par jour</div>
                            <div class="cards-subtitles">Nombre d'événements par jour</div>
                            <div id="chart-global-events-by-day"></div>
                        </div>
                        <div class="cards large-50 medium-100 small-100">
                            <div class="cards-titles">Fréquence par heure</div>
                            <div class="cards-subtitles">Nombre d'événements par heure</div>
                            <div id="chart-global-events-by-hour"></div>
                        </div>
                        <div class="break"></div>     
                        <div class="cards large-25 medium-100 small-100">
                            <div class="cards-titles">Compétences recherchées</div>                        
                            <div class="cards-subtitles">Nombre d'événements par compétence</div>
                            <div id="chart-global-events-by-competences"></div>
                        </div>
                        <div class="cards large-75 medium-100 small-100">
                            <div class="cards-titles">Certifications consultées</div>                        
                            <div class="cards-subtitles">Nombre d'événements par certification</div>
                            <div id="chart-global-events-by-certifications"></div>
                        </div>
                        <div class="break"></div>   
                        <div class="cards large-50 medium-100 small-100">
                            <div class="cards-titles">Intérêt du parcours professionnel</div>
                            <div class="cards-subtitles">Nombre d'événements par métier</div>
                            <div id="chart-global-events-by-experiences"></div>
                        </div>
                        <div class="cards large-50 medium-100 small-100">
                            <div class="cards-titles">Intérêt pour la formation</div>
                            <div class="cards-subtitles">Nombre d'événements par formation</div>
                            <div id="chart-global-events-by-formations"></div>
                        </div>
                        <div class="break"></div> 
                        <div class="cards large-100 medium-100 small-100">
                            <div class="cards-titles">Articles lus</div>
                            <div class="cards-subtitles">Nombre d'événements "Lire la suite" par article</div>
                            <div id="chart-global-events-by-article-name"></div>
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

    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.20/c3.min.js"></script>
    <script src="../analytics/dash.js"></script>

    <?php 
        include '../analytics/requests.php';
    ?>  

</body>