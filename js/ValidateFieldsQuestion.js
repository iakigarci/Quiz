$(document).ready(function() {
    $('#submit_b').click(function() {
        $("form :input").each(function(){
            var input = $(this);
            if (input.val() == "") {
                alert("No puede quedar vacio el campo con id: " + input.attr("id"));
            }else if (input.attr("id") == "dirCorreo") {
                if (comprobarMail($(this).val())) {
                    alert("mail ")
                }else{
                    alert("FALSE");
                }
            } 
        });
    })
})

function comprobarMail(mail) {
    if (/^[a-zA-Z.!#$%&'*+/=?^_`{|}~-]+(?:[0-9]{3})+@ikasle.ehu.+(eus|es)\W*/.test(mail)){//Alumnos
        return true;
    } else {
        return false;
    }
}

