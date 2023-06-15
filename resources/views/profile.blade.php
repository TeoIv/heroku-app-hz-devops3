@extends('common.layout')

@section('body')

<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="/css/profile.css">
    <script src="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
    <script src="https://fonts.googleapis.com/css?family=Open+Sans:400,800"></script>
</head>

<body>
    <div class="container">
        <div class="img"></div>
        <div class="backgroundfade"></div>
        <div class="profilephoto">
            <img src="img/circleteo.png" alt="">
        </div>
        <div class="roundbutton" id="bubble1">
            <div>
                <figure class="icon">
                    <ion-icon name="key-outline" size="large"></ion-icon>
                </figure>
                <h4>My mindset</h4>
                <p>One thing i love about life is that you can never get enough. A moto that I adore, just beacause of the simplicity in it. That mindset is always pushing me into trying new things and learning <br> new stuff daily.
                </p>
            </div>
        </div>
        <div class="roundbutton" id="bubble2">
            <div class="profilecontent2">
                <figure class="icon">
                    <ion-icon name="school-outline" size="large"></ion-icon>
                </figure>
                <h4>Previous education</h4>
                <ul>
                    <li>73. High School Vladislav Gramatik</li>
                    <li>Web-Development course</li>
                    <li> Language lessons in:</li>
                    <li><p> | German <img class="flag" src="img/deu.svg" alt=""> | English <img class="flag" src="img/gbr.svg" alt=""> | Russian <img class="flag" src="img/rus.svg" alt=""> | Bulgarian /Native/
                        <img class="flag" src="img/bgr.svg" alt=""></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="roundbutton" id="bubble3">
            <div>
                <figure class="icon">
                    <ion-icon name="information-circle-outline" size="large"></ion-icon>
                </figure>
                <h4>General Information</h4>
                <ul>
                    <li>Name: Teodor</li>
                    <li>Nationality: Bulgarian</li>
                    <li>Age: 21</li>
                </ul>
            </div>
        </div>
        <div class="roundbutton" id="bubble5">
            <div class="profilecontent5">
                <figure class="icon">
                    <ion-icon name="fish-outline" size="large"></ion-icon>
                </figure>
                <h4>Hobbies</h4>
                <p>In my rest time I usually prefer to go somewhere quiet. The nature has always been my escape. Just pack and go. Me and my lovely wife-to-be do this all the time when we can catch a breath. Favourite movies: The Hobbit, TLOTR, Lion King
                    etc.
                </p>
            </div>
        </div>
        <div class="roundbutton" id="bubble6">
            <figure class="icon">
                <a href="gallery">
                    <ion-icon name="images-outline" size="large"></ion-icon>
                </a>
            </figure>
        </div>
        <div class="nameprofile">
            <p>Teodor Ivanov</p>
        </div>
    </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
@endsection
