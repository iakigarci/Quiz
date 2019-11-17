function inicioSesion(img,email){
    $('#questions').show();
    $('#register').hide();
    $('#login').hide();
    $('#logout').show();
    $('#id-question').show();
    $("#h1").append("<p>"+email+"</p>");
    $("#h1").append("<img width=\"50\" height=\"60\" src=\"data:image/*;base64,"+img+"\"alt=\"Imagen\"/>");
}