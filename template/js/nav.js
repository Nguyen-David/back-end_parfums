$(document).ready(function(){
    $(".button-up").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();
        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href');
        //узнаем высоту от начала страницы до блока на который ссылается якорь
        var top = $(id).offset().top;
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').stop().animate({'scrollTop': top}, 1500);
    });
});