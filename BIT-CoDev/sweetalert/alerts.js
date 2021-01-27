function Enviar() {  
  var datos = $('#form1').serialize();

  //alert(JSON.stringify(datos));
  
  
  $.ajax({
    method: "POST",
    url: "includes/newsletter.php",
    data: datos,
    error: function (jqXHR, textStatus, errorThrown) {
      alert(errorThrown);
    
    },
    sucess: function (data) {
      Swal.fire({
        icon: 'success',
        title: '¡Se ha enviado con éxito!',
        showConfirmButton: false,
        timer: 5000
      });
    }
  });
}
