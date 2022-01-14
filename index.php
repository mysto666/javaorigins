<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>


    <link rel="stylesheet" href="assets/css/style.css">

    <title>JO&#169;</title>
</head>

<body>

    <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bx-chevron-up scrolltop__icon'></i>
    </a>

    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="#" class="nav__logo">JAVA ORIGINS</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#team" class="nav__link">Team</a></li>
                    <li class="nav__item"><a href="#catalog" class="nav__link">Catalog</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact us</a></li>

                    <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    <?php
                    session_start();
                    error_reporting(0);
                    if ($_SESSION['level'] == "") {
                    ?>
                        <li class="nav__item">
                            <a href="login.php" class="nav__link">Login</a>
                        </li>

                    <?php
                    } else {

                    ?>
                        <li class="nav__item">
                            <a href="logout.php" class="nav__link" style="color:crimson">Logout</a>
                        </li>
                    <?php
                    }

                    ?>

                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <!--========== HOME ==========-->
        <section class="home" id="home">
            <div class="home__container bd-container bd-grid">
                <div class="home__data">
                    <h1 class="home__title">White Tigers</h1>
                    <h2 class="home__subtitle">Try the new catalog of <br> the month.</h2>
                    <a href="#" class="button">View Catalog</a>
                </div>

                <img src="assets/img/homey.png" alt="" class="home__img">
            </div>
        </section>

        <!--========== ABOUT ==========-->
        <section class="about section bd-container" id="about">
            <div class="about__container  bd-grid">
                <div class="about__data">
                    <span class="section-subtitle about__initial">About us</span>
                    <h2 class="section-title about__initial">Looking for <br> the best products?</h2>
                    <p class="about__description">We made the best t-shirt in the entire city, with excellent customer service and at the best price, visit us.</p>
                    <a href="#" class="button">Read More</a>
                </div>

                <img src="assets/img/Stiker.png" alt="" class="about__img">
            </div>
        </section>

        <!--========== TEAMS ==========-->
        <section class="team section bd-container" id="team">
            <span class="section-subtitle">Team</span>
            <h2 class="section-title">Our amazing Teams</h2>

            <div class="team__container  bd-grid">
                <?php
                include("config.php");
                $sql1 = "SELECT * FROM team";
                $hasil1 = mysqli_query($conn, $sql1) or exit("Error query: <b>" . $sql1 . "</b>.");
                while ($data1 = mysqli_fetch_assoc($hasil1)) {
                ?>
                    <div class="team__content">
                        <img src="assets/team/<?php echo $data1['gambar'] ?>" alt="" class="team__img">
                        <h3 class="team__title"><?php echo $data1['nama'] ?></h3>
                        <p class="team__description"><?php echo $data1['tugas'] ?></p>
                    </div>
                <?php }
                mysqli_close($conn);
                ?>


            </div>
        </section>

        <!--========== CATALOG ==========-->
        <section class="catalog section bd-container" id="catalog">
            <span class="section-subtitle">Special Offer!!!</span>
            <h2 class="section-title">New Beginnings</h2>

            <div class="catalog__container bd-grid">
                <?php
                include("config.php");
                $sql = "SELECT * FROM katalog";
                $hasil = mysqli_query($conn, $sql) or exit("Error query: <b>" . $sql . "</b>.");
                while ($data = mysqli_fetch_assoc($hasil)) {
                ?>
                    <div class="catalog__content">
                        <img src="assets/katalog/<?php echo $data['gambar'] ?>" alt="" class="catalog__img">
                        <h3 class="catalog__name"><?php echo $data['nama'] ?></h3>
                        <span class="catalog__preci"><?php echo $data['harga'] ?></span>
                        <a href="#" class="button catalog__button"><i class='bx bx-cart-alt'></i></a>
                    </div>
                <?php }
                mysqli_close($conn);
                ?>
            </div>
        </section>

        <!--===== APP =======-->
        <section class="app section bd-container">
            <div class="app__container bd-grid">
                <div class="app__data">
                    <span class="section-subtitle app__initial">App</span>
                    <h2 class="section-title app__initial">App is available</h2>
                    <p class="app__description">Find our application and download it.</p>
                    <div class="app__stores">
                        <a href="#"><img src="assets/img/app1.png" alt="" class="app__store"></a>
                        <a href="#"><img src="assets/img/app2.png" alt="" class="app__store"></a>
                    </div>
                </div>

                <img src="assets/img/app.png" alt="" class="app__img">
            </div>
        </section>

        <!--========== CONTACT US ==========-->
        <section class="contact section bd-container" id="contact">
            <div class="contact__container bd-grid">
                <div class="contact__data">
                    <span class="section-subtitle contact__initial">Let's talk</span>
                    <h2 class="section-title contact__initial">Contact us</h2>
                    <p class="contact__description">Do you have a question for Java Origins? Or would you like to send us feedback? Please contact us using the contact form or email us directly javaorigins47@gmail.com. We will get back to you within the next 24 hours.</p>
                </div>

                <div class="contact__button">
                    <a href="#" class="button">Contact us now</a>
                </div>
            </div>
        </section>
    </main>

    <!--========== FOOTER ==========-->
    <footer class="footer section bd-container">
        <div class="footer__container bd-grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">JAVA ORIGINS</a>
                <span class="footer__description">Clothing Brand</span>
                <div>
                    <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                    <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Useful Links</h3>
                <ul>
                    <li><a href="#" class="footer__link">Home</a></li>
                    <li><a href="#" class="footer__link">About</a></li>
                    <li><a href="#" class="footer__link">Team</a></li>
                    <li><a href="#" class="footer__link">Catalog</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Information</h3>
                <ul>
                    <li><a href="#" class="footer__link">Event</a></li>
                    <li><a href="#" class="footer__link">Contact us</a></li>
                    <li><a href="#" class="footer__link">Privacy policy</a></li>
                    <li><a href="#" class="footer__link">Terms of services</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Adress</h3>
                <ul>
                    <li>Klaten</li>
                    <li>Pedan 57468</li>
                    <li>(+62) 812-2905-4077</li>
                    <li>javaorigins47@email.com</li>
                </ul>
            </div>
        </div>

        <p class="footer__copy">&#169; 2022 Java Origins. All right reserved</p>
    </footer>
    <script src="https://unpkg.com/scrollreveal"></script>


    <script src="assets/js/main.js"></script>
</body>

</html>