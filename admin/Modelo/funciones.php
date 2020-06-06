<?php 


// include (CONTROLLER_PATH."conexion.php");

include ("../Controlador/conexion.php");
include 'global.php';
//header('Content-Type: text/html; charset=utf-8');
error_reporting(0);


class Model{


					function consultaSlider(){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$sql = "SELECT `id`, `image`, `fe_reg`, `est`,`title`,`subtitle`  FROM `slider` ";
						$result = $conn->query($sql);				

						}

						return $result;

					}

					function consultaCategories(){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$sql = "SELECT `id`, `image`, `title` FROM `categorias`";
						$result = $conn->query($sql);				

						}

						return $result;

					}

					/*function uploadTitleCategories($files){
    

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$iduser = $files['iduser'];
						$title = $files['title'];
						

						$sql = "UPDATE `categorias` SET `title`='$title'  WHERE (`id`= '$iduser') ";						

						echo $sql;
						$result = $conn->query($sql);				

						}

						return $result;

					}*/
					
					function uploadTitleSlider($files){
    

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$iduser = $files['iduser'];
						$title = $files['title'];
						$subtitle = $files['subtitle'];

						$sql = "UPDATE `slider` SET `title`='$title', `subtitle`='$subtitle'  WHERE (`id`= '$iduser') ";						

						
						$result = $conn->query($sql);				

						}

						return $result;

					}
					
					function consultaMarcas(){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$sql = "SELECT `id`, `image`, `fe_reg`, `est` FROM `marcas` ";
						$result = $conn->query($sql);				

						}

						return $result;

					}
					
					
					function nosotros(){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$sql = "SELECT `idNo`, `descripcion`,`url`,`mision`,`vision`,`valores`, `img`, `fe_reg` FROM `nosotros`";
						$result = $conn->query($sql);				

						}

						return $result;

					}
					
					function uploadMarcas($files){
    

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$iduser = $files['iduser'];
						$namefile = $files['namefile'];

						$sql = "UPDATE `marcas` SET `image`='$namefile' WHERE (`id`= '$iduser') ";
						
						$result = $conn->query($sql);				

						}

						return $result;

					}
					

				    function InsertFilesUpload($files){
    

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$iduser = $files['iduser'];
						$namefile = $files['namefile'];

						$sql = "UPDATE `slider` SET `image`='$namefile' WHERE `id`='$iduser'";
						echo $sql;
						$result = $conn->query($sql);				

						}

						return $result;



					}
					
					function InsertNosotros($nos){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$desc = $nos['descripcion'];
						$url = $nos['url'];
						$mision = $nos['mision'];
						$vision = $nos['vision'];
						$valores = $nos['valores'];

						$sql = "UPDATE `nosotros` SET `descripcion`='$desc', `url`='$url',`mision`='$mision',`vision`='$vision',`valores`='$valores' WHERE `idNo`='1'";
						$result = $conn->query($sql);				

						}

						return $result;

					}	
					

					function consultaAllProduct(){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$sql = "SELECT `idPro`, `idsubgrupo`, `titulo`, `precio`, `disponible` ,`Oferta`,`descripcion_corta`,`descr`,
						 `img1`, `img2`, `img3`, `img4`, `feReg` FROM `productos`";
						$result = $conn->query($sql);				

						}

						return $result;

					}	


					function consultaAllService(){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$sql = "SELECT `idsub`, `idgrupo`, `nombre`, `img`, `descr` FROM `subgrupo` WHERE `idgrupo` = 4";
						$result = $conn->query($sql);				

						}

						return $result;

					}	

					

					function consultaAllVentas(){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$sql = "SELECT `idVen`, `titulo`, `texto`, `img`, `fereg` FROM `ventas`";
						$result = $conn->query($sql);				

						}

						return $result;

					}
					
					function consultaAllVideos(){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$sql = "SELECT `idvid`, `title`, `url` FROM `videos`";
						$result = $conn->query($sql);				

						}

						return $result;

					}
					
					function detalleVentas($id){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$sql = "SELECT `idVen`, `titulo`, `texto`, `img` FROM `ventas` WHERE `idVen`='$id'";
						$result = $conn->query($sql);				

						}

						return $result;

					}	

					function detalleProducto($id){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$sql = "SELECT `idPro`, `idsubgrupo`, `titulo`, `precio`, `disponible`, `Oferta`, `descr`,
						 `img1`, `img2`, `img3`, `img4`, `feReg` FROM `productos` WHERE idPro='$id'";
						$result = $conn->query($sql);				

						}

						return $result;

					}

					function detalleVideo($id){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$sql = "SELECT `idvid`, `title`, `url` FROM `videos` WHERE idvid='$id'";
						$result = $conn->query($sql);				

						}

						return $result;

					}

					function detalleServicio($id){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$sql = "SELECT `idsub`, `nombre`, `img`, `descr` FROM `subgrupo` WHERE `idsub`='$id'";
						$result = $conn->query($sql);				

						}

						return $result;

					}
					function debugToConsole($msg) { 
						echo "<script>console.log(".json_encode($msg).")</script>";
					}

					function InsertProducts($producto){

						$db = new Conectar();
						$conn = $db->conexion();	

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{

							$idproducto = $producto['idproducto'];	
							$titulo  = $producto['titulo'] ;					
							$precio = $producto['precio'];	
							$disponible = $producto['disponible'];
							$oferta = (int) $producto['oferta'];
							$descripcion_corta= $producto['descripcion_corta'];
							$subgrupo = $producto['subgrupo'] ;
							$descproducto = $producto['descproducto'] ;
							$img1 = $producto['img1'];
							$img2 = $producto['img2'];
							$img3 = $producto['img3'];
							$img4 = $producto['img4'];

							if($idproducto==""){
								
								$sql = "INSERT INTO `productos`(`idsubgrupo`, `titulo`,`precio`,`disponible`, `Oferta`,`descripcion_corta`, `descr`, `img1`, `img2`, `img3`, `img4`) VALUES ('$subgrupo','$titulo','$precio','$disponible', '$oferta','$descripcion_corta' ,'$descproducto','$img1','$img2','$img3','$img4')";
								$result = $conn->query($sql);

							}
							else{
							    
							    if($descproducto!=""){

									$sql = "UPDATE `productos` SET `idsubgrupo`='$subgrupo',`titulo`='$titulo',`precio`='$precio',`disponible`='$disponible', `Oferta`=$oferta, `descripcion_corta`='$descripcion_corta',									
									`descr`='$descproducto'	WHERE `idPro`='$idproducto'";
									
								}

								if($img1!=""){
									$sql = "UPDATE `productos` SET `idsubgrupo`='$subgrupo',`titulo`='$titulo',`disponible`='$disponible', `Oferta`=$oferta, `descripcion_corta`='$descripcion_corta',
									`descr`='$descproducto',`img1`='$img1' WHERE `idPro`='$idproducto' ";
								}

								 if($img2!=""){
									$sql = "UPDATE `productos` SET `idsubgrupo`='$subgrupo',`titulo`='$titulo',`disponible`='$disponible', `Oferta`=$oferta, `precio`='$precio',`descripcion_corta`='$descripcion_corta',
									`descr`='$descproducto',`img2`='$img2' WHERE `idPro`='$idproducto' ";
								}

								if($img3!=""){
									$sql = "UPDATE `productos` SET `idsubgrupo`='$subgrupo',`titulo`='$titulo',`disponible`='$disponible', `Oferta`=$oferta, `precio`='$precio',`descripcion_corta`='$descripcion_corta',
									`descr`='$descproducto',`img3`='$img3' WHERE `idPro`='$idproducto' ";
								}

								if($img4!=""){
									$sql = "UPDATE `productos` SET `idsubgrupo`='$subgrupo',`titulo`='$titulo',`disponible`='$disponible', `Oferta`=$oferta, `precio`='$precio',`descripcion_corta`='$descripcion_corta',
									`descr`='$descproducto',`img4`='$img4' WHERE `idPro`='$idproducto' ";
								}

								
								$result = $conn->query($sql);

							}

				

						}

						return $result;

					}	

					function InsertVids($video){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{


							

							$idvid = $video['idvideo'];
							$title  = $video['titlevideo'] ;
							$url = $video['urlvideo'];


							if($idvid==""){
								
								$sql = "INSERT INTO `videos`( `title`,`url`) VALUES ('$title','$url')";
								
								$result = $conn->query($sql);

							}
							else{
							    
							    if($idvid!=""){

									$sql = "UPDATE `videos` SET `title`='$title',`url`='$url'	WHERE `idvid`='$idvid'";
									
								}


								
								$result = $conn->query($sql);

							}

				

						}

						return $result;

					}	


					
					


					function InsertServices($servicio){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{

							$idsube = $servicio['idsube'];
							$titulo  = $servicio['titulo'] ;
							$descservicio = $servicio['descservicio'] ;
							$img = $servicio['img'];
							

							if($img==""){

								$sql = "UPDATE `subgrupo` SET `nombre`='$titulo',`descr`='$descservicio'  
								WHERE `idsub`= '$idsube'";
								$result = $conn->query($sql);
							
							}else{

								$sql = "UPDATE `subgrupo` SET `nombre`='$titulo',
								`img`='$img',`descr`='$descservicio'  WHERE `idsub`= '$idsube'";
								$result = $conn->query($sql);

							}

						}

						return $result;

					}	


					function InsertSole($ventas){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{

							$idVen = $ventas['idVen'];
							$titulo  = $ventas['titulo'] ;
							$texto = $ventas['texto'] ;
							$img = $ventas['img'];
							

							if($img==""){

								$sql = "UPDATE `ventas` SET `titulo`='$titulo',
								`texto`='$texto' WHERE idVen='$idVen'";
								$result = $conn->query($sql);
							
							}else{

								$sql = "UPDATE `ventas` SET `titulo`='$titulo',`img`='$img',
								`texto`='$texto'  WHERE `idVen`= '$idVen'";
								$result = $conn->query($sql);

							}

						}

						return $result;

					}	



					function eliminarProducto($delete){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$cod = $delete['id'];

						$sql = "DELETE FROM `productos` WHERE `idPro`='$cod'";
						$result = $conn->query($sql);				

						}

						return $result;

					}

					function eliminarVideo($delete){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$cod = $delete['id'];

						$sql = "DELETE FROM `videos` WHERE `idvid`='$cod'";
						$result = $conn->query($sql);				

						}

						return $result;

					}
					

					function contacto(){

						$db = new Conectar();
					
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$sql = "SELECT `idCo`, `texto1`, `texto2`, `texto3`, `fe_reg` FROM `contacto` WHERE idCo='1' ";
						$result = $conn->query($sql);				

						}

						return $result;

					}


					function updateContact($cont){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{


							$texto1 = $cont['texto1'];
							$texto2  = $cont['texto2'] ;
							$texto3 = $cont['texto3'] ;
						
						$sql = "UPDATE `contacto` SET `texto1`='$texto1',
						`texto2`='$texto2',`texto3`='$texto3' WHERE `idCo`= '1'";
						$result = $conn->query($sql);				

						}

						return $result;

					}



}


?>