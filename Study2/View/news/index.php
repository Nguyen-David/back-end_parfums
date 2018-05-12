<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-type" content="text/html"
          charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/Style.css">
    <link href="https://fonts.googleapis.com/css?family=Barlow|Lato:300,400,700" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <link rel="css/stylesheet" href="css/animate.min.css">
    <script src="js/wow.min.js"></script>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tourism</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php foreach ($newsList as $newsItem):?>
<div class="dota"><a href="/news/<?php echo $newsItem['id']?>"><?php echo $newsItem['title'];?></a></div>
    <div><p><?php echo $newsItem['date'];?></p></div>
    <div><p>Краткий контент:</br><?php echo $newsItem['short_content'];?></p></div>


<?php endforeach; ?>









<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="navbar col-md-12 wow bounceInLeft" data-wow-delay="0.7s">
                <a class="navbar-brand col-md-2"  id ="logo" href="#"><span>Indo</span>Tourism</a>
                <ul class="nav nav-pills navbar-right col-md-5">
                    <li role="presentation" ><a href="#">Home</a></li>
                    <li role="presentation" "><a href="#">About us</a></li>
                    <li role="presentation" "><a href="#">Projects</a></li>
                    <li role="presentation" "><a href="#">Contact us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bg_image">
        <div class="container">
            <div class="row">
                <div>
                    <h1 class="main_header col-md-offset-1 col-md-10 text-center">I like to ask the same question</h1>
                    <h2 class="low_header col-md-offset-3 col-md-6 text-center">Many Many times</h2>
                    <button type="button" class="btn btn-lg col-xs-offset-3 col-xs-6 col-md-offset-4 col-md-4"><span>Ok ask me</span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">

                <h3 class="text-center col-md-offset-2 col-md-8">We've since expnanded our life list to 43 sites around the world</h3>
                <h2 class="text-center col-md-offset-4 col-md-4 ">43 Places to See Before You Die</h2>
                <div class="icons col-md-12 col-xs-12">
                    <div class="img-circle icon col-md-2 col-sm-2 col-sm-offset-2  col-md-offset-2 col-xs-3"><img src="Img/world.png" alt="world"> </div>
                    <div class="icon col-md-2 col-sm-2 col-xs-3"> <img src="Img/shop.png" alt="world"></div>
                    <div class="icon col-md-2 col-sm-2 col-xs-3"> <img src="Img/camera.png" alt="world"></div>
                    <div class="icon col-md-2 col-sm-2 col-xs-3"> <img src="Img/search.png" alt="world"></div>
                </div>



            </div>
        </div>
    </div>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script>
    new WOW().init();
</script>
</body>
</html>