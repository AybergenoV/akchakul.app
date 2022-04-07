<!DOCTYPE html>
<html lang="uz">

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
   @include('inc.headen')

    <!--------------- HOME Section ----------------->
    <section class="home bg-dark" id="home">
        <div class="container">
            <div class="hero-sec text-white">
                <div>
                    <h1>AKCHAKUL TRAVEL</h1>
                    <h3>Start your adventure to Uzbekistan</h3>
                    <ul class="hero-icons">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i></i></a></li>
                        <li><a href="#"><i class="fa fa-handshake-o" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-ravelry" aria-hidden="true"></i></a></li>
                    </ul>
                    <a class="btns" href="#">Know More</a>
                </div>
            </div>
            <div class="bottom-anim">
                <ul class="bottom-icons">
                    <li><a href="#"><i class='bx bxl-telegram'></i></a></li>
                    <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                    <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                    <li><a href="#"><i class='bx bx-envelope'></i></a></li>
                </ul>
            </div>
        </div>
    </section>

    <!--------------- SERVICES Section ----------------->
    <section class="services" id="services">
        <div class="container">
            <div class="section-row">
                <div class="section-title">
                    <h2>Discover Your City</h2>
                    <span></span>
                </div>
                <div class="services-discr">
                    <h3>3 Reasons to choose Us</h3>
                    <div class="accordion">
                        <div class="accordion-item">
                            <button class="accordion-header">
                                Amazing travels <i class='bx bx-down-arrow'></i>
                            </button>
                            <div class="accordion-body">
                                We offer unique tours that demonstrate the real Karakalpakstan, its beautiful ancient cities and amazing sights.
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-header">
                                Unforgettable feelings <i class='bx bx-down-arrow'></i>
                            </button>
                            <div class="accordion-body">
                                Explore the cities of the Silk Road which were often visited by nomads and conquerors in the past, the architectural heritage left by the disappeared civilization of Ancient Khorezm and the Khorezm of the Middle Ages, which gave birth to many great scientists, poets, architects, sovereigns and commanders. Ancient fortresses and unforgettable landscapes are waiting for you...
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-header">
                                We are ready for your service <i class='bx bx-down-arrow'></i>
                            </button>
                            <div class="accordion-body">
                                We are always happy to answer any of your questions, help to develop itineraty and identify the best conditions for your comfort.
                            </div>
                        </div>
                    </div>

                    <!-- <a class="gradient-btn" href="#"> Contact Us <i class='bx bxs-arrow-from-left'></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!--------------- ABOUT Section ----------------->
    <section class="about" id="about">
        <div class="container">
            <div class="section-row">
                <div class="about-img">
                    <img src="assets/imgs/About-img.webp" alt="about-img">
                </div>
                <div class="about-text">
                    <span>About Us</span>
                    <h2>Get Best Travel Deals</h2>
                    <p>
                        Our tour managers will help you choose the best tour or draw up an individual program considering your interests and requests.
                        The friendly team of professionals pays attention to detail, and works with efficiency and responsibility. All itinerary will be prepared in advance, and you will not have to worry about organizing the tour.
                    </p>
                    <p>
                        Our major priority is to ensure the comfort and safety of every tourist. We take responsibility of your holiday's comfort to make you enjoy the trip and get the best experience.
                    </p>
                    <p>
                        You will visit remote sights, which can only be reached by sophisticated tourists in our tours of Karakalpakstan. The dried up shore of the Aral Sea, the chain of defensive fortresses of the Khorezm kingdom, the mesmerizing streets of Khiva — all this will amaze you and leave an indelible impression on your trip. And we will make sure that you try all the dishes of the national cuisine and get acquainted with the cultural heritage of the region.
                    </p>
                    <p>
                        <a href="#contact" class="btn btn-primary py-3 px-4 my-2">Book now</a>
                        <a href="#contact" class="btn btn-white py-3 px-4 my-2">Contact us</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--------------- LOCATION Section ----------------->
    <section class="location" id="location">
        <div class="container">
            <div class="section-row">
                <div class="section-title">
                    <h2>Our tours</h2>
                    <span></span>
                </div>
                <div class="location-box">
                    <div class="location-box-card">
                        <div class="card">
                        <img class="card-img-top location-img"
                                src="samar.jpg"
                                alt="image">
                            <div class="card-body">
                                <a href="/samaren">
                                    SAMARKAND
                                </a><br><br>
                                <span>3 DAYS TOUR</span>
                                <p class="card-text">
                                SAMARKAND
                                </p>
                                <p class="card-text">
                                395 000
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="location-box">
                    <div class="location-box-card">
                        <div class="card">
                            <img class="card-img-top location-img"
                                src="https://www.thediaryofanomad.com/wp-content/uploads/2020/04/khiva-uzbekistan-cafe-terrassa-restaurant.jpg"
                                alt="image">
                            <div class="card-body">
                                <a href="/xivaen">
                                    BUKHORO
                                </a><br><br>
                                <span>3 DAYS TOUR</span>
                                <p class="card-text">
                                BUKHORO
                                </p>
                                <p class="card-text">
                                230 000
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="location-box">
                    <div class="location-box-card">
                        <div class="card">
                            <img class="card-img-top location-img"
                                src="assets/imgs/muynak.jpg"
                                alt="image">
                            <div class="card-body">
                                <a href="/aralen">
                                    ARAL
                                </a><br><br>
                                <span>3 DAYS TOUR</span>
                                <p class="card-text">
                                    ARAL
                                </p>
                                <p class="card-text">
                                90 000
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="location-box">
                    <div class="location-box-card">
                        <div class="card">
                            <img class="card-img-top location-img"
                            src="https://uzbekistan.travel/storage/app/media/nargiza/cropped-images/cropped-images/5-0-0-0-0-1583403867-0-0-0-0-1583403914.jpg"
                            alt="image">
                            <div class="card-body">
                                <a href="/buxaraen">
                                    KHIVA
                                </a><br><br>
                                <span>10 DAYS TOUR</span>
                                <p class="card-text">
                                KHIVA
                                </p>
                                <p class="card-text">
                                100 000
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="location-box">
                    <div class="location-box-card">
                        <div class="card">
                            <img class="card-img-top location-img"
                            src="tur.jpg"
                            alt="image">
                            <div class="card-body">
                                <a href="/turen">
                                    TURCIYA
                                </a><br><br>
                                <span>7 DAYS TOUR</span>
                                <p class="card-text">
                                TURCIYA
                                </p>
                                <p class="card-text">
                                5 400 000
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="location-box">
                    <div class="location-box-card">
                        <div class="card">
                            <img class="card-img-top location-img"
                            src="muy.jpg"
                            alt="image">
                            <div class="card-body">
                                <a href="/muynaqen">
                                    MUYNAK
                                </a><br><br>
                                <span>10 DAYS TOUR</span>
                                <p class="card-text">
                                MUYNAK
                                </p>
                                <p class="card-text">
                                75 000
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- <div class="location-box">
                    <div class="location-box-card">
                        <div class="card">
                            <img class="card-img-top location-img"
                                src="https://media-cdn.tripadvisor.com/media/photo-c/768x250/07/b5/9a/31/khan-palace.jpg"
                                alt="image">
                            <div class="card-body">
                                <a href="tourpage.html">
                                    KHIVA
                                </a><br><br>
                                <span>7 DAYS TOUR</span>
                                <p class="card-text">
                                    KOKAND
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="location-box">
                    <div class="location-box-card">
                        <div class="card">
                            <img class="card-img-top location-img"
                            src="https://www.thediaryofanomad.com/wp-content/uploads/2020/02/samarkand-the-diary-of-a-nomad-facebook.jpg"
                            alt="image">
                            <div class="card-body">
                                <a href="tourpage.html">
                                    KHIVA
                                </a><br><br>
                                <span>9 DAYS TOUR</span>
                                <p class="card-text">
                                    SAMARKHAND
                                </p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!--------------- CONTACT Section ----------------->
    <section class="contact" id="contact">
        <div class="containers">
            <div class="contact-box">
                <div class="left"></div>
                <div class="right">
                    <h2 class="contact-h2">Contact us</h2>
                    <form action="/pay" method="post">
                    @csrf
                    <input type="text" class="field" name="name" placeholder="Name">
                    <input type="date" class="field" name="date" placeholder="Time">
                    <input type="text" class="field" name="phone" placeholder="Telephone">
                    <input type="text" class="field" name="number" placeholder="Number of travelers">
                    <select name="place">
                        <option>SAMARQAND</option>
                        <option>BUXORO</option>
                        <option>ARAL</option>
                        <option>XIVA</option>
                        <option>TURCIYA</option>
                        <option>MUYNAK</option>
                    </select>
                    <input type="hidden" name="return_url" value="{{env('APP_URL')}}"/>
                    <button class="submit">Pay Now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--------------- FOOTER Section ----------------->
@include('inc.footeren')

    <script src="Js/script.js"></script>
    <!-- <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->
</body>
</html>