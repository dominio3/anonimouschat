<?php
require "phpqrcode/qrlib.php";	//Agregamos la libreria para genera códigos QR
require "db.php";//requiero la conexion

$dir = 'temp/';//Declaramos una carpeta temporal para guardar la imagenes generadas
if (!file_exists($dir))//Si no existe la carpeta la creamos
      mkdir($dir);

$tamaño = 5; //Tamaño de Pixel
$level = 'L'; //Precisión Baja
$framSize = 3; //Tamaño en blanco

$consulta = "SELECT * FROM chat ORDER BY id DESC";
$ejecutar = $conexion->query($consulta);

while($fila = $ejecutar->fetch_array()) :
$filename = $dir.'test'.$fila['id'].'.png'; //Declaramos la ruta y nombre del archivo a generar
?>
<li class="left clearfix" id="datos-chat">
	 <span class="chat-img1 pull-left"><img src="images/anonimous.jpg" alt="User Avatar" class="img-circle"></span>
	 <div class="chat-body1 clearfix">
	 <span  style="color: #1C62C4;"><?php QRcode::png( $fila['nombre'] .' envió -> '. base64_decode($fila['mensaje']).'  '.'el : '. $fila['fecha'] , $filename, $level, $tamaño, $framSize); ?></span>
	 <?php echo '<img src="'.$dir.basename($filename).'" />';//Mostramos la imagen generada?>
   <hr/>
   </div>
</li>
<?php endwhile;?>
