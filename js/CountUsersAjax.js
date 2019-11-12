$(document).ready(function(){   
    setInterval(cuantosConectados(),10000);
});

function cuantosConectados(){
    $.ajax({
        type: "GET",
        url:"../xml/Counter.xml",
        async: false,
        cache: false,
        success: function(xml){
            var numUsus = 0;
            numUsus = $(xml).attr('cont');        
            $('#users').append("<h3>Usuarios conectados</h3>");
            $('#users').append("<h4>"+numUsus+"</h4>");
        }
        
    });
}