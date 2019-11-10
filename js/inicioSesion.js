function inicioSesion(img,email){
    $('#insertq').show();
    $('#showq').show();
    $('#register').hide();
    $('#login').hide();
    $('#logout').show();
    $("#h1").append("<p>"+email+"</p>");
    $("#h1").append("<img width=\"50\" height=\"60\" src=\"data:image/*;base64,"+img+"\"alt=\"Imagen\"/>");
}