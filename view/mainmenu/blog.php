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
                                    <li class="breadcrumb-item active" aria-current="page">Блог</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="heading-wrapper-about_us">
                            <h3>Блог</h3>
                        </div>
                        <div class="wrapper-blog">
                            <?php foreach ($blog_data as $blog_dataItem): ?>
                            <div class="content-blog">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="blog/facial_treatment.html"><img class="img-fluid" src="/template/img/blog_img<?= $blog_dataItem['id'];?>.jpg" alt=""></a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="article-header">
                                            <p><strong><?= $blog_dataItem['name'];?></strong></p>
                                        </div>
                                        <div class="article-content">
                                            <p><?= $blog_dataItem['content'];?></p>
                                        </div>
                                        <div class="article-date">
                                            <p class="date"><i class="fa fa-calendar" aria-hidden="true"></i> <?= $blog_dataItem['date'];?> <i class="fa fa-user-o" aria-hidden="true"></i> Админ <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"></i> коментарии (0)</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include ROOT . "/view/layouts/footer.php";?>