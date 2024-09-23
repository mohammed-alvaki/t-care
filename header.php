<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Header
    </title>

    <link rel="stylesheet" href="main.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel='stylesheet' id='bootstrap-icons-css'
        href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css?ver=1.10.5' media='all' />

    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


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

        header {
            background-color: var(--mor-color);
            position: sticky;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .bars-icon {
            background-color: white !important;
            width: 40px;
            height: 40px;

        }

        .info {
            color: white;
            font-size: 1.2rem;
            margin-top: 1.5px;
        }

        header input {
            border-radius: 5px;
            border: none;
        }

        header input:focus {
            outline: none;
        }

        header input::placeholder {
            text-align: center;
        }

        .social-media i:hover {
            color: rgba(255, 255, 255, 0.7) !important;
        }

        /* -------------------- */
        .navbar {
            background-color: var(--gray-color) !important;
        }

        .navBtn {
            width: 40px;
            border-radius: 5px;
            padding: 8px;
            border: 1px solid gray;
        }

        .icon-bar {
            width: 100%;
            height: 4px;
            border-radius: 3px;
            background-color: gray;
        }

        a.nav-link {
            padding-right: 8px;
        }

        .navbar-nav>li:hover {
            background-color: white !important;
        }

        .navbar-nav>li>a {
            font-size: 1rem !important;
            font-weight: bold;
            color: gray;
        }

        .navbar-nav>li a:hover {
            color: var(--mor-color) !important;
        }

        .navbar-nav .dropdown-menu {
            width: fit-content !important;
            border-radius: 0 !important;
            margin-top: 0px;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .navbar-nav .dropdown-menu:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }

        .navbar-nav ul.dropdown-menu {
            padding-block: 0 !important;
        }

        .navbar-nav ul.dropdown-menu li {
            padding-block: 5px;
        }

        .navbar-nav .dropdown-menu li a {
            color: white !important;
            font-size: 1rem;
        }

        .navbar-nav .dropdown-menu li:hover {
            background-color: white !important;
        }

        .navbar-nav .dropdown-menu li:hover a {
            color: var(--mor-color) !important;
        }

        @media (min-width: 992px) {
            .bg-lg-white {
                background-color: white !important;
            }

            .navbar-nav>li>a {
                font-size: 0.95rem !important;
            }

            li.nav-item:hover .dropdown-menu {
                display: block;
            }

            .h-lg-100 {
                height: 100%;
            }
        }

        @media (min-width:1200px) {
            .navbar-nav>li>a {
                font-size: 1.2rem !important;
            }
        }

        .overlay {
            width: 100vw;
            height: 100vh;
            position: fixed;
            top: 0;
            z-index: 9999;
            display: none;
        }

        /* ------------------------ */
        #side-bar {
            background-color: rgba(255, 255, 255, 0.5);
        }

        #side-bar h4 {
            color: var(--mor-color) !important;
        }

        .offcanvas-start {
            width: 300px !important;
        }

        .offcanvas {
            background-color: rgba(255, 255, 255, 0.7) !important;
            backdrop-filter: blur(20px) !important;
            -webkit-backdrop-filter: blur(20px);
        }

        .offcanvas-backdrop {
            background-color: transparent !important;
            /* Make the overlay transparent */
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0 !important;
        }

        ul li a {
            text-decoration: none;
        }

        #side-bar .btn-close {
            border-radius: 50%;
            font-size: 15px !important;
            background-color: var(--mor-color) !important;
            opacity: 1;
            filter: invert(100%) sepia(100%) saturate(100%) hue-rotate(180deg);
        }

        .cat-item a {
            color: var(--darkBlue-color);
        }

        .cat-item a:hover {
            color: gray;
        }

        .sites>li {
            border-bottom: 1px solid white;
        }

        .sub-arr {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            margin-left: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #337ab7;
            color: white;
        }

        .cat-num {
            width: 22px;
            height: 22px;
            border-radius: 3px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: var(--mor-color);
            color: white;

        }

        .cat-item>div {
            padding-block: 5px;
        }

        .cat-item>ul li {
            padding-block: 5px;
        }

        .cat-item>ul {
            border: 1px solid;
            padding: 5px;
            margin: 10px;
        }

        .children {
            border: 1px solid var(--mor-color) !important;
            display: none;
        }

        .children.show {
            display: block;
        }

        ul.dropdown-menu.show {
            margin-top: 0;
        }

        .tags {
            height: 400px;
            overflow: hidden;
            text-align: start;
        }

        .tags a {
            text-decoration: none;
            background-color: var(--darkBlue-color);
            padding: 5px;
            border-radius: 3px;
            color: white;
            margin: 2px;
            display: inline-block;
            font-size: 0.7rem;
        }

        .tags a:hover {
            background-color: var(--mor-color);
        }

        .side-list>.menu-item {
            border-bottom: 1px solid #eee;
            padding: 7px;
            margin-bottom: 5px;
        }

        .side-list a {
            color: var(--darkBlue-color);
        }

        #side-bar .hr {
            background-image: linear-gradient(to right, transparent, white, transparent);
            opacity: 1;
            height: 2px;
            border-radius: 50%;
            margin-block: 15px;
        }

        .side-list a:hover {
            color: gray;
        }
    </style>
