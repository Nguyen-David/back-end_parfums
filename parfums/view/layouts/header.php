<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/template/font-awesome/css/font-awesome.min.css">



    <link rel="stylesheet" type="text/css" href="/template/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/template/slick/slick-theme.css"/>

    <link rel="stylesheet" type="text/css" href="/template/css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="/template/img/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:700" rel="stylesheet">


    <title>Parfums</title>
</head>
<body>


<!--   Верхняя строчка информации     -->
<div class="top-wrapper">
    <div class="container">
        <div class="row">
            <?php if(User::isGuest()): ?>
            <div class="col-md-3 col-sm-4 open"><a href="/user/login" class="registration"><i class="fa fa-lock" aria-hidden="true"></i> Вход/Регистрация</a>
            </div>
            <?php else:?>
                <div class="col-md-3 col-sm-4 open"><a href="/cabinet/" class="registration"><i class="fa fa-user-o" aria-hidden="true"></i> Аккаунт </a><a href="/user/logout/" class="registration"><i class="fa fa-unlock" aria-hidden="true"></i> Выход</a>
                </div>
            <?php endif;?>
            <div class="col-md-9 col-sm-8  text-right" ><p class="registration">Часы работы: с 9:00 до 19:00 пн-вс</p>
            </div>
        </div>
    </div>
</div>


<div class="wrapper">
    <a id="up" ></a>

    <!--         Хедер сайта            -->
    <header>
        <div class="container wrapper-content">
            <div class="row">
                <div class="col-12 navbar-small ">
                    <nav class="navbar navbar-expand-lg navbar-light bg-nav ">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item ">
                                    <a class="nav-link header-menu" href="/catalog/"><strong>Каталог</strong> <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link header-menu" href="/about_us/"><strong>О компании</strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link header-menu" href="/blog/"><strong>Блог</strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link header-menu" href="/contacts/"><strong>Контакты</strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link header-menu" href="/delivery/"><strong>Доставка</strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link header-menu" href="/pay/"><strong>Оплата</strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link header-menu" href="/account/"><strong>Личный кабинет</strong></a>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0 search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <div class="row basket d-flex justify-content-end">

                            <div class="graphic ">
                                <div class="count1">0</div>
                                <a href="#" class="fonts"><i class="fa fa-bar-chart" aria-hidden="true"></i></a>

                            </div>
                            <div class="graphic ">
                                <div class="count1" id="cart-count3"><?php echo Cart::countItems()?> </div>
                                <a href="#" class="fonts"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            </div>
                            <div>
                                <p class="sum">Корзина:0.00 rub</p>
                            </div>
                        </div>


                    </nav>
                </div>
            </div>
            <div class="row logo-header">

                <div class="col-md-3 col-sm-12">
                    <div class="info text-center">
                        <a href="#"><i class="fa fa-envelope" aria-hidden="true"> devid.nguyen@gmail.com</i></a>
                        <h4>8(495)549-83-14</h4>
                        <a href="#" data-toggle="modal" data-target="#btn-recall">Обратный звонок</a>


                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="btn-recall" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLongTitle">Обратный звонок</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form-recomend" method="POST">

                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6 name-rec">
                                                <p>Имя </p>
                                                <input type="text" required>
                                            </div>
                                            <div class="col-md-6 email-rec">
                                                <p>Телефон<span>*</span></p>
                                                <input type="number" required>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer d-flex justify-content-end">
                                        <button type="submit" class="btn btn-dark btn-basket">ОТПРАВИТЬ</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 logo text-center">
                    <a href="/"><img  src="/template/img/logo.jpg" alt="аромат" title="аромат">
                    </a>

                </div>
                <div class="basket-wrapper col-md-3 col-sm-12">
                    <div class="row basket d-flex justify-content-center">
                        <div class="graphic ">
                            <a class="count1_fonts" href="#">
                                <div class="count1">0</div>
                                <div href="#" class="fonts"><i class="fa fa-bar-chart" aria-hidden="true"></i></div>
                            </a>

                        </div>
                        <div class="graphic ">
                            <a class="count1_fonts" href="/cart/">
                                <div class="count1" id="cart-count2"><?php echo Cart::countItems()?> </div>
                                <div href="#" class="fonts"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                            </a>
                        </div>
                        <div>
                            <p class="sum">Корзина:0.00 rub</p>
                        </div>
                    </div>
                </div>
            </div>


            <!--        Хедер меню сайта          -->
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light bg-nav nav-lg">



                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item ">
                                    <a class="nav-link header-menu" href="/catalog/"><strong>Каталог</strong> <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link header-menu" href="/about_us/"><strong>О компании</strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link header-menu" href="/blog/"><strong>Блог</strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link header-menu" href="/contacts/"><strong>Контакты</strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link header-menu" href="/delivery/"><strong>Доставка</strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link header-menu" href="/pay/"><strong>Оплата</strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link header-menu" href="/account/"><strong>Личный кабинет</strong></a>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0 search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>


                    </nav>
                </div>

            </div>
            <div id="carouselExampleIndicators2" data-interval="3000" class="carousel slide carousel-mobile" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/template/img/slider_img1.jpg" alt="Первый слайд">
                        <div class="carousel-caption  d-md-block">
                            <h3>Быстрая доставка до двери</h3>

                        </div>
                    </div>
                    <div class="carousel-item " >
                        <img class="d-block w-100"  src="/template/img/slider_img2.jpg" alt="Второй слайд">
                        <div class="carousel-caption  d-md-block">
                            <h3>Выгодные акции и бонусы</h3>
                        </div>
                    </div>
                    <div class="carousel-item" >
                        <img class="d-block w-100" src="/template/img/slider_img3.jpg" alt="Третий слайд">
                        <div class="carousel-caption  d-md-block">
                            <h3>Только оригинальные товары</h3>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </header>