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
                                    <li class="breadcrumb-item active" aria-current="page">Регистрация</li>
                                </ol>
                            </nav>
                        </div>
                        <?php if($result):?>
                            <h3>Вы успешно зарегистрировались</h3>
                        <?php else:?>
                            <div class="heading-wrapper-about_us">
                                <h3>Регистрация</h3>
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
                                    <div class="contact_face">
                                        <label for="contact-address">
                                            Контактное лицо(ФИО) <span>*</span>
                                        </label>
                                        <input type="text" name="name" class="form-control form-control-lg" value="<?= $name ?>" placeholder="Контактное лицо" data-toggle="popover" data-placement="right" data-content="Введите ваше ФИО" data-trigger="focus"  id="contact-address " required>
                                    </div>
                                    <div class="contact_number">
                                        <label for="contact-number">
                                            Контактный телефон <span>*</span>
                                        </label>
                                        <input type="text" name="number" class="form-control form-control-lg" value="<?= $number ?>" placeholder="Контактный телефон" data-toggle="popover" data-placement="right" data-content="Введите ваш контактній телефон" data-trigger="focus"  id="contact-number" required>
                                        <small id="emailHelp" class="form-text text-muted">Например +7(723)222-11-98</small>
                                    </div>
                                    <div class="e-mail-account ">
                                        <label for="email-address">
                                            E-mail
                                        </label>
                                        <input type="email" name="email" class="form-control form-control-lg" value="<?= $email ?>" placeholder="E-mail" data-toggle="popover" data-placement="right" data-content="Введите ваш e-mail для входа" data-trigger="focus"  id="email-address">
                                    </div>
                                    <div class="password-account">
                                        <label for="exampleInputPassword1">
                                            Password <span>*</span>
                                        </label>
                                        <input type="password" name="password" class="form-control form-control-lg" value="<?= $password ?>" id="exampleInputPassword1" data-toggle="popover" data-placement="right" data-content="Введите от 6 символов" data-trigger="focus" placeholder="Password" required>
                                    </div>

                                    <div class="entrance-account">
                                        <button type="submit"name="submit" class="btn btn-dark btn-enter"><span>ЗАРЕГИСТРИРОВАТЬ</span></button>
                                        <a href="account.html">У меня уже ест аккаунт</a>

                                    </div>
                                </form>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>


<?php include ROOT . "/view/layouts/footer.php";?>