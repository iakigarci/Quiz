$(document).ready(function() {
  $("#submit_b").click(function() {
    var bol = true;
    $("form :input").each(function() {
      var input = $(this);
      if (input.val() == "") {
        alert("No puede quedar vacio el campo con id: " + input.attr("id"));
      } else if (input.attr("id") == "dirCorreo") {
        if (comprobarMail($(this).val())) {
        } else {
          bol = false;
        }
      } else if (input.attr("id") == "enunciadoPre") {
        var txt = input.val();
        if (txt.length < 10) {
          alert("Enunciado de pregunta muy corto");
          bol = false;
        }
      }
    });
    return bol;
  });
});

function comprobarMail(mail) {
  var regex = /^[a-zA-Z.!#$%&'*+/=?^_`{|}~-]+(?:[0-9]{3})+@ikasle.ehu.+(eus|es)\W*/;
  if (regex.test(mail)) {
    //Alumnos
    return true;
  } else {
    return false;
  }
}
