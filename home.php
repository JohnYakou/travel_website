<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- HEADER SECTION START -->
    <section class="header">
        <a href="home php" class="logo">travel.</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- HEADER SECTION END -->

    <!-- HOME SECTION START -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/home-1.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-2.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-3.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- HOME SECTION END -->

    <!-- SERVICES SECTION START -->
    <section class="services">
        <h1 class="heading-title">our services</h1>

        <div class="box-container">
            <div class="box">
                <img src="images/flaticon-mountain.png" alt="mountain icon">
                <h3>adventure</h3>
            </div>

            <div class="box">
                <img src="images/flaticon-map.png" alt="map icon">
                <h3>tour guide</h3>
            </div>

            <div class="box">
                <img src="images/flaticon-trekking.png" alt="trekking icon">
                <h3>trekking</h3>
            </div>

            <div class="box">
                <img src="images/flaticon-fire.png" alt="fire icon">
                <h3>camp fire</h3>
            </div>

            <div class="box">
                <img src="images/flaticon-off-road.png" alt="mountain icon">
                <h3>off road</h3>
            </div>

            <div class="box">
                <img src="images/flaticon-camping.png" alt="camping icon">
                <h3>camping</h3>
            </div>
        </div>
    </section>
    <!-- SERVICES SECTION END -->

    <!-- HOME ABOUT SECTION START -->
    <section class="home-about">
        <div class="image">
            <img src="images/home-about.jpg" alt="home about">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <!-- HOME ABOUT SECTION END -->

    <!-- HOME PACKAGES SECTION START -->
    <section class="home-packages">
        <h1 class="heading-title">our packages</h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/home-package-1.jpg" alt="taj mahal">
                </div>

                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/home-package-2.jpg" alt="rome colosseum">
                </div>

                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/home-package-3.jpg" alt="great wall of china">
                </div>

                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
        </div>

        <div class="load-more"><a href="package.php" class="btn">load more</a></div>
    </section>
    <!-- HOME PACKAGES SECTION END -->

    <!-- HOME OFFER SECTION START -->
    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque exercitationem ad sequi vero blanditiis quibusdam dolorum tempore similique consectetur ullam?</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </section>


    <!-- HOME OFFER SECTION END -->

    <!-- FOOTER SECTION START -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i>  home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i>  about</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i>  package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i>  book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +33 7 23 45 67 89</a>
                <a href="#"> <i class="fas fa-phone"></i> +33 7 89 67 45 23</a>
                <a href="#"> <i class="fas fa-envelope"></i> jyakou@gmx.fr</a>
                <a href="#"> <i class="fas fa-map"></i> Paris, France</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook"></i> facebook</a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
            </div>
        </div>

        <div class="credit">created by <span>mr. john yakou</span> | all rights reserved</div>
    </section>
    <!-- FOOTER SECTION END -->





<!-- SWIPER CSS JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!-- JS -->
<script src="js/script.js"></script>
</body>
</html>