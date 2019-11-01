function getUserInfo(){
   $.get('../xml/Users.xml',function(xml){
       var encontrado = false;
       $(xml).find("usuario").each(function(){
           var mail = $(this).find("email").text();
           if(mail == $('#email').val()){
               encontrado = true;
               $('#tfno').val($(this).find('telefono').text());
               $('#nombre').val($(this).find('nombre').text());
               var apellidos = $(this).find('apellido1').text().concat(" ",$(this).find('apellido2').text());
               $('#apellido').val(apellidos);
           }
       })
       if(!encontrado){
           alert("El correo introducido no es correcto prueba con otro.");
       }
   }) 
}