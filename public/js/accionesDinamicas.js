$(function() { 
    var divLogin= $("#divLogin").hide();
    var mensajeLogin= $("#mensajeLogin").hide();
    divLogin.slideDown(800);
    
    
    
    
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
            axis: 'y',
            trigger: 'hover',
            reverse: true
        }
        );
    }
    
    
    
});

