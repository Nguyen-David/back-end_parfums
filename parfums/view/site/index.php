<?php include ROOT . "/view/layouts/header.php";?>


    <div class="content ">
        <div class="container wrapper-content">
            <div class="row">
                <div class="col-md-3 col-sm-12">


                    <!--   Левая часть сайта     -->

                    <?php include ROOT . "/view/layouts/left-category.php";?>


                    <!--      Социальные сети      -->

                    <div class="social-media ">
                        <h4>Мы в соцсетях</h4>
                        <a href="Facebook.com"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                        <a href="Vk.com"><i class="fa fa-vk" aria-hidden="true"></i></a>
                        <a href="Twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>

                    <!--          Блог          -->

                    <div class="sidear-blog">
                        <div class="blog">
                            <h4>Блог</h4>
                        </div>
                        <?php foreach ($blog_data as $blog_dataItem): ?>
                            <div class="news-blog">
                                <div class="image-blog">
                                    <a href="blog/facial_treatment.html">
                                        <img class="img-fluid" src="/template/img/blog_img<?= $blog_dataItem['id'];?>.jpg" alt="уход за лицом">
                                    </a>
                                </div>
                                <div class="article-wrapper">
                                    <div class="article-header">
                                        <a href="blog/facial_treatment.html"><strong><?= $blog_dataItem['name'];?></strong></a>
                                    </div>
                                    <div class="article-content">
                                        <p><?= $blog_dataItem['content'];?></p>
                                    </div>
                                    <div class="article-date">
                                        <p class="date"><i class="fa fa-calendar" aria-hidden="true"></i> <?= $blog_dataItem['date'];?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>


                    </div>

                </div>
                <div class="col-md-9">

                    <!--      Правая часть сайта   -->
                    <!--       Главный слайдер     -->


                    <div class="sidebar" >
                        <div id="main_carousel_indecators" data-interval="3000" class="carousel slide carousel-pc" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#main_carousel_indecators" data-slide-to="0" class="active"></li>
                                <li data-target="#main_carousel_indecators" data-slide-to="1"></li>
                                <li data-target="#main_carousel_indecators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="/template/img/slider_img1.jpg" alt="Первый слайд">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Быстрая доставка до двери</h3>

                                    </div>
                                </div>
                                <div class="carousel-item " >
                                    <img class="d-block w-100"  src="/template/img/slider_img2.jpg" alt="Второй слайд">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Выгодные акции и бонусы</h3>
                                    </div>
                                </div>
                                <div class="carousel-item" >
                                    <img class="d-block w-100" src="/template/img/slider_img3.jpg" alt="Третий слайд">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Только оригинальные товары</h3>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#main_carousel_indecators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#main_carousel_indecators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                        <!--      Подменю по разделам духи,креми    -->

                        <div class="row">
                            <?php $i =0;
                            foreach ($categories_data as $categoryItem):
                                $i++; if($i<=4) {?>
                            <div class="col-md-4 col-sm-6 col-lg-3 col-6">
                                <div class="wrapper-special-category">
                                    <a href="/category/<?= $categoryItem['id']?>">
                                        <div class="image-wrapper">
                                            <img src="/template/img/category<?= $categoryItem['id'];?>.jpg">
                                        </div>
                                        <div class="name-category text-center">
                                            <h6><?= $categoryItem['name'];?></h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php } endforeach; ?>
                        </div>

                        <!--      Предложения выборки товаров   -->

                        <div class="choice-product">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="tab"   href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><h5 class="subcategory ">Товары на главной</h5></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="pills-profile-tab" data-toggle="tab"  href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><h5 class="subcategory">Популярные товары</h5></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="pills-contact-tab" data-toggle="tab"  href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><h5 class="subcategory">Товары со скидкой</h5></a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="slick">
                                        <?php foreach ($latestProduct as $latestProductItem): ?>
                                            <div class="slick-item">
                                                <div class="product-label">
                                                    <?php if($latestProductItem['is_new'] == 1){?>
                                                        <span class="product-new">Новинка</span>
                                                    <?php }?>
                                                    <?php if($latestProductItem['is_hit'] == 1){?>
                                                        <span class="product-new">Хит</span>
                                                    <?php }?>
                                                    <?php if($latestProductItem['is_closeout'] == 1){?>
                                                        <span class="product-new">Распродажа</span>
                                                    <?php }?>
                                                    <?php if($latestProductItem['is_sale'] == 1){?>
                                                        <span class="product-sale"><?= $latestProductItem['price_sale'] ?>%</span>
                                                    <?php }?>
                                                </div>
                                                <a href="/product/<?= $latestProductItem['id'] ?>"><img class="img-fluid"  src="/template/img-products/<?= $latestProductItem['image'] ?>.png" alt="">
                                                </a>
                                                <div class="price">
                                                    <h5><?= $latestProductItem['price'] ?> руб</h5>
                                                    <a class="sub" href="#" data-id="<?= $latestProductItem['id'] ?>">
                                                        <div class="cart">
                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </div>
                                                    </a>

                                                </div>
                                                <div class="info-product">
                                                    <a href="/product/<?= $latestProductItem['id'] ?>"><?= $latestProductItem['name']?></a>
                                                </div>
                                            </div>
                                        <?php endforeach;?>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="slick"">
                                        <?php foreach ($hitProduct as $hitProductItem): ?>
                                        <?php if($hitProductItem['is_hit'] == 1){?>
                                            <div class="slick-item">
                                                <div class="product-label">
                                                    <?php if($hitProductItem['is_new'] == 1){?>
                                                        <span class="product-new">Новинка</span>
                                                    <?php }?>
                                                    <?php if($hitProductItem['is_hit'] == 1){?>
                                                        <span class="product-new">Хит</span>
                                                    <?php }?>
                                                    <?php if($hitProductItem['is_closeout'] == 1){?>
                                                        <span class="product-new">Распродажа</span>
                                                    <?php }?>
                                                    <?php if($hitProductItem['is_sale'] == 1){?>
                                                        <span class="product-sale"><?= $hitProductItem['price_sale'] ?>%</span>
                                                    <?php }?>
                                                </div>
                                                <a href="/product/<?= $hitProductItem['id'] ?>"><img class="img-fluid"  src="/template/img-products/<?= $hitProductItem['image'] ?>.png" alt="">
                                                </a>
                                                <div class="price">
                                                    <h5><?= $hitProductItem['price'] ?> руб</h5>
                                                    <a class="sub" href="#" data-id="<?= $hitProductItem['id'] ?>">
                                                        <div class="cart">
                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </div>
                                                    </a>

                                                </div>
                                                <div class="info-product">
                                                    <a href="/product/<?= $hitProductItem['id'] ?>"><?= $hitProductItem['name']?></a>
                                                </div>
                                            </div>
                                            <?php } endforeach;?>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="slick">
                                        <?php foreach ($saleProduct as $saleProductItem): ?>
                                            <?php if($saleProductItem['is_sale'] == 1){?>
                                                <div class="slick-item">
                                                    <div class="product-label">
                                                        <?php if($saleProductItem['is_new'] == 1){?>
                                                            <span class="product-new">Новинка</span>
                                                        <?php }?>
                                                        <?php if($saleProductItem['is_hit'] == 1){?>
                                                            <span class="product-new">Хит</span>
                                                        <?php }?>
                                                        <?php if($saleProductItem['is_closeout'] == 1){?>
                                                            <span class="product-new">Распродажа</span>
                                                        <?php }?>
                                                        <?php if($saleProductItem['is_sale'] == 1){?>
                                                            <span class="product-sale"><?= $saleProductItem['price_sale'] ?>%</span>
                                                        <?php }?>
                                                    </div>
                                                    <a href="/product/<?= $saleProductItem['id'] ?>"><img class="img-fluid"  src="/template/img-products/<?= $saleProductItem['image'] ?>.png" alt="">
                                                    </a>
                                                    <div class="price">
                                                        <h5><?= $saleProductItem['price'] ?> руб</h5>
                                                        <a class="sub" href="#" data-id="<?= $saleProductItem['id'] ?>">
                                                            <div class="cart">
                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                            </div>
                                                        </a>

                                                    </div>
                                                    <div class="info-product">
                                                        <a href="/product/<?= $saleProductItem['id'] ?>"><?= $saleProductItem['name']?></a>
                                                    </div>
                                                </div>
                                            <?php } endforeach;?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!--      Форма связи с нами     -->

                    <div class="wrapper-feedback">
                        <div class="feedback">
                            <div class="header-feedback">
                                <h5>Форма заявки</h5>
                            </div>

                            <form >
                                <div class="row">
                                    <div class="feedback-name col-md-4 col-sm-6 col-6 text-center">

                                        <input class="feedback-name-input " type="text" name="name" placeholder="Имя" required>
                                    </div>
                                    <div class="feedback-mobile col-md-4 col-sm-6 col-6">
                                        <input  class="feedback-mobile-input " type="number" name="phone" placeholder="Телефон" required>
                                    </div>
                                    <div class="feedback-send col-md-4 col-sm-12 col-12">
                                        <button class="feedback-name-button btn" type="submit" name="Отправить">
                                            <span><h6>Отправить</h6></span>
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                    <!--     Виджет текст и картинка   -->

                    <div class="article-wrapper">
                        <div class="articler-block">
                            <div class="row">
                                <div class="col-md-12 col-lg-5 wrapper-article-image ">
                                    <img class="img-fluid rounded mx-auto d-block" src="/template/img/vijet.jpg" alt="Картинка с текстом">

                                </div>
                                <div class="col-md-12 col-lg-7 wrapper-article-text">
                                    <div class="text-article">									<h5>Пример текста виджета 'Текст и картинка'</h5>
                                        <p>Пример текста виджета 'Текст и картинка'. В тексте вы можете разместить любую текстовую информацию, вставить изображения, картинки и видео. Поддерживается форматирование. Отредактировать этот виджет вы можете в режиме редактирования сайта. Для перехода в режим редактирования нажмите кнопку 'Редактор сайта' в верхней панели.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--      Отзывы покупателей    -->

                    <div class="wrapper-reviews">
                        <div class="header-reviews">
                            <h5>Отзывы покупателей</h5>
                        </div>
                        <div class="row">
                            <div class="block-reviews col-md-12 col-lg-6">
                                <div class="row">
                                    <div class="wrapper-image-reviews col-3 col-lg-4">
                                        <img class="img-fluid-reviews" src="/template/img/recomend_person1.jpg" alt="Денис">
                                    </div>
                                    <div class="wrapper-recomendation col-9 col-lg-8">
                                        <h5>Денис</h5>
                                        <p>Хороший магазин. Продавец предложил несколько вариантов товара, обсудили все нюансы. Очень понравилась работа курьеров  – доставили заказ за 1 день!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-reviews col-md-12 col-lg-6">
                                <div class="row">
                                    <div class="wrapper-image-reviews col-3 col-lg-4" >
                                        <img class="img-fluid-reviews" src="/template/img/recomend_person2.jpg" alt="Наталья">
                                    </div>
                                    <div class="wrapper-recomendation col-9 col-lg-8">
                                        <h5>Наталья</h5>
                                        <p>Заказывали духи и несколько кремов. Магазин  оперативно перезвонил, курьер приехали в тот же день и доставил заказ.  В общем, мы остались довольны, спасибо!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-reviews  col-lg-6 col-12">
                                <div class="row">
                                    <div class="wrapper-image-reviews  col-3 col-lg-4">
                                        <img class="img-fluid-reviews" src="/template/img/recomend_person3.jpg" alt="Дмитрий">
                                    </div>
                                    <div class="wrapper-recomendation  col-9 col-lg-8">
                                        <h5>Дмитрий</h5>
                                        <p>Заказал парфюм для жены. Долго искал нужную сериюю в других магазинах, но нашел только у вас. Заказ привезли в Нижний Новгород всего через 3 дня после оформления заказа. Большое спасибо за быструю доставку!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-reviews col-md-12 col-lg-6">
                                <div class="row">
                                    <div class="wrapper-image-reviews col-3 col-lg-4">
                                        <img class="img-fluid-reviews" src="/template/img/recomend_person4.jpg" alt="Софья">
                                    </div>
                                    <div class="wrapper-recomendation col-9 col-lg-8">
                                        <h5>Софья</h5>
                                        <p>Купила отличную помаду. Очень классный магазин. Буду Еще здесь брать косметику, отличный ассортимент.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--    О наших пособности  -->

                    <div class="wrapper-our-service">
                        <div class="row">
                            <div class="block-our-service col-4">
                                <div class="row">
                                    <div class="wrapper-img-service col-4">
                                        <img class="img-fluid-service" src="/template/img/service_img1.png" alt="Быстрая доставка">
                                    </div>
                                    <div class="wrapper-text-service col-8">
                                        <p>Быстрая доставка до двери</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-our-service col-4">
                                <div class="row">
                                    <div class="wrapper-img-service col-4">
                                        <img class="img-fluid-service" src="/template/img/service_img2.png" alt="Выгодные акции и бонусы">
                                    </div>
                                    <div class="wrapper-text-service col-8">
                                        <p>Выгодные акции и бонусы</p>
                                    </div>
                                </div>
                            </div>
                            <div class="block-our-service col-4">
                                <div class="row">
                                    <div class="wrapper-img-service col-4">
                                        <img class="img-fluid-service" src="/template/img/service_img3.png" alt="Гарантии качества продукции">
                                    </div>
                                    <div class="wrapper-text-service col-8">
                                        <p>Гарантии качества продукции</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--     Инфо о парфюмерии    -->

                    <div class="header-main-sheet">
                        <h3>Главная страница</h3>
                    </div>
                    <div class="main-text-info">
                        <p> <strong>Парфюме́рия</strong> — совокупность изделий, применяемых для ароматизации чего-либо. Обычно парфюмерные изделия представляет собой жидкие растворы. Растворителями могут быть спирт, смесь спирта и воды, дипропиленгликоль и другие жидкости. Ароматические вещества могут быть как натурального происхождения (эфирные масла), так и искусственного (синтетические ароматизаторы, например, ванилин).<br>Наиболее популярные виды парфюмерных изделий:</p>
                        <ul>
                            <li>Парфюмерная вода (туалетные духи)</li>
                            <li>Духи</li>
                            <li>Туалетная вода</li>
                            <li>Одеколон</li>
                            <li>Дезодорант</li>
                        </ul>
                        <p>Парфюмерные композиции входят в состав и множества других гигиенических и косметических средств, таких, как мыло, шампунь, гель для душа и т. п.<br>Типы парфюмерной продукции отражают концентрацию соединений ароматического ряда в растворителе, который в прекрасном аромате является обычно этанолом или соединением воды и этанола. Различные источники отличаются в определениях типов духов.<br>Объемные концентрации парфюмерных масел следующие[источник не указан 2069 дней]:<br>Perfum: 30 % ароматических соединений<br>Perfum extract (Extrait): 15—40 % (IFRA: обычно 20 %) ароматических соединений<br>Eau de Parfum (EdP), Parfum de Toilette (PdT): 10—20 % (обычно ~15 %) ароматических соединений, иногда обозначаются как «millésime».<br>Eau de Toilette (EdT): 5—15 % (обычно ~10 %)) ароматических соединений.<br>Eau de Cologne (EdC): цитрусового типа парфюмерные продукты с 3—8 % (обычно ~5 %) ароматических соединений.<br>Кроме самого обычного растворителя для парфюмерных масел — этанола или смеси этанола и воды, могут также быть использованы нейтрально пахнущие масла типа очищенного кокосового масла, или жидких восков типа масла жожоба.<br>Интенсивность и долговечность духов базируются на концентрации, интенсивности и долговечности соединений ароматического ряда используемых ароматов. Различные парфюмерные продукты содержат различные количества масел. Поэтому, хотя концентрация масел в Eau de Parfum (EdP) обязательно будет выше, чем в Eau de Toilette (EdT), внутри диапазона фактические количества могут измениться между отдельными продуктами. EdT от одного производителя может быть более силен, чем EdP от другого.<br>Мужские ароматы редко продаются как EdP или Perfum extract. Также женские ароматы редко бывают в EdC-концентрациях. Хотя эта гендерная тенденция является обычной для определения концентрации аромата, это однозначно не фиксирует, был ли аромат предназначен для мужчин или женщин.<br>Кроме того, некоторые ароматы с одинаковым названием, но наличием различного названия концентрации не могут только отличаться по их концентрациям, а фактически используют различные смеси ароматических соединений в целом. Например, чтобы сделать EdT-версию аромата, более яркой и свежей, чем его EdP-версия, состав EdT нужно изменить так, чтобы он содержал немного больше верхних нот и/или меньше базовых. В некоторых случаях слова типа «extrême», «intense» или «concentrée», которые могли бы указывать ароматическую концентрацию, обозначают другие ароматы, которые имеет отношение к базовому только из-за подобия ароматического аккорда. Примером этого является Pour Monsieur от Chanel и Pour Monsieur Concentrée.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>


<?php include ROOT . "/view/layouts/footer.php";?>