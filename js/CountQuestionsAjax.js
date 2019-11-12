$('document').ready(function(){
    var email = $('#dirCorreo').val();
    setInterval(verNumeroPreguntas(email),10000);
});

function verNumeroPreguntas(miEmail){
    var numMisPreguntas = misPreguntas(miEmail);
    var totPreguntas = totalPreguntas();
    $('#total-questions').append("<h3>Tus Preguntas/Total Preguntas</h3>");
    $('#total-questions').append("<table border=\"1\" width=\"1200\"><tr><th>"+numMisPreguntas+"/"+totPreguntas+"</th></tr></table>");
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





