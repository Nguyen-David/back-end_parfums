<?php include ROOT . "/view/layouts/header.php";?>

    <div class="content ">
        <div class="container wrapper-content">
            <div class="row">
                <div class="col-md-3 col-sm-12">


                    <!--   Левая часть сайта     -->
                    <!--        Меню слева       -->
                    <div class="sidebar">
                        <div class="head-catalog ">
                            <h4>Каталог</h4>
                        </div>
                        <div class="sidebar-menu">
                            <ul class="category">
                                <li class="sidebar-category ">
                                    <div class="pos-f-t">

                                        <div class="navbar-toggler spirit" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="true" aria-label="Toggle navigation">
                                            <a  href="../spirit/spirit.html">Духи</a>
                                            <div class="text-right down"><i class="fa fa-sort-desc " aria-hidden="true"></i></div>
                                        </div>
                                        <div class="collapse" id="navbarToggleExternalContent">
                                            <ul class="category">
                                                <li class="sidebar-category2"><a href="../spirit/restroom_water.html">Туалетная Вода</a></li>
                                                <li class="sidebar-category2"><a href="../spirit/perfumery_water.html">Парфюмерная вода</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </li>
                                <li class="sidebar-category ">
                                    <div class="pos-f-t">


                                        <div class="navbar-toggler spirit " data-toggle="collapse" data-target="#navbarToggleExternalContent2" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <a  href="../creams/creams.html" >Кремы</a>
                                            <div class="text-right down"><i class="fa fa-sort-desc" aria-hidden="true"></i> </div>
                                        </div>
                                        <div class="collapse " id="navbarToggleExternalContent2">
                                            <ul class="category">
                                                <li class="sidebar-category2"><a href="../creams/face_creams">Дневные кремы</a></li>
                                                <li class="sidebar-category2"><a href="../creams/nighttime_creams.html">Ночные Кремы</a></li>
                                                <li class="sidebar-category2"><a href="../creams/face_creams.html">Кремы для лица</a></li>
                                                <li class="sidebar-category2"><a href="../creams/eye_creams.html">Кремы для век</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <a href="../gels/gels.html"><li class="sidebar-category3 ">Гели</li></a>
                                <a href="../pomade/pomade.html"><li class="sidebar-category3 ">Помады</li></a>
                                <a href="../scrabs/scrabs.html"><li class="sidebar-category3">Скрабы</li></a>
                            </ul>
                        </div>
                    </div>



                </div>
                <div class="col-md-9">

                    <!--      Правая часть сайта   -->
                    <div class="sidebar" >
                        <div class="wrapper-chain">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Домой</a></li>
                                    <?php foreach ($categories_data as $categoriesItem):?>
                                        <?php if($product['category_id'] == $categoriesItem['id']) {?>
                                        <li class="breadcrumb-item " aria-current="page"><a href="/category/<?= $product['category_id']?>"><?= $categoriesItem['name']?></a></li>
                                        <?php }?>
                                    <?php endforeach;?>

                                    <?php if($product['code'] == 11) {?>
                                        <li class="breadcrumb-item active" aria-current="page"><a href="../category/1/1">Туалетная вода</a></li>
                                    <?php }?>
                                    <?php if($product['code'] == 12) {?>
                                        <li class="breadcrumb-item active" aria-current="page"><a href="../category/1/2">Парфюмерная вода</a></li>
                                    <?php }?>
                                    <?php if($product['code'] == 21) {?>
                                        <li class="breadcrumb-item active" aria-current="page"><a href="../category/2/1">Дневные кремы</a></li>
                                    <?php }?>
                                    <?php if($product['code'] == 22) {?>
                                        <li class="breadcrumb-item active" aria-current="page"><a href="../category/2/2">Ночные кремы</a></li>
                                    <?php }?>
                                    <?php if($product['code'] == 23) {?>
                                        <li class="breadcrumb-item active" aria-current="page"><a href="../category/2/3">Кремы для лица</a></li>
                                    <?php }?>
                                    <?php if($product['code'] == 24) {?>
                                        <li class="breadcrumb-item active" aria-current="page"><a href="../category/2/4">Кремы для век</a></li>
                                    <?php }?>
                                </ol>
                            </nav>
                        </div>
                        <div class="heading-wrapper-about_us">
                            <h3><?= $product['name'];?></h3>
                        </div>
                        <div class="wrapper-page-thing">
                            <div class="wrapper-thing ">
                                <div class="row">
                                    <div class="col-md-4">
											<span class="both_new_sale">
											<?php if($product['is_new'] == 1){?>
                                                <span class="product-new">Новинка</span>
                                            <?php }?>
                                                <?php if($product['is_hit'] == 1){?>
                                                    <span class="product-new">Хит</span>
                                                <?php }?>
                                                <?php if($product['is_closeout'] == 1){?>
                                                    <span class="product-new">Распродажа</span>
                                                <?php }?>
                                                <?php if($product['is_sale'] == 1){?>
                                                    <span class="product-sale"><?= $product['price_sale'] ?>%</span>
                                                <?php }?>
											</span>
                                        <img class="img-fluid"  src="/template/img-products/<?= $product['image'] ?>.png" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="is_stock text-right text-success"><h6><i class="fa fa-check" aria-hidden="true"></i> В наличии</h6></div>
                                        <div class="price-product"><h5><s><?= $product['price']+300; ?> руб</s><strong> <?= $product['price'] ?> руб</strong></h5></div>
                                        <div class="text-product"><p><?=  $product['description'] ?></p></div>
                                        <div class="amount-product">
                                            <form method="POST" >
                                                <label for="select-amount">
                                                    <select name="select-amount" id="select-amount">
                                                        <option value="sort">75 мл</option>
                                                        <option value="increase_price">50 мл</option>
                                                    </select>
                                                </label>
                                            </form>
                                        </div>
                                        <div class="wrapper-count">
                                            <div class="row">
                                                <div class ="col-xl-2 col-lg-2 col-md-4 col-2 count">
                                                    <div class="row "  data-trigger="spinner" id="spinner">
                                                        <a class="col-3 text-center" href="javascript:;" data-spin="down">-</a>
                                                        <input class="col-6 text-center" type="text" value="1" data-rule="quantity">
                                                        <a class="col-3 text-center" href="javascript:;" data-spin="up">+</a>

                                                    </div>

                                                </div>
                                                <div class="col-xl-3 col-lg-4 col-md-5 col-4 d-flex justify-content-center wrapper-btn-basket">
                                                    <button type="submit" class="btn btn-dark btn-basket in_basket" data-id="<?= $product['id']; ?>">В КОРЗИНУ</button>
                                                </div>
                                                <div class="is_miss col-xl-3 col-lg-4 col-md-6 col-4  text-center">
                                                    <p>Товар отсутствует</p>
                                                </div>
                                                <div class="col-xl-3  col-md-12  col-3">
                                                    <button type="submit" class="btn btn-dark btn-basket btn-preorder">ПРЕДЗАКАЗ</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order_one_click">
                                            <button type="submit" class="btn btn-basket btn-one-tap">ЗАКАЗ В ОДИН КЛИК</button>
                                        </div>
                                        <div class="wrapper-comparison">
                                            <button class=" align-items-center btn-add-comparison<?php if(!Comparison::testProduct($product['id'])) :?> display-flex<?php else:?> display-none <?php endif;?> " id="btn-add" data-id="<?= $product['id']; ?>">
                                                <span class="rating"><i class="fa fa-bar-chart" aria-hidden="true"></i></span>
                                                <span>Добавить сравнение</span>
                                            </button>
                                            <button class=" align-items-center btn-delete-comparison <?php if(Comparison::testProduct($product['id'])) :?> display-flex<?php else:?> display-none <?php endif;?>" id="btn-delete" data-id="<?= $product['id']; ?>">
                                                <span class="rating"><i class="fa fa-bar-chart" aria-hidden="true"></i></span>
                                                <span>Убрать из сравнение</span>
                                            </button>
                                        </div>
                                        <div class="social-network-page">
                                            <ul>
                                                <li class="text-center vkontakte-icon"><a href="https://vk.com/devid_dn"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                                                <li class="text-center facobook-icon"><a href="https://facobook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li class="text-center odnoklassniki-icon"><a href="https://odnoklassniki.com"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a></li>
                                                <li class="text-center gmail-icon"><a href="https://gmail.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                <li class="text-center twitter-icon"><a href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li class="text-center github-icon"><a href="https://github.com"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                                                <li class="text-center"></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="wrapper-tabs-thing">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-selected="true">Описание</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-characters-tab" data-toggle="pill" href="#pills-characters" role="tab" aria-controls="pills-characters" aria-selected="false">Характеристики</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-recomend-tab" data-toggle="pill" href="#pills-recomend" role="tab" aria-controls="pills-recomend" aria-selected="false">Отзывы</a>
                                    </li>
                                </ul>
                                <div class="tab-content content-tabs-product" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                        <p><?=  $product['description'] ?></p>
                                    </div>
                                    <div class="tab-pane fade" id="pills-characters" role="tabpanel" aria-labelledby="pills-characters-tab">
                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                            <tr>
                                                <th scope="col">Метка</th>
                                                <td>Новинка</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Производство</th>
                                                <td>Франция</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade " id="pills-recomend" role="tabpanel" aria-labelledby="pills-recomend-tab">
                                        <!-- Button trigger modal -->
                                        <button type="submit" class="btn btn-dark btn-basket" data-toggle="modal" data-target="#btn-recomend">
                                            ОСТАВИТЬ ОТЗЫВ
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="btn-recomend" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="exampleModalLongTitle">Оставить отзыв</h4>
                                                        <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form-recomend" method="POST">
                                                            <div class="rating-star">
                                                                <fieldset class="rating">
                                                                    <legend>Оценка</legend>

                                                                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>

                                                                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>

                                                                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>

                                                                    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>

                                                                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
                                                                </fieldset>
                                                            </div>
                                                            <div  class="clear"></div>
                                                            <p>Текст <span>*</span></p>
                                                            <textarea rows="10" cols="60" id="text-recomend" name="text" required></textarea>
                                                            </textarea>
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-6 name-rec">
                                                                        <p>Имя <span>*</span></p>
                                                                        <input type="text" required>
                                                                    </div>
                                                                    <div class="col-md-6 email-rec">
                                                                        <p>E-mail <span>*</span></p>
                                                                        <input type="text" required>
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

                                    </div>

                                </div>
                            </div>
                            <div class="header-associated">
                                <h3>Сопутсвующие товары</h3>
                            </div>
                            <div class="slick padding-top wrapper-slider-things">
                                <div class="slick-item">
                                    <div class="product-label">
                                        <span class="product-new">Хит</span>
                                        <span class="product-sale">до 11%</span>
                                    </div>
                                    <a href="#"><img class="img-fluid"  src="https://static-eu.insales.ru/images/products/1/7990/138846006/large_13824_1.png" alt="">
                                    </a>
                                    <div class="price">
                                        <h5>от 3945 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#">Eclat Women Eau de Toilette  Женская туалетная вода Eclat</a>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="product-label">
                                        <span class="product-new">Хит</span>
                                    </div>
                                    <a href="#"><img  class="img-fluid" src="https://static-eu.insales.ru/images/products/1/969/138847177/large_19639_1.png" alt=""></a>
                                    <div class="price">
                                        <h5>От 4960 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#">Flamboyant Eau de Toilette  Туалетная вода Flamboyant</a>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="product-label">
                                        <span class="product-new">Хит</span>
                                        <span class="product-sale">30%</span>
                                    </div>
                                    <a href="#"><img class="img-fluid" src="https://static-eu.insales.ru/images/products/1/6642/138828274/large_22475_2.png" alt=""></a>
                                    <div class="price">
                                        <h5>950 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#">
                                            Губная помада «Сакура»
                                        </a>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="product-label">
                                        <span class="product-new">Хит</span>
                                    </div>
                                    <a href="#"><img class="img-fluid" src="https://static-eu.insales.ru/images/products/1/4289/138825921/large_18662_2.png" alt=""></a>
                                    <div class="price">
                                        <h5>3715 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#"> Дневной крем глубокого увлажнения «Аква-Ритм»</a>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="product-label">
                                        <span class="product-new">Хит</span>
                                        <span class="product-sale">До 15%</span>
                                    </div>
                                    <a href="#"><img class="img-fluid" src="https://static-eu.insales.ru/images/products/1/132/138846340/large_23838_2.png" alt=""></a>
                                    <div class="price">
                                        <h5>от 3700 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#">Lovely Garden Eau de Toilette  Туалетная вода Lovely Garden</a>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="product-label">
                                        <span class="product-new">Хит</span>

                                    </div>
                                    <a href="#"><img class="img-fluid" src="https://static-eu.insales.ru/images/products/1/920/138847128/large_23825_1.png" alt=""></a>
                                    <div class="price">
                                        <h5>От 4660 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#">Fuse Eau De Toilette  Туалетная вода Fuse</a>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="product-label">
                                        <span class="product-new">Хит</span>
                                        <span class="product-sale">35%</span>
                                    </div>
                                    <a href="#"> <img class="img-fluid" src="https://static-eu.insales.ru/images/products/1/6575/138828207/large_20522_2.png" alt=""></a>
                                    <div class="price">
                                        <h5>550 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#">Блеск для губ Clickit</a>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="product-label">
                                        <span class="product-new">Хит</span>
                                    </div>
                                    <a  href="#"><img class="img-fluid" src="https://static-eu.insales.ru/images/products/1/4361/138825993/large_13638_2.png" alt=""></a>
                                    <div class="price">
                                        <h5>820 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#">Дневной увлажняющий крем «Витамин Е»</a>
                                    </div>
                                </div>


                            </div>

                            <div class="header-associated">
                                <h3>Похожие товары</h3>
                            </div>
                            <div class="slick padding-top">
                                <div class="slick-item">
                                    <div class="product-label">
                                        <span class="product-sale">до 9%</span>
                                    </div>
                                    <a href="#"><img class="img-fluid"  src="https://static-eu.insales.ru/images/products/1/630/138846838/large_8124_1.png" alt="">
                                    </a>
                                    <div class="price">
                                        <h5>от 3100 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#">Free Attitude Eau de Toilette  Туалетная вода Free Attitude</a>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="product-label">
                                        <span class="product-new">Хит</span>
                                    </div>
                                    <a href="#"><img  class="img-fluid" src="https://static-eu.insales.ru/images/products/1/7990/138846006/large_13824_1.png" alt=""></a>
                                    <div class="price">
                                        <h5>от 3945 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#">Eclat Women Eau de Toilette  Женская туалетная вода Eclat</a>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="product-label">
                                        <span class="product-new">Хит</span>
                                        <span class="product-sale">до 11%</span>
                                    </div>
                                    <a href="#"><img class="img-fluid" src="https://static-eu.insales.ru/images/products/1/0/138846208/large_22953_1.png" alt=""></a>
                                    <div class="price">
                                        <h5>от 3140 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#">Rock Angel Eau de Toilette  Туалетная вода Rock Angel</a>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="product-label">
                                    </div>
                                    <a href="#"><img class="img-fluid" src="https://static-eu.insales.ru/images/products/1/22/138846230/large_7714_1.png" alt=""></a>
                                    <div class="price">
                                        <h5>от 4300 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#">Miss O Eau de Toilette  Туалетная вода Miss O</a>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="product-label">
                                        <span class="product-new">Новинка</span>
                                        <span class="product-sale">12%</span>
                                    </div>
                                    <a href="#"><img class="img-fluid" src="https://static-eu.insales.ru/images/products/1/132/138846340/large_23838_2.png" alt=""></a>
                                    <div class="price">
                                        <h5>от 3700 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#">Lovely Garden Eau de Toilette  Туалетная вода Lovely Garden</a>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="product-label">
                                        <span class="product-new">Хит</span>
                                        <span class="product-sale">до 15%</span>
                                    </div>
                                    <a href="#"><img class="img-fluid" src="https://static-eu.insales.ru/images/products/1/199/138846407/large_21673_1.png" alt=""></a>
                                    <div class="price">
                                        <h5>от 2640 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#">Felicity Eau de Toilette  Туалетная вода Felicity</a>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="product-label">
                                    </div>
                                    <a href="#"> <img class="img-fluid" src="https://static-eu.insales.ru/images/products/1/680/138846888/large_8150_1.png" alt=""></a>
                                    <div class="price">
                                        <h5>от 3500 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#">Glacier Eau De Toilette  Туалетная вода Glacier</a>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="product-label">
                                    </div>
                                    <a  href="#"><img class="img-fluid" src="https://static-eu.insales.ru/images/products/1/782/138846990/large_12190_1.png" alt=""></a>
                                    <div class="price">
                                        <h5>от 4415 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#">Signature Eau de Toilette  Туалетная вода Signature</a>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="product-label">
                                    </div>
                                    <a  href="#"><img class="img-fluid" src="https://static-eu.insales.ru/images/products/1/8083/138846099/large_18957_1.png" alt=""></a>
                                    <div class="price">
                                        <h5>от 5060 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#">Precious Moments Eau de Parfum  Парфюмерная вода Precious Moments
                                        </a>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="product-label">
                                        <span class="product-sale">17%</span>
                                    </div>
                                    <a href="#"><img class="img-fluid" src="https://static-eu.insales.ru/images/products/1/4331/138825963/large_14659_2.png" alt=""></a>
                                    <div class="price">
                                        <h5>1960 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#">Дневной крем-уход «Нутри-комфорт»</a>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="product-label">
                                        <span class="product-new">30%</span>
                                    </div>
                                    <a href="#"><img class="img-fluid" src="https://static-eu.insales.ru/images/products/1/4716/138826348/large_16189_2.png" alt=""></a>
                                    <div class="price">
                                        <h5>1295 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#">Крем для век «Активный кислород»</a>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="product-label">
                                        <span class="product-sale">50%</span>
                                    </div>
                                    <a href="#"><img class="img-fluid" src="https://static-eu.insales.ru/images/products/1/4368/138826000/large_20280_2.png" alt=""></a>
                                    <div class="price">
                                        <h5>820 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#"> Зимний крем для лица «Нежное какао»</a>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="product-label">
                                        <span class="product-sale">5%</span>
                                    </div>
                                    <a href="#"> <img class="img-fluid" src="https://static-eu.insales.ru/images/products/1/5366/138826998/large_14704_2.png" alt=""></a>
                                    <div class="price">
                                        <h5>950 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#">Тоник для лица 2-в-1 «Оптимальное очищение»</a>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="product-label">
                                        <span class="product-new">Новинка</span>
                                        <span class="product-sale">25%</span>
                                    </div>
                                    <a  href="#"><img class="img-fluid" src="https://static-eu.insales.ru/images/products/1/4806/138826438/large_13384_2.png" alt=""></a>
                                    <div class="price">
                                        <h5>2525 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#">Подтягивающий крем для век двойного действия «Лифт-Эксперт»</a>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="product-label">
                                        <span class="product-sale">27%</span>
                                    </div>
                                    <a  href="#"><img class="img-fluid" src="https://static-eu.insales.ru/images/products/1/6116/138827748/large_19297_2.png" alt=""></a>
                                    <div class="price">
                                        <h5>1155 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#">Моделирующий гель для бровей Giordani Gold
                                        </a>
                                    </div>
                                </div>
                                <div class="slick-item">
                                    <div class="product-label">
                                        <span class="product-sale">23%</span>
                                    </div>
                                    <a href="#"><img class="img-fluid" src="https://static-eu.insales.ru/images/products/1/5169/138826801/large_19946_2.png" alt=""></a>
                                    <div class="price">
                                        <h5>995 руб</h5>
                                        <a class="sub" href="#">
                                            <div class="cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="info-product">
                                        <a href="#">Матирующий гель-пенка для лица «Оптимальное очищение»</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include ROOT . "/view/layouts/footer.php";?>

