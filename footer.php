<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>

    <style>
        :root {
            --mor-color: #b257a5;
            --darkBlue-color: #337ab7;
            --gray-color: rgb(232, 229, 229);
        }

        body {
            font-family: "Almarai", sans-serif;
        }

        * {
            /* border: 1px solid red; */
        }

        footer .foot-links a {
            text-decoration: none;
            color: white;
        }

        footer .foot-links a:hover {
            color: rgba(255, 255, 255, 0.7);
        }

        footer .footer-content {
            background-color: var(--mor-color);
            color: white;
        }

        footer .hr {
            background: linear-gradient(to right, transparent, white, transparent);
            opacity: 1;
            height: 2px;
            border-radius: 50%;
            margin-bottom: 10px !important;
        }

        footer .demo {
            text-align: justify;
        }

        footer .call-info i {
            font-size: 30px;
        }

        footer .call-info p {
            font-size: 1.2rem;
        }

        footer .footer-menu-container a {
            text-decoration: none;
            background-color: white;
            padding: 5px 8px;
            border-radius: 5px;
            margin: 5px;
            color: var(--mor-color);
        }

        footer .footer-menu-container a:hover {
            background-color: rgba(255, 255, 255, 0.7) !important;
        }

        footer .rights {
            color: var(--darkBlue-color);
            font-size: 0.9rem;
            padding-inline: 10%;
        }

        footer .rights a {
            text-decoration: none;
            color: var(--mor-color);
        }

        footer h5 {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <footer>
        <div class="footer-content pt-4 pb-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11">
                        <div class="row">
                            <div class="col-12 d-md-none">
                                <div class="social-media h-100 d-flex justify-content-center align-items-center gap-4 mb-5">
                                    <a href="index.php" class="text-white"><i class="fa-brands fa-instagram fa-2xl"></a></i>
                                    <a href="https://www.facebook.com/turkrycare.tr/?show_switched_toast=0&show_invite_to_follow=0&show_switched_tooltip=0&show_podcast_settings=0&show_community_transition=0&show_community_review_changes=0&show_follower_visibility_disclosure=0" class="text-white"> <i class="fa-brands fa-facebook fa-2xl"></a></i>
                                    <a href="index.php" class="text-white"> <i class="fa-brands fa-x-twitter fa-2xl"></i></a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <h5 class="text-center">Turkey Care</h5>
                                <div class="hr"></div>
                                <p class=" demo mb-5 mb-lg-0">قوم باختيار افضل المشافي واكثرها تطوراً في المجال الطبي بعناية فائقة وذلك من حرصنا الشديد
                                    على
                                    تقديم افضل الخدمات والرعاية التي يحتاجها الشخص في فترة علاجه في تركيا .. حيث نضع خبرة
                                    سنوات
                                    من العمل والخبرة بين ايديكم لبناء طريقكم نحو النجاح</p>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <h5 class="text-center">روابط مهمة</h5>
                                <div class="hr"></div>
                                <p class="foot-links d-flex flex-column align-items-center gap-2 mb-5 mb-lg-0"><a
                                        href="single-page.php"><i
                                            class="fas fa-arrow-left"></i> علاج السمنة في تركيا
                                    </a>
                                    <a href="single-page.php"><i
                                            class="fas fa-arrow-left"></i> علاج الاسنان في تركيا
                                    </a>
                                    <a href="single-page.php"><i
                                            class="fas fa-arrow-left"></i> زراعة الشعر في تركيا
                                    </a>
                                    <a href="single-page.php"><i
                                            class="fas fa-arrow-left"></i> تجميل الانف في تركيا
                                    </a>
                                </p>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="mb-5 mb-lg-0">
                                    <div class="call-info">
                                        <h5 class="text-center">تواصل معنا </h5>
                                        <div class="hr"></div>
                                        <p class="d-flex flex-column align-items-center gap-2 mt-2">
                                        <div class="d-flex justify-content-center gap-3 mb-3">
                                            <i class="fa-solid fa-mobile-screen-button fa-2xl"></i>
                                            <i class="fa-brands fa-telegram fa-2xl"></i>
                                            <i class="fa-brands fa-whatsapp fa-2xl"></i>
                                        </div>
                                        <p class="text-center mb-2 mt-4" dir="ltr">+905528825888</p>
                                        <div class="text-center">
                                            <span class="mb-1"> <i class="fa-solid fa-envelope fa-2xl"></i></span>
                                            <p> info@turkey-care.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="text-center">
                                    <h5> جراحة السمنة في تركيا </h5>
                                    <div class="hr"></div>
                                    <div>
                                        <img src="./imgs/logo-white.webp" style="max-width: 200px;" alt="Logo"
                                            class="img-responsive" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="footer-menu-container d-flex justify-content-center flex-wrap text-center mb-3 mt-5">
                                    <a href="index.php">الرئيسية</a>
                                    <a href="aboutus.php">من نحن</a>
                                    <a href="contactus.php">اتصل بنا</a>
                                    <a href="privacy.php">سياسة الخصوصية</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rights text-center py-2 fw-bold">
            &copy; جميع الحقوق محفوظة
            <a href="https://turkey-care.com" title="عمليات التجميل في اسطنبول">عمليات التجميل في اسطنبول</a>
            |
            برمجة وتصميم :
            <a href="https://planet-www.com" target="_blank" title="بلانت للبرمجة والتصميم">ِPlanet WWW</a>
        </div>
    </footer>
</body>

</html>