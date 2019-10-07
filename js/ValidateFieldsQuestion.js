function validarFormulario(){
    
    var resul = true;
    $("form :input").each(function(){
        var input = $(this);
        if(input.val()==""){
            resul = false;
            alert("El campo "+ "\' "+ input.attr("name")+"\'"+" esta vacio.");

        }else{
            if(input.attr("id")=="dirCorreo"){
                resul = validarCorreo(input.val());
                console.log(resul);
            }else if(input.attr("id")=="nombrePregunta"){
                if(input.val().length<10){
                    resul = false;
                }
            }
        }
    });
    return resul;
}

$('document').ready(function(){
    $('#submit').click(function(){
        return validarFormulario();
    });
});

function validarCorreo(correo){
    console.log(correo);
    RegExp.escape = function(s) {
    return s.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
    };
    //var regexAlu = /^[a-zA-Z]+[0-9]{3}+@ikasle\.ehu\.+(eus|es)$/;
    //const regexPro = /^[a-zA-Z]+(\.+[a-zA-Z]+@ehu\.+(eus|es)|@ehu\.+(eus|es))$/;
    
    var regexAlu = new RegExp(RegExp.escape("/^[a-zA-Z]+[0-9]{3}+@ikasle\.ehu\.+(eus|es)$/"));
    
    var regexPro = new RegExp(RegExp.escape(" /^[a-zA-Z]+(\.+[a-zA-Z]+@ehu\.+(eus|es)|@ehu\.+(eus|es))$/"));
    
    if(regexAlu.test(correo))
        return true;
    else if(regexPro.test(correo))
        return true;
    return false;
}