<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>HOH</title>
    <!-- =================== META =================== -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/img/favicon.png')); ?>">
    <!-- =================== STYLE =================== -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/slick.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap-grid.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/jquery.fancybox.css')); ?>">
</head>

<body id="home">
<!--================ PRELOADER ================-->
<div class="preloader-cover">
    <div id="cube-loader">
        <div class="caption">
            <div class="cube-loader">
                <div class="cube loader-1"></div>
                <div class="cube loader-2"></div>
                <div class="cube loader-4"></div>
                <div class="cube loader-3"></div>
            </div>
        </div>
    </div>
</div>
<!--============== PRELOADER END ==============-->

<!-- ================= HEADER ================= -->
<header class="header">
    <a href="#" class="nav-btn">
        <span></span>
        <span></span>
        <span></span>
    </a>
    <div class="top-panel">
        <!--<div class="container">
            <div class="header-left">
                <ul class="header-cont">
                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:18004886040">1-800-488-6040</a></li>
                    <li><i class="fa fa-clock-o" aria-hidden="true"></i>Mon - Fri: 8:00AM - 7:00PM | Sat - Sun: Closed</li>
                </ul>
            </div>
            <div class="header-right">
                <form class="search-form">
                    <input type="search" class="search-form__field" placeholder="Search" value="" name="s">
                    <button type="submit" class="search-form__submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
                <ul class="social-list">
                    <li><a target="_blank" href="https://www.facebook.com/rovadex"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="https://twitter.com/RovadexStudio"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/rovadex"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>-->
    </div>
    <div class="header-menu">
        <div class="container">
            <div class="header-logo">
                <a href="index-2.html" class="logo"><img src="<?php echo e(asset('assets/hohimages/hohlogo.png')); ?>" width="110px" alt="logo"></a>
            </div>
            <nav class="nav-menu">
                <ul class="nav-list">
                    <li class="dropdown">
                        <a href="#">Home </a>

                    </li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Features</a></li>
                   <!-- <li class="dropdown">
                        <a href="#">Pages <i class="fa fa-caret-down"></i></a>
                        <ul>
                            <li><a href="program.html">Program</a></li>
                            <li><a href="trainer.html">Trainer</a></li>
                        </ul>
                    </li>-->
                    <li><a href="blog.html">Register</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- =============== HEADER END =============== -->

<!-- ============ S-CROSSFIT-SLIDER ============ -->
<section class="s-crossfit-slider">
    <div class="crossfit-slider">
        <div class="crossfit-slide">
            <div class="crossfit-slider-effect effect-1">
                <div data-hover-only="true" class="scene">
                    <span class="scene-item" data-depth="0.2" style="background-image:
                        url(<?php echo e(asset('assets/hohimages/scene.jpg')); ?>)"></span>
                </div>
            </div>
            <div class="crossfit-slider-effect effect-2">
                <div data-hover-only="true" class="scene">
                    <span class="scene-item" data-depth="0.4" style="background-image: url(<?php echo e(asset('assets/hohimages/hikers.jpg')); ?>)"></span>
                </div>
            </div>
            <div class="crossfit-slide-bg" style="background-image: url(<?php echo e(asset('assets/hohimages/idanrehills.jpg')); ?>);"></div>
            <div class="container">
                <div class="crossfit-slide-cover">
                    <h2 class="title">push <span>yourself</span></h2>
                    <p>Maecenas consequat ex id lobortis venenatis.
                        Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut
                        , venenatis dapibus mi. Nunc venenatis sollicitudin nisl vel auctor.</p>
                </div>
            </div>
        </div>
        <div class="crossfit-slide">
            <div class="crossfit-slider-effect effect-1">
                <div data-hover-only="true" class="scene">
                    <span class="scene-item" data-depth="0.2" style="background-image: url(<?php echo e(asset('assets/hohimages/idanrehils.jpg')); ?>);"></span>
                </div>
            </div>
            <div class="crossfit-slider-effect effect-2">
                <div data-hover-only="true" class="scene">
                    <span class="scene-item" data-depth="0.4" style="background-image: url(<?php echo e(asset('assets/hohimages/smilegirls.jpg')); ?>);"></span>
                </div>
            </div>
            <div class="crossfit-slide-bg" style="background-image: url(<?php echo e(asset('assets/hohimages/sunrays.jpg')); ?>);"></div>
            <div class="container">
                <div class="crossfit-slide-cover">
                    <h2 class="title">push <span>yourself</span></h2>
                    <p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim.
                        Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus mi.
                        Nunc venenatis sollicitudin nisl vel auctor.</p>
                </div>
            </div>
        </div>
        <div class="crossfit-slide">
            <div class="crossfit-slider-effect effect-1">
                <div data-hover-only="true" class="scene">
                    <span class="scene-item" data-depth="0.2" style="background-image: url(<?php echo e(asset('assets/hohimages/hikers.jpg')); ?>);">

                    </span>
                </div>
            </div>
            <div class="crossfit-slider-effect effect-2">
                <div data-hover-only="true" class="scene">
                    <span class="scene-item" data-depth="0.4" style="background-image: url(<?php echo e(asset('assets/hohimages/yellow.jpg')); ?>);"></span>
                </div>
            </div>
            <div class="crossfit-slide-bg" style="background-image: url(<?php echo e(asset('assets/hohimages/yellow.jpg')); ?>);"></div>
            <div class="container">
                <div class="crossfit-slide-cover">
                    <h2 class="title">push <span>yourself</span></h2>
                    <p>Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi
                        dolor dolor, auctor tincidunt lorem ut, venenatis dapibus mi.
                        Nunc venenatis sollicitudin nisl vel auctor.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-navigation">
        <div class="container">
            <div class="slider-navigation-cover"></div>
        </div>
    </div>
