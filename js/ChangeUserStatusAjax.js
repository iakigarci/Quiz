function changeStatus(button){
    if (confirm("Estas seguro de que deseas cambiar el estatus del usuario?")) {
        var str = button['id'].split("-");
        
        $.ajax({
            type: 'GET',
            url: '../php/ChangeUserState.php?email='+str[2],
            async: false,
            cache:false,
            success: function(data){
                var row = document.getElementById(str[2]);
                row.replaceWith(data);
            }
            
        });
        
    }
}