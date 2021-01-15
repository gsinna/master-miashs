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
    <title>Mémoire | Guillaume Sinnaeve</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div id="header" class="nav">
        <div class="container">
            <a href="home?sid=<?php echo $session_id ?>">Guillaume Sinnaeve</a>
            <a href="thesis?sid=<?php echo $session_id ?>" class="active">Mémoire</a>
            <a href="analyzes?sid=<?php echo $session_id ?>">Analyses</a>
            <a href="articles?sid=<?php echo $session_id ?>">Articles</a>
            <a href="experiences?sid=<?php echo $session_id ?>">Expériences</a>
            <a href="certifications?sid=<?php echo $session_id ?>">Certifications</a>
            <a href="formations?sid=<?php echo $session_id ?>">Formations</a>
            <span class="language"><a class="active">fr</a> | <a href="/en/thesis?sid=<?php echo $session_id ?>">en</a></span>
            <a href="javascript:void(0);" class="icon" onclick="showMenu()"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div id="main">
        <div class="full-container" id="thesis">
            <div class="container">
                <h1>Mémoire</h1>
                <h1>Le monde sans cookies qui se prépare entraîne-t-il la fin de la collecte de données ?</h1>
                <section>
                    <div class="center">                    
                        <img src="/img/memoire/univ-lille.png" title="Université de Lille" alt="Université de Lille" />
                        <p>Mémoire de Master
                            <br>Mathématiques et Informatique Appliquées aux Sciences Humaines et Sociales (MIASHS)
                            <br>Parcours Web-Analyste
                        </p>
                        <p>Rédigé par Guillaume Sinnaeve
                            <br>Janvier 2021
                        </p>
                        <p>Mémoire encadré par Charles Paperman, maître de conférences à l'université de Lille.</p>
                        <a href="/docs/memoire.pdf?" target="_blank"><button class="button">Télécharger au format PDF</button></a>
                    </div>
                </section>
                <section>
                    <h2 id="remerciements">Remerciements</h2>
                    
                    <p>Je voudrais dans un premier temps remercier mon directeur de mémoire monsieur Charles Paperman, responsable pédagogique et maître de conférence en informatique à l’université de Lille, pour sa disponibilité, ses judicieux conseils et sa passion pour le code que je partage et qui ont contribué à alimenter ma réflexion sur le projet et le mémoire.</p>
                    
                    <p>Je remercie également madame Carine Wos, conseillère en formation continue à l’université de Lille, pour sa réactivité dans nos échanges et son accompagnement dans mon inscription au master Mathématiques et Informatique Appliquées aux Sciences Humaines et Sociales (MIASHS) parcours Web Analyse par la Validation des Acquis de l’Expérience (VAE).</p>
                    
                    <p>Je tiens à témoigner toute ma reconnaissance aux personnes suivantes, pour leur aide dans la réalisation de ce mémoire :</p>
                    
                    <p>Monsieur Maxence Gama, Chef de projet web analyse chez OUI.sncf, pour nos discussions et nos débats sur la finalité de la collecte de données qui ont contribué à ma réflexion.</p>
                    
                    <p>Monsieur Guillaume Tollet, Consulting Associate Director et DPO chez fifty-five, pour sa compréhension et ses explications claires et précises sur les textes du RGPD et de la CNIL.</p>
                    
                    <p>Monsieur François Khoury, Senior Manager et expert sur la web analyse, le mobile et le CRM chez fifty-five, qui m’a partagé ses connaissances et ses expériences dans le domaine de la collecte de données..</p>
                    
                    <p>À mes interlocuteurs au sein des entreprises qui ont souhaité garder l’anonymat pour avoir répondu à mes questions à propos des impacts des textes législatifs sur la collecte de données, ainsi que sur leur expérience personnelle. Les questionnaires sont disponibles en annexe de ce mémoire.</p>
                    
                    <p>Madame Marjorie Braconnier, Tools Senior Manager chez fifty-five, et Monsieur Clément Somon, Senior Tracking Specialist chez fifty-five, pour avoir relu et corrigé mon mémoire. Leurs conseils de rédaction ont été très précieux.</p>
                    
                    <p>Ma femme, pour son soutien constant et ses encouragements.</p>
                </section>
                <section>
                    <h2 id="sommaire">Sommaire</h2>
                    <ul>
                        <li><a href="#remerciements">Remerciements</a></li>
                        <li><a href="#sommaire">Sommaire</a></li>
                        <li><a href="#introduction">Introduction</a></li>
                        <li><a href="#partie-1---la-disparition-des-cookies">Partie 1 - La disparition des cookies</a>
                            <ul>
                                <li><a href="#11-la-finalité-de-la-collecte-de-données">1.1 La finalité de la collecte de données</a>
                                    <ul>
                                        <li><a href="#111-mesurer-son-audience">1.1.1 Mesurer son audience</a></li>
                                        <li><a href="#112-optimiser-la-conversion">1.1.2 Optimiser la conversion</a></li>
                                        <li><a href="#113-monétiser-son-contenu">1.1.3 Monétiser son contenu</a></li>
                                    </ul>
                                </li>
                                <li><a href="#12-lémergence-du-cookie">1.2 L'émergence du cookie</a>
                                    <ul>
                                        <li><a href="#121-la-génèse">1.2.1 La génèse</a></li>
                                        <li><a href="#122-la-donnée-personnelle-en-péril">1.2.2 La donnée personnelle en péril</a></li>
                                        <li><a href="#123-la-croissance-dun-modèle-économique">1.2.3 La croissance d'un modèle économique</a></li>
                                    </ul>
                                </li>
                                <li><a href="#13-la-fin-des-cookies-et-ses-conséquences">1.3 La fin des cookies et ses conséquences</a>
                                    <ul>
                                        <li><a href="#131-le-rgpd-et-la-directive-eprivacy-dictent-les-règles-du-jeu">1.3.1 Le RGPD et la directive ePrivacy dictent les règles du jeu</a></li>
                                        <li><a href="#132-apple-et-la-confidentialité-des-utilisateurs">1.3.2 Apple et la confidentialité des utilisateurs</a></li>
                                        <li><a href="#133-firefox-et-le-consentement-au-niveau-du-navigateur">1.3.3 Firefox et le consentement au niveau du navigateur</a></li>
                                        <li><a href="#134-google-et-la-promesse-du-respect-de-lanonymat">1.3.4 Google et la promesse du respect de l’anonymat</a></li>
                                        <li><a href="#135-brave-et-la-protection-de-la-vie-privée">1.3.5 Brave et la protection de la vie privée</a></li>
                                        <li><a href="#136-les-extensions-bloquent-la-publicité">1.3.6 Les extensions bloquent la publicité</a></li>
                                    </ul>
                                </li>
                                <li><a href="#14-un-enjeu-de-taille-pour-les-entreprises">1.4 Un enjeu de taille pour les entreprises</a>
                                    <ul>
                                        <li><a href="#141-une-connaissance-client-diminuée">1.4.1 Une connaissance client diminuée</a></li>
                                        <li><a href="#142-une-organisation-juridique">1.4.2 Une organisation juridique</a></li>
                                        <li><a href="#143-un-investissement-technique">1.4.3 Un investissement technique</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#partie-2---concilier-respect-du-rgpd-et-exhaustivité-de-la-connaissance-utilisateur">Partie 2 - Concilier respect du RGPD et exhaustivité de la connaissance utilisateur</a>
                            <ul>
                                <li><a href="#21-exemption-cnil">2.1 Exemption CNIL</a>
                                    <ul>
                                        <li><a href="#211-collecte-de-données-dès-la-première-page">2.1.1 Collecte de données dès la première page</a></li>
                                        <li><a href="#212-une-finalité-limitée">2.1.2 Une finalité limitée</a></li>
                                    </ul>
                                </li>
                                <li><a href="#22-server-side">2.2 Server-side</a>
                                    <ul>
                                        <li><a href="#221-réduire-la-charge-client-pour-un-meilleur-contrôle">2.2.1 Réduire la charge client pour un meilleur contrôle</a></li>
                                        <li><a href="#222-consentement-et-temps-de-développement">2.2.2 Consentement et temps de développement</a></li>
                                    </ul>
                                </li>
                                <li><a href="#23-navigation-authentifiée">2.3 Navigation authentifiée</a>
                                    <ul>
                                        <li><a href="#231-une-relation-personnalisée">2.3.1 Une relation personnalisée</a></li>
                                        <li><a href="#232-frein-potentiel-à-la-conversion-de-lutilisateur">2.3.2 Frein potentiel à la conversion de l’utilisateur</a></li>
                                    </ul>
                                </li>
                                <li><a href="#24-modélisation-et-machine-learning">2.4 Modélisation et Machine Learning</a>
                                    <ul>
                                        <li><a href="#241-construire-des-données">2.4.1 Construire des données</a></li>
                                        <li><a href="#242-estimation-approximative">2.4.2 Estimation approximative</a></li>
                                    </ul>
                                </li>
                                <li><a href="#25-un-consentement-souvent-nécessaire">2.5 Un consentement souvent nécessaire</a></li>
                            </ul>
                        </li>
                        <li><a href="#partie-3---expérimentation-dune-collecte-de-données-sans-cookies-sans-javascript-et-conforme-au-rgpd">Partie 3 - Expérimentation d’une collecte de données sans cookies, sans JavaScript et conforme au RGPD</a>
                            <ul>
                                <li><a href="#31-les-pré-requis-législatifs">3.1 Les pré-requis législatifs</a>
                                    <ul>
                                        <li><a href="#311-une-finalité-stricte">3.1.1 Une finalité stricte</a></li>
                                        <li><a href="#312-informer-les-utilisateurs">3.1.2 Informer les utilisateurs</a></li>
                                    </ul>
                                </li>
                                <li><a href="#32-les-contraintes-techniques">3.2 Les contraintes techniques</a>
                                    <ul>
                                        <li><a href="#321-collecte-des-données-en-php">3.2.1 Collecte des données en PHP</a></li>
                                        <li><a href="#322-mesure-des-interactions-en-css">3.2.2 Mesure des interactions en CSS</a></li>
                                        <li><a href="#323-identifiant-visiteur-en-paramètre-dURL">3.2.3 Identifiant visiteur en paramètre d’URL</a></li>
                                    </ul>
                                </li>
                                <li><a href="#33-de-la-collecte-à-la-visualisation-des-données">3.3 De la collecte à la visualisation des données</a>
                                    <ul>
                                        <li><a href="#331-connaître-ses-visiteurs">3.3.1 Connaître ses visiteurs</a></li>
                                        <li><a href="#332-le-comportement-sur-le-site">3.3.2 Le comportement sur le site</a></li>
                                        <li><a href="#333-traitement-et-stockage">3.3.3 Traitement et stockage</a></li>
                                        <li><a href="#334-représentation-graphique-des-données">3.3.4 Représentation graphique des données</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#conclusion">Conclusion</a></li>
                        <li><a href="#notes-utiles">Notes utiles</a></li>
                        <li><a href="#annexes">Annexes</a>
                            <ul>
                                <li><a href="#annexe-1---questionnaire---impact-du-rgpd-sur-entreprise-a">Annexe 1 - Questionnaire - Impact du RGPD sur Entreprise A</a></li>
                                <li><a href="#annexe-2---questionnaire---impact-du-rgpd-sur-entreprise-b">Annexe 2 - Questionnaire - Impact du RGPD sur Entreprise B</a></li>
                                <li><a href="#annexe-3---questionnaire---impact-du-rgpd-sur-entreprise-c">Annexe 3 - Questionnaire - Impact du RGPD sur Entreprise C</a></li>
                                <li><a href="#annexe-4---questionnaire---impact-du-rgpd-sur-entreprise-d">Annexe 4 - Questionnaire - Impact du RGPD sur Entreprise D</a></li>
                                <li><a href="#annexe-5---politique-de-confidentialité">Annexe 5 - Politique de confidentialité</a></li>
                                <li><a href="#annexe-6---événement-de-suppressions-des-données-de-plus-de-25-mois">Annexe 6 - Événement de suppressions des données de plus de 25 mois</a></li>
                                <li><a href="#annexe-7---campagnes-dacquisition-de-données">Annexe 7 - Campagnes d'acquisition de données</a></li>
                                <li><a href="#annexe-8---schéma-de-la-base-de-données">Annexe 8 - Schéma de la base de données</a></li>
                                <li><a href="#annexe-9---page-danalyse-du-site">Annexe 9 - Page d’analyse du site</a></li>
                            </ul>
                        </li>
                        <li><a href="#table-des-illustrations">Table des illustrations</a></li>
                        <li><a href="#webographie">Webographie</a></li>
                    </ul>
                </section>
                <section>
                    <h2 id="introduction">Introduction</h2>
                    
                    <p>“La data c’est mon dada”. J’aime beaucoup cette phrase car, en plus d’être drôle à dire, elle exprime bien mon quotidien. Depuis 2015, la donnée est devenue mon métier. Tout ce qui nous entoure est de la donnée. Nos sens captent constamment de l’information. Un ciel bleu, le bruit des vagues, les grains de sable sous nos pieds. En associant ces quelques mots, c’est la plage et la mer qui nous viennent à l’esprit, un souvenir de vacances en été.</p>
                    
                    <p>Aujourd’hui, la donnée est essentielle pour les entreprises. La donnée leur permet de connaître leurs utilisateurs et leurs demandes, de comprendre les parcours des visiteurs sur leur site internet et application mobile ou encore les revenus générés par leurs services. Ces entreprises rêvent d’un monde où elles pourraient avoir des données sur tout et sur tous pour mieux comprendre et anticiper les besoins de chacun.</p>
                    
                    <p>Est-ce vraiment raisonnable et utile de savoir tout de tout le monde me direz vous ? Non. Imaginez à quel point une fuite de données personnelles peut être problématique pour les personnes visées. Comme ce fut le cas pour l’application de rencontre gay Grindr en avril 2018.</p>
                    
                    <blockquote>
                        <p>&quot;L’application de rencontres homosexuelles a laissé des entreprises tierces accéder à des données privées de ses utilisateurs, dont leur statut VIH.&quot;<br>Source : Le Monde</p>                    
                    </blockquote>
                    
                    <p>C’est pourquoi il est crucial de protéger la vie privée et les libertés individuelles. En Europe, le Règlement Général sur la Protection des Données (RGPD en français et GDPR en anglais pour General Data Protection Regulation) a bouleversé profondément la collecte de la donnée depuis mai 2018, en s'attaquant de front au problème des données personnelles. Les entreprises doivent se mettre en conformité avec ces textes de loi. Dans le cas contraire, elles s’exposent à des sanctions pouvant aller jusqu’à 20 millions d'euros ou 4% du chiffre d’affaires. Carrefour France a été contrôlé et condamné par la CNIL en novembre 2020.</p>
                   
                    <blockquote>
                        <p>&quot;RGPD : la CNIL condamne Carrefour à plus de 3 millions d'euros d'amendes&quot;<br>Source : La Tribune</p>
                    </blockquote>
                    
                    <p>En complément du RGPD, les entreprises se doivent de respecter la directive ePrivacy<sup><a href="#section">[1]</a></sup>, autrement appelée “directive vie privée et communication électroniques&quot;. Elle concerne le traitement des données à caractère personnel et la protection de la vie privée. La directive ePrivacy s’applique au secteur des communications électroniques et notamment aux sites Web qui doivent demander le consentement de l’utilisateur avant de collecter la donnée. Cependant, elle n’a pas été mise à jour depuis juillet 2002 et peut créer des différences d'interprétation avec le RGPD de 2018.</p>
                    
                    <p>Chaque Etat membre de l’Union Européenne dispose d’un organisme qui aide les professionnels à se mettre en conformité avec la législation. En France, c’est la Commission Nationale de l’Informatique et des Libertés (CNIL) qui est le régulateur des données personnelles. Les séances plénières de la CNIL, du 17 octobre 2019 et plus récemment celle de Septembre 2020, appuyées par le Conseil d'Etat, affirment les positions de la France sur la directive ePrivacy et la demande de consentement.</p>
                    
                    <blockquote>
                        <p>&quot;En application de la directive ePrivacy, les internautes doivent être informés et donner leur consentement préalablement au dépôt et à la lecture de certains traceurs, tandis que d’autres sont dispensés du recueil de ce consentement.&quot;<br>Source : CNIL</p>
                    </blockquote>
                    
                    <p>Les principaux acteurs et les entreprises réagissent et semblent aller dans la même direction avec réserve. Cependant, c’est toute l’industrie de la collecte de données qui est mise en péril. L'utilisation du cookie est bien maîtrisée depuis plusieurs années et des solutions de contournement face aux navigateurs et aux bloqueurs de publicité ont été trouvées avec le temps. Mais jusqu’à quand ? Quel futur se dessine pour cette industrie si bien organisée ? Le monde qui se prépare entraîne-t-il la fin de la collecte de données ? L’objectif de ce mémoire est de montrer que nous assistons à une transformation des méthodes de collecte de données et que l’ère des cookies telle que nous la connaissons touche à sa fin.</p>
                    
                    <p>Dans une première partie, nous allons montrer la place importante qu’a pris le cookie dans notre quotidien sur le Web. Nous comprendrons pourquoi les acteurs législatifs et technologiques actuels ainsi que la prise de conscience des utilisateurs sur l'intérêt à protéger leurs informations personnelles mènent la vie dure aux cookies, aux solutions de collecte et aux entreprises pilotées par la donnée.</p>
                    
                    <p>Ensuite, nous étudierons diverses solutions existantes qui permettent d’accorder le respect et la conformité au RGPD avec une connaissance la plus complète 
                    possible sur les utilisateurs. Comprendre comment les avantages et les inconvénients de chaque solution présentée permettent aux entreprises de faire un choix sur celle qui serait le plus adaptée à leur environnement. Nous conclurons en montrant que la solution parfaite n’existe pas aujourd’hui.</p>
                    
                    <p>Finalement, nous expérimenterons la mise en place d’une collecte de données côté serveur, sans cookies, sans JavaScript et conforme au RGPD et à la CNIL sur le site internet www.guillaume-sinnaeve.com. Nous aborderons les choix techniques mis en place pour respecter les règles énoncées précédemment, la mécanique utilisée pour mesurer les informations sur les pages et interactions des visiteurs et la visualisation graphique des données collectées.</p>
                </section>
                <section>
                    <h2 id="partie-1---la-disparition-des-cookies">Partie 1 - La disparition des cookies</h2>

                    <p>Dans le domaine de la collecte de données sur le Web, que ça soit à des fins statistiques ou publicitaires, les cookies sont omniprésents. Un modèle économique entier repose sur les cookies et les informations qu’ils contiennent. Mais face aux acteurs législatifs et technologiques actuels, la fin des cookies semble inévitable et ne sera pas sans répercussions pour les entreprises pilotées par la donnée.</p>
                   

                    <h3 id="la-finalité-de-la-collecte-de-données">1.1 La finalité de la collecte de données</h3>
                    
                    <p>Collecter de la donnée utilisateur sur un site internet est nécessaire pour l’entreprise. Cependant, les utilisateurs qui font l’objet d’un tel suivi ne sont pas tous en mesure d’en comprendre les objectifs. Ainsi, la mise en place d’un outil de gestion du consentement des utilisateurs nécessite de définir l’objectif de collecte d’une donnée et de chaque technologie de suivi. C’est ce que le marché appelle la définition des “finalités”. Si une entreprise ne sait pas répondre à la question “pourquoi nous collectons cette information ?” alors il n’est pas pertinent de la collecter.</p>
                    
                    <p>Les cookies et autres traceurs sont réunis autour de grandes familles avec des finalités. Celles-ci répondent à la question de l’utilité des familles de cookies pour lesquelles la demande de consentement est faite à l'utilisateur. Ce classement des cookies par finalité est normé, mais des changements peuvent tout de même être faits et adaptés pour chaque entreprise. La CNIL indique que la finalité doit être “déterminée, légitime et explicite” et qu’elle “permet de déterminer la pertinence des données personnelles que vous recueillez”. C’est donc une demande de la législation d’établir cette liste de finalité.</p>
                    
                    <p class="illustrations">
                        <img src="/img/memoire/1.1_collect.png" title="Schéma itératif de la collecte de données" alt="Schéma itératif de la collecte de données" />
                        <br><em style="text-align:center;">Schéma itératif de la collecte de données</em>
                    </p>
                   

                    <h4 id="mesurer-son-audience">1.1.1 Mesurer son audience</h4>

                    <p>Les outils de mesure d’audience sont nombreux aujourd’hui sur le marché (Google Analytics, AT Internet, Adobe Analytics, Content Square, Session Cam, etc.) et lorsqu'un utilisateur navigue sur le Web, de multitudes d’informations circulent entre lui et le site internet. Nous pouvons les regrouper sous 3 grandes catégories : les données relatives aux utilisateurs, aux sources de trafic et aux comportements des internautes. En rassemblant toutes ces informations dans les solutions de mesure d’audience et grâce à l’analyse de statistiques obtenues, la connaissance clients et prospects augmente considérablement.</p>
                    
                    <p>Si le site internet propose un module de création de compte via un email ou un compte social comme Facebook, l’utilisateur peut fournir directement des données personnelles comme le nom, le prénom, l’adresse email, etc. Ces informations sont enregistrées dans des outils de gestion de la relation client (en anglais Customer Relationship Management ou CRM). La majorité des outils d’analyse n’autorise pas les informations personnelles identifiables en clair (en anglais Personally Identifiable Information ou PII). Cependant, il est possible de les recouper en utilisant des clés de réconciliation (encodage de l’email par exemple). L’utilisateur peut apporter d’autres informations grâce à sa machine et son navigateur. Il peut s’agir de données démographiques (âge et sexe) grâce aux cookies tiers, géographiques (zone et langue) avec l’adresse IP ou technologiques avec le <em>fingerprinting</em> (navigateur, système d’exploitation, catégorie d’appareil). Connaître ces informations permet d’optimiser la performance du site pour être certain qu’il fonctionne avec la configuration de l’utilisateur.</p>
                    
                    <p>Les sources de trafic désignent le moyen employé par un utilisateur pour venir sur un site internet. Grâce à des paramètres de campagnes dans l’URL de la page d’arrivée et/ou de la page qui précède l’arrivée sur le site (appelé également “referrer”), il est possible de définir, une fois la donnée collectée et traitée, des canaux d’attributions (Direct, Organique, Social, Email et Referral). Ces données sont particulièrement intéressantes car elles donnent une vision de la notoriété de la marque, portée par le site internet, sur le Web. Elles permettent également de prendre des décisions d’investissement sur des plateformes publicitaires comme le SEA (Search Engine Advertising) ou le social.</p>
                    
                    <p>Les données comportementales mesurent l’engagement généré par un utilisateur envers un site Web. Elles sont relatives, par exemple, aux pages visitées et à leur temps de chargement, à la recherche de mots clés et aux interactions (clics, scroll, complétion de formulaire, etc.). Grâce à ces données, il est possible d’identifier le contenu qui plait le plus aux utilisateurs mais aussi de monitorer la performance du site (nombre de pages 404 rencontrées, boutons non fonctionnels, etc.). Pour un site e-commerce, les informations relatives aux intentions d’achat et aux transactions peuvent également être incluses dans cette catégorie comme par exemple la vue d’une liste de produit ou de promotions, l’affichage d’une page produit, l’ajout au panier, la navigation dans le tunnel de commande et la vue de la page de confirmation.</p>
                    

                    <h4 id="optimiser-la-conversion">1.1.2 Optimiser la conversion</h4>
                    
                    <p>Une fois l’audience du site connue, il devient nécessaire d’optimiser les indicateurs de performance (taux de rebond, parcours, formulaire, etc.) pour proposer un contenu plus adapté aux visiteurs et optimiser le taux de conversion. Pour un site e-commerce, il peut s’agir d’augmenter son nombre de transactions et son chiffre d'affaires. Les tests A/B et la personnalisation contribuent à cette optimisation et dans ce domaine, les outils sont nombreux (Google Optimize, Kameleoon, AB Tasty, Optimizely, etc.).</p>
                    
                    <p>Les A/B tests et les MV tests (Multiples Variantes) vont principalement utiliser les données comportementales acquises. Les premiers outils proposaient de comparer des versions de pages avec un seul élément modifié. Très vite, ils ont évolué et ont permis de modifier plusieurs éléments à la fois. En testant une ou plusieurs variantes d’une page (changement de couleur d’un bouton, d’un titre, de la position des blocs, etc.) auprès d’un segment d’audience sur une période définie et en collectant les résultats de l’expérience, il est possible de connaître la configuration du site la plus performante. La mise en place de ce type d’outil présente de nombreux avantages. Les équipes métiers peuvent, notamment, gérer directement leurs tests dans l’outil sans demande de modifications du code par les développeurs. Une fois qu’une variation est déterminée comme gagnante, elle peut être intégrée sur le site pour l’ensemble des utilisateurs.</p>
                    
                    <p>La personnalisation exploite les données relatives aux utilisateurs. En connaissant leurs préférences d’achats, leur budget pour les transactions, leur tranche d’âge, leur genre, etc, il est possible de proposer un contenu adapté mis en avant sur le site (par exemple, via une bannière sur la page d’accueil affichant un produit en relation avec ce que l'utilisateur achète fréquemment). L’intérêt est d’accompagner rapidement l’internaute vers l’objectif de conversion. Moins il passe de temps à rechercher ce pourquoi il est venu sur le site, plus vite il sera satisfait, plus l’image de cette marque lui procurera un sentiment positif et plus il sera susceptible de revenir une prochaine fois.</p>
                    

                    <h4 id="monétiser-son-contenu">1.1.3 Monétiser son contenu</h4>
                    
                    <p>En connaissant bien ses utilisateurs, il est possible de leur proposer de la publicité personnalisée diffusée sur plusieurs sites internet qu’ils consultent, grâce aux données des sources de trafic. Ces canaux d’attribution sont riches d’informations. Ils permettent de mesurer la notoriété de la marque et de l’accroître via un investissement de temps et parfois d'argent. Les solutions d’annonces publicitaires sont abondantes et comptent parmi elles Google Campaign Manager, Google Ads, Facebook Business Manager mais aussi Amazon Sizmek par exemple.</p>
                    
                    <p>Un pourcentage important de trafic direct, associé aux utilisateurs accédant à un site internet en inscrivant l'URL directement dans la barre d’adresse ou via un onglet de la barre de favoris, est un bon indicateur de notoriété. Le site internet associé est reconnu. Néanmoins, la publicité permet de réengager des clients existants et de convertir de potentiels prospects en nouveaux clients. Elle est présente sous différents formats et est suivie, dans le cas des réseaux sociaux, par une communauté à travers des posts fréquents.</p>
                    
                    <p>La présence d’une marque sur des sites partenaires, dans le cadre de l'affiliation, augmente la confiance des internautes. Cette solution payante utilise le partenaire comme prescripteur et cible ses clients comme prospects de la marque. Par exemple, un site e-commerce proposant des t-shirts affichant des encarts publicitaires pour un club de sport.</p>
                    

                    <h3 id="lémergence-du-cookie">1.2 L'émergence du cookie</h3>
                    
                    <p>Que ce soit pour connaître son audience, optimiser la conversion ou monétiser son contenu, les échanges de données marketing reposent principalement sur des 
                    cookies pour suivre l’utilisateur et son parcours sur plusieurs sites sur des périodes plus ou moins longues. Afin d’en tirer le plus de profit possible, les acteurs de la publicité ont exploité une faille existante dans la mise en place des cookies pour construire leur modèle économique.</p>
                    

                    <h4 id="la-génèse">1.2.1 La génèse</h4>
                    
                    <p>En 1994, la division serveur de la société Netscape<sup><a href="#2">[2]</a></sup> faisait face à un problème. Elle souhaitait transmettre les informations de navigation d’un utilisateur, sur un site internet, de page en page. L’exploitation des paramètres d’URL était envisagée mais complexe, notamment dans le cadre des informations de panier pour un site e-commerce. Les développeurs de Netscape ont alors créé les cookies pour répondre à ce besoin.</p>
                   
                    <p>La CNIL définit un cookie comme “un petit fichier stocké par un serveur dans le terminal (ordinateur, téléphone, etc.) d’un utilisateur et associé à un domaine web”<sup><a href="#3">[3]</a></sup>. Les cookies sont utilisés pour de multiples raisons. Ils servent notamment à enregistrer des informations relatives à un utilisateur et son parcours (identifiant de connexion, préférences de langue, consentement ou refus face à la demande de collecte de données, etc.). Prenons l’exemple d’un utilisateur qui se rend sur un site e-commerce une première fois sans acheter et qui revient le lendemain pour finaliser sa commande.</p>
                   
                    <p class="illustrations">
                        <img src="/img/memoire/1.2.1_cookie-server.png" title="Dépôt de cookies pour un visiteur sur un site e-commerce" alt="Dépot de cookie via serveur" /><br><em>Dépôt de cookies pour un visiteur sur un site e-commerce</em>
                    </p>

                    <p>Le format des cookies fut développé précipitamment par Netscape. Le niveau de sécurité était faible et les cookies accessibles par d’autres serveurs. Un choix qui aura de lourdes conséquences sur la vie privée des utilisateurs.</p>
                    

                    <h4 id="la-donnée-personnelle-en-péril">1.2.2 La donnée personnelle en péril</h4>
                    
                    <p>Un site internet a la possibilité d’intégrer, dans son code, des images, des feuilles de styles, des iframes (des pages HTML imbriquées dans la page courante) ou des scripts par exemple. Ces ressources peuvent lui appartenir ou être appelées depuis un autre domaine. Et c’est là que le problème lié aux cookies fut pointé du doigt. Un site internet qui pose des cookies first (associés aux noms de domaines de la page en cours en opposition aux cookies third ou tiers associés à un domaine différent) et qui appelle des ressources tierces offre la possibilité aux serveurs tiers de lire et d’écrire des cookies first et tierce. Par conséquent, les données personnelles d’un utilisateur stockées sur son appareil via un cookie et liées à un site peuvent être partagées à d’autres sites qu’il visite si ces derniers appellent les mêmes ressources.</p>
                    
                    <p>La fiche d’identité complète d’un utilisateur peut alors être établie, sans même qu’il le sache. Si un individu navigue sur un site A de vente de chaussures, un site B d’événements de courses à pied et un site C de vente de vêtements de sport, et que ces 3 sites appellent la même ressource, le serveur tiers peut déterminer qu’il s’agit d’un sportif pratiquant la course à pied par exemple. C’est le principe de fonctionnement des bannières publicitaires. Ci-dessous, l’exemple d’un utilisateur qui visite un site A et un site B qui appellent tous les 2 la même bannière publicitaire tierce X.</p>
                    
                    <p class="illustrations">
                        <img src="/img/memoire/1.2.2_cookie-third.png" title="Dépôt de cookies tiers suite à la vue d&#39;une bannière publicitaire" alt="Dépot de cookie tiers" /><br><em>Dépôt de cookies tiers suite à la vue d'une bannière publicitaire</em>
                    </p>
                    
                    <p>Lorsque les cookies se sont généralisés, le grand public n’a pas été informé de l’implémentation des cookies, de leurs contenus et du risque d’atteinte à leur vie privée. La première bannière publicitaire est apparue sur le site hotwired.com en 1994, soit la même année que la création des cookies. Elle a été conçue pour la société AT&amp;T, spécialisée dans la téléphonie mobile américaine. Cette bannière est restée 3 mois en ligne sur le site et a généré un taux de clic de 44%. Ce qui fait donc du magazine américain Wired le précurseur de la publicité en ligne telle que nous la connaissons aujourd’hui.</p>
                    

                    <h4 id="la-croissance-dun-modèle-économique">1.2.3 La croissance d'un modèle économique</h4>
                    
                    <p>L’année suivante, c’est le moteur de recherche Yahoo qui intègre sur ses pages des espaces dédiés à la publicité. Le format des bannières instauré par hotwired.com était devenu une norme et fut repris par beaucoup d’acteurs comme IAB (Interactive Advertising Bureau) et W3C (World Wide Web Consortium). En 1996, les bannières sont devenues interactives. Hewlett Packard proposait de jouer à Pong d’Atari directement sur sa publicité. En 1999, l’affiliation fait son apparition. Les sites Web ont alors intégré les bannières promotionnelles de leurs partenaires sur leurs propres pages. Les vidéos publicitaires, avec Quicktime et Windows Media Player, sont apparues cette même année. En 2000, Google lance les campagnes SEA avec AdWords.</p>
                    
                    <p>Depuis les années 2000, l’économie liée aux publicités sur Internet s’est développée de manière exponentielle et offre de nombreux avantages que la publicité traditionnelle (TV, radio, presse) ne possède pas. Le format évolue (pop-up ou fenêtre secondaire, vidéo Flash, vidéo Youtube, annonce Facebook, mini-sites), le contenu est mieux ciblé, le coût est moins élevé et le retour sur investissement (ROI) plus important. Les annonceurs souhaitent intégrer de plus en plus la publicité avec les contenus éditorial et graphique de leurs sites. Un modèle économique entier repose sur les cookies et les acteurs l’ont très bien compris. À tel point qu’en 2017, les investisseurs placent davantage leur argent dans le digital que dans la télévision.</p>
                    
                    <p class="illustrations">
                        <img src="/img/memoire/1.2.3_advertising-revenue.png" title="Tendances de croissance trimestrielle des revenus publicitaires sur Internet 1996-2019, Source: IAB/PwC Internet Ad Revenue Report, FY 2019" alt="Evolution revenue publicité Internet" /><br><em>Tendances de croissance trimestrielle des revenus publicitaires sur Internet 1996-2019, Source: IAB/PwC Internet Ad Revenue Report, FY 2019</em>
                    </p>
                    
                    <p>Aujourd’hui, la publicité est omniprésente dans notre navigation sur le Web. Sur Youtube, les vidéos que nous consultons sont coupées par de la publicité. Certains Youtubeurs font également de la promotion de produits directement dans leurs vidéos, ce qui “force” l’utilisateur à la voir. Nos données personnelles sont stockées dans des cookies, partagées entre plusieurs sites et parfois échangées contre de l’argent à certaines entreprises sans même que nous le sachions ou que nous ayons consenti à cette collecte de données. Ces données servent ou pourraient servir également à personnaliser encore plus le contenu publicitaire. C’est pourquoi le RGPD a décidé de siffler la fin de la récréation en publiant ses textes de lois.</p>
                    

                    <h3 id="la-fin-des-cookies-et-ses-conséquences">1.3 La fin des cookies et ses conséquences</h3>
                    
                    <p>Actuellement, lorsque les entreprises souhaitent collecter de la donnée sur leur site web, elles sont confrontées à 3 grands mouvements.<br>Le premier est législatif et couvre les restrictions réglementaires imposées par le RGPD et la directive ePrivacy. La mise en conformité face à la loi devient la priorité des entreprises.<br>Le second est lié aux navigateurs qui peuvent empêcher un suivi et bloquer des comportements liés aux cookies, comme ITP (Intelligent Tracking Prevention) sur Safari, ETP (Enhanced Tracking Protection) sur Mozilla Firefox, le projet <em>Privacy Sandbox</em> de Google et le navigateur Brave qui bloque par défaut les traceurs.<br>Le troisième est lié aux extensions qu’on appelle “Ad blocker”, comme AdBlock, qui empêche des bannières publicitaires de s’afficher et de poser des cookies. Ces 3 mouvements mènent la vie dure aux cookies et aux traceurs et forcent les entreprises à repenser leur manière de collecter de la donnée.</p>
                    

                    <h4 id="le-rgpd-et-la-directive-eprivacy-dictent-les-règles-du-jeu">1.3.1 Le RGPD et la directive ePrivacy dictent les règles du jeu</h4>
                    
                    <p>Le RGPD est le règlement de référence sur la protection des données à caractère personnel. Il est applicable dans les Etats membres de l’Union Européenne depuis le 23 mai 2018. Son objectif principal est le renforcement de la protection des données personnelles. Le RGPD offre un cadre juridique harmonisé pour les entreprises qui collectent et traitent ces données. Ce règlement responsabilise les entreprises et permet aux internautes de contrôler l’utilisation de leurs données.</p>
                    
                    <p>La directive ePrivacy complète le RGPD et impose aux éditeurs de sites internet et d’applications mobiles de demander le consentement des utilisateurs avant de stocker ou d’accéder à des informations sur leurs appareils. Cette règle s’applique à tous les cookies et traceurs qui ne sont pas strictement nécessaires au bon fonctionnement du service proposé. L’article 4 paragraphe 11 du RGPD indique que le consentement doit être “libre, spécifique, éclairé et univoque”. L’utilisateur doit pouvoir aussi facilement accepter que refuser la collecte de ses données.</p>
                    
                    <p>Aujourd’hui, les sites internet et les CMP (Consent Management Platform) ne sont pas tous conformes au RGPD. Il n’y a pas d’harmonisation à l’échelle européenne et les diverses recommandations des organismes locaux peuvent donner lieu à plusieurs interprétations et niveaux de compréhension. Suite aux nouvelles recommandations de septembre 2020 proposées par la CNIL, en charge de la mise en application du RGPD et de la directive ePrivacy en France, les entreprises ont jusqu’au 31 mars 2021 pour se mettre en conformité sous peine de sanctions. Et le refus potentiel des utilisateurs face à la demande de consentement impacte grandement les entreprises et leurs partenaires. Un refus entraîne une perte de données sur les visiteurs et leur parcours pour les solutions analytiques et publicitaires, ce qui fausse le comptage réel dans l’interface. La réconciliation des parcours entre plusieurs appareils semble inconcevable si l’utilisateur refuse de partager ses données sur le site internet et l’application d’une même marque.</p>
                    
                    <p>Même si la mise en conformité et la date limite de mars 2021 occupent les esprits des entreprises, les navigateurs qui intensifient leur chasse aux cookies ainsi que les extensions bloquant les publicités ont un impact non négligeable sur la collecte de données via les cookies.</p>
                    

                    <h4 id="apple-et-la-confidentialité-des-utilisateurs">1.3.2 Apple et la confidentialité des utilisateurs</h4>
                    
                    <p>Entre fin 2016 et 2017, plusieurs entreprises ont rencontré des failles de sécurité sur leurs applications et sites internet entraînant des fuites de données personnelles. Il y a eu notamment Instagram, avec 6 millions de comptes touchés, et Uber, avec 57 millions de comptes piratés. Mais la faille la plus importante revient à la société Équifax, spécialisée dans la côte de crédit à la consommation pour les entreprises et les particuliers, avec 143 millions de clients concernés. Suite à ces nombreux incidents et face à l'inquiétude et le manque de confiance grandissant des utilisateurs dans le traitement de leurs données personnelles sur Internet, Apple a décidé de réagir et de protéger les utilisateurs de Safari en déployant un programme nommé ITP (Intelligent Tracking Prevention).</p>
                    
                    <p>La première version intitulée ITP 1.0 utilise le <em>machine learning</em> (l'apprentissage machine par l'intelligence artificielle) pour lister et catégoriser les domaines déposant des cookies afin d’identifier ceux qui le font pour un usage publicitaire et non pour un usage standard. ITP 1.0, face à ce problème, fait le choix d’instaurer une durée de vie maximale aux cookies tiers et de les supprimer automatiquement si l’utilisateur n’a pas interagi avec lui au-delà de 30 jours. Avec cette première version d’ITP, Apple déclare la guerre à ses concurrents (Google, Facebook, Criteo, etc.) et aux entreprises qui collectent de la donnée à des fins publicitaires.</p>
                    
                    <blockquote>
                        <p>“Il a suffi qu'Apple restreigne la présence de cookies sur son navigateur Safari pour que Criteo plonge en Bourse en décembre.”<br>Source : Les Echos</p>
                    </blockquote>
                    
                    <p>Après avoir déployé plusieurs versions d’ITP et autant de méthodes de contournement imaginées par les développeurs, comme l’utilisation de cookies JavaScript et du Localstorage pour stocker des informations sur le navigateur, Apple a sorti sa version 2.3 en septembre 2019 incluse à partir de Safari sur iOS 13 et Mac OS. Elle embarque les modifications des versions précédentes et en ajoute de nouvelles qui mènent la vie dure à la collecte de données. Le secteur du luxe, dont le trafic est important sur iOS, est l’un des plus touchés.</p>
                    
                    <p>Dans cette dernière version drastique d’ITP, les cookies tiers ont une durée de vie de 24h, les cookies first créés en JavaScript expirent au bout de 7 jours, les paramètres de suivi dans les URLs (gclid, fbclid, etc.) sont limités à 24h et le Localstorage est vidé au bout de 7 jours. Toutes ces contraintes ont un impact certain sur les données statistiques et publicitaires en empêchant de suivre correctement le parcours d’un utilisateur sur plusieurs jours. En effet, les solutions d’analyse, comme Google Analytics, déposent un cookie first tandis que les solutions médias, comme DoubleClick, déposent un cookie tiers pour attribuer un identifiant utilisateur. Il devient impossible d’attribuer les conversions aux bonnes sources de trafic et de rémunérer correctement les affiliés.</p>
                    
                    <p class="illustrations">
                        <img src="/img/memoire/1.3.2_itp.png" title="Impact d’ITP sur les cookies first et les cookies tiers pour l’analytique et le média" alt="ITP impacte les cookies" /><br><em>Impact d’ITP sur les cookies first et les cookies tiers pour l’analytique et le média</em>
                    </p>
                    
                    <p>Par conséquent, les annonceurs et les professionnels de la publicité doivent trouver des alternatives s’ils souhaitent continuer à collecter de la donnée sur Safari. Mais Apple n’est pas le seul à vouloir protéger ses utilisateurs. Google et Mozilla ont également leurs propres solutions pour leur navigateur.</p>
                    

                    <h4 id="firefox-et-le-consentement-au-niveau-du-navigateur">1.3.3 Firefox et le consentement au niveau du navigateur</h4>
                    
                    <p>En octobre 2018, dans la version 63 du navigateur Firefox, Mozilla implémente la fonctionnalité nommée ETP (Enhanced Tracking Protection). Son objectif est de protéger la vie privée des utilisateurs durant leur navigation en bloquant une liste de traceurs et de cookies liés à des domaines connus pour le pistage, la publicité et les réseaux sociaux. Après plusieurs mises à jour, Firefox sort ETP 2.0 en juillet 2020 qui apporte un contrôle à 3 niveaux pour l’utilisateur (Standard, Stricte et Personnalisée) et des restrictions strictes pour les traceurs, comme le montre l’image ci-dessous.</p>
                    
                    <p class="illustrations">
                        <img src="/img/memoire/1.3.3_etp.png" title="Panneau de contrôle des différents niveaux de protection proposé par Firefox" alt="Panneau de contrôle des différents niveaux de protection proposé par Firefox" /><br><em>Panneau de contrôle des différents niveaux de protection proposé par Firefox</em>
                    </p>
                    
                    <p>Le niveau Standard d’ETP, qui est activé par défaut, bloque les traceurs et cookies connus par Firefox. Le site internet continue de fonctionner normalement. En revanche, avec le niveau Strict, la protection est renforcée et certains sites peuvent ne pas fonctionner correctement. Dans cette configuration, les requêtes à Google Analytics et à Facebook par exemple ne sont pas transmises à leurs serveurs. De plus, ETP 2.0 supprime au bout de 24h les données et les cookies de suivis des domaines connus. Cela empêche ces solutions de suivre les internautes de manière fine et d'établir un profil utilisateur sans connexion ou identifiant client.</p>
                    

                    <h4 id="google-et-la-promesse-du-respect-de-lanonymat">1.3.4 Google et la promesse du respect de l’anonymat</h4>
                    
                    <p>Google intègre en novembre 2012, à partir de la version 23 de son navigateur Google Chrome, une fonctionnalité nommée Do Not Track (DNT). Cette dernière permet d’envoyer une demande d'interdiction de collecte de données et de suivi de l’utilisateur. Cette option n’est pas activée par défaut et est méconnue des internautes. De plus, les sites web n’ont pas d’obligations légales à prendre en compte cette requête. Certains sites internet cependant prennent en compte l’activation du DNT et respectent le choix de l’utilisateur. Dans ce cas, les solutions tierces ne se déclenchent pas et les cookies ne sont pas déposés. Néanmoins, l’utilisateur n’a aucune garantie que ses données ne soient collectées et utilisées sur plusieurs sites web.</p>
                    
                    <p class="illustrations">
                        <img src="/img/memoire/1.3.3_dnt-2.png" title="Affichage sur le site www.urssaf.fr d’une pop de respect de l’option DNT activée sur le navigateur Google Chrome" alt="Popup respect DNT sur URSSAF" /><br><em>Affichage sur le site www.urssaf.fr d’une pop de respect de l’option DNT activée sur le navigateur Google Chrome</em>
                    </p>
                    
                    <p>Face à la sous-exploitation du Do Not Track et aux fonctionnalités déployées par ses concurrents Apple et Mozilla pour renforcer la protection de données de leurs utilisateurs, Google a réagi et a annoncé en janvier 2020 son projet intitulé <em>Privacy Sandbox</em>. L’objectif fixé par Google d’ici deux ans est de continuer à mesurer la performance des annonces publicitaires tout en étant moins intrusif pour l’utilisateur.</p>
                    
                    <p>Grâce à un système d’API, les cookies tiers publicitaires seront amenés à disparaître, ce qui va dans le sens des recommandations faites par la CNIL. De plus, le code sera proposé en open source. Il pourrait donc être adopté par d’autres navigateurs comme Firefox et Safari afin d’uniformiser les méthodes de collecte de données et éviter aux acteurs de développer des solutions différentes pour chaque navigateur.</p>
                    
                    <p>En ce qui concerne le respect de l’anonymat de l’utilisateur, les informations de parcours seront stockées au niveau du navigateur. Les domaines tiers auront accès à des données restreintes et sélectionnées par la <em>Privacy Sandbox</em> de Google. Ce système de “boîte noire” obligera également les solutions tierces à mettre à jour leur code pour pouvoir communiquer avec les APIs proposées.</p>
                    

                    <h4 id="brave-et-la-protection-de-la-vie-privée">1.3.5 Brave et la protection de la vie privée</h4>
                    
                    <p>Brendan Eich, créateur du JavaScript et cofondateur de Mozilla, lance le navigateur web open source Brave en 2016. Son objectif avec Brave est la sécurité, la vitesse et le respect de la vie privée. Le navigateur bloque les traceurs, les cookies tiers et les publicités qui sont détectés comme solutions de collecte de données. Ce qui permet à l’utilisateur de protéger sa vie privée mais aussi d’améliorer la performance de sa navigation, la vitesse de chargement des pages et de prolonger la durée de vie des batteries de ses appareils (ordinateur portable, téléphone, etc.).</p>
                    
                    <p class="illustrations">
                        <img src="/img/memoire/1.3.5_brave-performance.png" title="Affichage du nombre de publicités et d&#39;annonces bloquées sur le navigateur Brave sur un smartphone après 2 ans d’activité" alt="Publicités et annonces bloquées sur Brave" /><br><em>Affichage du nombre de publicités et d'annonces bloquées sur le navigateur Brave sur un smartphone après 2 ans d’activité</em>
                    </p>
                    
                    <p>Brave se démarque surtout grâce à son modèle économique. Par défaut, le navigateur masque les publicités ciblées. A la place, il propose aléatoirement des notifications pour demander à l’utilisateur s’il accepte de visionner des annonces publicitaires non ciblées proposées par des partenaires de Brave. S'il accepte de regarder, le navigateur le récompense par de la cryptomonnaie intitulée BAT (Basic Attention Token) et qui se découpe en jetons. L’utilisateur peut ensuite faire des dons aux éditeurs de contenus qu’il apprécie le plus. Ce système peut être un vrai avantage pour des sites comme Wikipédia qui font très souvent des appels aux dons. En revanche, les cookies tiers et la publicité sont très impactés.</p>
                    

                    <h4 id="les-extensions-bloquent-la-publicité">1.3.6 Les extensions bloquent la publicité</h4>
                    
                    <p>Les adblockers sont des logiciels et des extensions permettant à un utilisateur de bloquer l’affichage des publicités sur les sites internet lors de sa navigation. En inspectant le code source de la page, ils sont capables de détecter la présence de scripts appartenant à des annonceurs publicitaires connus et de les bloquer avant le chargement. Pour un utilisateur, il y a un vrai bénéfice à naviguer sans publicité : la vitesse de chargement des pages augmente, la bande passante est économisée et la visualisation du site est plus confortable.</p>
                    
                    <p>En revanche, l’impact pour les solutions publicitaires semble évident. Si le contenu n’est pas chargé, les données liées à l’impression et au clic ne seront pas collectées et la régie publicitaire pourrait ne pas être rémunérée. Pour contrer ce problème, certains sites affichent une popin demandant la désactivation de l’adblocker pour accéder gratuitement au contenu et afficher la publicité.</p>
                    
                    <p class="illustrations">
                        <img src="/img/memoire/1.3.6_popin-adblocker.png" title="Affichage d’une popin pour demander la désactivation des adblockers sur le site www.lesechos.fr" alt="Popin adblocker sur Les Echos" /><br><em>Affichage d’une popin pour demander la désactivation des adblockers sur le site www.lesechos.fr</em>
                    </p>
                    
                    <p>Mais l’un des adblockers qui affecte le plus le monde du cookie est uBlock Origin. En effet, ce dernier ne se contente pas de bloquer uniquement les publicités, il empêche une multitude de scripts de s’exécuter correctement. La solution de Google Analytics pour les statistiques, utilisant le domaine www.google-analytics.com, ne peut opérer correctement. Et de manière plus globale, le TMS<sup><a href="#4">[4]</a></sup> Google Tag Manager, associé au domaine www.googletagmanager.com, est aussi bloqué par la solution. Ce qui implique que tous les scripts et les tags inclus dans le conteneur du TMS ne sont pas déclenchés.</p>
                    

                    <h3 id="un-enjeu-de-taille-pour-les-entreprises">1.4 Un enjeu de taille pour les entreprises</h3>
                    
                    <p>En plus des problèmes d’acquisition et d’exploitation des données liés aux limitations rencontrées par les différents cookies, il y a une réelle conséquence pour les entreprises dont la stratégie est conduite par la donnée. Pour connaître les impacts sur le quotidien de ces sociétés, j’ai créé un questionnaire composé de vingt questions. Quatre Web analystes, responsables des données collectées sur les sites internet et applications mobiles de leur entreprise, ont accepté de me répondre et de partager leur expérience face au RGPD et aux directives de la CNIL. Les questionnaires complets et anonymisés sont disponibles en annexe de ce mémoire. Trois principaux enjeux ont pu être identifiés grâce aux réponses : les pertes d’informations clients à limiter, la réorganisation des équipes pour suivre les évolutions législatives constantes et le coût de mise en place technique engagé.</p>
                    

                    <h4 id="une-connaissance-client-diminuée">1.4.1 Une connaissance client diminuée</h4>
                    
                    <p>Un des premiers impacts ressentis par les entreprises est une perte de données à collecter dû au refus des utilisateurs face au bandeau de demande de consentement aux cookies. D’une part sur la partie analytique, où il n’est pas possible de suivre le comportement du visiteur sur le site, et d’autre part sur le média. Un internaute venant d’une campagne média et refusant la collecte ne se verra pas attribuer le bon canal de conversion. Il devient donc difficile pour les entreprises de savoir exactement quel canal d’acquisition performe le mieux et d’ajuster leurs investissements médias en conséquence. La création et la réelle signification des audiences dans les interfaces de pilotage média sont donc moins précises. Les entreprises doivent donc mettre à jour leurs outils de collecte. Malheureusement, très peu de solutions sont aujourd’hui en mesure de fournir un outil répondant à toutes les attentes.</p>
                    
                    <p>Les différents acteurs (analytique, média, personnalisation, etc.) n'ont pas tous réussi à anticiper les évolutions des recommandations de la CNIL de septembre 2020. Sur la partie analytique, quelques solutions ont su réagir en proposant une collecte de données anonymes. AT Internet avait déjà présenté avant cette date sa mesure hybride exemptée de consentement et validée par la CNIL. Côté Google, une fonctionnalité en bêta nommée Consent mode est sortie et permet d'ajuster le comportement des tags Google Analytics, Ads et Floodlight en fonction du consentement de l'utilisateur. S’il refuse une des finalités, Google va envoyer la donnée de manière anonyme aux solutions, en respectant les directives RGPD.</p>
                    
                    <p>À l’inverse, les éditeurs médias n'ont pas devancé les nouvelles recommandations, ni opéré les changements nécessaires pour mettre en conformité leurs outils. Dans ce contexte évolutif, les solutions sont déjà très occupées à comprendre les tenants et aboutissants des mises à jour fréquentes des navigateurs comme Safari avec ITP ou ce qu'envisage Google avec <em>Privacy Sandbox</em>. Les solutions médias doivent trouver une méthode d’implémentation qui coche un maximum de cases législatives et techniques pour collecter les données en conformité.</p>
                    

                    <h4 id="une-organisation-juridique">1.4.2 Une organisation juridique</h4>
                    
                    <p>Afin de suivre la mise en conformité du RGPD, les entreprises ont dû mettre en place une structure juridique dédiée. Elle est principalement composée d'un Data Protection Officer (DPO) mais différentes personnes des départements marketing et digital peuvent compléter les effectifs. Si ces profils n’existent pas dans l’entreprise, il peut y avoir un potentiel coût de recrutement en plus du temps d’investissement pour lire et comprendre les textes de lois. Ce groupe juridique peut se réunir à une fréquence régulière pour suivre et garantir la bonne application des principales directives auprès des équipes concernées.</p>
                    
                    <p>En interne, la structure juridique exerce une veille des recommandations émises par la CNIL et les autorités de protection des données (en anglais Data Protection Authority ou DPA) des autres pays sur le RGPD. Les webinars et diverses communications diffusées par les différents acteurs du marchés complètent la connaissance des entreprises sur le sujet. Le DPO et les experts digitaux centralisent les informations relatives aux bonnes pratiques et créent des lignes directrices qu’ils diffusent auprès des équipes concernées. De plus, il y a un vrai travail d’annonce et de formation auprès des différents profils analytique et média pour leur expliquer la baisse de trafic, de session et d’utilisateurs dans les outils. L’analyse se fera uniquement sur un volume de visite pour lesquels les internautes ont donné leur consentement. Sauf si le DPO et son équipe décident de mettre en place une mesure anonyme exemptée et dans ce cas, il faudra expliquer que la réconciliation de données ne sera plus possible.</p>
                    

                    <h4 id="un-investissement-technique">1.4.3 Un investissement technique</h4>
                    
                    <p>Bien que la CNIL ait mis à jour ses recommandations en septembre 2020, les entreprises ont anticipé la mise en place de ces nouvelles règles pour la collecte du consentement sur les cookies. La plupart d'entre elles possédait donc déjà un bandeau ou une popin de recueil du consentement. Néanmoins, les nouvelles recommandations changent la donne et impliquent de modifier sa CMP.</p>
                    
                    <p>La mise en place d'une bannière de consentement a un coût de développement à prendre en compte et doit être suivi via un planning. Les entreprises sont amenées à mettre en place des A/B tests sur le format et la position du bandeau et des boutons, le contenu ou encore les couleurs. A la fin des tests, il est possible de connaître la version qui a la meilleure performance avec le taux d'acceptation le plus important. Un coût d'accompagnement par des cabinets de conseil doit être considéré pour aider à implémenter la CMP et établir les A/B tests. Les raisons sont nombreuses pour les entreprises mais presque obligatoires pour être conformes au RGPD.</p>
                    
                    <p>Des outils variés vont continuer à évoluer et d'autres vont émerger suite aux implémentations en cours sur les sites et applications des entreprises. Un coût supplémentaire de développement pourrait donc s’ajouter aux coûts déjà évoqués. Les entreprises s'interrogent également sur des solutions pour tenter de récupérer les données non consenties via des logs ou d'estimer celles qu'ils auraient dû avoir via la modélisation. D’autres solutions techniques sont également envisagées pour récupérer un niveau de données semblable au RGPD.</p>
                    
                    <p>Depuis 1994 et l’apparition du premier cookie, l’économie digitale a beaucoup évolué. Les cookies sont au centre de beaucoup de solutions, dont les publicités. Suite à une collecte intense des données personnelles des internautes par les solutions, le RGPD et les navigateurs s’engagent à renforcer la protection des utilisateurs. Les entreprises et les éditeurs doivent donc composer avec les obligations législatives et techniques tout en parvenant à collecter des données pertinentes pour leur secteur.</p>
                    
                    <p>Dans la seconde partie, nous allons étudier les avantages et inconvénients de quatre solutions différentes : l’exemption CNIL, le server-side, la navigation authentifiée et la modélisation pour le <em>machine learning</em>. Nous tenterons d’identifier comment elles peuvent permettre une conformité au RGPD tout en conservant une qualité de service équivalente à la période précédant sa mise en place.</p>
                </section>
                <section>
                    <h2 id="partie-2---concilier-respect-du-rgpd-et-exhaustivité-de-la-connaissance-utilisateur">Partie 2 - Concilier respect du RGPD et exhaustivité de la connaissance utilisateur</h2>
                    
                    <p>Le monde sans cookies qui se prépare impacte aussi bien les acteurs de solutions que les entreprises qui collectent la donnée. La position de l’ICO (Information Commissioner's Office), qui est le pendant britannique de la CNIL, fait polémique car elle requiert un consentement explicite pour le dépôt de cookie à des fins purement statistiques<sup><a href="#5">[5]</a></sup> tandis que la CNIL propose une exemption de consentement pour cette finalité sous certaines conditions. La CNIL dans ses recommandations demande également un consentement pour les tests A/B et la personnalisation. Et, dans le cas où l’utilisateur refuse tous les cookies, il devient non mesuré, c’est-à-dire parfaitement inexistant dans les outils de suivi.</p>
                    
                    <p>Alors la question se pose : quelle solution permettrait de concilier qualité de service et respect du RGPD ? Les textes du RGPD sont souvent mis à jour et soumis à interprétation de la part des éditeurs de sites européens : durée de vie des cookies selon la réponse de l’utilisateur face à la bannière de consentement (l’acceptation pourrait être conservée plus longtemps et par conséquent le bandeau réaffiché plus rapidement dans le cadre d’un refus). Sans mesure précise de l'efficacité des parcours, des fonctionnalités, sans tests A/B ni personnalisation, la qualité de service des sites Web européens ne peut rester au niveau. Les éditeurs de sites non européens risquent alors d’être avantagés car ils pourront apprendre de leurs données provenant d'utilisateurs en dehors de l'Europe sans encombre afin de construire et d’optimiser les interfaces de manière efficace.</p>
                    
                    <p>Les différents acteurs et entreprises vont donc être contraints de réagir et d’engager une réflexion sur les moyens possibles pour continuer à perfectionner leurs connaissances utilisateurs. Dans cette partie, nous allons étudier les avantages et inconvénients de solutions disponibles pour obtenir un maximum de données tout en respectant la conformité au RGPD.</p>
                    

                    <h3 id="exemption-cnil">2.1 Exemption CNIL</h3>
                    
                    <p>Le RGPD et la directive ePrivacy imposent de recueillir le consentement de l'utilisateur avant de pouvoir déposer des cookies sur son terminal. Néanmoins, la CNIL indique dans ses recommandations<sup><a href="#6">[6]</a></sup> que certains traceurs de mesure d’audience, utilisés pour obtenir des informations sur la performance, la fréquentation et les contenus consultés d’un site internet, peuvent bénéficier d’une exemption de consentement sous certaines conditions. Les recommandations de la CNIL s'appliquent uniquement pour la France. Un éditeur de site multi pays doit donc se renseigner auprès des organismes dédiés de chaque pays dans lequel il est présent pour vérifier s’il peut également exempter la mesure d’audience dans le pays en question.</p>
                    

                    <h4 id="collecte-de-données-dès-la-première-page">2.1.1 Collecte de données dès la première page</h4>
                    
                    <p>Grâce à cette exemption, les outils de mesure d’audience qui en bénéficient peuvent déposer un cookie dès la première page vue lors de la navigation de l’internaute. Cette première page vue est cruciale car elle permet de récupérer les taux de rebonds et les sources de trafic pour mesurer les performances des campagnes. Cette collecte de données n’étant pas désactivable par l’utilisateur, elle donne l’avantage de pouvoir suivre l’ensemble de son parcours sur le site internet.</p>
                    
                    <p>Le bandeau de consentement peut alors être facultatif si seule la solution de mesure exemptée est implémentée. L’éditeur du site devra néanmoins informer les internautes de la mise en place de ce traceur via sa politique de confidentialité. La transparence et le respect de l’anonymat permettent de renforcer l’identité de la marque et la confiance de l’utilisateur.</p>
                    

                    <h4 id="une-finalité-limitée">2.1.2 Une finalité limitée</h4>
                    
                    <p>La CNIL est claire sur la façon dont l’outil implémenté doit être utilisé pour bénéficier de l’exemption en disant qu’il doit “avoir une finalité strictement limitée à la seule mesure de l’audience du site”<sup><a href="#6">[6]</a></sup>. Par conséquent, toute autre solution ne vérifiant pas cette règle ne peut bénéficier de l’exemption CNIL et doit être soumise à l’acceptation du consentement par l’internaute pour transmettre de l’information. Il est impossible, par exemple, d’utiliser la donnée collectée dans le cadre de la mesure d’audience pour définir des groupes d'utilisateurs selon des critères spécifiques (segmentation), du retargeting ou de la personnalisation. Elle doit servir uniquement à des fins statistiques anonymes et rester hermétique à tout recoupement avec d’autres sources de données. La connaissance client par l’entreprise devient donc moins précise.</p>
                    
                    <p>Une autre condition à respecter pour bénéficier de l’exemption proposée par la CNIL est que l’outil d’audience ne doit pas “permettre le suivi global de la navigation de la personne utilisant différentes applications ou naviguant sur différents sites web”<sup><a href="#7">[7]</a></sup>. Ainsi, il ne sera plus possible de faire des analyses entre différents domaines. Si un éditeur de site propose un parcours interdomaine à ses internautes, par exemple www.monsite.fr vers www.monsite.es dans le cadre d’un changement de langue ou www.monsite.fr vers moncompte.monsite.fr pour afficher le profil, il ne pourra pas réconcilier les données des différents domaines entre elles. Les développeurs auront un coût potentiel et devront repenser l’architecture du site s’ils souhaitent obtenir l’exemption CNIL et suivre ce type de parcours (www.monsite.com/fr vers www.monsite.com/es ou www.monsite.com/mon-compte).</p>
                    

                    <h3 id="server-side">2.2 Server-side</h3>
                    
                    <p>En règle générale, les implémentations de scripts pour collecter et transmettre de la donnée vers des outils tiers sont faites côté client (client-side). Elles peuvent être embarquées au sein d’un TMS (Tag Management System) ou être implémentées directement dans le code source du site. Les requêtes générées vont être visibles sur le navigateur de l’utilisateur via l’onglet Réseau (Network en anglais) de l’outil de développement. À l’inverse, l’implémentation d’une logique server-side va déplacer tout ce travail sur un serveur distant. Cette technique offre de nombreux avantages quant à la performance du site et permet d'échapper aux restrictions de suivi imposées par certains navigateurs. Néanmoins, cette méthode nécessite toujours une demande de consentement de l’utilisateur pour la collecte de données.</p>
                    

                    <h4 id="réduire-la-charge-client-pour-un-meilleur-contrôle">2.2.1 Réduire la charge client pour un meilleur contrôle</h4>
                    
                    <p>En déportant le chargement des scripts server-side, les pages contiennent moins de lignes de code à lire et moins de scripts à déclencher. Par conséquent, la performance du site augmente, les risques qu’une erreur dans le script fasse buguer ou crasher le site sont amoindris. Les navigateurs qui mettent en place un blocage des systèmes de suivis comme ITP et ETP, ainsi que les adblockers, ne sont pas en mesure d’empêcher l’envoi de requêtes du serveur vers les solutions tierces.</p>
                    
                    <p>Un cas rencontré souvent par les équipes concernées lors des implémentations côté client, notamment sur un site e-commerce, est l’écart du nombre de transactions, et donc de revenus, entre l’outil d’analyse et le back-office. Ceci est dû au temps nécessaire au chargement du script de la solution d’analyse. Si l'utilisateur quitte le site avant que le script se charge, la donnée n’est pas envoyée. Le back-office est plus fiable et plus précis, ce qui oblige l’analyste à jongler avec les deux outils. Grâce au tracking <em>server-side</em>, la solution analytique se déclenche côté serveur une fois la confirmation de paiement reçue et est indépendante de la fermeture de la page par l'utilisateur sur le site. Le nombre de conversions est donc égal à celui rapporté par le back-office.</p>
                    
                    <p>Les données transmises par les développeurs au serveur et envoyées aux diverses solutions sont sous contrôle avec cette méthode. Les scripts appelés par <em>piggybacking</em> (appels de tags imbriqués au sein d’autres tags à l’insu du site qui les implémente et parfois envoyées sans consentement) et <em>data leakage</em> (fuite de données vers des tiers non désirés) ne peuvent pas récupérer les informations du site internet car exécutés côté serveur. Il y a également une homogénéisation des informations. Il est possible de récupérer l’adresse IP calculée par le serveur pour la transmettre à chaque solution.</p>
                    

                    <h4 id="consentement-et-temps-de-développement">2.2.2 Consentement et temps de développement</h4>
                    
                    <p>Un tracking <em>server-side</em> n’implique pas une exemption de la loi. Il est impératif d’obtenir le consentement de l’utilisateur avant de déclencher l’envoi de requête vers diverses solutions. Les développeurs du site internet doivent récupérer les informations de la CMP et les transmettre dans la requête au serveur. Il sera ainsi possible de conditionner les scripts en fonction du choix de l’internaute.</p>
                    
                    <p>L’utilisation du <em>measurement protocol</em>, qui permet aux développeurs de faire des requêtes HTTP pour envoyer des données brutes d'interaction utilisateur directement aux serveurs de la solution, est la méthode la plus utilisée pour le suivi en <em>server-side</em>. Malheureusement, elle n’est pas supportée par toutes les solutions. Le choix d’une implémentation en <em>server-side</em> dépend donc des outils de destinations choisis.</p>
                    
                    <p>Un effort supplémentaire est demandé aux développeurs avec le tracking en <em>server-side</em> car toutes les informations calculées et transmises naturellement par les librairies JavaScript ne le sont plus. L’identifiant de session, le user-agent, la géolocalisation, les paramètres de campagne ou encore le <em>timestamp</em> pour analyser l’utilisateur et son parcours sous plusieurs points de vues sont toujours nécessaires. Le plan de mesure et de collecte de données à fournir aux développeurs doit être plus détaillé pour prendre ces éléments en considération.</p>
                    

                    <h3 id="navigation-authentifiée">2.3 Navigation authentifiée</h3>
                    
                    <p>De nombreux sites internet proposent à leurs visiteurs de créer un compte utilisateur. Que ce soit pour commander des produits sur un site marchand, s’abonner à un service de presse en ligne ou encore à un réseau social. Certaines plateformes nécessitent d’ailleurs d’être membre pour accéder au contenu qu’elles proposent, comme pour les acteurs de la vente privée (Voyage Privé, Veepee, Showroomprive, etc..). Il n'est pas possible de connaître leurs offres sans se connecter. Par la suite, les utilisateurs bénéficient des fonctionnalités liées à leur profil, leur panier et leurs commandes en échange de leurs informations personnelles. Par exemple, une adresse email pour être prévenu de l'ouverture d'une vente chez Veepee. Le site internet peut alors personnaliser la relation avec son client. En revanche, il ne doit pas recouper ces informations avec d’autres solutions analytiques et médias sans le consentement de l'utilisateur.</p>
                    

                    <h4 id="une-relation-personnalisée">2.3.1 Une relation personnalisée</h4>
                    
                    <p>En proposant une création de compte, le site internet récupère de nombreuses informations personnelles sur ses utilisateurs (nom, prénom, âge, email, etc…) et plus la demande de création de compte arrive tôt dans le parcours de l’utilisateur, plus rapidement le site s’assure de récupérer ces données. L’éditeur du site devient alors propriétaire de ces données. Il peut les exploiter selon son bon vouloir. Ainsi, par exemple, si le site internet propose un parcours e-commerce, les informations de commande pourront être utilisées pour cibler les utilisateurs sur le canal de contact où le client est le plus réactif et lui proposer des produits ou des promotions en relation avec son achat et ses préférences. Cela peut prendre plusieurs formes : emailings avec l’email de l’utilisateur, sms grâce à son numéro de téléphone portable, campagnes de mailing à l’adresse de livraison ou encore pushs notifications sur les téléphones dans la cas des applications. À ce titre, on conçoit aisément que la stabilité de l’identifiant pour suivre un utilisateur dans la relation est importante.</p>
                    
                    <p>Lorsque les données CRM sont réconciliées avec des données de mesures d’audience grâce à l’identifiant de compte, la connaissance de l’utilisateur est fortement enrichie. Il est possible de comprendre dans les détails son parcours et de le personnaliser en fonction de son profil. Dans son outil analytique, Google propose une fonctionnalité nommée “Google Signals”. Elle permet de croiser les données du site internet et de l’application mobile si l’utilisateur s’est connecté sur les deux appareils avec le même compte afin de lui proposer de la publicité personnalisée.</p>
                    
                    <p>Si l’on prend en compte la complexité, somme toute relative, que nécessite la mémorisation d’un mot de passe supplémentaire côté utilisateur, le compte client apparaît alors comme un espace sécurisé pour centraliser son identité et ses données. Il peut y retrouver ses informations, ses historiques de commandes, les produits qu’il préfère mais également les avantages qu’il cumule avec une carte de fidélité. Sa navigation devient personnalisée. Elle reflète ses goûts et lui permet de gagner un temps précieux. Une relation privilégiée s’instaure donc entre l’utilisateur et la plateforme, comme lorsque l’on entre dans une boutique et que le vendeur nous appelle par notre prénom.</p>
                    

                    <h4 id="frein-potentiel-à-la-conversion-de-lutilisateur">2.3.2 Frein potentiel à la conversion de l’utilisateur</h4>
                    
                    <p>Il n’y a pas vraiment d’inconvénient pour une entreprise à proposer une création de compte à ses visiteurs si elle est pertinente. La demande d'inscription doit être présentée au bon moment en échange d’une promesse de valeur ajoutée (une remise sur le prochain achat, retrouver ses commandes, etc.). Dans le cas contraire, il y a un risque potentiel de faire fuir l’internaute. D'ailleurs, certains sites comme les portfolios n'ont ni l’intérêt ni l’utilité à mettre en place un module de création de compte. L’entreprise a une part de responsabilité vis-à-vis des données collectées. En plus de ne pas collecter des données qui n’ont pas de cohérence avec la fonction du site, elle doit également permettre à l’utilisateur de pouvoir supprimer toutes les informations obtenues sur lui de la manière la plus simple possible mais aussi être en mesure de prouver qu’il ne reste aucune trace de lui. En ce qui concerne la réconciliation des données CRM avec d’autres solutions, elle est possible uniquement si le consentement de l'utilisateur est obtenu.</p>
                    
                    <p>L’expérience utilisateur avec la création d’un compte doit être maîtrisée par l’entreprise. Un formulaire qui demande beaucoup d’informations peut rendre réticents les prospects. D’ailleurs seules les informations strictement nécessaires peuvent être demandées dans un premier temps. Les sites e-commerces ont d’ailleurs vu apparaître des tunnels d’achats en mode invité, n’obligeant pas l’utilisateur à s’inscrire et lui permettant tout de même de passer commande. Forcer la création du compte entraîne des abandons de panier et une perte de prospects qui auraient pu ne plus avoir envie de visiter le site.</p>
                    

                    <h3 id="modélisation-et-machine-learning">2.4 Modélisation et Machine Learning</h3>
                    
                    <p>Si un utilisateur refuse la collecte de données, via le bandeau ou la popin de demande de consentement, il ne peut pas être suivi. De ce fait, plusieurs indicateurs de performance, comme le nombre d’utilisateurs et de sessions, sont alors impactés car les informations ne sont pas disponibles dans les outils d'analyse.</p>
                    
                    <p>Grâce au <em>machine learning</em> et aux données des utilisateurs qui ont consenti, il est possible toutefois de simuler le comportement des utilisateurs non mesurés. Et avec la modélisation qui en découle, établir la structure des informations obtenues pour estimer des indicateurs dans un scénario où tous les utilisateurs auraient accepté les cookies de mesure.</p>
                    

                    <h4 id="construire-des-données">2.4.1 Construire des données</h4>
                    
                    <p>Cette méthode permet d’obtenir des estimations liées aux indicateurs de performance clés pour les équipes dédiées tout en étant conforme au RGPD. La machine apprend et modélise à partir des données de navigation fournies par les utilisateurs qui ont accepté les cookies de mesure. Elles peuvent ensuite être utilisées pour restituer, dans une interface graphique, les résultats. Les entreprises pilotées par la donnée peuvent ainsi continuer à prendre des décisions tout en respectant le choix de leurs utilisateurs.</p>
                    
                    <p>Si le site internet possède des données collectées avant la mise en place de la demande de consentement, elles couvrent donc l’exhaustivité des utilisateurs. Elles peuvent alors servir de base de référence pour le machine learning et la modélisation et être comparées avec le résultat obtenu par l’estimation.</p>
                    

                    <h4 id="estimation-approximative">2.4.2 Estimation approximative</h4>
                    
                    <p>Cette solution reste toutefois une estimation approximative du nombre d'utilisateurs, de sessions et d’interactions. Même si certaines solutions de CMP permettent d’obtenir des statistiques sur l’utilisation de leur outil de consentement et notamment du nombre de refus, il n’y a aucune assurance concernant la fiabilité du volume d'utilisateurs n’ayant pas accepté. Il est nécessaire d’avoir un volume suffisant de données pour utiliser le machine learning. Les résultats risqueraient, dans le cas contraire, d’être complètement faussés.</p>
                    
                    <p>Le temps de préparation, la capacité des machines et le retraitement des données sont des informations cruciales dans le coût de la mise en place. Chaque changement significatif du site internet, modifiant le comportement de l'utilisateur, implique un nouvel entraînement ou une nouvelle itération pour la machine. Il peut donc être complexe d’instaurer et de maintenir cette méthode.</p>
                    

                    <h3 id="un-consentement-souvent-nécessaire">2.5 Un consentement souvent nécessaire</h3>
                    
                    <p>Les solutions que nous venons d’aborder ont chacune leur lot d’avantages et d’inconvénients. Elles permettent soit de mesurer l’audience d'un site internet de manière anonyme et sans consentement soit d’obtenir des informations personnelles des utilisateurs après acceptation d’un bandeau ePrivacy. Aujourd’hui, aucune solution complète permettant une connaissance accrue de ses utilisateurs en toute conformité au RGPD existe. C’est aux entreprises de choisir celle qui correspond le mieux à leur situation en fonction de différents critères (faisabilité technique, coût d’intégration, compétences internes, etc).</p>
                    
                    <p>Dans le cadre d’une mesure d’audience anonyme, il est possible d’obtenir une exemption de la CNIL. Mais si le site internet souhaite mesurer une audience identifiée et a implémenté d'autres outils, le consentement de l’utilisateur devient alors indispensable pour réconcilier les données. C’est pourquoi, les entreprises investissent du temps dans des A/B tests de bandeaux pour accroître leur chance d’obtenir une acceptation totale aux différentes finalités énoncées.</p>
                    
                    <p>La réponse à la question de la réconciliation entre le respect du RGPD et le maintien de la qualité de service proposée n’est pas forcément l’application d’une seule et unique solution. Elle est peut-être la combinaison de solutions évoquées et d’autres solutions innovantes qui vont émerger par la suite. Toutes ces solutions n’excluent pas forcément la demande de consentement pour la collecte des données de l’utilisateur. Pour mieux comprendre les enjeux liés à l’implémentation de ces solutions, nous allons expérimenter dans la partie suivante une collecte de données server-side et conforme au RGPD.</p>
                </section>
                <section>
                    <h2 id="partie-3---expérimentation-dune-collecte-de-données-sans-cookies-sans-javascript-et-conforme-au-rgpd">Partie 3 - Expérimentation d’une collecte de données sans cookies, sans JavaScript et conforme au RGPD</h2>
                    
                    <p>Les cookies ayant la vie dure, les entreprises cherchent et testent des solutions de collecte de données leur permettant de concilier la conformité au RGPD avec une connaissance fine de leurs utilisateurs. Précédemment, nous avons évoqué plusieurs solutions en mettant en lumière leurs avantages et inconvénients respectifs. Nous allons donc tenter désormais l’expérience suivante : la mise en place d’un outil de mesure d'audience sans cookies et conforme au RGPD. Dans une volonté d’efficacité et afin de limiter au maximum l’impact sur les performances du navigateur des internautes, la solution que nous proposerons sera sans JavaScript et les requêtes seront traitées côté serveur.</p>
                    
                    <p>Pour mettre en œuvre cette expérience, j’ai créé un site internet non commercial, mettant en page mon curriculum vitae, et accessible à l’adresse suivante : www.guillaume-sinnaeve.com. L’objectif de ce projet est de comprendre la méthode utilisée pour collecter de la donnée et d’analyser les informations récupérées sur les visiteurs. Dans cette partie, nous aborderons dans un premier temps les obligations législatives à respecter pour collecter la donnée des utilisateurs dans le cadre de l’exemption CNIL. Ensuite, nous verrons les solutions techniques utilisées pour suivre le parcours du visiteur sur le site sans cookies et sans JavaScript, grâce à d’autres langages et un paramètre d’URL. Puis, nous aborderons le traitement effectué sur les données pour faciliter leur lecture et leur stockage dans la base. Enfin, nous mettrons en place une page d’analyse contenant des visualisations graphiques des données collectées.</p>
                    

                    <h3 id="les-pré-requis-législatifs">3.1 Les pré-requis législatifs</h3>
                    
                    <p>Dans le cadre de cette expérience, j’ai opté pour le choix d’une mesure d’audience exemptée de consentement selon les recommandations de la CNIL. Cela me permet de récupérer les informations des visites et d’éprouver l’outil de collecte de données mis en place. Le site étant une vitrine de mon parcours et n’ayant pas d’objectifs de vente, il est principalement destiné à des internautes français. Nous allons donc étudier et implémenter les recommandations émises par la CNIL pour être en conformité et bénéficier de l’exemption de consentement.</p>
                    

                    <h4 id="une-finalité-stricte">3.1.1 Une finalité stricte</h4>
                    
                    <p>L’exemption CNIL implique le respect par l’éditeur du site de quelques règles bien définies. Une des plus importantes est la finalité. Elle doit être “strictement limitée à la seule mesure de l’audience du site ou de l’application [...] pour le compte exclusif de l’éditeur”<sup><a href="#8">[8]</a></sup>. Pour notre expérience, l’outil mis en place a pour objectif d’analyser de manière anonyme les contenus consultés par les visiteurs. Cette solution ne posant pas de cookies et étant développée uniquement sur le site www.guillaume-sinnaeve.com, elle ne permet pas de suivre les visiteurs à travers différents sites internet. En ce qui concerne le non recoupement et le non transfert des données vers des solutions tierces, c’est à l’éditeur du site d’assurer l’application de cette règle. Les visiteurs n’ont aucune garantie et doivent faire confiance à l’éditeur. Dans le cadre de l’expérience, la solution n’est pas recoupée et les informations sont stockées sur une base de données propre au site (voir Annexe 8) et non accessible à des tiers.</p>
                    
                    <p class="illustrations">
                        <img src="/img/memoire/3.1.1_database.png" title="Schéma de la base de données collectées dans le cadre de l’expérience" alt="Schéma de la base de données" /><br><em>Schéma de la base de données collectées dans le cadre de l’expérience</em>
                    </p>
                    
                    <p>Les entreprises ont un devoir d'information envers les utilisateurs. C’est pourquoi, le site doit disposer d’un texte faisant référence à la finalité des données collectées. Cette mention peut être présente sur un bandeau de consentement mais aussi sur une page dédiée à la politique de confidentialité.</p>
                    

                    <h4 id="informer-les-utilisateurs">3.1.2 Informer les utilisateurs</h4>
                    
                    <p>Le RGPD repose sur la transparence des éditeurs de site internet avec leurs utilisateurs. Il encourage à expliciter au maximum les traitements faits sur les données à caractère personnel. Dans le cadre de l’exemption CNIL, il n’est pas nécessaire de mettre en place un bandeau de consentement s’il s’agit de la seule solution implémentée sur le site. Néanmoins, il est indispensable d'expliquer aux utilisateurs la finalité du traitement effectué. Une mention au sein d’une page de politique de confidentialité<sup><a href="#9">[9]</a></sup> répond à ce besoin (voir Annexe 5). Cette page doit être accessible à tout moment sur le site. Par conséquent, j’ai opté pour la présence d’un lien de redirection vers la politique de confidentialité au bas de toutes les pages.</p>
                    
                    <p class="illustrations">
                        <img src="/img/memoire/3.1.2_privacy-policy.png" title="Mention de la finalité des données collectées au sein de la page de politique de confidentialité" alt="Mention de la finalité des données collectées au sein de la page de politique de confidentialité" /><br><em>Mention de la finalité des données collectées au sein de la page de politique de confidentialité</em>
                    </p>
                    
                    <p>Concernant la durée de vie des cookies et autres traceurs, la CNIL recommande un maximum de treize mois. Sur le site utilisé pour l’expérience, il n’y a pas de cookies. En substitution, c’est un paramètre d’URL “sid” qui effectue le suivi du visiteur sur différentes pages. La valeur de ce paramètre est renouvelée au-delà de 30 minutes d’inactivité du visiteur. Ci-après un exemple d’URL contenant le paramètre “sid” avec une des valeurs attendues : https://www.guillaume-sinnaeve.com/fr/home?sid=1609693795_275788320.</p>
                    
                    <p>Toutes les informations qui sont collectées dans le cadre de l’expérience sont stockées sur une base de données. La CNIL recommande une conservation maximale d’une durée de vingt-cinq mois. Pour être certain de ne pas détenir des données au-delà de cette limite, une routine a été mise en place sur la base de données (voir Annexe 6). Quotidiennement, un contrôle de la base de données est effectué pour supprimer les informations dont la date d’enregistrement est supérieure à 25 mois.</p>
                    
                    <p class="illustrations">
                        <img src="/img/memoire/3.1.2_event-database.png" title="Création de l’événement de suppression automatique des données enregistrées au delà de 25 mois dans la base" alt="Création de l’événement de suppression automatique des données enregistrées au delà de 25 mois dans la base" /><br><em>Création de l’événement de suppression automatique des données enregistrées au delà de 25 mois dans la base</em>
                    </p>
                    
                    <p>Nous connaissons désormais les pré-requis législatifs à respecter pour mettre en place une collecte de données sur le site www.guillaume-sinnaeve.com dans le cadre de l’expérience tout en étant conforme au RGPD. Nous allons maintenant nous intéresser aux contraintes techniques imposées pour cette expérimentation et aux méthodes utilisées pour réussir la collecte.</p>
                    

                    <h3 id="les-contraintes-techniques">3.2 Les contraintes techniques</h3>
                    
                    <p>Dans le cadre de ce projet de mesure d’audience du site, plusieurs règles sont imposées : l’utilisation du JavaScript est proscrite, le traitement des informations doit être effectué côté serveur et aucun cookie ne doit être créé.</p>
                    
                    <p>L’objectif étant de capitaliser sur les langages adoptés pour le développement du site afin de préserver au maximum la performance et l’expérience utilisateur, c’est donc logiquement le PHP (acronyme récursif pour “PHP : Hypertext Preprocessor”) qui sera utilisé pour collecter, traiter et restituer les données. Les actions réalisées par les visiteurs sur le site seront mesurées via du CSS (Cascading Style Sheets). Enfin, grâce à un paramètre d’URL, il sera possible d'identifier un visiteur et son parcours sur plusieurs pages du site. Les données collectées seront enregistrées dans une base de données.</p>
                    

                    <h4 id="collecte-des-données-en-php">3.2.1 Collecte des données en PHP</h4>
                    
                    <p>Le PHP est un langage qui permet de construire des pages contenant du code HTML côté serveur et de restituer le résultat dans le navigateur côté client. C’est un avantage important pour les éditeurs de site. Ils peuvent ainsi exécuter du code avant l’affichage du contenu HTML et non accessible pour un utilisateur depuis le navigateur. Cette méthode permet d’assurer une collecte des données à chaque page. A l’inverse, le code JavaScript peut être problématique dans certains cas. S’il est appelé tardivement sur la page, un utilisateur peut quitter le site avant même que le script ait eu le temps de s’exécuter. De plus, beaucoup de fonctions JavaScript ne sont pas compatibles sur les anciens navigateurs. Ce qui impose aux développeurs de prévoir et de tester son code à travers des versions différentes de navigateurs.</p>
                    
                    <p>De ce fait, chaque page du site www.guillaume-sinnaeve.com est développée en PHP. Au début de chacune d’entre elles est inséré l'appel à un fichier nommé collect.php<sup><a href="#10">[10]</a></sup>. Ce dernier contient toute la mécanique qui va permettre de calculer la valeur de l’identifiant visiteur et de collecter les différentes informations concernant l’utilisateur, les pages et les interactions effectuées sur le site. A la fin de ce fichier, toutes les données récupérées sont enregistrées dans une base de données.</p>

                    <pre class="sourceCode php"><code class="sourceCode php"><span class="kw">&lt;?php</span> 
    <span class="kw">include</span> <span class="st">&#39;../analytics/collect.php&#39;</span><span class="ot">;</span>
<span class="kw">?&gt;</span>

&lt;!DOCTYPE html&gt;
&lt;html&gt;</code></pre>

                    <p class="illustrations">
                        <em>Exemple d’une insertion du fichier collect.php sur une des pages du site</em>
                    </p>
                    
                    <p>Le PHP envoie les informations du côté du serveur. Les données transmises ne sont donc pas visibles par l’utilisateur. En regardant les ressources chargées dans le Network du navigateur, seul l’appel au fichier apparaît.</p>
                    
                    <p class="illustrations">
                        <img src="/img/memoire/3.2.1_request.png" title="Visibilité de la ressource home.php dans le Network sur la page https://www.guillaume-sinnaeve.com/fr/home" alt="Visibilité de la ressource home.php dans le Network sur la page https://www.guillaume-sinnaeve.com/fr/home" /><br><em>Visibilité de la ressource home.php dans le Network sur la page https://www.guillaume-sinnaeve.com/fr/home</em>
                    </p>

                    <p>Ce qui peut être problématique pour l’éditeur de site qui met en place cette solution et qui souhaite vérifier la pertinence de ce qu’il collecte. Pour pouvoir effectuer ce contrôle de qualité, il est possible d’utiliser les en-têtes de réponse du fichier PHP chargé sur la page. Dans le cadre de l’expérience, les en-têtes sont préfixées par le terme “analytics_” et concaténées avec l’information collectée (exemple : analytics_device_browser: Chrome).</p>

                    <p class="illustrations">
                        <img src="/img/memoire/3.2.1_headers.png" title="Exemple d&#39;en-têtes de réponse de la page https://www.guillaume-sinnaeve.com/fr/home" alt="Exemple d&#39;en-têtes de réponse de la page https://www.guillaume-sinnaeve.com/fr/home" /><br><em>Exemple d'en-têtes de réponse de la page https://www.guillaume-sinnaeve.com/fr/home</em>
                    </p>

                    <p>Le PHP permet donc de collecter les informations des pages. Néanmoins, il est intéressant de connaître les interactions des utilisateurs au sein d’une page pour mesurer leur engagement avec le site. Ne pouvant pas utiliser le JavaScript, nous allons voir comment le CSS peut répondre à notre besoin.</p>


                    <h4 id="mesure-des-interactions-en-css">3.2.2 Mesure des interactions en CSS</h4>
                    
                    <p>Savoir si une page est vue par les utilisateurs est une première étape. Mais cette information seule n’est pas suffisante pour juger de la pertinence du contenu sur la page. En JavaScript, il est possible de mesurer la progression de lecture du contenu et les actions réalisées sur les pages, comme les clics sur les boutons. Des fonctions d'écoute (en anglais <em>addEventListener</em>) permettent d’exécuter du code suite à l’action d’un utilisateur, comme le scroll et le clic, dans l’objectif d’envoyer des informations à une solution d’analyse, par exemple. Néanmoins, dans le cadre de cette expérience, le JavaScript est prohibé. Par conséquent, nous allons utiliser un autre langage.</p>
                    
                    <p>Le CSS permet de mettre en forme le contenu HTML. Il définit les propriétés des éléments de la page telles que la couleur, la taille, l’opacité, la position, etc. Un des avantages du CSS est qu’il permet de définir des propriétés différentes en fonction d’un état spécifique d’un élément grâce aux pseudo-classes. Par exemple, l’état initial d’un bouton peut avoir une couleur de fond bleue et devenir verte au survol de la souris par l’utilisateur, via la pseudo-class <em>hover</em>.</p>
                    
                    <p>Pour l’expérience, des boutons de type chevron sont positionnés sur différentes pages et permettent d’afficher du contenu au clic de l’utilisateur. Ils sont liés à des balises input de type “checkbox”. Les pseudo-classes CSS focus et checked vont permettre de définir des propriétés CSS différentes pour ces états. Et grâce à la propriété <em>background-image</em>, qui permet de faire appel à une URL pour charger une image en arrière-plan, nous allons pouvoir appeler le fichier collect.php et mesurer les interactions des utilisateurs. En ajoutant des paramètres d’URL à ce fichier, il est possible de qualifier l’action effectuée par le visiteur et de rappeler le fichier collect.php. En revanche, une fois l’URL du fichier mise en cache dans le navigateur de l’internaute, elle n’est pas appelée à nouveau si un second clic est réalisé sur la même page. Ainsi, il est possible d’obtenir un ratio entre affichage de la page et clic unique d’un bouton permettant d’en connaître sa performance.</p>
                    
                    <pre class="sourceCode html"><code class="sourceCode html"><span class="kw">&lt;style</span><span class="ot"> type=</span><span class="st">&quot;text/css&quot;</span><span class="kw">&gt;</span>
        <span class="fl">.call-me</span><span class="dv">:focus</span> <span class="kw">{</span>
            <span class="kw">background-image:</span> <span class="dt">URL(</span><span class="st">&#39;../analytics/collect?sid=&lt;?php echo $session_id ?&gt;&amp;event_name=call_me&#39;</span><span class="dt">)</span><span class="kw">;</span>
            <span class="kw">background-size:</span> <span class="dt">0px</span><span class="kw">;</span>
        <span class="kw">}</span>
        <span class="fl">#tms</span><span class="dv">:checked</span> + h2 <span class="kw">{</span>
            <span class="kw">background-image:</span> <span class="dt">URL(</span><span class="st">&#39;../analytics/collect?sid=&lt;?php echo $session_id ?&gt;&amp;event_name=show_competences&amp;event_custom_1=TMS&#39;</span><span class="dt">)</span><span class="kw">;</span>
            <span class="kw">background-size:</span> <span class="dt">0px</span><span class="kw">;</span>
        <span class="kw">}</span> 
        <span class="fl">#analytics</span><span class="dv">:checked</span> + h2 <span class="kw">{</span>
            <span class="kw">background-image:</span> <span class="dt">URL(</span><span class="st">&#39;../analytics/collect?sid=&lt;?php echo $session_id ?&gt;&amp;event_name=show_competences&amp;event_custom_1=Analytics&#39;</span><span class="dt">)</span><span class="kw">;</span>
            <span class="kw">background-size:</span> <span class="dt">0px</span><span class="kw">;</span>
        <span class="kw">}</span>    
        <span class="fl">#gcp</span><span class="dv">:checked</span> + h2  <span class="kw">{</span>
            <span class="kw">background-image:</span> <span class="dt">URL(</span><span class="st">&#39;../analytics/collect?sid=&lt;?php echo $session_id ?&gt;&amp;event_name=show_competences&amp;event_custom_1=GCP&#39;</span><span class="dt">)</span><span class="kw">;</span>
            <span class="kw">background-size:</span> <span class="dt">0px</span><span class="kw">;</span>
        <span class="kw">}</span>    
        <span class="fl">#apis</span><span class="dv">:checked</span> + h2  <span class="kw">{</span>
            <span class="kw">background-image:</span> <span class="dt">URL(</span><span class="st">&#39;../analytics/collect?sid=&lt;?php echo $session_id ?&gt;&amp;event_name=show_competences&amp;event_custom_1=Google APIs&#39;</span><span class="dt">)</span><span class="kw">;</span>
            <span class="kw">background-size:</span> <span class="dt">0px</span><span class="kw">;</span>
        <span class="kw">}</span>   
        <span class="fl">#others</span><span class="dv">:checked</span> + h2 <span class="kw">{</span>
            <span class="kw">background-image:</span> <span class="dt">URL(</span><span class="st">&#39;../analytics/collect?sid=&lt;?php echo $session_id ?&gt;&amp;event_name=show_competences&amp;event_custom_1=Others&#39;</span><span class="dt">)</span><span class="kw">;</span>
            <span class="kw">background-size:</span> <span class="dt">0px</span><span class="kw">;</span>
        <span class="kw">}</span>  
    <span class="kw">&lt;/style&gt;</span></code></pre>

                    <p class="illustrations">
                        <em>Styles CSS appliqués aux boutons de la page https://www.guillaume-sinnaeve.com/fr/home</em>
                    </p>
                    
                    <p>Nous savons désormais comment mesurer les pages vues et les interactions effectuées par les utilisateurs sur le site. Cependant, aucun identifiant ne permet, pour le moment, de connaître le parcours effectué par un visiteur spécifique. Les solutions d'analyse et média utilisent en général un cookie pour stocker un identifiant et faire persister l’information de page en page. Néanmoins, les cookies étant prohibés pour cette expérience, nous utiliserons un paramètre d’URL pour identifier les visiteurs.</p>
                    

                    <h4 id="identifiant-visiteur-en-paramètre-dURL">3.2.3 Identifiant visiteur en paramètre d’URL</h4>
                    
                    <p>En ce qui concerne l’identifiant d’un utilisateur non authentifié sur un outil d’analyse, un cookie first est généralement la solution envisagée. Par exemple avec Google Analytics, un cookie nommé “_ga” contient un identifiant permettant l’attribution des pages vues et des interactions réalisées à un même utilisateur. Nous avons vu précédemment que les cookies ont la vie dure actuellement et dans le cadre de l’expérience, ils sont bannis. Pour suivre l’utilisateur sur le site www.guillaume-sinnaeve.com, chaque URL de page et d’événement contient un paramètre d’URL ayant pour valeur un identifiant unique lié à l’internaute qui visite le site.</p>
                    
                    <p>Si un utilisateur se rend sur le site, un paramètre “sid” sera présent dans l’URL. La valeur correspond à une concaténation entre un <em>timestamp</em> à 10 chiffres et un numéro aléatoire à 10 chiffres. Un <em>underscore</em> permet de faire la liaison entre les deux (exemple : sid=1608305029_984833821). Ce paramètre est inséré après chaque URL de redirection interne du site. Cette technique permet d’avoir une valeur unique pour chaque visiteur du site. Un des avantages de cette solution est qu’aucune information n’est stockée sur l’appareil de l’utilisateur. En revanche, un des inconvénients est la facilité d’accès pour un utilisateur. Il peut modifier la valeur du paramètre. Par conséquent, l’ajout d’une sécurité semble nécessaire. Si la valeur ne respecte pas le format attendu ou si le paramètre est supprimé par l’utilisateur, alors le script PHP réattribue un nouvel identifiant au bon format.</p>
                    
                    <pre class="sourceCode php"><code class="sourceCode php">// Set max inactivity session duration in seconds
    $max_session_duration = 1800;

    // Get the value of session ID
    $session_id = isset($_GET[&#39;sid&#39;]) ? $_GET[&#39;sid&#39;] : &#39;&#39;;

    // Flag to block data request
    $data_request = true;

    // session ID is defined
    if($session_id != &#39;&#39;) {
        // session ID has not the format expected
        if(!preg_match(&#39;/^[0-9]{10}_[0-9]{9,10}$/i&#39;, $session_id)) {
            $session_id = round(microtime(true)) . &#39;_&#39; . mt_rand(0000000000,(int) 9999999999);
            $data_request = false;
            header(&#39;Location: &#39; . preg_replace(&#39;~(\?|&amp;)sid=[^&amp;]*~&#39;, &#39;$1&#39;, $_SERVER[&#39;REQUEST_URI&#39;]) . &#39;sid=&#39; . $session_id); 
        } 
        else {
            include &#39;connection.php&#39;;
            $sql = &quot;SELECT `session_id`, MAX(`timestamp`) as lastTimestamp FROM `data` WHERE `session_id` = &#39;&quot; . $session_id . &quot;&#39;&quot;;
            $res = mysqli_query($conn, $sql);
            mysqli_close($conn);
            $data = [];
            while ($row = $res-&gt;fetch_assoc()) {
                array_push($data, [&quot;session_id&quot; =&gt; $row[&#39;session_id&#39;], &quot;lastTimestamp&quot; =&gt; $row[&#39;lastTimestamp&#39;]]);
            }
            
            if(isset($data[0][&#39;session_id&#39;]) &amp;&amp; isset($data[0][&#39;lastTimestamp&#39;])) {
                $dif = strtotime(date(&quot;Y-m-d H:i:s&quot;)) - strtotime($data[0][&#39;lastTimestamp&#39;]);
                //If the last session ID interaction is greater than 30 min, we change session_id
                if ($dif &gt; $max_session_duration) {
                    header(&#39;Location: &#39; . preg_replace(&#39;~(\?|&amp;)sid=[^&amp;]*~&#39;, &#39;$1&#39;, $_SERVER[&#39;REQUEST_URI&#39;]) . &#39;sid=&#39; . round(microtime(true)) . &#39;_&#39; . mt_rand(0000000000,(int) 9999999999));
                    $data_request = false;
                }
            }
        }
    } </code></pre>

                    <p class="illustrations">
                        <em>Calculs effectués pour attribuer une valeur au paramètre “sid” de l’URL</em>
                    </p>
                    
                    <p>Dans notre expérience, nous ne pouvons pas utiliser le terme “utilisateur” au sein de l’outil d’analyse car l’identifiant est réinitialisé à chaque fois qu’un internaute visite le site. Nous utilisons donc le terme de “visiteur unique”. Les notions de nouveaux visiteurs et de visiteurs de retour n’existent pas. Pour que le comportement de cet identifiant corresponde le plus à ceux proposés par les autres outils d'analyse, une règle est mise en place. Si un utilisateur est inactif pendant plus de 30 minutes, c'est-à-dire qu’il ne génère aucune requête de page ou d’événement, alors un nouvel identifiant est généré à la prochaine requête. Cela permet d’éviter un calcul de temps de visite faussé par des utilisateurs qui reviendraient sur le site avec le même identifiant, grâce à un lien dans la barre des favoris par exemple.</p>
                    
                    <p>Nous avons détaillé précédemment les solutions techniques utilisées dans le cadre de l’expérimentation. Le PHP pour la collecte côté serveur, le CSS pour mesurer les interactions et un identifiant dans un paramètre de l’URL pour suivre le visiteur nous permettent de respecter les règles établies pour ce projet. Nous pouvons maintenant sélectionner, traiter, stocker et restituer avec des schémas graphiques les données collectées sur les utilisateurs du site.</p>
                    

                    <h3 id="de-la-collecte-à-la-visualisation-des-données">3.3 De la collecte à la visualisation des données</h3>
                    
                    <p>Maintenant que nous connaissons les pré-requis législatifs à respecter et les contraintes techniques imposées pour cette expérience, nous pouvons procéder à la collecte et au traitement des données. Dans notre exemple (mais cela vaut en général), il n’est pas souhaitable de collecter toutes les données à notre disposition car nous ne les utiliserions pas effectivement. C’est à ce moment précis que se pose la question de la finalité des données. Chaque information récupérée doit répondre à un besoin défini. Dans un premier temps, nous sélectionnerons les données à collecter pour mesurer l’audience du site. Ensuite, nous effectuerons un traitement sur celles-ci pour les regrouper, dans les cas où il est possible de le faire, et simplifier le stockage dans la base de données. Enfin, nous mettrons en place sur la page d’analyse du site www.guillaume-sinnaeve.com une restitution graphique des données collectées.</p>
                    

                    <h4 id="connaître-ses-visiteurs">3.3.1 Connaître ses visiteurs</h4>
                    
                    <p>Comme nous l’avons vu précédemment dans la première partie, mesurer son audience est une des finalités de la collecte des données. Pour identifier le profil des internautes visitant le site internet, nous utiliserons les informations relatives à leur localisation, à leur appareil et à leur source de trafic.</p>
                    
                    <p>Dans le cadre de l’exemption CNIL, la géolocalisation “ne doit pas être plus précise que l’échelle de la ville”<sup><a href="#11">[11]</a></sup>. Grâce à l’adresse IP de l’utilisateur et à l’API proposé par ip-api.com<sup><a href="#12">[12]</a></sup>, nous récupérerons les informations liées à son pays, sa région et sa ville. En complétant avec la langue du navigateur, toutes ces données permettent d’adapter les traductions du site en fonction des pays mais également de connaître les lieux où se situent les opportunités éventuelles, dans le cadre d’une mise en relation professionnelle.</p>
                    
                    <pre class="sourceCode php"><code class="sourceCode php">// Get visitor IP
    $visitor_ip = $_SERVER[&#39;REMOTE_ADDR&#39;];

    // Connect to ip-api.com and get values
    $ip_query = @unserialize(file_get_contents(&#39;http://ip-api.com/php/&#39; . $visitor_ip));

    // Get informations only if the request is OK
    if($ip_query &amp;&amp; $ip_query[&#39;status&#39;] == &#39;success&#39;) {

        //-----------------------------------------------------
        // geo_country 
        //-----------------------------------------------------

        $geo_country = $ip_query[&#39;country&#39;];


        //-----------------------------------------------------
        // geo_region 
        //-----------------------------------------------------

        $geo_region = $ip_query[&#39;regionName&#39;];
        

        //-----------------------------------------------------
        // geo_city 
        //-----------------------------------------------------

        $geo_city = $ip_query[&#39;city&#39;];
    } </code></pre>
                    
                    <p class="illustrations">
                        <em>Récupération de l’adresse IP pour déterminer le pays, la région et la ville de l’utilisateur</em>
                    </p>
                    
                    <p>Les données relatives à l’appareil peuvent être calculées à partir de l’agent utilisateur (ou <em>user agent</em> en anglais). Ce dernier est composé d’une chaîne de caractère offrant la possibilité à un serveur d’identifier un profil d’appareil. Plusieurs informations peuvent être obtenues par cette méthode comme la catégorie de l’appareil (ordinateur de bureau, tablette, mobile, etc.), le système d’exploitation (Windows, iOS, Android, etc.) et le nom du navigateur (Chrome, Safari, Firefox, etc.). Pour l’expérience, nous collectons ces données pour connaître l’audience mais également pour vérifier si le site est bien fonctionnel avec la configuration de l'utilisateur et de l’optimiser dans le cas contraire.</p>
                    
                    <p>Dans notre cas, les sources de trafic font référence aux sites qui possèdent un lien redirigeant vers le nom de domaine de l'expérience. Cette information peut se récupérer depuis l’URL de la page précédente et est utile pour connaître la notoriété du site sur le Web. Si cette valeur est vide, c’est que l’utilisateur est venu en direct, en inscrivant l’URL dans son navigateur ou via un favori. Nous enregistrons le referrer pour notre expérience. Dans l’objectif de tester différentes sources de trafic et acquérir des données, plusieurs campagnes sur les réseaux sociaux ont été mises en place à des dates différentes (voir Annexe 7).</p>
                    
                    <p>Les données relatives aux appareils et aux sources de trafic nous en disent davantage sur les visiteurs du site. Et pour mieux connaître cette audience, les informations liées aux pages vues et aux événements effectués sur le site nous sont utiles. Nous allons donc sélectionner les données comportementales à collecter.</p>
                    

                    <h4 id="le-comportement-sur-le-site">3.3.2 Le comportement sur le site</h4>
                    
                    <p>Les internautes interagissent avec le site internet, en chargeant des pages et en réalisant des actions comme les clics sur les boutons. Ce comportement peut être mesuré de différentes manières : le temps de chargement des pages, les pages visitées, les événements (actions réalisées sur une page) et les durées des visites.</p>
                    
                    <p>Récupérer les informations de temps de chargement des pages aide à améliorer la performance du site Web, surtout quand elles sont croisées avec les données d’audience. Une page peut être plus longue à charger sur un téléphone mobile par exemple. Dans notre cas, il n’est pas nécessaire de collecter cette information car le site est de taille modeste et ne charge que peu de scripts.</p>
                    
                    <p>Dans l’objectif d’identifier les pages vues par les visiteurs du site, nous devons collecter l’URL concernée, et plus précisément le chemin qui la constitue, par exemple “/fr/home”. Il n’est pas nécessaire de collecter le nom de domaine car l’expérience est réalisée uniquement www.guillaume-sinnaeve.com. Cet élément de l’URL est également utile pour connaître sur quelles pages les événements sont effectués.</p>
                    
                    <p>Pour distinguer si le comportement de l’utilisateur est lié à une page ou à un événement, nous allons alimenter une variable que nous enregistrerons dans la base de données. Elle aura pour valeur soit “page_view” pour une page, soit une valeur différente pour toute autre action (exemple : “call_me” pour la prise de contact téléphonique, “show_competences” pour afficher les compétences sur la page d’accueil, etc.). Cette variable seule n’est pas suffisante pour certaines actions. En la combinant avec d’autres éléments, nous pouvons qualifier l’événement (par exemple indiquer la compétences vue dans une variable lors d’une action “show_competences”).</p>
                    
                    <pre class="sourceCode php"><code class="sourceCode php">//-----------------------------------------------------
    // event_name
    //-----------------------------------------------------

    $event_name = isset($_GET[&#39;event_name&#39;]) ? $_GET[&#39;event_name&#39;] : &#39;page_view&#39;;


    //-----------------------------------------------------
    // event_custom_1
    //-----------------------------------------------------

    $event_custom_1 = isset($_GET[&#39;event_custom_1&#39;]) ? $_GET[&#39;event_custom_1&#39;] : &#39;&#39;;


    //-----------------------------------------------------
    // event_custom_2
    //-----------------------------------------------------

    $event_custom_2 = isset($_GET[&#39;event_custom_2&#39;]) ? $_GET[&#39;event_custom_2&#39;] : &#39;&#39;;</code></pre>

                    <p class="illustrations">
                        <em>Récupération du nom de l’événement et des paramètres qui le qualifie via l’URL d’appel au fichier collect.php</em>
                    </p>
                    
                    <p>Nous avons détaillé les données relatives aux visiteurs, et à leur comportement sur le site, qui seront collectées pour cette expérimentation. Certaines de ces informations, comme l’agent utilisateur, nécessitent un traitement avant de les stocker pour obtenir le système d’exploitation ou le nom du navigateur par exemple. Plusieurs actions et calculs sont requis. Nous allons les aborder dans la partie suivante.</p>
                    

                    <h4 id="traitement-et-stockage">3.3.3 Traitement et stockage</h4>
                    
                    <p>Nous savons désormais quelles informations nous souhaitons collecter sur le site et leur finalité. En amont du stockage dans la base de données, il peut être nécessaire d’effectuer un traitement. Il peut s’agir d’un nettoyage, d’un regroupement, d’un calcul ou d’un complément d’information sur les valeurs récupérées.</p>
                    
                    <p>Une des problématiques fréquemment rencontrée par les outils analytiques est la génération de données provenant des bots informatiques. Ces programmes parasites viennent fausser la lecture des statistiques collectées sur le nombre de visiteurs, de pages vues et d’événements. Nous ne souhaitons pas que cela se produise dans le cadre de l’expérience et grâce à l’agent utilisateur, nous pouvons identifier une partie de ce trafic. Dans une majorité des cas, la chaîne de caractère contient le mot “bot”. Si nous trouvons cette occurrence, alors nous empêchons l’enregistrement en base de données. Cette règle peut être améliorée et renforcée au cours de la vie du site pour bloquer les bots non couverts actuellement.</p>
                    
                    <pre class="sourceCode php"><code class="sourceCode php">// Get the user agent
    $device_userAgent = $_SERVER[&#39;HTTP_USER_AGENT&#39;];

    // Exclude Bot based on user agent
    if(preg_match(&#39;/Bot|LinkedInBot|facebookexternalhit|PostmanRuntime|Twitterbot|applebot|Facebot|bingbot|Googlebot|Scoop\.it|Go-http-client/i&#39;, $device_userAgent)) {
        $data_request = false;
    }</code></pre>

                    <p class="illustrations">
                        <em>Condition pour exclure les bots de la collecte de données</em>
                    </p>
                    
                    <p>Un regroupement peut être nécessaire, dans des cas spécifiques, pour éviter une duplication de lignes dans la base de données et complexifier la lecture. Pour l’expérience, nous collectons le referrer. Et lors des campagnes lancées sur Facebook (voir Annexe 7), plusieurs valeurs sont remontées pour cette même source de trafic : www.facebook.com, m.facebook.com et l.facebook.com. N’ayant pas un besoin d’analyse lié à cette distinction, une règle dans le fichier collect.php réunit ces 3 domaines sous la valeur www.facebook.com avant de la stocker.</p>
                    
                    <pre class="sourceCode php"><code class="sourceCode php">// By default, referrer_full, referrer_host and referrer_path equal &#39;unknown&#39;
    $referrer_full = &#39;unknown&#39;;
    $referrer_host = &#39;unknown&#39;;
    $referrer_path = &#39;unknown&#39;;

    // Check if http referer is not undefined
    if(isset($_SERVER[&#39;HTTP_REFERER&#39;])) {
            
        $referrer_full = $_SERVER[&#39;HTTP_REFERER&#39;];
            
        if (true === stripos($_SERVER[&#39;HTTP_REFERER&#39;], &#39;guillaume-sinnaeve.com&#39;)){
            $referrer_host = &#39;www.guillaume-sinnaeve.com&#39;;
        }
        else if (true === stripos($_SERVER[&#39;HTTP_REFERER&#39;], &#39;facebook&#39;)){
            $referrer_host = &#39;www.facebook.com&#39;;
        }
        else if ($_SERVER[&#39;HTTP_REFERER&#39;] == &#39;android-app://com.linkedin.android/&#39;){
            $referrer_host = &#39;www.linkedin.com&#39;;
        }
        else {
            $referrer_host = parse_URL($_SERVER[&#39;HTTP_REFERER&#39;], PHP_URL_HOST);
        }
            
        $referrer_path = parse_URL($_SERVER[&#39;HTTP_REFERER&#39;], PHP_URL_PATH);
    }
    else if(preg_match(&#39;/LinkedInApp/i&#39;, $device_userAgent)) {
        $referrer_full = &#39;https://www.linkedin.com/&#39;;
        $referrer_host = &#39;www.linkedin.com&#39;;
        $referrer_path = &#39;/&#39;;
    }
    else {
        // Direct
        $referrer_full = &#39;Direct&#39;;
        $referrer_host = &#39;Direct&#39;;
        $referrer_path = &#39;Direct&#39;;
    }</code></pre>

                    <p class="illustrations">
                        <em>Calculs effectués pour déterminer les valeurs liées aux referrers</em>
                    </p>
                    
                    <p>Dès lors que les données non désirées sont écartées, nous pouvons procéder aux calculs des valeurs que nous souhaitons obtenir à partir des informations collectées. Ce qui est le cas, dans le cadre de l’expérience, de la catégorie de l’appareil, du système d’exploitation et du nom du navigateur. Ci-après, un exemple d’une valeur de l’agent utilisateur obtenue sur le navigateur Safari exécuté sur un iPhone X :</p>

                    <p><em>Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1</em></p>
                    
                    <p>Grâce aux termes iPhone et Mobile, nous pouvons attribuer les valeurs “Mobile” à la catégorie d’appareil et “iOS” au système d’exploitation. Concernant le nom du navigateur, la présence du terme Safari et les autres informations en notre possession nous permettent de dire que Safari est bien le nom du navigateur utilisé.</p>
                    
                    <pre class="sourceCode php"><code class="sourceCode php">// By default, device_system equals &#39;unknown&#39;
    $device_system = &#39;unknown&#39;;
        
    // iOS
    if(preg_match(&#39;/iPhone|iPad|iPod/i&#39;, $device_userAgent)) {
        $device_system = &#39;iOS&#39;;
    }
    // Mac OS 
    else if(preg_match(&#39;/Mac/i&#39;, $device_userAgent)) {
        $device_system = &#39;Mac OS&#39;;
    }
    // Windows
    else if(preg_match(&#39;/Win/i&#39;, $device_userAgent)) {
        $device_system = &#39;Windows&#39;;
    }
    // Android
    else if(preg_match(&#39;/Android/i&#39;, $device_userAgent)) {
        $device_system = &#39;Android&#39;;
    }
    // UNIX
    else if(preg_match(&#39;/X11/i&#39;, $device_userAgent)) {
        $device_system = &#39;UNIX&#39;;
    }
    // Linux
    else if(preg_match(&#39;/Linux/i&#39;, $device_userAgent)) {
        $device_system = &#39;Linux&#39;;
    }
    // BlackBerry
    else if(preg_match(&#39;/BB10|PlayBook/i&#39;, $device_userAgent)) {
        $device_system = &#39;BlackBerry&#39;;
    }</code></pre>
                    
                    <p class="illustrations">
                        <em>Calculs effectués pour déterminer le système d’exploitation de l'utilisateur</em>
                    </p>
                    
                    <p>Avant de procéder à l’enregistrement et au stockage des informations, d’autres propriétés sont utiles comme le timestamp. Il permet de suivre l’ordre du parcours effectué par le visiteur, la durée de sa visite et également d’établir des rapports de fréquences. Avec le timestamp, nous obtenons la date (année, mois, jour de la semaine), le numéro du jour, l’heure et la minute auxquels la requête a été transmise. Dès lors que tout est prêt, nous pouvons exécuter une instruction en PHP et en SQL (Structured Query Language) pour enregistrer les informations dans la base de données (voir Annexe 8 pour le schéma de la base de données).</p>
                    
                    <p>Les données sont maintenant traitées et stockées dans la base de données. Nous pouvons désormais les utiliser au sein d’un outil de visualisation graphique pour faciliter la lecture. Dans la partie suivante, nous utiliserons une des pages du site pour afficher des rapports d’analyse sur les visiteurs, les pages et les événements du site.</p>
                    

                    <h4 id="représentation-graphique-des-données">3.3.4 Représentation graphique des données</h4>
                    
                    <p>Nous avons mis en place un outil de collecte et de stockage de données à des fins de mesure d’audience. Nous pourrions conclure ici et utiliser la base de données avec des requêtes SQL pour lire les indicateurs de performance qui nous intéressent car beaucoup d’outils permettent d’avoir accès à ces données sans passer par une interface de rendu. Cependant, la lecture des informations est complexe et ne permet pas de comprendre rapidement les résultats obtenus. Par conséquent, nous allons construire une page d’analyses<sup><a href="#13">[13]</a></sup> sur le site contenant plusieurs représentations graphiques des données collectées (voir Annexe 9). Et par souhait de transparence avec les visiteurs du site et les données qui les concernent, cette page est accessible par tous.</p>
                    
                    <p>Pour une mise en forme agréable et interactive, nous allons utiliser les librairies C3<sup><a href="#14">[14]</a></sup> et D3<sup><a href="#15">[15]</a></sup> de JavaScript. Elles permettent de créer facilement, en plus des tableaux, des graphiques en bâton, en ligne ou encore en donut à partir d’une plage de données. Les fichiers requests.php<sup><a href="#16">[16]</a></sup> et dash.js<sup><a href="#17">[17]</a></sup> contiennent la construction des différents graphiques proposés sur la page. Cette dernière est composée de 4 parties consacrées aux données en temps réel, relatives aux visiteurs, aux pages et aux événements.</p>
                    
                    <p>La partie intitulée Temps réels va contenir les données des visiteurs du site présents dans les 30 dernières minutes (voir Annexe 9). Elle permet un aperçu rapide de l’audience du site et un contrôle de qualité sur la remontée d’informations liés aux visiteurs, aux pages et aux événements. Des graphiques issus des trois parties, nommées Visiteurs, Pages et Événements, composent ce bloc et mettent en avant quelques indicateurs de performance clés avec des niveaux de lecture différents.</p>
                    
                    <p>Le bloc Visiteurs affiche les informations relatives aux internautes et à leur visite sur les 25 derniers mois (voir Annexe 9). Des indicateurs affichent le nombre total de visiteurs, le taux de rebond, la durée moyenne des visites ou encore le nombre de visites avec des événements. Ces quatre résultats offrent une vision globale des visiteurs tandis que les autres rapports de cette partie apportent davantage de précisions. Nous pouvons analyser les visiteurs par fréquence de visites, pour optimiser les campagnes et les mises à jour de contenu, par configuration d’appareil, pour vérifier que le site est fonctionnel sur différents navigateurs, ou encore par villes, pour identifier les secteurs où des opportunités professionnelles seraient envisageables.</p>
                    
                    <p class="illustrations">
                        <img src="/img/memoire/3.3.4_visitors.png" title="Rapports liés aux systèmes d’exploitations et aux navigateurs des visiteurs" alt="Rapports visiteurs et appareils" /><br><em>Rapports liés aux systèmes d’exploitations et aux navigateurs des visiteurs</em>
                    </p>
                    
                    <p>Nous pouvons constater sur les rapports ci-dessus que les visiteurs possèdent majoritairement un appareil avec Windows comme système d'exploitation et naviguent sur le site avec le navigateur Firefox.</p>
                    
                    <p>Ensuite, la section Pages met en avant les données correspondant aux pages vues par les utilisateurs durant leur visite sur les 25 derniers mois (voir Annexe 9). Trois indicateurs clés de performances sont mis en avant ici : le nombre total de pages vues, la moyenne de pages vues par visiteur et le nombre total de pages d’erreur ou non trouvées (404) vues. Les autres rapports de cette section proposent une analyse par fréquence, par page d’arrivée et de sortie sur le site, par langue des pages et par nom de page.</p>
                    
                    <p class="illustrations">
                        <img src="/img/memoire/3.3.4_pages.png" title="Rapports liés aux langues et aux noms des pages vues" alt="Rapports des pages" /><br><em>Rapports liés aux langues et aux noms des pages vues</em>
                    </p>
                    
                    <p>Le rapport précédent met en évidence le pourcentage de pages vues par langue et le nombre de pages vues par nom. On constate que le site est parcouru essentiellement en anglais et que la page d’accueil est trente fois plus consultée que la page suivante.</p>
                    
                    <p>Enfin, la partie Événements reflète les actions effectuées par les internautes durant leur visite sur les 25 derniers mois (voir Annexe 9). Les trois chiffres importants mis en avant dans cette partie sont le nombre total d’événements, le nombre de visiteurs ayant lu un article et le nombre de visiteurs ayant cliqué pour initier un appel téléphonique. Les autres rapports de cette partie proposent une analyse par fréquence et par type d’événement effectué comme la consultation des compétences, du parcours professionnel ou encore des certifications.</p>
                    
                    <p class="illustrations">
                        <img src="/img/memoire/3.3.4_events.png" title="Rapport lié aux compétences consultées par les visiteurs" alt="Rapport lié aux compétences consultées par les visiteurs" /><br><em>Rapport lié aux compétences consultées par les visiteurs</em>
                    </p>
                    
                    <p>Le graphique ci-dessus indique le nombre d’événements réalisés par compétence. D’après les résultats obtenus, nous pouvons en déduire que toutes les compétences sont consultées à parts quasi égales même si la compétence Analytics se détache légèrement.</p>
                    
                    <p>La page d’analyse du site propose une mise en relation des données collectées sous forme de plusieurs représentations graphiques. Cette page peut être complétée par d’autres rapports comme, par exemple, un flux de parcours réalisés depuis la page d’accueil. Les rapports doivent refléter le besoin d’analyse émis par l’équipe métier d’une entreprise. Dans le cadre de l’expérience, certains rapports affichent les valeurs “unknown”. Elles indiquent que des calculs, comme le nom du navigateur ou le système d’exploitation, n’a pas pu trouver de résultat. Par conséquent, une analyse supplémentaire doit être menée au sein de ma base de données pour comprendre la raison, en utilisant l’agent utilisateur, et optimiser le calcul pour une meilleure collecte des données.</p>
                </section>
                <section>
                    <h2 id="conclusion">Conclusion</h2>
                    
                    <p>La collecte des données est essentielle pour les entreprises à des nombreux titres : connaître leur audience, optimiser la conversion ou encore monétiser leur contenu. Grâce à l’exploitation des cookies et d’une faille de sécurité, les solutions d'analyses, médias et autres, ont créé un modèle économique mettant en danger l’aspect privé des données personnelles des internautes. C’est pourquoi le RGPD, les navigateurs et certaines extensions bloquant les publicités ont choisi de se positionner pour le respect de la vie privée des utilisateurs. Face à ces nombreux changements et aux obligations législatives qui durcissent, les entreprises ont été contraintes d’adapter leur organisation juridique et d’investir du temps de développement pour s’assurer une mise en conformité légale au plus tard à la date butoire du 31 mars 2021.</p>
                    
                    <p>Bien entendu, les entreprises souhaitent conserver une qualité de service équivalente à l’avant RGPD. Comprendre le parcours des utilisateurs et leur comportement sur le site grâce à la collecte de données reste nécessaire pour proposer un contenu adapté à son audience. Il n’y a, à ce jour, pas de solution parfaite pour répondre à toutes les attentes des entreprises. Par conséquent, les éditeurs de site doivent composer avec ce qui existe actuellement sur le marché (exemption CNIL, server-side, navigation authentifiée, machine learning) tout en proposant, dans la majorité des cas, un bandeau de consentement, s’exposant ainsi à perdre de précieuses informations sur leurs utilisateurs.</p>
                    
                    <p>Nous avons nous-même expérimenté une solution conforme au RGPD, sur le site www.guillaume-sinnaeve.com, et fonctionnelle dans un potentiel monde futur sans cookies. En plus d’être sans JavaScript, la solution tire profit des technologies stables et renommées que sont le PHP et le CSS, utilisés par ailleurs à d’autres fins lors du développement du site. Nous sommes parvenus à récupérer, et à afficher dans des rapports graphiques, des données comportementales et relatives aux visiteurs tout en respectant les pré-requis législatifs dans le cadre de l’exemption CNIL. Il va sans dire, néanmoins, que cette solution est perfectible et se limite à un site ayant pour seule finalité la mesure d’audience. Pour des éditeurs de site plus complexes qui souhaiteraient faire de l’activation de données, il faudrait étudier les obligations légales et la technicité de l'outil proposé ici pour l’adapter aux différents besoins.</p>
                    
                    <p>Les démarches de mise en conformité au RGPD sur le Web semblent bien engagées par les entreprises, même si certains textes de lois apparaissent encore flous et donc soumis à interprétation. Les autorités de protection des données des différents pays de l’Union Européenne continuent de contrôler et de sanctionner les manquements à la loi.</p>
                    
                    <p>Pour les applications mobiles, où la notion de cookie n'existe pas, la collecte de données est également soumise au consentement de l’utilisateur et aux textes législatifs. Les éditeurs ne sont d’ailleurs pas en risque puisque, par exemple, Apple ajoute des contraintes techniques encore plus strictes pour garantir la protection de la vie privée de ses utilisateurs mobiles avec la version d’iOS 14 de janvier 2021. Les informations collectées sur les utilisateurs par l’application mobile doivent être affichées sur l’App Store et les développeurs devront demander le consentement explicite pour l’IDFA (en anglais IDentifier For Advertisers ou identifiant pour les annonceurs) à l’ouverture de l'application. Cet identifiant est très utilisé côté mobile et s’apparente à un cookie lié à un utilisateur côté Web. Des impacts non négligeables sont donc à prévoir pour l’exploitation des données à des fins d’activation et d’optimisation média.</p>
                    
                    <p>Aujourd’hui, il existe des modules de consentement (CMP) pour répondre aux obligations législatives mais ils ne couvrent pas les contraintes techniques imposées par Apple. Plusieurs solutions sont à l’étude pour permettre aux différents éditeurs d’applications et aux acteurs publicitaires et technologiques de continuer à collecter et activer la donnée tout en respectant la volonté d’Apple de laisser à ses utilisateurs le choix de l’exploitation de leurs données.</p>
                    
                    <p>En résumé, si la collecte des données de leurs utilisateurs est essentielle pour les entreprises, force est de constater que les dernières années ont vu leur lot d’abus et de scandales de la part de nombreux acteurs principaux du marché. Il est nécessaire aujourd’hui de poser des bases juridiques à la collecte et à l’utilisation des données personnelles. La mort du cookie et l’exigence d’un consentement impliquent une baisse non négligeable de la qualité des données exploitables par les sites internet et les solutions publicitaires. Néanmoins, il semble inconcevable que les entreprises ne trouvent pas des solutions satisfaisantes pour tous et qui répondent à ces nouvelles exigences. Reste à savoir désormais quelles formes elles pourront prendre.</p>
                </section>
                <section>
                    <h2 id="notes-utiles">Notes utiles</h2>

                    <p><sup id="section">1</sup> Directive 2002/58/CE du Parlement européen et du Conseil du 12 juillet 2002 concernant le traitement des données à caractère personnel et la protection de la vie privée dans le secteur des communications électroniques (directive vie privée et communications électroniques) :
                    <br><a href="https://eur-lex.europa.eu/legal-content/FR/ALL/?uri=CELEX%3A32002L0058" target="_blank">https://eur-lex.europa.eu/legal-content/FR/ALL/?uri=CELEX%3A32002L0058</a></p>                  

                    <p><sup id="section-1">2</sup> Fondée en 1994 et spécialisée dans l’informatique, Netscape est surtout connue pour son navigateur web nommé Netscape Navigator utilisé par la majorité des utilisateurs en 1996.</p>                    

                    <p><sup id="section-2">3</sup> Définition du terme &quot;cookie&quot; :
                    <br><a href="https://www.cnil.fr/fr/definition/cookie" target="_blank">https://www.cnil.fr/fr/definition/cookie</a></p>                    
                   
                    <p><sup id="section-3">4</sup> Tag Management Systems (TMS en anglais) ou système de gestion des balises est un outil permettant à des personnes non techniques d’implémenter diverses solutions (analytiques, médias, a/b tests, etc.) sans intervention d’une équipe de développeurs.</p>                    

                    <p><sup id="section-4">5</sup> Décision de l’ICO sur l’exemption des cookies analytiques :
                    <br><a href="https://ico.org.uk/for-organisations/guide-to-pecr/guidance-on-the-use-of-cookies-and-similar-technologies/how-do-we-comply-with-the-cookie-rules/#comply15" target="_blank">https://ico.org.uk/for-organisations/guide-to-pecr/guidance-on-the-use-of-cookies-and-similar-technologies/how-do-we-comply-with-the-cookie-rules/#comply15</a></p>                    

                    <p><sup id="section-5">6</sup> Bénéficier de l’exemption de consentement selon la CNIL :
                    <br><a href="https://www.cnil.fr/fr/mesurer-la-frequentation-de-vos-sites-web-et-de-vos-applications" target="_blank">https://www.cnil.fr/fr/mesurer-la-frequentation-de-vos-sites-web-et-de-vos-applications</a></p>                    

                    <p><sup id="section-6">7</sup> Ne pas suivre la navigation d’une personne sur différentes applications ou sites web :
                    <br><a href="https://www.cnil.fr/fr/mesurer-la-frequentation-de-vos-sites-web-et-de-vos-applications" target="_blank">https://www.cnil.fr/fr/mesurer-la-frequentation-de-vos-sites-web-et-de-vos-applications</a></p>                    

                    <p><sup id="section-7">8</sup> La mesure d’audience pour le compte exclusif de l’éditeur :
                    <br><a href="https://www.cnil.fr/fr/mesurer-la-frequentation-de-vos-sites-web-et-de-vos-applications" target="_blank">https://www.cnil.fr/fr/mesurer-la-frequentation-de-vos-sites-web-et-de-vos-applications</a></p>                    

                    <p><sup id="section-8">9</sup> Pages sur la politique de confidentialité :
                    <br><a href="/fr/privacy-policy" target="_blank">https://www.guillaume-sinnaeve.com/fr/privacy-policy</a> et <a href="/en/privacy-policy" target="_blank">https://www.guillaume-sinnaeve.com/en/privacy-policy</a></p>                    

                    <p><sup id="section-9">10</sup> Page collect.php :
                    <br><a href="https://github.com/gsinna/MIASHS/blob/master/site/analytics/collect.php" target="_blank">https://github.com/gsinna/MIASHS/blob/master/site/analytics/collect.php</a></p>
                    
                    <p><sup id="section-10">11</sup> La géolocalisation ne doit pas être plus précise que l’échelle de la ville :
                    <br><a href="https://www.cnil.fr/sites/default/files/atoms/files/projet_de_recommandation_cookies_et_autres_traceurs.pdf" target="_blank">https://www.cnil.fr/sites/default/files/atoms/files/projet_de_recommandation_cookies_et_autres_traceurs.pdf</a></p>
                    
                    <p><sup id="section-11">12</sup> API utilisée pour la géolocalsiation :
                    <br><a href="http://ip-api.com" target="_blank">http://ip-api.com</a></p>
                    
                    <p><sup id="section-12">13</sup> Pages d’analyse :
                    <br><a href="/fr/analyzes" target="_blank">https://www.guillaume-sinnaeve.com/fr/analyzes</a> et <a href="/en/analyzes" target="_blank">https://www.guillaume-sinnaeve.com/en/analyzes</a></p>
                    
                    <p><sup id="section-13">14</sup> Librairie C3.js :
                    <br><a href="https://c3js.org/" target="_blank">https://c3js.org/</a></p>
                    
                    <p><sup id="section-14">15</sup> Librairie D3.js :
                    <br><a href="https://d3js.org/" target="_blank">https://d3js.org/</a></p>
                    
                    <p><sup id="section-15">16</sup> Page requests.php :
                    <br><a href="https://github.com/gsinna/MIASHS/blob/master/site/analytics/requests.php" target="_blank">https://github.com/gsinna/MIASHS/blob/master/site/analytics/requests.php</a></p>
                    
                    <p><sup id="section-16">17</sup> Page dash.js :
                    <br><a href="https://github.com/gsinna/MIASHS/blob/master/site/analytics/dash.js" target="_blank">https://github.com/gsinna/MIASHS/blob/master/site/analytics/dash.js</a></p>
                </section>
                <section>
                    <h2 id="annexes">Annexes</h2>
                    

                    <h3 id="annexe-1---questionnaire---impact-du-rgpd-sur-entreprise-a">Annexe 1 - Questionnaire - Impact du RGPD sur Entreprise A</h3>
                    
                    <p><strong>1. Quel est l'intitulé de votre poste et vos missions au sein de votre entreprise ?</strong></p>
                    
                    <p>Je suis Web Analytics Manager. Mes missions consistent à collecter l’ensemble des données digitales permettant d’optimiser nos produits (applications, sites web) et nos campagnes marketing. Cela passe par la mise en place de plans de marquage, de recettes techniques, de tableaux de bord et de reporting, d’études, d’activation (retargeting, ciblage, personnalisation) et de test A/B.</p>
                    
                    <p><strong>2. Comment suivez-vous les mises à jour des recommandations émises par la CNIL et les DPAs des autres pays (dans le cadre où votre entreprise est internationale) sur le RGPD ?</strong></p>
                    
                    <p>Nos équipes juridiques nous tiennent informés de ces évolutions via des newsletter hebdomadaires et des Coproj bi-mensuel. Nos partenaires se rapprochent de nous quand ces évolutions ont un impact direct sur leurs solutions. Je me tiens également informé grâce aux abonnements à des newsletter de cabinets de conseil et d’agence média.</p>
                    
                    <p><strong>3. Avez-vous dû créer une équipe dédiée pour suivre la mise en conformité au RGPD ?</strong></p>
                    
                    <p>Nous avons mis en place un comité projet ayant lieu toutes les 2 semaines réunissant tous le acteurs impactés par la mise en conformité : - équipe juridique - équipe data (data science et web analyse) - équipe front/SI - équipe marketing</p>
                    
                    <p>Cette réunion nous permet de faire le point sur l'avancée du projet et des dernières actions prises et à prendre pour arriver à notre mise en conformité cible.</p>
                    
                    <p><strong>4. Si une équipe au sein de votre entreprise existe, de quel département dépend-t-elle (Sécurité, DSI Marketing, Juridique, etc.) ?</strong></p>
                    
                    <p>L’équipe du chef de projet est rattachée au département juridique.</p>
                    
                    <p><strong>5. La CNIL a mis à jour ses recommandations en septembre 2020. Avez-vous anticipé la mise en place des nouvelles règles de la CNIL pour la collecte du consentement sur les cookies ?</strong></p>
                    
                    <p>Oui</p>
                    
                    <p><strong>6. Si oui, quels sont les dispositifs que vous avez mis en place ?</strong></p>
                    
                    <p>Nous avons mis en place un comité de projet.</p>
                    
                    <p><strong>7. Si non, quelles actions allez-vous mettre en place dans les prochains mois concernant la collecte du consentement pour les cookies ?</strong></p>
                    
                    <p>N/A</p>
                    
                    <p><strong>8. Pensez-vous que les différents acteurs (analytique, média, etc.) ont réussi à anticiper ces évolutions ?</strong></p>
                    
                    <p>Non car, en plus des nouvelles législations, il y a un mouvement de marché des plus gros acteurs vers un plus grand respect des données utilisateurs (ITP, fin des cookies tiers). Je n’ai pas l’impression que les éditeurs ont pu se réunir pour déterminer toutes les conséquences et solutions à l’ensemble de ces changements concomitants.</p>
                    
                    <p><strong>9. Traitez-vous le sujet de la collecte du consentement sur les traceurs à la fois pour vos sites web et vos applications mobiles ?</strong></p>
                    
                    <p>Oui</p>
                    
                    <p><strong>10. Avez-vous lancé des actions d’A/B testing de votre bandeau cookie et/ou de votre CMP afin d'optimiser la collecte du consentement ?</strong></p>
                    
                    <p>Oui</p>
                    
                    <p><strong>11. Quels sont les impacts du RGPD au niveau technique ?</strong></p>
                    
                    <p>Nous avons mis en place de nouveaux une CMP et fait évoluer des outils existants (tracking d’attribution différent).</p>
                    
                    <p><strong>12. Est-ce que le tracking server-side est une solution que vous avez envisagée ?</strong></p>
                    
                    <p>Non car concernant le RGPD qu’importe la méthodologie utilisée (client side ou server side) le consentement reste obligatoire.</p>
                    
                    <p><strong>13. Avez-vous mis en place des stratégies pour tout de même suivre les visiteurs qui ont refusé le tracking ?</strong></p>
                    
                    <p>Oui avec les solutions le permettant et qui sont acceptées et exemptées par la CNIL. A savoir AT Internet.</p>
                    
                    <p><strong>14. Au-delà des mises à jour techniques de vos outils (CMP, TMS) pour mieux collecter le consentement utilisateur sur les cookies/traceurs, avez-vous lancé un projet de réalignement de la gouvernance data au sein de votre entreprise ?</strong></p>
                    
                    <p>Oui</p>
                    
                    <p><strong>15. Quels impacts a eu le RGPD sur les données que vous utilisez pour piloter votre stratégie marketing ?</strong></p>
                    
                    <p>Nous anticipons de fortes pertes de données d’attribution. Nous devrons donc passer de modèles déterministes à des modèles plus probabilistes et d’échantillonnage.</p>
                    
                    <p><strong>16. Quels sont les impacts sur vos investissements média ?</strong></p>
                    
                    <p>Pour le moment rien n’est acté nous attendons que notre mise en conformité soit totale pour voir l’impact sur la collecte et ainsi comprendre l’impact probable sur nos investissements média.</p>
                    
                    <p><strong>17. Prévoyez-vous ou avez-vous anticipé un éventuel report de budget média vers du SEO ou des partenariats ?</strong></p>
                    
                    <p>Oui</p>
                    
                    <p><strong>18. Est-ce que la mise en conformité au RGPD a engendré un coût budgétaire pour votre site ?</strong></p>
                    
                    <p>Oui car nous faisons appel à des consultants pour nous aider à gérer le projet (mise en place opérationnelle, conséquences éventuelles…) et nous implémentons de nouvelles solutions de CMP.</p>
                    
                    <p><strong>19. Identifiez-vous d’autres impacts que ceux évoqués précédemment concernant la mise en conformité du RGPD ?</strong></p>
                    
                    <p>Non</p>
                    
                    <p><strong>20. Pensez-vous que cette évolution de la législation changera drastiquement votre manière de travailler ?</strong></p>
                    
                    <p>Oui il y a fort à parier que de nombreux outils vont changer et d’autres vont émerger. Il faudra donc se former à ces nouvelles technologies.</p>
                    

                    <h3 id="annexe-2---questionnaire---impact-du-rgpd-sur-entreprise-b">Annexe 2 - Questionnaire - Impact du RGPD sur Entreprise B</h3>
                    
                    <p><strong>1. Quel est l'intitulé de votre poste et vos missions au sein de votre entreprise ?</strong></p>
                    
                    <p>Global Analytics Manager</p>
                    
                    <p><strong>2. Comment suivez-vous les mises à jour des recommandations émises par la CNIL et les DPAs des autres pays (dans le cadre où votre entreprise est internationale) sur le RGPD ?</strong></p>
                    
                    <p>Nous suivons les mises à jour des recommandations émises par la CNIL via des communications en interne et de la veille.</p>
                    
                    <p><strong>3. Avez-vous dû créer une équipe dédiée pour suivre la mise en conformité au RGPD ?</strong></p>
                    
                    <p>Un point de contact existe au sein du département digital, qui permet de centraliser tous les points et initiatives. En relais, dans les différents pays où notre groupe est présent, nous comptons sur des DPO.</p>
                    
                    <p><strong>4. Si une équipe au sein de votre entreprise existe, de quel département dépend-t-elle (Sécurité, DSI Marketing, Juridique, etc.) ?</strong></p>
                    
                    <p>CDO = Département Digital du groupe cross Brand et Pays</p>
                    
                    <p><strong>5. La CNIL a mis à jour ses recommandations en septembre 2020. Avez-vous anticipé la mise en place des nouvelles règles de la CNIL pour la collecte du consentement sur les cookies ?</strong></p>
                    
                    <p>Nous avons discuté en interne des nouvelles règles de la CNIL.</p>
                    
                    <p><strong>6. Si oui, quels sont les dispositifs que vous avez mis en place ?</strong></p>
                    
                    <p>N/A</p>
                    
                    <p><strong>7. Si non, quelles actions allez-vous mettre en place dans les prochains mois concernant la collecte du consentement pour les cookies ?</strong></p>
                    
                    <p>N/A</p>
                    
                    <p><strong>8. Pensez-vous que les différents acteurs (analytique, média, etc.) ont réussi à anticiper ces évolutions ?</strong></p>
                    
                    <p>Non pas totalement. La population digitale expert comprend les changements impulsés par la CNIL. Il y a des acteurs comme ceux qui sont à la base de la collecte et la partie analytique qui ont bien réussi mais en revanche les équipes médias ne comprennent pas forcément tous les tenants et les aboutissant. Notamment le retargeting ne fonctionnera plus par la suite.</p>
                    
                    <p><strong>9. Traitez-vous le sujet de la collecte du consentement sur les traceurs à la fois pour vos sites web et vos applications mobiles ?</strong></p>
                    
                    <p>Il y a peu d’applications au sein de notre groupe, mais la logique de traitement du consentement reste la même que pour les sites web.</p>
                    
                    <p><strong>10. Avez-vous lancé des actions d’A/B testing de votre bandeau cookie et/ou de votre CMP afin d'optimiser la collecte du consentement ?</strong></p>
                    
                    <p>Oui des initiatives ont été prises par quelques marques et pays pour tester la présence du bandeau, le message, les boutons. Pour répondre à la question comment perdre le moins de données via les obligations législatives.</p>
                    
                    <p><strong>11. Quels sont les impacts du RGPD au niveau technique ?</strong></p>
                    
                    <p>Notre partenaire est One Trust qui est configuré via GTM.</p>
                    
                    <p>Les changements des modalités de la RGPD ont pour principaux impacts: - La mise à jour des configurations au sein du JSON devant être intégrés sur chaque conteneur (un conteneur est égal à un pays / marque). - La communication aux pays pour qu’ils téléchargent ce nouveau JSON au sein de leur conteneur (pour chaque site).</p>
                    
                    <p><strong>12. Est-ce que le tracking server-side est une solution que vous avez envisagée ?</strong></p>
                    
                    <p>Oui, par l’intermédiaire de GTM; nous avons discuté de ce sujet mais pas de grande avancée.</p>
                    
                    <p><strong>13. Avez-vous mis en place des stratégies pour tout de même suivre les visiteurs qui ont refusé le tracking ?</strong></p>
                    
                    <p>Non. Des questions se posent quant à la possibilité de réconcilier les données via les log de Cloudflare. Mais pour le moment rien ne se décide de ces discussions.</p>
                    
                    <p><strong>14. Au-delà des mises à jour techniques de vos outils (CMP, TMS) pour mieux collecter le consentement utilisateur sur les cookies/traceurs, avez-vous lancé un projet de réalignement de la gouvernance data au sein de votre entreprise ?</strong></p>
                    
                    <p>Le département CDO incarne cette centralisation de la gouvernance de la data, avec des équipes Media, Ecommerce, etc. qui ont pour but de développer des Guidelines pour le groupe et de le diffuser au sein du réseau.</p>
                    
                    <p><strong>15. Quels impacts a eu le RGPD sur les données que vous utilisez pour piloter votre stratégie marketing ?</strong></p>
                    
                    <p>Nous avons moins de données donc impact direct sur les initiatives media (audiences…), la connaissance client va être amoindrie. La création et la signification des audiences dans les outils vont être moindre, les programmes de fidélité et le CRM aussi.</p>
                    
                    <p><strong>16. Quels sont les impacts sur vos investissements média ?</strong></p>
                    
                    <p>Je ne sais pas exactement comment les équipes media travaillent sur ce point.</p>
                    
                    <p><strong>17. Prévoyez-vous ou avez-vous anticipé un éventuel report de budget média vers du SEO ou des partenariats ?</strong></p>
                    
                    <p>Je ne sais pas exactement comment les équipes media travaillent sur ce point.</p>
                    
                    <p><strong>18. Est-ce que la mise en conformité au RGPD a engendré un coût budgétaire pour votre site ?</strong></p>
                    
                    <p>Oui dans la mesure ou si nous avons moins d’informations collectés via les cookies, il est dans notre intérêt de soigner la connaissance client en ajoutant des fonctionnalités comme la création de compte pour servir les programmes CRM, de fidélité, etc. Ce virage entraînerait des coûts supplémentaires dans le développement d’un site et au final dans les campagnes</p>
                    
                    <p><strong>19. Identifiez-vous d’autres impacts que ceux évoqués précédemment concernant la mise en conformité du RGPD ?</strong></p>
                    
                    <p>Oui, un très important, la compréhension des données à disposition par des profils non experts.</p>
                    
                    <p>Si changement de Policy (ex: le DPO d’un pays décide de considérer Google Analytics comme un cookie de Performance et plus un cookie Strictement nécessaire), un impact “négligé” mais qui relève au final plus de la communication sera d’expliquer une perte de données qui ne résulte pas d’une baisse de trafic mais tout simplement d’un volume de visite pour lesquels l’internaute n’a pas donné son consentement.</p>
                    
                    <p>“Moins 20%!!!” non vous ne faites pas -20% même si c’est dans l’absolu possible; via le changement de Policy, pour collecter de la donnée votre internaute doit donner son consentement ce qui n’était pas le cas avant.</p>
                    
                    <p><strong>20. Pensez-vous que cette évolution de la législation changera drastiquement votre manière de travailler ?</strong></p>
                    
                    <p>Oui, et ceci sous plusieurs angles: - La formation: expliquer la nature des changements et leurs impacts (voir question 19) - L’analyse: comprendre que le champs d’analyse se réduit - L’activation: impact sur les stratégie media - Le coût de développement d’un site: ajout de nouvelles fonctionnalités - L’ADN d’une marque: programme de fidélité ou pas pour activer la connaissance client et légitimé la collecte d’information</p>
                    

                    <h3 id="annexe-3---questionnaire---impact-du-rgpd-sur-entreprise-c">Annexe 3 - Questionnaire - Impact du RGPD sur Entreprise C</h3>
                    
                    <p><strong>1. Quel est l'intitulé de votre poste et vos missions au sein de votre entreprise ?</strong></p>
                    
                    <p>Responsable suivi e business et web analyse.</p>
                    
                    <p><strong>2. Comment suivez-vous les mises à jour des recommandations émises par la CNIL et les DPAs des autres pays (dans le cadre où votre entreprise est internationale) sur le RGPD ?</strong></p>
                    
                    <p>Les équipes directement concernées par l’application des recommandations de la CNIL car impactées par les obligations juridiques et réglementaires induites pour le bon exercice de leur activité exercent une veille constante des évolutions liées, en lien étroit avec les différentes solutions prestataires avec lesquelles elles travaillent, afin de coller au plus près des bonnes pratiques du marché.</p>
                    
                    <p><strong>3. Avez-vous dû créer une équipe dédiée pour suivre la mise en conformité au RGPD ?</strong></p>
                    
                    <p>Oui une équipe a été créée afin de notamment garantir en interne la bonne application des directives GDPR principales auprès des différentes équipes concernées.</p>
                    
                    <p><strong>4. Si une équipe au sein de votre entreprise existe, de quel département dépend-t-elle (Sécurité, DSI Marketing, Juridique, etc.) ?</strong></p>
                    
                    <p>La centralisation de ces sujets est affectée au département Big Data.</p>
                    
                    <p><strong>5. La CNIL a mis à jour ses recommandations en septembre 2020. Avez-vous anticipé la mise en place des nouvelles règles de la CNIL pour la collecte du consentement sur les cookies ?</strong></p>
                    
                    <p>Oui les nouvelles mesures de la CNIL ont été anticipées dans leurs grandes lignes depuis les précédentes directives.</p>
                    
                    <p><strong>6. Si oui, quels sont les dispositifs que vous avez mis en place ?</strong></p>
                    
                    <p>Ce sujet a principalement été anticipé par une réflexion autour du format du bandeau de collecte de privacy afin d’anticiper le dispositif permettant le meilleur compromis entre la collecte du consentement d’une part et le respect des directives CNIL d’autre part, et observée via le déploiement d’ab tests sur notre site web.</p>
                    
                    <p><strong>7. Si non, quelles actions allez-vous mettre en place dans les prochains mois concernant la collecte du consentement pour les cookies ?</strong></p>
                    
                    <p>N/A</p>
                    
                    <p><strong>8. Pensez-vous que les différents acteurs (analytique, média, etc.) ont réussi à anticiper ces évolutions ?</strong></p>
                    
                    <p>Dans les grandes lignes oui car la vocation première du RGPD était claire dès le départ, des zones grises restent néanmoins à éclaircir, tant sur la latitude juridique que les acteurs peuvent conserver dans la mise en place de la collecte du consentement, que sur les solutions que les grands acteurs technologiques d’achat média et analytics vont déployer pour mieux répondre aux enjeux de sécurité de la donnée demain.</p>
                    
                    <p><strong>9. Traitez-vous le sujet de la collecte du consentement sur les traceurs à la fois pour vos sites web et vos applications mobiles ?</strong></p>
                    
                    <p>Le bandeau de collecte du consentement est actif sur l’ensemble de nos sites. Nous n’avons pas d’application mobile.</p>
                    
                    <p><strong>10. Avez-vous lancé des actions d’A/B testing de votre bandeau cookie et/ou de votre CMP afin d'optimiser la collecte du consentement ?</strong></p>
                    
                    <p>Oui, plusieurs ab test ont été lancés dans les derniers mois pour définir le bon format du bandeau.</p>
                    
                    <p><strong>11. Quels sont les impacts du RGPD au niveau technique ?</strong></p>
                    
                    <p>La RGPD impose un contrôle plus attentif quant à la qualité de la donnée collectée afin que celle-ci soit conforme aux principes d’anonymisation énoncés par celle-ci. Elle nécessite également de garantir les moyens de fournir à nos clients demandeurs une visibilité sur l’ensemble des données qui ont été collectées le concernant.</p>
                    
                    <p><strong>12. Est-ce que le tracking server-side est une solution que vous avez envisagée ?</strong></p>
                    
                    <p>C’est une solution que l’on envisage effectivement à l’heure actuelle.</p>
                    
                    <p><strong>13. Avez-vous mis en place des stratégies pour tout de même suivre les visiteurs qui ont refusé le tracking ?</strong></p>
                    
                    <p>Aucune à ma connaissance.</p>
                    
                    <p><strong>14. Au-delà des mises à jour techniques de vos outils (CMP, TMS) pour mieux collecter le consentement utilisateur sur les cookies/traceurs, avez-vous lancé un projet de réalignement de la gouvernance data au sein de votre entreprise ?</strong></p>
                    
                    <p>Pas à ma connaissance.</p>
                    
                    <p><strong>15. Quels impacts a eu le RGPD sur les données que vous utilisez pour piloter votre stratégie marketing ?</strong></p>
                    
                    <p>Il nous a fallu renforcer l’anonymisation des données collectées et utilisées dans l’ensemble de nos process et fournir un effort principalement technique (configuration outils) afin de nous assurer que les différentes chaînes d’exploitation des données que nous utilisons dans nos différents cas d’usage ne présentent pas de faille potentielle sur la sécurité des données personnelles des prospects et clients utilisant nos sites web.</p>
                    
                    <p><strong>16. Quels sont les impacts sur vos investissements média ?</strong></p>
                    
                    <p>Jusqu’à présent, pas d’impact significatif sur nos investissements. A l’avenir néanmoins des choix stratégiques pourront être effectués selon la façon avec laquelle nos principaux partenaires de l’ad tech rendront leurs solutions moins cookie-dépendants.</p>
                    
                    <p><strong>17. Prévoyez-vous ou avez-vous anticipé un éventuel report de budget média vers du SEO ou des partenariats ?</strong></p>
                    
                    <p>Pas à l’heure actuelle.</p>
                    
                    <p><strong>18. Est-ce que la mise en conformité au RGPD a engendré un coût budgétaire pour votre site ?</strong></p>
                    
                    <p>Pas à ma connaissance.</p>
                    
                    <p><strong>19. Identifiez-vous d’autres impacts que ceux évoqués précédemment concernant la mise en conformité du RGPD ?</strong></p>
                    
                    <p>Pas actuellement.</p>
                    
                    <p><strong>20. Pensez-vous que cette évolution de la législation changera drastiquement votre manière de travailler ?</strong></p>
                    
                    <p>Non, le suivi de la donnée restera toujours une préoccupation des entreprises, l’enjeu est surtout de comprendre comment celle-ci sera collectée et suivie demain afin d’adapter les processus et méthodes d’analyse actuels.</p>
                    

                    <h3 id="annexe-4---questionnaire---impact-du-rgpd-sur-entreprise-d">Annexe 4 - Questionnaire - Impact du RGPD sur Entreprise D</h3>
                    
                    <p><strong>1. Quel est l'intitulé de votre poste et vos missions au sein de votre entreprise ?</strong></p>
                    
                    <p>Web Analyste</p>
                    
                    <p><strong>2. Comment suivez-vous les mises à jour des recommandations émises par la CNIL et les DPAs des autres pays (dans le cadre où votre entreprise est internationale) sur le RGPD ?</strong></p>
                    
                    <p>Veille, communication interne, éditeurs de solutions utilisées</p>
                    
                    <p><strong>3. Avez-vous dû créer une équipe dédiée pour suivre la mise en conformité au RGPD ?</strong></p>
                    
                    <p>Non</p>
                    
                    <p><strong>4. Si une équipe au sein de votre entreprise existe, de quel département dépend-t-elle (Sécurité, DSI Marketing, Juridique, etc.) ?</strong></p>
                    
                    <p>N/A</p>
                    
                    <p><strong>5. La CNIL a mis à jour ses recommandations en septembre 2020. Avez-vous anticipé la mise en place des nouvelles règles de la CNIL pour la collecte du consentement sur les cookies ?</strong></p>
                    
                    <p>Non, pas dans les faits, mais les réflexions sont menées en amont.</p>
                    
                    <p><strong>6. Si oui, quels sont les dispositifs que vous avez mis en place ?</strong></p>
                    
                    <p>N/A</p>
                    
                    <p><strong>7. Si non, quelles actions allez-vous mettre en place dans les prochains mois concernant la collecte du consentement pour les cookies ?</strong></p>
                    
                    <p>Utilisation de la mesure hybride avec une exemption de notre outil analytics, pour les autres cookies, gestion classique avec l’adaptation du bandeau notamment.</p>
                    
                    <p><strong>8. Pensez-vous que les différents acteurs (analytique, média, etc.) ont réussi à anticiper ces évolutions ?</strong></p>
                    
                    <p>L’outil analytics utilisé a bien anticipé certaines évolutions, car il s’agit déjà d’une solution qui bénéficiait de l’exemption depuis des années et qui a travaillé pour adapter et améliorer sa proposition.</p>
                    
                    <p>D’un point de vue plus global, l’analytics mais aussi les autres acteurs ne sont peut-être pas dans l’anticipation ni même dans une réflexion sur des méthodes de collectes différentes à mon sens.</p>
                    
                    <p><strong>9. Traitez-vous le sujet de la collecte du consentement sur les traceurs à la fois pour vos sites web et vos applications mobiles ?</strong></p>
                    
                    <p>Oui</p>
                    
                    <p><strong>10. Avez-vous lancé des actions d’A/B testing de votre bandeau cookie et/ou de votre CMP afin d'optimiser la collecte du consentement ?</strong></p>
                    
                    <p>Oui</p>
                    
                    <p><strong>11. Quels sont les impacts du RGPD au niveau technique ?</strong></p>
                    
                    <p>Nous utilisons une CMP pour la gestion et l’autonomie sur les sujets</p>
                    
                    <p><strong>12. Est-ce que le tracking server-side est une solution que vous avez envisagée ?</strong></p>
                    
                    <p>oui complètement</p>
                    
                    <p><strong>13. Avez-vous mis en place des stratégies pour tout de même suivre les visiteurs qui ont refusé le tracking ?</strong></p>
                    
                    <p>Non, dans un premier temps nous nous baserons sur notre outil analytics et son suivi en mode exempté.</p>
                    
                    <p><strong>14. Au-delà des mises à jour techniques de vos outils (CMP, TMS) pour mieux collecter le consentement utilisateur sur les cookies/traceurs, avez-vous lancé un projet de réalignement de la gouvernance data au sein de votre entreprise ?</strong></p>
                    
                    <p>Non</p>
                    
                    <p><strong>15. Quels impacts a eu le RGPD sur les données que vous utilisez pour piloter votre stratégie marketing ?</strong></p>
                    
                    <p>Perte au niveau des tags media</p>
                    
                    <p><strong>16. Quels sont les impacts sur vos investissements média ?</strong></p>
                    
                    <p>Cela est géré par un autre département</p>
                    
                    <p><strong>17. Prévoyez-vous ou avez-vous anticipé un éventuel report de budget média vers du SEO ou des partenariats ?</strong></p>
                    
                    <p>Idem</p>
                    
                    <p><strong>18. Est-ce que la mise en conformité au RGPD a engendré un coût budgétaire pour votre site ?</strong></p>
                    
                    <p>Oui, coût au niveau des solutions utilisées et coût au niveau de l’investissement humain</p>
                    
                    <p><strong>19. Identifiez-vous d’autres impacts que ceux évoqués précédemment concernant la mise en conformité du RGPD ?</strong></p>
                    
                    <p>N/A</p>
                    
                    <p><strong>20. Pensez-vous que cette évolution de la législation changera drastiquement votre manière de travailler ?</strong></p>
                    
                    <p>A terme oui, il va falloir être inventif, innover pour continuer à travailler. Il est nécessaire de faire évoluer le métier en corrélation avec ces évolutions.</p>
                    

                    <h3 id="annexe-5---politique-de-confidentialité">Annexe 5 - Politique de confidentialité</h3>
                    
                    <p><strong>Introduction</strong></p>
                    
                    <p>Dans le cadre de mon projet de master Mathématiques et Informatique Appliquées aux Sciences Humaines et Sociales (MIASHS) parcours Web Analyse, je suis amené à collecter et à traiter des informations dont certaines sont qualifiées de &quot;données personnelles&quot;. Moi, Guillaume Sinnaeve, attache une grande importance au respect de la vie privée, et n’utilise que des données de manière responsable et confidentielle et dans une finalité précise.</p>
                    
                    <p><strong>Données personnelles</strong></p>
                    
                    <p>Sur le site web www.guillaume-sinnaeve.com, il y a 1 type de données susceptible d’être recueilli :<br>- <strong>Les données collectées automatiquement</strong><br>Lors de vos visites, je recueille des informations de type « web analytics » relatives à votre navigation comme la durée de votre consultation, votre localisation, votre type et version de navigateur. La technologie utilisée est sans cookies et sans JavaScript.</p>
                    
                    <p><strong>Utilisation des données</strong></p>
                    
                    <p>Les données « web analytics » sont collectées de forme anonyme par l'outil que j'ai développé, et me permettent de mesurer l'audience de mon site web, les consultations et les éventuelles erreurs afin d’améliorer constamment l’expérience des visiteurs. Ces données sont utilisées par moi-même, responsable du traitement des données, et ne seront jamais cédées à un tiers ni utilisées à d’autres fins que celles détaillées ci-dessus.</p>
                    
                    <p><strong>Base légale</strong></p>
                    
                    <p>Les données personnelles sont collectées sans consentement de l'utilisateur dans le cadre du respect des recommandations de la CNIL dans le cas de l'exemption.</p>
                    
                    <p><strong>Durée de conservation</strong></p>
                    
                    <p>Les données seront sauvegardées durant une durée maximale de vingt-cinq mois.</p>
                    
                    <p><strong>Contact délégué à la protection des données</strong></p>
                    
                    <p>Guillaume Sinnaeve - sinnaeve.guillaume[at]gmail.com</p>
                    

                    <h3 id="annexe-6---événement-de-suppressions-des-données-de-plus-de-25-mois">Annexe 6 - Événement de suppressions des données de plus de 25 mois</h3>
                    
                    <p>Ci-dessus, la requête utilisée permettant la mise en place d’un contrôle quotidien pour supprimer les données enregistrées il y a plus de 25 mois dans la base de données et ainsi être conforme aux recommandations de la CNIL.</p>
                    
                    <p>CREATE EVENT <code>DELETE_DATA_OVER_25_MONTHS</code> ON SCHEDULE EVERY 1 DAY ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM <code>data</code> WHERE <code>timestamp</code> &lt; CURRENT_TIMESTAMP - INTERVAL 25 MONTH</p>
                    

                    <h3 id="annexe-7---campagnes-dacquisition-de-données">Annexe 7 - Campagnes d'acquisition de données</h3>
                    
                    <p><strong>Texte de la publication en français</strong></p>
                    
                    <p>Bonjour à tous !</p>
                    
                    <p>Dans le cadre de mon master MIASHS parcours web analyse, j’ai créé mon site internet expérimental (et non commercial) sur lequel j’ai mis en place une solution analytics sans cookies, sans JavaScript et conforme au RGPD à des fins de mesure d’audience. Découvrez mon site 👉https://guillaume-sinnaeve.com/</p>
                    
                    <p>J’ai besoin de vous pour générer du trafic et des actions sur le site afin d’alimenter l’outil en données et ainsi éprouver son efficacité.</p>
                    
                    <p>N’hésitez pas à partager et à me contacter pour que je vous en dise plus sur cette solution.</p>
                    
                    <p>Merci d’avance pour votre aide précieuse !</p>
                    
                    <p><strong>Texte de la publication en anglais</strong></p>
                    
                    <p>Hello everyone!</p>
                    
                    <p>As part of my MIASHS web analysis course, I created my experimental (and non-commercial) website on which I set up an analytics solution without cookies, without JavaScript and GDPR compliant for audience measurement purposes. Discover my site 👉https://guillaume-sinnaeve.com/</p>
                    
                    <p>I need you to generate traffic and actions on the site in order to feed the tool with data and test its effectiveness.</p>
                    
                    <p>Please do not hesitate to share and contact me so that I can tell you more about this solution.</p>
                    
                    <p>Thank you in advance for your precious help!</p>
                    
                    <p><strong>Publication d'un post sur LinkedIn le mercredi 25 novembre 2020 à 12h00.</strong><br><img src="/img/memoire/annexe_post_linkedin_20201125.png" title="Publication LinkedIn le 25 novembre 2020 à 12h00" alt="Publication LinkedIn le 25 novembre 2020 à 12h00" style="max-width: 600px;width: 100%;"/></p>
                    
                    <p><strong>Publication d'un post sur Facebook le jeudi 26 novembre 2020 à 13h00.</strong><br><img src="/img/memoire/annexe_post_facebook_20201126.png" title="Publication Facebook le 26 novembre 2020 à 13h00" alt="Publication Facebook le 26 novembre 2020 à 13h00" style="max-width: 600px;width: 100%;"/></p>
                    
                    <p><strong>Publication d'un post sur LinkedIn le mardi 01 décembre 2020 à 14h30.</strong><br><img src="/img/memoire/annexe_post_linkedin_20201201.png" title="Publication Linkedin le 01 décembre 2020 à 14h30" alt="Publication Linkedin le 01 décembre 2020 à 14h30" style="max-width: 600px;width: 100%;"/></p>
                    
                    <p><strong>Publication d'un post sur Facebook le samedi 05 décembre 2020 à 13h00.</strong><br><img src="/img/memoire/annexe_post_facebook_20201205.png" title="Publication Facebook le 05 décembre 2020 à 13h00" alt="Publication Facebook le 05 décembre 2020 à 13h00" style="max-width: 600px;width: 100%;"/></p>
                    

                    <h3 id="annexe-8---schéma-de-la-base-de-données">Annexe 8 - Schéma de la base de données</h3>
                    
                    <p>Schéma de la base de données<br><img src="/img/memoire/annexe_database.png" title="Schéma de la base de données" alt="Schéma de la base de données" /></p>
                    
                    <p>Liste des variables et des valeurs attendues :</p>
                    
                    <table>
                        <thead>
                            <tr class="header">
                                <th align="left">Variable</th>
                                <th align="left">Description</th>
                                <th align="left">Exemple</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd">
                                <td align="left">timestamp</td>
                                <td align="left">Date et heure de la requête</td>
                                <td align="left">2020-12-25 12:29:31</td>
                            </tr>
                            <tr class="even">
                                <td align="left">session_id</td>
                                <td align="left">Identifiant de visite</td>
                                <td align="left">1609170082_123456789</td>
                            </tr>
                            <tr class="odd">
                                <td align="left">event_name</td>
                                <td align="left">Nom de l’événement</td>
                                <td align="left">show_formations</td>
                            </tr>
                            <tr class="even">
                                <td align="left">event_custom_1</td>
                                <td align="left">Qualificatif de l’événement</td>
                                <td align="left">MIASHS</td>
                            </tr>
                            <tr class="odd">
                                <td align="left">event_custom_2</td>
                                <td align="left">Qualificatif de l’événement</td>
                                <td align="left">University of Lille</td>
                            </tr>
                            <tr class="even">
                                <td align="left">page_uri</td>
                                <td align="left">Chemin de la page</td>
                                <td align="left">/en/formations</td>
                            </tr>
                            <tr class="odd">
                                <td align="left">date_full</td>
                                <td align="left">Date de la requête</td>
                                <td align="left">12/25/2020</td>
                            </tr>
                            <tr class="even">
                                <td align="left">date_day</td>
                                <td align="left">Jour de la requête</td>
                                <td align="left">Friday</td>
                            </tr>
                            <tr class="odd">
                                <td align="left">date_hour</td>
                                <td align="left">Heure de la requête</td>
                                <td align="left">12</td>
                            </tr>
                            <tr class="even">
                                <td align="left">date_minute</td>
                                <td align="left">Minute de la requête</td>
                                <td align="left">29</td>
                            </tr>
                            <tr class="odd">
                                <td align="left">referrer_full</td>
                                <td align="left">URL de la page précédente</td>
                                <td align="left">https://www.guillaume-sinnaeve.com/en/home?sid=1609170082_123456789</td>
                            </tr>
                            <tr class="even">
                                <td align="left">referrer_host</td>
                                <td align="left">Nom de domaine de la page précédente</td>
                                <td align="left">www.guillaume-sinnaeve.com</td>
                            </tr>
                            <tr class="odd">
                                <td align="left">referrer_path</td>
                                <td align="left">Chemin de la page précédente</td>
                                <td align="left">/en/home</td>
                            </tr>
                            <tr class="even">
                                <td align="left">geo_country</td>
                                <td align="left">Pays du visiteur</td>
                                <td align="left">France</td>
                            </tr>
                            <tr class="odd">
                                <td align="left">geo_region</td>
                                <td align="left">Région du visiteur</td>
                                <td align="left">Île-de-France</td>
                            </tr>
                            <tr class="even">
                                <td align="left">geo_city</td>
                                <td align="left">Ville du visiteur</td>
                                <td align="left">Paris</td>
                            </tr>
                            <tr class="odd">
                                <td align="left">device_userAgent</td>
                                <td align="left">Agent utilisateur du visiteur</td>
                                <td align="left">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Safari/537.36</td>
                            </tr>
                            <tr class="even">
                                <td align="left">device_category</td>
                                <td align="left">Catégorie de l’appareil du visiteur</td>
                                <td align="left">Desktop</td>
                            </tr>
                            <tr class="odd">
                                <td align="left">device_system</td>
                                <td align="left">Système d’exploitation du visiteur</td>
                                <td align="left">Windows</td>
                            </tr>
                            <tr class="even">
                                <td align="left">device_browser</td>
                                <td align="left">Navigateur du visiteur</td>
                                <td align="left">Chrome</td>
                            </tr>
                            <tr class="odd">
                                <td align="left">device_language</td>
                                <td align="left">Langue du navigateur du visiteur</td>
                                <td align="left">en</td>
                            </tr>
                        </tbody>
                    </table>
                    

                    <h3 id="annexe-9---page-danalyse-du-site">Annexe 9 - Page d’analyse du site</h3>
                    
                    <p><strong>Temps réel</strong><br><img src="/img/memoire/annexe_analyse_real_time.png" title="Rapports Temps réel" alt="Rapports Temps réel" style="max-width: 600px;width: 100%;"/></p>
                    
                    <p><strong>Visiteurs</strong><br><img src="/img/memoire/annexe_analyse_visitors.png" title="Rapports Visiteurs" alt="Rapports Visiteurs" style="max-width: 600px;width: 100%;"/></p>
                    
                    <p><strong>Pages</strong><br><img src="/img/memoire/annexe_analyse_pages.png" title="Rapports Pages" alt="Rapports Pages" style="max-width: 600px;width: 100%;"/></p>
                    
                    <p><strong>Événements</strong><br><img src="/img/memoire/annexe_analyse_events.png" title="Rapports Événements" alt="Rapports Événements" style="max-width: 600px;width: 100%;"/></p>
                </section>
                <section>
                    <h2 id="table-des-illustrations">Table des illustrations</h2>
                    
                    <p>Illustration 1 : Schéma itératif de la collecte de données</p>
                    
                    <p>Illustration 2 : Dépôt de cookies pour un visiteur sur un site e-commerce</p>
                    
                    <p>Illustration 3 : Dépôt de cookies tiers suite à la vue d'une bannière publicitaire</p>
                    
                    <p>Illustration 4 : Tendances de croissance trimestrielles des revenus publicitaires sur Internet 1996-2019. Source: IAB/PwC Internet Ad Revenue Report, FY 2019</p>
                    
                    <p>Illustration 5 : Impact d’ITP sur les cookies first et les cookies tiers pour l’analytique et le média</p>
                    
                    <p>Illustration 6 : Panneau de contrôle des différents niveaux de protection proposé par Firefox</p>
                    
                    <p>Illustration 7 : Affichage sur le site www.urssaf.fr d’une pop-up de respect de l’option DNT activée sur le navigateur Google Chrome</p>
                    
                    <p>Illustration 8 : Affichage du nombre de publicités et d'annonces bloquées sur le navigateur Brave sur un smartphone après 2 ans d’activité</p>
                    
                    <p>Illustration 9 : Affichage d’une popin pour demander la désactivation des adblockers sur le site www.lesechos.fr</p>
                    
                    <p>Illustration 10 : Schéma de la base de données collectées dans le cadre de l’expérience</p>
                    
                    <p>Illustration 11 : Mention de la finalité des données collectées au sein de la page de politique de confidentialité</p>
                    
                    <p>Illustration 12 : Création de l’événement de suppression automatique des données enregistrées au delà de 25 mois dans la base</p>
                    
                    <p>Illustration 13 : Exemple d’une insertion du fichier collect.php sur une des pages du site</p>
                    
                    <p>Illustration 14 : Visibilité de la ressource home.php dans le Network sur la page https://www.guillaume-sinnaeve.com/fr/home</p>
                    
                    <p>Illustration 15 : Exemple d'en-têtes de réponse de la page https://www.guillaume-sinnaeve.com/fr/home</p>
                    
                    <p>Illustration 16 : Styles CSS appliqués aux boutons de la page https://www.guillaume-sinnaeve.com/fr/home</p>
                    
                    <p>Illustration 17 : Calculs effectués pour attribuer une valeur au paramètre “sid” de l’URL</p>
                    
                    <p>Illustration 18 : Récupération de l’adresse IP pour déterminer le pays, la région et la ville de l’utilisateur</p>
                    
                    <p>Illustration 19 : Récupération du nom de l’événement et des paramètres qui le qualifie via l’URL d’appel au fichier collect.php</p>
                    
                    <p>Illustration 20 : Condition pour exclure les bots de la collecte de données</p>
                    
                    <p>Illustration 21 : Calculs effectués pour déterminer les valeurs liées aux referrers</p>
                    
                    <p>Illustration 22 : Calculs effectués pour déterminer le système d’exploitation de l'utilisateur</p>
                    
                    <p>Illustration 23 : Rapports liés aux systèmes d’exploitations et aux navigateurs des visiteurs</p>
                    
                    <p>Illustration 24 : Rapports liés aux langues et aux noms des pages vues</p>
                    
                    <p>Illustration 25 : Rapport lié aux compétences consultés par les visiteurs</p>
                </section>
                <section>
                    <h2 id="webographie">Webographie</h2>
                    
                    <p>Aide Google Chrome. <strong>Activer ou désactiver la fonctionnalité Interdire le suivi</strong>
                    <br><a href="https://support.google.com/chrome/answer/2790761" target="_blank">https://support.google.com/chrome/answer/2790761</a></p>
                    
                    <p>Benjamin Poilvé (Janvier 2020). <strong>Une petite histoire du cookie</strong>, Laboratoire d’Innovation Numérique de la CNIL
                    <br><a href="https://linc.cnil.fr/fr/une-petite-histoire-du-cookie" target="_blank">https://linc.cnil.fr/fr/une-petite-histoire-du-cookie</a></p>
                    
                    <p>CNIL. <strong>Cookie</strong>
                    <br><a href="https://www.cnil.fr/fr/definition/cookie" target="_blank">https://www.cnil.fr/fr/definition/cookie</a></p>
                    
                    <p>CNIL (octobre 2020). <strong>Cookies et traceurs : que dit la loi ?</strong>
                    <br><a href="https://www.cnil.fr/fr/cookies-et-traceurs-que-dit-la-loi" target="_blank">https://www.cnil.fr/fr/cookies-et-traceurs-que-dit-la-loi</a></p>
                    
                    <p>CNIL. <strong>Définir une finalité</strong>
                    <br><a href="https://www.cnil.fr/fr/definir-une-finalite" target="_blank">https://www.cnil.fr/fr/definir-une-finalite</a></p>
                    
                    <p>CNIL (octobre 2020). <strong>Mesurer la fréquentation de vos sites web et de vos applications</strong>
                    <br><a href="https://www.cnil.fr/fr/mesurer-la-frequentation-de-vos-sites-web-et-de-vos-application" target="_blank">https://www.cnil.fr/fr/mesurer-la-frequentation-de-vos-sites-web-et-de-vos-applications</a></p>
                    
                    <p>CNIL. <strong>Sanction.</strong>
                    <br><a href="https://www.cnil.fr/fr/definition/sanction" target="_blank">https://www.cnil.fr/fr/definition/sanction</a></p>
                    
                    <p>Eur-Lex. <strong>Directive 2002/58/CE du Parlement européen et du Conseil du 12 juillet 2002 concernant le traitement des données à caractère personnel et la protection de la vie privée dans le secteur des communications électroniques (directive vie privée et communications électroniques).</strong>
                    <br><a href="https://eur-lex.europa.eu/legal-content/FR/ALL/?uri=CELEX%3A32002L0058" target="_blank">https://eur-lex.europa.eu/legal-content/FR/ALL/?uri=CELEX%3A32002L0058</a></p>
                    
                    <p>Google. <strong>Consent mode (beta)</strong>
                    <br><a href="https://support.google.com/analytics/answer/9976101?hl=en" target="_blank">https://support.google.com/analytics/answer/9976101?hl=en</a></p>
                    
                    <p>IAB (Mai 2020). <strong>Internet advertising revenue report Full year 2019 results &amp; Q1 2020 revenues</strong>
                    <br><a href="https://www.iab.com/wp-content/uploads/2020/05/FY19-IAB-Internet-Ad-Revenue-Report_Final.pdf" target="_blank">https://www.iab.com/wp-content/uploads/2020/05/FY19-IAB-Internet-Ad-Revenue-Report_Final.pdf</a></p>
                    
                    <p>ICO. <strong>How do we comply with the cookie rules?</strong>
                    <br><a href="https://ico.org.uk/for-organisations/guide-to-pecr/guidance-on-the-use-of-cookies-and-similar-technologies/how-do-we-comply-with-the-cookie-rules/" target="_blank">https://ico.org.uk/for-organisations/guide-to-pecr/guidance-on-the-use-of-cookies-and-similar-technologies/how-do-we-comply-with-the-cookie-rules/</a></p>
                    
                    <p>Journal du Net (Février 2020). <strong>Privacy Sandbox : que contient l'alternative de Google aux cookies tiers ?</strong>
                    <br><a href="https://www.journaldunet.com/ebusiness/publicite/1489199-privacy-sandbox-que-contient-l-alternative-de-google-aux-cookies-tiers/" target="_blank">https://www.journaldunet.com/ebusiness/publicite/1489199-privacy-sandbox-que-contient-l-alternative-de-google-aux-cookies-tiers/</a></p>
                    
                    <p>La Tribune (Novembre 2020). RGPD : <strong>la CNIL condamne Carrefour à plus de 3 millions d'euros d'amendes</strong>
                    <br><a href="https://www.latribune.fr/technos-medias/internet/rgpd-la-cnil-condamne-carrefour-a-plus-de-3-millions-d-euros-d-amendes-863384.html" target="_blank">https://www.latribune.fr/technos-medias/internet/rgpd-la-cnil-condamne-carrefour-a-plus-de-3-millions-d-euros-d-amendes-863384.html</a></p>
                    
                    <p>Le Monde (Avril 2018). <strong>Données privées : le site de rencontres Grindr mis en cause</strong>
                    <br><a href="https://www.lemonde.fr/pixels/article/2018/04/03/donnees-privees-le-site-de-rencontres-grindr-mis-en-cause_5279794_4408996.html" target="_blank">https://www.lemonde.fr/pixels/article/2018/04/03/donnees-privees-le-site-de-rencontres-grindr-mis-en-cause_5279794_4408996.html</a></p>
                    
                    <p>Les Echos (Janvier 2018). <strong>Criteo : un pépin nommé Apple</strong>
                    <br><a href="https://www.lesechos.fr/2018/01/criteo-un-pepin-nomme-apple-981952" target="_blank">https://www.lesechos.fr/2018/01/criteo-un-pepin-nomme-apple-981952</a></p>
                   
                    <p>Radio Canada (Juin 2019). <strong>Fuites de données : cinq grands scandales des dernières années</strong>
                    <br><a href="https://ici.radio-canada.ca/nouvelle/1193991/scandale-fuite-vol-renseignements-personnel" target="_blank">https://ici.radio-canada.ca/nouvelle/1193991/scandale-fuite-vol-renseignements-personnel</a></p>
                    
                    <p>RGPD. <strong>CHAPITRE I - Dispositions générales</strong>
                    <br><a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre1" target="_blank">https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre1</a></p>
                   
                    <p>Romain Warlop (Février 2020). <strong>Privacy Sandbox : quand Google relève le défi de l’alternative aux cookies publicitaires… en deux ans !</strong>, 55 the tea house
                    <br><a href="https://teahouse.fifty-five.com/fr/privacy-sandbox-quand-google-releve-le-defi-de-lalternative-aux-cookies-publicitaires-en-deux-ans/" target="_blank">https://teahouse.fifty-five.com/fr/privacy-sandbox-quand-google-releve-le-defi-de-lalternative-aux-cookies-publicitaires-en-deux-ans/</a></p>
                    
                    <p>Stratégies (Novembre 2018). <strong>Les adblockers ne connaissent pas la crise</strong>
                    <br><a href="https://www.strategies.fr/actualites/medias/4020718W/les-adblockers-ne-connaissent-pas-la-crise.html" target="_blank">https://www.strategies.fr/actualites/medias/4020718W/les-adblockers-ne-connaissent-pas-la-crise.html</a></p>

                    <p>The Mozilla Blog (Août 2020). <strong>Latest Firefox rolls out Enhanced Tracking Protection 2.0; blocking redirect trackers by default</strong>
                    <br><a href="https://blog.mozilla.org/blog/2020/08/04/latest-firefox-rolls-out-enhanced-tracking-protection-2-0-blocking-redirect-trackers-by-default/" target="_blank">https://blog.mozilla.org/blog/2020/08/04/latest-firefox-rolls-out-enhanced-tracking-protection-2-0-blocking-redirect-trackers-by-default/</a></p>

                    <p>Webkit (Juin 2017). <strong>Intelligent Tracking Prevention</strong>
                    <br><a href="https://webkit.org/blog/7675/intelligent-tracking-prevention/" target="_blank">https://webkit.org/blog/7675/intelligent-tracking-prevention/</a></p>
                    
                    <p>Webkit (Juin 2018). <strong>Intelligent Tracking Prevention 2.0</strong>
                    <br><a href="https://webkit.org/blog/8311/intelligent-tracking-prevention-2-0/" target="_blank">https://webkit.org/blog/8311/intelligent-tracking-prevention-2-0/</a></p>
                    
                    <p>Webkit (Février 2019). <strong>Intelligent Tracking Prevention 2.1</strong>
                    <br><a href="https://webkit.org/blog/8613/intelligent-tracking-prevention-2-1/" target="_blank">https://webkit.org/blog/8613/intelligent-tracking-prevention-2-1/</a></p>
                    
                    <p>Webkit (Avril 2019). <strong>Intelligent Tracking Prevention 2.2</strong>
                    <br><a href="https://webkit.org/blog/8828/intelligent-tracking-prevention-2-2/" targeet="_blank">https://webkit.org/blog/8828/intelligent-tracking-prevention-2-2/</a></p>
                    
                    <p>Webkit (Septembre 2019). <strong>Intelligent Tracking Prevention 2.3</strong>
                    <br><a href="https://webkit.org/blog/8828/intelligent-tracking-prevention-2-2/" target="_blank">https://webkit.org/blog/9521/intelligent-tracking-prevention-2-3/</a></p>
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