</section>
<!-- ========== S-CROSSFIT-SLIDER END ========== -->

<!-- ================ S-CROSSFIT ================ -->
<section class="s-crossfit">
    <div class="container">
        <img src="assets/img/placeholder-all.png" data-src="assets/img/group-circle-2.svg" alt="img" class="crossfit-icon-1 rx-lazy">
        <img src="assets/img/placeholder-all.png" data-src="assets/img/line-red-1.svg" alt="img" class="crossfit-icon-2 rx-lazy">
        <img src="assets/img/placeholder-all.png" data-src="assets/img/tringle-about-top.svg" alt="img" class="crossfit-icon-3 rx-lazy">
        <h2 class="title-decor">Welcome To <span>HOH </span></h2>
        <p class="slogan">Maecenas consequat ex id lobortis venenatis. Mauris
            id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
        <div class="row">
            <div class="col-md-4 crossfit-col">
                <div class="crossfit-item">
                    <img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/serv-1.svg" alt="img">
                    <h3>Networking</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque laudantium, totam rem aperiam.</p>
                  <!--  <a class="btn" href="program.html">view Schedule</a>-->
                </div>
            </div>
            <div class="col-md-4 crossfit-col">
                <div class="crossfit-item">
                    <img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/serv-2.svg" alt="img">
                    <h3>Group Hiking</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit
                        voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>

                </div>
            </div>
            <div class="col-md-4 crossfit-col">
                <div class="crossfit-item">
                    <img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/serv-3.svg" alt="img">
                    <h3>Tour</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit

                        voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============== S-CROSSFIT END ============== -->

