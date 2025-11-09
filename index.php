<?php
// ==========================================
// Front Controller - index.php (root)
// ==========================================

use core\Kernel;
use core\Database;

ini_set('display_errors', 1);
error_reporting(E_ALL);

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

require_once __DIR__ . '/core/init.php';

$database = new Database;
$database->start();
?>

<!DOCTYPE html>
<html lang="en" translate="no" data-root="root">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- <meta name="generator" content="FrontPage 4.0"> -->
    <!-- <meta http-equiv="content-security-policy" content="default-src 'self'"> -->
    <meta name="robots" content="index, follow"/>
    <meta name="author" content="RAPLI-DEV"/>
    <meta name="description" content="Computer shop"/>
    <meta name="keywords" content="computer, shop, testing"/>
    <meta property="og:title" content="RPLII-WEB">
    <meta property="og:description" content="Visit our website to get a complete range of computer component products.">
    <!-- <meta property="og:image" content="URL Gambar Thumbnail"> -->
    <meta property="og:url" content="https://whole-main-doe.ngrok-free.app/ap/Proyek%20Toko%20Online/">
    <!-- <meta http-equiv="refresh" content="30"> -->
	<title>Toko Online</title>
    <link rel="icon" type="image/x-icon" href="https://whole-main-doe.ngrok-free.app/favicon.ico"/>
	<link rel="stylesheet" href="sources/css/style.css"/>
	<link rel="stylesheet" href="sources/css/animation.css"/>
	<link rel="stylesheet" href="sources/css/responsive.css"/>
    <link rel="stylesheet" href="sources/css/font.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"/>
    <!-- <meta http-equiv="default-style" content="style"> -->
</head>
<body>
    <noscript>
        <style>
            body { display: none; }
            .google-maps { display: none; }
        </style>
        <!-- <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTCFC3S" height="0" width="0" style="display:none; visibility:hidden"></iframe> -->
        <head>
            <meta http-equiv="refresh" content="0; url=no-js.html">
        </head>
    </noscript>

    <div id="preloader">
        <svg id="loader" viewBox="0 0 800 800" xmlns="http://www.w3.org/2000/svg">
            <circle class="circle-spin" cx="400" cy="400" fill="none"
            r="100" stroke-width="20" stroke="#f0c040"
            stroke-dasharray="700 1400"
            stroke-linecap="round" />
        </svg>
        <div class="top"></div>
        <div class="bottom"></div>
    </div>

    <!--
    http://telo.42web.io/
    https://vpsganten.co4.in/
    -->

    
    <?php
        // $uri = $_GET['URI'] ? $_GET['URI'] : $_GET['URI'] = 'public';
        // header('Location: ?URI=landingpage');
        $uri = strtok($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] . '?' : $_GET['URI'] = 'landingpage';
        // $uri = strtok($_SERVER['REQUEST_URI'],'?');
        // echo $uri;
        $funUri = new Kernel;
        $funUri->handleURI($uri);
    ?>
    <script>
        window.addEventListener("load", function () {
            const preloader = document.getElementById("preloader");
            const loader = document.getElementById("loader");
            const top = document.querySelector(".top");
            const bottom = document.querySelector(".bottom");
            
            const header = document.getElementById("Header");
            const main = document.getElementById("Main");
            
            loader.style.display = ("none");
            
            header.style.display = ("flex")
            main.style.display = ("grid")
            
            top.classList.add("top-s");
            bottom.classList.add("bottom-s");
            preloader.style.backgroundColor = "rgba(0, 0, 0, 0)";
            
            preloader.addEventListener("animationend", () => {
                preloader.style.display = ("none");
            })
        });
    </script>

    <script src="sources/js/script.js"></script>
</body>
</html>