$(document).ready(function () {

    $(".sub").click(function (){
        var id  = $(this).attr('data-id');

        $.post("/cart/addAjax/"+id, {}, function (data) {

            $("#cart-count2").html(data);
            $("#cart-count3").html(data);

        });
        $.post("/cart/addAjax2", {}, function (data2) {

            $("#cart-sum").html('Корзина ' + data2 +  ' руб');
            $("#cart-sum2").html('Корзина ' + data2 +  ' руб');
        });
        alert('Товар добавлен в корзину');
        return false;
    });

    $(".in_basket").click(function (){
        var id  = $(this).attr('data-id');

        $.post("/cart/addAjax/"+id, {}, function (data) {

            $("#cart-count2").html(data);
            $("#cart-count3").html(data);

        });
        $.post("/cart/addAjax2", {}, function (data2) {

            $("#cart-sum").html('Корзина ' + data2 +  ' руб');
            $("#cart-sum2").html('Корзина ' + data2 +  ' руб');
        });
        alert('Товар добавлен в корзину');
        return false;
    });


});
