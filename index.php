<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/logofitness.png" type="image/x-icon">

        <!--=============== REMIXICON ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
           
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Fitness</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav--logo">
                    <img src="assets/img/logofitness.png" alt="logo">FITNESS
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__items">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__items">
                            <a href="#program" class="nav__link">Program</a>
                        </li>
                        <li class="nav__items">
                            <a href="#choose" class="nav__link">Choose Us</a>
                        </li>
                        <li class="nav__items">
                            <a href="#pricing" class="nav__link">Pricing</a>
                        </li>
                        <a class="nav--user" >
                            <img src="assets/img/R.png" class="user-pic" onclick="toggleMenu()">
                        </a>
                        <div class="sub-menu-wrap" id="subMenu">
                            <div class="sub-menu">
                                <div class="user-info">
                                    <img src="assets/img/R.png">
                                    <h2>Name</h2>

                                </div>
                                <hr>
                                <a href="profile.php" class="sub-menu--link">
                                    <img src="assets/img/profile.png">
                                    <p>Edit profile</p>
                                    <span>></span>
                                </a>
                                <!-- <a href="#" class="sub-menu--link">
                                    <img src="assets/img/setting.png">
                                    <p>Settings & Privacy</p>
                                    <span>></span>
                                </a>
                                <a href="#" class="sub-menu--link">
                                    <img src="assets/img/help.png">
                                    <p>Help & Support</p>
                                    <span>></span>
                                </a> -->
                                <a href="login.php" class="sub-menu--link">
                                    <img src="assets/img/logout.png">
                                    <p>Logout</p>
                                    <span>></span>
                                </a>
                            </div>
                        </div>
                        <!-- <div class="nav__link">
                            <a href="login.html" class="button nav__button">
                                Sign Out
                            </a> 
                        </div> -->
                    </ul>
                    
               


                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>

                <!-- Toggle button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <div class="banner">
                <video src="assets/img/bg.mp4" autoplay muted loop type="mp4"></video>
            </div>
                <section class="home section" id="home">
                    <div class="home__container container grid">
                        <div class="home__data">
                            <h2 class="home__subtitle">MAKE YOUR</h2>
                            <h1 class="home__title">BODY SHAPE</h1>
                            <p class="home__description">
                                FITNESS is a revolutionary fitness program that will help you achieve your dream body shape.
                                 Our team of experts has carefully designed
                            </p>
                            <a href="session.php" class="button button__flex">
                                Sessions <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>

                        <div class="home__image">
                            <img src="assets/img/people.png" alt="home image" class="home__img">

                            
                            <div class="home__triangle home__triangle-3"></div>
                            <div class="home__triangle home__triangle-2"></div>
                            <div class="home__triangle home__triangle-1"></div>
                        </div>
                    </div>
                </section>
            

            <!--==================== LOGOS ====================-->
            <section class="logos section">
                <div class="logos__container container grid">
                    <img src="assets/img/logo1.png" alt="logo image" class="logos__img">
                    <img src="assets/img/logo2.png" alt="logo image" class="logos__img">
                    <img src="assets/img/logo3.png" alt="logo image" class="logos__img">
                    <img src="assets/img/logo4.png" alt="logo image" class="logos__img">
                </div>
            </section>

            <!--==================== PROGRAM ====================-->
            <section class="program section" id="program">
                <div class="container">
                    <div class="section__data">
                        <h2 class="section__subtitle">Our Program</h2>
                        <div class="section__titles">
                            <h1 class="section__title-border">BUILD YOUR</h1>
                            <h1 class="section__title">BEST BODY</h1>
                        </div>
                    </div>
                    <div class="program__container grid">
                        <article class="program__card">
                            <div class="program__shape">
                                <img src="assets/img/program1.png" alt="program image" class="proram__img">
                            </div>

                            <h3 class="program__title">Flex Muscle</h3>
                            <p class="program__description">
                                Creating tension that's temporarily making the muscle fibers smaller or contracted.
                            </p>
                            <a href="Flex_muscle.php" class="program__button">
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </article>
                        <article class="program__card">
                            <div class="program__shape">
                                <img src="assets/img/program2.png" alt="program image" class="proram__img">
                            </div>

                            <h3 class="program__title">Cardio Excercise</h3>
                            <p class="program__description">
                                Exercise your heart rate up and keeps it up for a prolonged period of time.
                            </p>
                            <a href="Cardio.php" class="program__button">
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </article>
                        <article class="program__card">
                            <div class="program__shape">
                                <img src="assets/img/program3.png" alt="program image" class="proram__img">
                            </div>

                            <h3 class="program__title">Basic Yoga</h3>
                            <p class="program__description">
                                Diaphragmatic this is the most common breathing technique you'll find in yoga.
                            </p>
                            <a href="Basic-Yoga.php" class="program__button">
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </article>
                        <article class="program__card">
                            <div class="program__shape">
                                <img src="assets/img/program4.png" alt="program image" class="proram__img">
                            </div>

                            <h3 class="program__title">Weight Lifting</h3>
                            <p class="program__description">
                                Attempts a maximum weight single lift of a barbell loaded with weight plates.
                            </p>
                            <a href="Weight-Lifting.php" class="program__button">
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </article>
                    </div>
                </div>
            </section>

            <!--==================== CHOOSE US ====================-->
            <section class="choose section" id="choose">
                <div class="choose__overflow">
                    <div class="choose__container container grid">
                        <div class="choose__content">
                            <div class="section__data">
                                <h2 class="section__subtitle">Best Reason</h2>
                                <div class="section__titles">
                                    <h1 class="section__title-border">WHY</h1>
                                    <h1 class="section__title">CHOOSE US ?</h1>
                                </div>
                            </div>
                            <p class="choose_description">
                                Choose your favorite class and start now. Remember the only bad workout is the one you didn't do.
                            </p>

                            <div class="choose__data">
                                <div class="choose__group">
                                    <h3 class="choose__number">200+</h3>
                                    <p class="choose__subtitle">Total Members</p>
                                </div>
                                <div class="choose__group">
                                    <h3 class="choose__number">50+</h3>
                                    <p class="choose__subtitle">Best trainers</p>
                                </div>
                                <div class="choose__group">
                                    <h3 class="choose__number">25+</h3>
                                    <p class="choose__subtitle">Programs</p>
                                </div>
                                <div class="choose__group">
                                    <h3 class="choose__number">100+</h3>
                                    <p class="choose__subtitle">Awards</p>
                                </div>

                            </div>
                        </div>
                        <div class="choose__images">
                            <img src="assets/img/choose-img.png" alt="choose image" class="choose__img">
                        
                            <div class="choose__triangle choose__triangle-1"></div>
                            <div class="choose__triangle choose__triangle-2"></div>
                            <div class="choose__triangle choose__triangle-3"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== PRICING ====================-->
            <section class="pricing section" id="pricing">
                <div class="container">
                    <div class="section__data">
                        <h2 class="section__subtitle">Pricing</h2>
                        <div class="section__title">
                            <h1 class="section__title-border">OUR</h1>
                            <h1 class="section__title">SPECIAL PLAN</h1>
                        </div>
                    </div>

                    <div class="pricing__container grid">
                        <div class="pricing__card" id="pricing1">
                            <header class="pricing__header">
                                <div class="pricing__shape">
                                    <img src="assets/img/pricing1.png" alt="pricing image" class="pricing__img">
                                </div>

                                <h1 class="pricing__title">FREE PACKAGE</h1>
                                <h2 class="pricing__number" id="price1">$0</h2>
                            </header>

                            <ul class="pricing__list">
                                <li class="pricing__items">
                                    <i class="ri-checkbox-circle-line"></i> Standard Workouts
                                </li>
                                <li class="pricing__items">
                                    <i class="ri-checkbox-circle-line"></i> 1 Week Sessions
                                </li>
                                <li class="pricing__items pricing__item-opacity">
                                    <i class="ri-checkbox-circle-line"></i> Music Support
                                </li>
                                <li class="pricing__items pricing__item-opacity">
                                    <i class="ri-checkbox-circle-line"></i> Access to Videos
                                </li>
                                <li class="pricing__items pricing__item-opacity">
                                    <i class="ri-checkbox-circle-line"></i> Premium Sessions
                                </li>
                            </ul>

                            
                            <button type="submit" class="button button__flex pricing__button" onclick="openPopup1()">Purchase Now<i class="ri-arrow-right-line"></i></button>
                    
                           
                            <div class="popup1" id="popup1">

                                <img src="assets/img/pricing1.png" alt="">
                                <i class="fas fa-times" onclick="closePopup1()"></i>
                                <h3>FREE PACKAGE</h3>
                                <ul class="pricing__list">
                                     <li class="pricing__items">
                                         <i class="ri-checkbox-circle-line"></i> Standard Workouts
                                     </li>
                                     <li class="pricing__items">
                                         <i class="ri-checkbox-circle-line"></i> 1 Week Sessions
                                     </li>
                                     <li class="pricing__items pricing__item-opacity">
                                         <i class="ri-checkbox-circle-line"></i> Music Support
                                     </li>
                                     <li class="pricing__items pricing__item-opacity">
                                         <i class="ri-checkbox-circle-line"></i> Access to Videos
                                     </li>
                                     <li class="pricing__items pricing__item-opacity">
                                         <i class="ri-checkbox-circle-line"></i> Premium Sessions
                                     </li>
                                 </ul>
             
                                 <div class="price">$0.00</div>
                                 <a href="#footer" class="button button__flex pricing__button" onclick="buyPopup1()">Buy</a>
                                 
                            </div>
            
                        </div>

                        <div class="pricing__card" id="pricing2">
                            <header class="pricing__header">
                                <div class="pricing__shape">
                                    <img src="assets/img/pricing2.png" alt="pricing image" class="pricing__img">
                                </div>

                                <h1 class="pricing__title">BASIC PACKAGE</h1>
                                <h2 class="pricing__number">$80</h2>
                            </header>

                            <ul class="pricing__list">
                                <li class="pricing__items">
                                    <i class="ri-checkbox-circle-line"></i> Standard Workouts
                                </li>
                                <li class="pricing__items">
                                    <i class="ri-checkbox-circle-line"></i> 1 Week Sessions
                                </li>
                                <li class="pricing__items">
                                    <i class="ri-checkbox-circle-line"></i> Music Support
                                </li>
                                <li class="pricing__items">
                                    <i class="ri-checkbox-circle-line"></i> Access to Videos
                                </li>
                                <li class="pricing__items pricing__item-opacity">
                                    <i class="ri-checkbox-circle-line"></i> Premium Sessions
                                </li>
                            </ul>

                    
                            <button type="submit" class="button button__flex pricing__button" onclick="openPopup2()">Purchase Now<i class="ri-arrow-right-line"></i></button>
                    
                           
                            <div class="popup2" id="popup2">

                                <img src="assets/img/pricing2.png" alt="">
                                <i class="fas fa-times" onclick="closePopup2()"></i>
                                <h3>BASIC PACKAGE</h3>
                                <ul class="pricing__list">
                                    <li class="pricing__items">
                                        <i class="ri-checkbox-circle-line"></i> Standard Workouts
                                    </li>
                                    <li class="pricing__items">
                                        <i class="ri-checkbox-circle-line"></i> 1 Week Sessions
                                    </li>
                                    <li class="pricing__items">
                                        <i class="ri-checkbox-circle-line"></i> Music Support
                                    </li>
                                    <li class="pricing__items">
                                        <i class="ri-checkbox-circle-line"></i> Access to Videos
                                    </li>
                                    <li class="pricing__items pricing__item-opacity">
                                        <i class="ri-checkbox-circle-line"></i> Premium Sessions
                                    </li>
                                </ul>
             
                                <div class="price">$80.00</div>
                                <a href="#footer" class="button button__flex pricing__button" onclick="buyPopup2()">Buy</a>
                                
                             
                            </div>
                        </div>

                        <div class="pricing__card" id="pricing3">

                            <header class="pricing__header">
                                <div class="pricing__shape">
                                    <img src="assets/img/pricing3.png" alt="pricing image" class="pricing__img">
                                    
                                </div>

                                <h1 class="pricing__title">PREMIUM PACKAGE</h1>
                                <h2 class="pricing__number">$100</h2>
                            </header>

                            <ul class="pricing__list">
                                <li class="pricing__items">
                                    <i class="ri-checkbox-circle-line"></i> Standard Workouts
                                <li class="pricing__items">
                                    <i class="ri-checkbox-circle-line"></i> 1 Week Sessions
                                </li>
                                <li class="pricing__items">
                                    <i class="ri-checkbox-circle-line"></i> Music Support
                                </li>
                                <li class="pricing__items">
                                    <i class="ri-checkbox-circle-line"></i> Access to Videos
                                </li>
                                <li class="pricing__items">
                                    <i class="ri-checkbox-circle-line"></i> Premium Sessions
                                </li>
                            </ul>

                            <button type="submit" class="button button__flex pricing__button" onclick="openPopup3()">Purchase Now<i class="ri-arrow-right-line"></i></button>
                    
                           
                            <div class="popup3" id="popup3">
                                <img src="assets/img/pricing3.png" alt="">
                                <i class="fas fa-times" onclick="closePopup3()"></i>
                                <h3>PREMIUM PACKAGE</h3>
                                <ul class="pricing__list">
                                    <li class="pricing__items">
                                        <i class="ri-checkbox-circle-line"></i> Standard Workouts
                                    <li class="pricing__items">
                                        <i class="ri-checkbox-circle-line"></i> 1 Week Sessions
                                    </li>
                                    <li class="pricing__items">
                                        <i class="ri-checkbox-circle-line"></i> Music Support
                                    </li>
                                    <li class="pricing__items">
                                        <i class="ri-checkbox-circle-line"></i> Access to Videos
                                    </li>
                                    <li class="pricing__items">
                                        <i class="ri-checkbox-circle-line"></i> Premium Sessions
                                    </li>
                                </ul>
                                
                                <div class="price">$100.00</div>
                                <a href="#footer" class="button button__flex pricing__button" onclick="buyPopup3()">Buy</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            

            <!--==================== CALCULATE ====================-->
            <section class="calculate section">
                <div class="calculate__container container grid">
                    <div class="calculate__content">
                        <div class="section__titles">
                            <h1 class="section__title-border">CALCULATE</h1>
                            <h1 class="section__title">YOUR BMI</h1>
                        </div>

                        <p class="calculate__description">
                            The body mass index (BMI) calculator calculates body mass index from your weight and height.
                        </p>

                        <form action="" class="calculate__form" id="calculate-form">
                            <div class="calculate__box">
                                <input type="number" placeholder="Height" class="calculate__input" id="calculate-cm">
                                <label for="" class="calculate__label">cm</label>
                            </div>
                            <div class="calculate__box">
                                <input type="number" placeholder="Weight" class="calculate__input" id="calculate-kg">
                                <label for="" class="calculate__label">kg</label>
                            </div>

                            <button type="submit" class="button button__flex">
                                Calculate Now <i class="ri-arrow-right-line"></i>
                            </button>
                        </form>

                        <p class="calculate__message" id="calculate-message"></p>
                    </div>

                    <img src="assets/img/calculate-img.png" alt="calculate image" class="calculate__img">
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section" id="footer">
            <div class="footer__container container grid">
                <div>
                    <!-- <a href="#" class="footer__logo">
                        <img src="assets/img/logofitness.png" alt="">
                    </a> -->
                    <p class="footer__description">
                        Subscribe for company <br> updates below.
                    
                    </p>
                    <form action="" class="footer__form" id="contact-form">
                        <input type="email" name="user_email" placeholder="Your Email" class="footer__input" id="contact-user">
                        <button type="submit" class="button">
                            Subscribe
                        </button>
                    </form>

                    <p class="footer__message" id="contact-message"></p>
                </div>

                <div class="footer__content">
                    <div>
                        <h3 class="footer__title">
                            SERVICES
                        </h3>
                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Flex Muscle</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Cardio Exercise</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Basic Yoga</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Weight Lifting</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">
                            PRICING
                        </h3>
                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Free</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Basic</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Premium</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">
                            COMPANY
                        </h3>
                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">About Us</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Careers</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Customers</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Partners</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="footer__group">
                    <ul class="footer__social">
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                            <i class="ri-facebook-circle-fill"></i>
                        </a>
                        <a href="https://www.twitter.com/" target="_blank" class="footer__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </ul>

                    <span class="footer__copy">
                        &#169; Copyright Fitness. All rights reserved
                    </span>
                </div>
            </div>
        </footer>

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line"></i>
        </a>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>

        <!--=============== EMAIL JS ===============-->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js" defer></script>
    </body>
</html>