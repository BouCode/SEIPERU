<?php


include_once('config.php');
//include (MODEL_PATH."productos.php");
//include (MODEL_PATH."global.php");
include("Model/productos.php");

$page = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$pac = new Productos();


$id = $_GET["id"];

$ni = $pac->consultaXProd($id);
$detProduc = $ni->fetch_assoc();

$idsub = $pac->consultaXProd($id);
$subgrupos = $idsub->fetch_assoc();

/*$sub=$pac->consultaXsubgrupo($detProduc["idsubgrupo"],$id);*/
$sub = $pac->consultaXRandDestacado();
$relacionados = $pac->consultaXRandDestacado();
/*$relacionados=consultaXsubgrupo($subgrupos["idsubgrupo"]);*/


?>



<!DOCTYPE html>
<html lang="es">

<head>

	<?php include 'Views/head.php' ?>
</head>
<!--/head-->

<body>

	<?php include 'Views/header.php' ?>

	<section id="advertisement" style="background: #683b81;">
		<div class="container">

		</div>
	</section>

	<section style="background: #FAF1FF;"><br><br>
		<div class="container-fluid detalle-container">
			<div class="row">

				<div class="col-sm-9 col-sm-push-3">
					<div class="product-details">
						<!--product-details-->
						<div class="col-lg-5 col-md-6  col-sm-12">

							<section id="magnific">
								<div class="row">
									<div class="large-5 column">
										<div class="xzoom-container">
											<img class="xzoom5" id="xzoom-magnific" style="max-width: 100%;" src="images/productos/<?php echo $detProduc["img1"] ?>" xoriginal="images/productos/<?php echo $detProduc["img1"] ?>" />
											<div class="xzoom-thumbs">
												<a href="images/productos/<?php echo $detProduc["img1"] ?>"><img class="xzoom-gallery5" width="80" src="images/productos/<?php echo $detProduc["img1"] ?>" xpreview="images/productos/<?php echo $detProduc["img1"] ?>" title="The description goes here"></a>
												<?php if ($detProduc["img2"] != "") { ?>
													<a href="images/productos/<?php echo $detProduc["img2"] ?>"><img class="xzoom-gallery5" width="80" src="images/productos/<?php echo $detProduc["img2"] ?>" title="The description goes here"></a>
												<?php	} ?>

												<?php if ($detProduc["img3"] != "") { ?>
													<a href="images/productos/<?php echo $detProduc["img3"] ?>"><img class="xzoom-gallery5" width="80" src="images/productos/<?php echo $detProduc["img3"] ?>" title="The description goes here"></a>
												<?php	} ?>


												<?php if ($detProduc["img4"] != "") { ?>
													<a href="images/productos/<?php echo $detProduc["img4"] ?>"><img class="xzoom-gallery5" width="80" src="images/productos/<?php echo $detProduc["img4"] ?>" title="The description goes here"></a>
												<?php	} ?>
											</div>
										</div>
									</div>
									<div class="large-7 column"></div>
								</div>
							</section>

						</div>
						<div class="col-lg-7 col-md-6 col-sm-12 detalle-container">
							<div class="product-information panel panel-default shadow">
								<!--/product-information-->

								<h2 style="margin-bottom:0; font-size:2.5em;"><?php echo $detProduc["titulo"] ?></h2>
								
								<div class="seiDiseño estrellas alinear-estrellas" >
									<div class="estrellas">
										<i class="fas fa-star" style="color:#E9F319"></i>
										<i class="fas fa-star" style="color:#E9F319"></i>
										<i class="fas fa-star" style="color:#E9F319"></i>
										<i class="fas fa-star" style="color:#E9F319"></i>
										<i class="fas fa-star" style="color:#E9F319"></i>
									</div>
								</div>	
								<p style="margin-top:7px;"><b>Disponible:    </b ><?php echo $detProduc["disponible"]  ?></p>
								<p class="oferta-detalles <?php if( $detProduc["Oferta"]==0) echo "oculto" ?>" style="color:red"> OFERTA</p>
								<img src="images/productos/" alt="">
								<hr style="border-top:1px solid #c6c4c4; margin-top:5px;">
								<div class="row">
									<div class="col-sm-4">
										<a class="a-heart"><i class="fa fa-heart-o" style="margin-right:7px;" aria-hidden="true"></i>Añadir a favoritos</a>
									</div>
									<div class="col-sm-4">
										<a class="a-share"><i class="fa fa-retweet" style="margin-right:7px;" aria-hidden="true"></i>Comparar</a>
									</div>
								</div>

								<p style="margin-top:5%;font-size:1.1em;"><?php echo $detProduc["descripcion_corta"] ?></p>

								<h1 style="color:black; margin-top: 25px;margin-bottom:25px;"><?php if ($detProduc["idsubgrupo"] != 1 && $detProduc["idsubgrupo"] != 2) {
																									echo "S/ {$detProduc["precio"]}";
																								} ?></h1>

								<div class="shop-counter">
									<div class="btn-group" role="group" aria-label="...">
										<input type="number" min="1" class="form-control input-number" style="font-size:15px;font-weight: 600;" placeholder="1" aria-describedby="basic-addon1">
									</div>
									<a class="btn btn-default shop-button input-number"><i class="fa fa-shopping-cart" style="font-size:1.3em;"></i>Agregar al Carrito</a>
								</div>


								<a class="" style="margin-top:10%" target="_blank" href="https://web.whatsapp.com/send?l=es&amp;phone=51987921285&amp;text=¡ Hola Quiero Hacer el Siguiente Pedido!
								 <?php echo $enlace_actual; ?>">
								
									<div class="whatsapp whatsapp_1 whatsapp-hookDisplayProductButtons bottom-left">
									
									<a class="btn btn-default wsp-button input-number">
											<i style="font-size: 2.5em;" class="fa fa-whatsapp"></i>
											 ¡Consulte Aquí Vía Whatsapp!
																								
									</a>																	
									</div>
								
								</a>
							
								<br>

							</div>
							<!--/product-information-->
						</div>
					</div>
					<!--/product-details-->

					<div class="container category-tab shop-details-tab anchura">
						<ul class="nav nav-pills" style="border-bottom: 1px solid #6C3C87;">
							<li class="active"><a style="font-size:18px" data-toggle="pill" href="#descripcion">Descripción</a></li>
							<li><a style="font-size:18px" data-toggle="pill" href="#reviews">Reviews</a></li>
							<li><a style="font-size:18px" data-toggle="pill" href="#informacion">Información del Vendedor</a></li>
							<li><a style="font-size:18px" data-toggle="pill" href="#masProductos">Más Productos</a></li>
						</ul>

						<div class="tab-content">
							<div id="descripcion" class="tab-pane fade in active">
								<div class="col-sm-12" style="font-size:1.2em;margin-top: 1%;">
									<h3>Caracteristicas Destacadas</h3> <br>
									<p><?php echo $detProduc["descr"]  ?> </p>
								</div>
							</div>
							<div id="reviews" class="tab-pane fade">
								<div class="col-sm-12" style="font-size:1.2em;">
								<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-4">
				<div class="rating-block">
					<h4>Valoración del usuario</h4>
					<h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
					<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
					  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					</button>
				</div>
			</div>
			<div class="col-sm-3">
				<h4>Calificación</h4>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">1</div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">1</div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">0</div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">0</div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
							<span class="sr-only">80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;">0</div>
				</div>
			</div>			
		</div>
								</div>
							</div>
							<div id="informacion" class="tab-pane fade">
								<div class="col-sm-12" style="font-size:1.2em;">
									<h3>Información del vendedor</h3><br>
									<p>Nombre de la Empresa: <span>SEI PERU</span></p>
									<p>Dirección: <span>Av. La Paz 811 – San Miguel</span></p>
									<p class="wr estrellas">
										<i class="fas fa-star" style="color:#E9F319"></i>
										<i class="fas fa-star" style="color:#E9F319"></i>
										<i class="fas fa-star" style="color:#E9F319"></i>
										<i class="fas fa-star" style="color:#E9F319"></i>
										<i class="fas fa-star" style="color:#E9F319"></i></p>
								</div>
							</div>
							<div id="masProductos" class="tab-pane fade">
								<div class="col-sm-12" style="font-size:1.2em;">

									<!-- Más prodcutos -->
									<?php for ($i = 1; $i <= 4; $i++) {
										$prod = $sub->fetch_assoc();
										switch ($prod["idsubgrupo"]) {
											case 1:
												$nomSubgrupo = 'Herramientas';
												break;
											case 2:
												$nomSubgrupo = 'Herramientas';
												break;
											case 3:
												$nomSubgrupo = 'Electrodomésticos y Gasodomésticos';
												break;
											case 4:
												$nomSubgrupo = 'Tecnología';
												break;
											case 5:
												$nomSubgrupo = 'Energía y Medio Ambiente';
												break;
											case 6:
												$nomSubgrupo = 'Equipos de Protección Personal ';
												break;
											case 7:
												$nomSubgrupo = 'Limpieza y Hogar';
												break;
										}
										$idpro = $prod["idPro"];
										$btnpro = $idpro
									?>
										<div class="col-sm-3" id="a">
											<div class="product-image-wrapper">
												<div class="single-products">
													<div class="productinfo text-center">

														<p class="subgrupo-masProductos"><?php echo "$nomSubgrupo"; ?></p>
														<p class="title-masProductos"><?php echo $prod["titulo"]; ?></p>
														<a href="detalle.php?id=<?php echo $idpro; ?>">
															<img class="img-masProductos" src="images/productos/<?php echo $prod["img1"]; ?>" alt="" />
															<!--<p class="descripcion-masProductos"><?php echo $prod["descripcion_corta"]; ?></p>-->
															<!--<div class="seiDiseño estrellas">
																<div class="estrellas"><i class="fas fa-star" style="color:#E9F319"></i><i class="fas fa-star" style="color:#E9F319"></i>
																	<i class="fas fa-star" style="color:#E9F319"></i>
																	<i class="fas fa-star" style="color:#E9F319"></i>
																	<i class="fas fa-star" style="color:#E9F319"></i>
																</div>
															</div>-->
															
															
															<div class="row">
																															
															<h2 class=" col-sm-offset-1 col-sm-3" style="font-size:20px;color:red"><?php echo "S/" . $prod["precio"]; ?></h2>
															<a href="detalle.php?id=<?php echo $btnpro; ?>" class="col-sm-offset-4 col-sm-3 shop-car"  style="margin-right:10px;"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
															</div>
														</a>
														<div class="row oculto" id="b">
															<hr style="border:1px solid gray; margin:0px 1.5em 0px 1.5em"><br>

															<div class="col-sm-12">
																<a class="a-heart"><i class="fa fa-heart-o" style="margin-right:7px;" aria-hidden="true"></i>Añadir a favoritos</a>
															</div>

															<div class="col-sm-12" style="margin-top:10px">
																<a class="a-share"><i class="fa fa-retweet" style="margin-right:7px;" aria-hidden="true"></i>Comparar</a>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
									<?php } ?>
									<!-- Más prodcutos -->
								</div>
							</div>
						</div>
					</div>

					<div class="recommended_items">
						<h2 class="title">Productos Relacionados</h2>

						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<!-- PRODUCTOS RELACIONADOS-->
								<div class="item active">
									<?php for ($i = 1; $i <= 4; $i++) {
										$rel = $relacionados->fetch_assoc();
										switch ($rel["idsubgrupo"]) {
											case 1:
												$nomSubgrupo = 'Herramientas';
												break;
											case 2:
												$nomSubgrupo = 'Herramientas';
												break;
											case 3:
												$nomSubgrupo = 'Electrodomésticos y Gasodomésticos';
												break;
											case 4:
												$nomSubgrupo = 'Tecnología';
												break;
											case 5:
												$nomSubgrupo = 'Energía y Medio Ambiente';
												break;
											case 6:
												$nomSubgrupo = 'Equipos de Protección Personal ';
												break;
											case 7:
												$nomSubgrupo = 'Limpieza y Hogar';
												break;
										}
										$idpro = $rel["idPro"];
										$btnpro = $idpro
									?>
										<div class="col-sm-3" id="a">
											<div class="product-image-wrapper">
												<div class="single-products">
													<div class="productinfo text-center ">

														<p class="subgrupo-masProductos"><?php echo "$nomSubgrupo"; ?></p>														
														<p class="title-masProductos"><?php echo $rel["titulo"]; ?></p>
														<a href="detalle.php?id=<?php echo $idpro; ?>">
															<img class="img-masProductos" src="images/productos/<?php echo $rel["img1"]; ?>" alt="" />
															<!--<p class="descripcion-masProductos"><?php echo $rel["descripcion_corta"]; ?></p>-->
															<!--<div class="seiDiseño estrellas">
																<div class="estrellas"><i class="fas fa-star" style="color:#E9F319"></i><i class="fas fa-star" style="color:#E9F319"></i>
																	<i class="fas fa-star" style="color:#E9F319"></i>
																	<i class="fas fa-star" style="color:#E9F319"></i>
																	<i class="fas fa-star" style="color:#E9F319"></i>
																</div>
															</div>-->													

															<div class="row">
																															
																<h2 class=" col-sm-offset-1 col-sm-3" style="font-size:20px;color:red"><?php echo "S/" . $rel["precio"]; ?></h2>
																<a href="detalle.php?id=<?php echo $btnpro; ?>" class="col-sm-offset-4 col-sm-3 shop-car"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
															</div>
														</a>
														<div class="row oculto" id="b">
															<hr class="linea-productos"><br>

															<div class="col-sm-12">
																<a class="a-heart"><i class="fa fa-heart-o" style="margin-right:7px;" aria-hidden="true"></i>Añadir a favoritos</a>
															</div>
															<div class="col-sm-12" style="margin-top:10px">
																<a class="a-share"><i class="fa fa-retweet" style="margin-right:7px;" aria-hidden="true"></i>Comparar</a>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
									<?php } ?>
								</div>
										
						</div>
					</div>
					
				</div> 

							
	

			</div>
			<div class="col-sm-3 col-sm-pull-9">
					<?php include 'Views/sidebar.php' ?>
				</div>
		</div>
		
	</section>

	<footer id="footer"><!--Footer-->
		
		
	 <?php include 'Views/footer.php'?>
		
	</footer><!--/Footer-->
	

	<?php include 'Views/libfooter.php'?>
 
</body>

</html>