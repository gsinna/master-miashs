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
    <title>Privacy policy | Guillaume Sinnaeve</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css"> 
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
            <a href="formations?sid=<?php echo $session_id ?>">Formations</a>
            <span class="language"><a href="/fr/privacy-policy?sid=<?php echo $session_id ?>">fr</a> | <a class="active">en</a></span>
            <a href="javascript:void(0);" class="icon" onclick="showMenu()"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div id="main">
        <div class="full-container">
            <div class="container">
                <h1>Privacy policy</h1>
                <section>
                    <div>
                        <h2>Introduction</h2>
                        <div>
                            <p>For master's project in Mathématiques et Informatique Appliquées aux Sciences Humaines et Sociales (MIASHS) Web Analysis course, I collect and process information, some of which is qualified as "personal data". I, Guillaume Sinnaeve, attach great importance to respect for privacy, and only use data in a responsible and confidential manner and for a specific purpose.</p>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <h2>Personal data</h2>
                        <div>
                            <p>On the website www.guillaume-sinnaeve.com, there is 1 type of data that may be collected:</p>
                            <ul>
                                <li>
                                    <strong>Data collected automatically</strong>
                                    <br/>During your visits, I collect “web analytics” type information relating to your browsing such as the duration of your consultation, your location, your browser type and version. The technology used is without cookies and without JavaScript.
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>                
                <section>
                    <div>
                        <h2>Use of data</h2>
                        <div>
                            <p>The "web analytics" data are collected anonymously by the tool that I have developed, and allow me to measure the audience of my website, the consultations and any errors in order to constantly improve the visitor experience. This data is used by myself, the data controller, and will never be transferred to a third party or used for purposes other than those detailed above.</p>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <h2>Legal basis</h2>
                        <div>
                            <p>Personal data is collected without the user's consent in the context of compliance with the recommendations of the CNIL in the case of exemption.</p>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <h2>Data retention</h2>
                        <div>
                            <p>The data will be saved for a maximum period of twenty-five months.</p>
                        </div>
                    </div>
                </section>
                <section>
                    <div>
                        <h2>Contact data protection officer</h2>
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