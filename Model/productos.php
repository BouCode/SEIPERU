<?php 



include_once ('config.php');
//include (CONTROLLER_PATH."conexion.php");
//include (MODEL_PATH."global.php");
include ("Controller/conexion.php");

header('Content-Type: text/html; charset=utf-8');
error_reporting(0);


class Productos{


				
				
						function consultaXSersub($id){
								
								$db = new Conectar();
								$conn = $db->conexion();		

								if ($conn->connect_errno) {
									printf("Conexión fallida: %s\n", $conn->connect_error);
									exit();

								}else{
								
								$sql = "SELECT `idsub`, `idgrupo`, `nombre`, `img`, `descr`, `fecharegistro` FROM `subgrupo` WHERE `idsub`='$id'";
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
					

				function sliders(){
							

							$db = new Conectar();
							$conn = $db->conexion();		
							if ($conn->connect_errno) {
								printf("Conexión fallida: %s\n", $conn->connect_error);
								exit();

							}else{
							
							$sql = "SELECT `id`, `image`, `fe_reg`,`est`,`title`,`subtitle` FROM `slider`";
							$result = $conn->query($sql);	
							}

							return $result;

				}

				function consultaMarcas($id){
							

					$db = new Conectar();
					$conn = $db->conexion();		
					if ($conn->connect_errno) {
						printf("Conexión fallida: %s\n", $conn->connect_error);
						exit();

					}else{
					
					$sql = "SELECT `id`, `image`, `fe_reg`,est FROM `marcas` WHERE `id`='$id'";
					$result = $conn->query($sql);	
					}

					return $result;

				}
				
			
			
					function consultaXid($id){

							$db = new Conectar();
							$conn = $db->conexion();
							if ($conn->connect_errno) {
								printf("Conexión fallida: %s\n", $conn->connect_error);
								exit();

							}else{
							
							$sql = "SELECT `idPro`, `idsubgrupo`, `titulo`, `precio`, `disponible`, `descripcion_corta`,
								`descr`, `img1`, `img2`, `img3`, `img4`, `feReg` FROM `productos` WHERE `idsubgrupo`='$id'";
							$result = $conn->query($sql);	
							}

							return $result;
									
							

					}

					function consultaXoferta(){

						$db = new Conectar();
						$conn = $db->conexion();
						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$sql = "SELECT `idPro`, `idsubgrupo`, `titulo`, `precio`, `disponible`,`Oferta`, `descripcion_corta`,
							`descr`, `img1`, `img2`, `img3`, `img4`, `feReg` FROM `productos` WHERE `Oferta`= 1 ";
						$result = $conn->query($sql);	
						}

						return $result;
								
						

				}
					
					
					function paginador($id,$ini,$final){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
					    printf("Conexión fallida: %s\n", $conn->connect_error);
					    exit();
					}else{

					$sql = "SELECT `idPro`, `idsubgrupo`, `titulo`, `precio`, `disponible`, `descripcion_corta`,
								`descr`, `img1`, `img2`, `img3`, `img4`, `feReg` FROM `productos` WHERE `idsubgrupo`='$id' ORDER BY idPro DESC LIMIT $ini,$final";
					$result = $conn->query($sql);				
					}

						return $result;

				}

					function paginadorVideos($ini,$final){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
								printf("Conexión fallida: %s\n", $conn->connect_error);
								exit();
						}else{

						$sql = "SELECT `idvid`, `url` FROM `videos` ORDER BY idvid DESC LIMIT $ini,$final";
						$result = $conn->query($sql);				
						}

