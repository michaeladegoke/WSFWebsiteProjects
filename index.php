<?php include 'inc/config.php' ?>

<?php

$sql = "SELECT * FROM tb_home WHERE id = 2";
$result = mysqli_query($conn, $sql);
$homesection = mysqli_fetch_all($result, MYSQLI_ASSOC);

// if ($result) {
//     $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
// } else {
//     echo "Query failed: " . mysqli_error($conn);
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META INFO -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- PAGE TITLE -->
    <title>Wealth Space Foundation</title>

    <!-- META KEYWORDS AND DESCRIPTION -->
    <meta name="keywords" content="" />
    <meta name="description" content="Wealth Space Foundation">
    <meta name="author" content="">

    <!-- META VIEW PORT -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- FAVICONS -->
    <link rel="icon" href="images/favicons/wsf-icon1.png">
    <link rel="apple-touch-icon" href="images/favicons/wsf-icon1.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/wsf-icon1.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/wsf-icon1.png">

    <!-- WEB FONT-FAMILY -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <!-- VENDOR FONT ICONS CSS -->
    <link rel="stylesheet" href="fonticons/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="fonticons/et-line/et-line-font.css">
    <link rel="stylesheet" href="fonticons/material-webfont/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="fonticons/pixeden/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="fonticons/simplelineicons/css/simple-line-icons.css">

    <!-- COMMON VENDOR CSS -->
    <link rel="stylesheet" href="vendor/animate-css/animate.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/sweetalert/sweetalert2.min.css">
    <link rel="stylesheet" href="vendor/jarallax/jarallax.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">

    <!-- PAGE SPECIFIC VENDOR CSS -->

    <!-- TEMPLATE COMMON CSS -->
    <link rel="stylesheet" href="css/ckav-main.css">
    <link rel="stylesheet" href="css/ckav-elements.css">
    <link rel="stylesheet" href="css/ckav-helper.css">
    <link rel="stylesheet" href="css/ckav-responsive.css">

    <!-- DEMO SPECIFIC TEMPLATE CSS -->

    <!-- TEMPLATE THEME CSS -->

    <!-- TEMPLATE USER CUSTOM CSS -->
    <link rel="stylesheet" href="css/template-custom.css">
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body class="ckav-body tooltip-light">

    <!--
    ************************************************************
    * PAGE LOADER
    *************************************************************
    -->
    <div id="loader">
        <div class="load-three-bounce">
            <div class="load-child bounce1"></div>
            <div class="load-child bounce2"></div>
            <div class="load-child bounce3"></div>
        </div>
    </div>
    <!-- ************** END : PAGE LOADER **************  -->


    <div class="ckav-body">

        <!--
        ************************************************************
        * HEADER
        *************************************************************
        -->
        <header class="ckav-header">
            <div class="container-fluid padding-0">

                <div class="row align-items-center">

                    <!-- LOGO -->
                    <div class="col">
                        <a href="#" class="logo-wrapper margin-l-30 margin-t-30" data-ckav-smd="margin-t-10 margin-l-10 margin-b-10 width-px-60">
                            <img src="images/wsflogo1" alt="WSF">
                        </a>
                    </div>

                    <!-- SOCIAL LINKS -->
                    <div class="col flex-cr">

                        <!-- MENU ICON -->
                        <div class="menu-icon-wrp display-none" data-ckav-smd="display-flex 
                        margin-r-10">
                            <div class="menu-icon">
                                <div class="bar"></div>
                            </div>
                        </div>

                        <!-- SOCIAL ICONS -->
                        <div class="social-section margin-r-30 margin-t-30" data-ckav-smd="display-none">
                            <div class="inner-wrapper">
                                <a href="#" class="button button-icon radius-full margin-r-10 color-button-white border-glass"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="button button-icon radius-full margin-r-10 color-button-white border-glass"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="button button-icon radius-full margin-r-10 color-button-white border-glass"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="button button-icon radius-full margin-r-10 color-button-white border-glass"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </header>
        <!-- ************** END : HEADER **************  -->

        <!--
        ************************************************************
        * INTRO SECTION
        *************************************************************
        -->

        <?php foreach ($homesection as $item) : ?>


            <div class="intro-section flex-cc">
                <div class="container zindex-1 typo-light">
                    <div class="intro-text width-40" data-ckav-smd="width-100 align-center">
                        <h2 class="heading xlarge bold-600 margin-b-25" data-ckav-smd="large">
                            <?php echo $item['titleone']; ?>
                            <br data-ckav-smd="display-none"><?php echo $item['titletwo']; ?>
                        </h2>
                        <p class="heading-sub mini bold-400 margin-b-40" data-ckav-smd="mini margin-b-40">
                            <?php echo $item['body']; ?>
                        </p>
                        <a href="" class="button button-3d color-button-default radius-10 button-large solid">
                            More Info</a>
                    </div>
                    <!-- SOCIAL ICONS -->
                    <div class="social-section display-none" data-ckav-smd="display-flex 
                flex-cc margin-t-40">
                        <div class="inner-wrapper">
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-white border-glass"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-white border-glass"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-white border-glass"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="button button-icon radius-full margin-r-10 color-button-white border-glass"><i class="fab fa-dribbble"></i></a>
                        </div>
                    </div>

                </div>

                <!--=================================
            = BACKGROUND HOLDER
            ==================================-->
                <div class="bg-holder zindex-0">

                    <!-- OVERLAY -->
                    <b data-bgholder="overlay" class="full-wh zindex-2"></b>

                    <!-- BACKGROUND IMAGE -->
                    <b data-bgholder="background-image" class="full-wh bg-cover bg-cc zindex-1" data-bg-image="<?php echo $item['image']; ?>"></b>
                </div>



                <!-- ======= END : BACKGROUND HOLDER =======  -->

            </div>
        <?php endforeach; ?>
        <!-- ************** END : INTRO SECTION **************  -->

        <!--
        ************************************************************
        * NAVIGATION
        *************************************************************
        -->
        <div class="navigation-section" data-linear-gradient="rgba(0,0,0, 0)
            |rgba(0,0,0, 0.8)">
            <div class="container">
                <ul class="navigation-ul row gt0 align-items-center">
                    <li class="navigation-li col">
                        <a class="navigation-a" data-popup="#about" href="#">
                            <span class="icon"><i class="icon-book-open"></i></span>
                            <span class="text">About</span>
                            <span class="line"></span>
                        </a>
                    </li>
                    <li class="navigation-li col">
                        <a class="navigation-a" data-popup="#services" href="#">
                            <span class="icon"><i class="icon-settings"></i></span>
                            <span class="text">Services</span>
                            <span class="line"></span>
                        </a>
                    </li>
                    <li class="navigation-li col">
                        <a class="navigation-a" data-popup="#gallery" href="#">
                            <span class="icon"><i class="icon-camera"></i></span>
                            <span class="text">Gallery</span>
                            <span class="line"></span>
                        </a>
                    </li>
                    <li class="navigation-li col">
                        <a class="navigation-a" data-popup="#team" href="#">
                            <span class="icon"><i class="icon-people"></i></span>
                            <span class="text">Team</span>
                            <span class="line"></span>
                        </a>
                    </li>
                    <li class="navigation-li col">
                        <a class="navigation-a" data-popup="#testimonials" href="#">
                            <span class="icon"><i class="icon-speech"></i></span>
                            <span class="text">Testimonials</span>
                            <span class="line"></span>
                        </a>
                    </li>
                    <li class="navigation-li col">
                        <a class="navigation-a" data-popup="#contact" href="#">
                            <span class="icon"><i class="icon-envelope-letter"></i></span>
                            <span class="text">Contact</span>
                            <span class="line"></span>
                        </a>
                    </li>
                    <li class="navigation-li col">
                        <a class="navigation-a" data-popup="#subscribe" href="#">
                            <span class="icon"><i class="icon-bell"></i></span>
                            <span class="text">Subscribe</span>
                            <span class="line"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ************** END : NAVIGATION **************  -->

        <!--
        ************************************************************
        * ABOUT SECTION
        *************************************************************
        -->

        <?php

        $sql = "SELECT * FROM tb_about WHERE id = 1";
        $result = mysqli_query($conn, $sql);
        $aboutsection = mysqli_fetch_all($result, MYSQLI_ASSOC);

        ?>

        <?php foreach ($aboutsection as $item) : ?>

            <div id="about" class="popup-section about-section flex-cc">
                <div class="inner-wrapper" data-ckav-smd="align-center">

                    <!-- CLOSE BUTTON -->
                    <div class="popup-close button button-icon color-button-dark color-hov-button-dark solid">
                        <i class="pe-7s-close"></i>
                    </div>

                    <!-- POPUP HEADER -->
                    <div class="header-area typo-light">
                        <h2 class="heading-section medium bold-600 margin-b-0"><?php echo htmlspecialchars($item['title']); ?></h2>
                    </div>

                    <!-- POPUP CONTENT -->
                    <div class="content-area">
                        <div class="row gt60 align-items-center">
                            <div class="col-lg-6" data-ckav-smd="margin-b-40">
                                <img class="radius-10" src="<?php echo htmlspecialchars($item['image']); ?>" alt="about image">
                            </div>
                            <div class="col-lg-6">
                                <h3 class="heading-content small bold-600"><?php echo htmlspecialchars($item['heading']); ?></h3>

                                <p class="heading-content-sub bold-400 tiny margin-b-30"><?php echo htmlspecialchars($item['subheading']); ?></p>

                                <p class="margin-b-30"><?php echo htmlspecialchars($item['content']); ?></p>

                                <ul class="list-1 color-text-dark font-01" data-ckav-smd="align-left margin-b-30">
                                    <li class="margin-b-5"><i class="list-bullet margin-r-10 color-text-default fa fa-check"></i><?php echo htmlspecialchars($item['firstlist']); ?> </li>
                                    <li class="margin-b-5"><i class="list-bullet margin-r-10 color-text-default fa fa-check"></i> <?php echo htmlspecialchars($item['secondlist']); ?> </li>
                                    <li class="margin-b-5"><i class="list-bullet margin-r-10 color-text-default fa fa-check"></i><?php echo htmlspecialchars($item['thirdlist']); ?> </li>
                                    <li class="margin-b-5"><i class="list-bullet margin-r-10 color-text-default fa fa-check"></i><?php echo htmlspecialchars($item['fourthlist']); ?> </li>
                                    <li class="margin-b-5"><i class="list-bullet margin-r-10 color-text-default fa fa-check"></i><?php echo htmlspecialchars($item['fifthlist']); ?> </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        <?php endforeach; ?>


        <!-- ************** END : ABOUT SECTION **************  -->

        <!--
        ************************************************************
        * SERVICES SECTION
        *************************************************************
        -->

        <?php

        $sql = "SELECT * FROM tb_service";
        $result = mysqli_query($conn, $sql);
        $servicesection = mysqli_fetch_all($result, MYSQLI_ASSOC);

        ?>

        <?php foreach ($servicesection as $item) : ?>

            <div id="services" class="popup-section services-section flex-cc">
                <div class="inner-wrapper" data-ckav-smd="align-center">

                    <!-- CLOSE BUTTON -->
                    <div class="popup-close button button-icon color-button-dark solid color-hov-button-dark">
                        <i class="pe-7s-close"></i>
                    </div>

                    <!-- POPUP HEADER -->
                    <div class="header-area typo-light">
                        <h2 class="heading-section medium bold-600 margin-b-0"><?php echo $item['title']; ?></h2>
                    </div>

                    <!-- POPUP CONTENT -->
                    <div class="content-area">

                        <div class="width-50 align-center margin-auto margin-b-40" data-ckav-smd="width-100">
                            <h3 class="heading-content small bold-600"><?php echo $item['mainheading']; ?></h3>

                            <p class="heading-content-sub bold-400 tiny">
                                <?php echo $item['mainbody']; ?></p>
                        </div>
                        <div class="row gt30 margin-b-30">
                            <div class="col-lg-4" data-ckav-smd="margin-b-30">
                                <div class="info-obj radius-10 margin-b-0 center info-box-01 img-t padding-30 gap-20 mini" data-bg-color="rgba(0,0,0,0.03)">
                                    <div class="img"><span class="iconwrp"><i class="pe-7s-rocket"></i></span></div>
                                    <div class="info">
                                        <h3 class="heading-content bold-600 tiny"><?php echo $item['heading1']; ?></h3>
                                        <p class="margin-b-0">
                                            <?php echo $item['content1']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4" data-ckav-smd="margin-b-30">
                                <div class="info-obj radius-10 margin-b-0 center info-box-01 img-t padding-30 gap-20 mini" data-bg-color="rgba(0,0,0,0.03)">
                                    <div class="img"><span class="iconwrp"><i class="pe-7s-display2"></i></span></div>
                                    <div class="info">
                                        <h3 class="heading-content bold-600 tiny"><?php echo $item['heading2']; ?></h3>
                                        <p class="margin-b-0"><?php echo $item['content2']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="info-obj radius-10 margin-b-0 center info-box-01 img-t padding-30 gap-20 mini" data-bg-color="rgba(0,0,0,0.03)">
                                    <div class="img"><span class="iconwrp"><i class="pe-7s-science"></i></span></div>
                                    <div class="info">
                                        <h3 class="heading-content bold-600 tiny"><?php echo $item['heading3']; ?></h3>
                                        <p class="margin-b-0"><?php echo $item['content3']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row gt30">
                            <div class="col-lg-4" data-ckav-smd="margin-b-30">
                                <div class="info-obj radius-10 margin-b-0 center info-box-01 img-t padding-30 gap-20 mini" data-bg-color="rgba(0,0,0,0.03)">
                                    <div class="img"><span class="iconwrp"><i class="pe-7s-door-lock"></i></span></div>
                                    <div class="info">
                                        <h3 class="heading-content bold-600 tiny"><?php echo $item['heading4']; ?></h3>
                                        <p class="margin-b-0"><?php echo $item['content4']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4" data-ckav-smd="margin-b-30">
                                <div class="info-obj radius-10 margin-b-0 center info-box-01 img-t padding-30 gap-20 mini" data-bg-color="rgba(0,0,0,0.03)">
                                    <div class="img"><span class="iconwrp"><i class="pe-7s-headphones"></i></span></div>
                                    <div class="info">
                                        <h3 class="heading-content bold-600 tiny"><?php echo $item['heading5']; ?></h3>
                                        <p class="margin-b-0"><?php echo $item['content5']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4" data-ckav-smd="margin-b-30">
                                <div class="info-obj radius-10 margin-b-0 center info-box-01 img-t padding-30 gap-20 mini" data-bg-color="rgba(0,0,0,0.03)">
                                    <div class="img"><span class="iconwrp"><i class="pe-7s-medal"></i></span></div>
                                    <div class="info">
                                        <h3 class="heading-content bold-600 tiny"><?php echo $item['heading6']; ?></h3>
                                        <p class="margin-b-0"><?php echo $item['content6']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


        <?php endforeach; ?>
        <!-- ************** END : SERVICES SECTION **************  -->

        <!--
        ************************************************************
        * GALLERY SECTION
        *************************************************************
        -->
        <?php
        $sql = "SELECT * FROM tb_gallery";
        $result = mysqli_query($conn, $sql);
        $gallerysection = mysqli_fetch_all($result, MYSQLI_ASSOC);

        ?>

        <?php foreach ($gallerysection as $item) : ?>
            <div id="gallery" class="popup-section gallery-section flex-cc">
                <div class="inner-wrapper" data-ckav-smd="align-center">

                    <!-- CLOSE BUTTON -->
                    <div class="popup-close button button-icon color-button-dark solid color-hov-button-dark">
                        <i class="pe-7s-close"></i>
                    </div>

                    <!-- POPUP HEADER -->
                    <div class="header-area typo-light">
                        <h2 class="heading-section medium bold-600 margin-b-0">Gallery</h2>
                    </div>

                    <!-- POPUP CONTENT -->
                    <div class="content-area">

                        <div class="portfolio-widget grid-portfolio portfolio-row grid-03" data-zoom-gallery="yes" data-ckav-md="grid-02" data-ckav-sm="grid-01">
                            <div class="portfolio-col">
                                <figure class="hover-box hover-box-01">

                                    <!-- OVERLAY -->
                                    <div class="overlay flex-bl typo-light" data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                        <div class="info-text text-center">
                                            <a href="uploads/gallery/galleryimage.jpg" class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-size-fullscreen"></i></a>
                                            <a href="" target="_blank" class="button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-link"></i></a>
                                            <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30"><?php echo $item['title1']; ?></h3>
                                            <p class="mr-0 fs12 op-08"><?php echo $item['body1']; ?></p>
                                        </div>
                                    </div>

                                    <!-- IMAGE -->
                                    <img src="<?php echo $item['image1']; ?>" alt="portfolio image">

                                </figure>
                            </div>

                            <div class="portfolio-col">
                                <figure class="hover-box hover-box-01">

                                    <!-- OVERLAY -->
                                    <div class="overlay flex-bl typo-light" data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                        <div class="info-text text-center">
                                            <a href="uploads/gallery/galleryimage.jpg" class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-size-fullscreen"></i></a>
                                            <a href="" target="_blank" class="button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-link"></i></a>
                                            <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30"><?php echo $item['title1']; ?></h3>
                                            <p class="mr-0 fs12 op-08"><?php echo $item['body1']; ?></p>
                                        </div>
                                    </div>

                                    <!-- IMAGE -->
                                    <img src="<?php echo $item['image2']; ?>" alt="portfolio image">

                                </figure>
                            </div>

                            <div class="portfolio-col">
                                <figure class="hover-box hover-box-01">

                                    <!-- OVERLAY -->
                                    <div class="overlay flex-bl typo-light" data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                        <div class="info-text text-center">
                                            <a href="uploads/gallery/galleryimage.jpg" class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-size-fullscreen"></i></a>
                                            <a href="" target="_blank" class="button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-link"></i></a>
                                            <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30"><?php echo $item['title2']; ?></h3>
                                            <p class="mr-0 fs12 op-08"><?php echo $item['body2']; ?></p>
                                        </div>
                                    </div>

                                    <!-- IMAGE -->
                                    <img src="<?php echo $item['image3']; ?>" alt="portfolio image">

                                </figure>
                            </div>

                            <div class="portfolio-col">
                                <figure class="hover-box hover-box-01">

                                    <!-- OVERLAY -->
                                    <div class="overlay flex-bl typo-light" data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                        <div class="info-text text-center">
                                            <a href="uploads/gallery/galleryimage.jpg" class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-size-fullscreen"></i></a>
                                            <a href="" target="_blank" class="button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-link"></i></a>
                                            <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30"><?php echo $item['title4']; ?></h3>
                                            <p class="mr-0 fs12 op-08"><?php echo $item['body4']; ?></p>
                                        </div>
                                    </div>

                                    <!-- IMAGE -->
                                    <img src="<?php echo $item['image4']; ?>" alt="portfolio image">

                                </figure>
                            </div>

                            <div class="portfolio-col">
                                <figure class="hover-box hover-box-01">

                                    <!-- OVERLAY -->
                                    <div class="overlay flex-bl typo-light" data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                        <div class="info-text text-center">
                                            <a href="uploads/gallery/galleryimage.jpg" class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-size-fullscreen"></i></a>
                                            <a href="" target="_blank" class="button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-link"></i></a>
                                            <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30"><?php echo $item['title5']; ?></h3>
                                            <p class="mr-0 fs12 op-08"><?php echo $item['body5']; ?></p>
                                        </div>
                                    </div>

                                    <!-- IMAGE -->
                                    <img src="<?php echo $item['image5']; ?>" alt="portfolio image">

                                </figure>
                            </div>

                            <div class="portfolio-col">
                                <figure class="hover-box hover-box-01">

                                    <!-- OVERLAY -->
                                    <div class="overlay flex-bl typo-light" data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                        <div class="info-text text-center">
                                            <a href="uploads/gallery/galleryimage.jpg" class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-size-fullscreen"></i></a>
                                            <a href="" target="_blank" class="button button-icon radius-full margin-lr-5 color-button-default solid"><i class="pe-7s-link"></i></a>
                                            <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30"><?php echo $item['title6']; ?></h3>
                                            <p class="mr-0 fs12 op-08"><?php echo $item['body6']; ?></p>
                                        </div>
                                    </div>

                                    <!-- IMAGE -->
                                    <img src="<?php echo $item['image 6']; ?>" alt="portfolio image">

                                </figure>
                            </div>

                        </div>
                    </div>

                </div>
            </div>


        <?php endforeach; ?>


        <!-- ************** END : GALLERY SECTION **************  -->

        <!--
        ************************************************************
        * TEAM SECTION
        *************************************************************
        -->
        <div id="team" class="popup-section team-section flex-cc">
            <div class="inner-wrapper" data-ckav-smd="align-center">

                <!-- CLOSE BUTTON -->
                <div class="popup-close button button-icon color-button-dark solid color-hov-button-dark">
                    <i class="pe-7s-close"></i>
                </div>

                <!-- POPUP HEADER -->
                <div class="header-area typo-light">
                    <h2 class="heading-section medium bold-600 margin-b-0">Team</h2>
                </div>

                <!-- POPUP CONTENT -->
                <div class="content-area">

                    <div class="align-center width-50 margin-auto margin-b-40" data-ckav-smd="width-100">
                        <h3 class="heading-content small bold-600">Telented team member</h3>
                        <p class="heading-content-sub mini bold-400 margin-b-0 margin-auto" data-ckav-smd="width-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam dicta necessitatibus ratione itaque non animi vel.</p>
                    </div>

                    <div class="row">

                        <div class="col-lg-4" data-ckav-smd="margin-b-30">
                            <div class="hover-box teambox radius-10 teambox-02 hover-box-01">

                                <!-- OVERLAY -->
                                <div class="overlay flex-bl radius-10 typo-light" data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                    <div class="info-text text-center">
                                        <em class="fs12 color-text-white margin-b-5">Manager</em>
                                        <h3 class="heading-content mini bold-600 margin-0">Reupsum Yolor</h3>
                                        <div class="social-links margin-t-20">
                                            <a href="#" target="_blank" class="button button-icon color-button-white border-glass fs-12 margin-lr-5 square-30"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" target="_blank" class="button button-icon color-button-white border-glass fs-12 margin-lr-5 square-30"><i class="fab fa-twitter"></i></a>
                                            <a href="#" target="_blank" class="button button-icon color-button-white border-glass fs-12 margin-lr-5 square-30"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- IMAGE -->
                                <img class="radius-10" src="images/400x500-01.jpg" alt="portfolio image">

                            </div>
                        </div>

                        <div class="col-lg-4" data-ckav-smd="margin-b-30">
                            <div class="hover-box teambox radius-10 teambox-02 hover-box-01">

                                <!-- OVERLAY -->
                                <div class="overlay flex-bl radius-10 typo-light" data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                    <div class="info-text text-center">
                                        <em class="fs12 color-text-white margin-b-5">Manager</em>
                                        <h3 class="heading-content mini bold-600 margin-0">Aupsum Tolor</h3>
                                        <div class="social-links margin-t-20">
                                            <a href="#" target="_blank" class="button button-icon color-button-white border-glass fs-12 margin-lr-5 square-30"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" target="_blank" class="button button-icon color-button-white border-glass fs-12 margin-lr-5 square-30"><i class="fab fa-twitter"></i></a>
                                            <a href="#" target="_blank" class="button button-icon color-button-white border-glass fs-12 margin-lr-5 square-30"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- IMAGE -->
                                <img class="radius-10" src="images/400x500-02.jpg" alt="portfolio image">

                            </div>
                        </div>

                        <div class="col-lg-4" data-ckav-smd="margin-b-30">
                            <div class="hover-box teambox radius-10 teambox-02 hover-box-01">

                                <!-- OVERLAY -->
                                <div class="overlay flex-bl radius-10 typo-light" data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                    <div class="info-text text-center">
                                        <em class="fs12 color-text-white margin-b-5">Manager</em>
                                        <h3 class="heading-content mini bold-600 margin-0">Uupsum Eolor</h3>
                                        <div class="social-links margin-t-20">
                                            <a href="#" target="_blank" class="button button-icon color-button-white border-glass fs-12 margin-lr-5 square-30"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" target="_blank" class="button button-icon color-button-white border-glass fs-12 margin-lr-5 square-30"><i class="fab fa-twitter"></i></a>
                                            <a href="#" target="_blank" class="button button-icon color-button-white border-glass fs-12 margin-lr-5 square-30"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- IMAGE -->
                                <img class="radius-10" src="images/400x500-03.jpg" alt="portfolio image">

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <!-- ************** END : TEAM SECTION **************  -->

        <!--
        ************************************************************
        * TESTIMONIALS SECTION
        *************************************************************
        -->
        <div id="testimonials" class="popup-section testimonials-section flex-cc">
            <div class="inner-wrapper" data-ckav-smd="align-center">

                <!-- CLOSE BUTTON -->
                <div class="popup-close button button-icon color-button-dark solid color-hov-button-dark">
                    <i class="pe-7s-close"></i>
                </div>

                <!-- POPUP HEADER -->
                <div class="header-area typo-light">
                    <h2 class="heading-section medium bold-600 margin-b-0">Testimonials</h2>
                </div>

                <!-- POPUP CONTENT -->
                <div class="content-area">

                    <div class="carousel-widget carouselnav-1 zoom-carousel large padding-b-0 width-90 margin-auto" data-ckav-smd="width-100 align-center" data-carousel-items="1" data-carousel-itemrange="0,1|420,1|600,2|768,3|992,3|1200,3" data-carousel-autoplay="false" data-carousel-margin="30" data-carousel-loop="false" data-carousel-nav="true" data-carousel-dots="true" data-carousel-center="true">
                        <div class="owl-carousel">

                            <!-- ITEM -->
                            <div class="item">
                                <div class="inneritem">
                                    <div class="testimonial-box testimonial-box-5 padding-30 radius-10 info-obj img-t center gap-30 large">
                                        <div class="img border-white border-10"><img src="images/400x400-01.jpg" class="radius-full" alt="image"></div>
                                        <div class="info">
                                            <p class="heading-content-sub tiny margin-0">Consetetur sadipscing elitr, sed diam tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                            <hr class="margin-tb-20">
                                            <h3 class="heading-content tiny bold-600 margin-0">Oupsum dolor</h3>
                                            <em class="fs12">Creative Director</em>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ITEM -->
                            <div class="item">
                                <div class="inneritem">
                                    <div class="testimonial-box testimonial-box-5 padding-30 radius-10 info-obj img-t center gap-30 large">
                                        <div class="img border-white border-10"><img src="images/400x400-02.jpg" class="radius-full" alt="image"></div>
                                        <div class="info">
                                            <p class="heading-content-sub tiny margin-0">Consetetur sadipscing elitr, sed diam tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                            <hr class="margin-tb-20">
                                            <h3 class="heading-content tiny bold-600 margin-0">Oupsum dolor</h3>
                                            <em class="fs12">Creative Director</em>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ITEM -->
                            <div class="item">
                                <div class="inneritem">
                                    <div class="testimonial-box testimonial-box-5 padding-30 radius-10 info-obj img-t center gap-30 large">
                                        <div class="img border-white border-10"><img src="images/400x400-03.jpg" class="radius-full" alt="image"></div>
                                        <div class="info">
                                            <p class="heading-content-sub tiny margin-0">Consetetur sadipscing elitr, sed diam tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                            <hr class="margin-tb-20">
                                            <h3 class="heading-content tiny bold-600 margin-0">Oupsum dolor</h3>
                                            <em class="fs12">Creative Director</em>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ITEM -->
                            <div class="item">
                                <div class="inneritem">
                                    <div class="testimonial-box testimonial-box-5 padding-30 radius-10 info-obj img-t center gap-30 large">
                                        <div class="img border-white border-10"><img src="images/400x400-04.jpg" class="radius-full" alt="image"></div>
                                        <div class="info">
                                            <p class="heading-content-sub tiny margin-0">Consetetur sadipscing elitr, sed diam tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                            <hr class="margin-tb-20">
                                            <h3 class="heading-content tiny bold-600 margin-0">Oupsum dolor</h3>
                                            <em class="fs12">Creative Director</em>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="align-center width-50 margin-auto margin-t-30" data-ckav-smd="width-100">
                        <h3 class="heading-content small bold-600">Customer satisfaction is important</h3>
                        <p class="heading-content-sub mini bold-400 margin-b-0 margin-auto" data-ckav-smd="width-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam dicta necessitatibus ratione itaque non animi vel.</p>
                    </div>

                </div>

            </div>
        </div>
        <!-- ************** END : TESTIMONIALS SECTION **************  -->

        <!--
        ************************************************************
        * CONTACT SECTION
        *************************************************************
        -->
        <div id="contact" class="popup-section contact-section flex-cc">
            <div class="inner-wrapper" data-ckav-smd="align-center">

                <!-- CLOSE BUTTON -->
                <div class="popup-close button button-icon color-button-dark solid color-hov-button-dark">
                    <i class="pe-7s-close"></i>
                </div>

                <!-- POPUP HEADER -->
                <div class="header-area typo-light">
                    <h2 class="heading-section medium bold-600 margin-b-0">Contact</h2>
                </div>

                <!-- POPUP CONTENT -->
                <div class="content-area">

                    <div class="row gt60">
                        <div class="col-lg-6" data-ckav-smd="margin-b-40">
                            <div class="map-wrapper height-px-200 margin-b-40">
                                <iframe class="width-100 height-100 border-none" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25173.549759506815!2d144.97705325499777!3d-37.79137058602538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642cb954b1ce9%3A0xf187674ba9830e78!2sState+Library+Victoria!5e0!3m2!1sen!2sin!4v1560509152021!5m2!1sen!2sin" allowfullscreen></iframe>
                            </div>

                            <div class="info-obj margin-b-0 info-box-01 img-l gap-20 mini animated fadeInUp" data-ckav-smd="margin-b-30 align-left">
                                <div class="img"><span class="iconwrp"><i class="pe-7s-mail"></i></span></div>
                                <div class="info">
                                    <h3 class="heading-content tiny bold-600 margin-b-5">Email</h3>
                                    <p class="margin-b-0">c.kav.art@gmail.com</p>
                                </div>
                            </div>

                            <hr class="margin-tb-20">

                            <div class="info-obj margin-b-0 info-box-01 img-l gap-20 mini animated fadeInUp" data-ckav-smd="margin-b-30 align-left">
                                <div class="img"><span class="iconwrp"><i class="pe-7s-headphones"></i></span></div>
                                <div class="info">
                                    <h3 class="heading-content tiny bold-600 margin-b-5">Phone</h3>
                                    <p class="margin-b-0">+1234-567-890</p>
                                </div>
                            </div>

                            <hr class="margin-tb-20">

                            <div class="info-obj margin-b-0 info-box-01 img-l gap-20 mini animated fadeInUp" data-ckav-smd="margin-b-30 align-left">
                                <div class="img"><span class="iconwrp"><i class="pe-7s-map-2"></i></span></div>
                                <div class="info">
                                    <h3 class="heading-content tiny bold-600 margin-b-5">Address</h3>
                                    <p class="margin-b-0">1orem ipsum eirmod dolor sit ametconsetetur sadipscing nonumy ipsum eirmod</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3 class="heading-content small margin-b-30" data-ckav-smd="medium">Drop us line</h3>
                            <form action="form-data/formdata.php" class="form-widget form-control-op-02">
                                <div class="field-wrp">
                                    <input type="hidden" name="to" value="c.kav.art@gmail.com">

                                    <div class="row gt10">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control radius-10" data-label="Name" required="" data-msg="Please enter name." type="text" name="name" placeholder="Enter your name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control radius-10" data-label="Email" required="" data-msg="Please enter email." type="email" name="email" placeholder="Enter your email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control radius-10" required="" data-label="Phone" data-msg="Please phone number." type="text" name="phone" placeholder="Enter your phone number">
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control radius-10" data-label="Subject" type="text" name="subject" placeholder="Enter subject">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control radius-10" data-label="Message" required="" data-msg="Please enter your message." name="message" placeholder="Add your message" cols="30" rows="6"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="button radius-10 button-3d solid color-button-default width-100 margin-0"><i class="fa fa-envelope-o"></i> SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- ************** END : CONTACT SECTION **************  -->

        <!--
        ************************************************************
        * SUBSCRIBE SECTION
        *************************************************************
        -->
        <div id="subscribe" class="popup-section subscribe-section flex-cc">
            <div class="inner-wrapper" data-ckav-smd="align-center">

                <!-- CLOSE BUTTON -->
                <div class="popup-close button button-icon color-button-dark solid color-hov-button-dark">
                    <i class="pe-7s-close"></i>
                </div>

                <!-- POPUP HEADER -->
                <div class="header-area typo-light">
                    <h2 class="heading-section medium bold-600 margin-b-0">Subscribe</h2>
                </div>

                <!-- POPUP CONTENT -->
                <div class="content-area">

                    <div class="row gt60 align-items-center">
                        <div class="col-lg-6" data-ckav-smd="margin-b-30">
                            <img class="radius-10" src="images/half-bg-02.jpg" alt="about image">
                        </div>

                        <div class="col-lg-6">
                            <div class="margin-b-40" data-ckav-smd="margin-b-40">
                                <h3 class="heading-content small bold-600">Join newsletter</h3>
                                <p class="heading-content-sub mini bold-400 margin-b-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis voluptate possimus culpa.</p>
                            </div>

                            <form action="form-data/notify-me.php" class="form-widget form-control-op-02 margin-auto" novalidate="novalidate" data-ckav-smd="width-100">
                                <div class="field-wrp">
                                    <input type="hidden" name="to" value="c.kav.art@gmail.com">

                                    <div class="row gt10">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control radius-10" data-label="Name" required="" data-msg="Please enter name." type="text" name="name" placeholder="Enter your name">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control radius-10" data-label="Email" required="" data-msg="Please enter email." type="email" name="email" placeholder="Enter your email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="button button-3d radius-10 solid color-button-default width-100 margin-0 radius-0"><i class="fa fa-envelope-o"></i> SUBMIT</button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- ************** END : SUBSCRIBE SECTION **************  -->

    </div>

    <!-- COMMON VENDOR SCRIPTS -->
    <script src="vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="vendor/jquery/jquery-migrate-3.0.0.min.js"></script>
    <script src="vendor/popper/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/sweetalert/sweetalert2.min.js"></script>
    <script src="vendor/jarallax/jarallax.min.js"></script>
    <script src="vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="vendor/swiper/js/swiper.min.js"></script>
    <script src="vendor/jQuery-viewport-checker/jquery.viewportchecker.min.js"></script>
    <script src="vendor/enquire/enquire.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="vendor/isotope/packery-mode.pkgd.min.js"></script>

    <!-- PAGE SPECIFIC VENDOR SCRIPTS -->

    <!-- TEMPLATE COMMON SCRIPTS -->
    <script src="js/ckav-main.js"></script>


</body>

</html>