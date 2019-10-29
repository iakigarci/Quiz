$(document).ready(function(){
    $.get("../xml/Users.xml",function (d) {
        var listaUsuarios = $(d).find('email');
        var salir = false;
        while (!salir) {
            if (listaUsuarios[i].childNodes[0].nodeValue == $("#dirCorreo").val()) {
                salir = True;
                alert(listaUsuarios[i].childNodes[0].nodeValue);
            }else{
                i++;
            }
        }   
    })
});