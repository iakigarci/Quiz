$(document).ready(function () {
    setInterval(actualizar, 1000);
});

function actualizar() {
    var contTotales = 0;
    var contEmail = 0;
    var email = $("#dirCorreo").val();
    $.ajax({
        type: "GET",
        url: '../xml/Questions.xml',
        dataType: "xml",
        async: false,
        cache: false,
        success: function (data) {
            $(data).find("assessmentItem").each(function () {
                if ($(this).attr("author") === email) {
                    contEmail++;
                }
                contTotales++;
            });
        }
    });
    $("#misPreguntas").text(contEmail);
    $("#todasPreguntas").text(contTotales);
}



