$(document).ready(function(){
    $("#completar").click(function () {
        $.get("../xml/Users.xml",function (d) {
            $(d).find('usuario').each(function () {
                var email = $(this).find('email').text();
                if (email==$("#dirCorreo").val()) {
                    $("#nombre").val($(this).find('nombre').text());
                    $("#apellido").val($(this).find('nombre').text()+" "+$(this).find('apellido1').text()+" "+$(this).find('apellido2').text());
                    $("#telefono").val($(this).find('telefono').text());
                }
            });
        }); 
    });  
    $("#dirCorreo").focus(function () {
        $("#nombre").val("");
        $("#telefono").val("");
        $("#apellido").val("");
    });      
});