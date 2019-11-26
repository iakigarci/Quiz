function inicioSesion(img, email) {
    $('#register').hide();
    $('#login').hide();
    $('#logout').show();
    $("#h1").append("<p>" + email + "</p>");
    $("#h1").append("<img width=\"50\" height=\"60\" src=\"data:image/*;base64," + img + "\"alt=\"Imagen\"/>");
    if (email === "admin@ehu.es") {
        $("#users").show();
        $('#questions').hide();
        $('#id-question').hide();
    } else {
        $('#questions').show();
        $('#id-question').show();
        $("#users").hide();
    }
}