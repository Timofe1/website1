<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Стили -->
    <link rel="stylesheet" type="text/css" href="../style/individualpage.css">
    <link rel="stylesheet" type="text/css" href="/style/general.css">


    <!-- Фавикон -->
    <link rel="icon" type="image/icons" href="/icons/favicon.ico">

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <!-- Kaisei Decol -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Decol:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- inter -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">


    <title>All for all</title>

</head>

<?php
    require_once '../connect.php';
    $f_id = $_GET['id'];
    $sql = "SELECT * FROM `flowers` WHERE `id` = $f_id";
    $flowers = mysqli_query($link_sql, $sql);
    $flowers = mysqli_fetch_assoc($flowers);
?>

<body>
    <header>
        <div id="block1">
            <div class="container  text-center">
                <div class="row block0">

                    <div class="col-1 offset-md-1 align-items-center justify-content-center d-flex">
                        <img width="80" height="50" src="/image/logo-3266214_1280.png" alt="">
                    </div>

                    <div class="col-8 ">
                        <div id="menu1" class="align-items-center justify-content-center d-flex">

                            <a href="index.php">Главная</a>
                            <a href="manage.php">Магазинчик</a>
                            <!-- <a href="individualpage.php" id="t100">Справочник</a> -->
                            <a href="aboutme.php">О нас</a>

                        </div>
                    </div>

                    <div class="col-1 align-items-center d-flex">

                        <a href="registration.php" id="button">Вход</a>

                    </div>

                </div>
            </div>
        </div>
    </header>


    <!-- Основной блок -->
    <div class="t501">
        <div class="t501-1">

            <!-- Ссылки -->
            <div class="container">
                <div class="row">
                    <div class="col-5 t507">
                        <a href="manage.php">Магазин</a> > <a href="#">Страница</a>
                    </div>
                </div>
            </div>

            <!-- Строка поиска -->
            <div class="tool-bar container">
                <form action="" method="get" class="t53 row ">
                    <a class=" t506 col-1" href="manage.php">Назад</a>
                    <input type="text" class=" t504 col-9" placeholder="Поиск по названию" />
                    <input type="button" class=" t505 col-2" placeholder="Поиск" value="Поиск" />
                </form>
            </div>

            <!-- Карточка -->
            <div class="t510">
                <div class="container">
                    <div class="row">
                        <img src="/image/p/32.jpg" alt="" width=" 210px" height=" 210px" class="col-4">
                        <div class="col-7">
                            <h1><?= $flowers['nameProduct'] ?></h1>
                            <p><?= $flowers['typeProduct'] ?></p>
                            <div class="row">
                                <p id="p9" class="col-3">Цена</p>
                                <p id="p10" class="col-5"><?= $flowers['productPrice'] ?>р</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Описание карточки -->
            <div class="t520">
                <div class="conteiner">
                    <!-- <div class=""> -->
                        <div class="text-lg-start">
                            <h2>
                                Описание
                            </h2>
                        </div>

                        <div class="text-lg-start offset-md-1">
                            <p>
                                <?= $flowers['description'] ?>
                            </p>
                        </div>
                    <!-- </div> -->
                </div>
            </div>

            <!-- Руководство по уходу -->
            <!-- <div class="t530">
                <div class="container">
                    <div class=" text-center">
                        <h1>Руководство по уходу</h1>
                    </div>

                    <div class="t530-1">
                        <div class="text-lg-start">
                            <h2>
                                1. Богатый ассортимент
                            </h2>
                        </div>

                        <div class="text-lg-start offset-md-1">
                            <p>
                                от вам яркий пример современных тенденций — курс на социально-ориентированный
                                национальный проект играет определяющее значение для системы обучения кадров,
                                соответствующей насущным потребностям. Для современного мира граница обучения кадров, в
                                своём классическом представлении, допускает внедрени
                            </p>
                        </div>

                        <div class="text-lg-start">
                            <h2>
                                1. Богатый ассортимент
                            </h2>
                        </div>

                        <div class="text-lg-start offset-md-1">
                            <p>
                                от вам яркий пример современных тенденций — курс на социально-ориентированный
                                национальный проект играет определяющее значение для системы обучения кадров,
                                соответствующей насущным потребностям. Для современного мира граница обучения кадров, в
                                своём классическом представлении, допускает внедрени
                            </p>
                        </div>
                    </div>

                    <div class="text-lg-start">
                        <h2>
                            1. Богатый ассортимент
                        </h2>
                    </div>

                    <div class="text-lg-start offset-md-1">
                        <p>
                            от вам яркий пример современных тенденций — курс на социально-ориентированный национальный
                            проект играет определяющее значение для системы обучения кадров, соответствующей насущным
                            потребностям. Для современного мира граница обучения кадров, в своём классическом
                            представлении, допускает внедрени
                        </p>
                    </div>
                </div>

                <div class="text-lg-start">
                    <h2>
                        1. Богатый ассортимент
                    </h2>
                </div>

                <div class="text-lg-start offset-md-1">
                    <p>
                        от вам яркий пример современных тенденций — курс на социально-ориентированный национальный
                        проект играет определяющее значение для системы обучения кадров, соответствующей насущным
                        потребностям. Для современного мира граница обучения кадров, в своём классическом представлении,
                        допускает внедрени
                    </p>
                </div>
            </div> -->
        </div>
    </div>

    <!-- футер -->
    <footer class="fot ">
        <div class="text-center  align-middle ">
            <p>@ All for all 2003-2023</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>