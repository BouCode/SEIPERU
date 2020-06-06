<?php


include_once ('config.php');
//include (MODEL_PATH."productos.php");
//include (MODEL_PATH."global.php");
include ("Model/productos.php");

$pac = new Productos();

$prodsearch=$_POST["search"];
$resultsearch = $pac->searchProduct($prodsearch);
$cnt3 = mysqli_num_rows($resultsearch);
// $product=$resultsearch->fetch_assoc();

$titule = "Búsqueda";
$registros = 9;
$contador = 1;
$pagina = $_GET["pagina"];

if (!$pagina) { 
    $inicio = 0; 
    $pagina = 1; 
} else { 
    $inicio = ($pagina - 1) * $registros; 
} 

// $resultados = $pac->paginador($id,$inicio,$registros);  
// $total_registros = mysqli_num_rows($ni); 
// $total_paginas = ceil($total_registros / $registros);



?>

<!DOCTYPE html>
<html lang="es">
<head>
    
	<?php include 'Views/head.php'?>
</head><!--/head-->

<body>

	<?php include 'Views/header.php'?>

	<section id="advertisement" style="background: #683b81;">
		<div class="container">
			<img src="images/shop/advertisement.jpg" alt="" style="display: none !important;">
		</div>
	</section>
	
	<section style="background: #FAF1FF;">
		<div class="container-fluid container-category">
			<div class="row">
				<h3 style="margin-left: 12px;"><?php echo $titule." ( ".$cnt3." productos)"; ?></h3>

				<div class="col-sm-9 col-sm-push-3">
				<br>
					<div class="features_items" style="display:flex; flex-wrap:wrap;"><!--features_items-->

						<?php  
					
					        	while($product=$resultsearch->fetch_assoc()){    ?>
						<div class="col-sm-6 col-md-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<a href="detalle.php?id=<?php echo $product["idPro"]; ?>"><img src="images/productos/<?php echo $product["img1"]; ?>" alt=""></a>
										<!-- <h2><?php echo "S/ ".$product["precio"]; ?></h2> -->
										<p><?php echo $product["titulo"]; ?></p>
										<a href="detalle.php?id=<?php echo $product["idPro"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> Detalle</a>
									</div>
									
								</div>
								
							</div>
						</div>
												
						<?php            }        
						    
					            	 
                                  mysqli_free_result($ni);?>

						
					</div><!--features_items-->
				</div>

				<div class="col-sm-3 col-sm-pull-9"><br>
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