
<?php require('head.php'); ?>

<?php
session_start();
date_default_timezone_set('America/Argentina/Buenos_Aires');
include "db.php";
if (isset($_POST['alias'])) {
$_SESSION['user'] = $_POST['alias'];
}

?>

<body onload="ajax();">
<div class="main_section">
   <div class="container">
      <div class="chat_container">
        <div class="col-sm-12 message_section">
		 <div class="row">
		 <div class="new_message_head">
		 <div class="pull-left" width="50">

         <span class="chat-img1 pull-left " >
           <img src="images/anonimous.jpg" alt="User Avatar" class="img-circle" width="50" height="50">
         </span>

         <i class="fa fa-plus-square-o  " aria-hidden="true" ></i> <?='Logged User : '.$_SESSION['user']?>

     </div>
     <div class="pull-right">
       <div class="dropdown open">
         <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
           <i class="fa fa-cogs" aria-hidden="true"></i>  Setting
           <span class="caret"></span>
         </button>
         <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
           <li><a href="index.php" onclick = "logout()">Home</a></li>
           <li><a href="index.php" onclick = "logout()">Logout</a></li>
         </ul>
       </div>
   </div>
</div><!--new_message_head-->


<!--?php if(isset($_SESSION['user'])){ ?-->
		 <div class="chat_area">
		 <ul class="list-unstyled">
       <li class="left clearfix" id="datos-chat" >
         <div id="chat"></div>
      </li>
<!--?php }else {?>
			 <li class="left clearfix admin_chat">
       <span class="chat-img1 pull-right">
       <img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle">
       </span>
       <div class="chat-body1 clearfix">
       <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
			 <div class="chat_time pull-left">09:40PM</div>
       </div>
       </li>
<//?php }?-->
   </ul>
 </div>

 <form method="POST" action="sala.php">
  <div class="message_write">
    <input  type="hidden" name="id">
    <input  type="hidden" name="nombre" placeholder="Ingresa tu nombre" value = "<?= $_SESSION['user'] ?>" >
    <input id="text" type ="password"  name="msg" class="form-control w-80" placeholder="type a message">
      <div class="clearfix"></div>
         <div id="qr"></div>
        <div class="chat_bottom">
           <input type="submit" name="enviar" class="pull-right btn btn-success">
           <input type="submit" name="eliminar" class="pull-left btn btn-danger" onclick= "limpiar()" value ="Eliminar Rastros" >
        </div>
  </div>
</form>

</div> <!--message_section-->
</div>
</div>
</div>


<?php
  if (isset($_POST['enviar'])) {

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $mensaje = base64_encode($_POST['msg']);
    $fecha = date("d/m/Y H:i:s");

    $consulta = "INSERT INTO chat (nombre, mensaje , fecha) VALUES ('$nombre', '$mensaje' , '$fecha')";

    $ejecutar = $conexion->query($consulta);

    if ($ejecutar) {
      echo "<source src='audio/beep.mp3' type='audio/mpeg'>";
      echo "<embed loop='false' src='audio/beep.mp3' hidden='true' autoplay='true'>";
    }

  }


?>
</body>
</html>
