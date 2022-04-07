
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
    @include('inc.headru')

    <!--------------- HOME Section ----------------->
    <section class="home bg-dark" id="home">
        <div class="container">
            <div class="hero-sec text-white">
                <div>
                    <h1>AKCHAKUL TRAVEL</h1>
                    <h3>Начни свое приключение в Узбекистане</h3>
                    <ul class="hero-icons">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i></i></a></li>
                        <li><a href="#"><i class="fa fa-handshake-o" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-ravelry" aria-hidden="true"></i></a></li>
                    </ul>
                    <a class="btns" href="#">Подробнее</a>
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
                    <h2>Откройте для себя свой город</h2>
                    <span></span>
                </div>
                <div class="services-discr">
                    <h3>3 Причины выбрать нас</h3>
                    <div class="accordion">
                        <div class="accordion-item">
                            <button class="accordion-header">
                                Удивительные путешествия <i class='bx bx-down-arrow'></i>
                            </button>
                            <div class="accordion-body">
                                Мы предлагаем уникальные туры, которые покажут настоящий Каракалпакстан, его прекрасные древние города и удивительные места.
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-header">
                                Незабываемые ощущения <i class='bx bx-down-arrow'></i>
                            </button>
                            <div class="accordion-body">
                                Познакомьтесь с городами Шелкового пути, которые часто посещали кочевники и завоеватели, архитектурное наследие, оставленное исчезнувшей цивилизацией Древнего Хорезма и сменившим его Хорезмом средних веков, который породил множество великих ученых, поэтов, зодчих, повелителей и полководцев. Вас ждут древние крепости и незабываемые пейзажи: от плодородных долин до открытых степей и бесконечных пустынь...
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-header">
                                Мы готовы к вашим услугам <i class='bx bx-down-arrow'></i>
                            </button>
                            <div class="accordion-body">
                                Мы всегда рады ответить на любые Ваши вопросы, помочь составить маршруты и подобрать лучшие условия для Вашего комфорта.
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
                <div class="about-img for-ru">
                    <img src="assets/imgs/About-img.webp" alt="about-img">
                </div>
                <div class="about-text">
                    <span>О нас</span>
                    <h2>Получите лучшие туристические предложения</h2>
                    <p>
                        Наши туроператоры помогут выбрать подходящий тур или составить индивидуальную программу учитывая Ваши интересы и запросы.
                        Дружный коллектив профессионалов своего дела отличается вниманием к деталям, оперативностью и ответственностью. Все услуги будут заранее подготовлены, и Вам не придется беспокоиться об организации тура.
                    </p>
                    <p>
                        Главный приоритет компании – это обеспечение комфортом и безопасностью каждого туриста. Мы контролируем качество Вашего отдыха, чтобы Ваша поездка была легкой и полной лучших впечатлений.
                    </p>
                    <p>
                        В наших турах по Каракалпакстану Вы посетите удаленные уголки, до которых добираются только искушенные туристы. Высохший берег Аральского моря, цепь оборонительных крепостей Хорезмского царства, завораживающие улочки Хивы – всё это поразит вас и оставит неизгладимое впечатление от поездки. А мы позаботимся о том, чтобы Вы попробовали все блюда национальной кухни и ознакомились с культурным наследием региона.
                    </p>
                    <p>
                        <a href="#contact" class="btn btn-primary py-3 px-4 my-2">Заказать сейчас</a>
                        <a href="#contact" class="btn btn-white py-3 px-4 my-2">Контакты</a>
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
                    <h2>Наши туры</h2>
                    <span></span>
                </div>
                <div class="location-box">
                    <div class="location-box-card">
                        <div class="card">
                        <img class="card-img-top location-img"
                                src="https://www.thediaryofanomad.com/wp-content/uploads/2020/04/khiva-uzbekistan-cafe-terrassa-restaurant.jpg"
                                alt="image">
                            <div class="card-body">
                                <a href="/xivaru">
                                БУХОРО
                                </a><br><br>
                                <span>3 ДНЕЙ ТУР</span>
                                <p class="card-text">
                                БУХОРО
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
                            src="samar.jpg"
                            alt="image">
                            <div class="card-body">
                                <a href="/samarru">
                                СAМAРҚAНД
                                </a><br><br>
                                <span>3 ДНЕЙ ТУР</span>
                                <p class="card-text">
                                СAМAРҚAНД
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
                                src="assets/imgs/muynak.jpg"
                                alt="image">
                            <div class="card-body">
                                <a href="/aralru">
                                AРAЛ
                                </a><br><br>
                                <span>3 ДНЕЙ ТУР</span>
                                <p class="card-text">
                                AРAЛ
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
                                <a href="/buxararu">
                                ХИВA
                                </a><br><br>
                                <span>3 ДНЕЙ ТУР</span>
                                <p class="card-text">
                                ХИВA
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
                                <a href="/turru">
                                ТУРCИЙA
                                </a><br><br>
                                <span>7 ДНЕЙ ТУР</span>
                                <p class="card-text">
                                ТУРCИЙA
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
                                <a href="/muynaqru">
                                МУЙНAК
                                </a><br><br>
                                <span>2 ДНЕЙ ТУР</span>
                                <p class="card-text">
                                МУЙНAК
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
                                src="https://www.thediaryofanomad.com/wp-content/uploads/2020/02/samarkand-the-diary-of-a-nomad-facebook.jpg"
                                alt="image">
                            <div class="card-body">
                                <a href="tourpage.html">
                                    KHIVA
                                </a><br><br>
                                <span>9 ДНЕЙ ТУР</span>
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
                    <h2 class="contact-h2">Связаться с нами</h2>

                    <form action="/pay" method="post">
                    @csrf
                    <input type="text" class="field" name="name" placeholder="Name">
                    <input type="date" class="field" name="date" placeholder="Time">
                    <input type="text" class="field" name="phone" placeholder="Telephone">
                    <input type="text" class="field" name="number" placeholder="Number of travelers">
                    <select name="place">
                        <option>МУЙНAК</option>
                        <option>СAМAРҚAНД</option>
                        <option>ХИВA</option>
                        <option>БУХОРО</option>
                        <option>AРAЛ</option>
                        <option>ТУРCИЙA</option>
                    </select>
                    <input type="hidden" name="return_url" value="{{env('APP_URL')}}"/>
                    <button class="submit">Оплатить сейчас</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--------------- FOOTER Section ----------------->
@include('inc.footerru')

    
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