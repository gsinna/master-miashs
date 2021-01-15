![University of Lille](https://guillaume-sinnaeve.com/img/memoire/univ-lille.png "University of Lille")  

Master thesis  
Mathématiques et Informatique Appliquées aux Sciences Humaines et Sociales (MIASHS)  
Web-Analyst course


# A world without cookies
# Is the looming cookie-free world an end to data collection?

Written by Guillaume Sinnaeve  
January 2021


Thesis supervised by Charles Paperman, lecturer at the University of Lille.


## Thanks

I would first like to thank my thesis director, Mr. Charles Paperman, educational manager and lecturer in computer science at the University of Lille, for his availability, his judicious advice and his passion for the code that I share and who have contributed to feed my reflection on the project and the thesis.

I would also like to thank Mrs. Carine Wos, adviser in continuing education at the University of Lille, for her responsiveness in our discussions and her support in my registration for the Master in Mathematics and Computer Science Applied to Human and Social Sciences (MIASHS) Web Analysis by Validation course of Acquired Experience (VAE).

I would like to express my gratitude to the following people, for their help in the realization of this thesis:

Mr Maxence Gama, web analysis project manager at OUI.sncf, for our discussions and debates on the purpose of data collection which contributed to my reflection.

Mr. Guillaume Tollet, Consulting Associate Director and DPO at fifty-five, for his understanding and his clear and precise explanations on the texts of the GDPR and the CNIL.

Mr. François Khoury, Senior Manager and expert on web analysis, mobile and CRM at fifty-five, who shared his knowledge and experiences with me in the field of data collection.

To my contacts within companies who wished to remain anonymous for having answered my questions about the impacts of legislative texts on data collection, as well as on their personal experience. The questionnaires are available in the appendix to this brief.

Ms. Marjorie Braconnier, Tools Senior Manager at fifty-five, and Mr. Clément Somon, Senior Tracking Specialist at fifty-five, for reviewing and correcting my thesis. Their editorial advice was invaluable.

My wife, for her constant support and encouragement


## Summary
- [Thanks](#thanks)
- [Summary](#summary)
- [Introduction](#introduction)
- [Part 1 - The disappearance of cookies](#part-1---the-disappearance-of-cookies)
  - [1.1 The purpose of data collection](#11-the-purpose-of-data-collection)
    - [1.1.1 Measuring your audience](#111-measuring-your-audience)
    - [1.1.2 Optimize conversion](#112-optimize-conversion)
    - [1.1.3 Monetize its content](#113-monetize-its-content)
  - [1.2 The emergence of the cookie](#12-the-emergence-of-the-cookie)
    - [1.2.1 The genesis](#121-the-genesis)
    - [1.2.2 Personal data at risk](#122-personal-data-at-risk)
    - [123-the-growth-of-a-business](#123-the-growth-of-a-business)
  - [1.3 The end of cookies and its consequences](#13-the-end-of-cookies-and-its-consequences)
    - [1.3.1 The GDPR and the ePrivacy directive dictate the rules of the game](#131-the-gdpr-and-the-eprivacy-directive-dictate-the-rules-of-the-game)
    - [1.3.2 Apple and user privacy](#132-apple-and-user-privacy)
    - [1.3.3 Firefox and browser-level consent](#133-firefox-and-browser-level-consent)
    - [1.3.4 Google and the promise of anonymity](#134-google-and-the-promise-of-anonymity)
    - [1.3.5 Brave and the protection of privacy](#135-brave-and-the-protection-of-privacy)
    - [1.3.6 Extensions block advertising](#136-extensions-block-advertising)
  - [1.4 A major challenge for businesses](#14-a-major-challenge-for-businesses)
    - [1.4.1 Diminished customer knowledge](#141-diminished-customer-knowledge)
    - [1.4.2 A legal organization](#142-a-legal-organization)
    - [1.4.3 A technical investment](#143-a-technical-investment)
- [Part 2 - Reconciling compliance with the GDPR and exhaustiveness of user knowledge](#part-2---reconciling-compliance-with-the-gdpr-and-exhaustiveness-of-user-knowledge)
  - [2.1 CNIL exemption](#21-cnil-exemption)
    - [2.1.1 Data collection from the first page](#211-data-collection-from-the-first-page)
    - [2.1.2 A limited purpose](#212-a-limited-purpose)
  - [2.2 Server-side](#22-server-side)
    - [2.2.1 Reduce customer load for better control](#221-reduce-customer-load-for-better-control)
    - [2.2.2 Consent and development time](#222-consent-and-development-time)
  - [2.3 Authenticated navigation](#23-authenticated-navigation)
    - [2.3.1 A personalized relationship](#231-a-personalized-relationship)
    - [2.3.2 Potential brake on user conversion](#232-potential-brake-on-user-conversion)
  - [2.4 Modeling and Machine Learning](#24-modeling-and-machine-learning)
    - [2.4.1 Building data](241-building-data)
    - [2.4.2 Rough estimate](#242-rough-estimate)
  - [2.5 Often necessary consent](#25-often-necessary-consent)
- [Part 3 - Experimentation with data collection without cookies, without JavaScript and compliant with the GDPR](#part-3---experimentation-with-data-collection-without-cookies-without-javascript-and-compliant-with-the-gdpr)
  - [3.1 Legislative prerequisites](#31-legislative-prerequisites)
    - [3.1.1 A strict purpose](#311-a-strict-purpose)
    - [3.1.2 Inform users](#312-inform-users)
  - [3.2 Technical constraints](32-technical-constraints)
    - [3.2.1 Data collection in PHP](#321-data-collection-in-php)
    - [3.2.2 Measuring interactions in CSS](#322-measuring-interactions-in-css)
    - [3.2.3 Visitor identifier as a URL parameter](#323-visitor-identifier-as-a-url-parameter)
  - [3.3 From data collection to visualization](#33-from-data-collection-to-visualization)
    - [3.3.1 Knowing your visitors](#331-knowing-your-visitors)
    - [3.3.2 Behavior on the site](#332-behavior-on-the-site)
    - [3.3.3 Processing and storage](#333-processing-and-storage)
    - [3.3.4 Graphical representation of data](#334-graphical-representation-of-data)
- [Conclusion](#conclusion)
- [Useful Notes](#useful-notes)
- [Appendices](#appendices)
  - [Appendix 1 - Questionnaire - Impact of GDPR on Company A](#appendix-1---questionnaire---impact-of-gdpr-on-company-a)
  - [Appendix 2 - Questionnaire - Impact of GDPR on Company B](#appendix-2---questionnaire---impact-of-gdpr-on-company-b)
  - [Appendix 3 - Questionnaire - Impact of GDPR on Company C](#appendix-3---questionnaire---impact-of-gdpr-on-company-c)
  - [Appendix 4 - Questionnaire - Impact of GDPR on Company D](#appendix-4---questionnaire---impact-of-gdpr-on-company-d)
  - [Appendix 5 - Privacy Policy](#appendix-5---privacy-policy)
  - [Appendix 6 - Data deletion event over 25 months](#appendix-6---data-deletion-event-over-25-months)
  - [Appendix 7 - Data acquisition campaigns](#appendix-7---data-acquisition-campaigns)
  - [Appendix 8 - Database diagram](#appendix-8---database-diagram)
  - [Appendix 9 - Site Analysis Page](#annexe-9---page-danalyse-du-site)
- [Table of illustrations](#table-of-illustrations)
- [Webography](#webography)


## Introduction

“Data is my hobby”. I really like this sentence because, in addition to being funny to say, it expresses my daily life well. Since 2015, data has become my job. Everything around us is data. Our senses are constantly picking up information. A blue sky, the sound of the waves, the grains of sand under our feet. By combining these few words, it is the beach and the sea that come to mind, a summer vacation memory.

Today, data is essential for companies. The data allows them to know their users and their requests, to understand the journeys of visitors on their website and mobile application or the money generated by their services. These companies dream of a world where they could have data on everything and everyone to better understand and anticipate the needs of each.

Is it really reasonable and useful to know everything about everyone you will tell me? No. Imagine how problematic a personal data leak can be for those affected. As was the case with the gay dating app Grindr in April 2018. 

> "The gay dating app has let third-party companies access private data of its users, including their HIV status."  
Source : Le Monde

This is why it is crucial to protect privacy and individual freedoms. In Europe, the General Data Protection Regulation (GDPR) has fundamentally changed data collection since May 2018, by tackling the problem of personal data head-on. Companies must comply with these laws. Otherwise, they risk penalties of up to 20 million euros or 4% of turnover. Carrefour France was checked and condemned by the CNIL in November 2020.

> "GDPR: the CNIL sentences Carrefour to more than 3 million euros in fines"  
Source : La Tribune

In addition to the GDPR, companies must comply with the ePrivacy directive<sup><a href="#1">[1]</a></sup>, otherwise known as the “electronic privacy and communication directive.” It concerns the processing of personal data and the protection of privacy. The ePrivacy directive applies to the electronic communications sector and in particular to websites which must request the user's consent before collecting the data. However, it has not been updated since July 2002 and may create differences in interpretation with the GDPR of 2018.

Each member state of the European Union has an organization which helps professionals to comply with the legislation. In France, the Commission Nationale de l'Informatique et des Libertés (CNIL) is the regulator of personal data. The plenary sessions of the CNIL, of October 17, 2019 and more recently that of September 2020, supported by the Council of State, affirm France's positions on the ePrivacy directive and the request for consent.

> "Pursuant to the ePrivacy directive, Internet users must be informed and give their consent prior to depositing and reading certain tracers, while others are exempt from obtaining this consent."  
Source : CNIL

The main players and companies are reacting and appearing to be heading in the same direction with reservations. However, the entire data collection industry is at risk. The use of cookies has been well under control for several years, and workarounds for browsers and ad blockers have been found over time. But until when? What future is emerging for this well organized industry? Is the World Preparing for the End of Data Collection? The purpose of this brief is to show that we are witnessing a transformation in data collection methods and that the era of cookies as we know it is coming to an end.

In the first part, we will show the important place cookies have taken in our daily lives on the Web. We will understand why current legislative and technological players as well as the awareness of users on the interest in protecting their personal information are making life difficult for cookies, collection solutions and data-driven companies.

Then, we will study various existing solutions that make it possible to grant respect and compliance with the GDPR with the most complete knowledge possible about the users. Understanding how the advantages and disadvantages of each solution presented allow companies to make a choice on which one would be best suited to their environment. We will conclude by showing that the perfect solution does not exist today.

Finally, we will experiment with setting up server-side data collection, without cookies, without JavaScript and compliant with the RGPD and the CNIL on the website www.guillaume-sinnaeve.com. We will discuss the technical choices put in place to comply with the rules set out above, the mechanics used to measure the information on the pages and interactions of visitors and the graphic visualization of the data collected.


## Part 1 - The disappearance of cookies

In the field of data collection on the web, whether for statistical or advertising purposes, cookies are everywhere. An entire business model relies on cookies and the information they contain. But faced with current legislative and technological players, the end of cookies seems inevitable and will not be without repercussions for data-driven companies.


### 1.1 The purpose of data collection

Collecting user data on a website is necessary for the business. However, not all users who are subject to such monitoring are able to understand its objectives. Thus, the implementation of a user consent management tool requires defining the objective of collecting data and each tracking technology. This is what the market calls the definition of "purposes". If a company does not know how to answer the question “why are we collecting this information?” then it is irrelevant to collect it.

Cookies and other tracers are gathered around large families with specific purposes. These answer the question of the usefulness of the families of cookies for which the consent request is made to the user. This classification of cookies by purpose is standardized, but changes can still be made and adapted for each company. The CNIL indicates that the purpose must be "determined, legitimate and explicit" and that it "makes it possible to determine the relevance of the personal data that you collect". It is therefore a request for the legislation to establish this list of purposes.

![Iterative scheme of data collection](https://guillaume-sinnaeve.com/img/memoire/1.1_collect-en.png "Iterative scheme of data collection")  
*Iterative scheme of data collection* 


#### 1.1.1 Measuring your audience

There are many audience measurement tools on the market today (Google Analytics, AT Internet, Adobe Analytics, Content Square, Session Cam, etc.) and when a user browses the Web, multitudes of information circulate between it and the website. We can group them under 3 main categories: data relating to users, sources of traffic and internet user behavior. By bringing together all this information in audience measurement solutions and through the analysis of statistics obtained, knowledge of customers and prospects increases considerably.

If the website offers an account creation module via an email or a social account such as Facebook, the user can directly provide personal data such as first name, last name, email, etc. This information is recorded in customer relationship management tools (in English Customer Relationship Management or CRM). Most analysis tools do not allow Personally Identifiable Information (PII) in the clear. However, it is possible to cross-reference them using reconciliation keys (email encoding for example). The user can provide other information using their machine and browser. This can be demographic (age and gender) with third-party cookies, geographic (region and language) with the IP address or technological with fingerprinting (browser, operating system, device category). Knowing this information helps optimize site performance to be sure it works with the user's configuration.

Traffic sources are the means used by a user to come to a website. Thanks to campaign parameters in the URL of the landing page and / or of the page preceding arrival on the site (also called “referrer”), it is possible to define, once the data has been collected and processed, attribution channels (Direct, Organic, Social, Email and Referral). These data are particularly interesting because they give a vision of the notoriety of the brand, carried by the website, on the Web. They also allow investment decisions to be made on advertising platforms such as SEA (Search Engine Advertising) or social.
 
Behavioral data measures the engagement generated by a user with a website. They relate, for example, to the pages visited and their loading time, to keyword research and interactions (clicks, scrolls, form completion, etc.). Thanks to this data, it is possible to identify the content that most appeals to users but also to monitor the site's performance (number of 404 pages encountered, non-functional buttons, etc.). For an e-commerce site, information relating to purchase intentions and transactions can also be included in this category, for example the view of a list of products or promotions, the display of a product page, adding to cart, browsing the checkout tunnel and viewing the confirmation page


#### 1.1.2 Optimize conversion

Once the site's audience is known, it becomes necessary to optimize the performance indicators (bounce rate, journey, form, etc.) to provide content more suited to visitors and optimize the conversion rate. For an e-commerce site, this may mean increasing its number of transactions and its turnover. A/B tests and customization contribute to this optimization and in this field, the tools are numerous (Google Optimize, Kameleoon, AB Tasty, Optimizely, etc.).

The A/B tests and the MV tests (Multiple Variants) will mainly use the acquired behavioral data. The first tools offered to compare versions of pages with a single modified element. Very quickly, they evolved and made it possible to modify several elements at the same time. By testing one or more variations of a page (change of color of a button, of a title, of the position of the blocks, etc.) with an audience segment over a defined period and, by collecting the results of the experiment, it is possible to know the most efficient configuration of the site. The implementation of this type of tool has many advantages. Business teams can, in particular, directly manage their tests in the tool without requiring code changes from developers. Once a variation is determined to be a winner, it can be incorporated into the site for all users.

Personalization takes advantage of user data. By knowing their purchasing preferences, their budget for transactions, their age group, their gender, etc., it is possible to offer suitable content highlighted on the site (for example, via a banner on the page of home displaying a product related to what the user frequently buys). The advantage is to quickly guide the Internet user towards the conversion goal. The less time he spends researching what he came to the site for, the faster he will be satisfied, the more positive the image of this brand will give him and the more likely he will be to come back next time.


#### 1.1.3 Monetize its content

By knowing your users well, it is possible to offer them personalized advertising that appears on several websites they visit, using data from traffic sources. These attribution channels are rich in information. They make it possible to measure brand awareness and increase it through an investment of time and sometimes money. Advertising solutions are abundant and include Google Campaign Manager, Google Ads, Facebook Business Manager but also Amazon Sizmek for example.
 
A significant percentage of direct traffic, associated with users accessing a website by entering the url directly in the address bar or via a tab in the favorites bar, is a good indicator of awareness. The associated website is recognized. However, advertising makes it possible to re-engage existing customers and convert potential prospects into new customers. It is present in different formats and is followed, in the case of social networks, by a community through frequent posts.
 
The presence of a brand on partner sites, as part of the affiliation, increases the confidence of Internet users. This paid solution uses the partner as a prescriber and targets its customers as prospects for the brand. For example, an e-commerce site offering t-shirts displaying advertising inserts for a sports club.


### 1.2 The emergence of the cookie

Whether it is to know its audience, optimize conversion or monetize its content, the exchange of marketing data is mainly based on cookies to follow the user and his journey on several sites over longer or shorter periods. In order to get as much profit as possible from it, advertising players have exploited an existing loophole in the implementation of cookies to build their business model.


#### 1.2.1 The genesis

In 1994, the server division of the Netscape<sup><a href="#2">[2]</a></sup> company was facing a problem. She wanted to transmit a user's browsing information, on a website, from page to page. The use of URL parameters was considered but complex, especially in the context of shopping cart information for an e-commerce site. Netscape developers then created cookies to meet this need.

The CNIL defines a cookie as "a small file stored by a server in the terminal (computer, telephone, etc.) of a user and associated with a web domain"
<sup><a href="#3">[3]</a></sup>. Cookies are used for many reasons. They are used in particular to record information relating to a user and his journey (connection identifier, language preferences, consent or refusal to request data collection, etc.). Take the example of a user who visits an e-commerce site for the first time without purchasing and who returns the next day to complete his order.

![Deposit of cookies for a visitor to an e-commerce site](https://guillaume-sinnaeve.com/img/memoire/1.2.1_cookie-server-en.png "Deposit of cookies for a visitor to an e-commerce site")  
*Deposit of cookies for a visitor to an e-commerce site*

The cookie format was hastily developed by Netscape. The security level was low and the cookies accessible by other servers. A choice that will have serious consequences on the privacy of users.


#### 1.2.2 Personal data at risk

A website has the possibility of integrating, in its code, images, style sheets, iframes (HTML pages nested in the current page) or scripts for example. These resources can belong to it or be called from another domain. And this is where the problem with cookies was pointed out. A website that sets first cookies (associated with the domain names of the current page as opposed to third or third-party cookies associated with a different domain) and which calls on third-party resources offers the possibility for third-party servers to read and write first and third party cookies. Therefore, a user's personal data stored on their device via a cookie and linked to one site may be shared with other sites that they visit if they call the same resources.

The complete identity card of a user can then be established, without even knowing it. If an individual browses shoe sales site A, running events site B and sportswear sales site C, and these 3 sites call the same resource, the third-party server can determine that the user is an athlete practicing runner for example. This is how banner ads work. Below is an example of a user visiting Site A and Site B both calling the same third party banner ad X.

![Deposit of third-party cookies following the sight of an advertising banner](https://guillaume-sinnaeve.com/img/memoire/1.2.2_cookie-third-en.png "Deposit of third-party cookies following the sight of an advertising banner")  
*Deposit of third-party cookies following the sight of an advertising banner*

When cookies became widespread, the general public was not informed about the implementation of cookies, their content and the risk of invasion of their privacy. The first banner ad appeared on the hotwired.com site in 1994, the same year the cookies were set. It was designed for AT&T, a company specializing in American mobile telephony. This banner remained online for 3 months on the site and generated a click rate of 44%. This makes the American magazine Wired the forerunner of online advertising as we know it today.


#### 1.2.3 The growth of a business

The following year, the Yahoo search engine incorporated spaces dedicated to advertising on its pages. The banner format introduced by hotwired.com had become a standard and was taken up by many players such as IAB (Interactive Advertising Bureau) and W3C (World Wide Web Consortium). In 1996, the banners became interactive. Hewlett Packard offered to play Atari Pong directly on its commercial. In 1999, the affiliation made its appearance. The websites then integrated the promotional banners of their partners on their own pages. Advertising videos, with Quicktime and Windows Media Player, appeared that same year. In 2000, Google launched SEA campaigns with AdWords.

Since the 2000s, the Internet advertising economy has grown exponentially and offers many advantages that traditional advertising (TV, radio, press) does not have. The format is evolving (pop-up or secondary window, Flash video, Youtube video, Facebook ad, mini-sites), the content is better targeted, the cost is lower and the return on investment (ROI) greater. Advertisers want to integrate advertising more and more with the editorial and graphic content of their sites. An entire business model relies on cookies and the players have understood this very well. So much so that in 2017, investors put more of their money in digital than in television.

![Internet advertising revenue evolution](https://guillaume-sinnaeve.com/img/memoire/1.2.3_advertising-revenue.png "Quarterly Growth Trends in Internet Advertising Revenue 1996-2019 Source: IAB / PwC Internet Ad Revenue Report, FY 2019")  
*Quarterly Growth Trends in Internet Advertising Revenue 1996-2019 Source: IAB / PwC Internet Ad Revenue Report, FY 2019*

Today, advertising is ubiquitous in our web browsing. On Youtube, the videos we watch are cut by advertising. Some YouTubers also promote products directly in their video, which "forces" the user to see it. Our personal data is stored in cookies, shared between several sites and sometimes exchanged for money at certain companies without our even knowing it or having consented to this data collection. This data is also used or could be used to further personalize the advertising content. This is why the GDPR has decided to call the end of recess by publishing its legal texts.


### 1.3 The end of cookies and its consequences

Currently, when companies want to collect data on their website, they are faced with 3 major movements.  
The first is legislative and covers regulatory restrictions imposed by the GDPR and the ePrivacy Directive. Compliance with the law becomes the priority for companies.  
The second is related to browsers that can prevent tracking and block cookie-related behavior, such as ITP (Intelligent Tracking Prevention) on Safari, ETP (Enhanced Tracking Protection) on Mozilla Firefox, Google's Privacy Sandbox project and the Brave browser which blocks the plotters by default.  
The third is related to “ad blocker” extensions, such as AdBlock, which prevent banner ads from showing and setting cookies. These 3 movements are making life difficult for cookies and tracers and forcing companies to rethink the way they collect data.


#### 1.3.1 The GDPR and the ePrivacy directive dictate the rules of the game

The GDPR is the reference regulation on the protection of personal data. It has been applicable in the member states of the European Union since May 23, 2018. Its main objective is to strengthen the protection of personal data. The GDPR offers a harmonized legal framework for companies that collect and process this data. This regulation empowers companies and allows Internet users to control the use of their data.

The ePrivacy Directive complements the GDPR and requires publishers of websites and mobile apps to ask user consent before storing or accessing information on their devices. This rule applies to all cookies and trackers that are not strictly necessary for the proper functioning of the service offered. Article 4 (11) of the GDPR indicates that consent must be "free, specific, informed and unequivocal". The user must be able to accept as easily as refuse the collection of their data.
 
Today, not all websites and Consent Management Platforms (CMPs) are GDPR compliant. There is no harmonization at European level and the various recommendations of local bodies can give rise to different interpretations and levels of understanding. Following the new recommendations of September 2020 proposed by the CNIL, in charge of the implementation of the GDPR and the ePrivacy directive in France, companies have until March 31, 2021 to comply or face penalties. And the potential refusal of users to request consent greatly impacts companies and their partners. A refusal results in a loss of data on visitors and their journey for analytics and advertising solutions, which distorts the actual count in the interface. Reconciliation of journeys between multiple devices seems inconceivable if the user refuses to share their data on the website and application of the same brand.
 
While compliance and the March 2021 deadline are on the minds of businesses, browsers that are stepping up their hunt for cookies as well as ad-blocking extensions have a significant impact on data collection via cookies.
 

#### 1.3.2 Apple and user privacy

Between the end of 2016 and 2017, several companies encountered security breaches on their applications and websites leading to personal data leaks. There was notably Instagram, with 6 million accounts affected, and Uber, with 57 million accounts hacked. But the most important fault lies with the company Equifax, specializing in consumer credit rating for businesses and individuals, with 143 million customers affected. Following these numerous incidents and faced with the growing concern and lack of confidence of users in the processing of their personal data on the internet, Apple decided to react and protect Safari users by deploying a program called ITP (Intelligent Tracking Prevention).

The first version called ITP 1.0 uses machine learning to list and categorize the domains that set cookies in order to identify those that do so for advertising use and not for standard use. ITP 1.0, faced with this problem, has chosen to set a maximum lifetime for third-party cookies and to delete them automatically if the user has not interacted with them for more than 30 days. With this first version of ITP, Apple declares war on its competitors (Google, Facebook, Criteo, etc.) and on companies that collect data for advertising purposes.

> “Apple only had to restrict the presence of cookies on its Safari browser for Criteo to plunge into the stock market in December.”  
Source : Les Echos

After deploying several versions of ITP and as many workaround methods imagined by developers, such as the use of JavaScript cookies and Localstorage to store information on the browser, Apple released version 2.3 in September 2019 included from Safari on iOS 13 and Mac OS. It embeds changes from previous versions and adds new ones that make data collection tough. One of the hardest hit is the luxury goods sector, with heavy traffic on iOS.

In this latest drastic version of ITP, third-party cookies have a lifespan of 24 hours, first cookies created in JavaScript expire after 7 days, tracking parameters in URLs (gclid, fbclid, etc.) are limited at 24h and the Localstorage is emptied after 7 days. All of these constraints have a definite impact on statistical and advertising data by preventing the correct tracking of a user's journey over several days. Indeed, analysis solutions, such as Google Analytics, place a first cookie while media solutions, such as DoubleClick, place a third-party cookie to assign a user ID. It becomes impossible to attribute conversions to the right sources of traffic and to properly remunerate affiliates.

![ITP impacts cookies](https://guillaume-sinnaeve.com/img/memoire/1.3.2_itp-en.png "ITP's impact on first and third party cookies for analytics and media")  
*ITP's impact on first and third party cookies for analytics and media*

Therefore, advertisers and advertising professionals must find alternatives if they wish to continue collecting data on Safari. But Apple is not alone in wanting to protect its users. Google and Mozilla also have their own solutions for their browsers.


#### 1.3.3 Firefox and browser-level consent

In October 2018, in version 63 of the Firefox browser, Mozilla implemented the feature called ETP (Enhanced Tracking Protection). Its objective is to protect the privacy of users while browsing by blocking a list of trackers and cookies linked to domains known for tracking, advertising and social networks. After several updates, Firefox is releasing ETP 2.0 in July 2020 which brings 3-level control for the user (Standard, Strict and Custom) and strict restrictions for trackers, as shown in the image below.

![Control panel for the different levels of protection offered by Firefox](https://guillaume-sinnaeve.com/img/memoire/1.3.3_etp-en.png "Control panel for the different levels of protection offered by Firefox")  
*Control panel for the different levels of protection offered by Firefox*

ETP's Standard level, which is enabled by default, blocks trackers and cookies known to Firefox. The website continues to function normally. On the other hand, with the Strict level, the protection is reinforced and some sites may not function correctly. In this configuration, requests to Google Analytics and Facebook for example are not transmitted to their servers. In addition, ETP 2.0 deletes data and tracking cookies from known domains after 24 hours. This prevents these solutions from tracking Internet users in a fine way and establishing a user profile without connection or customer ID.


#### 1.3.4 Google and the promise of anonymity

Google incorporated in November 2012, from version 23 of its Google Chrome browser, a feature called Do Not Track (DNT). The latter allows you to send a request to prohibit the collection of data and user tracking. This option is not activated by default and is unknown to Internet users. Additionally, websites have no legal obligation to accommodate this request. However, some websites take into account the activation of DNT and respect the user's choice. In this case, the third-party solutions are not triggered and the cookies are not deposited. However, the user has no guarantee that their data will not be collected and used on multiple websites.

![Popup respect DNT on URSSAF](https://guillaume-sinnaeve.com/img/memoire/1.3.3_dnt-2.png "Display on the site www.urssaf.fr of a pop-up respecting the DNT option activated on the Google Chrome browser")  
*Display on the site www.urssaf.fr of a pop-up respecting the DNT option activated on the Google Chrome browser*

Faced with the under exploitation of Do Not Track and the functionalities deployed by its competitors Apple and Mozilla to strengthen the data protection of their users, Google reacted and announced in January 2020 its project entitled Privacy Sandbox. Google's goal over the next two years is to continue measuring ad performance while being less intrusive to the user.

Thanks to an API system, third-party advertising cookies will be removed, which is in line with the recommendations made by the CNIL. In addition, the code will be offered in open source. It could therefore be adopted by other browsers such as Firefox and Safari in order to standardize data collection methods and prevent players from developing different solutions for each browser.

Regarding the respect of the anonymity of the user, the route information will be stored at the browser level. Third-party domains will have access to restricted data selected by Google's Privacy Sandbox. This “black box” system will also require third-party solutions to update their code in order to be able to communicate with the APIs offered.


#### 1.3.5 Brave and the protection of privacy

Brendan Eich, creator of JavaScript and co-founder of Mozilla, launched the open source web browser Brave in 2016. His focus with Brave is security, speed, and privacy. The browser blocks trackers, third-party cookies and advertisements that are detected as data collection solutions. This allows the user to protect their privacy but also to improve the performance of their browsing, the speed of loading pages and extend the life of the batteries of their devices (laptop, telephone, etc.).

![Ads and ads blocked on Brave](https://guillaume-sinnaeve.com/img/memoire/1.3.5_brave-performance.png "Display of the number of ads and ads blocked on the Brave browser on a smartphone after 2 years of activity")  
*Display of the number of ads and ads blocked on the Brave browser on a smartphone after 2 years of activity*

Brave stands out above all thanks to its economic model. By default, the browser hides targeted advertisements. Instead, it randomly provides notifications to ask the user if they are willing to view non targeted advertisements from Brave partners. If he agrees to watch, the browser rewards him with cryptocurrency called BAT (Basic Attention Token) which is divided into tokens. The user can then make donations to publishers of content they value the most. This system can be a real advantage for sites like Wikipedia which very often make calls for donations. On the other hand, third-party cookies and advertising are highly impacted.


#### 1.3.6 Extensions block advertising

Adblockers are software and extensions that allow a user to block advertisements from appearing on websites while browsing. By inspecting the source code of the page, they are able to detect the presence of scripts belonging to known advertisers and block them before loading. For a user, there is a real benefit to browsing without advertising: the page loading speed increases, the bandwidth is saved and the site viewing is more comfortable.

In contrast, the impact for advertising solutions seems obvious. If the content is not loaded, the impression and click data will not be collected and the ad network may not be paid. To counter this problem, some sites display a pop-up asking you to deactivate the adblocker to access free content and display advertising.

![Popin adblocker on Les Echos](https://guillaume-sinnaeve.com/img/memoire/1.3.6_popin-adblocker.png "Display of a pop-up requesting the deactivation of adblockers on the site www.lesechos.fr")  
*Display of a pop-up requesting the deactivation of adblockers on the site www.lesechos.fr*

But one of the adblockers that affects the cookie world the most is uBlock Origin. Indeed, the latter not only blocks ads, it prevents a multitude of scripts from executing correctly. The Google Analytics solution for statistics, using the domain www.google-analytics.com, cannot operate correctly. And more generally, the Google Tag Manager TMS<sup><a href="#4">[4]</a></sup>, associated with the domain www.googletagmanager.com, is also blocked by the solution. This implies that all scripts and tags included in the TMS container are not triggered.


### 1.4 A major challenge for businesses

In addition to the problems of data acquisition and use linked to the limitations encountered by the various cookies, there is a real consequence for companies whose strategy is driven by data. To find out the impact on the daily life of these companies, I created a questionnaire consisting of twenty questions. Four web analysts, responsible for the data collected on their company's websites and mobile applications, agreed to answer me and share their experiences with the GDPR and the CNIL directives. The complete and anonymized questionnaires are available in the appendix to this brief. Three main issues were identified thanks to the responses: the loss of customer information to be limited, the reorganization of teams to keep up with constant legislative changes and the cost of technical implementation incurred.


#### 1.4.1 Diminished customer knowledge

One of the first impacts felt by companies is a loss of data to be collected due to the refusal of users in the face of the cookie consent request banner. On the one hand on the analytical part, where it is not possible to track the visitor's behavior on the site, and on the other hand on the media. A user coming from a media campaign and refusing the collection will not be assigned the correct conversion channel. This makes it difficult for companies to know exactly which acquisition channel is performing best and to adjust their media investments accordingly. The creation and real meaning of audiences in media management interfaces are therefore less precise. Companies must therefore update their collection tools. Unfortunately, very few solutions today are able to provide a tool that meets all expectations.

The various players (analytics, media, personalization, etc.) have not all succeeded in anticipating changes in the CNIL recommendations of September 2020. On the analytical part, some solutions have been able to react by offering anonymous data collection. AT Internet had already presented before this date its hybrid measure exempt from consent and validated by the CNIL. On the Google side, a beta feature called Consent mode has been released and allows you to adjust the behavior of Google Analytics, Ads and Floodlight tags according to the user's consent. If it refuses one of the purposes, Google will send the data anonymously to the solutions, in compliance with the GDPR directives.

Conversely, media editors have not anticipated the new recommendations, nor made the changes necessary to bring their tools into compliance. In this evolving context, solutions are already very busy understanding the ins and outs of frequent updates to browsers like Safari with ITP or what Google envisions with Privacy Sandbox. Media solutions must find an implementation method that ticks as many legislative and technical boxes as possible to collect data in compliance.


#### 1.4.2 A legal organization

In order to monitor GDPR compliance, companies had to set up a dedicated legal structure. It is mainly composed of a Data Protection Officer (DPO) but different people from the marketing and digital departments can complete the workforce. If his profiles do not exist in the company, there may be a potential cost of recruiting in addition to the investment time to read and understand the legal texts. This legal group can meet on a regular basis to monitor and guarantee the correct application of the main directives with the teams concerned.

Internally, the legal structure monitors the recommendations issued by the CNIL and the Data Protection Authority (DPA) of other countries on the GDPR. The webinars and various communications broadcast by the various market players complete the knowledge of companies on the subject. The DPO and digital experts centralize information on best practices and create guidelines that they distribute to the teams concerned. In addition, there is a real job of advertising and training with the various analytical and media profiles to explain the drop in traffic, sessions and users in the tools. The analysis will only be done on a volume of visits for which Internet users have given their consent. Unless the DPO and his team decide to set up an exempt anonymous measure and in this case, it will be necessary to explain that data reconciliation will no longer be possible.


#### 1.4.3 A technical investment

Although the CNIL updated its recommendations in September 2020, companies have anticipated the implementation of these new rules for the collection of consent on cookies. Most of them therefore already had a banner or a consent collection pop-up. However, the new recommendations are game-changing and involve modifying your CMP.

Setting up a consent banner has a development cost to take into account and must be followed by a schedule. Companies are required to set up A/B tests on the format and position of the banner and buttons, the content and even the colors. At the end of the tests, it is possible to know which version has the best performance with the highest acceptance rate. A cost of support by consulting firms must be considered to help implement the CMP and establish the A/B tests. There are many reasons for businesses but almost mandatory to be GDPR compliant.

Various tools will continue to evolve and others will emerge as a result of the current implementations on company sites and applications. An additional development cost could therefore be added to the costs already mentioned. Companies are also wondering about solutions to try to recover data not consented to via logs or to estimate what they should have had via modeling. Other technical solutions are also being considered to recover a level of data similar to the GDPR.

Since 1994 and the appearance of the first cookie, the digital economy has evolved a lot. Cookies are at the heart of many solutions, including advertising. Following an intense collection of personal data from Internet users by the solutions, the GDPR and browsers are committed to strengthening user protection. Companies and publishers must therefore cope with legislative and technical obligations while managing to collect data relevant to their sector.

In the second part, we will study the advantages and disadvantages of four different solutions: CNIL exemption, server-side, authenticated navigation and modeling for machine learning. We will try to identify how they can allow GDPR compliance while maintaining a quality of service equivalent to the period preceding its implementation.


## Part 2 - Reconciling compliance with the GDPR and exhaustiveness of user knowledge

The world without cookies that is being prepared is having an impact on both solution players and the companies that collect the data. The position of the ICO (Information Commissioner's Office), which is the British counterpart of the CNIL, is controversial because it requires explicit consent for the deposit of cookies for purely statistical purposes<sup><a href="#5">[5]</a></sup> while the CNIL proposes an exemption from consent for this. finality under certain conditions. The CNIL in its recommendations also requests consent for A/B tests and personalization. And, in the event that the user refuses all cookies, it becomes unmeasured, that is to say completely non-existent in the tracking tools.

So the question arises: what solution would reconcile quality of service and compliance with the GDPR? The texts of the GDPR are often updated and subject to interpretation by European site editors: cookie lifespan according to the user's response to the consent banner (acceptance could be kept longer and therefore the banner redisplayed more quickly in the context of a refusal). Without precise measurement of the efficiency of the routes, of the functionalities, without A/B testing or customization, the quality of service of European websites cannot remain at the level. Publishers of non-European sites may then be at an advantage because they will be able to learn from their data from users outside Europe without a hitch in order to build and optimize interfaces efficiently.

The various players and companies will therefore be forced to react and initiate a reflection on the possible means to continue to improve their user knowledge. In this part, we will study the advantages and disadvantages of the solutions available to obtain maximum data while respecting GDPR compliance.


### 2.1 CNIL exemption

The GDPR and the ePrivacy directive require the user's consent to be obtained before being able to place cookies on their terminal. Nevertheless, the CNIL indicates in its recommendations<sup><a href="#6">[6]</a></sup> that certain audience measurement tracers, used to obtain information on the performance, traffic and content viewed on a website, may benefit from an exemption from consent under certain conditions. The recommendations of the CNIL apply only for France. A multi-country site publisher must therefore check with the dedicated organizations in each country in which it is present to check whether it can also exempt the audience measurement in the country in question.


#### 2.1.1 Data collection from the first page

Thanks to this exemption, audience measurement tools that benefit from it can set a cookie from the first page seen when the user is browsing. This first page view is crucial because it allows you to retrieve bounce rates and traffic sources to measure campaign performance. As this data collection cannot be deactivated by the user, it gives the advantage of being able to follow their entire journey on the website.

The consent banner can then be optional if only the exempted measurement solution is implemented. The site editor must nevertheless inform Internet users of the implementation of this tracer via its confidentiality policy. Transparency and respect for anonymity help build brand identity and user confidence.


#### 2.1.2 A limited purpose

The CNIL is clear on how the implemented tool must be used to benefit from the exemption by saying that it must "have a purpose strictly limited to the sole measurement of the site's audience"<sup><a href="#5">[5]</a></sup>. Therefore, any other solution that does not comply with this rule cannot benefit from the CNIL exemption and must be subject to the acceptance of consent by the Internet user to transmit information. It is impossible, for example, to use the data collected as part of audience measurement to define user groups according to specific criteria (segmentation), retargeting or personalization. It should be used for anonymous statistical purposes only and be sealed against any cross-referencing with other data sources. The company's customer knowledge therefore becomes less precise.

Another condition to be met in order to benefit from the exemption proposed by the CNIL is that the audience tool must not "allow the overall monitoring of the browsing of the person using different applications or browsing different websites"<sup><a href="#7">[7]</a></sup>. Thus, it will no longer be possible to make analyzes between different domains. If a site editor offers an inter-domain route to its Internet users, for example www.monsite.fr to www.monsite.es in the context of a change of language or www.monsite.fr to moncompte.monsite.fr to display the profile, it will not be able to reconcile the data of the different domains between them. Developers will have a potential cost and will have to rethink the architecture of the site if they wish to obtain the CNIL exemption and follow this type of route (www.monsite.com/fr to www.monsite.com/es or www.monsite.com/my-account).


### 2.2 Server-side

Typically, implementations of scripts to collect and transmit data to third-party tools are done on the client-side. They can be embedded in a TMS or be implemented directly in the source code of the site. The generated queries will be visible on the user's browser via the Network tab of the development tool. Conversely, implementing server-side logic will move all that work to a remote server. This technique offers many advantages in terms of site performance and allows you to avoid the tracking restrictions imposed by certain browsers. However, this method still requires a request for user consent for data collection.


#### 2.2.1 Reduce customer load for better control

By deporting the loading of server-side scripts, pages contain fewer lines of code to read and fewer scripts to trigger. As a result, the performance of the site increases, the chances of an error in the script causing the site to bug or crash are reduced. Browsers that block tracking systems like ITP and ETP, as well as ad blockers, are unable to prevent requests from being sent from the server to third-party solutions.

A case often encountered by the teams concerned during client-side implementations, especially on an e-commerce site, is the discrepancy in the number of transactions, and therefore in revenue, between the analysis tool and the back office. This is due to the time required to load the analysis solution script. If the user leaves the site before the script loads, the data is not sent. The back office is more reliable and more accurate, forcing the analyst to juggle the two tools. Thanks to server-side tracking, the analytical solution is triggered on the server side once payment confirmation has been received and is independent of the user closing the page on the site. The number of conversions is therefore equal to that reported by the back office.

The data transmitted by the developers to the server and sent to the various solutions is under control with this method. Scripts called by piggybacking (calls to tags nested within other tags without the knowledge of the site that implements them and sometimes sent without consent) and data leakage (data leakage to unwanted third parties) cannot retrieve the information. of the website because executed on the server side. There is also a homogenization of information. It is possible to retrieve the IP address calculated by the server to transmit it to each solution.


#### 2.2.2 Consent and development time

Server-side tracking does not imply exemption from the law. It is imperative to obtain the user's consent before triggering the request to be sent to various solutions. Website developers need to retrieve the information from the CMP and pass it in the request to the server. It will thus be possible to condition the scripts according to the choice of the Internet user.

The use of the measurement protocol, which allows developers to make HTTP requests to send raw user interaction data directly to the solution's servers, is the most widely used method for server-side tracking. Unfortunately, it is not supported by all solutions. The choice of a server-side implementation therefore depends on the destination tools chosen.

An additional effort is required from developers with server-side tracking because all the information calculated and transmitted naturally by the JavaScript libraries is no longer. The session identifier, user-agent, geolocation, campaign parameters or even the timestamp to analyze the user and his journey from several points of view are always necessary. The measurement and data collection plan to be provided to developers must be more detailed to take its elements into account.


### 2.3 Authenticated navigation

Many internet sites offer their visitors to create a user account. Whether it is to order products on a commercial site, subscribe to an online press service or, even, to a social network. Some platforms also require you to be a member to access the content they offer, such as private sales players (Voyage Privé, Veepee, Showroomprive, etc.). It is not possible to know their offers without logging in. Subsequently, users benefit from the features linked to their profile, their shopping cart and their orders in exchange for their personal information. For example, an email address to be notified of the opening of a sale at Veepee. The website can then personalize the relationship with its customer. However, it should not cross-reference this information with other analytical solutions and media without the user's consent.


#### 2.3.1 A personalized relationship

By offering an account creation, the website retrieves a lot of personal information about its users (last name, first name, age, email address, etc.) and the earlier the request to create an account arrives in the user's journey, the faster the site makes sure to recover its data. The site editor then becomes the owner of this data. He can use them as he pleases. Thus, for example, if the website offers an e-commerce journey, the order information could be used to target users on the contact channel where the customer is most responsive and to offer him products or promotions related to his purchase and preferences. This can take several forms: emailings with the user's email, text messages using their mobile phone number, mailing campaigns to the delivery address or even push notifications to phones in the case of applications. As such, it is easy to see that the stability of the identifier to follow a user in the relationship is important.

When CRM data is reconciled with audience measurement data using the account identifier, user knowledge is greatly enriched. It is possible to understand in detail his course and to personalize it according to his profile. In its analytical tool, Google offers a feature called “Google Signals”. It allows data from the website and the mobile application to be crossed if the user has logged in on both devices with the same account in order to offer them personalized advertising.

If we take into account the complexity, after all relative, required to memorize an additional password on the user side, the customer account then appears as a secure space to centralize his identity and data. He can find his information, his order history, the products he prefers but also the advantages he accumulates with a loyalty card. Its navigation becomes personalized. It reflects his tastes and allows him to save precious time. A special relationship is therefore established between the user and the platform, as when we enter a store and the seller calls us by our first name.


#### 2.3.2 Potential brake on user conversion

There is no real downside to a business offering an account creation to its visitors if it is relevant. The registration request must be submitted at the right time in exchange for a promise of added value (a discount on the next purchase, find orders, etc.). Otherwise, there is a potential risk of scaring the user away. Moreover, some sites such as portfolios have neither the interest nor the usefulness to set up an account creation module. The company has some responsibility for the data collected. In addition to not collecting data that is not consistent with the function of the site, it must also allow the user to be able to delete all the information obtained about him in the simplest possible way but also be able to to prove that there is no trace of him left. Regarding the reconciliation of CRM data with other solutions, it is only possible if the user's consent is obtained.

The user experience with creating an account must be mastered by the company. A form that asks for a lot of information can make prospects reluctant. Moreover, only strictly necessary information can be requested initially. E-commerce sites have also seen the appearance of shopping tunnels in guest mode, not requiring the user to register and still allowing them to place an order. Forcing the account to be created leads to cart abandonment and a loss of prospects who might no longer want to visit the site.


### 2.4 Modeling and Machine Learning

If a user refuses data collection, via the banner or the consent request pop-up, he cannot be tracked. As a result, several performance indicators, such as the number of users and sessions, are then impacted because the information is not available in the analysis tools.

However, thanks to machine learning and data from consenting users, it is possible to simulate the behavior of unmeasured users. And with the resulting modeling, establish the structure of the information obtained to estimate indicators in a scenario where all users have accepted measurement cookies.


#### 2.4.1 Building data

This method makes it possible to obtain estimates related to key performance indicators for dedicated teams while being GDPR compliant. The machine learns and models from navigation data provided by users who have accepted measurement cookies. They can then be used to render the results in a graphical interface. Data-driven companies can thus continue to make decisions while respecting the choices of their users.

If the website has data collected before the implementation of the consent request, it therefore covers the completeness of users. They can then serve as a baseline for machine learning and modeling and be compared with the result obtained by the estimate.


#### 2.4.2 Rough estimate

This solution, however, remains a rough estimate of the number of users, sessions and interactions. Although some CMP solutions can obtain statistics on the use of their consent tool and in particular the number of refusals, there is no assurance regarding the reliability of the volume of users who have not accepted. It is necessary to have a sufficient volume of data to use machine learning. Otherwise, the results could be completely skewed.

Preparation time, machine capacity and data reprocessing are crucial information in the cost of implementation. Each significant change to the website, modifying user behavior, involves a new training or a new iteration for the machine. It can therefore be complex to establish and maintain this method.


### 2.5 Often necessary consent

The solutions we have just discussed each have their own set of advantages and disadvantages. They make it possible either to measure the audience of a website anonymously and without consent, or to obtain users' personal information after acceptance of an ePrivacy banner. Today, there is no complete solution allowing increased knowledge of its users in full GDPR compliance. It is up to companies to choose the one that best suits their situation based on different criteria (technical feasibility, cost of integration, internal skills, etc.).

As part of an anonymous hearing measure, it is possible to obtain an exemption from the CNIL. But if the website wishes to measure an identified audience and has implemented other tools, then the user's consent becomes essential to reconcile the data. Therefore, companies invest time in A / B testing of banners to increase their chances of achieving full acceptance for the various stated purposes.

The answer to the question of reconciling compliance with the GDPR and maintaining the quality of service offered is not necessarily the application of a single solution. It may be the combination of the solutions mentioned and other innovative solutions that will emerge later. All these solutions do not necessarily exclude the request for consent for the collection of user data. To better understand the issues related to the implementation of these solutions, we will experiment in the following section with server-side data collection that is compliant with the GDPR.


## Part 3 - Experimentation with data collection without cookies, without JavaScript and compliant with the GDPR

With cookies dying, companies are researching and testing data collection solutions that allow them to reconcile GDPR compliance with in-depth knowledge of their users. Previously, we discussed several solutions by highlighting their respective advantages and disadvantages. We will therefore now try the following experiment: the implementation of an audience measurement tool without cookies and compliant with the GDPR. In a desire for efficiency and in order to limit as much as possible the impact on the performance of Internet browsers, the solution we will offer will be without JavaScript and requests will be processed on the server side.

To implement this experience, I created a non-commercial website, layout my curriculum vitae, and accessible at the following address: www.guillaume-sinnaeve.com. The goal of this project is to understand the method used to collect data and analyze the information collected on visitors. In this part, we will first discuss the legislative obligations to be respected in order to collect user data under the CNIL exemption. Then we will see the technical solutions used to track the visitor's journey on the site without cookies and without JavaScript, using other languages and a URL parameter. Then, we will discuss the processing carried out on the data to facilitate their reading and their storage in the database. Finally, we will set up an analysis page containing graphical visualizations of the data collected.


### 3.1 Legislative prerequisites

As part of this experience, I opted for the choice of a hearing measure exempt from consent according to the recommendations of the CNIL. This allows me to retrieve the information from the visits and to test the data collection tool put in place. The site being a showcase of my journey and having no sales targets, it is mainly intended for French internet users. We will therefore study and implement the recommendations issued by the CNIL to be in compliance and benefit from the consent exemption.


#### 3.1.1 A strict purpose

The CNIL exemption implies compliance by the site editor with a few well-defined rules. One of the most important is finality. It must be "strictly limited to the sole measurement of the audience of the site or the application [...] for the exclusive account of the publisher"<sup><a href="#8">[8]</a></sup>. In our experience, the tool put in place aims to anonymously analyze the content viewed by visitors. This solution does not set a cookie and is developed only on the site www.guillaume-sinnaeve.com, it does not allow visitors to be tracked through different websites. Regarding the non-matching and non-transfer of data to third-party solutions, it is up to the site editor to ensure the application of this rule. Visitors have no guarantees and should trust the publisher. As part of the experiment, the solution is not cross-checked and the information is stored on a database specific to the site (see Appendix 8) and not accessible to third parties.

![Diagram of the database collected as part of the experiment](https://guillaume-sinnaeve.com/img/memoire/3.1.1_database.png "Diagram of the database collected as part of the experiment")  
*Diagram of the database collected as part of the experiment*

Companies have a duty to provide information to users. This is why the site must have a text referring to the purpose of the data collected. This mention can be present on a consent banner but also on a page dedicated to the confidentiality policy.


#### 3.1.2 Inform users

The GDPR is based on the transparency of website publishers with their users. It encourages making the processing of personal data as explicit as possible. As part of the CNIL exemption, it is not necessary to set up a consent banner if this is the only solution implemented on the site. Nevertheless, it is essential to explain to users the purpose of the processing carried out. A statement within a privacy policy page<sup><a href="#9">[9]</a></sup> meets this need (see Appendix 5). This page must be accessible at all times on the site. Therefore, I have opted for the presence of a redirect link to the privacy policy at the bottom of all pages.

![Mention of the purpose of the data collected on the privacy policy page](https://guillaume-sinnaeve.com/img/memoire/3.1.2_privacy-policy-en.png "Mention of the purpose of the data collected on the privacy policy page")  
*Mention of the purpose of the data collected on the privacy policy page*

Regarding the lifetime of cookies and other tracers, the CNIL recommends a maximum of thirteen months. On the site used for the experiment, there are no cookies. Instead, this is a "sid" URL parameter that tracks the visitor across different pages. The value of this parameter is renewed after 30 minutes of visitor inactivity. Below is an example URL containing the “sid” parameter with one of the expected values:
https://www.guillaume-sinnaeve.com/fr/home?sid=1609693795_275788320.

All the information that is collected as part of the experiment is stored on a database. The CNIL recommends a maximum retention period of twenty-five months. To be sure not to hold data beyond this limit, a routine has been set up on the database (see Appendix 6). Daily, a database check is performed to remove information with a registration date of more than 25 months.

![Creation of the event for automatic deletion of data recorded over 25 months in the database](https://guillaume-sinnaeve.com/img/memoire/3.1.2_event-database.png "Creation of the event for automatic deletion of data recorded over 25 months in the database")  
*Creation of the event for automatic deletion of data recorded over 25 months in the database*

We now know the legislative prerequisites to be met in order to set up data collection on the site www.guillaume-sinnaeve.com as part of the experiment while complying with the GDPR. We are now going to focus on the technical constraints imposed for this experiment and the methods used for successful collection.


### 3.2 Technical constraints

As part of this site audience measurement project, several rules are imposed: the use of JavaScript is prohibited, information processing must be done on the server side and no cookie must be created.

The objective being to capitalize on the languages adopted for the development of the site in order to preserve as much as possible the performance and the user experience, it is thus logically the PHP (recursive acronym for “PHP: Hypertext Preprocessor”) which will be used for collect, process and return data. The actions performed by visitors to the site will be measured using CSS (Cascading Style Sheets). Finally, thanks to a URL parameter, it will be possible to identify a visitor and his journey on several pages of the site. The data collected will be saved in a database.


#### 3.2.1 Data collection in PHP

PHP is a language which makes it possible to build pages containing HTML code on the server side and to render the result in the browser on the client side. This is a significant advantage for site editors. This allows them to run code before the HTML content is displayed and not accessible to a user from the browser. This method ensures that data is collected on each page. Conversely, JavaScript code can be problematic in some cases. If called late to the page, a user may leave the site before the script has even had time to run. In addition, many JavaScript functions are not supported on older browsers. This requires developers to plan and test their code through different versions of browsers.

Therefore, each page of the site www.guillaume-sinnaeve.com is developed in PHP. At the beginning of each of them is inserted the call to a file named collect.php<sup><a href="#10">[10]</a></sup>. The latter contains all the mechanics that will make it possible to calculate the value of the visitor identifier and to collect the various information concerning the user, the pages and the interactions carried out on the site. At the end of this file, all the recovered data is saved in a database.

```php
<?php 
    include '../analytics/collect.php';
?>

<!DOCTYPE html>
<html>
```  

*Example of an insertion of the collect.php file on one of the pages of the site*

PHP sends the information to the server side. The data transmitted is therefore not visible to the user. Looking at the resources loaded in the browser's Network, only the file call appears.

![Visibility of the home.php resource in the Network on the page https://www.guillaume-sinnaeve.com/fr/home](https://guillaume-sinnaeve.com/img/memoire/3.2.1_request.png "Visibility of the home.php resource in the Network on the page https://www.guillaume-sinnaeve.com/fr/home")  
*Visibility of the home.php resource in the Network on the page https://www.guillaume-sinnaeve.com/fr/home*

This can be problematic for the site editor who implements this solution and who wants to verify the relevance of what he collects. To be able to perform this quality control, it is possible to use the response headers of the PHP file loaded on the page. As part of the experiment, the headers are prefixed with the term "analytics_" and concatenated with the information collected (example: analytics_device_browser: Chrome).

![Example of response headers from the page https://www.guillaume-sinnaeve.com/fr/home](https://guillaume-sinnaeve.com/img/memoire/3.2.1_headers.png "Example of response headers from the page https://www.guillaume-sinnaeve.com/fr/home")  
*Example of response headers from the page https://www.guillaume-sinnaeve.com/fr/home*

PHP therefore makes it possible to collect information from pages. Nevertheless, it is interesting to know the interactions of users within a page to measure their engagement with the site. Not being able to use JavaScript, we'll see how CSS can meet our needs.


#### 3.2.2 Measuring interactions in CSS

Knowing if a page is seen by users is a first step. But this information alone is not enough to judge the relevance of the content on the page. In JavaScript, it is possible to measure the progress of reading content and the actions performed on pages, such as button clicks. Listening functions (in English addEventListener) allow to execute code following the action of a user, such as scrolling and clicking, in order to send information to an analysis solution, by example. However, in the context of this experiment, JavaScript is prohibited. Therefore, we will use another language.

CSS is used to format HTML content. It defines the properties of the page elements such as color, size, opacity, position, etc. One of the advantages of CSS is that it allows you to define different properties depending on a specific state of an element using pseudo-classes. For example, the initial state of a button can have a blue background color and turn green when the user hovers the mouse over it, via the hover pseudo-class.

For the experiment, chevron type buttons are positioned on different pages and allow content to be displayed at the click of the user. They are linked to input tags of the “checkbox” type. The focus and checked CSS pseudo-classes will allow you to define different CSS properties for these states. And thanks to the background-image property, which allows us to call an URL to load an image in the background, we will be able to call the collect.php file and measure user interactions. By adding URL parameters to this file, it is possible to qualify the action taken by the visitor and to recall the collect.php file. However, once the URL of the file is cached in the user's browser, it is not called again if a second click is made on the same page. Thus, it is possible to obtain a ratio between display of the page and a single click of a button allowing to know its performance.

```html
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
```  

*CSS styles applied to the buttons on the page https://www.guillaume-sinnaeve.com/fr/home*

We now know how to measure page views and interactions made by users on the site. However, no identifier allows, for the moment, to know the route taken by a specific visitor. Analytics and media solutions generally use a cookie to store an identifier and persist information from page to page. However, since cookies are prohibited for this experience, we will use a URL parameter to identify visitors.


#### 3.2.3 Visitor identifier as a URL parameter

Regarding the identifier of an unauthenticated user on a scan tool, a first cookie is generally the solution considered. For example with Google Analytics, a cookie named "_ga" contains an identifier allowing the attribution of the pages viewed and the interactions carried out to the same user. We have seen previously that cookies are currently dying and in the experience they are banned. To track the user on the www.guillaume-sinnaeve.com site, each page and event URL contains a URL parameter having the value of a unique identifier linked to the user who visits the site.

If a user visits the site, a “sid” parameter will be present in the URL. The value is a concatenation between a 10-digit timestamp and a 10-digit random number. An underscore is used to make the connection between the two (example: sid=1608305029_984833821). This parameter is inserted after each internal site redirect URL. This technique allows to have a unique value for each visitor to the site. One of the advantages of this solution is that no information is stored on the user's device. On the other hand, one of the drawbacks is the ease of access for a user. He can modify the value of the parameter. Therefore, adding security seems necessary. If the value does not respect the expected format or if the parameter is deleted by the user, then the PHP script reassigns a new identifier in the correct format.

```php
// Set max inactivity session duration in seconds
$max_session_duration = 1800;

// Get the value of session ID
$session_id = isset($_GET['sid']) ? $_GET['sid'] : '';

// Flag to block data request
$data_request = true;

// session ID is defined
if($session_id != '') {
    // session ID has not the format expected
    if(!preg_match('/^[0-9]{10}_[0-9]{9,10}$/i', $session_id)) {
        $session_id = round(microtime(true)) . '_' . mt_rand(0000000000,(int) 9999999999);
        $data_request = false;
        header('Location: ' . preg_replace('~(\?|&)sid=[^&]*~', '$1', $_SERVER['REQUEST_URI']) . 'sid=' . $session_id); 
    } 
    else {
        include 'connection.php';
        $sql = "SELECT `session_id`, MAX(`timestamp`) as lastTimestamp FROM `data` WHERE `session_id` = '" . $session_id . "'";
        $res = mysqli_query($conn, $sql);
        mysqli_close($conn);
        $data = [];
        while ($row = $res->fetch_assoc()) {
            array_push($data, ["session_id" => $row['session_id'], "lastTimestamp" => $row['lastTimestamp']]);
        }
        
        if(isset($data[0]['session_id']) && isset($data[0]['lastTimestamp'])) {
            $dif = strtotime(date("Y-m-d H:i:s")) - strtotime($data[0]['lastTimestamp']);
            //If the last session ID interaction is greater than 30 min, we change session_id
            if ($dif > $max_session_duration) {
                header('Location: ' . preg_replace('~(\?|&)sid=[^&]*~', '$1', $_SERVER['REQUEST_URI']) . 'sid=' . round(microtime(true)) . '_' . mt_rand(0000000000,(int) 9999999999));
                $data_request = false;
            }
        }
    }
} 
```  

*Calculations performed to assign a value to the "sid" parameter of the URL*

In our experience, we cannot use the term "user" within the scan tool because the ID is reset each time a user visits the site. We therefore use the term “unique visitor”. The notion of new visitors and returning visitors does not exist. So that the behavior of this identifier corresponds as closely as possible to those proposed by the other analysis tools, a rule is put in place. If a user is inactive for more than 30 minutes, that is, he does not generate any page or event requests, then a new username is generated on the next request. This makes it possible to avoid a distorted calculation of visit time by users who return to the site with the same identifier, thanks to a link in the favorites bar for example.

We have previously detailed the technical solutions used in the experiment. PHP for server-side collection, CSS to measure interactions, and an identifier in a URL parameter to track the visitor allow us to follow the rules established for this project. We can now select, process, store and restore with graphical diagrams the data collected on the users of the site.


### 3.3 From data collection to visualization

Now that we know the legislative prerequisites to be respected and the technical constraints imposed for this experience, we can proceed to the collection and processing of the data. In our example (but this is generally true), it is not desirable to collect all the data at our disposal because we would not actually use it. It is at this precise moment that the question of the purpose of the data arises. Each information retrieved must meet a defined need. First, we will select the data to collect to measure the site's audience. Then, we will perform processing on them to group them together, in cases where it is possible to do so, and to simplify storage in the database. Finally, we will set up on the analysis page of the site www.guillaume-sinnaeve.com a graphic reproduction of the data collected.


#### 3.3.1 Knowing your visitors

As we saw previously in the first part, measuring your audience is one of the purposes of data collection. To identify the profile of Internet users visiting the website, we will use information relating to their location, device and source of traffic.

Under the CNIL exemption, geolocation "should not be more precise than the scale of the city"<sup><a href="#11">[11]</a></sup>. Thanks to the user's IP address and the API offered by ip-api.com<sup><a href="#12">[12]</a></sup>, we will retrieve information related to his country, region and city. By supplementing with the language of the browser, all this data makes it possible to adapt the translations of the site according to the country but also to know the places where the possible opportunities are located, as part of a professional relationship.

```php
// Get visitor IP
$visitor_ip = $_SERVER['REMOTE_ADDR'];

// Connect to ip-api.com and get values
$ip_query = @unserialize(file_get_contents('http://ip-api.com/php/' . $visitor_ip));

// Get informations only if the request is OK
if($ip_query && $ip_query['status'] == 'success') {

    //-----------------------------------------------------
    // geo_country 
    //-----------------------------------------------------

    $geo_country = $ip_query['country'];


    //-----------------------------------------------------
    // geo_region 
    //-----------------------------------------------------

    $geo_region = $ip_query['regionName'];
    

    //-----------------------------------------------------
    // geo_city 
    //-----------------------------------------------------

    $geo_city = $ip_query['city'];
} 
```  

*Retrieving the IP address to determine the user's country, region and city*

Device data can be calculated from the user agent. The latter consists of a character string offering the possibility for a server to identify a device profile. Several information can be obtained by this method such as the category of the device (desktop computer, tablet, mobile, etc.), the operating system (Windows, iOS, Android, etc.) and the name of the browser (Chrome , Safari, Firefox, etc.). For the experiment, we collect this data to know the audience but also to check if the site is functional with the configuration of the user and to optimize it if not.

In our case, traffic sources refer to sites that have a link redirecting to the domain name of the experience. This information can be retrieved from the URL of the previous page and is useful for knowing the reputation of the site on the Web. If this value is empty, the user has come live, by entering the URL in their browser or via a favorite. We save the referrer for our experience. In order to test different sources of traffic and acquire data, several social media campaigns were set up on different dates (see Appendix 7).

Device data and traffic sources tell us more about site visitors. And to better understand this audience, the information related to the pages viewed and the events carried out on the site is useful to us. We are therefore going to select the behavioral data to collect.


#### 3.3.2 Behavior on the site

Internet users interact with the website, loading pages and performing actions such as button clicks. This behavior can be measured in different ways: page load time, pages visited, events (actions performed on a page) and duration of visits.

Collecting page load time information helps improve website performance, especially when it is crossed with audience data. A page may take longer to load on a mobile phone for example. In our case, it is not necessary to collect this information because the site is small and does not load many scripts.

In order to identify the pages viewed by visitors to the site, we must collect the relevant URL, and more precisely the path that constitutes it, for example "/fr/home". It is not necessary to collect the domain name because the experiment is carried out only at www.guillaume-sinnaeve.com. This element of the URL is also useful for knowing on which pages events are performed.

To distinguish whether the user's behavior is linked to a page or to an event, we will feed a variable that we will save in the database. Its value will be either “page_view” for a page, or a different value for any other action (example: “call_me” for telephone contact, “show_competences” to display skills on the home page, etc.) . This variable alone is not sufficient for some actions. By combining it with other elements, we can qualify the event (e.g. indicate the skills seen in a variable during a "show_competences" action).

```php
//-----------------------------------------------------
// event_name
//-----------------------------------------------------

$event_name = isset($_GET['event_name']) ? $_GET['event_name'] : 'page_view';


//-----------------------------------------------------
// event_custom_1
//-----------------------------------------------------

$event_custom_1 = isset($_GET['event_custom_1']) ? $_GET['event_custom_1'] : '';


//-----------------------------------------------------
// event_custom_2
//-----------------------------------------------------

$event_custom_2 = isset($_GET['event_custom_2']) ? $_GET['event_custom_2'] : '';
```  

*Retrieving the name of the event and the parameters that qualify it via the url to call the collect.php file*

We have detailed the data relating to visitors, and their behavior on the site, which will be collected for this experiment. Some of this information, like the user agent, requires processing before storing it to obtain the operating system or the browser name, for example. Several actions and calculations are required. We will discuss them in the next part.


#### 3.3.3 Processing and storage

We now know what information we want to collect on the site and its purpose. Before storage in the database, it may be necessary to perform processing. This could be a cleanup, grouping, calculation, or additional information on the values ​​retrieved.

One of the problems frequently encountered by analytical tools is the generation of data from computer bots. These parasitic programs distort the reading of statistics collected on the number of visitors, page views and events. We don't want this to happen as part of the experiment and through the user agent we can identify some of that traffic. In most cases, the string contains the word “bot”. If we find this occurrence, then we prevent saving to the database. This rule can be improved and reinforced during the life of the site to block bots that are not currently covered.

```php
// Get the user agent
$device_userAgent = $_SERVER['HTTP_USER_AGENT'];

// Exclude Bot based on user agent
if(preg_match('/Bot|LinkedInBot|facebookexternalhit|PostmanRuntime|Twitterbot|applebot|Facebot|bingbot|Googlebot|Scoop\.it|Go-http-client/i', $device_userAgent)) {
    $data_request = false;
}
``` 

*Condition to exclude bots from data collection*

Grouping may be necessary, in specific cases, to avoid duplicate rows in the database and make reading more complex. For the experiment, we collect the referrer. And during the campaigns launched on Facebook (see Appendix 7), several values were reported for this same source of traffic: www.facebook.com, m.facebook.com and l.facebook.com. Not having a need for analysis related to this distinction, a rule in the collect.php file combines these 3 domains under the value www.facebook.com before storing it.

```php
// By default, referrer_full, referrer_host and referrer_path equal 'unknown'
$referrer_full = 'unknown';
$referrer_host = 'unknown';
$referrer_path = 'unknown';

// Check if http referer is not undefined
if(isset($_SERVER['HTTP_REFERER'])) {
        
    $referrer_full = $_SERVER['HTTP_REFERER'];
        
    if (true === stripos($_SERVER['HTTP_REFERER'], 'guillaume-sinnaeve.com')){
        $referrer_host = 'www.guillaume-sinnaeve.com';
    }
    else if (true === stripos($_SERVER['HTTP_REFERER'], 'facebook')){
        $referrer_host = 'www.facebook.com';
    }
    else if ($_SERVER['HTTP_REFERER'] == 'android-app://com.linkedin.android/'){
        $referrer_host = 'www.linkedin.com';
    }
    else {
        $referrer_host = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
    }
        
    $referrer_path = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH);
}
else if(preg_match('/LinkedInApp/i', $device_userAgent)) {
    $referrer_full = 'https://www.linkedin.com/';
    $referrer_host = 'www.linkedin.com';
    $referrer_path = '/';
}
else {
    // Direct
    $referrer_full = 'Direct';
    $referrer_host = 'Direct';
    $referrer_path = 'Direct';
}
``` 

*Calculations performed to determine values related to referrers*

Once the unwanted data is discarded, we can proceed with the calculations of the values we want to obtain from the information collected. This is the case, within the context of the experiment, the category of the device, the operating system and the name of the browser. The following is an example of a user agent value obtained from the Safari browser running on an iPhone X:

*Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1*

Using the terms iPhone and Mobile, we can assign the values “Mobile” to the device category and “iOS” to the operating system. Concerning the name of the browser, the presence of the term Safari and the other information in our possession allows us to say that Safari is indeed the name of the browser used.

```php
// By default, device_system equals 'unknown'
$device_system = 'unknown';
    
// iOS
if(preg_match('/iPhone|iPad|iPod/i', $device_userAgent)) {
    $device_system = 'iOS';
}
// Mac OS 
else if(preg_match('/Mac/i', $device_userAgent)) {
    $device_system = 'Mac OS';
}
// Windows
else if(preg_match('/Win/i', $device_userAgent)) {
    $device_system = 'Windows';
}
// Android
else if(preg_match('/Android/i', $device_userAgent)) {
    $device_system = 'Android';
}
// UNIX
else if(preg_match('/X11/i', $device_userAgent)) {
    $device_system = 'UNIX';
}
// Linux
else if(preg_match('/Linux/i', $device_userAgent)) {
    $device_system = 'Linux';
}
// BlackBerry
else if(preg_match('/BB10|PlayBook/i', $device_userAgent)) {
    $device_system = 'BlackBerry';
}
``` 

*Calculations performed to determine the user's operating system*

Before proceeding with recording and storing information, other properties are useful such as the timestamp. It makes it possible to follow the order of the route taken by the visitor, the duration of his visit and also to establish frequency reports. With the timestamp, we get the date (year, month, day of the week), the number of the day, the hour and the minute when the request was sent. Once everything is ready, we can execute a statement in PHP and SQL (Structured Query Language) to store the information in the database (see Appendix 8 for the database schema).

The data is now processed and stored in the database. We can now use them in a graphical visualization tool for easier reading. In the next part, we will use one of the pages of the site to display analytics reports on visitors, pages and events on the site.


#### 3.3.4 Graphical representation of data

We have implemented a data collection and storage tool for audience measurement purposes. We could conclude here and use the database with SQL queries to read the performance indicators that interest us because many tools allow access to this data without going through a rendering interface. However, reading the information is complex and does not make it possible to quickly understand the results obtained. Therefore, we will build an analysis page<sup><a href="#13">[13]</a></sup> on the site containing several graphical representations of the data collected (see Appendix 9). And out of a desire for transparency with site visitors and the data concerning them, this page is accessible by all.

For a pleasant and interactive formatting, we will use the C3<sup><a href="#14">[14]</a></sup> and D3<sup><a href="#15">[15]</a></sup> libraries of JavaScript. They allow you to easily create, in addition to tables, bar charts, online charts or even donut charts from a range of data. The requests.php<sup><a href="#16">[16]</a></sup> and dash.js<sup><a href="#17">[17]</a></sup> files contain the construction of the different graphics offered on the page. The latter is made up of 4 parts devoted to real-time data, relating to visitors, pages and events.

The section entitled Actual times will contain the data of the site visitors present in the last 30 minutes (see Appendix 9). It allows a quick overview of the site's audience and quality control over the feedback of information related to visitors, pages and events. Charts from three parts, called Visitors, Pages and Events, make up this block and highlight some key performance indicators with different reading levels.

The Visitors block displays information about Internet users and their visit over the past 25 months (see Appendix 9). Indicators display the total number of visitors, the bounce rate, the average duration of visits or the number of visits with events. These four results provide a global view of visitors while the other reports in this section provide more precision. We can analyze visitors by frequency of visits, to optimize campaigns and content updates, by device configuration, to verify that the site is functional on different browsers, or even by city, to identify sectors where professional opportunities would be possible.

![Reports related to operating systems and visitors' browsers](https://guillaume-sinnaeve.com/img/memoire/3.3.4_visitors-en.png "RReports related to operating systems and visitors' browsers")  
*Reports related to operating systems and visitors' browsers*

We can see from the above reports that the majority of visitors have a device with Windows as the operating system and browse the site with the Firefox browser.

Then, the Pages section highlights the data corresponding to the pages viewed by users during their visit over the last 25 months (see Appendix 9). Three key performance indicators are highlighted here: the total number of page views, the average page views per visitor and the total number of error or not found pages (404) viewed. The other reports in this section provide an analysis by frequency, by landing and leaving page on the site, by page language and by page name.

![Reports related to languages and names of page views](https://guillaume-sinnaeve.com/img/memoire/3.3.4_pages-en.png "Reports related to languages and names of page views")  
*Reports related to languages and names of page views*

The previous report highlights the percentage of page views by language and the number of page views by name. We can see that the site is browsed mainly in English and that the home page is viewed thirty times more than the following page.

Finally, the Events section reflects the actions carried out by Internet users during their visit over the past 25 months (see Appendix 9). The three important figures highlighted in this section are the total number of events, the number of visitors who read an article and the number of visitors who clicked to initiate a phone call. The other reports in this section provide an analysis by frequency and by type of event carried out, such as the consultation of skills, professional background or certifications.

![Report related to skills viewed by visitors](https://guillaume-sinnaeve.com/img/memoire/3.3.4_events-en.png "Report related to skills viewed by visitors")  
*Report related to skills viewed by visitors*

The above graph shows the number of events performed by skill. From the results obtained, we can deduce that all skills are consulted in almost equal parts even if the Analytics skill stands out slightly.

The site's analysis page provides a link between the data collected in the form of several graphic representations. This page can be supplemented by other reports such as, for example, a flow of journeys made from the home page. Reports should reflect the need for analysis from a company's business team. As part of the experiment, some reports show the values ​​"unknown". They indicate that calculations, such as the name of the browser or the operating system, could not find a result. Therefore, further analysis needs to be done within my database to understand the reason, using the user agent, and optimize the computation for better data collection.


## Conclusion

Data collection is essential for companies in many ways: knowing their audience, optimizing conversion or even monetizing their content. Thanks to the exploitation of cookies and a security breach, analysis solutions, media and others, have created a business model that puts the privacy of Internet users' personal data at risk. This is why the GDPR, browsers and some extensions blocking ads have chosen to position themselves to respect the privacy of users. Faced with these numerous changes and the tightening legislative obligations, companies have been forced to adapt their legal organization and invest development time to ensure legal compliance by the deadline of March 31 at the latest. 2021.
 
Of course, companies want to maintain a quality of service equivalent to before GDPR. Understanding the journey of users and their behavior on the site thanks to the collection of data remains necessary to offer content adapted to its audience. To date, there is no perfect solution to meet all business expectations. Consequently, site editors must deal with what currently exists on the market (CNIL exemption, server-side, authenticated navigation, machine learning) while offering, in the majority of cases, a consent banner, thus exposing themselves to lose valuable information about their users.
 
We have ourselves experimented with a GDPR-compliant solution, on the site www.guillaume-sinnaeve.com, and functional in a potential future world without cookies. In addition to being without JavaScript, the solution takes advantage of stable and renowned technologies of PHP and CSS, which are also used for other purposes during the development of the site. We have managed to recover, and display in graphic reports, behavioral and visitor data while respecting the legislative prerequisites within the framework of the CNIL exemption. It goes without saying, however, that this solution can be improved and is limited to a site whose sole purpose is audience measurement. For more complex site editors who would like to activate data, it would be necessary to study the legal obligations and the technicality of the tool proposed here to adapt it to different needs.
 
The efforts to comply with the GDPR on the Web seem to be well under way by companies, even if some legal texts still appear vague and therefore subject to interpretation. Data protection authorities in different countries of the European Union continue to monitor and sanction breaches of the law.
 
For mobile applications, where the notion of cookie does not exist, data collection is also subject to user consent and legislative texts. Publishers are also not at risk since, for example, Apple adds even stricter technical constraints to guarantee the protection of the privacy of its mobile users with the version of iOS 14 of January 2021. The information collected on users by the mobile application must be displayed on the App Store and developers will have to seek explicit consent for the IDFA (English IDentifier For Advertisers) when opening the application. This identifier is widely used on the mobile side and is similar to a cookie linked to a user on the web side. Significant impacts are therefore expected for the use of data for media activation and optimization purposes.
 
Today, there are Consent Modules (CMP) to meet legislative obligations but they do not cover the technical constraints imposed by Apple. Several solutions are being studied to allow different application editors and advertising and technological players to continue to collect and activate data while respecting Apple's desire to leave its users the choice of how to use their data. data.
 
In summary, while collecting data from their users is essential for businesses, it is clear that the last few years have seen their share of abuse and scandals on the part of many major players in the market. It is necessary today to lay a legal basis for the collection and use of personal data. The death of the cookie and the requirement for consent imply a significant drop in the quality of data that can be used by websites and advertising solutions. However, it seems inconceivable that companies will not find solutions that are satisfactory for everyone and which meet these new requirements. It remains to be seen what forms they can take.


## Useful Notes

##### [1]  
Directive 2002/58 / EC of the European Parliament and of the Council of 12 July 2002 concerning the processing of personal data and the protection of privacy in the electronic communications sector (directive on privacy and electronic communications): https://eur-lex.europa.eu/legal-content/FR/ALL/?uri=CELEX%3A32002L0058

##### [2]  
Founded in 1994 and specializing in computer science, Netscape is best known for its web browser called Netscape Navigator which was used by the majority of users in 1996.

##### [3]  
Definition of the term “cookie”: https://www.cnil.fr/fr/definition/cookie

##### [4]  
Tag Management Systems (TMS) is a tool that allows non-technical people to implement various solutions (analytics, media, a/b testing, etc.) without the intervention of a team of developers.

##### [5]  
Decision of the ICO on the exemption of analytical cookies: https://ico.org.uk/for-organisations/guide-to-pecr/guidance-on-the-use-of-cookies-and-similar-technologies/how-do-we-comply-with-the-cookie-rules/#comply15

##### [6]  
Benefit from the exemption from consent according to the CNIL:  https://www.cnil.fr/fr/mesurer-la-frequentation-de-vos-sites-web-et-de-vos-applications

##### [7]  
Do not follow a person's browsing on different applications or websites: https://www.cnil.fr/fr/mesurer-la-frequentation-de-vos-sites-web-et-de-vos-applications

##### [8]  
Audience measurement for the exclusive account of the publisher: https://www.cnil.fr/fr/mesurer-la-frequentation-de-vos-sites-web-et-de-vos-applications

##### [9]  
Privacy Policy Pages: https://www.guillaume-sinnaeve.com/fr/privacy-policy and https://www.guillaume-sinnaeve.com/en/privacy-policy 

##### [10]  
Page collect.php: https://github.com/gsinna/MIASHS/blob/master/site/analytics/collect.php

##### [11]  
Geolocation should not be more precise than the scale of the city: https://www.cnil.fr/sites/default/files/atoms/files/projet_de_recommandation_cookies_et_autres_traceurs.pdf 

##### [12]  
API used for geolocation: http://ip-api.com

##### [13]  
Analysis pages: https://www.guillaume-sinnaeve.com/fr/analyzes and https://www.guillaume-sinnaeve.com/en/analyzes

##### [14]  
C3.js library: https://c3js.org/

##### [15]  
D3.js library: https://d3js.org/

##### [16]  
Requests.php page: https://github.com/gsinna/MIASHS/blob/master/site/analytics/requests.php

##### [17]  
Dash.js page: https://github.com/gsinna/MIASHS/blob/master/site/analytics/dash.js


## Appendices

### Appendix 1 - Questionnaire - Impact of GDPR on Company A

**1. What is the title of your position and your missions within your company?**

I am a Web Analytics Manager. My missions are to collect all the digital data to optimize our products (applications, websites) and our marketing campaigns. This involves the implementation of branding plans, technical recipes, dashboards and reporting, studies, activation (retargeting, targeting, personalization) and A/B testing.


**2. How do you follow the updates of the recommendations issued by the CNIL and the DPAs of other countries (in the context where your company is international) on the GDPR?**

Our legal teams keep us informed of these developments via weekly newsletters and bi-monthly Coproj. Our partners approach us when these developments have a direct impact on their solutions. I also keep myself informed through subscriptions to newsletters from consulting firms and media agencies.


**3. Did you have to create a dedicated team to monitor GDPR compliance?**

We have set up a project committee that takes place every 2 weeks bringing together all the stakeholders affected by compliance:
- legal team
- data team (data science and web analysis)
- front / IS team
- marketing team

This meeting allows us to take stock of the progress of the project and the latest actions taken and to be taken to achieve our target compliance.


**4. If a team within your company exists, which department does it depend on (Security, DSI Marketing, Legal, etc.)?**

The team of the project manager is attached to the legal department.


**5. The CNIL updated its recommendations in September 2020. Have you anticipated the implementation of the new CNIL rules for collecting consent on cookies?**

Yes


**6. If so, what are the arrangements you have put in place?**

We have set up a project committee.


**7. If not, what actions will you take in the coming months regarding the collection of consent for cookies?**

N/A


**8. Do you think that the different actors (analytics, media, etc.) have succeeded in anticipating these developments?**

Non car, en plus des nouvelles législations, il y a un mouvement de marché des plus gros acteurs vers un plus grand respect des données utilisateurs (ITP, fin des cookies tiers). Je n’ai pas l’impression que les éditeurs ont pu se réunir pour déterminer toutes les conséquences et solutions à l’ensemble de ces changements concomitants. 


**9. Do you deal with the subject of collecting consent on trackers for both your websites and your mobile applications?**

Oui


**10. Have you launched A/B testing actions on your cookie banner and / or your CMP in order to optimize the collection of consent?**

Oui


**11. What are the impacts of the GDPR at the technical level?**

We have implemented a new CMP and upgraded existing tools (different attribution tracking).


**12. Is server-side tracking a solution you have considered?**

No, because regarding the GDPR, regardless of the methodology used (client side or server side), consent remains mandatory.


**13. Do you have strategies in place to still track visitors who have refused tracking?**

Yes with the solutions allowing it and which are accepted and exempted by the CNIL. Namely AT Internet.


**14. Beyond the technical updates of your tools (CMP, TMS) to better collect user consent on cookies/trackers, have you launched a data governance realignment project within your company?**

Yes


**15. What impact has the GDPR had on the data you use to drive your marketing strategy?**

We anticipate significant loss of attribution data. We will therefore have to move from deterministic models to more probabilistic and sampling models.


**16. What are the impacts on your media investments?**

For the moment nothing has been done, we are waiting for our compliance to be complete to see the impact on collection and thus understand the likely impact on our media investments.


**17. Do you foresee or have you anticipated a possible transfer of the media budget towards SEO or partnerships?**

Yes


**18. Has GDPR compliance resulted in a budgetary cost for your site?**

Yes, because we call on consultants to help us manage the project (operational set-up, possible consequences, etc.) and we are implementing new CMP solutions.


**19. Do you identify any other impacts than those mentioned above concerning the compliance of the GDPR?**

No


**20. Do you think that this evolution of the legislation will drastically change the way you work?**

Yes, it's a safe bet that many tools will change and others will emerge. It will therefore be necessary to train in these new technologies.



### Appendix 2 - Questionnaire - Impact of GDPR on Company B

**1. What is the title of your position and your missions within your company?**

Global Analytics Manager


**2. How do you follow the updates of the recommendations issued by the CNIL and the DPAs of other countries (in the context where your company is international) on the GDPR?**

We follow the updates of the recommendations issued by the CNIL via internal communications and the day before.


**3. Did you have to create a dedicated team to monitor GDPR compliance?**

A point of contact exists within the digital department, which allows all points and initiatives to be centralized. In relay, in the different countries where our group is present, we rely on DPOs.


**4. If a team within your company exists, which department does it depend on (Security, DSI Marketing, Legal, etc.)?**

CDO = Digital Department of the cross Brand and Country group


**5. The CNIL updated its recommendations in September 2020. Have you anticipated the implementation of the new CNIL rules for collecting consent on cookies?**

We have internally discussed the new CNIL rules.


**6. If so, what are the arrangements you have put in place?**

N/A


**7. If not, what actions will you take in the coming months regarding the collection of consent for cookies?**

N/A


**8. Do you think that the different actors (analytics, media, etc.) have succeeded in anticipating these developments?**

Not totally. The digital expert population understands the changes driven by the CNIL. There are actors like those who are at the base of the data collection and the analytical part who have succeeded well, but on the other hand the media teams do not necessarily understand all the ins and outs. In particular, retargeting will no longer work thereafter.


**9. Do you deal with the subject of collecting consent on trackers for both your websites and your mobile applications?**

There are few applications within our group, but the logic for processing consent remains the same as for websites.


**10. Have you launched A/B testing actions on your cookie banner and / or your CMP in order to optimize the collection of consent?**

Yes, initiatives have been taken by some brands and countries to test the presence of the banner, the message, the buttons. To answer the question how to lose the least amount of data via legislative obligations.


**11. What are the impacts of the GDPR at the technical level?**

Our partner is One Trust which is configured via GTM.

The main impacts of the changes to the GDPR terms are:
- The updating of the configurations within the JSON to be integrated on each container (a container is equal to a country / brand).
- Communication to countries so that they download this new JSON within their container (for each site).


**12. Is server-side tracking a solution you have considered?**

Yes, through GTM; we discussed this topic but not much progress.


**13. Do you have strategies in place to still track visitors who have refused tracking?**

No. Questions arise as to the possibility of reconciling the data via Cloudflare's logs. But for the moment nothing can be decided on these discussions.


**14. Beyond the technical updates of your tools (CMP, TMS) to better collect user consent on cookies/trackers, have you launched a data governance realignment project within your company?**

The CDO department embodies this centralization of data governance, with Media, Ecommerce, etc. teams. which aim to develop Guidelines for the group and to disseminate it within the network.


**15. What impact has the GDPR had on the data you use to drive your marketing strategy?**

We have less data and therefore have a direct impact on media initiatives (audiences, etc.), customer knowledge will be reduced. The creation and significance of audiences in tools will be less, loyalty programs and CRM too.


**16. What are the impacts on your media investments?**

I don't know exactly how the media teams work on this point.


**17. Do you foresee or have you anticipated a possible transfer of the media budget towards SEO or partnerships?**

I don't know exactly how the media teams work on this point. 


**18. Has GDPR compliance resulted in a budgetary cost for your site?**

Yes, insofar as or if we have less information collected via cookies, it is in our interest to improve customer knowledge by adding features such as creating an account to serve CRM, loyalty programs, etc. This shift would entail additional costs in the development of a site and ultimately in the campaigns


**19. Do you identify any other impacts than those mentioned above concerning the compliance of the GDPR?**

Yes, a very important one, the understanding of the data available by non-expert profiles.

If a change in Policy (eg: the DPO of a country decides to consider Google Analytics as a Performance cookie and no longer a Strictly necessary cookie), an impact that is “neglected” but which ultimately relates more to the communication will be to explain a loss of data which does not result from a drop in traffic but quite simply from a volume of visits for which the Internet user has not given his consent.

“Less 20% !!!” no you do not make -20% even if it is in the absolute possible; via the change of Policy, to collect data your internet user must give their consent, which was not the case before.


**20. Do you think that this evolution of the legislation will drastically change the way you work?**

Yes, and this from several angles:
- Training: explain the nature of the changes and their impacts (see question 19)
- Analysis: understand that the field of analysis is reduced
- Activation: impact on media strategy
- The cost of developing a site: adding new features
- The DNA of a brand: loyalty program or not to activate customer knowledge and legitimize the collection of information



### Appendix 3 - Questionnaire - Impact of GDPR on Company C

**1. What is the title of your position and your missions within your company?**

Responsible for e-business follow-up and web analysis.


**2. How do you follow the updates of the recommendations issued by the CNIL and the DPAs of other countries (in the context where your company is international) on the GDPR?**

The teams directly concerned by the application of the recommendations of the CNIL because impacted by the legal and regulatory obligations induced for the good exercise of their activity exercise a constant watch of the related evolutions, in close connection with the various service providers with which they work, in order to stick as closely as possible to good market practices.


**3. Did you have to create a dedicated team to monitor GDPR compliance?**

Yes, a team has been created in order in particular to guarantee the correct application of the main GDPR directives internally to the various teams concerned.


**4. If a team within your company exists, which department does it depend on (Security, DSI Marketing, Legal, etc.)?**

The centralization of these subjects is assigned to the Big Data department.


**5. The CNIL updated its recommendations in September 2020. Have you anticipated the implementation of the new CNIL rules for collecting consent on cookies?**

Yes, the new CNIL measures have been broadly anticipated since the previous directives.


**6. If so, what are the arrangements you have put in place?**

This subject was mainly anticipated by a reflection on the format of the privacy collection banner in order to anticipate the device allowing the best compromise between the collection of consent on the one hand and compliance with the CNIL directives on the other hand, and observed through the deployment of ab tests on our website.


**7. If not, what actions will you take in the coming months regarding the collection of consent for cookies?**

N/A


**8. Do you think that the different actors (analytics, media, etc.) have succeeded in anticipating these developments?**

Broadly speaking, yes because the primary purpose of the GDPR was clear from the start, gray areas nevertheless remain to be clarified, both on the legal latitude that the actors can retain in the implementation of the collection of consent, and on the solutions. that the major technological players in media purchasing and analytics will deploy to better respond to data security challenges tomorrow.


**9. Do you deal with the subject of collecting consent on trackers for both your websites and your mobile applications?**

The consent collection banner is active on all of our sites. We don't have a mobile app.


**10. Have you launched A/B testing actions on your cookie banner and / or your CMP in order to optimize the collection of consent?**

Yes, several ab tests have been launched in recent months to define the correct format for the banner.


**11. What are the impacts of the GDPR at the technical level?**

The RGPD imposes a more careful control as to the quality of the data collected so that it complies with the principles of anonymization set out by it. It also requires ensuring the means to provide our requesting customers with visibility into all the data that has been collected about them.


**12. Is server-side tracking a solution you have considered?**

This is a solution that is actually being considered at the present time.


**13. Do you have strategies in place to still track visitors who have refused tracking?**

None to my knowledge.


**14. Beyond the technical updates of your tools (CMP, TMS) to better collect user consent on cookies/trackers, have you launched a data governance realignment project within your company?**

Not to my knowledge.


**15. What impact has the GDPR had on the data you use to drive your marketing strategy?**

We had to strengthen the anonymization of the data collected and used in all of our processes and provide a mainly technical effort (configuration of tools) to ensure that the different data exploitation chains that we use in our different cases use do not present any potential security breach of the personal data of prospects and customers using our websites.


**16. What are the impacts on your media investments?**

So far, no significant impact on our investments. In the future, however, strategic choices may be made depending on how our main ad tech partners will make their solutions less cookie-dependent.


**17. Do you foresee or have you anticipated a possible transfer of the media budget towards SEO or partnerships?**

Not at present.


**18. Has GDPR compliance resulted in a budgetary cost for your site?**

Not to my knowledge.


**19. Do you identify any other impacts than those mentioned above concerning the compliance of the GDPR?**

Not currently.


**20. Do you think that this evolution of the legislation will drastically change the way you work?**

No, data monitoring will always remain a concern for companies, the challenge is above all to understand how it will be collected and monitored tomorrow in order to adapt current analysis processes and methods.



### Appendix 4 - Questionnaire - Impact of GDPR on Company D

**1. What is the title of your position and your missions within your company?**

Web Analyst


**2. How do you follow the updates of the recommendations issued by the CNIL and the DPAs of other countries (in the context where your company is international) on the GDPR?**

Watch, internal communication, publishers of solutions used


**3. Did you have to create a dedicated team to monitor GDPR compliance?**

No


**4. If a team within your company exists, which department does it depend on (Security, DSI Marketing, Legal, etc.)?**

N/A


**5. The CNIL updated its recommendations in September 2020. Have you anticipated the implementation of the new CNIL rules for collecting consent on cookies?**

No, not in practice, but reflections are carried out upstream.


**6. If so, what are the arrangements you have put in place?**

N/A


**7. If not, what actions will you take in the coming months regarding the collection of consent for cookies?**

Use of hybrid measurement with an exemption from our analytics tool, for other cookies, classic management with the adaptation of the banner in particular.


**8. Do you think that the different actors (analytics, media, etc.) have succeeded in anticipating these developments?**

The analytics tool used did anticipate certain developments, as it is already a solution that has benefited from the exemption for years and which has worked to adapt and improve its proposal.

From a more global point of view, the analytics but also the other actors are perhaps not in the anticipation or even in a reflection on different collection methods in my opinion.


**9. Do you deal with the subject of collecting consent on trackers for both your websites and your mobile applications?**

Yes


**10. Have you launched A/B testing actions on your cookie banner and / or your CMP in order to optimize the collection of consent?**

Yes


**11. What are the impacts of the GDPR at the technical level?**

We use a CMP for management and autonomy on subjects


**12. Is server-side tracking a solution you have considered?**

yes completely


**13. Do you have strategies in place to still track visitors who have refused tracking?**

No, first we will use our analytics tool and its monitoring in exempt mode.


**14. Beyond the technical updates of your tools (CMP, TMS) to better collect user consent on cookies/trackers, have you launched a data governance realignment project within your company?**

No


**15. What impact has the GDPR had on the data you use to drive your marketing strategy?**

Loss of media tags


**16. What are the impacts on your media investments?**

This is managed by another department


**17. Do you foresee or have you anticipated a possible transfer of the media budget towards SEO or partnerships?**

Also


**18. Has GDPR compliance resulted in a budgetary cost for your site?**

Yes, cost in terms of the solutions used and cost in terms of human investment


**19. Do you identify any other impacts than those mentioned above concerning the compliance of the GDPR?**

N/A


**20. Do you think that this evolution of the legislation will drastically change the way you work?**

In the long term, yes, we will have to be inventive, innovate in order to continue working. It is necessary to develop the profession in correlation with these evolutions.



### Appendix 5 - Privacy Policy

**Introduction**

For master's project in Mathématiques et Informatique Appliquées aux Sciences Humaines et Sociales (MIASHS) Web Analysis course, I collect and process information, some of which is qualified as "personal data". I, Guillaume Sinnaeve, attach great importance to respect for privacy, and only use data in a responsible and confidential manner and for a specific purpose.


**Données personnelles**

On the website www.guillaume-sinnaeve.com, there is 1 type of data that may be collected: 
- **Data collected automatically**  
During your visits, I collect “web analytics” type information relating to your browsing such as the duration of your consultation, your location, your browser type and version. The technology used is without cookies and without JavaScript.


**Use of data**

The "web analytics" data are collected anonymously by the tool that I have developed, and allow me to measure the audience of my website, the consultations and any errors in order to constantly improve the visitor experience. This data is used by myself, the data controller, and will never be transferred to a third party or used for purposes other than those detailed above.


**Legal basis**

Personal data is collected without the user's consent in the context of compliance with the recommendations of the CNIL in the case of exemption.


**Data retention**

The data will be saved for a maximum period of twenty-five months.


**Contact data protection officer**

Guillaume Sinnaeve - sinnaeve.guillaume[at]gmail.com


### Appendix 6 - Data deletion event over 25 months

Above, the query used allowing the implementation of a daily control to delete data recorded more than 25 months ago in the database and thus comply with the recommendations of the CNIL.

CREATE EVENT `DELETE_DATA_OVER_25_MONTHS` ON SCHEDULE EVERY 1 DAY ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM `data` WHERE `timestamp` < CURRENT_TIMESTAMP - INTERVAL 25 MONTH


### Appendix 7 - Data acquisition campaigns

**Text of the publication in French**

Bonjour à tous !

Dans le cadre de mon master MIASHS parcours web analyse, j’ai créé mon site internet expérimental (et non commercial) sur lequel j’ai mis en place une solution analytics sans cookies, sans JavaScript et conforme au RGPD à des fins de mesure d’audience. Découvrez mon site 👉https://guillaume-sinnaeve.com/ 

J’ai besoin de vous pour générer du trafic et des actions sur le site afin d’alimenter l’outil en données et ainsi éprouver son efficacité.

N’hésitez pas à partager et à me contacter pour que je vous en dise plus sur cette solution.

Merci d’avance pour votre aide précieuse !


**Text of the publication in English**

Hello everyone!

As part of my MIASHS web analysis course, I created my experimental (and non-commercial) website on which I set up an analytics solution without cookies, without JavaScript and GDPR compliant for audience measurement purposes. Discover my site 👉https://guillaume-sinnaeve.com/ 

I need you to generate traffic and actions on the site in order to feed the tool with data and test its effectiveness.

Please do not hesitate to share and contact me so that I can tell you more about this solution.

Thank you in advance for your precious help!


**Publication of a post on LinkedIn on Wednesday, November 25, 2020 at 12:00 p.m.**  
![Publication of a post on LinkedIn on Wednesday, November 25, 2020 at 12:00 p.m.](https://guillaume-sinnaeve.com/img/memoire/annexe_post_linkedin_20201125.png "Publication of a post on LinkedIn on Wednesday, November 25, 2020 at 12:00 p.m.")  


**Publication of a post on Facebook on Thursday, November 26, 2020 at 1:00 p.m.**  
![Publication of a post on Facebook on Thursday, November 26, 2020 at 1:00 p.m.](https://guillaume-sinnaeve.com/img/memoire/annexe_post_facebook_20201126.png "Publication of a post on Facebook on Thursday, November 26, 2020 at 1:00 p.m.")


**Publication of a post on LinkedIn on Tuesday, December 01, 2020 at 2:30 p.m.**  
![Publication of a post on LinkedIn on Tuesday, December 01, 2020 at 2:30 p.m.](https://guillaume-sinnaeve.com/img/memoire/annexe_post_linkedin_20201201.png "Publication of a post on LinkedIn on Tuesday, December 01, 2020 at 2:30 p.m.")


**Publication of a post on Facebook on Saturday 05 December 2020 at 1:00 p.m.**  
![Publication of a post on Facebook on Saturday 05 December 2020 at 1:00 p.m.](https://guillaume-sinnaeve.com/img/memoire/annexe_post_facebook_20201205.png "Publication of a post on Facebook on Saturday 05 December 2020 at 1:00 p.m.")


### Appendix 8 - Database diagram

Database schema  
![Database schema](https://guillaume-sinnaeve.com/img/memoire/annexe_database.png "Database schema")

Liste des variables et des valeurs attendues :  

| Variable         | Description                          | Example                                                                                                             |
|------------------|--------------------------------------|---------------------------------------------------------------------------------------------------------------------|
| timestamp        | Date and time of the request         | 2020-12-25 12:29:31                                                                                                 |
| session_id       | Visit ID                             | 1609170082_123456789                                                                                                |
| event_name       | Event name                           | show_formations                                                                                                     |
| event_custom_1   | Event qualifier                      | MIASHS                                                                                                              |
| event_custom_2   | Event qualifier                      | University of Lille                                                                                                 |
| page_uri         | Page path                            | /en/formations                                                                                                      |
| date_full        | Date of the request                  | 12/25/2020                                                                                                          |
| date_day         | Day of the request                   | Friday                                                                                                              |
| date_hour        | Hour of the request                  | 12                                                                                                                  |
| date_minute      | Minute of the request                | 29                                                                                                                  |
| referrer_full    | URL of previous page                 | https://www.guillaume-sinnaeve.com/en/home?sid=1609170082_123456789                                                 |
| referrer_host    | Domain name from previous page       | www.guillaume-sinnaeve.com                                                                                          |
| referrer_path    | Path to the previous page            | /en/home                                                                                                            |
| geo_country      | Visitor's country                    | France                                                                                                              |
| geo_region       | Visitor region                       | Île-de-France                                                                                                       |
| geo_city         | Visitor city                         | Paris                                                                                                               |
| device_userAgent | Visitor user agent                   | Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Safari/537.36 |
| device_category  | Visitor device category              | Desktop                                                                                                             |
| device_system    | Visitor operating system             | Windows                                                                                                             |
| device_browser   | Visitor browser                      | Chrome                                                                                                              |
| device_language  | Visitor's browser language           | en                                                                                                                  |


### Appendix 9 - Site Analysis Page

**Real time**  
![Real time reports](https://guillaume-sinnaeve.com/img/memoire/annexe_analyse_real_time.png "Real time reports")

**Visitors**  
![Visitor Reports](https://guillaume-sinnaeve.com/img/memoire/annexe_analyse_visitors.png "Visitor Reports")

**Pages**  
![Reports Pages](https://guillaume-sinnaeve.com/img/memoire/annexe_analyse_pages.png "Reports Pages")

**Events**  
![Reports Events](https://guillaume-sinnaeve.com/img/memoire/annexe_analyse_events.png "Reports Events")


## Table of illustrations

Illustration 1 : Iterative scheme of data collection

Illustration 2 : Deposit of cookies for a visitor to an e-commerce site

Illustration 3 : Dépôt de cookies tiers suite à la vue d'une bannière publicitaire

Illustration 4 : Quarterly Growth Trends in Internet Advertising Revenue 1996-2019 Source: IAB / PwC Internet Ad Revenue Report, FY 2019

Illustration 5 : ITP's impact on first and third party cookies for analytics and media

Illustration 6 : Control panel for the different levels of protection offered by Firefox

Illustration 7 : Display on the site www.urssaf.fr of a pop-up respecting the DNT option activated on the Google Chrome browser

Illustration 8 : Display of the number of ads and ads blocked on the Brave browser on a smartphone after 2 years of activity

Illustration 9 : Display of a pop-up requesting the deactivation of adblockers on the site www.lesechos.fr

Illustration 10 : Diagram of the database collected as part of the experiment

Illustration 11 : Mention of the purpose of the data collected on the privacy policy page

Illustration 12 : Creation of the event for automatic deletion of data recorded over 25 months in the database

Illustration 13 :Example of an insertion of the collect.php file on one of the pages of the site

Illustration 14 : Visibility of the home.php resource in the Network on the page https://www.guillaume-sinnaeve.com/fr/home

Illustration 15 : Example of response headers from the page https://www.guillaume-sinnaeve.com/fr/home

Illustration 16 : CSS styles applied to the buttons on the page https://www.guillaume-sinnaeve.com/fr/home

Illustration 17 : Calculations performed to assign a value to the "sid" parameter of the URL

Illustration 18 : Retrieving the IP address to determine the user's country, region and city

Illustration 19 : Retrieving the name of the event and the parameters that qualify it via the url to call the collect.php file

Illustration 20 : Condition to exclude bots from data collection

Illustration 21 : Calculations performed to determine values related to referrers

Illustration 22 : Calculations performed to determine the user's operating system

Illustration 23 : Reports related to operating systems and visitors' browsers

Illustration 24 : Reports related to languages and names of page views

Illustration 25 : Report related to skills viewed by visitors


## Webography

Aide Google Chrome. **Activer ou désactiver la fonctionnalité Interdire le suivi**  
URL address: https://support.google.com/chrome/answer/2790761

Benjamin Poilvé (Janvier 2020). **Une petite histoire du cookie**, Laboratoire d’Innovation Numérique de la CNIL  
URL address: https://linc.cnil.fr/fr/une-petite-histoire-du-cookie

CNIL. **Cookie**  
URL address: https://www.cnil.fr/fr/definition/cookie

CNIL (octobre 2020). **Cookies et traceurs : que dit la loi ?**  
URL address: https://www.cnil.fr/fr/cookies-et-traceurs-que-dit-la-loi

CNIL. **Définir une finalité**  
URL address: https://www.cnil.fr/fr/definir-une-finalite

CNIL (octobre 2020). **Mesurer la fréquentation de vos sites web et de vos applications**  
URL address: https://www.cnil.fr/fr/mesurer-la-frequentation-de-vos-sites-web-et-de-vos-applications

CNIL. **Sanction.**  
URL address: https://www.cnil.fr/fr/definition/sanction

Eur-Lex. **Directive 2002/58/CE du Parlement européen et du Conseil du 12 juillet 2002 concernant le traitement des données à caractère personnel et la protection de la vie privée dans le secteur des communications électroniques (directive vie privée et communications électroniques).**  
URL address: https://eur-lex.europa.eu/legal-content/FR/ALL/?uri=CELEX%3A32002L0058

Google. **Consent mode (beta)**  
URL address: https://support.google.com/analytics/answer/9976101?hl=en

IAB (Mai 2020). **Internet advertising revenue report Full year 2019 results & Q1 2020 revenues**  
URL address: https://www.iab.com/wp-content/uploads/2020/05/FY19-IAB-Internet-Ad-Revenue-Report_Final.pdf

ICO. **How do we comply with the cookie rules?**  
URL address: https://ico.org.uk/for-organisations/guide-to-pecr/guidance-on-the-use-of-cookies-and-similar-technologies/how-do-we-comply-with-the-cookie-rules/

Journal du Net (Février 2020). **Privacy Sandbox : que contient l'alternative de Google aux cookies tiers ?**  
URL address: https://www.journaldunet.com/ebusiness/publicite/1489199-privacy-sandbox-que-contient-l-alternative-de-google-aux-cookies-tiers/

La Tribune (Novembre 2020). RGPD : **la CNIL condamne Carrefour à plus de 3 millions d'euros d'amendes**  
URL address: https://www.latribune.fr/technos-medias/internet/rgpd-la-cnil-condamne-carrefour-a-plus-de-3-millions-d-euros-d-amendes-863384.html

Le Monde (Avril 2018). **Données privées : le site de rencontres Grindr mis en cause**  
URL address: https://www.lemonde.fr/pixels/article/2018/04/03/donnees-privees-le-site-de-rencontres-grindr-mis-en-cause_5279794_4408996.html

Les Echos (Janvier 2018). **Criteo : un pépin nommé Apple**  
URL address: https://www.lesechos.fr/2018/01/criteo-un-pepin-nomme-apple-981952

Radio Canada (Juin 2019). **Fuites de données : cinq grands scandales des dernières années**  
URL address: https://ici.radio-canada.ca/nouvelle/1193991/scandale-fuite-vol-renseignements-personnel

RGPD. **CHAPITRE I - Dispositions générales**  
URL address: https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre1

Romain Warlop (Février 2020). **Privacy Sandbox : quand Google relève le défi de l’alternative aux cookies publicitaires… en deux ans !**, 55 the tea house  
URL address: https://teahouse.fifty-five.com/fr/privacy-sandbox-quand-google-releve-le-defi-de-lalternative-aux-cookies-publicitaires-en-deux-ans/

Stratégies (Novembre 2018). **Les adblockers ne connaissent pas la crise**  
URL address: https://www.strategies.fr/actualites/medias/4020718W/les-adblockers-ne-connaissent-pas-la-crise.html

The Mozilla Blog (Août 2020). **Latest Firefox rolls out Enhanced Tracking Protection 2.0; blocking redirect trackers by default**  
URL address: https://blog.mozilla.org/blog/2020/08/04/latest-firefox-rolls-out-enhanced-tracking-protection-2-0-blocking-redirect-trackers-by-default/

Webkit (Juin 2017). **Intelligent Tracking Prevention**  
URL address: https://webkit.org/blog/7675/intelligent-tracking-prevention/

Webkit (Juin 2018). **Intelligent Tracking Prevention 2.0**  
URL address: https://webkit.org/blog/8311/intelligent-tracking-prevention-2-0/

Webkit (Février 2019). **Intelligent Tracking Prevention 2.1**   
URL address: https://webkit.org/blog/8613/intelligent-tracking-prevention-2-1/

Webkit (Avril 2019). **Intelligent Tracking Prevention 2.2**  
URL address: https://webkit.org/blog/8828/intelligent-tracking-prevention-2-2/

Webkit (Septembre 2019). **Intelligent Tracking Prevention 2.3**  
URL address: https://webkit.org/blog/9521/intelligent-tracking-prevention-2-3/