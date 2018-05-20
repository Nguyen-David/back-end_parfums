
$('#btn-add').on('click', function(){
    if ($(this).hasClass('display-flex')) {

            var id  = $(this).attr('data-id');

            $.post("/comparison/addAjax/"+id, {}, function (data) {

                $("#comparison-count2").html(data);
                $("#comparison-count3").html(data);

            });

        $(this).removeClass('display-flex').addClass('display-none');
        $('#btn-delete').removeClass('display-none').addClass('display-flex');
        alert('Товар добавлен в сравнения');
        return false;
    }
    $(this).removeClass('display-none').addClass('display-flex');
    $('#btn-delete').removeClass('display-flex').addClass('display-none');


});

$('#btn-delete').on('click', function(){
    if ($(this).hasClass('display-flex')) {

        var id2  = $(this).attr('data-id');

        $.post("/comparison/deleteAjax/"+id2, {}, function (data) {

            $("#comparison-count2").html(data);
            $("#comparison-count3").html(data);

        });

        $(this).removeClass('display-flex').addClass('display-none');
        $('#btn-add').removeClass('display-none').addClass('display-flex');
        alert('Товар удален из сравнения');
        return false;
    }
    $(this).removeClass('display-none').addClass('display-flex');
    $('#btn-add').removeClass('display-flex').addClass('display-none');


})
;