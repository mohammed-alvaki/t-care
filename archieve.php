<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Archieve
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

        .mybreadcrumb {
            background-color: #eee;
            padding: 10px 20px;
            display: block;
            border-top: 3px solid var(--mor-color);
        }

        ol {
            margin: 0 !important;
            padding: 0 !important;
        }

        .mybreadcrumb i {
            color: black;
        }

        .breadcrumb-item {
            color: var(--mor-color) !important;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            color: #ddd !important;
        }

        .main-section h3 {
            font-weight: bold;
            color: var(--mor-color) !important;
        }

        .main-section .line {
            height: 3px;
            width: 100%;
            background-color: var(--darkBlue-color);
        }


        .main-section .pw-box {
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 4px 4px rgba(0, 0, 0, 0.1);
        }

        .main-section .pw-box img {
            width: 100%;
        }

        .main-section h3 {
            font-size: 1.1rem;
            height: 45px;
            line-height: 25px;
            text-align: center;
        }

        .main-section h3.title {
            font-size: 1.4rem;
        }

        .main-section a {
            text-decoration: none;
        }

        .main-section .text {
            padding: 10px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .main-section .text p {
            text-align: justify;
            font-size: 15px;
            height: 5.2rem;
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 4;
            text-overflow: ellipsis;
            line-height: 1.8rem;
            color: rgba(0, 0, 0, 0.5);
        }

        .main-section .text a.moreBtn {
            display: block;
            width: fit-content;
            background-color: var(--darkBlue-color);
            color: white;
            margin-right: auto;
            border-radius: 5px;
            padding: 7px;
            transition: all 0.2s linear;
        }

        .main-section .text a.moreBtn:hover {
            background-color: var(--mor-color);
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

        <nav class="mybreadcrumb w-100  d-none d-md-block" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house fa-lg"></i></a></li>
                <li class="breadcrumb-item active fw-bold" aria-current="page">ابتسامة هوليود</li>
            </ol>
        </nav>

        <section class="main-section my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-11">
                        <h3 class="title text-center m-0">ابتسامة هوليود
                        </h3>
                        <div class="line mb-4">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11">
                        <div class="row justify-content-center">
                            <div class="col-11 col-md-4">
                                <div class="pw-box mb-5 mb-md-0">
                                    <a href="single-page.php" title="علاج السمنة عند النساء">
                                        <div class="img-container">
                                            <img src="./imgs/cat/turkey-care-ready.webp" alt="image">
                                        </div>
                                        <div class="text">
                                            <h3>علاج السمنة عند النساء</h3>
                                            <p>علاج السمنة عند النساء، تتعدّد الأسباب التي تؤدي الى تراكم الدهون في مناطق مختلفة من الجسم، وبالتالي تؤدي الى زيادة في الوزن</p>
                                            <a href="single-page.php" title="علاج السمنة عند النساء" class="moreBtn">
                                                <i class="far fa-hand-point-left"></i>
                                                اقرأ المزيد
                                            </a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-11 col-md-4">
                                <div class="pw-box mb-5 mb-md-0">
                                    <a href="single-page.php" title="علاج السمنة عند النساء">
                                        <div class="img-container">
                                            <img src="./imgs/cat/turkey-care-ready.webp" alt="image">
                                        </div>
                                        <div class="text">
                                            <h3>علاج السمنة عند النساء</h3>
                                            <p>علاج السمنة عند النساء، تتعدّد الأسباب التي تؤدي الى تراكم الدهون في مناطق مختلفة من الجسم، وبالتالي تؤدي الى زيادة في الوزن</p>
                                            <a href="single-page.php" title="علاج السمنة عند النساء" class="moreBtn">
                                                <i class="far fa-hand-point-left"></i>
                                                اقرأ المزيد
                                            </a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-11 col-md-4">
                                <div class="pw-box mb-5 mb-md-0">
                                    <a href="single-page.php" title="علاج السمنة عند النساء">
                                        <div class="img-container">
                                            <img src="./imgs/cat/turkey-care-ready.webp" alt="image">
                                        </div>
                                        <div class="text">
                                            <h3>علاج السمنة عند النساء</h3>
                                            <p>علاج السمنة عند النساء، تتعدّد الأسباب التي تؤدي الى تراكم الدهون في مناطق مختلفة من الجسم، وبالتالي تؤدي الى زيادة في الوزن</p>
                                            <a href="single-page.php" title="علاج السمنة عند النساء" class="moreBtn">
                                                <i class="far fa-hand-point-left"></i>
                                                اقرأ المزيد
                                            </a>
                                        </div>
                                    </a>
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

</body>

</body>

</html>