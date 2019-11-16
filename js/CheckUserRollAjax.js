$(document).ready(function(){
   $('#dirCorreo').blur(function(){
    $.ajax({
        type: 'GET',
        url: '../php/ClientVerifyEnrollment.php?dirCorreo='+$('#dirCorreo').val(),
        async: false,
        cache: false,
        success: function(data){
            if(data === "SI"){
                 $('#correo-div').html('<h4 style="color: green">El email es VIP</h4>');
            }else{
                $('#correo-div').html('<h4 style="color: red">El email no es VIP</h4>');
            }
        }
    });
}); 
});