<!-- ============== S-OUR-PROGRAMS ============== -->
<section class="s-our-programs" style="background-image: url(<?php echo e(asset('assets/hohimages/idanrehills.jpg')); ?>);">
    <div class="mask"></div>
    <div class="our-programs-effect" style="background-image: url(assets/img/bg-programs.svg);"></div>
    <div class="container">
        <h2 class="title-decor">HOH <span>Features</span></h2>
        <p class="slogan">Maecenas consequat ex id lobortis venenatis. Mauris id erat
            enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
        <div class="row">
            <div class="col-sm-6 col-md-3 program-col">
                <div class="program-item">
                    <div class="program-item-front" style="background-image: url(<?php echo e(asset('assets/hohimages/workout.jpg')); ?>)">
                        <div class="program-item-inner">
                            <h3>WORK OUT</h3>
                        </div>
                    </div>
                    <div class="program-item-back" style="background-image:  url(<?php echo e(asset('assets/hohimages/smilegirls.jpg')); ?>)">
                        <div class="program-item-inner">
                            <h3>THRILLS</h3>
                            <a href="program.html" class="btn">More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 program-col">
                <div class="program-item">
                    <div class="program-item-front" style="background-image: url(<?php echo e(asset('assets/hohimages/Alltitude.jpg')); ?>) ">
                        <div class="program-item-inner">
                            <h3>SCENERY</h3>
                        </div>
                    </div>
                    <div class="program-item-back" style="background-image:  url(<?php echo e(asset('assets/hohimages/scene.jpg')); ?>)">
                        <div class="program-item-inner">
                            <h3>AMBIENCE</h3>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 program-col">
                <div class="program-item">
                    <div class="program-item-front" style="background-image:  url(<?php echo e(asset('assets/hohimages/games1.jpg')); ?>)">
                        <div class="program-item-inner">
                            <h3>GAMES</h3>
                        </div>
                    </div>
                    <div class="program-item-back" style="background-image:url(<?php echo e(asset('assets/hohimages/team2.jpg')); ?>) ">
                        <div class="program-item-inner">
                            <h3>SPORTS</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 program-col">
                <div class="program-item">
                    <div class="program-item-front" style="background-image:url(<?php echo e(asset('assets/hohimages/yellow.jpg')); ?>)">
                        <div class="program-item-inner">
                            <h3>ALTTITUDES</h3>
                        </div>
                    </div>
                    <div class="program-item-back" style="background-image: url(<?php echo e(asset('assets/hohimages/climb.jpg')); ?>)">
                        <div class="program-item-inner">
                            <h3>HEIGHTS</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- ============ S-CROSSFIT-BANNER ============ -->
<section class="s-crossfit-banner">
    <div class="crossfit-banner-left" style="background-image: url(<?php echo e(asset('assets/hohimages/sunboy.jpg')); ?>);"></div>
    <div class="crossfit-banner-right">
        <div class="text-top">Get ready !</div>
        <h2>Bon Fire</h2>
        <div class="text-bottom">Truest experience<a href="program.html"> of hiking</a></div>
        <a href="ivbadge.blade.php" class="btn">REGISTER</a>

    </div>
    <section class="s-counter" style="background-image: url(<?php echo e(asset('assets/img/bg-2.jpg')); ?>);">
        <div class="mask"></div>
        <div class="container">
            <h2 class="title-decor">Get <span>Vibed</span></h2>
            <p class="slogan">Hi GUYS!!!</p>
            <div id="clockdiv">
                <div class="clock-item">
                    <span class="days"></span>
                    <div class="smalltext">Days</div>
                </div>
                <div class="clock-item">
                    <span class="hours"></span>
                    <div class="smalltext">Hours</div>
                </div>
                <div class="clock-item">
                    <span class="minutes"></span>
                    <div class="smalltext">Minutes</div>
                </div>
                <div class="clock-item">
                    <span class="seconds"></span>
                    <div class="smalltext">Seconds</div>
                </div>
            </div>

        </div>

    </section>

</section>
<!-- ========== S-CROSSFIT-BANNER END ========== -->




 <!=========== HOH-FITNESS-GALLERY =========== -->
