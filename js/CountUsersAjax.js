$(document).ready(function(){   
    setInterval(cuantosConectados,1000);
});

function cuantosConectados(){
    $.ajax({
        type: "GET",
        url:"../xml/Counter.xml",
        dataType: "xml",
        async: false,
        cache: false,
        success: function(xml){
            var numUsus = 0;
            numUsus = $(xml).find("users").attr('cont');        
            $('#usuariosTotales').text(numUsus);    
        } 
    });
}