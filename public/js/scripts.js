function avatar_XMLHttpRequest(avatar) {
    var xhttp;
    if(xhttp == null){
      xhttp = new XMLHttpRequest();
    }
    xhttp.onreadystatechange = function()
    {
        if (this.readyState == 4 && this.status == 200) {
            // Ici le code des éléments à afficher avec un retour positif
        }
    };
    // Action à réaliser lors de l'appel de la méthode
    xhttp.open("GET", "url", true); // true pour asychrone false pour synchrone
    xhttp.send();   
  }