<section class="s-fitness-gallery">

    <div class="container">
        <h2 class="title-decor">Our <span>Gallery</span></h2>
        <p class="slogan">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim.</p>
        <div class="row-gallery">
            <div class="grid-gallery">
                <div class="grid-sizer"></div>
                <div class="gallery-item">
                    <a href="<?php echo e(asset('assets/hohimages/awele.jpg')); ?>" data-fancybox="gallery1">
                        <img src="<?php echo e(asset('assets/hohimages/awele.jpg')); ?>" alt="img">
                        <div class="gal-item">
                            <h4 class="title">Maecenas consequat</h4>
                            <p>Mauris id erat enim</p>
                        </div>
                    </a>
                </div>
                <div class="gallery-item">
                    <a href="<?php echo e(asset('assets/hohimages/team2.jpg')); ?>"  data-fancybox="gallery1">
                        <img src="<?php echo e(asset('assets/hohimages/team2.jpg')); ?>" alt="img">
                        <div class="gal-item">
                            <h4 class="title">dolor sit amet</h4>
                            <p>Mauris id erat enim</p>
                        </div>
                    </a>
                </div>
                <div class="gallery-item">
                    <a href="<?php echo e(asset('assets/hohimages/team.jpg')); ?>"  data-fancybox="gallery1">
                        <img src="<?php echo e(asset('assets/hohimages/team.jpg')); ?>" alt="img">
                        <div class="gal-item">
                            <h4 class="title">labore et dolore</h4>
                            <p>Mauris id erat enim</p>
                        </div>
                    </a>
                </div>
                <div class="gallery-item">
                    <a href="assets/hohimages/games1.jpg" data-fancybox="gallery1">
                        <img src="<?php echo e(asset('assets/hohimages/games1.jpg')); ?>" alt="img">
                        <div class="gal-item">
                            <h4 class="title">adipiscing elit</h4>
                            <p>Mauris id erat enim</p>
                        </div>
                    </a>
                </div>
                <div class="gallery-item">
                    <a href="assets/hohimages/backs.jpg" data-fancybox="gallery1">
                        <img src="<?php echo e(asset('assets/hohimages/backs.jpg')); ?>" alt="img">
                        <div class="gal-item">
                            <h4 class="title">ullamco laboris</h4>
                            <p>Ut enim ad minima veniam</p>
                        </div>
                    </a>
                </div>
                <div class="gallery-item">
                    <a href="assets/hohimages/climb.jpg" data-fancybox="gallery1">
                        <img src="<?php echo e(asset('assets/hohimages/climb.jpg')); ?>" alt="img">
                        <div class="gal-item">
                            <h4 class="title">sed do eiusmod</h4>
                            <p>Sunt in culpa qui</p>
                        </div>
                    </a>
                </div>
                <div class="gallery-item">
                    <a href="assets/hohimages/smilegirls.jpg" data-fancybox="gallery1">
                        <img src="<?php echo e(asset('assets/hohimages/smilegirls.jpg')); ?>" alt="img">
                        <div class="gal-item">
                            <h4 class="title">magna aliqua</h4>
                            <p>Voluptas sit aspernatur</p>
                        </div>
                    </a>
                </div>
                <div class="gallery-item">
                    <a href="assets/hohimages/yellow.jpg" data-fancybox="gallery1">
                        <img src="<?php echo e(asset('assets/hohimages/djsanti.jpg')); ?>" alt="img">
                        <div class="gal-item">
                            <h4 class="title">consectetur adipiscing</h4>
                            <p>Sint occaecat cupidatat</p>
                        </div>
                    </a>
                </div>
                <div class="gallery-item">
                    <a href="assets/hohimages/yellow.jpg" data-fancybox="gallery1">
                        <img src="<?php echo e(asset('assets/hohimages/awelefrnd.jpg')); ?>" alt="img">
                        <div class="gal-item">
                            <h4 class="title">lorem ipsum</h4>
                            <p>Maecenas consequat</p>
                        </div>
                    </a>
                </div>
                <div class="gallery-item">
                    <a href="assets/hohimages/djsanti.jpg" data-fancybox="gallery1">
                        <img src="<?php echo e(asset('assets/hohimages/djsanti.jpg')); ?>" alt="img">
                        <div class="gal-item">
                            <h4 class="title">quis nostrud</h4>
                            <p>Maecenas consequat</p>
                        </div>
                    </a>
                </div>
                <div class="gallery-item">
                    <a href="assets/hohimages/soldiers.jpg" data-fancybox="gallery1">
                        <img src="<?php echo e(asset('assets/hohimages/soldiers.jpg')); ?>" alt="img">
                        <div class="gal-item">
                            <h4 class="title">tempor incididunt</h4>
                            <p>Accusantium doloremque laud</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== S-FITNESS-GALLERY END =========== -->

<!-- ============== S-TESTIMONIALS ============== -->
<section class="s-testimonials" style="background-image: url(<?php echo e(asset('assets/hohimages/djsanti.jpg')); ?>);">
    <div class="mask"></div>
    <img class="testimonials-effect" src="assets/img/bg-testimonials.svg" alt="effect">
    <div class="container">
        <div class="testimonials-slider">
            <div class="testimonial-slide">
                <p>“Phasellus vestibulum nec dolor quis varius. Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit. Phasellus gravida magna sit amet
                    euismod lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit”</p>
                <img src="assets/img/testimonials-1.png" alt="img">
                <h3 class="name">Anna Piters</h3>
                <div class="prof">our client</div>
            </div>
            <div class="testimonial-slide">
                <p>“Phasellus vestibulum nec dolor quis varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida magna sit amet euismod lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit”</p>
                <img src="assets/img/testimonials-2.png" alt="img">
                <h3 class="name">Mark Klark</h3>
                <div class="prof">our client</div>
            </div>
            <div class="testimonial-slide">
                <p>“Phasellus vestibulum nec dolor quis varius. Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit. Phasellus gravida magna sit amet euismod lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit”</p>
                <img src="assets/img/testimonials-3.png" alt="img">
                <h3 class="name">Kat Smith</h3>
                <div class="prof">our client</div>
            </div>
        </div>
    </div>
