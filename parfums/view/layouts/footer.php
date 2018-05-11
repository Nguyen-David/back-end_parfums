<!--      Футер сайта        -->
<div class="wrapper-footer">
    <div class="container">
        <footer>

            <div class="row">
                <div class="col">

                    <ul class="mr-auto footer-menu-navbar ">
                        <li class="nav-item ">
                            <a class="nav-link " href="/confidance/">Политика конфиденциальности и оферта <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/agreement/">Пользовательское соглашение</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/exchange/">Условия обмена и возврата</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/delivery/">Доставка</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/pay/">Оплата</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/contacts/">Контакты</a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="footer-bottom">
                <div class="row">
                    <div class="col-md-4 footer-info">
                        <h4>8(495)549-83-14</h4>
                        <a href="#"><i class="fa fa-envelope" aria-hidden="true"> </i> devid.nguyen@gmail.com</a>
                    </div>
                    <div class="col-md-4 footer-social-media">

                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link " href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-md-4 footer-link d-flex justify-content-end">
                        <a href="#" >Сделано by David Nguyen</a>
                    </div>
                </div>
            </div>
        </footer>
        <div class="button-up">
            -					<a href="#up">
                -						<button class="arrow-up">
                    <i class="fa fa-angle-up" aria-hidden="true">
                    </i>
                </button></a>
        </div>
    </div>
</div>







<!-- Optional JavaScript -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script type="text/javascript" src="/template/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/template/js/nav.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript" src="/template/slick/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.slick').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite:false,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>

<script type="text/javascript">

    $(document).ready(function () {
        $(".sub").click(function (){
            var id  = $(this).attr('data-id');

            $.post("/cart/addAjax/"+id, {}, function (data) {

                $("#cart-count2").html(data);
                $("#cart-count3").html(data);
            });
            return false;
        });
    });

</script>


</body>
</html>