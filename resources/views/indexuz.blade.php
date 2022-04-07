
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
    @include('inc.headuz')

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

    <!--------------- SERVICES Section ----------------->
    <section class="services" id="services">
        <div class="container">
            <div class="section-row">
                <div class="section-title">
                    <h2>O'z shahringizni kashf eting</h2>
                    <span></span>
                </div>
                <div class="services-discr">
                    <h3>Bizni tanlash uchun 3 ta sabab</h3>
                    <div class="accordion">
                        <div class="accordion-item">
                            <button class="accordion-header">
                                Ajoyib sayohatlar <i class='bx bx-down-arrow'></i>
                            </button>
                            <div class="accordion-body">
                                Biz haqiqiy Qoraqalpogʼistonni, uning goʼzal qadimiy shaharlarini va ajoyib joylarini
                                namoyish etadigan noyob sayohatlarni taklif etamiz.
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-header">
                                Unitilmas hissiyotlar <i class='bx bx-down-arrow'></i>
                            </button>
                            <div class="accordion-body">
                                Koʼchmanchilar va bosqinchilar tez-tez tashrif buyuradigan Ipak yoʼli shaharlari,
                                qadimgi Xorazm va uning oʼrnini egallagan Oʼrta asrlar Xorazmining yoʼq boʼlib ketgan
                                sivilizatsiyasi qoldirgan meʼmoriy meros bilan tanishib chiqing, bu koʼplab buyuk
                                olimlar, shoirlarni tugʼdirdi. , meʼmorlar, suverenlar va qoʼmondonlar. Sizni qadimiy
                                qalʼalar va unutilmas landshaftlar kutmoqda: serhosil vodiylardan ochiq dashtlar va
                                cheksiz choʼllarga qadar...
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-header">
                                Biz sizning xizmatingizga tayyorligimiz <i class='bx bx-down-arrow'></i>
                            </button>
                            <div class="accordion-body">
                                Biz har doim sizning har qanday savolingizga javob berishga, marshrutlarni yaratishda
                                yordam berishga va sizning qulayligingiz uchun eng yaxshi sharoitlarni topishga har doim
                                xursandmiz.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--------------- ABOUT Section ----------------->
    <section class="about" id="about">
        <div class="container">
            <div class="section-row">
                <div class="about-img for-uz">
                    <img src="assets/imgs/About-img.webp" alt="about-img">
                </div>
                <div class="about-text">
                    <span>Biz Haqimizda</span>
                    <h2>Eng yaxshi sayohat takliflarini oling</h2>
                    <p>
                        Bizning turoperatorlarimiz sizning qiziqishlaringiz va soʼrovlaringizni inobatga olgan holda
                        sizga mos turni tanlashda yoki individual dastur yaratishda yordam beradi.
                        Oʼz sohasidagi mutaxassislarning doʼstona jamoasi tafsilotlar, samaradorlik va masʼuliyatga
                        eʼtibor bilan ajralib turadi. Barcha xizmatlar oldindan tayyorlanadi va ekskursiyani tashkil
                        qilishdan tashvishlanishingizga hojat yoʼq.
                    </p>
                    <p>
                        Kompaniyaning asosiy ustuvor yoʼnalishi har bir sayyohning qulayligi va xavfsizligini
                        taʼminlashdir. Sayohatingiz oson va eng yaxshi tajribaga boy boʼlishi uchun biz sizning
                        taʼtilingiz sifatini nazorat qilamiz.
                    </p>
                    <p>
                        Bizning Qoraqalpogʼiston boʼylab sayohatlarimizda siz nafaqat sayyohlar yetib borishi mumkin
                        boʼlgan chekka burchaklarga tashrif buyurasiz. Orol dengizining qurigan qirgʼogʼi, Xorazm
                        shohligining mudofaa qalʼalari zanjiri, Xivaning maftunkor koʼchalari - bularning barchasi sizni
                        hayratga soladi va sayohatingizda oʼchmas taassurot qoldiradi. Milliy taomlarning barcha
                        taomlarini tatib koʼrishingiz va mintaqaning madaniy merosi bilan tanishishingizga sharoit
                        yaratamiz.
                    </p>
                    <p>
                        <a href="#contact" class="btn btn-primary py-3 px-4 my-2">Band qilish</a>
                        <a href="#contact" class="btn btn-white py-3 px-4 my-2">Aloqa</a>
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
                    <h2>Bizning sayohat joylar</h2>
                    <span></span>
                </div>

                <div class="location-box">
                    <div class="location-box-card">
                        <div class="card">
                            
                            <img class="card-img-top location-img"
                                src="samar.jpg"
                                alt="image"> 
                            <div class="card-body">
                                <a href="/samaruz">
                                    SAMARQAND
                                </a><br>
                                <span>5 KUNLIK TUR</span>
                                <p class="card-text">
                                SAMARQAND
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
                                <a href="/xivauz">
                                    BUXORO
                                </a><br><br>
                                <span>3 KUNLIK TUR</span>
                                    <p class="card-text">
                                    BUXORO
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
                                <a href="/araluz">
                                    ARAL
                                </a><br><br>
                                <span>2 KUNLIK TUR</span>
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
                                <a href="/buxarauz">
                                    XIVA
                                </a><br><br>
                                <span>3 KUNLIK TUR</span>
                                <p class="card-text">
                                    XIVA
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
                                <a href="/turuz">
                                TURCIYA
                                </a><br><br>
                                <span>7 KUNLIK TUR</span>
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
                                <a href="/muynaquz">
                                MUYNAK
                                </a><br><br>
                                <span>3 KUNLIK TUR</span>
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
                                <span>7 KUNLIK TUR</span>
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
                                <span>9 KUNLIK TUR</span>
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
                    <h2 class="contact-h2">Biz bilan aloqa</h2>

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
                    <button class="submit">To'lash</button>
                    </form>   
                </div>
            </div>
        </div>
    </section>

    <!--------------- FOOTER Section ----------------->
@include('inc.footeruz')

    <script src="Js/script.js"></script>

</body>

</html>