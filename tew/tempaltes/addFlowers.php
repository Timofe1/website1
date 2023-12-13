<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Стили -->
    <link rel="stylesheet" type="text/css" href="/style/addFlowers.css">
    <!-- <link rel="stylesheet" type="text/css" href="/style/general.css"> -->


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
<body>

    <header>
        <div id="block1">
            <div class="container  text-center">
                <div class="row block0">

                    <div class="col-1 offset-md-1 align-items-center justify-content-center d-flex">
                        <img width="80" height="50" src="/image/logo-3266214_1280.png" alt="">
                    </div>

                    <div class="col-10 ">
                        <div id="menu1" class="align-items-center justify-content-center d-flex">

                            <a href="manage.php">Вернуться назад</a>
                            <h1>Страница добавления товара</h1>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </header>


    <!-- Основной блок -->
    <div class="t501">
        <div class="t501-1">





            <form action="../aptit.php" method="post">
              

                <div class="t901">


                    <div class="conteiner">
                        <button type="submit">Добавить</button>
                        <div class="t910">
                            <h3>Название</h3>
                            <input class="col-12" type="text" name="nameProduct" placeholder="Название продукта">
                        </div>

                        <div class="t910">
                            <h3>Цена</h3>
                            <input class="col-12" type="number" name="productPrice" placeholder="Цена продукта">
                        </div>
                        
                        <div class="t910">
                             <h3>Тип товара</h3>
                            <input class="col-12" type="text" name="typeProduct" placeholder="Тип продукта" list="type">
                            <datalist id="type">
                                <option>Цветок</option>
                                <option>Горшок</option>
                                <option>Уран-238</option>
                            </datalist>
                        </div>

                        <div class="t910">
                             <h3>Описание</h3>   
                            <!-- <input class="col-12" type="text" name="description" placeholder="Описание продукта"> -->
                            <textarea class="col-12" name="description" id="" cols="30" rows="20" placeholder="Описание продукта"></textarea>
                        </div>





                    </div>


                </div>

            </form>



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