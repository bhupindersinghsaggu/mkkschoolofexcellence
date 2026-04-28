<?php
// index.php
$meta_title = "School of Excellence | Best CBSE School in Panipat";
$meta_description = "Welcome to School of Excellence – a top CBSE-affiliated school in Panipat offering academic excellence, innovation & holistic development.";
$meta_keywords = "School of Excellence, Best CBSE School Panipat, Top School in Panipat, Panipat Schools, Admissions Open, Holistic Education";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo isset($meta_title) ? $meta_title : "Default Title"; ?></title>
    <meta name="description" content="<?php echo isset($meta_description) ? $meta_description : "Default description"; ?>">
    <meta name="keywords" content="<?php echo isset($meta_keywords) ? $meta_keywords : "default, keywords"; ?>">
    <link rel="apple-touch-icon" href="images/favicon-16x16.png">
    <link rel="shortcut icon" href="images/favicon-16x16.png">
    <link rel="stylesheet" href="css/feather.css">
    <link rel="stylesheet" href="css/nice-select2.css">
    <link href="css/glightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1538771127379318');
        fbq('track', 'PageView');
    </script><noscript> <img height="1" width="1" src="https://www.facebook.com/tr?id=1538771127379318&ev=PageView&noscript=1" /></noscript><!-- End Facebook Pixel Code -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17979860051"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-17979860051');
    </script>
</head>

