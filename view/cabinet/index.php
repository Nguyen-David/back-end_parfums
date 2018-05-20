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
                                    <li class="breadcrumb-item"><a href="index.html">Домой</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Личный кабинет</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="heading-wrapper-about_us">
                            <h2>Кабинет пользователя</h2>
                            <h4>Привет,<?= $user['name']; ?></h4>
                        </div>
                        <div class="edit_account">
                            <ul type="circle">
                                <li class="edit-office"><a href="/cabinet/edit">Редактировать данные</a></li>
                                <li  class="edit-office"><a href="">Список покупок</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include ROOT . "/view/layouts/footer.php";?>