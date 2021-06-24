require('./bootstrap');

$('#input_busqueda').focusin(function() {
    $(this).css('width', "250px");
    $(this).css('transition', "width 1s");
    $(this).css('cursor', 'text');
    $(this).css('padding-left', '2rem'); 
});

$('#input_busqueda').focusout(function() {
    $(this).css('width', "1.75rem");
    $(this).css('transition', "width 1s");
    $(this).css('cursor', 'pointer');
    $(this).css('padding-left', '0'); 
    $(this).val("");
});

$('#enlace_productos').click(function(){   
    $('#enlaces').toggleClass('visible');
    if ($('#enlaces').css('display') == 'block') {
        $('#enlaces ul ul').css('display', 'none');
    } else {
        $('#enlaces ul ul').removeClass('visible');
    }
});

$('.enlace').click(function() {
    $(this).next('ul').toggleClass('visible');
});
