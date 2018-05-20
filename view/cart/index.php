<?php include ROOT . "/view/layouts/header.php";?>

    <div class="content ">
    <div class="container wrapper-content">
        <div class="row">

            <div class="col">

                <!--      Правая часть сайта   -->
                <div class="sidebar" >
                    <div class="wrapper-chain">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Домой</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Корзина</li>
                            </ol>
                        </nav>
                    </div>
                        <div class="heading-wrapper-about_us">
                            <h4>Вы выбрали такие товары:</h4>
                        </div>
                        <div class="enter-account-wrapper">
                            <?php if($productsInCart):?>

                                <table class="table">
                                `<tr>
                                    <th>Код товара</th>
                                    <th>Название</th>
                                    <th>Стоимость,руб</th>
                                    <th>Количество, шт</th>
                                    <th>Удалить товар</th>    
                                </tr>
                                <?php foreach ($products as $product):?>

                                    <tr>
                                        <td><?= $product['code']?></td>
                                        <td>
                                            <a href="/product/<?= $product['id']?>">
                                                <?= $product['name']?>
                                            </a>
                                        </td>
                                        <td><?= $product['price']?></td>
                                        <td><?= $productsInCart[$product['id']]?></td>
                                        <td><a href="/cart/deleteFromCart/<?= $product['id']?>"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                    </tr>
                                <?php endforeach;?>
                                    <tr>
                                        <td colspan="3">Общая стоимость:</td>
                                        <td colspan="2"><?= $totalPrice ?></td>
                                    </tr>

                                </table>

                            <?php else:?>
                                <p>Корзина пуста</p>

                            <?php endif;?>
                        </div>
                </div>
            </div>
        </div>
    </div>


<?php include ROOT . "/view/layouts/footer.php";?>