</head>

<body>

    <header class="p-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-5 col-md-3 col-lg-1">
                    <button class="btn bars-icon p-2 rounded-circle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <i class="fa-solid fa-bars fa-lg" style="color: #a1a8b5;"></i>
                    </button>
                </div>
                <div class="d-none d-lg-block col-lg-6">
                    <div class="info d-flex align-items-center h-100 gap-4">
                        <div dir="ltr"><i class="fas fa-envelope"> </i> info@turkey-care.com</div>
                        <div dir="ltr"><i class="fab fa-whatsapp"></i> +905528825888</div>
                    </div>
                </div>
                <div class="d-none d-md-block col-md-4 col-lg-3">
                    <div class="social-media h-100 d-flex justify-content-center align-items-center gap-3">
                        <a href="index.php" class="text-white"><i class="fa-brands fa-instagram fa-xl"></a></i>
                        <a href="https://www.facebook.com/turkrycare.tr/?show_switched_toast=0&show_invite_to_follow=0&show_switched_tooltip=0&show_podcast_settings=0&show_community_transition=0&show_community_review_changes=0&show_follower_visibility_disclosure=0" class="text-white"> <i class="fa-brands fa-facebook fa-xl"></a></i>
                        <a href="index.php" class="text-white"> <i class="fa-brands fa-x-twitter fa-xl"></i></a>
                    </div>
                </div>

                <div class="col-7 col-md-5 col-lg-2">
                    <form data-role="search" method="get" id="searchform" class="searchform d-flex align-items-center h-100"
                        action="https://turkey-care.com">
                        <input class="w-100 p-1" value="" name="s" id="s" placeholder="بحث" required="" type="text">
                    </form>
                </div>
            </div>
        </div>
    </header>

    <section class="heads shadow-sm">
        <div class="container-fluid w-100 container-lg">
            <div class="row">
                <div class="d-none d-lg-block col-0.5">
                </div>
                <div class="col-12 col-lg-3">
                    <a href="index.php" class="py-1 d-flex justify-content-center justify-content-lg-start ">
                        <img src="./imgs/logo.webp" alt="عمليات التجميل في اسطنبول"
                            style="max-width: 150px;" class="logo" />
                    </a>
                </div>
                <div class="d-none d-md-block col-md-12 col-lg-9 p-0">
                    <nav class="navbar navbar-expand-lg navbar-light py-2 py-lg-0 bg-lg-white h-lg-100">
                        <div class="container-fluid h-lg-100">
                            <a></a>
                            <button class="navBtn d-lg-none" type="button" data-bs-toggle="collapse"
                                data-bs-target="#bs-example-navbar-collapse-1" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <div class="nav-bars d-flex flex-column gap-1">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </div>
                            </button>
                            <div class="collapse navbar-collapse h-lg-100 py-md-" id="bs-example-navbar-collapse-1">
                                <ul class="navbar-nav h-lg-100">
                                    <li class="nav-item">
                                        <a class="nav-link h-lg-100 d-flex align-items-center" href="index.php"
                                            title="الرئيسية">الرئيسية</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle  h-lg-100 d-flex align-items-center" href="single-page.php"
                                            id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            علاج السمنة
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item"
                                                    href="single-page.php">عملية تكميم المعدة في
                                                    اسطنبول</a></li>
                                            <li><a class="dropdown-item" href="single-page.php">علاج
                                                    السمنة عند النساء</a></li>
                                            <li><a class="dropdown-item"
                                                    href="single-page.php">شفط الدهون بالليزر في
                                                    اسطنبول</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle  h-lg-100 d-flex align-items-center" href="single-page.php"
                                            id="navbarDropdown2" data-bs-toggle="dropdown" aria-expanded="false">
                                            تجميل الاسنان
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                            <li><a class="dropdown-item"
                                                    href="single-page.php">زراعة الاسنان في
                                                    اسطنبول</a></li>
                                            <li><a class="dropdown-item"
                                                    href="single-page.php">ابتسامة هوليوود
                                                    في اسطنبول</a></li>
                                            <li><a class="dropdown-item"
                                                    href="single-page.php">زراعة الاسنان
                                                    الفورية في تركيا</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle  h-lg-100 d-flex align-items-center" href="single-page.php"
                                            id="navbarDropdown3" data-bs-toggle="dropdown" aria-expanded="false">
                                            التجميل
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                            <li><a class="dropdown-item"
                                                    href="single-page.php">تجميل الانف في
                                                    اسطنبول</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle  h-lg-100 d-flex align-items-center" href="single-page.php"
                                            id="navbarDropdown4" data-bs-toggle="dropdown" aria-expanded="false">
                                            زراعة الشعر
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
                                            <li><a class="dropdown-item"
                                                    href="single-page.php">زراعة الشعر في
                                                    اسطنبول</a></li>
                                            <li><a class="dropdown-item"
                                                    href="single-page.php">زراعة شعر اللحية
                                                    والشارب</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link  h-lg-100 d-flex align-items-center"
                                            href="aboutus.php" title="من نحن">من نحن</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link  h-lg-100 d-flex align-items-center"
                                            href="contactus.php"
                                            title="اتصل بنا">اتصل بنا</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="side-bar">
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="logo-container text-center">
                    <img src="./imgs/logo.webp" style="width: 150px;" alt="logo">
                </div>
                <div class="hr"></div>

                <div>
                    <h4>أقسام الموقع</h4>
                    <ul class="sites">
                        <li class="cat-item">
                            <div class="cat-1 d-flex"><span class="sub-arr"><i class="fa-solid fa-plus"></i></span><a
                                    href="single-page.php">علاج السمنة في تركيا</a> <span
                                    class="cat-num ms-auto">27</span></div>
                            <ul class='children p-1'>
                                <li class="cat-item d-flex"><a
                                        href="archieve.php">تكميم
                                        و قص المعدة</a> <span class="cat-num ms-auto">9</span>
                                </li>
                                <li class="cat-item d-flex"><a
                                        href="archieve.php">تحويل مسار
                                        المعدة</a> <span class="cat-num ms-auto">5</span>
                                </li>
                                <li class="cat-item d-flex ms-auto"><a
                                        href="archieve.php">حزام او حلقة
                                        المعدة</a> <span class="cat-num ms-auto">3</span>
                                </li>
                                <li class="cat-item d-flex ms-auto"><a
                                        href="archieve.php">بالون
                                        المعدة</a> <span class="cat-num ms-auto">2</span>
                                </li>
                                <li class="cat-item d-flex ms-auto"><a
                                        href="archieve.php">طي
                                        المعدة</a> <span class="cat-num ms-auto">2</span>
                                </li>
                            </ul>
                        </li>
                        <li class="cat-item">
                            <div class="cat-2 d-flex"><span class="sub-arr"><i class="fa-solid fa-plus"></i></span><a
                                    href="archieve.php">علاج الاسنان في تركيا</a>
                                <span class="cat-num ms-auto">18</span>
                            </div>
                            <ul class='children p-1'>
                                <li class="cat-item d-flex ms-auto"><a
                                        href="archieve.php">زراعة
                                        الاسنان</a> <span class="cat-num ms-auto">11</span>
                                </li>
                                <li class="cat-item d-flex ms-auto"><a
                                        href="archieve.php">ابتسامة
                                        هوليوود</a> <span class="cat-num ms-auto">10</span>
                                </li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-1">
                            <div class="cat-4 d-flex">
                                <a href="archieve.php">مدونة
                                    التجميل في تركيا</a> <span class="cat-num ms-auto">12</span>
                            </div>
                        </li>
                        <li class="cat-item">
                            <div class="cat-3 d-flex">
                                <span class="sub-arr"><i class="fa-solid fa-plus"></i></i></span><a
                                    href="archieve.php">التجميل في تركيا</a>
                                <span class="cat-num ms-auto">14</span>
                            </div>
                            <ul class='children p-1'>
                                <li class="cat-item d-flex"></span><a
                                        href="archieve.php">تجميل
                                        الوجه والجسم</a> <span class="cat-num ms-auto">9</span>
                                </li>
                                <li class="cat-item d-flex"></span><a
                                        href="archieve.php">تجميل
                                        الانف في تركيا</a> <span class="cat-num ms-auto">4</span>
                                </li>
                            </ul>
                        </li>
                        <li class="cat-item">
                            <div class="cat-4 d-flex"><span class="sub-arr"><i class="fa-solid fa-plus"></i></span><a
                                    href="archieve.php">زراعة الشعر في تركيا</a> <span
                                    class="cat-num ms-auto">7</span></div>
                            <ul class='children p-1'>
                                <li class="cat-item d-flex"><a
                                        href="archieve.php">زراعة
                                        شعر الحاجب</a> <span class="cat-num ms-auto">1</span>
                                </li>
                                <li class="cat-item d-flex"><a
                                        href="archieve.php">زراعة
                                        شعر
                                        الرأس</a> <span class="cat-num ms-auto">1</span>
                                </li>
                            </ul>
                        </li>
                        <li class="cat-item border-0">
                            <div class="cat-5 d-flex"><span class="sub-arr"><i class="fa-solid fa-plus"></i></span><a
                                    href="archieve.php">اسئلة و اجوبة</a> <span
                                    class="cat-num ms-auto">5</span></div>
                            <ul class='children p-1'>
                                <li class="cat-item d-flex"><a
                                        href="archieve.php">اسئلة
                                        و اجوبة عن علاج الاسنان</a> <span class="cat-num ms-auto">2</span>
                                </li>
                                <li class="cat-item d-flex"><a
                                        href="archieve.php">اسئلة
                                        و اجوبة حول السمنة</a> <span class="cat-num ms-auto">2</span>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="mt-4">
                    <h4 class="mb-3">وسوم</h4>
                    <div class="tags">
                        <a href="https://turkey-care.com/tag/%d8%a7%d8%a8%d8%aa%d8%b3%d8%a7%d9%85%d8%a9-%d9%87%d9%88%d9%84%d9%8a%d9%88%d9%88%d8%af/"
                            aria-label="ابتسامة هوليوود (12 عنصر)">ابتسامة هوليوود</a>
                        <a href="https://turkey-care.com/tag/%d8%a7%d8%b3%d8%a6%d9%84%d8%a9-%d8%ad%d9%88%d9%84-%d8%a7%d9%84%d8%b3%d9%85%d9%86%d8%a9/"
                            aria-label="اسئلة حول السمنة (3 عناصر)">اسئلة حول السمنة</a>
                        <a href="https://turkey-care.com/tag/%d8%a7%d8%b3%d8%a8%d8%a7%d8%a8-%d8%a7%d9%84%d8%b3%d9%85%d9%86%d8%a9-%d9%88%d8%b9%d9%84%d8%a7%d8%ac%d9%87%d8%a7/"
                            aria-label="اسباب السمنة وعلاجها (7 عناصر)">اسباب السمنة وعلاجها</a>
                        <a href="https://turkey-care.com/tag/%d8%a7%d9%81%d8%b6%d9%84-%d8%b7%d8%a8%d9%8a%d8%a8-%d8%b9%d9%84%d8%a7%d8%ac-%d8%b3%d9%85%d9%86%d8%a9-%d9%81%d9%8a-%d8%aa%d8%b1%d9%83%d9%8a%d8%a7/"
                            aria-label="افضل طبيب علاج سمنة في تركيا (6 عناصر)">افضل طبيب علاج سمنة في تركيا</a>
                        <a href="https://turkey-care.com/tag/%d8%a7%d9%84%d8%aa%d8%ac%d9%85%d9%8a%d9%84-%d9%81%d9%8a-%d8%aa%d8%b1%d9%83%d9%8a%d8%a7/"
                            aria-label="التجميل في تركيا (4 عناصر)">التجميل في تركيا</a>
                        <a href="https://turkey-care.com/tag/%d8%a7%d9%84%d8%b3%d9%85%d9%86%d8%a9-%d8%a7%d8%b3%d8%a8%d8%a7%d8%a8%d9%87%d8%a7-%d9%88%d8%b9%d9%84%d8%a7%d8%ac%d9%87%d8%a7/"
                            aria-label="السمنة اسبابها وعلاجها (5 عناصر)">السمنة اسبابها وعلاجها</a>
                        <a href="https://turkey-care.com/tag/%d8%a7%d9%84%d8%b3%d9%85%d9%86%d8%a9-%d9%88%d9%85%d8%b1%d8%b6-%d8%a7%d9%84%d8%b3%d9%83%d8%b1%d9%8a/"
                            aria-label="السمنة ومرض السكري (4 عناصر)">السمنة ومرض السكري</a>
                        <a href="https://turkey-care.com/tag/%d8%a7%d9%84%d8%b7%d8%a8%d9%8a%d8%a8-%d8%ba%d9%88%d9%83%d9%85%d8%a7%d9%86-%d8%a7%d9%88%d8%b2%d8%aa%d9%88%d8%b1%d9%83/"
                            aria-label="الطبيب غوكمان اوزتورك (10 عناصر)">الطبيب غوكمان اوزتورك</a>
                        <a href="https://turkey-care.com/tag/%d8%a7%d9%84%d8%b7%d8%a8%d9%8a%d8%a8-%d9%83%d9%88%d9%83%d9%85%d8%a7%d9%86-%d8%a7%d9%88%d8%b2%d8%aa%d9%88%d8%b1%d9%83/"
                            aria-label="الطبيب كوكمان اوزتورك (12 عنصر)">الطبيب كوكمان اوزتورك</a>
                        <a href="https://turkey-care.com/tag/%d8%a7%d9%84%d8%b9%d9%84%d8%a7%d8%ac-%d9%81%d9%8a-%d8%aa%d8%b1%d9%83%d9%8a%d8%a7/"
                            aria-label="العلاج في تركيا (عنصران (2))">العلاج في تركيا</a>
                        <a href="https://turkey-care.com/tag/%d8%a7%d9%84%d9%84%d9%88%d9%85%d9%8a%d9%86%d9%8a%d8%b1-%d9%84%d9%85%d8%b9%d8%a7%d9%84%d8%ac%d8%a9-%d8%a7%d9%84%d8%a7%d8%b3%d9%86%d8%a7%d9%86/"
                            aria-label="اللومينير لمعالجة الاسنان (عنصران (2))">اللومينير لمعالجة الاسنان</a>
                        <a href="https://turkey-care.com/tag/%d8%aa%d8%ac%d9%85%d9%8a%d9%84-%d8%a7%d9%84%d8%a7%d9%86%d9%81/"
                            aria-label="تجميل الانف (3 عناصر)">تجميل الانف</a>
                        <a href="https://turkey-care.com/tag/%d8%aa%d8%ac%d9%85%d9%8a%d9%84-%d8%a7%d9%84%d8%a7%d9%86%d9%81-%d9%81%d9%8a-%d8%a7%d8%b3%d8%b7%d9%86%d8%a8%d9%88%d9%84/"
                            aria-label="تجميل الانف في اسطنبول (3 عناصر)">تجميل الانف في اسطنبول</a>
                        <a href="https://turkey-care.com/tag/%d8%aa%d8%ad%d9%88%d9%8a%d9%84-%d9%85%d8%b3%d8%a7%d8%b1-%d8%a7%d9%84%d9%85%d8%b9%d8%af%d8%a9/"
                            aria-label="تحويل مسار المعدة (3 عناصر)">تحويل مسار المعدة</a>
                        <a href="https://turkey-care.com/tag/%d8%aa%d9%88%d8%b1%d9%83%d9%8a-%d9%83%d9%8a%d8%b1/"
                            aria-label="توركي كير (6 عناصر)">توركي كير</a>
                        <a href="https://turkey-care.com/tag/%d8%ac%d8%b1%d8%a7%d8%ad%d8%a9-%d8%a7%d9%84%d8%a7%d8%b3%d9%86%d8%a7%d9%86/"
                            aria-label="جراحة الاسنان (6 عناصر)">جراحة الاسنان</a>
                        <a href="https://turkey-care.com/tag/%d8%ac%d8%b1%d8%a7%d8%ad%d8%a9-%d8%a7%d9%84%d8%a7%d8%b3%d9%86%d8%a7%d9%86-%d9%81%d9%8a-%d8%aa%d8%b1%d9%83%d9%8a%d8%a7/"
                            aria-label="جراحة الاسنان في تركيا (10 عناصر)">جراحة الاسنان في تركيا</a>
                        <a href="https://turkey-care.com/tag/%d8%ac%d8%b1%d8%a7%d8%ad%d8%a9-%d8%a7%d9%84%d8%b3%d9%85%d9%86%d8%a9-%d9%81%d9%8a-%d8%aa%d8%b1%d9%83%d9%8a%d8%a7/"
                            aria-label="جراحة السمنة في تركيا (9 عناصر)">جراحة السمنة في تركيا</a>
                        <a href="https://turkey-care.com/tag/%d8%ad%d9%82%d9%86-%d8%a7%d9%84%d9%81%d9%8a%d9%84%d8%b1/"
                            aria-label="حقن الفيلر (عنصران (2))">حقن الفيلر</a>
                        <a href="https://turkey-care.com/tag/%d8%b2%d8%b1%d8%a7%d8%b9%d8%a9-%d8%a7%d9%84%d8%a7%d8%b3%d9%86%d8%a7%d9%86/"
                            aria-label="زراعة الاسنان (عنصران (2))">زراعة الاسنان</a>
                        <a href="https://turkey-care.com/tag/%d8%b2%d8%b1%d8%a7%d8%b9%d8%a9-%d8%a7%d9%84%d8%a7%d8%b3%d9%86%d8%a7%d9%86-%d9%81%d9%8a-%d8%aa%d8%b1%d9%83%d9%8a%d8%a7/"
                            aria-label="زراعة الاسنان في تركيا (16 عنصر)">زراعة الاسنان في تركيا</a>
                        <a href="https://turkey-care.com/tag/%d8%b2%d8%b1%d8%a7%d8%b9%d8%a9-%d8%a7%d9%84%d8%b4%d8%b9%d8%b1/"
                            aria-label="زراعة الشعر (3 عناصر)">زراعة الشعر</a>
                        <a href="https://turkey-care.com/tag/hair-transplantation-in-turkey/"
                            aria-label="زراعة الشعر في تركيا (7 عناصر)">زراعة الشعر في تركيا</a>
                        <a href="https://turkey-care.com/tag/%d8%b2%d9%8a%d8%a7%d8%af%d8%a9-%d8%a7%d9%84%d9%88%d8%b2%d9%86/"
                            aria-label="زيادة الوزن (عنصران (2))">زيادة الوزن</a>
                        <a href="https://turkey-care.com/tag/%d8%b4%d9%81%d8%b7-%d8%a7%d9%84%d8%af%d9%87%d9%88%d9%86-%d8%a8%d8%a7%d9%84%d9%81%d9%8a%d8%b2%d8%b1/"
                            aria-label="شفط الدهون بالفيزر (عنصر واحد (1))">شفط الدهون بالفيزر</a>
                        <a href="https://turkey-care.com/tag/%d8%b4%d9%81%d8%b7-%d8%a7%d9%84%d8%af%d9%87%d9%88%d9%86-%d8%a8%d8%a7%d9%84%d9%84%d9%8a%d8%b2%d8%b1/"
                            aria-label="شفط الدهون بالليزر (عنصر واحد (1))">شفط الدهون بالليزر</a>
                        <a href="https://turkey-care.com/tag/%d8%b4%d9%81%d8%b7-%d8%a7%d9%84%d8%af%d9%87%d9%88%d9%86-%d9%81%d9%8a-%d8%aa%d8%b1%d9%83%d9%8a%d8%a7/"
                            aria-label="شفط الدهون في تركيا (عنصران (2))">شفط الدهون في تركيا</a>
                        <a href="https://turkey-care.com/tag/%d8%b9%d9%84%d8%a7%d8%ac-%d8%a7%d9%84%d8%a7%d8%b3%d9%86%d8%a7%d9%86/"
                            aria-label="علاج الاسنان (عنصران (2))">علاج الاسنان</a>
                        <a href="https://turkey-care.com/tag/%d8%b9%d9%84%d8%a7%d8%ac-%d8%a7%d9%84%d8%b3%d9%85%d9%86%d8%a9/"
                            aria-label="علاج السمنة (9 عناصر)">علاج السمنة</a>
                        <a href="https://turkey-care.com/tag/%d8%b9%d9%84%d8%a7%d8%ac-%d8%a7%d9%84%d8%b3%d9%85%d9%86%d8%a9-%d9%81%d9%8a-%d8%aa%d8%b1%d9%83%d9%8a%d8%a7/"
                            aria-label="علاج السمنة في تركيا (16 عنصر)">علاج السمنة في تركيا</a>
                        <a href="https://turkey-care.com/tag/%d8%b9%d9%84%d8%a7%d8%ac-%d9%88%d8%aa%d8%ac%d9%85%d9%8a%d9%84-%d8%a7%d9%84%d8%a7%d8%b3%d9%86%d8%a7%d9%86/"
                            aria-label="علاج وتجميل الاسنان (17 عنصر)">علاج وتجميل الاسنان</a>
                        <a href="https://turkey-care.com/tag/%d8%b9%d9%85%d9%84%d9%8a%d8%a7%d8%aa-%d8%a7%d9%84%d8%aa%d8%ac%d9%85%d9%8a%d9%84-%d9%81%d9%8a-%d8%aa%d8%b1%d9%83%d9%8a%d8%a7/"
                            aria-label="عمليات التجميل في تركيا (6 عناصر)">عمليات التجميل في تركيا</a>
                        <a href="https://turkey-care.com/tag/%d8%b9%d9%85%d9%84%d9%8a%d8%a7%d8%aa-%d8%aa%d8%b5%d8%ba%d9%8a%d8%b1-%d8%a7%d9%84%d9%85%d8%b9%d8%af%d8%a9/"
                            aria-label="عمليات تصغير المعدة (عنصران (2))">عمليات تصغير المعدة</a>
                        <a href="https://turkey-care.com/tag/%d8%b9%d9%85%d9%84%d9%8a%d8%a7%d8%aa-%d8%b4%d9%81%d8%b7-%d8%a7%d9%84%d8%af%d9%87%d9%88%d9%86/"
                            aria-label="عمليات شفط الدهون (3 عناصر)">عمليات شفط الدهون</a>
                        <a href="https://turkey-care.com/tag/%d8%b9%d9%85%d9%84%d9%8a%d8%a9-%d8%aa%d8%ac%d9%85%d9%8a%d9%84-%d8%a7%d9%84%d9%88%d8%ac%d9%87/"
                            aria-label="عملية تجميل الوجه (عنصران (2))">عملية تجميل الوجه</a>
                        <a href="https://turkey-care.com/tag/%d8%b9%d9%85%d9%84%d9%8a%d8%a9-%d8%aa%d8%af%d8%a8%d9%8a%d8%b3-%d8%a7%d9%84%d9%85%d8%b9%d8%af%d8%a9/"
                            aria-label="عملية تدبيس المعدة (3 عناصر)">عملية تدبيس المعدة</a>
                        <a href="https://turkey-care.com/tag/%d8%b9%d9%85%d9%84%d9%8a%d8%a9-%d8%aa%d8%b5%d8%ba%d9%8a%d8%b1-%d8%a7%d9%84%d8%a7%d9%86%d9%81-%d9%81%d9%8a-%d8%aa%d8%b1%d9%83%d9%8a%d8%a7/"
                            aria-label="عملية تصغير الانف في تركيا (عنصران (2))">عملية تصغير الانف في تركيا</a>
                        <a href="https://turkey-care.com/tag/%d8%b9%d9%85%d9%84%d9%8a%d8%a9-%d8%aa%d9%83%d9%85%d9%8a%d9%85-%d8%a7%d9%84%d9%85%d8%b9%d8%af%d8%a9-%d9%81%d9%8a-%d8%aa%d8%b1%d9%83%d9%8a%d8%a7-%d8%a7%d8%b3%d8%b7%d9%86%d8%a8%d9%88%d9%84/"
                            aria-label="عملية تكميم المعدة في تركيا اسطنبول (عنصران (2))">عملية تكميم المعدة في تركيا
                            اسطنبول</a>
                        <a href="https://turkey-care.com/tag/%d8%b9%d9%85%d9%84%d9%8a%d8%a9-%d8%b7%d9%8a-%d8%a7%d9%84%d9%85%d8%b9%d8%af%d8%a9/"
                            aria-label="عملية طي المعدة (11 عنصر)">عملية طي المعدة</a>
                        <a href="https://turkey-care.com/tag/%d8%b9%d9%85%d9%84%d9%8a%d8%a9-%d9%82%d8%b5-%d8%a7%d9%84%d9%85%d8%b9%d8%af%d8%a9/"
                            aria-label="عملية قص المعدة (4 عناصر)">عملية قص المعدة</a>
                        <a href="https://turkey-care.com/tag/%d9%82%d8%b5-%d8%a7%d9%84%d9%85%d8%b9%d8%af%d8%a9-%d9%81%d9%8a-%d8%aa%d8%b1%d9%83%d9%8a%d8%a7/"
                            aria-label="قص المعدة في تركيا (7 عناصر)">قص المعدة في تركيا</a>
                        <a href="https://turkey-care.com/tag/%d9%85%d8%a7%d9%87%d9%88-%d8%a7%d9%84%d9%84%d9%88%d9%85%d9%8a%d9%86%d9%8a%d8%b1-%d9%84%d9%84%d8%a7%d8%b3%d9%86%d8%a7%d9%86/"
                            aria-label="ماهو اللومينير للاسنان (عنصران (2))">ماهو اللومينير للاسنان</a>
                        <a href="https://turkey-care.com/tag/%d9%85%d8%a7%d9%87%d9%88-%d8%aa%d8%ac%d9%85%d9%8a%d9%84-%d8%a7%d9%84%d8%a7%d8%b3%d9%86%d8%a7%d9%86/"
                            aria-label="ماهو تجميل الاسنان (5 عناصر)">ماهو تجميل الاسنان</a>
                        <a href="https://turkey-care.com/tag/%d9%85%d8%a7-%d9%87%d9%8a-%d8%a7%d9%84%d8%b3%d9%85%d9%86%d8%a9/"
                            aria-label="ما هي السمنة (عنصران (2))">ما هي السمنة</a>
                        <a href="https://turkey-care.com/tag/%d9%85%d8%a7%d9%87%d9%8a-%d8%b2%d8%b1%d8%a7%d8%b9%d8%a9-%d8%a7%d9%84%d8%a7%d8%b3%d9%86%d8%a7%d9%86/"
                            aria-label="ماهي زراعة الاسنان (8 عناصر)">ماهي زراعة الاسنان</a>
                    </div>
                </div>

                <div class="mt-5 d-block  d-lg-none">
                    <ul class="side-list">
                        <li class="menu-item">
                            <a href="index.php" aria-current="page">الرئيسية</a>
                        </li>
                        <li class="menu-item">
                            <a class="d-inline-block mb-2" href="single-page.php">علاج
                                السمنة</a>
                            <ul class="sub-menu  d-flex flex-column gap-2">
                                <li class="menu-item"><a href="single-page.php">عملية تكميم
                                        المعدة في
                                        اسطنبول</a></li>
                                <li class="menu-item"><a href="single-page.php">علاج السمنة عند
                                        النساء</a></li>
                                <li class="menu-item"><a href="single-page.php">شفط الدهون
                                        بالليزر
                                        في
                                        اسطنبول</a></li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a class="d-inline-block mb-2" href="single-page.php">تجميل
                                الاسنان</a>
                            <ul class="sub-menu  d-flex flex-column gap-2">
                                <li class="menu-item"><a href="single-page.php">زراعة
                                        الاسنان في
                                        اسطنبول</a></li>
                                <li class="menu-item"><a href="single-page.php">ابتسامة
                                        هوليوود في
                                        اسطنبول</a></li>
                                <li class="menu-item"><a href="single-page.php">زراعة
                                        الاسنان
                                        الفورية في
                                        تركيا</a></li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a class="d-inline-block mb-2"
                                href="single-page.php">التجميل</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="single-page.php">تجميل الانف
                                        في
                                        اسطنبول</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item  d-flex flex-column gap-2">
                            <a href="single-page.php">زراعة الشعر</a>
                            <ul class="sub-menu  d-flex flex-column gap-2">
                                <li class="menu-item"><a href="single-page.php">زراعة
                                        الشعر
                                        في
                                        اسطنبول</a></li>
                                <li class="menu-item"><a href="single-page.php">زراعة شعر
                                        اللحية
                                        والشارب</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="aboutus.php">من نحن</a></li>
                        <li class="menu-item border-0"><a
                                href="contactus.php">اتصل بنا</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>


    <script>
        // open side bar's dropdowns
        const catBtn = document.querySelectorAll(".fa-plus");
        const cat = document.querySelectorAll(".children");

        for (let i = 0; i < catBtn.length; i++) {
            catBtn[i].addEventListener("click", function() {
                for (let j = 0; j < catBtn.length; j++) {
                    if (i !== j) {
                        cat[j].classList.remove("show");
                        catBtn[j].classList.remove("fa-xmark");
                        catBtn[j].classList.add("fa-plus");
                    }
                }
                if (cat[i].classList.contains("show")) {
                    cat[i].classList.remove("show");
                    catBtn[i].classList.remove("fa-xmark");
                    catBtn[i].classList.add("fa-plus");
                } else {
                    cat[i].classList.add("show");
                    catBtn[i].classList.remove("fa-plus");
                    catBtn[i].classList.add("fa-xmark");
                }
            });
        }
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>