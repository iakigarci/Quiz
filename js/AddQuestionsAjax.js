$(document).ready(function () {
    $("#insertarPregunta").click(function () {
        var jqxhr = $.get("../php/AddQuestionsWithImage.php",null,function (data) {
            alert("sdsad");
            $('#insertQuestion').fadeIn(1000).html(data);
        });
        jqxhr.fail(function () {
            $('#insertQuestion').fadeIn().html('<p class="error"><strong>El servidor parece que  no responde</p>');
        });
    });
});