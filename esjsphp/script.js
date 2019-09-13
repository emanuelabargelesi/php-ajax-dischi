
function getData() {
    

//AJAX
$.ajax({
    url: "api.php",
    method: "GET",
    success: function(albums) {
        console.log(albums);   
        stampaAlbums(albums);  

    },
    error: function(){
        console.log('error!');
      }

});
}

function stampaAlbums(albums) {    
    var stampa = $("#item-template").html();
    var template = Handlebars.compile(stampa);

    for (var i = 0; i < albums.length; i++) {
        var dati = albums[i];
        console.log("dati:", dati);

      var contenuti = {
          titolo: dati.titolo,
          autore: dati.autore,
          data: dati.data,
          img: dati.img

      };
      
      var html = template(contenuti);
      $('.container').append(html);
  };
    
}





function init() {
    getData();
}

$(document).ready(init);