function visualizar() {
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = ActiveXObject("Microsoft.XMLHTTP");}
    xmlhttp.open("GET","../php/ShowXmlQuestions.php",true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            document.getElementById("showQuestions").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.send();
};