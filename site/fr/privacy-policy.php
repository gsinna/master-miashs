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
    <title>Politique de confidentialité | Guillaume Sinnaeve</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">  
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
            <a href="formations?sid=<?php echo $session_id ?>">Formations</a>
            <span class="language"><a class="active">fr</a> | <a href="/en/privacy-policy?sid=<?php echo $session_id ?>">en</a></span>
            <a href="javascript:void(0);" class="icon" onclick="showMenu()"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div id="main">
        <div class="full-container">
            <div class="container">
                <h1>Politique de confidentialité</h1>
                <section>
                    <div>
                        <h2>Introduction</h2>
                        <div>
                            <p>Dans le cadre de mon projet de master Mathématiques et Informatique Appliquées aux Sciences Humaines et Sociales (MIASHS) parcours Web Analyse, je suis amené à collecter et à traiter des informations dont certaines sont qualifiées de "données personnelles". Moi, Guillaume Sinnaeve, attache une grande importance au respect de la vie privée, et n’utilise que des données de manière responsable et confidentielle et dans une finalité précise.</p>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <h2>Données personnelles</h2>
                        <div>
                            <p>Sur le site web www.guillaume-sinnaeve.com, il y a 1 type de données susceptible d’être recueilli :</p>
                            <ul>
                                <li>
                                    <strong>Les données collectées automatiquement</strong>
                                    <br/>Lors de vos visites, je recueille des informations de type « web analytics » relatives à votre navigation comme la durée de votre consultation, votre localisation, votre type et version de navigateur. La technologie utilisée est sans cookies et sans JavaScript.
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <h2>Utilisation des données</h2>
                        <div>
                            <p>Les données « web analytics » sont collectées de forme anonyme par l'outil que j'ai développé, et me permettent de mesurer l'audience de mon site web, les consultations et les éventuelles erreurs afin d’améliorer constamment l’expérience des visiteurs. Ces données sont utilisées par moi-même, responsable du traitement des données, et ne seront jamais cédées à un tiers ni utilisées à d’autres fins que celles détaillées ci-dessus.</p>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <h2>Base légale</h2>
                        <div>
                            <p>Les données personnelles sont collectées sans consentement de l'utilisateur dans le cadre du respect des recommandations de la CNIL dans le cas de l'exemption.</p>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <h2>Durée de conservation</h2>
                        <div>
                            <p>Les données seront sauvegardées durant une durée maximale de vingt-cinq mois.</p>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <h2>Contact délégué à la protection des données</h2>
                        <div>
                            <p>Guillaume Sinnaeve - sinnaeve.guillaume[at]gmail.com</p>
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