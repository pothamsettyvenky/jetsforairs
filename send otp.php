<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="../package/swiper-bundle.min.css">

    <!-- Demo styles -->
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }
        
        body {
            background: #fff;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }
        
        .swiper-container {
            width: 300px;
            height: 300px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -150px;
            margin-top: -150px;
        }
        
        .swiper-slide {
            background-position: center;
            background-size: cover;
        }
    </style>
</head>

<body>
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:url(./IMAGESjet1.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(./images/jet2.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(./images/jet3.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(./images/nature-4.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(./images/nature-5.jpg)"></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    
</body>
<script src="images/jquery.js"></script>
    <script src="../package/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            effect: 'cube',
            grabCursor: true,
            cubeEffect: {
                shadow: true,
                slideShadows: true,
                shadowOffset: 20,
                shadowScale: 0.94,
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });
    </script>
</html>