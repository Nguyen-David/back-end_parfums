$('#btn-add').on('click', function(){
    if ($(this).hasClass('display-flex')) {
        $(this).removeClass('display-flex').addClass('display-none');
        $('#btn-delete').removeClass('display-none').addClass('display-flex');
        return
    }
    $(this).removeClass('display-none').addClass('display-flex');
    $('#btn-delete').removeClass('display-flex').addClass('display-none');

})
$('#btn-delete').on('click', function(){
    if ($(this).hasClass('display-flex')) {
        $(this).removeClass('display-flex').addClass('display-none');
        $('#btn-add').removeClass('display-none').addClass('display-flex');
        return
    }
    $(this).removeClass('display-none').addClass('display-flex');
    $('#btn-add').removeClass('display-flex').addClass('display-none');

})
;