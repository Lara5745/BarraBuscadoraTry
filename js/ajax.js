//CAPITULO  4
$(function() { //Esta funcion evita que se envie el formulario al dar enter
  $('#search').focus(); //Situa el cursor en la barra
  $('#search_form').submit(function(e){
    e.preventDefault();
  })

    $('#search').keyup(function(){
      var envio = $('#search').val();
      $('#resultados').html('<h2 align="center"> <img src="img/loading.gif"  width="150" alt=""/> </h2>')
      $.ajax({ //Lama funciones de AJAX en JQuery
        type:'POST', //se usa , en  vez de ; por JQuery
        url:'php/buscador.php',
        data: ('search='+envio),
        success:function(resp){
          if(resp!=""){
            $('#resultados').html(resp);
          }
        }
      })
    })
})
