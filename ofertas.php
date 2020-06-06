<?php


include_once ('config.php');
//include (MODEL_PATH."productos.php");
//include (MODEL_PATH."global.php");
include ("Model/productos.php");

$pac = new Productos();


$titule = "Ofertas";



$ni = $pac->consultaXoferta();
$cnt3 = mysqli_num_rows($ni);

$registros = 9;
$contador = 1;
$pagina = $_GET["pagina"];

if (!$pagina) { 
    $inicio = 0; 
    $pagina = 1; 
} else { 
    $inicio = ($pagina - 1) * $registros; 
} 

$resultados = $pac->paginadorOfertas($inicio,$registros);  
$total_registros = mysqli_num_rows($ni); 
$total_paginas = ceil($total_registros / $registros);



?>

<!DOCTYPE html>
<html lang="es">
<head>
    
	<?php include 'Views/head.php'?>
</head><!--/head-->

<body>

	<?php include 'Views/header.php'?>

	<section id="advertisement" style="background: #FAF1FF;">
		<div class="container">
			<img src="images/shop/advertisement.jpg" alt="" style="display: none !important;">
		</div>
	</section>
	
	<section style="background: #FAF1FF;">
		<div class="container-fluid container-category">
			<div class="row">
				<h3 style="margin-left: 12px;"><?php echo $titule." ( ".$cnt3." productos)"; ?></h3>
					
				
				<div class=" col-sm-9 col-sm-push-3">			
					<br>
						<div class="features_items"><!--features_items-->

							<?php  
							if ($total_registros) {
											while($mue = $resultados->fetch_assoc()){    ?>
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<a href="detalle.php?id=<?php echo $mue["idPro"]; ?>"><img src="images/productos/<?php echo $mue["img1"]; ?>" alt=""></a>
											<h2><?php echo "S/.".$mue["precio"]; ?></h2>
											<p><?php echo $mue["titulo"]; ?></p>
											<a href="detalle.php?id=<?php echo $mue["idPro"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> Detalle</a>
										</div>
										
									</div>
									
								</div>
							</div>
													
							<?php            }        
									
													} 
																		mysqli_free_result($ni);?>
							
							<!--<ul class="pagination">
								<li class="active"><a href="">1</a></li>
								<li><a href="">2</a></li>
								<li><a href="">3</a></li>
								<li><a href="">»</a></li>
							</ul>-->
							</div><!--features_items-->
							<div>
							<ul class="pagination">
																	
																		<?php
																							if ($total_registros) {
																							
																								if (($pagina - 1) > 0) {
																									echo "<li ><a style='background: white;' href='ofertas.php?pagina=".($pagina-1)."'>< Anterior</a></li>";
																									} else {
																									echo "<li ><a style='background: white;' href='#'>< Anterior</a></li>";
																								}
																								for ($i = 1; $i <= $total_paginas; $i++) {
																									if ($pagina == $i) {
																										echo "<li class='active'><a href='#'>". $pagina ."</a></li>"; 
																									} else {
																										echo "<li ><a style='background: white;' href='ofertas.php?pagina=$i'>$i</a> </li>"; 
																									} 
																								}
																								if (($pagina + 1)<=$total_paginas) {
																									echo "<li ><a style='background: white;' href='ofertas.php?pagina=".($pagina+1)."'>Siguiente ></a></li>";
																								} else {
																									echo "<li ><a style='background: white;' href='#'>Siguiente ></a></li>";
																								}    
																							}
																				?>  
									</ul>
							</div>
						
				</div>
				<div class=" col-sm-3 col-sm-pull-9"><br>
						<?php include 'Views/sidebar.php' ?>
					</div>
			</div>
		</div>
	</section>
	<br><br>
	<footer id="footer"><!--Footer-->
		
		
	 <?php include 'Views/footer.php'?>
		
	</footer><!--/Footer-->
	

	<?php include 'Views/libfooter.php'?>
 
</body>
</html>