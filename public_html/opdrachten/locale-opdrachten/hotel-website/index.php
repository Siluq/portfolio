<?php
    include('config/connect.php');
    include('assets/src/bookings_insert.php');
?>

<!doctype html>
<html class="no-js" lang="EN">

<head>
    <meta charset="utf-8">
    <title>Hotel Boekings Website</title>
    <meta name="description" content="Hotel site Exploore">
    <meta name="author" content="Sam Boesjes">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://kit.fontawesome.com/7a86b800a4.js" crossorigin="anonymous"></script>

    <meta name="theme-color" content="#fafafa">
</head>

<body>
    <a href="bookings/bookings.php"><button class="home">Database Bookings</button></a>
    <div class="container">
        <section id="start_adventure">
            <header>
                <div id="row-1">
                    <div class="col-3">
                        <i class="fas fa-phone"></i> +123 4567 8900
                    </div>
                    <div class="col-3">
                        <i class="fas fa-envelope"></i> free@psdfreebies.com
                    </div>
                    <div class="col-2"></div>
                    <div class="col-2">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-google-plus-g"></i>
                        <i class="fab fa-weebly"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                    <div class="col-1">
                        <i class="fas fa-user"></i> login
                    </div>
                    <div class="col-1">
                        <i class="fas fa-key"></i> sign up
                    </div>
                </div>
                <div class="splitter_bar"></div>
                <div id="row-2">
                    <div class="logo-slogan">
                        <img src="assets/img/Exploore.png" alt="Explore">
                        Creative tag line here
                    </div>
                    <div class="header-nav active"><a href="#">Home</a></div>
                    <div class="header-nav"><a href="#">Destination</a></div>
                    <div class="header-nav"><a href="#">Discount</a></div>
                    <div class="header-nav"><a href="#">About</a></div>
                    <div class="header-nav"><a href="#">Blog</a></div>
                    <div class="header-nav"><a href="#">Contact</a></div>
                </div>
            </header>
            <h1>Start Your Greatest</h1>
            <h2>Adventure with us!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut<br> labore
                et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </section>
        <section id="booking">
            <h2>Find Hotels</h2>
            <form method="post" id="input_fields">
                <div class="input_field">
                    <label for="where">where</label>
                    <input type="text" class="query" name="where" placeholder="Location" required>
                </div>
                <div class="input_field">
                    <label for="check_in">Check in</label>
                    <input type="date" name="check_in" placeholder="DD-MM-YYYY" required>
                </div>
                <div class="input_field">
                    <label for="check_out">Check out</label>
                    <input type="date" name="check_out" placeholder="DD-MM-YYYY" required>
                </div>
                <div class="input_field">
                    <label for="adult">Adult</label>
                    <input type="text" name="adult" placeholder="00" required>
                </div>
                <div class="input_field">
                    <label for="child">Child</label>
                    <input type="text" name="child" placeholder="00">
                </div>
                <div class="input_field hidden">
                    <input type="text" id="hidden_field" name="id_field">
                </div>
                <div class="input_field">
                    <a href="#" onclick="document.getElementById('input_fields').submit()" class="btn" type="submit"
                        name="submit">Click here</a>
                </div>
            </form>
        </section>
        <section id="trusted-since">
            <div class="col-6 trusted_background"></div>
            <div class="col-6 trusted_right">
                <h2>Trusted Since 2001<br>We Are Exploore</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                </p>
                <ul>
                    <li><i class="fas fa-check-circle col-1"></i>
                        <p class="col-11">Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit. Sed orci diam.
                        </p>
                    </li>
                    <li><i class="fas fa-check-circle col-1"></i>
                        <p class="col-11">Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit. Sed orci diam.
                        </p>
                    </li>
                    <li><i class="fas fa-check-circle col-1"></i>
                        <p class="col-11">Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit. Sed orci diam.
                        </p>
                    </li>
                </ul>
            </div>
        </section>
        <section id="services">
            <h2>Our Best Services<br>We are Travel Agent</h2>
            <div id="services_content">
                <ul class="col-6">
                    <li>
                        <i class="fas fa-plane"></i>
                        <div>
                            <h4>Lorem Ipsum Dolor Sit</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-landmark"></i>
                        <div>
                            <h4>Lorem Ipsum Dolor Sit</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-utensils"></i>
                        <div>
                            <h4>Lorem Ipsum Dolor Sit</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </li>
                </ul>
                <ul class="col-6">
                    <li>
                        <i class="fas fa-train"></i>
                        <div>
                            <h4>Lorem Ipsum Dolor Sit</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-bicycle"></i>
                        <div>
                            <h4>Lorem Ipsum Dolor Sit</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </li>
                    <li>
                        <i class="far fa-eye"></i>
                        <div>
                            <h4>Lorem Ipsum Dolor Sit</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section id="budget">
            <h2>Trusted Since 2001<br>We are Travle Agent</h2>
            <div class="cards">
                <div class="col-4 card">
                    <div class="card_top">
                        <i class="fas fa-car-alt"></i>
                        <h3>Low Budget Trip</h3>
                    </div>
                    <div class="card_middle">&#36;500</div>
                    <div class="card_bottom">
                        <ul>
                            <li><i class="fas fa-check-circle"></i> Lorem ipsum dolort</li>
                            <li><i class="fas fa-check-circle"></i> Sit amet consect</li>
                            <li><i class="fas fa-check-circle"></i> Eturadipiscing elit</li>
                            <li><i class="fas fa-check-circle"></i> Psum dolor</li>
                        </ul>
                    </div>
                </div>
                <div class="col-4 card">
                    <div class="card_top">
                        <i class="fas fa-train"></i>
                        <h3>Mid Budget Trip</h3>
                    </div>
                    <div class="card_middle">&#36;800</div>
                    <div class="card_bottom">
                        <ul>
                            <li><i class="fas fa-check-circle"></i> Lorem ipsum dolort</li>
                            <li><i class="fas fa-check-circle"></i> Sit amet consect</li>
                            <li><i class="fas fa-check-circle"></i> Eturadipiscing elit</li>
                            <li><i class="fas fa-check-circle"></i> Psum dolor</li>
                        </ul>
                    </div>
                </div>
                <div class="col-4 card">
                    <div class="card_top">
                        <i class="fas fa-plane"></i>
                        <h3>High Budget Trip</h3>
                    </div>
                    <div class="card_middle">&#36;1000</div>
                    <div class="card_bottom">
                        <ul>
                            <li><i class="fas fa-check-circle"></i> Lorem ipsum dolort</li>
                            <li><i class="fas fa-check-circle"></i> Sit amet consect</li>
                            <li><i class="fas fa-check-circle"></i> Eturadipiscing elit</li>
                            <li><i class="fas fa-check-circle"></i> Psum dolor</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="travle">
            <div id="travle_content">
                <img src="assets/img/travle.png" alt="surfer">
                <div id="travle_right">
                    <h2>Trusted Since 2001<br>We are Travle Agent</h2>
                    <div id="travle_block">
                        <div class="col-4"><i class="fas fa-landmark"></i>Hotel</div>
                        <div class="col-4 clip-path-arrow-right"><i class="fas fa-car-alt"></i>Cab</div>
                        <div class="col-4 clip-path-arrow-right travle_white-icon"><i class="fas fa-plane"></i>Flight
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla</p>
                    <a class="btn">Click here</a>
                </div>
            </div>
        </section>
        <section id="pack_and_go">
            <div id="pack_and_go_bg">
                <h2>Pack and Go<br>
                    Awsome Tours</h2>
                <ul>
                    <li>
                        <img src="assets/img/PackAndGo1.png" alt="">
                        <span class="days">7 Day + 6 Night</span>
                        <span class="cities">New York + Paris</span>
                        <span class="description">Lorem ipsum dolor sit, amet consectetur adipsicing elit.</span>
                        <span class="price">&dollar;600</span>
                        <a href="" class="btn" title="Book Now">Book Now</a>
                    </li>
                    <li><img src="assets/img/PackAndGo2.png" alt="">
                        <span class="days">7 Day + 6 Night</span>
                        <span class="cities">New York + Paris</span>
                        <span class="description">Lorem ipsum dolor sit, amet consectetur adipsicing elit.</span>
                        <span class="price">&dollar;600</span>
                        <a href="" class="btn" title="Book Now">Book Now</a></li>
                    <li><img src="assets/img/PackAndGo3.png" alt="">
                        <span class="days">7 Day + 6 Night</span>
                        <span class="cities">New York + Paris</span>
                        <span class="description">Lorem ipsum dolor sit, amet consectetur adipsicing elit.</span>
                        <span class="price">&dollar;600</span>
                        <a href="" class="btn" title="Book Now">Book Now</a></li>
                </ul>
            </div>
        </section>
        <section id="go_exploore">
            <h2>Trusted Since 2001<br>GO EXPLOORE</h2>
            <div id="exploore_cards">
                <div class="col-4">
                    <a href="#" class="btn">Click Here</a>
                    <img src="assets/img/go_exploore_1.png" alt="Train">
                    <h3>Lorem Ipsum Dolor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.</p>
                </div>
                <div class="col-4">
                    <a href="#" class="btn">Click Here</a>
                    <img src="assets/img/go_exploore_2.png" alt="Train">
                    <h3>Lorem Ipsum Dolor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.</p>
                </div>
                <div class="col-4">
                    <a href="#" class="btn">Click Here</a>
                    <img src="assets/img/go_exploore_3.png" alt="Train">
                    <h3>Lorem Ipsum Dolor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.</p>
                </div>
            </div>
        </section>
        <section id="highlight">
            <div id="highlight_box">
                <div id="highlight_box_content">
                    <h2>New York + Paris</h2>
                    <span>7 Day + 6 Night</span>
                    <ul>
                        <li class="col-4"><i class="fas fa-plane"></i>Flight</li>
                        <li class="col-4"><i class="fas fa-landmark"></i>Hotel</li>
                        <li class="col-4"><i class="fas fa-car-alt"></i>Transport</li>
                    </ul>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                    <div>
                        <span>&#36;1000</span>
                        <a href="#" class="btn">Book Now</a>
                    </div>
                </div>
            </div>
            <img src="assets/img/highlight_1.png" alt="highlight">
        </section>
        <section id="reviews">
            <h2>Customer Reviews<br>We are Travle Agent</h2>
            <p>”Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur.”</p>
            <ul>
                <li><i class="far fa-star"></i></li>
                <li><i class="far fa-star"></i></li>
                <li><i class="far fa-star"></i></li>
                <li><i class="far fa-star"></i></li>
                <li><i class="far fa-star"></i></li>
            </ul>
            <div id="reviews_user">
                <img class="col-4" src="assets/img/reviews_pf.png" alt="profile picture">
                <div class="col-8">
                    <h5>John Smith</h5>
                    <span>Solo Traveller</span>
                </div>
            </div>
        </section>
        <section id="contact">
            <h2>Start Your Journey<br>Contact Us</h2>
            <i class="fas fa-map-marker-alt"></i>
            <div id="contact_details">
                <ul>
                    <li class="col-4">
                        <i class="far fa-envelope"></i>
                        <div>
                            <span>Email</span>
                            <span>free@psdfreebies.com</span>
                            <span>free@psdfreebies.com</span>
                        </div>
                    </li>
                    <li class="col-4">
                        <i class="fas fa-mobile-alt"></i>
                        <div>
                            <span>Call Us!</span>
                            <span>+123 456 7890</span>
                            <span>+123 456 7890</span>
                        </div>
                    </li>
                    <li class="col-4">
                        <i class="fas fa-map-marked-alt"></i>
                        <div>
                            <span>Addres</span>
                            <span>123, Main Road, New City,</span>
                            <span>My Country 123456</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="contact_socials">
                <ul>
                    <li><i class="fab fa-facebook-f"></i></li>
                    <li><i class="fab fa-google-plus-g"></i></li>
                    <li><i class="fab fa-weebly"></i></li>
                    <li><i class="fab fa-linkedin-in"></i></li>
                    <li><i class="fab fa-youtube"></i></li>
                    <li><i class="fab fa-digg"></i></li>
                    <li><i class="fab fa-deviantart"></i></li>
                </ul>
            </div>
        </section>
        <footer>
            copyright <script>
                document.write(new Date().getFullYear());
            </script>, All Rights Reserved
        </footer>
    </div>

    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!-- Add your site or application content here -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/typehead.js/0.9.3/typeahead.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.8.0.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- <script>
    window.jQuery || document.write('<script src="assets/js/vendor/jquery-3.4.1.min.js"><\/script>');
  </script> -->
    <script>
        $(document).ready(function () {
            $('input.query').typeahead({
                name: 'where',
                remote: 'assets/src/query.php?query=%QUERY',
                valueKey: 'value',
                minLength: '3'
            }).on('typeahead:selected', function (event, selection) {
                $("#hidden_field").val(selection.hotel_id);
            });
        });
    </script>


    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function () {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-156321809-1', 'auto');
        ga('set', 'transport', 'beacon');
        ga('send', 'pageview');
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>