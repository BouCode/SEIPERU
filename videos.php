<?php


include_once ('config.php');
//include (MODEL_PATH."productos.php");
//include (MODEL_PATH."global.php");
include ("Model/productos.php");

$pac = new Productos();

$videos = $pac->searchVideo();
$cnt3 = mysqli_num_rows($videos);
// $product=$videos->fetch_assoc();

$titule = "Galería de Videos";
$registros = 9;
$contador = 1;
$pagina = $_GET["pagina"];

if (!$pagina) { 
    $inicio = 0; 
    $pagina = 1; 
} else { 
    $inicio = ($pagina - 1) * $registros; 
} 

 $resultados = $pac->paginadorVideos($inicio,$registros);  
 $total_registros = mysqli_num_rows($videos); 
 $total_paginas = ceil($total_registros / $registros);



?>

<!DOCTYPE html>
<html lang="es">
<head>
    
	<?php include 'Views/head.php'?>
</head><!--/head-->

<body>

	<?php include 'Views/header.php'?>


	
	<section style="background: #FAF1FF;">
		<div class="container-fluid container-category">
			<div class="row">
				<h3 class="gallery-video-title"><?php echo $titule." ( ".$cnt3." )"; ?></h3>

				<div class="col-sm-12">

						<?php  
					
					        	while($product=$resultados->fetch_assoc()){ 
                      
                      $new_url = str_replace("https://www.youtube.com/watch?v=","https://www.youtube.com/embed/",$product["url"]);
                      ?>
						<div class="col-xs-12 col-sm-6 col-md-4" style="height:20em; padding-bottom:15px; padding-top:15px;">        
                <iframe height="100%" width="100%" src="<?php echo $new_url; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	
						</div>
												
						<?php            }        
						    
					            	 
                                  mysqli_free_result($ni);?>

				</div>


			</div>
		</div>
	</section>
  <br><br>
  <div style="display:flex; justify-content:center;">
							<ul class="pagination">
																	
																		<?php
																							if ($total_registros) {
																							
																								if (($pagina - 1) > 0) {
																									echo "<li ><a style='background: white;' href='videos.php?&pagina=".($pagina-1)."'>< Anterior</a></li>";
																									} else {
																									echo "<li ><a style='background: white;' href='#'>< Anterior</a></li>";
																								}
																								for ($i = 1; $i <= $total_paginas; $i++) {
																									if ($pagina == $i) {
																										echo "<li class='active'><a href='#'>". $pagina ."</a></li>"; 
																									} else {
																										echo "<li ><a style='background: white;' href='videos.php?&pagina=$i'>$i</a> </li>"; 
																									} 
																								}
																								if (($pagina + 1)<=$total_paginas) {
																									echo "<li ><a style='background: white;' href='videos.php?&pagina=".($pagina+1)."'>Siguiente ></a></li>";
																								} else {
																									echo "<li ><a style='background: white;' href='#'>Siguiente ></a></li>";
																								}    
																							}
																				?>  
									</ul>
							</div>
	<br><br>
	<footer id="footer"><!--Footer-->
		
		
	 <?php include 'Views/footer.php'?>
		
	</footer><!--/Footer-->
	

	<?php include 'Views/libfooter.php'?>
 
</body>
</html>