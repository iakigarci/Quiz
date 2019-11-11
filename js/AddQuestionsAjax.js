$(document).ready(function () {
    $("#insertarPregunta").click(function () {
        /* var formData = new FormData($("#fquestion"));
        console.log(formData); */
        /* var jqxhr = $.get("../php/AddQuestionWithImage.php", new FormData($('form')[0]), function (data) {
            $('#insertQuestions').fadeIn(1000).html(data);
        });
        jqxhr.fail(function () {
            $('#insertQuestions').fadeIn().html('<p class="error"><strong>El servidor parece que  no responde</p>');
        }); */
        $.ajax({
            type: "POST",
            url: '../php/AddQuestionWithImage.php',
            data: new FormData($('form')[0]),
            processData: false,
            contentType: false,
            success: function (response) {
                $("#insertQuestions").fadeIn(1000).html(response);
            }
        });
    });
});