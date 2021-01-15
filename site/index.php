<?php

    // Get request URL
    $fullUrl = $_SERVER[REQUEST_URI];
    // split the url
    $url = parse_url($fullUrl);
    // Initialize the language code variable
    $lc = ""; 
    // Check to see that the global language server variable isset()
    // If it is set, we cut the first two characters from that string
    if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
    $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    // Now we simply evaluate that variable to detect specific languages
    if($lc == "fr"){
        if($url['query'] != ''){
            header("location: /fr/home?" . $url['query']);
            exit();
        } else {
            header("location: /fr/home");
            exit();
        }
    } else { // don't forget the default case if $lc is empty
        if($url['query'] != ''){
            header("location: /en/home?" . $url['query']);
            exit();
        } else {
            header("location: /en/home");
            exit();
        }
    }
?>