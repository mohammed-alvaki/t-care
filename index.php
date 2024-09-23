<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <style>
        :root {
            --mor-color: #b257a5;
            --darkBlue-color: #337ab7;
            --gray-color: rgb(232, 229, 229);
        }

        body {
            font-family: "Almarai", sans-serif;
        }

        .hero-section .pw-box {
            width: 100%;
        }

        .hero-section .pw-box img {
            width: 100%;
            border-radius: 10px;
        }

        .hero-section .pw-new-prev {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 100;
            color: var(--mor-color);
        }

        .hero-section .pw-new-next {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 100;
            color: var(--mor-color);
        }

        .iframe-container {
            background-image: linear-gradient(45deg, var(--darkBlue-color), var(--mor-color));
            border-radius: 10px;
        }

        /* ---------------------------- */

        #cat-section {
            background-image: url('./imgs/cat-bg.webp');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            margin-top: 50px;
            padding: 30px 0;
        }

        #cat-section .card-container {
            background-color: var(--mor-color);
            border-radius: 10px;
            color: white;
            opacity: 0.7;
        }

        #cat-section .card-container img {
            max-width: 80px;
            margin-bottom: 10px;
            margin-inline: auto;
            display: block;
        }

        #cat-section .card-container p {
            text-align: justify;
        }

        #cat-section a.details {
            text-decoration: none;
            color: var(--darkBlue-color);
            background-color: white;
            padding: 5px;
            border-radius: 5px;
            margin-inline: auto;
            display: block;
            width: fit-content;
            transition: all 0.3s linear;
        }

        #cat-section a.details:hover {
            background-color: var(--darkBlue-color);
            color: white;
        }

        /* ---------------------------- */
        .fat-section h3 {
            font-weight: bold;
            color: var(--mor-color) !important;
        }

        .fat-section .line {
            height: 3px;
            width: 100%;
            background-color: var(--darkBlue-color);
        }

        .fat-section .newSwiper1 .swiper-slide {
            padding-block: 10px;
        }

        .fat-section .pw-box {
            max-width: 340px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 4px 4px rgba(0, 0, 0, 0.1);
        }

        .fat-section .pw-box img {
            width: 100%;

        }

        .fat-section .newSwiper1 h3 {
            font-size: 1.1rem;
            height: 45px;
            line-height: 25px;
            margin-bottom: 10px;
            text-align: center;
            margin-top: 5px;
        }

        .fat-section .newSwiper1 a {
            text-decoration: none;
        }

        .newSwiper1 .text {
            padding: 10px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .fat-section .newSwiper1 .text p {
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

        .fat-section .newSwiper1 .text a.swipBtn {
            display: block;
            width: fit-content;
            background-color: #b257a5;
            color: white;
            margin-right: auto;
            border-radius: 5px;
            padding: 7px;
            transition: all 0.2s linear;
        }

        .fat-section .newSwiper1 .text a.swipBtn:hover {
            opacity: 0.9;
        }

        .fat-section .newSwiper1>.pw-new-prev1 {
            position: absolute;
            right: 20px;
            top: 40%;
            transform: translateY(-40%);
            z-index: 100;
            color: var(--mor-color);
        }

        .fat-section .newSwiper1>.pw-new-next1 {
            position: absolute;
            left: 20px;
            top: 40%;
            transform: translateY(-40%);
            z-index: 100;
            color: var(--mor-color);
        }

        .fat-section .pw-new-prev1,
        .fat-section .pw-new-next1 {
            color: var(--mor-color);
        }

        /* ------------------------------ */
        #privacy-section {
            box-shadow: 0 0 4px 4px rgba(0, 0, 0, 0.1) inset;
            padding: 30px 0;
        }

        #privacy-section p {
            color: var(--darkBlue-color) !important;
            line-height: 30px;
            font-size: 1.2rem;
            text-align: justify;
        }

        /* ---------------------------- */
        .teeth-section h3 {
            font-weight: bold;
            color: var(--mor-color) !important;
        }

        .teeth-section .line {
            height: 3px;
            width: 100%;
            background-color: var(--darkBlue-color);
        }

        .teeth-section .newSwiper2 .swiper-slide {
            padding-block: 10px;
        }

        .teeth-section .pw-box {
            max-width: 340px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 4px 4px rgba(0, 0, 0, 0.1);
        }

        .teeth-section .pw-box img {
            width: 100%;

        }

        .teeth-section .newSwiper2 h3 {
            font-size: 1.1rem;
            height: 45px;
            line-height: 25px;
            margin-bottom: 10px;
            text-align: center;
            margin-top: 5px;
        }

        .teeth-section .newSwiper2 a {
            text-decoration: none;
        }

        .teeth-section .newSwiper2 .text {
            padding: 10px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .teeth-section .newSwiper2 .text p {
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

        .teeth-section .newSwiper2 .text a.swipBtn {
            display: block;
            width: fit-content;
            background-color: #b257a5;
            color: white;
            margin-right: auto;
            border-radius: 5px;
            padding: 7px;
        }

        .teeth-section .newSwiper2 .text a.swipBtn:hover {
            opacity: 0.8;
        }

        .teeth-section .newSwiper2>.pw-new-prev2 {
            position: absolute;
            right: 20px;
            top: 40%;
            transform: translateY(-40%);
            z-index: 100;
            color: var(--mor-color);
        }

        .teeth-section .newSwiper2>.pw-new-next2 {
            position: absolute;
            left: 20px;
            top: 40%;
            transform: translateY(-40%);
            z-index: 100;
            color: var(--mor-color);
        }

        .teeth-section .pw-new-prev2,
        .teeth-section .pw-new-next2 {
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
        <section class="hero-section mt-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-12 col-xl-8">
                                <div class="swiper newSwiper position-relative">
                                    <div class="pw-new-prev">
                                        <i class="fa-solid fa-circle-arrow-right fa-2xl"></i>
                                    </div>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="pw-box">
                                                <img src="./imgs/tc-sd1.webp" alt="image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="pw-box">
                                                <img src="./imgs/tc-sd2.webp" alt="image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="pw-box">
                                                <img src="./imgs/tc-sd3.webp" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pw-new-next">
                                        <i class="fa-solid fa-circle-arrow-left fa-2xl"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4">
                                <div class="mt-5 mt-xl-0">
                                    <h1 class="text-center text-md-start fs-4 mb-4">عمليات التجميل في اسطنبول</h1>
                                    <div class="iframe-container p-3">
                                        <p class="text-white text-center">سنقوم بالتواصل معكم بعد إرسال المعلومات</p>
                                        <div id="zf_div_gu_WCPhlEn7IfWs35xJPqP5bTCGwoOF2w4KAflpe4VA"></div>
                                        <script type="text/javascript">
                                            (function() {
                                                try {
                                                    var f = document.createElement("iframe");
                                                    f.src = 'https://forms.zohopublic.eu/atiragruop/form/TCC/formperma/gu_WCPhlEn7IfWs35xJPqP5bTCGwoOF2w4KAflpe4VA?zf_rszfm=1';
                                                    f.style.border = "none";
                                                    f.style.height = "460px";
                                                    f.style.width = "100%";
                                                    f.style.transition = "all 0.5s ease";
                                                    f.setAttribute("aria-label", '\u0637\u0644\u0628\x20\u0627\u0633\u062A\u0634\u0627\u0631\u0629\x20TCC');

                                                    var d = document.getElementById("zf_div_gu_WCPhlEn7IfWs35xJPqP5bTCGwoOF2w4KAflpe4VA");
                                                    d.appendChild(f);
                                                    window.addEventListener('message', function() {
                                                        var evntData = event.data;
                                                        if (evntData && evntData.constructor == String) {
                                                            var zf_ifrm_data = evntData.split("|");
                                                            if (zf_ifrm_data.length == 2) {
                                                                var zf_perma = zf_ifrm_data[0];
                                                                var zf_ifrm_ht_nw = (parseInt(zf_ifrm_data[1], 10) + 15) + "px";
                                                                var iframe = document.getElementById("zf_div_gu_WCPhlEn7IfWs35xJPqP5bTCGwoOF2w4KAflpe4VA").getElementsByTagName("iframe")[0];
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
                    </div>
                </div>
            </div>
        </section>

        <section id="cat-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11">
                        <div class="row justify-content-center">
                            <div class="d-none d-lg-block col-lg-3">
                            </div>
                            <div class="col-12 mb-3 mb-lg-0  col-md-6 col-lg-3">
                                <div class="card-container p-3 d-flex flex-column h-lg-100">
                                    <img src="./imgs/dermal-filler.webp" alt="cat-img">
                                    <h5 class="text-center fw-bold  mb-3 mb-md-0">عمليات التجميل في تركيا</h5>
                                    <p class="d-none d-md-block">مشفانا يقدم العديد من الخيارات الطبية و الجراحية في مجال التجميل، حيث نقوم بأجراء ( تجميل الانف،و زراعة الشعر لدى النساء و الرجال ) على يد امهر و اشهر الاطباء في تركيا والعالم و بأحدث الاجهزة و التقنيات و باحدث الطرق التي توصل اليه العلم في مجال التجميل للحصول على نتائج مضمونة..</p>
                                    <a class="details  mt-auto" href="single-page.php"><i class="fas fa-hand-point-left"></i> التفاصيل</a>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="card-container p-3 d-flex flex-column h-lg-100">
                                    <img src="./imgs/molar-inside-a-shield.webp" alt="cat-img">
                                    <h5 class="text-center fw-bold  mb-3 mb-md-0">تجميل الأسنان في تركيا</h5>
                                    <p class="d-none d-md-block">مشفانا يقدم العديد من الخيارات الطبية و الجراحية لعلاج و تجميل الاسنان، حيث نقوم بأجراء علاج وتجميل الاسنان ( زراعة الاسنان ، ابتسامة هوليوود، تصحيح عيوب الاسنان) على يد امهر و اشهر الاطباء في تركيا والعالم و بأحدث الاجهزة و التقنيات و بمدة قصيرة و نتائج مضمونة..</p>
                                    <a class="details mt-auto" href="single-page.php"><i class="fas fa-hand-point-left"></i> التفاصيل</a>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="card-container d-flex flex-column p-3 h-lg-100 mb-4 mb-lg-0">
                                    <img src="./imgs/fat.webp" alt="cat-img">
                                    <h5 class="text-center fw-bold mb-3 mb-md-0">علاج السمنة في تركيا</h5>
                                    <p class="d-none d-md-block">مشفانا يقدم العديد من الخيارات الطبية و الجراحية لفقدان الوزن الزائد ، حيث نقوم بأجراء جراحات السمنة التنظيرية المتطورة بجميع انواعها ( حزام او حلقة المعدة، بالون المعدة، طي المعدة، تكميم المعدة، تحويل مسار المعدة) على يد امهر و اشهر الاطباء في تركيا والعالم ..</p>
                                    <a class="details mt-auto" href="single-page.php"><i class="fas fa-hand-point-left"></i> التفاصيل</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="fat-section mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11">
                        <h3 class="text-center">علاج السمنة في تركيا</h3>
                        <div class="line my-3">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11 text-center">
                        <div class="swiper newSwiper1">
                            <div class="pw-new-prev1 d-none d-md-block">
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
                            <div class="pw-new-next1 d-none d-md-block">
                                <i class="fa-solid fa-circle-arrow-left fa-2xl"></i>
                            </div>
                            <div class="row mb-5 mt-2">
                                <div class="col-6">
                                    <div class="pw-new-prev1 text-start d-md-none">
                                        <i class="fa-solid fa-circle-arrow-right fa-2xl"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pw-new-next1 text-end d-md-none">
                                        <i class="fa-solid fa-circle-arrow-left fa-2xl"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="privacy-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11">
                        <div class="text-center">
                            <div class="logo-container mb-4 d-none d-md-block">
                                <img src="./imgs/logo.webp" alt="logo-image" style="max-width: 300px;">
                            </div>
                            <p>عيادات تركيا كير .. عياداتنا متخصصة في المجالات الطبية كافة واهمها زراعة الشعر و الاسنان و علاج السمنة و العمليات التجميلية كافة. حيث تسعى عيادات تركيا كير لتقديم الخدمات الطبية عالية الجودة تحت اشراف خبراء ومختصين.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="teeth-section mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11">
                        <h3 class="text-center">علاج الاسنان في تركيا</h3>
                        <div class="line my-3">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11 text-center">
                        <div class="swiper newSwiper2">
                            <div class="pw-new-prev2 d-none d-md-block">
                                <i class="fa-solid fa-circle-arrow-right fa-2xl"></i>
                            </div>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="pw-box">
                                        <a href="https://turkey-care.com/dental-implants-in-istanbul/" title="زراعة الاسنان في اسطنبول">
                                            <div class="img-container">
                                                <img src="./imgs/teeth/img2.webp" alt="image">
                                            </div>
                                            <div class="text">
                                                <h3>زراعة الاسنان في اسطنبول</h3>
                                                <p>تأتي خدمات طب الأسنان وعلى رأسها زراعة الاسنان في اسطنبول في مقدمة الخدمات الصحية التي تقدمها المستشفيات والمراكز الطبية في تركيا</p>
                                                <a href="https://turkey-care.com/dental-implants-in-istanbul/" title="زراعة الاسنان في اسطنبول" class="swipBtn">
                                                    <i class="far fa-hand-point-left"></i>
                                                    التفاصيل
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="pw-box">
                                        <a href="single-page.php" title="العدسات المستخدمة في إبتسامة هوليود">
                                            <div class="img-container">
                                                <img src="./imgs/teeth/img5.webp" alt="image">
                                            </div>
                                            <div class="text">
                                                <h3>العدسات المستخدمة في إبتسامة هوليود</h3>
                                                <p>العدسات المستخدمة في إبتسامة هوليود، الفينير (veneer) أو الفيسنغ (Facing) هما مصطلحان مترادفان يستخدمان للتعبير عن أي طبقة رقيقة تلصق على الوجه الخارجي للأسنان.</p>
                                                <a href="single-page.php" title="العدسات المستخدمة في إبتسامة هوليود" class="swipBtn">
                                                    <i class="far fa-hand-point-left"></i>
                                                    التفاصيل
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="pw-box">
                                        <a href="single-page.php" title="هل يمكن خلع السن المزروع؟">
                                            <div class="img-container">
                                                <img src="./imgs/teeth/img2.webp" alt="image">
                                            </div>
                                            <div class="text">
                                                <h3>هل يمكن خلع السن المزروع؟</h3>
                                                <p>هل يمكن خلع السن المزروع؟ نعم، من الممكن إزالة زراعة الأسنان من فم المريض، على الرغم من أنها تعتبر خيار بديل ودائم</p>
                                                <a href="single-page.php" title="هل يمكن خلع السن المزروع؟" class="swipBtn">
                                                    <i class="far fa-hand-point-left"></i>
                                                    التفاصيل
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="pw-box">
                                        <a href="single-page.php" title="ابتسامة هوليوود في اسطنبول">
                                            <div class="img-container">
                                                <img src="./imgs/teeth/img4.webp" alt="image">
                                            </div>
                                            <div class="text">
                                                <h3>ابتسامة هوليوود في اسطنبول</h3>
                                                <p>الكثير منا اصبح الان يرغب في اجراء ابتسامة هوليوود في اسطنبول لتحسين من مظهر ابتسامته سنقدم لكم في مقالنا هذا بعض النصائح حول ما يخص ابتسامة هوليوود.</p>
                                                <a href="single-page.php" title="ابتسامة هوليوود في اسطنبول" class="swipBtn">
                                                    <i class="far fa-hand-point-left"></i>
                                                    التفاصيل
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="pw-box">
                                        <a href="single-page.php" title="علاج تفرق الأسنان بالتقويم">
                                            <div class="img-container">
                                                <img src="./imgs/teeth/img1.webp" alt="image">
                                            </div>
                                            <div class="text">
                                                <h3>علاج تفرق الأسنان بالتقويم</h3>
                                                <p>علاج تفرق الأسنان بالتقويم, يصاب الكبار و الأطفال بمشكلة تفرق أو تباعد الأسنان على حد سواء. يحدث تفرق الأسنان لعدة أسباب،</p>
                                                <a href="single-page.php" title="علاج تفرق الأسنان بالتقويم" class="swipBtn">
                                                    <i class="far fa-hand-point-left"></i>
                                                    التفاصيل
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="pw-box">
                                        <a href="single-page.php" title="اسباب اصفرار الاسنان وحلولها">
                                            <div class="img-container">
                                                <img src="./imgs/teeth/img6.webp" alt="image">
                                            </div>
                                            <div class="text">
                                                <h3>اسباب اصفرار الاسنان وحلولها</h3>
                                                <p>نسلط الضوء في هذا المقال على اسباب اصفرار الاسنان ونعرض الحلول المناسبة وكيفية عمل تبييض الاسنان.</p>
                                                <a href="single-page.php" title="اسباب اصفرار الاسنان وحلولها" class="swipBtn">
                                                    <i class="far fa-hand-point-left"></i>
                                                    التفاصيل
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="pw-box">
                                        <a href="single-page.php" title="طرق علاج تفرق الاسنان بدون تقويم">
                                            <div class="img-container">
                                                <img src="./imgs/teeth/img3.webp" alt="image">
                                            </div>
                                            <div class="text">
                                                <h3>طرق علاج تفرق الاسنان بدون تقويم</h3>
                                                <p>الكثير منا لا يرغب في تركيب تقويم الاسنان لاسباب كثيرة ولكن لديكم الحل الآن لتجميل أسنانكم وعلاج تفرق الاسنان بدون تقويم. جميع الطرق في المقال التالي ..</p>
                                                <a href="single-page.php" title="طرق علاج تفرق الاسنان بدون تقويم" class="swipBtn">
                                                    <i class="far fa-hand-point-left"></i>
                                                    التفاصيل
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="pw-new-next2 d-none d-md-block">
                                <i class="fa-solid fa-circle-arrow-left fa-2xl"></i>
                            </div>
                            <div class="row mb-5 mt-2">
                                <div class="col-6">
                                    <div class="pw-new-prev2 text-start d-md-none">
                                        <i class="fa-solid fa-circle-arrow-right fa-2xl"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pw-new-next2 text-end d-md-none">
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


    <?php include "footer.php"; ?>


    <!-- swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <!-- the names of classes must be changed if we use more than one swiper -->
    <script>
        var swiper = new Swiper(".newSwiper", {
            loop: true,
            centeredSlides: true,
            direction: 'horizontal',
            slidesPerView: 1,
            spaceBetween: 5,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            effect: 'coverflow',
            grabCursor: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            navigation: {
                nextEl: ".pw-new-next",
                prevEl: ".pw-new-prev",
            }
        });
    </script>

    <!-- ------------------------- -->
    <script>
        var swiper = new Swiper(".newSwiper1", {
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
                nextEl: ".pw-new-next1",
                prevEl: ".pw-new-prev1",
            }
        });
    </script>

    <!-- ------------------------- -->
    <script>
        var swiper = new Swiper(".newSwiper2", {
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
                nextEl: ".pw-new-next2",
                prevEl: ".pw-new-prev2",
            }
        });
    </script>
</body>

</html>