</section>

<!-- ================ S-CONTACTS ================ -->
<section class="s-contacts" style="background-image: url(assets/img/bg-contacts.svg);">
    <div class="container">
        <h2 class="title-decor">Contact <span>Us</span></h2>
        <p class="slogan">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
        <div class="row">
            <div class="col-md-5 col-lg-4">
                <div class="contact-item">
                    <div class="contact-item-left">
                        <img src="assets/img/icon-1.svg" alt="img">
                        <h4>need help</h4>
                    </div>
                    <div class="contact-item-right">
                        <ul class="contact-item-list">
                            <li><a href="tel:18004886040">1-800-488-6040</a></li>
                            <li><a href="tel:18005784090">1-800-578-4090</a></li>
                        </ul>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-left">
                        <img src="assets/img/icon-2.svg" alt="img">
                        <h4>questions</h4>
                    </div>
                    <div class="contact-item-right">
                        <ul class="contact-item-list">
                            <li><a href="mailto:team@gmail.com">team@gmail.com</a></li>
                            <li><a href="mailto:help@gmail.com">help@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-left">
                        <img src="assets/img/icon-3.svg" alt="img">
                        <h4>address</h4>
                    </div>
                    <div class="contact-item-right">
                        <ul class="contact-item-list">
                            <li>8500, Lorem Street, Chicago, IL, 55030</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-8">
                <form id='contactform' action="https://fitmax-html.rovadex.com/assets/php/contact.php" name="contactform">
                    <ul class="form-cover">
                        <li class="inp-name">
                            <label>Name * (required)</label>
                            <input id="name" type="text" name="your-name">
                        </li>
                        <li class="inp-email">
                            <label>E-mail * (required)</label>
                            <input id="email" type="email" name="your-email">
                        </li>
                        <li class="inp-text">
                            <label>Message * (required)</label>
                            <textarea id="comments" name="your-text"></textarea>
                        </li>
                    </ul>
                    <div class="checkbox-wrap">
                        <div class="checkbox-cover">
                            <input type="checkbox">
                            <p>By using this form you agree with the storage and handling of your data by this website.</p>
                        </div>
                    </div>
                    <div class="btn-form-cover">
                        <button id="#submit" type="submit" class="btn">send comment</button>
                    </div>
                </form>
                <div id="message"></div>
            </div>
        </div>
    </div>
</section>
<!-- ============== S-CONTACTS-END ============== -->
<!-- ============ S-TESTIMONIALS END ============ -->

