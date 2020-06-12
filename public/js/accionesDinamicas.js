$(function() { 
    var divLogin= $("#divLogin").hide();
    var sistemas= $("#sistemas").hide();
    var mensajeLogin= $("#mensajeLogin").hide();
    divLogin.slideDown(800);
    sistemas.slideDown();
    
    
    
    
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

