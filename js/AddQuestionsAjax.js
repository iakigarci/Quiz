$(document).ready(function () {
    $("#insertarPregunta").click(function () {
        /* var formData = new FormData($("#fquestion"));
        console.log(formData); */
        var jqxhr = $.get("../php/AddQuestionWithImage.php", $("#fquestion").serialize(), function (data) {
            console.log(data);
            $('#insertQuestions').fadeIn(1000).html(data);
        });
        jqxhr.fail(function () {
            $('#insertQuestions').fadeIn().html('<p class="error"><strong>El servidor parece que  no responde</p>');
        });
        /* console.log("1");
        $.ajax({
            type: "GET",
            url: '../php/AddQuestionWithImage.php',
            data: $("#fquestion").serialize(),
            success: function (response) {
                console.log(response);
                $("#insertQuestions").fadeIn(1000).html(response);
            }
        }); */
    });
});