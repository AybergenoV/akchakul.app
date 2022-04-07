
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    
    
    <title>Akchakul</title>


    <!------------ LINKS -------------->
    <link rel="icon" href="assets/logo/Акчакул.png">
    <link rel="stylesheet" href="Css/main.css">
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>
    <!---------// Scroll-Top \\--------->
    <a href="#" id="scroll-top">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </a>

    <!--------------- NAVBAR Section --------------->
    @include('../inc.headen')

    <!--------------- HOME Section ----------------->
    <section class="home bg-dark" id="home">
        <div class="container">
            <div class="hero-sec text-white">
                <div>
                    <h1>AKCHAKUL TRAVEL</h1>
                    <h3>O'zbekistondagi sarguzashtingizni boshlang</h3>
                    <ul class="hero-icons">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i></i></a></li>
                        <li><a href="#"><i class="fa fa-handshake-o" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-ravelry" aria-hidden="true"></i></a></li>
                    </ul>
                    <a class="btns" href="#">Ko'proq Bilish</a>
                </div>
            </div>
            <div class="bottom-anim">
                <ul class="bottom-icons">
                    <li><a target="_blank" href="https://t.me/Akcchakultravel"><i class='bx bxl-telegram'></i></a></li>
                    <li><a href="#"><i class='bx bxl-youtube'></i></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/akchakul_travel/"><i class='bx bxl-instagram'></i></a></li>
                    <li><a target="_blank" href="https://mail.google.com/mail/atabekmuratbaevtour@gmail.com"><i class='bx bx-envelope'></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="tour">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Travel to Bukhara</h2>
                    <span></span>
                </div>
                <div class="tour-main">
                    <div class="tour-img">
                        <img src="https://www.thediaryofanomad.com/wp-content/uploads/2020/04/khiva-uzbekistan-cafe-terrassa-restaurant.jpg">
                    </div>
                    <ul class="sayohat-dispr">
                        <li class="sayohat-header">
                            <span>Days</span>
                            <span>Travel destinations</span>
                        </li>
                        <li class="sayohat-kunlar">
                            <span>1-Day</span>
                            <span>
                                -breakfast. <br>
                                -Visit to the sights of Bukhara: Poi-Kalyan ensemble, including the minaret (XII century), mosque (XV century), Miri-Arab madrasah (XVI century) (still operating), Emir-Olim-Khan madrasah ( XIV century), Taki trade domes, Kukeldash madrasa (XVI century), Nadir Divanbegi (XVII century), Magok-i Attari mosque (XVI century), Lyabi-Khauz square (XVII century). <br>
                                -Lunch. <br>
                                - Attractions of Bukhara: visit to Registan, Ark fortress (XVI century) and Bolo-Khauz complex (XVIII century). Madrasa Ulugbek (XV century), Abdul Aziz (XVII century); Mausoleum of Chor-Minor, Ismail Somoni (IX-X centuries) - the dome of the Bukhara dynasty, Chashma-Ayub mausoleum (XIV century). <br>
                                -Dinner.
                            </span>
                        </li>
                        <li class="sayohat-kunlar">
                            <span>2-Day</span>
                            <span>
                                -breakfast. <br>
                                -Excursion outside the city. Naqshband Mausoleum, Chor Bakr Mausoleum, Mohi Xosa Palace. <br>
                                -Lunch. <br>
                                -Return to Bukhara. <br>
                                -Free time. Dinner.
                            </span>
                        </li>
                        <li class="sayohat-kunlar">
                            <span>3-Day</span>
                            <span>
                                Road to Nukus 6 hours
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--------------- FOOTER Section ----------------->
    @include('inc.footeren')


    <script src="Js/script.js"></script>
</body>
</html>