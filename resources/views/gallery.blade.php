@extends('common.layout')

@section('body')
<head>
    <title>Photo Gallery</title>
    <link rel="stylesheet" type="text/css" href="/css/gallery.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
<div>
    <div class="backgroundfade"></div>
    <div class="photosection">
        <ul>
            <li>
                <div class="img1">
                    <a href="#img1">
                        <img src="img/IMG-4499.jpg" alt="">
                    </a>
                </div>
                <a href="#_" class="openphoto" id="img2">
                    <img src="img/IMG-5139.jpg" alt="">
                </a>
            </li>
            <li>
                <div class="img1">
                    <a href="#img3">
                        <img src="img/IMG-3665.jpg" alt="">
                    </a>
                </div>
                <a href="#_" class="openphoto" id="img3">
                    <img src="img/IMG-3665.jpg" alt="">
                </a>
            </li>
            <li>
                <div class="img">
                    <a href="#img4">
                        <img src="img/teoo.jpeg" alt="">
                    </a>
                </div>
                <a href="#_" class="openphoto" id="img4">
                    <img src="img/teoo.jpeg" alt="">
                </a>
            </li>
            <li>
                <div class="img">
                    <a href="https://www.instagram.com/p/B9HtGBhJci8-mYf87_9eruxmK0Zu0xxQDez4f00/" target="_blank">
                        <img src="img/ffdp.jpg" alt="">
                    </a>
                </div>
                <a href="#_" class="openphoto" id="img13">
                    <img src="assets/photos/ffdp.jpg" alt="">
                </a>
            </li>
            <li>
                <div class="img">
                    <a href="#img5">
                        <img src="img/IMG-3677.jpg" alt="">
                    </a>
                </div>
                <a href="#_" class="openphoto" id="img5">
                    <img src="img/IMG-3677.jpg" alt="">
                </a>
            </li>
            <li>
                <div class="img">
                    <a href="https://www.instagram.com/p/BZ4VKPwjX1aA6CCvw5VDxGQmqPx_er0GPnGOcw0/" target="_blank">
                        <img src="img/football1.jpg" alt="">
                    </a>
                </div>
                <a href="#_" class="openphoto" id="img14">
                    <img src="img/football1.jpg" alt="">
                </a>
            </li>
            <li>
                <div class="img">
                    <a href="#img6">
                        <img src="img/IMG-3562.jpg" alt="">
                    </a>
                </div>
                <a href="#_" class="openphoto" id="img1">
                    <img src="img/IMG-4499.jpg" alt="">
                </a>
            </li>
            <li>
                <div class="img">
                    <a href="#img2">
                        <img src="img/IMG-5139.jpg" alt="">
                    </a>
                </div>
                <a href="#_" class="openphoto" id="img6">
                    <img src="img/IMG-3562.jpg" alt="">
                </a>
            </li>
            <li>
                <div class="img">
                    <a href="#img7">
                        <img src="img/IMG-3167.jpg" alt="">
                    </a>
                </div>
                <a href="#_" class="openphoto" id="img7">
                    <img src="img/IMG-3167.jpg" alt="">
                </a>
            </li>
            <li>
                <div class="img">
                    <a href="#img8">
                        <img src="img/ED19C9C4-AE46-4753-82BA-7429CBF8B1C0.JPG" alt="">
                    </a>
                </div>
                <a href="#_" class="openphoto" id="img8">
                    <img src="img/ED19C9C4-AE46-4753-82BA-7429CBF8B1C0.JPG" alt="">
                </a>
            </li>
            <li>
                <div class="img">
                    <a href="https://www.instagram.com/p/CBax13kpzjTcVwRE9R75H4W6e7GiISmIA-pn3U0/" target="_blank">
                        <img src="img/guitar.jpg" alt="">
                    </a>
                </div>
                <a href="#_" class="openphoto" id="img15">
                    <img src="img/guitar.jpg" alt="">
                </a>
            </li>
            <li>
                <div class="img">
                    <a href="#img10">
                        <img src="img/25CD6464-A683-47A4-A07D-DE48A1E81D7E.JPG" alt="">
                    </a>
                </div>
                <a href="#_" class="openphoto" id="img10">
                    <img src="img/25CD6464-A683-47A4-A07D-DE48A1E81D7E.JPG" alt="">
                </a>
            </li>
            <li>
                <div class="img">
                    <a href="#img11">
                        <img src="img/Teo.jpg" alt="">
                    </a>
                </div>
                <a href="#_" class="openphoto" id="img11">
                    <img src="img/Teo.jpg" alt="">
                </a>
            </li>
            <li>
                <div class="img">
                    <a href="https://www.facebook.com/clubprovocateursofia" target="_blank">
                        <img src="img/8AB03D1E-0A79-4152-B57A-6A765AA00857.jpg" alt="">
                    </a>
                </div>
                <a href="#_" class="openphoto" id="img9">
                    <img src="img/8AB03D1E-0A79-4152-B57A-6A765AA00857.jpg" alt="">
                </a>
            </li>
        </ul>
    </div>
</div>
<script src="https://code.jquery.com/jquery-2.2.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</div>
</body>
@endsection
