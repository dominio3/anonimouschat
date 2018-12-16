<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Anonimous Chat UNAJ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.6.1.js"></script>
    <script type="text/javascript" src="js/qrcode.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/eventos.js"></script>
  	<link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script>
    $(document).ready(function(){
      $("#text").keydown(function() {
        update_qrcode();
        if ($("#text").val().length > 20){
          alert("Mensaje demasiado Largo por favor envie el mensaje y siga Escribiendo");
        }
       });
    });
    </script>
</head>
