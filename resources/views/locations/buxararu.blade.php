
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
    @include('../inc.headru')

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
                    <li><a target="_blank" href="https://www.instagram.com/akchakul_travel/"><i
                                class='bx bxl-instagram'></i></a></li>
                    <li><a target="_blank" href="https://mail.google.com/mail/atabekmuratbaevtour@gmail.com"><i
                                class='bx bx-envelope'></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="tour">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Путешествие в Хивы </h2>
                    <span></span>
                </div>
                <div class="tour-main">
                    <div class="tour-img">
                        <img
                            src="https://uzbekistan.travel/storage/app/media/nargiza/cropped-images/cropped-images/5-0-0-0-0-1583403867-0-0-0-0-1583403914.jpg">
                    </div>
                    <ul class="sayohat-dispr">
                        <li class="sayohat-header">
                            <span>Дней</span>
                            <span>Направления путешествия</span>
                        </li>
                        <li class="sayohat-kunlar">
                            <span>1-День</span>
                            <span>
                                -Дорога до Хивы 3 часа.
                            </span>
                        </li>
                        <li class="sayohat-kunlar">
                            <span>2-День</span>
                            <span>
                                -завтрак. <br>
                                -Начало экскурсии. Комплекс Ичан-Кала <br>
                                -Крепость Куна-Арк, в том числе Куриниш-хан (XVII век); Медресе Мухаммед-Амин-хана (XIX век), минарет Ислам Ходжа; Комплекс Палван-Кари, Абд Аль Бобо (XVIII век), Медресе Рафанек, Мухаммед Рахим Хан (XIX век).
Обед. <br>
                                -Достопримечательности Хивы: медресе Мазари Шариф, Хейвак (X век), мавзолей Уч Авлиели («три святых»), Джума-мечеть (Пятничная мечеть) (XVIII век), мавзолей Пахлаван Махмуда, площадь Таш-Хаули ( «каменный двор»), медресе Алла-Кули-хана (XVIII век). <br>
                                -Ужин.
                            </span>
                        </li>
                        <li class="sayohat-kunlar">
                            <span>3-День</span>
                            <span>
                                Дорога до Нукуса 3 часов
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--------------- FOOTER Section ----------------->
    @include('inc.footerru')
    <script src="Js/script.js"></script>
</body>

</html>