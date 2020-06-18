$(function() { 
    var divLogin= $("#divLogin").hide();
    var sistemas= $("#sistemas").hide();
    //var novedades= $("#novedades").hide();
    
    // var tituloNovedades= $("#tituloNovedades").hide();
    var mensajeLogin= $("#mensajeLogin").hide();
    divLogin.slideDown(800);
    sistemas.slideDown();
    
    $('#novedades').animate({
           right: '-=600'
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

       $('#novedades').animate({
           right: '+=600'
           }, 458, 'swing', function() {

           // Animation complete. CALLBACK?

       });

    }, function() {

           $('#novedades').animate({
               right: '-=600'
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

