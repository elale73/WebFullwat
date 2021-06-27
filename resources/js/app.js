require('./bootstrap');

/* -------------------- ANIMACION INPUT BUSQUEDA -------------------- */
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

