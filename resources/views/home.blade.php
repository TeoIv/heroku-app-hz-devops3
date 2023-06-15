@extends('common.layout')

@section('body')
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="/css/home.css">
    </head>
    <div class="containerhome">
        <div class="motivating">
            <figure class="iconhome">
                <a href="https://hz.nl/" target="_blank"><img src="img/hz-logosite.svg" alt=""></a>
            </figure>
            <p>I believe that my place is in the HBO - ICT programme at the HZ University. I decided to start this journey in IT, because I love solving problems and facing new challenges.</p>
        </div>
        <div class="contact" id="instagram">
            <figure>
                <a href="https://www.instagram.com/t.ivanoff/" target="_blank">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </figure>
        </div>
        <div class="contact" id="facebook">
            <figure>
                <a href="https://www.facebook.com/teodor.iwanow.16" target="_blank">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
            </figure>
        </div>
        <div class="contact" id="mail">
            <figure>
                <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSGKZPcVVzBZNrCLtnnxrxNRLnPsnWRcjLvXSXbKZMdfTbWgHDXtZbPkknXbPdmHPMfgFNfr" target="_blank">
                    <ion-icon name="mail-open-outline"></ion-icon>
                </a>
            </figure>
        </div>
        <div class="contact" id="whatsapp">
            <figure>
                <a href="https://web.whatsapp.com/" target="_blank">
                    <ion-icon name="call-outline"></ion-icon>
                </a>
            </figure>
        </div>
        <div class="contact" id="maps">
            <figure>
                <a href="https://www.google.com/maps/place/Provinciale+Zeeuwse+Energie+Maatschappij+-+PZEM/@51.493477,3.6089437,18.43z/data=!3m1!5s0x47c490d0687b6147:0xd5fd988ed208a884!4m5!3m4!1s0x47c490d07f3bf931:0x92448316f55e770e!8m2!3d51.4934043!4d3.6084074" target="_blank">
                    <ion-icon name="home-outline"></ion-icon>
                </a>
            </figure>
        </div>
        <div class="contact" id="github">
            <figure>
                <a href="https://github.com/TeoIv" target="_blank">
                    <ion-icon name="logo-github"></ion-icon>
                </a>
            </figure>
        </div>
        <div class="expect">
            <figure class="iconexpect">
                <ul>
                    <h1>What To Expect</h1>
                    <li>
                        <ion-icon class="iconarrow" name="arrow-forward-circle-outline"></ion-icon>A lot of effort</li>
                    <li>
                        <ion-icon class="iconarrow" name="arrow-forward-circle-outline"></ion-icon>Dedication</li>
                    <li>
                        <ion-icon class="iconarrow" name="arrow-forward-circle-outline"></ion-icon>Determination</li>
                    <li>
                        <ion-icon class="iconarrow" name="arrow-forward-circle-outline"></ion-icon>Fun Time</li>
                </ul>
            </figure>
        </div>
        <div class="logo"></div>
        <div class="backgroundfade"></div>

    </div>
@endsection
