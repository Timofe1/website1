<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Стили -->
    <link rel="stylesheet" type="text/css" href="/style/manage.css">
    <link rel="stylesheet" type="text/css" href="/style/general.css">


    <!-- Фавикон -->
    <link rel="icon" type="image/icons" href="/icons/favicon.ico">

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

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
                            <a href="manage.php" id="t100">Магазинчик</a>
                            <!-- <a href="manage.php">Справочник</a> -->
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



    <div class="t202">
        <div class="t202-1">
            <div class="castom  text-center">

                <div class="row">

                    <form action="manage.php" method="post" class="col-8">
                        <input type="text" placeholder="Поиск " name="nameProduct" />
                        <!-- <button type="submit">Найти</button> -->
                    </form>

                    <div class="col-2">
                        <input id="t210" type="button" value="Поиск">
                    </div>

                    <a href="addFlowers.php" class="col-2 t910">Добавить товар</a>
                </div>


            </div>
        </div>
    </div>

    <div class="t203">

        <div class="container">

            <div class="row">

                <?php
                $name = "";
                // $name = $_POST["nameProduct"];
                // if (isset($_POST["nameProduct"])) {

                //     $name = $_POST["nameProduct"];
                //     print_r($name);

                //     $sql = "SELECT * FROM N`flowers` WHERE `nameProduct` = '$name'";

                //     $flowers = mysqli_query($link_sql, $sql_array);
                //     $flowers = mysqli_fetch_all($flowers);
                // } else {
                    $sql_array = "SELECT * FROM `flowers`";

                    $flowers = mysqli_query($link_sql, $sql_array);
                    $flowers = mysqli_fetch_all($flowers);
                // }
                // if ($name="ничего"){

                // }
                // print_r($f_id);


                foreach ($flowers as $flower) {
                ?>

                    <article class="product col-2" onclick="individualpage.php?id=<?= $flower[0] ?>">

                        <div class="img-product">
                            <a href="individualpage.php?id=<?= $flower[0] ?>">
                                <img src="/image/p/38.jpg" width="100%" height="50%" alt="">
                            </a>
                        </div>
                        <!-- Название -->
                        <h5><?= $flower[1] ?></h5>
                        <!-- Тип -->
                        <p> <?= $flower[4] ?></p>
                        <!-- Цена -->
                        <p><?= $flower[2] ?></p>

                        <a href="../delete.php?id=<?= $flower[0] ?>">Удалить запись</a>

                    </article>

                <?php
                }
                ?>
                <!-- <script>
                    var code = `<article class="product col-2">
                                        <div class="img-product">
                                            <a href="individualpage.php"><img src="/image/p/38.jpg" width="100%" height="50%"
                                                    alt="">
                                            </a>
                                        </div>
                                        <h5>Название товара</h5>
                                        <p> Тип товара</p>
                                        <p>Цена: 100 денег</p>
                                    </article>`;

                    for (var k = 0; k < 10; k++) {
                        document.write(code);
                    }
                </script> -->


            </div>

        </div>

    </div>

    <footer class="fot ">
        <div class="text-center  align-middle ">
            <p>@ All for all 2003-2023</p>
        </div>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>