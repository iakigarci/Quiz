function verImagen(input){
    if(input.files && input.files[0]){
        var reader = new FileReader()

        reader.onload = function (e){
            $('#verImagen').attr('src',e.target.result);

        }

        reader.readAsDataURL(input.files[0])
    }
}


$('document').ready(function(){
    $('#file').change(function(){
        verImagen(this);
    })
})
