<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Results
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

        * {
            /* border: 1px solid red; */
        }

        .mybreadcrumb {
            background-color: #eee;
            padding: 10px 20px;
            display: block;
            border-top: 3px solid var(--mor-color);
        }

        a {
            text-decoration: none !important;
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

        h3.title {
            background-color: var(--darkBlue-color);
            font-size: 1.7rem;
            border-radius: 7px;
            padding: 7px;
        }

        .results {
            padding: 10px 5%;
            border-radius: 10px;
            box-shadow: 0 0 2px 1.5px rgba(0, 0, 0, 0.1);
        }

        #result-section img {
            width: 150px;
            border-radius: 10px;
        }

        .result-title {
            color: var(--mor-color);
            font-size: 1.2rem;
            font-weight: bold;
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
                <li class="breadcrumb-item active fw-bold" aria-current="page">نتيجة البحث عن:</li>
            </ol>
        </nav>


        <div id="result-section" class="my-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-11">
                        <h3 class="title text-white fw-bold mb-4">
                            البحث عن : </h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-11">
                        <div class="results bg-light d-flex flex-column align-items-center gap-2 flex-md-row gap-md-5 mt-3">
                            <div class="img-container mb-3 mb-md-0"><img src="./imgs/cat/turkey-care-ready-6-1.webp" alt="result-image"></div>
                            <div class="text">
                                <a href="single-page.php">
                                    <h3 class="result-title">تقنية أقلام تشوي لزراعة الشعر</h3>
                                </a>
                                <p>تستخدم هذه التقنية كأداة خاصة تعرف باسم أقلام تشوي، حيث يستخدم الطبيب المختص أقلام تشوي في فتح القنوات في الرأس و زرع البصيلات فيها.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-11">
                        <div class="results bg-light d-flex flex-column align-items-center gap-2 flex-md-row gap-md-5 mt-3">
                            <div class="img-container mb-3 mb-md-0"><img src="./imgs/cat/turkey-care-ready-6-1.webp" alt="result-image"></div>
                            <div class="text">
                                <a href="single-page.php">
                                    <h3 class="result-title">تقنية أقلام تشوي لزراعة الشعر</h3>
                                </a>
                                <p>تستخدم هذه التقنية كأداة خاصة تعرف باسم أقلام تشوي، حيث يستخدم الطبيب المختص أقلام تشوي في فتح القنوات في الرأس و زرع البصيلات فيها.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-11">
                        <div class="results bg-light d-flex flex-column align-items-center gap-2 flex-md-row gap-md-5 mt-3">
                            <div class="img-container mb-3 mb-md-0"><img src="./imgs/cat/turkey-care-ready-6-1.webp" alt="result-image"></div>
                            <div class="text">
                                <a href="single-page.php">
                                    <h3 class="result-title">تقنية أقلام تشوي لزراعة الشعر</h3>
                                </a>
                                <p>تستخدم هذه التقنية كأداة خاصة تعرف باسم أقلام تشوي، حيث يستخدم الطبيب المختص أقلام تشوي في فتح القنوات في الرأس و زرع البصيلات فيها.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-11">
                        <div class="results bg-light d-flex flex-column align-items-center gap-2 flex-md-row gap-md-5 mt-3">
                            <div class="img-container mb-3 mb-md-0"><img src="./imgs/cat/turkey-care-ready-6-1.webp" alt="result-image"></div>
                            <div class="text">
                                <a href="single-page.php">
                                    <h3 class="result-title">تقنية أقلام تشوي لزراعة الشعر</h3>
                                </a>
                                <p>تستخدم هذه التقنية كأداة خاصة تعرف باسم أقلام تشوي، حيث يستخدم الطبيب المختص أقلام تشوي في فتح القنوات في الرأس و زرع البصيلات فيها.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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