$(document).ready(function(){
    var divLogin= $("#divLogin").hide();
    var sistemas= $("#sistemas").hide();
    var novedades= $("#novedades").hide();
    var tituloNovedades= $("#tituloNovedades").hide();
    var notificacion = $('#notificacion');
    
    notificacion.slideToggle(5000);
    
    // var tituloNovedades= $("#tituloNovedades").hide();
    var mensajeLogin= $("#mensajeLogin").hide();
    divLogin.slideDown(800);
    sistemas.slideDown();
    
    $('#novedades').animate({
        left: '-=600'
        }, 458, 'swing', function() {

        // Animation complete. CALLBACK?

    });
    
    
    //LOGIN
    
    $("#divLogin").hover(function(){
	boton= $("#botonLogin");
        divLogin= $("#divLogin");
        mensajeLogin.slideDown(400);
        
        $("#botonLogin").animate({
            width: 300,
        });
        
        }, function(){
        $("#botonLogin").animate({
            width: 210
        });
    });
    
    //NOVEDADES
    
    $('#verNovedades').hover(function() {
        novedades.show();
        tituloNovedades.show(300);
       $('#novedades').animate({
           left: '+=600'
           }, 458, 'swing', function() {

       });

    }, function() {
        novedades.hide(200);
        tituloNovedades.hide();
           $('#novedades').animate({
               left: '-=600'
               }, 458, 'swing', function() {

               // Animation complete. CALLBACK?

           });

    });
    
    
    
    //ACCESO SISTEMAS Y NOVEDADES
    
    
    var elemento;
    for (i=1;i<10;i++){
        elemento= '#card' + i;
        $(elemento).flip({
            axis: 'x',
            trigger: 'hover',
            reverse: true
        }
        );
    }

    
    
    
    
});

