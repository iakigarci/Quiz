$(document).ready(function () {
    setInterval(actualizarContEmail, 1500);
    setInterval(actualizarLogin,1500);
});

function actualizarContEmail() {
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

function actualizarLogin() {
    $.ajax({
        type: "GET",
        url: '../xml/Counter.xml',
        dataType: "xml",
        async: false,
        cache: false,
        success: function (data) {
            console.log($(data).find("user").text());
            $("#usersLogin").text($(data).find("user").text()); 
        }
    })
    
}




