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
                                    <li class="breadcrumb-item active" aria-current="page">Личный кабинет</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="heading-wrapper-about_us">
                            <h3>Вход в кабинет покупателя</h3>
                        </div>
                        <div class="enter-account-wrapper">
                            <?php if (isset($errors) && is_array($errors)):?>
                                <ul>
                                    <?php foreach ($errors as $error): ?>
                                        <li>- <?= $error?></li>
                                    <?php endforeach;?>
                                </ul>
                            <?php endif;?>
                            <form action="#" method="POST">
                                <div class="e-mail-account">
                                    <label for="email-address">
                                        E-mail <span>*</span>
                                    </label>
                                    <input type="email" name="email" class="form-control form-control-lg" placeholder="E-mail"   id="email-address " required>
                                </div>
                                <div class="password-account">
                                    <label for="exampleInputPassword1">
                                        Password <span>*</span>
                                    </label>
                                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1"  placeholder="Password " required>
                                </div>
                                <div class="entrance-account">
                                    <button type="submit" name="submit" class="btn btn-dark btn-enter" ><span>ВОЙТИ</span></button>
                                    <a href="restore_password.html">Востановить пароль</a>
                                    <a href="/user/register">Зарегистрироваться</a>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php include ROOT . "/view/layouts/footer.php";?>