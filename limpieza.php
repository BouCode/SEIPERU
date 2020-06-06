<?php


include_once ('config.php');
//include (MODEL_PATH."productos.php");
//include (MODEL_PATH."global.php");
include ("Model/productos.php");

$pac = new Productos();

$titule = 'Limpieza y desinfección';

$ni = $pac->consultaXidSubgrx(4);




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
				<h3 style="margin-left: 12px;"><?php echo $titule; ?></h3>
				
				<div class=" col-sm-9 col-sm-push-3">							
				<br>
					<div class="features_items"><!--features_items-->
						<div class="row" style="display:flex; flex-wrap:wrap;">
						<?php  while($mue = $ni->fetch_assoc()){    ?>

										<div class="col-sm-6 col-md-6 col-lg-4" style="display:flex;">
											<div class="thumbnail" style="display:flex; flex-direction:column; justify-content:space-between;" >
												<a href="serviciosSubgrupo.php?id=<?php echo $mue["idsub"]; ?>"><img src="images/<?php echo $mue["img"]; ?>"></a>
												<div class="caption">
													<h3 style="text-align:center;"><?php $res = substr($mue["nombre"], 0,20); echo $res; ?></h3>
													<p><?php $rest = substr($mue["descr"], 0,92); echo $rest." ..."; ?></p>
												</div>
												<p style="text-align:center;"><a href="serviciosSubgrupo.php?id=<?php echo $mue["idsub"]; ?>" class="btn btn-primary" role="button">Ver más</a></p>
											</div>
										</div>
												
						<?php }?>
						</div>
						
						<!--<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">»</a></li>
						</ul>-->

						<ul class="pagination">
                                 
                                  <?php
                                            if ($total_registros) {
                                             
                                              if (($pagina - 1) > 0) {
                                                echo "<li ><a href='categoria.php?pagina=".($pagina-1)."'>< Anterior</a></li>";
                                                } else {
                                                echo "<li ><a href='#'>< Anterior</a></li>";
                                              }
                                              for ($i = 1; $i <= $total_paginas; $i++) {
                                                if ($pagina == $i) {
                                                  echo "<li class='active'><a href='#'>". $pagina ."</a></li>"; 
                                                } else {
                                                  echo "<li ><a href='categoria.php?pagina=$i'>$i</a> </li>"; 
                                                } 
                                              }
                                              if (($pagina + 1)<=$total_paginas) {
                                                echo "<li ><a href='categoria.php?pagina=".($pagina+1)."'>Siguiente ></a></li>";
                                              } else {
                                                echo "<li ><a href='#'>Siguiente ></a></li>";
                                              }    
                                            }
                                      ?>  
                        </ul>
						
					</div><!--features_items-->
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