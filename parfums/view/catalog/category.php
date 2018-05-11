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
                            <?php foreach ($categories_data as $categoryItem):
                                if($categoryItem['sub_categories'] == 1 || $categoryItem['sub_categories']  == 2){?>
                                    <li class="sidebar-category ">
                                        <div class="pos-f-t">

                                            <div class="navbar-toggler spirit" data-toggle="collapse" data-target="#navbarToggleExternalContent<?=$categoryItem['sub_categories'];?>" aria-controls="navbarToggleExternalContent<?=$categoryItem['sub_categories'];?>" aria-expanded="false" aria-label="Toggle navigation">
                                                <a href="/category/<?= $categoryItem['id']?>" class="<?php if($categoryId == $categoryItem['id']) echo 'is_active ';?>"><?= $categoryItem['name'];?></a>
                                                <div class="text-right down <?php if($categoryId == $categoryItem['id']) echo 'is_active ';?>"><i class="fa fa-sort-desc " aria-hidden="true"></i></div>
                                            </div>
                                            <div class="collapse <?php if($categoryId == $categoryItem['id']) echo 'show';?>" id="navbarToggleExternalContent<?=$categoryItem['sub_categories'];?>">
                                                <ul class="category">
                                                    <?php  foreach ($sub_categories_data as $sub_categoryItem):
                                                        if($sub_categoryItem['group_sub_categories'] == 1  && $categoryItem['sub_categories'] == 1){?>

                                                            <li class="sidebar-category2"><a href="/categories/<?= $categoryItem['id'] . '/' . $sub_categoryItem['id']?>" ><?= $sub_categoryItem['name']?></a></li>

                                                        <?php } if ($sub_categoryItem['group_sub_categories'] == 2 && $categoryItem['sub_categories']  == 2) {?>
                                                        <li class="sidebar-category2"><a href="/categories/<?= $categoryItem['id'] . '/' . $sub_categoryItem['id']?>""><?= $sub_categoryItem['name']?></a></li>
                                                    <?php } endforeach;?>

                                                </ul>
                                            </div>

                                        </div>
                                    </li>

                                <?php } if ($categoryItem['sub_categories'] == 0) {?>
                                <li class="sidebar-category3">
                                    <a href="/category/<?= $categoryItem['id']?>" class="<?php if($categoryId == $categoryItem['id']) echo 'is_active';?>"><?= $categoryItem['name'];?></a>
                                </li>
                            <?php }endforeach;?>
                        </ul>
                    </div>
                </div>

                <div class="sidebar">
                    <div class="filter-wrapper">
                        <div class="header-filter">
                            <h4>Фильтры</h4>
                        </div>
                        <form action="" method="POST">
                            <div class="filter">
                                <div class="pos-f-t">

                                    <div class="navbar-toggler spirit" data-toggle="collapse" data-target="#navbar-price" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">	<a href="#">Цена</a>
                                        <div class="text-right down"><i class="fa fa-sort-desc " aria-hidden="true"></i></div>
                                    </div>
                                    <div class="collapse slider-range-price" id="navbar-price">

                                        <input class="form-control" name="price" id="price">
                                        <div id="slider-range"></div>

                                    </div>
                                </div>
                            </div>
                            <div class="filter">
                                <div class="pos-f-t">
                                    <div class="navbar-toggler spirit" data-toggle="collapse" data-target="#navbar-aroma" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">	<a href="#">Аромат</a>
                                        <div class="text-right down"><i class="fa fa-sort-desc " aria-hidden="true"></i></div>
                                    </div>
                                    <div class="collapse" id="navbar-aroma">
                                        <ul class="category aroma-category">
                                            <li class="sidebar-category-aroma">
                                                <input type="checkbox" id="check1"> <label for="check1">Морская волна</label>
                                            </li>
                                            <li class="sidebar-category-aroma">
                                                <input type="checkbox" id="check2"> <label for="check2">Пламя страсти</label>
                                            </li>
                                            <li class="sidebar-category-aroma">
                                                <input type="checkbox" id="check2"> <label for="check2">Снежная королева</label>
                                            </li>
                                            <li class="sidebar-category-aroma">
                                                <input type="checkbox" id="check2"> <label for="check2">Дуб</label>
                                            </li>
                                            <li class="sidebar-category-aroma">
                                                <input type="checkbox" id="check2"> <label for="check2">Фьерд</label>
                                            </li>
                                            <li class="sidebar-category-aroma">
                                                <input type="checkbox" id="check2"> <label for="check2">Для нее</label>
                                            </li>
                                            <li class="sidebar-category-aroma">
                                                <input type="checkbox" id="check2"> <label for="check2">Для него</label>
                                            </li>



                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="filter">
                                <div class="pos-f-t">
                                    <div class="navbar-toggler spirit" data-toggle="collapse" data-target="#navbar-amount" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">	<a href="#">Объем</a>
                                        <div class="text-right down"><i class="fa fa-sort-desc " aria-hidden="true"></i></div>
                                    </div>
                                    <div class="collapse" id="navbar-amount">
                                        <ul class="category aroma-category">
                                            <li class="sidebar-category-aroma">
                                                <input type="checkbox" id="check1"> <label for="check1"> 175 мл</label>
                                            </li>
                                            <li class="sidebar-category-aroma">
                                                <input type="checkbox" id="check2"> <label for="check2"> 125 мл</label>
                                            </li>
                                            <li class="sidebar-category-aroma">
                                                <input type="checkbox" id="check2"> <label for="check2"> 75 мл</label>
                                            </li>
                                            <li class="sidebar-category-aroma">
                                                <input type="checkbox" id="check2"> <label for="check2"> 50 мл</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="filter">
                                <div class="pos-f-t">

                                    <div class="navbar-toggler spirit" data-toggle="collapse" data-target="#navbar-manufacture" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">	<a href="#">Производство</a>
                                        <div class="text-right down"><i class="fa fa-sort-desc " aria-hidden="true"></i></div>
                                    </div>
                                    <div class="collapse" id="navbar-manufacture">
                                        <ul class="category aroma-category">
                                            <li class="sidebar-category-aroma">
                                                <input type="checkbox" id="check1"> <label for="check1"> Франция</label>
                                            </li>
                                            <li class="sidebar-category-aroma">
                                                <input type="checkbox" id="check2"> <label for="check2"> Швейцария</label>
                                            </li>
                                            <li class="sidebar-category-aroma">
                                                <input type="checkbox" id="check2"> <label for="check2"> Италия</label>
                                            </li>
                                            <li class="sidebar-category-aroma">
                                                <input type="checkbox" id="check2"> <label for="check2"> Испанияы</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="filter d-flex justify-content-center wrapper-btn-use">
                                <button type="button" class="btn btn-dark btn-use">Применить</button>
                            </div>
                        </form>
                    </div>
                </div>


                <!--      Социальные сети      -->



            </div>
            <div class="col-md-9">

                <!--      Правая часть сайта   -->
                <div class="sidebar" >
                    <div class="wrapper-chain">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Домой</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Каталог</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="header-sort">
                        <form method="POST" class="d-flex justify-content-end">
                            <label for="select-sort">
                                <select name="select-sort" id="select-sort">
                                    <option value="sort">Сортировка</option>
                                    <option value="increase_price">По возрастанию цены</option>
                                    <option value="decrease_price">По убыванию цены</option>
                                    <option value="for_new">С начала новые</option>
                                    <option value="for_name">По названию</option>
                                </select>
                            </label>
                        </form>
                    </div>
                    <div class="row catalog-product">
                        <?php foreach ($product_data as $ProductItem): ?>
                            <div class="slick-item col-md-4 col-lg-3 col-6">


                                <div class="product-label">
                                    <?php if($ProductItem['is_new'] == 1){?>
                                        <span class="product-new">Новинка</span>
                                    <?php }?>
                                    <?php if($ProductItem['is_hit'] == 1){?>
                                        <span class="product-new">Хит</span>
                                    <?php }?>
                                    <?php if($ProductItem['is_closeout'] == 1){?>
                                        <span class="product-new">Распродажа</span>
                                    <?php }?>
                                    <?php if($ProductItem['is_sale'] == 1){?>
                                        <span class="product-sale"><?= $ProductItem['price_sale'] ?>%</span>
                                    <?php }?>
                                </div>
                                <a href="/product/<?= $ProductItem['id'] ?>"><img class="img-fluid"  src="/template/img-products/<?= $ProductItem['image'] ?>.png" alt="">
                                </a>
                                <div class="price">
                                    <h5><?= $ProductItem['price'] ?> руб</h5>
                                    <a class="sub" href="#" data-id="<?= $ProductItem['id'] ?>">
                                        <div class="cart">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </div>
                                    </a>

                                </div>
                                <div class="info-product">
                                    <a href="/product/<?= $ProductItem['id'] ?>"><?= 'ID:'.$ProductItem['id'] ?> <?= $ProductItem['name']?></a>
                                </div>
                            </div>
                        <?php endforeach;?>



                    </div>
                    <div class="wrapper-pages row">
                        <div class="show-count col">
                            <form action="" method="POST">
                                <label for="select-pages">
                                    <span>Показывать по: </span>

                                    <select class="select-pages">
                                        <option value="12">12</option>
                                        <option value="24">24</option>
                                        <option value="36">36</option>
                                        <option value="48">48</option>
                                    </select>
                                </label></form>
                        </div>
                        <div class="pages col text-right">
                            <nav aria-label="Page navigation example">
                                <?php echo $pagination->get();?>
                            </nav>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>


<?php include ROOT . "/view/layouts/footer.php";?>