							return $result;

						
					}

					function paginadorOfertas($ini,$final){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
								printf("Conexión fallida: %s\n", $conn->connect_error);
								exit();
						}else{

						$sql = "SELECT `idPro`, `idsubgrupo`, `titulo`, `precio`, `disponible`,`Oferta`,`descripcion_corta`,  
						`descr`, `img1`, `img2`, `img3`, `img4`, `feReg` FROM `productos` WHERE `Oferta`=1 ORDER BY idPro DESC LIMIT $ini,$final";
						$result = $conn->query($sql);				
						}

							return $result;

						
					}

					function consultaXidMenu($id){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$sql = "SELECT `idPro`, `idsubgrupo`, `titulo` FROM `productos` WHERE `idsubgrupo`='$id' LIMIT 5";
						$result = $conn->query($sql);				

						}

						return $result;

				}


				function consultaXidSubgrx($id){

					$db = new Conectar();
					$conn = $db->conexion();		

					if ($conn->connect_errno) {
						printf("Conexión fallida: %s\n", $conn->connect_error);
						exit();

					}else{
					
					$sql = "SELECT `idsub`, `idgrupo`, `nombre`, `img`, `descr`, `fecharegistro` FROM `subgrupo` WHERE `idgrupo`='$id' LIMIT 9";
					$result = $conn->query($sql);				

					}

					return $result;
				}

				


				
					

					function consultaXidDes($id){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$sql = "SELECT `idPro`, `idsubgrupo`, `titulo`, `precio`, `disponible`, `descripcion_corta`,
							`descr`, `img1`, `img2`, `img3`, `img4`, `feReg` FROM `productos` WHERE `idsubgrupo`='$id' ORDER BY idPro ASC LIMIT 4";
						$result = $conn->query($sql);				

						}

						return $result;

					}

					function consultaXRandDestacado(){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						/*$sql = "SELECT * FROM `productos` WHERE `idpro` NOT IN (SELECT `idpro` FROM `productos` WHERE `idpro`='$noid') AND `idpro`='$id' ORDER BY rand() LIMIT 6";*/
						$sql = "SELECT `idPro`, `idsubgrupo`, `titulo`, `precio`, `disponible`, `Oferta`,`descripcion_corta`,
							`descr`, `img1`, `img2`, `img3`, `img4`, `feReg` FROM `productos` ORDER BY rand() LIMIT 4";
						$result = $conn->query($sql);				

						}

						return $result;

					}

					function consultaXsubgrupo($idsubgrupo){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$sql = "SELECT `idPro`, `idsubgrupo`, `titulo`, `precio`, `disponible`, `Oferta`,`descripcion_corta`,
							`descr`, `img1`, `img2`, `img3`, `img4`, `feReg` FROM `productos` where `idsubgrupo` ='$idsubgrupo' ORDER BY rand() LIMIT 1";
						$result = $conn->query($sql);				

						}

						return $result;

					}

					function consultaXProdDestacado(){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$sql = "SELECT `idPro`, `idsubgrupo`, `titulo`, `precio`, `disponible`, `Oferta`,`descripcion_corta`,
							`descr`, `img1`, `img2`, `img3`, `img4`, `feReg` FROM `productos` ORDER BY idPro ASC LIMIT 10";
						$result = $conn->query($sql);				

						}

						return $result;

					}

					function consultaXProd($id){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$sql = "SELECT `idPro`, `idsubgrupo`, `titulo`, `precio`, `disponible`,`Oferta`,`descripcion_corta`, 
							`descr`, `img1`, `img2`, `img3`, `img4`, `feReg` FROM `productos` WHERE `idPro`='$id'";
						$result = $conn->query($sql);				

						}

						return $result;

					}


					function ventas($id){

						$db = new Conectar();
						$conn = $db->conexion();		

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						
						$sql = "SELECT `idVen`, `titulo`, `texto`, `img`, `fereg` FROM `ventas` WHERE `idVen`='$id'";
						$result = $conn->query($sql);				

						}

						return $result;

					}

					function searchProduct($prodsearch){


						$db = new Conectar();
						$conn = $db->conexion();

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
						$search = mysqli_real_escape_string($conn,$prodsearch);
						$sql = "SELECT * FROM productos WHERE `titulo` LIKE '%$search%' OR `descr` LIKE '%$search%'"; 
						$result = mysqli_query($conn,$sql);	
						}

						return $result;

					}
					
					function searchVideo(){


						$db = new Conectar();
						$conn = $db->conexion();

						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
							$sql = "SELECT `idvid`, `url` FROM `videos`";
							$result = $conn->query($sql);	
						}

						return $result;

					}

					function ObtenerMejoresHerramientas(){
						$db = new Conectar();
						$conn = $db->conexion();
						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
							$sql = "SELECT `idPro`,`idsubgrupo`,`titulo`,`img1`,`precio`,`descripcion_corta`,`descr` FROM `productos` WHERE `idsubgrupo`=3 ";
							$result = $conn->query($sql);	
						}

						return $result;
					}

					function ObtenerMejoresElectrometicos(){
						$db = new Conectar();
						$conn = $db->conexion();
						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
							$sql = "SELECT `idPro`,`idsubgrupo`,`titulo`,`img1`,`precio`,`descripcion_corta`,`descr` FROM `productos` WHERE `idsubgrupo`=2 ";
							$result = $conn->query($sql);	
						}

						return $result;
					}

					function ObtenerMejoresTecnologias(){
						$db = new Conectar();
						$conn = $db->conexion();
						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
							$sql = "SELECT `idPro`,`idsubgrupo`,`titulo`,`img1`,`precio`,`descripcion_corta`,`descr` FROM `productos` WHERE `idsubgrupo`=4";
							$result = $conn->query($sql);	
						}

						return $result;
					}

					function CantidadHerramientas(){
						$db = new Conectar();
						$conn = $db->conexion();
						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
							$sql = "SELECT COUNT(*) FROM `productos` WHERE `idsubgrupo`=3";
							$result = $conn->query($sql);	
						}

						return $result;
					}

					function HerramientasElectricas(){
						$db = new Conectar();
						$conn = $db->conexion();
						if ($conn->connect_errno) {
							printf("Conexión fallida: %s\n", $conn->connect_error);
							exit();

						}else{
							$sql = "SELECT `idPro`,`idsubgrupo`,`titulo`,`precio`,`img1` FROM productos WHERE idsubgrupo=1";
							$result = $conn->query($sql);	
						}

						return $result;
					}
					
				

}


?>