<?php include ROOT . "/view/layouts/header.php";?>

    <div class="content ">
        <div class="container wrapper-content">
            <div class="row">
                <div class="col-md-3 col-sm-12">


                    <!--   Левая часть сайта     -->
                    <!--        Меню слева       -->
                    <?php include ROOT . "/view/layouts/left-category.php";?>


                    <!--      Социальные сети      -->

                    <div class="social-media ">
                        <h4>Мы в соцсетях</h4>
                        <a href="Facebook.com"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                        <a href="Vk.com"><i class="fa fa-vk" aria-hidden="true"></i></a>
                        <a href="Twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>

                </div>
                <div class="col-md-9">

                    <!--      Правая часть сайта   -->
                    <div class="sidebar" >
                        <div class="wrapper-chain">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Домой</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Оплата</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="heading-wrapper-about_us">
                            <h3>Оплата</h3>
                        </div>
                        <div class="editor">
                            <p>Разместите на этой странице информацию с описанием способов оплаты, которые использует ваш интернет-магазин.</p>
                            <p><strong><em>Например:</em></strong></p>
                            <p>Вы можете оплатить заказ:</p>
                            <ol>
                                <li>Наличными курьеру или в пункте выдачи при получении заказа</li>
                                <li>Банковской картой Visa, Mastercard или МИР через сайт при оформлении заказа</li>
                                <li>Наложенным платежом при заказе с доставкой Почтой России</li>
                            </ol>
                            <p>----</p>
                            <p><em>Эту страницу можно отредактировать в бэк-офисе сайта в разделе <a rel="noopener noreferrer" href="/admin2/pages" target="_blank">Меню и страницы</a>.</em></p>
                            <p><em>Подробнее о создании текстовых страниц и меню, читайте в документации:&nbsp;<a rel="noopener noreferrer" href="https://www.insales.ru/collection/doc-settings/product/razdel-menyu" target="_blank">www.pay.com</a></em></p>
                            <p><em>Способы оплаты при оформлении заказа можно настроить в разделе <a rel="noopener noreferrer" href="/admin2/payment_gateways" target="_blank">Настройки -&gt; Оплата</a>.<br></em></p>
                            <p><em>Подробнее о настройке способов оплаты, читайте в документации:&nbsp;<a rel="noopener noreferrer" href="https://www.insales.ru/collection/doc-payment/product/oplata" target="_blank">www.pay.com</a></em></p>
                        </div>


                    </div>
                </div>
            </div>
        </div>

<?php include ROOT . "/view/layouts/footer.php";?>