<!--================ RELATED POSTS ========
<section class="s-related-posts home-related-posts">
    <div class="container">
        <h2 class="title-decor">Latest <span>News</span></h2>
        <p class="slogan">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
        <div class="row">
            <div class="col-md-6 related-post-col">
                <div class="post-item-cover">
                    <div class="post-header">
                        <div class="related-post-categ">fitness</div>
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/blog-4.jpg" alt="img"></a>
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="meta">
                            <span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i>October 31, 2019</span>
                        </div>
                        <h3 class="title"><a href="single-blog.html">Sed ut perspiciatis unde omnis</a></h3>
                        <div class="text">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem...</p>
                        </div>
                    </div>
                    <div class="post-footer">
                        <div class="meta">
                            <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i><a href="#">By Rovadex</a></span>
                            <span class="post-comment"><i class="fa fa-comment" aria-hidden="true"></i><a href="#">2 Comments(s)</a></span>
                        </div>
                        <a href="single-blog.html" class="btn"><span>read more</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 related-post-col">
                <div class="post-item-cover">
                    <div class="post-header">
                        <div class="related-post-categ">lifting</div>
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/blog-1.jpg" alt="img"></a>
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="meta">
                            <span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i>October 31, 2019</span>
                        </div>
                        <h3 class="title"><a href="single-blog.html">Sed ut perspiciatis unde omnis</a></h3>
                        <div class="text">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem...</p>
                        </div>
                    </div>
                    <div class="post-footer">
                        <div class="meta">
                            <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i><a href="#">By Rovadex</a></span>
                            <span class="post-comment"><i class="fa fa-comment" aria-hidden="true"></i><a href="#">2 Comments(s)</a></span>
                        </div>
                        <a href="single-blog.html" class="btn"><span>read more</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 related-post-col">
                <div class="post-item-cover">
                    <div class="post-header">
                        <div class="related-post-categ">fitness</div>
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/blog-3.jpg" alt="img"></a>
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="meta">
                            <span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i>October 31, 2019</span>
                        </div>
                        <h3 class="title"><a href="single-blog.html">Sed ut perspiciatis unde omnis</a></h3>
                        <div class="text">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem...</p>
                        </div>
                    </div>
                    <div class="post-footer">
                        <div class="meta">
                            <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i><a href="#">By Rovadex</a></span>
                            <span class="post-comment"><i class="fa fa-comment" aria-hidden="true"></i><a href="#">2 Comments(s)</a></span>
                        </div>
                        <a href="single-blog.html" class="btn"><span>read more</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 related-post-col">
                <div class="post-item-cover">
                    <div class="post-header">
                        <div class="related-post-categ">lifting</div>
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/blog-2.jpg" alt="img"></a>
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="meta">
                            <span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i>October 31, 2019</span>
                        </div>
                        <h3 class="title"><a href="single-blog.html">Sed ut perspiciatis unde omnis</a></h3>
                        <div class="text">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem...</p>
                        </div>
                    </div>
                    <div class="post-footer">
                        <div class="meta">
                            <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i><a href="#">By Rovadex</a></span>
                            <span class="post-comment"><i class="fa fa-comment" aria-hidden="true"></i><a href="#">2 Comments(s)</a></span>
                        </div>
                        <a href="single-blog.html" class="btn"><span>read more</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
============== RELATED POSTS END ==============-->

<!-- =========== S-TRAINING-SCHEDULE ===========
<section class="s-training-schedule" style="background-image: url(assets/img/bg-table-1.svg);">
    <div class="container">
        <h2 class="title-decor">Training <span>Schedule</span></h2>
        <p class="slogan">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
        <div class="training-schedule-cover">
            <h3 class="training-schedule-top">1-7 APRIL, 2019</h3>
            <div class="training-schedule-table">
                <table>
                    <thead>
                    <th></th>
                    <th>monday</th>
                    <th>tuesday</th>
                    <th>wednesday</th>
                    <th>thursday</th>
                    <th>friday</th>
                    <th>saturday</th>
                    <th>sunday</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>9-00</td>
                        <td>
                            <h4>body bulding</h4>
                            <div class="date">9-00 – 11:00</div>
                            <div class="name">Mark Klark</div>
                        </td>
                        <td></td>
                        <td></td>
                        <td>
                            <h4>boxing</h4>
                            <div class="date">9-00 – 11:00</div>
                            <div class="name">Mark Klark</div>
                        </td>
                        <td></td>
                        <td></td>
                        <td>
                            <h4>boxing</h4>
                            <div class="date">9-00 – 11:00</div>
                            <div class="name">Mark Klark</div>
                        </td>
                    </tr>
                    <tr>
                        <td>10-00</td>
                        <td></td>
                        <td>
                            <h4>yoga</h4>
                            <div class="date">10-00 – 12:00</div>
                            <div class="name">Mark Klark</div>
                        </td>
                        <td></td>
                        <td></td>
                        <td>
                            <h4>body bulding</h4>
                            <div class="date">10-00 – 12:00</div>
                            <div class="name">Mark Klark</div>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>11-00</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <h4>body bulding</h4>
                            <div class="date">11-00 – 12:00</div>
                            <div class="name">Mark Klark</div>
                        </td>
                        <td></td>
                        <td>
                            <h4>body bulding</h4>
                            <div class="date">11-00 – 12:00</div>
                            <div class="name">Mark Klark</div>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>12-00</td>
                        <td>
                            <h4>body bulding</h4>
                            <div class="date">12-00 – 13:00</div>
                            <div class="name">Mark Klark</div>
                        </td>
                        <td></td>
                        <td>
                            <h4>karate</h4>
                            <div class="date">12-00 – 13:00</div>
                            <div class="name">Mark Klark</div>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <h4>karate</h4>
                            <div class="date">12-00 – 13:00</div>
                            <div class="name">Mark Klark</div>
                        </td>
                    </tr>
                    <tr>
                        <td>13-00</td>
                        <td></td>
                        <td>
                            <h4>body bulding</h4>
                            <div class="date">13-00 – 14:00</div>
                            <div class="name">Mark Klark</div>
                        </td>
                        <td></td>
                        <td></td>
                        <td>
                            <h4>body bulding</h4>
                            <div class="date">13-00 – 14:00</div>
                            <div class="name">Mark Klark</div>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
