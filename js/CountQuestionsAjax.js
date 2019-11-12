$(document).ready(function(){   
    setInterval(verNumeroPreguntas(),10000);
});

function verNumeroPreguntas(){
    var miEmail = $('#dirCorreo').val();
    var numMisPreguntas = misPreguntas(miEmail);
    var totPreguntas = totalPreguntas();
    $('#total-questions').append("<h3>Tus Preguntas/Total Preguntas</h3>");
    $('#total-questions').append("<h4>"+numMisPreguntas+"/"+totPreguntas+"</h4>");
}

function totalPreguntas(){
    var cont = 0;
        $.ajax({
        type: "GET",
        url:"../xml/Questions.xml",
        async: false,
        cache: false,
        success: function(xml){
            $(xml).find("assessmentItem").each(function(){
                cont = cont+1;
            });
        }
        
    });
    return cont;
}

function misPreguntas(email){
    var cont = 0;
    $.ajax({
        type: "GET",
        url:"../xml/Questions.xml",
        async: false,
        cache: false,
        success: function(xml){
            $(xml).find("assessmentItem").each(function(){
            emailXml = $(this).attr('author');
            if(email.valueOf()==emailXml.valueOf()){
                cont = cont+1;
            }
        });
        }
        
    });
    return cont;
}





