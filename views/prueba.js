function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        printdatos(JSON.parse(this.responseText));
      }
    };
    xhttp.open("GET", "controller/getusers.php", true);
    xhttp.send();
}
function printdatos(datos){
    var tabla = document.getElementsByTagName("table")[0];
    var parrafo = document.createElement("p");
    var body = document.getElementsByTagName("body")[0];
    console.log(parrafo,body,tabla,datos);
    
    
}


