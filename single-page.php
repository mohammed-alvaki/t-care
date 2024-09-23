<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Single Page
    </title>

    <style>
        :root {
            --mor-color: #b257a5;
            --darkBlue-color: #337ab7;
            --gray-color: rgb(232, 229, 229);
        }

        body {
            font-family: "Almarai", sans-serif;
        }

        a {
            text-decoration: none !important;
        }

        .singlepage-mybreadcrumb {
            background-color: #eee;
            padding: 10px 20px;
            display: block;
            border-top: 3px solid var(--mor-color);
        }

        .singlepage-mybreadcrumb ol {
            margin: 0 !important;
            padding: 0 !important;
        }

        .singlepage-mybreadcrumb i {
            color: black;
        }

        .singlepage-mybreadcrumb .breadcrumb-item {
            color: var(--mor-color) !important;
        }

        .singlepage-mybreadcrumb .breadcrumb-item+.breadcrumb-item::before {
            color: #ddd !important;
        }

        .main-section .img-container {
            min-width: 300px;
        }

        .main-section .img-container img {
            width: 100%;
            border-radius: 10px;
        }

        .main-section p.title {
            background-color: var(--mor-color);
            color: white;
            padding: 7px;
            font-size: 1.4rem;
            font-weight: bold;
            border-radius: 7px;
        }

        .main-section p.demo {
            padding: 7px;
            border-radius: 7px;
            border: 1px solid;
        }

        .main-section iframe {
            border-radius: 7px;
        }

        p.consult {
            color: var(--mor-color);
        }

        /* ------------------------------ */

        /* ---------------------------- */
        .more-section h3 {
            font-weight: bold;
            color: var(--mor-color) !important;
        }

        .more-section .line {
            height: 3px;
            width: 100%;
            background-color: var(--darkBlue-color);
        }

        .more-section .newSwiper3 .swiper-slide {
            padding-block: 10px;
        }

        .more-section .pw-box {
            max-width: 340px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 4px 4px rgba(0, 0, 0, 0.1);
        }

        .more-section .pw-box img {
            width: 100%;

        }

        .more-section .newSwiper3 h3 {
            font-size: 1.1rem;
            height: 45px;
            line-height: 25px;
            margin-bottom: 10px;
            margin-top: 5px;
        }

        .more-section .newSwiper3 a {
            text-decoration: none;
        }

        .newSwiper3 .text {
            padding: 10px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .more-section .newSwiper3 .text p {
            text-align: justify;
            font-size: 15px;
            height: 7rem;
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 4;
            text-overflow: ellipsis;
            line-height: 1.8rem;
            color: rgba(0, 0, 0, 0.5);
        }

        .more-section .newSwiper3 .text a.swipBtn {
            display: block;
            width: fit-content;
            background-color: #b257a5;
            color: white;
            margin-right: auto;
            border-radius: 5px;
            padding: 7px;
            transition: all 0.3s linear;
        }

        .more-section .newSwiper3 .text a.swipBtn:hover {
            opacity: 0.8;
        }

        .more-section .newSwiper3>.pw-new-prev3 {
            position: absolute;
            right: 20px;
            top: 40%;
            transform: translateY(-40%);
            z-index: 100;
            color: var(--mor-color);
        }

        .more-section .newSwiper3>.pw-new-next3 {
            position: absolute;
            left: 20px;
            top: 40%;
            transform: translateY(-40%);
            z-index: 100;
            color: var(--mor-color);
        }

        .more-section .pw-new-prev3,
        .more-section .pw-new-next3 {
            color: var(--mor-color);
        }

        .whatsapp {
            background-color: #58b501;
            padding: 7px 10px;
            display: inline-block;
            position: fixed;
            bottom: 10px;
            right: 20px;
            box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
    </style>

</head>

<body>

    <?php include "header.php"; ?>


    <main>

        <nav class="singlepage-mybreadcrumb w-100 d-none d-md-block" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house fa-lg"></i></a></li>
                <li class="breadcrumb-item fw-bold"><a class="text-dark" href="single-page.php">مدونة التجميل في تركيا</a>
                </li>
                <li class="breadcrumb-item active fw-bold" aria-current="page">الصفحة الحالية</li>
            </ol>
        </nav>

        <section class="main-section mt-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="img-container">
                            <img src="./imgs/cat/turkey-care-ready.webp" alt="image">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="content mt-5 mt-md-0">
                            <p class="title">عملية تكميم المعدة في اسطنبول</p>
                            <p class="demo">عملية تكميم المعدة في اسطنبول عبارة عن عملية جراحية يتم فيها تكميم المعدة او بمعنى اخر استئصال جزء من المعدة جراحيا.</p>
                            <p class="consult">طلب استشارة مجانية</p>
                            <div id="zf_div_iDDgSeba90nRAF_lRkFa47pCrStKUZHJSA-8qpkQ4Z0"></div>
                            <script type="text/javascript">
                                (function() {
                                    try {
                                        var f = document.createElement("iframe");
                                        f.src = 'https://forms.zohopublic.eu/atiragruop/form/TCCConsultationForm/formperma/iDDgSeba90nRAF_lRkFa47pCrStKUZHJSA-8qpkQ4Z0?zf_rszfm=1';
                                        f.style.border = "none";
                                        f.style.aspectRatio = "3/2";
                                        f.style.width = "100%";
                                        f.style.transition = "all 0.5s ease";
                                        f.setAttribute("aria-label", '\u0637\u0644\u0628\x20\u0627\u0633\u062A\u0634\u0627\u0631\u0629\x20\u0645\u062C\u0627\u0646\u064A\u0629');
                                        var d = document.getElementById("zf_div_iDDgSeba90nRAF_lRkFa47pCrStKUZHJSA-8qpkQ4Z0");
                                        d.appendChild(f);
                                        window.addEventListener('message', function() {
                                            var evntData = event.data;
                                            if (evntData && evntData.constructor == String) {
                                                var zf_ifrm_data = evntData.split("|");
                                                if (zf_ifrm_data.length == 2) {
                                                    var zf_perma = zf_ifrm_data[0];
                                                    var zf_ifrm_ht_nw = (parseInt(zf_ifrm_data[1], 10) + 15) + "px";
                                                    var iframe = document.getElementById("zf_div_iDDgSeba90nRAF_lRkFa47pCrStKUZHJSA-8qpkQ4Z0").getElementsByTagName("iframe")[0];
                                                    if ((iframe.src).indexOf('formperma') > 0 && (iframe.src).indexOf(zf_perma) > 0) {
                                                        var prevIframeHeight = iframe.style.height;
                                                        if (prevIframeHeight != zf_ifrm_ht_nw) {
                                                            iframe.style.height = zf_ifrm_ht_nw;
                                                        }
                                                    }
                                                }
                                            }
                                        }, false);
                                    } catch (e) {}
                                })();
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="more-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11">
                        <h3>المزيد من المواضيع
                        </h3>
                        <div class="line my-3">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11 text-center">
                        <div class="swiper newSwiper3">
                            <div class="pw-new-prev3 d-none d-md-block">
                                <i class="fa-solid fa-circle-arrow-right fa-2xl"></i>
                            </div>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="pw-box">
                                        <a href="single-page.php" title="عملية تكميم المعدة في اسطنبول">
                                            <div class="img-container">
                                                <img src="./imgs/cat/cut-the-stomach-istanbul.webp" alt="image">
                                            </div>
                                            <div class="text">
                                                <h3>عملية تكميم المعدة في اسطنبول</h3>
                                                <p>عملية تكميم المعدة في اسطنبول عبارة عن عملية جراحية يتم فيها تكميم المعدة او بمعنى اخر استئصال جزء من المعدة جراحيا.</p>
                                                <a href="single-page.php" title="عملية تكميم المعدة في اسطنبول" class="swipBtn">
                                                    <i class="far fa-hand-point-left"></i>
                                                    التفاصيل
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="pw-box">
                                        <a href="single-page.php" title="علاج السمنة عند النساء">
                                            <div class="img-container">
                                                <img src="./imgs/cat/turkey-care-ready.webp" alt="image">
                                            </div>
                                            <div class="text">
                                                <h3>علاج السمنة عند النساء</h3>
                                                <p>علاج السمنة عند النساء، تتعدّد الأسباب التي تؤدي الى تراكم الدهون في مناطق مختلفة من الجسم، وبالتالي تؤدي الى زيادة في الوزن</p>
                                                <a href="single-page.php" title="علاج السمنة عند النساء" class="swipBtn">
                                                    <i class="far fa-hand-point-left"></i>
                                                    التفاصيل
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="pw-box">
                                        <a href="single-page.php" title="الفرق بين تكميم المعدة وتحويل المسار">
                                            <div class="img-container">
                                                <img src="./imgs/cat/photo_5803414524399827784_y.webp" alt="image">
                                            </div>
                                            <div class="text">
                                                <h3>الفرق بين تكميم المعدة وتحويل المسار</h3>
                                                <p>تُعتبر عملية تحويل المسار هي الأسرع من حيث خسارة الوزن، حيث يشهد المريض خسارة أسرع في الوزن مقارنةً بعملية تكميم المعدة.</p>
                                                <a href="single-page.php" title="الفرق بين تكميم المعدة وتحويل المسار" class="swipBtn">
                                                    <i class="far fa-hand-point-left"></i>
                                                    التفاصيل
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="pw-box">
                                        <a href="single-page.php" title="عمليات علاج السمنة في تركيا">
                                            <div class="img-container">
                                                <img src="./imgs/cat/turkey-care-ready-9.webp" alt="image">
                                            </div>
                                            <div class="text">
                                                <h3>عمليات علاج السمنة في تركيا</h3>
                                                <p>عمليات علاج السمنة في تركيا. أن السمنة تشكل هاجساً جمالياً وصحياً لدى الكثير، وهذا أمر مبرر لما قد يحمله الوزن الزائد من مشكلات جدية ومقلقة.</p>
                                                <a href="single-page.php" title="عمليات علاج السمنة في تركيا" class="swipBtn">
                                                    <i class="far fa-hand-point-left"></i>
                                                    التفاصيل
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="pw-box">
                                        <a href="single-page.php" title="ما هي انواع ودرجات السمنة">
                                            <div class="img-container">
                                                <img src="./imgs/cat/turkey-care-ready-5-1.webp" alt="image">
                                            </div>
                                            <div class="text">
                                                <h3>ما هي انواع ودرجات السمنة</h3>
                                                <p>سنناقش في هذا المقال انواع ودرجات السمنة ونسلط الضوء على طرق العلاج وطرق الوقاية من السمنة. نتمنى لكم دوام الصحة والعافية.</p>
                                                <a href="single-page.php" title="ما هي انواع ودرجات السمنة" class="swipBtn">
                                                    <i class="far fa-hand-point-left"></i>
                                                    التفاصيل
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="pw-box">
                                        <a href="single-page.php" title="عملية طي المعدة">
                                            <div class="img-container">
                                                <img src="./imgs/cat/turkey-care-ready-6-1.webp" alt="image">
                                            </div>
                                            <div class="text">
                                                <h3>عملية طي المعدة</h3>
                                                <p>عمليات طي المعدة هي تهدف الى تصفير المعدة والاشخاص الذين يحتاجوها هما اصحاب الوزن الزائد </p>
                                                <a href="single-page.php" title="عملية طي المعدة" class="swipBtn">
                                                    <i class="far fa-hand-point-left"></i>
                                                    التفاصيل
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="pw-box">
                                        <a href="single-page.php" title="عملية تحويل مسار المعدة في تركيا">
                                            <div class="img-container">
                                                <img src="./imgs/cat/turkey-care-ready-1-1.webp" alt="image">
                                            </div>
                                            <div class="text">
                                                <h3>عملية تحويل مسار المعدة في تركيا</h3>
                                                <p>عملية تحويل مسار المعدة في تركيا (Gastric Bypass) وكيف تحصل هذه العملية ومتى نحتاج لهذه العملية اليكم كل التفاصيل في المقال التالي </p>
                                                <a href="single-page.php" title="عملية تحويل مسار المعدة في تركيا" class="swipBtn">
                                                    <i class="far fa-hand-point-left"></i>
                                                    التفاصيل
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="pw-box">
                                        <a href="single-page.php" title="عملية شفط الدهون في تركيا">
                                            <div class="img-container">
                                                <img src="./imgs/cat/turkey-care-ready-9.webp" alt="image">
                                            </div>
                                            <div class="text">
                                                <h3>عملية شفط الدهون في تركيا</h3>
                                                <p>تهدف عملية شفط الدهون في تركيا إلى إزالة الدهون الزائدة في مناطق معينة في الجسم، وذلك لتحسين مظهر الجسم من الناحية الجمالية.</p>
                                                <a href="single-page.php" title="عملية شفط الدهون في تركيا" class="swipBtn">
                                                    <i class="far fa-hand-point-left"></i>
                                                    التفاصيل
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="pw-new-next3 d-none d-md-block">
                                <i class="fa-solid fa-circle-arrow-left fa-2xl"></i>
                            </div>
                            <div class="row mb-5 mt-2">
                                <div class="col-6">
                                    <div class="pw-new-prev3 text-start d-md-none">
                                        <i class="fa-solid fa-circle-arrow-right fa-2xl"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pw-new-next3 text-end d-md-none">
                                        <i class="fa-solid fa-circle-arrow-left fa-2xl"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>



    <div class="whatsapp rounded-pill">
        <a href="https://api.whatsapp.com/send?phone=905062958888&text=https://turkey-care.com/%d8%a7%d8%aa%d8%b5%d9%84-%d8%a8%d9%86%d8%a7%0A%0A %0A"
            target="_blank"
            class="d-flex align-items-center gap-1 text-decoration-none text-white fw-bold">
            <img src="./imgs/whatsapp-icon.png" alt="Whatsapp" />
            مباشر
        </a>
    </div>


    <?php
    include "footer.php"; ?>



    <!-- ------------------------- -->
    <!-- swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".newSwiper3", {
            loop: true,
            slidesPerView: 1.3,
            spaceBetween: 15,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            grabCursor: true,
            centeredSlides: true,
            breakpoints: {
                500: {
                    slidesPerView: 1.7,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 2.3,
                    spaceBetween: 15,
                },
                992: {
                    slidesPerView: 3.5,
                    spaceBetween: 15,
                },
                1200: {
                    slidesPerView: 4.2,
                    spaceBetween: 15,
                },
            },
            navigation: {
                nextEl: ".pw-new-next3",
                prevEl: ".pw-new-prev3",
            }
        });
    </script>

</body>

</body>

</html>