<body>
    <header class="header header-2">
        <div class=" bg-primary text-info text-uppercase" style="background-color: #3a4bfffa;">
            <div class="marquee" style="padding: 14px;">
                <marquee scrollamount="5" loop="2">
                    <a href="#" data-toggle="modal" data-target="#exampleModal">
                        <span class="adm-text">Admissions Open for the Session 2026-27 <i class="fa-solid fa-star star-icon"></i> </span>
                        <span class="adm-text">Admissions Open for the Session 2026-27 <i class="fa-solid fa-star star-icon"></i> </span>
                        <span class="adm-text">Admissions Open for the Session 2026-27 <i class="fa-solid fa-star star-icon"></i> </span>
                        <span class="adm-text">Admissions Open for the Session 2026-27 <i class="fa-solid fa-star star-icon"></i> </span>
                        <span class="adm-text">Admissions Open for the Session 2026-27 <i class="fa-solid fa-star star-icon"></i> </span>
                        <span class="adm-text">Admissions Open for the Session 2026-27 <i class="fa-solid fa-star star-icon"></i> </span>
                        <span class="adm-text">Admissions Open for the Session 2026-27 <i class="fa-solid fa-star star-icon"></i> </span>
                        <span class="adm-text">Admissions Open for the Session 2026-27 <i class="fa-solid fa-star star-icon"></i> </span><span class="adm-text">Admissions Open for the Session 2026-27 <i class="fa-solid fa-star star-icon"></i> </span>
                        <span class="adm-text">Admissions Open for the Session 2026-27 <i class="fa-solid fa-star star-icon"></i> </span><span class="adm-text">Admissions Open for the Session 2026-27 <i class="fa-solid fa-star star-icon"></i> </span>
                        <span class="adm-text">Admissions Open for the Session 2026-27 <i class="fa-solid fa-star star-icon"></i> </span>
                    </a>
                </marquee>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <style>
        /* ========================= GRID ========================= */
        .most-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            max-width: 1600px;
            margin: auto;
        }

        /* Laptop */
        @media (max-width: 1200px) {
            .most-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        /* Tablet */
        @media (max-width: 992px) {
            .most-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        /* Mobile */
        @media (max-width: 600px) {
            .most-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* ========================= CARD ========================= */
        /* CARD */
        .most-card {
            background: transparent;
            /* ❌ black remove */
            border-radius: 14px;
            overflow: hidden;
            cursor: pointer;
        }

        /* IMAGE WRAPPER */
        .card-image-wrapper {
            position: relative;
            width: 100%;
            aspect-ratio: 1 / 1;
            /* ✅ square fix */
            overflow: hidden;
        }

        /* IMAGE FULL FIT */
        .card-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* ✅ FULL COVER */
            display: block;
        }

        /* REMOVE OVERLAY */
        .card-image-wrapper::after {
            display: none;
        }

        /* REMOVE META (double safety) */
        .card-meta {
            display: none !important;
        }

        /* ========================= CLICKABLE LINK ========================= */
        .card-link {
            position: absolute;
            inset: 0;
            z-index: 2;
        }

        /* ========================= DOWNLOAD BUTTON ========================= */
        .card-download-btn {
            position: absolute;
            bottom: 10px;
            right: 10px;
            z-index: 3;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #2563eb;
            color: #fff;
            border-radius: 50%;
            opacity: 0;
            transform: translateY(10px);
            transition: .3s;
        }

        .most-card:hover .card-download-btn {
            opacity: 1;
            transform: translateY(0);
        }

        /* ========================= BADGES ========================= */
        .badge-label {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 5px 12px;
            border-radius: 50px;
            font-size: 11px;
            font-weight: 600;
            z-index: 3;
        }

        .badge-premium {
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
        }

        .badge-free {
            background: #84cc16;
            color: #000;
        }

        /* ========================= META ========================= */
        .card-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px;
        }

        .download-text {
            font-size: 12px;
            color: #9ca3af;
            background: #ffffff20;
            padding: 4px 10px;
            border-radius: 20px;
        }

        .file-type {
            font-size: 11px;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 50px;
            background: linear-gradient(90deg, #5b5be7, #8a2be2);
            color: #fff;
        }

        /* ========================= LOAD MORE ========================= */
        .load-more-wrapper {
            text-align: center;
            margin-top: 40px;
        }

        .load-more-btn {
            padding: 12px 28px;
            background: linear-gradient(90deg, #84cc16, #65a30d);
            color: #000;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: .3s;
        }

        .load-more-btn:hover {
            background: #65a30d;
            transform: translateY(-2px);
        }

        /* ========================= END MESSAGE ========================= */
        .no-more-message {
            text-align: center;
            margin-top: 20px;
            color: #777;
            font-size: 15px;
        }

        .similar-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 5;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            opacity: 0;
            transform: translateY(-5px);
            transition: 0.3s;
        }

        .most-card:hover .similar-btn {
            opacity: 1;
            transform: translateY(0);
            color: #fff;
        }

        /* Arrow */
        .tooltip-text::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            border-width: 5px;
            border-style: solid;
            border-color: #111 transparent transparent transparent;
        }

        /* SHOW ON HOVER */
        .similar-btn a:hover .tooltip-text {
            opacity: 1;
            transform: translateX(-50%) translateY(-3px);
        }
    </style>

    <section class="design-section">
        <div class="most-grid"> {% for product in collections['business-visiting-card'].products limit:30 %} <div class="most-card" data-handle="{{ product.handle }}" data-url="{{ product.url }}">
                <div class="card-image-wrapper"> <!-- FULL CARD LINK --> <a href="{{ product.url }}" class="card-link"></a> <img src="{{ product.featured_image | image_url: width:600 }}" alt="{{ product.title }}"> {% assign badge = product.metafields.custom.badge | downcase %} {% if badge == 'premium' %} <div class="badge-label badge-premium"> <i class="fa-solid fa-gem"></i> Premium </div> {% elsif badge == 'free' %} <div class="badge-label badge-free"> Free </div>
                    <div class="similar-btn "> <a href="{{ product.collections.first.url }} "> <i class="fa-solid fa-layer-group"></i> </a> </div> {% endif %} <a href="{{ product.url }}" class="card-download-btn"> <i class="fa-solid fa-download"></i> </a>
                </div>
                <div class="card-meta">
                    <div class="download-text"> 🔥 <span class="download-count">0</span> Downloads </div>
                    <p class="file-type"> {{ product.metafields.custom.file_type }} </p>
                </div>
            </div> {% endfor %} </div>
        <div class="load-more-wrapper"> <button class="load-more-btn"> Load More <i class="fa-solid fa-arrows-rotate"></i> </button> </div>
        <div class="no-more-message" style="display:none;"> No More Designs </div>
    </section>