$(function(){
    $( "#slider-range" ).slider({

        range: true,
        min: 450,
        max: 7135,
        values: [ 0, 7135 ],
        step: 10,

        slide: function( event, ui ) {
            $( "#price" ).val(ui.values[ 0 ] + " - " + ui.values[ 1 ] );
        }
    });
    $( "#price" ).val(  $( "#slider-range" ).slider( "values", 0 ) +
        " - " + $( "#slider-range" ).slider( "values", 1 ) );

});