========= S-TRAINING-SCHEDULE END ========= -->

<!-- ================== FOOTER-->
<section class="s-counter" style="background-image: url(assets/img/bg-2.jpg);">
    <div class="mask"></div>
    <div class="container">
        <h2 class="title-decor">HOH <span>Social connect</span></h2>
        <p class="slogan">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim.
            Morbi dolor dolor, auctor tincidunt lorem ut, venenatis dapibus miq.</p>
        <div id="clockdiv">
            <div class="row">


            <div class="col-6">
                <blockquote class="twitter-tweet"><p lang="en" dir="ltr">
                        Hi Guyyyyssssss!! <br>Enjoy that your urgent 2k this Friday at Heels on Hills Bonfire 🔥🔥🔥🔥<br>To register, simply click on the link below and fill out the form:<a href="https://t.co/Ao6QjnTAvq">https://t.co/Ao6QjnTAvq</a><br><br>DO NOT MISS IT!!!!!!!! <a href="https://t.co/0JMfgSUEYo">pic.twitter.com/0JMfgSUEYo</a></p>&mdash; Nature Enthusiasts (@HeelsOnHill) <a href="https://twitter.com/HeelsOnHill/status/1371533457743040518?ref_src=twsrc%5Etfw">
                        March 15, 2021</a></blockquote>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

            </div>
            <div class="col-6">
                <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink=
                "https://www.instagram.com/p/CHlBmZ1HJ1-/?utm_source=ig_embed&amp;utm_campaign=loading"
                            data-instgrm-version="13" style=" background:#FFF; border:0; border-radius:3px;
                             box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px;
                             max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px);
                              width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CHlBmZ1HJ1-
                              /?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CHlBmZ1HJ1-/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Heels on Hills (@heelsonhill)</a>
                        </p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
            </div>
        </div>

    </div>
</section>
<!-================== FOOTER ================== -->

<!-- ================== FOOTER ================== -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 footer-item-logo">
                <a href="index-2.html" class="logo-footer"><img src="<?php echo e(asset('assets/hohimages/hohlogo.png')); ?>" width="110px"alt="logo"></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                <ul class="social-list">
                    <li><a target="_blank" href="https://www.facebook.com/rovadex"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="https://twitter.com/RovadexStudio"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/rovadex"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 footer-item footer-item-list">
                <h3>Links</h3>

            </div>
            <div class="col-sm-6 col-lg-3 footer-item">
                <h3>Contact us</h3>
                <ul class="footer-cont">
                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:18004886040">1-800-488-6040</a></li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:crossFit@gmail.com">CrossFit@gmail.com</a></li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="contacts.html">London,Street 225r.21</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 footer-item">
                <h3>Events</h3>

            </div>
        </div>
        <div class="footer-bottom">
            <div class="copyright"><a href="#" target="_blank"></a></div>
            <ul class="footer-menu">
                <li class="active"><a href="index-2.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="blog.html">News</a></li>
                <li><a href="contacts.html">Contacts</a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- ================ FOOTER END ================ -->

<!--=================== TO TOP ===================-->
<a class="to-top" href="#home">
    <i class="fa fa-chevron-up" aria-hidden="true"></i>
</a>
<!--================= TO TOP END =================-->

<!--=================== SCRIPT	===================-->
<script src="<?php echo e(asset('assets/js/jquery-2.2.4.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/slick.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/rx-lazy.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/isotope.pkgd.js')); ?>"></script>
<script src="<?php echo e('assets/js/jquery.fancybox.js'); ?>"></script>
<script src="<?php echo e(asset('assets/js/parallax.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/scripts.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\HOH\bornfire\resources\views/index2.blade.php ENDPATH**/ ?>