

$(document).ready(function(){

    var divLogin= $("#divLogin").hide();
    var sistemas= $("#sistemas").show();
    var novedades= $("#novedades").hide();
    var tituloNovedades= $("#tituloNovedades").hide();
    var notificacion = $('#notificacion');
    var allNovedades= $("#allNovedades");
    var flechaAbajo= $("#flechaAbajo");
    var flechaArriba= $("#flechaArriba");
    
    var cookie = Cookies;
    if (Cookies.get('dato')=="abierto"){
        allNovedades.show();
        flechaAbajo.hide();
    }else{
        allNovedades.hide();
        flechaArriba.hide();
    }
    localStorage.setItem("modalAbierto", true);
    //notificacion.slideToggle(5000);
    
    // var tituloNovedades= $("#tituloNovedades").hide();


    var mensajeLogin= $("#mensajeLogin").hide();
    divLogin.slideDown(800);
    //sistemas.show();

    $( "#flechaArriba" ).click(function() {
        Cookies.set('dato', 'cerrado');
        allNovedades.hide(500);
    });

    $( "#flechaAbajo" ).click(function() {
        Cookies.set('dato', 'abierto');
        allNovedades.show(500);
    });
    
    
    //LOGIN
    
    $("#divLogin").hover(function(){
    Cookies.set('dato', 'abierto');
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
    

    
    
    
    
});

