<?php


include_once('config.php');
//include (MODEL_PATH."productos.php");
//include (MODEL_PATH."global.php");
include("Model/productos.php");

function debugToConsole($msg)
{
	echo "<script>console.log(" . json_encode($msg) . ")</script>";
}

$pac = new Productos();


$id = "1"; //$_GET["id"];
$id2 = "2";
$iterator = 4;

$nis = $pac->sliders();
$ProductosDestacados = $pac->consultaXProdDestacado();

$m1 = $pac->consultaMarcas("1");
$proddest = $m1->fetch_assoc();
$r1 = $proddest["image"];
$m2 = $pac->consultaMarcas("2");
$proddest = $m2->fetch_assoc();
$r2 = $proddest["image"];
$m3 = $pac->consultaMarcas("3");
$proddest = $m3->fetch_assoc();
$r3 =  $proddest["image"];
$m4 = $pac->consultaMarcas("4");
$proddest = $m4->fetch_assoc();
$r4 = $proddest["image"];
$m5 = $pac->consultaMarcas("5");
$proddest = $m5->fetch_assoc();
$r5 = $proddest["image"];
$m6 = $pac->consultaMarcas("6");
$proddest = $m6->fetch_assoc();
$r6 = $proddest["image"];
$m7 = $pac->consultaMarcas("7");
$proddest = $m7->fetch_assoc();
$r7 = $proddest["image"];
$m8 = $pac->consultaMarcas("8");
$proddest = $m8->fetch_assoc();
$r8 = $proddest["image"];
$m9 = $pac->consultaMarcas("9");
$proddest = $m9->fetch_assoc();
$r9 = $proddest["image"];
$m10 = $pac->consultaMarcas("10");
$proddest = $m10->fetch_assoc();
$r10 = $proddest["image"];

$Electricas = $pac->HerramientasElectricas();
$Me = $pac->ObtenerMejoresHerramientas();
$HerramientasCarruselSei = $pac->ObtenerMejoresElectrometicos();
$TecnologiasCarruselSei = $pac->ObtenerMejoresTecnologias();
$ofertas = $pac->consultaXoferta();
$num_ofertas = mysqli_num_rows($ofertas);



if ($num_ofertas % 4 == 0) {
	$num_carousel = intdiv($num_ofertas, 4);
} else {
	$num_carousel = intdiv($num_ofertas, 4) + 1;
}

function isMobileDevice()
{
	return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}



?>


<!DOCTYPE html>
<html lang="es">

<head>

	<?php include 'Views/head.php' ?>
</head>
<!--/head-->

<body>

	<?php include 'Views/header.php' ?>

	<section id="slider">
		<!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12" style="padding-left:0;padding-right:0;">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
							<li data-target="#slider-carousel" data-slide-to="3"></li>
							<li data-target="#slider-carousel" data-slide-to="4"></li>
						</ol>

						<div class="carousel-inner">

							<?php while ($mues = $nis->fetch_assoc()) { ?>
								<div class="item <?php echo $mues["est"]; ?>">
									<img src="images/<?php echo $mues["image"]; ?>" class="img-carousel img-responsive" alt="" style="margin: 0; width:100%;" />
									<div class="carousel-caption">
										<h1 class="title-h1"><?php echo $mues["title"]; ?></h1>
										<p class="title-p"><?php echo $mues["subtitle"]; ?></p>
									</div>

									<div class="carousel-caption">

									</div>
								</div>

							<?php } ?>

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev" style="margin-left:0.3em;">
							<i class="fa fa-angle-left" style="color: white;"></i>

						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next" style="margin-right:0.3em;">
							<i class="fa fa-angle-right" style="color: white;"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--/slider-->

	<section class="section-home">
		<div class="container-fluid">
			<div class="row">


				<div class="col-sm-12 padding-right">

					<div class="category-tab">
						<div class="col-sm-12"><br>
							<h3 style="font-weight: 900;font-size: 30px;color: #6C3C87;" class="title text-center">CATEGORÍAS MAS BUSCADAS</h3><br>
						</div>
						<div class="tab-content">

							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<a href="categoria.php?id=1"><img class="img-categorias" src="images/HERRAMIENTAS_ELECTRICAS.png" alt=""></a>
											<a href="categoria.php?id=1" class="btn btn-default add-to-cart">
												HERRAMIENTAS > </a>
										</div>

									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<a href="categoria.php?id=4"><img class="img-categorias" src="images/Herramientas_Manuales.png" alt=""></a>
											<a href="categoria.php?id=4" class="btn btn-default add-to-cart">
												TECNOLOGÍA > </a>
										</div>

									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<a href="categoria.php?id=3"><img class="img-categorias" src="images/gasnat.jpg" alt=""></a>
											<a href="categoria.php?id=3" class="btn btn-default add-to-cart">
												ELECTRODOMÉSTICOS Y GASODOMESTICOS > </a>
										</div>

									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<a href="categoria.php?id=7"><img class="img-categorias" src="images/ener.jpg" alt=""></a>
											<a href="categoria.php?id=7" class="btn btn-default add-to-cart">
												LIMPIEZA Y HOGAR > </a>
										</div>

									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<a href="categoria.php?id=6"><img class="img-categorias" src="images/medioa.png" alt=""></a>
											<a href="categoria.php?id=6" class="btn btn-default add-to-cart">
												EQUIPOS DE PROTECCION PERSONAL > </a>
										</div>

									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<a href="limpieza.php"><img class="img-categorias" src="images/seguridad.jpg" alt=""></a>
											<a href="limpieza.php" class="btn btn-default add-to-cart">
												LIMPIEZA Y DESINFECCION > </a>
										</div>

									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<a href="categoria.php?id=6"><img class="img-categorias" src="images/definir2.jpg" alt=""></a>
											<a href="categoria.php?id=6" class="btn btn-default add-to-cart">
												POR DEFINIR > </a>
										</div>

									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<a href="categoria.php?id=7"><img class="img-categorias" src="images/definir1.png" alt=""></a>
											<a href="categoria.php?id=7" class="btn btn-default add-to-cart">
												POR DEFINIR > </a>
										</div>

									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<a href="categoria.php?id=5"><img class="img-categorias" src="images/medio_ambiente.jpg" alt=""></a>
											<a href="categoria.php?id=5" class="btn btn-default add-to-cart">
												ENERGÍA Y MEDIO AMBIENTE > </a>
										</div>

									</div>
								</div>
							</div>


						</div>
					</div>
					</section>
					<section>
						<div class="container-fluid" style="margin:auto 1em;">


							<div class="row venta-wrapper">

								<div class="col-sm-6 col-md-2 ventaicon">
									<div>
										<img src="images/telefono.png" alt="" width="60px" height="60px">
									</div>
									<div class=" versu">
										<a href="ventas.php?id=1" class="razon-p"><span>Venta telefónica</span><br>
											<span style="font-weight: 900;">(01) 652-2471</span>
										</a>
									</div>
								</div>
								<div class="col-sm-6 col-md-2 ventaicon">
									<div>
										<img src="images/escudo.png" alt="" width="60px" height="60px">
									</div>
									<div class=" versu">
										<a href="ventas.php?id=2" class="razon-p"><span>Compra con</span><br>
											<span style="font-weight: 900;">Total tranquilidad</span>
										</a>
									</div>
								</div>

								<div class="col-sm-6 col-md-2 ventaicon ">
									<div>
										<img src="images/tarjeta.png" alt="" width="60px" height="60px">
									</div>
									<div class="versu">
										<a href="ventas.php?id=3" class="razon-p"><span>Múltiples</span><br>
											<span style="font-weight: 900;">Medios de pago</span>
										</a>
									</div>
								</div>

								<div class="col-sm-6 col-md-2 ventaicon">
									<div>
										<img src="images/compra-online-icono.png" alt="" width="60px" height="40px">
									</div>
									<div class="versu">
										<a href="ventas.php?id=4" class="razon-p"><span>Compra online</span><br>
											<span style="font-weight: 900;">Delivery</span>
										</a>
									</div>
								</div>
								<div class="col-sm-6 col-md-2 ventaicon">
									<div>
										<i class="EstiloImagenes fa fa-university fa-3x" style="color:#9b439b;" aria-hidden="true"></i>
									</div>
									<div class="versu">
										<a href="ventas.php?id=17" class="razon-p"><span>Financia</span><br>
											<span style="font-weight: 900;">Tus pedidos</span>
										</a>
									</div>
								</div>
								<div class="col-sm-6 col-md-2 ventaicon">
									<div>
										<i class="EstiloImagenes fa fa-money fa-3x" style="color:#9b439b;" aria-hidden="true"></i>
									</div>
									<div class="versu">
										<a href="ventas.php?id=18" class="razon-p"><span>Ahorro</span><br>
											<span style="font-weight: 900;">Asegurado</span>
										</a>
									</div>
								</div>

							</div>


						</div>

					</section>

					<br><br>
					<div class="recommended_items" style="background:#6C3C87;"><!--recommended_items-->
						
						<br>
						<h2 class="title text-center" style="color: white;text-transform: uppercase;">Productos Destacados</h2>

						<div id="destacado" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner" style="padding-bottom:1.5em;">

								<?php


								if (isMobileDevice()) {

									for ($i = 1; $i <= 10; $i++) { ?>
										<div class="item <?php if ($i == 1) {
																echo "active";
															} ?>">
											<?php for ($j = 1; $j <= 1; $j++) {
												$proddest = $ProductosDestacados->fetch_assoc();
											?>
												<div class="col-lg-6 col-md-6 col-sm-3 <?php if ($proddest["idPro"] == null) {
																			echo "hidden";
																		} ?>">
													<div class="">
														<div class="single-products borderproduc sombra">
															<div class="productinfo  text-center" style="background: white;padding-bottom:1em;">
																<a href="detalle.php?id=<?php echo $proddest["idPro"]; ?>"><img class="imgprod" src="images/productos/<?php echo $proddest["img1"]; ?>" alt="" /></a>


																<div style="text-align:start;margin-left:10px">
																	<h2 class="seiTitle"><b><?php echo $proddest["titulo"]; ?></b></h2>
																</div>
																<div class="seiDiseño descripcionSei-pro">
																	<p><?php echo $proddest["descripcion_corta"]; ?>
																</div>
																<div class="seiDiseño">
																	<div class="precioEstilo precioEstilo-pro">S/. <?php echo $proddest["precio"]; ?></div>
																</div>
																<div class="seiDiseño estrellas">
																	<p class="wr-pro estrellas">
																		<i class="fas fa-star" style="color:#E9F319"></i>
																		<i class="fas fa-star" style="color:#E9F319"></i>
																		<i class="fas fa-star" style="color:#E9F319"></i>
																		<i class="fas fa-star" style="color:#E9F319"></i>
																		<i class="fas fa-star" style="color:#E9F319"></i></p>
																</div>
																<a style="background: #6C3C87;color: white;width: 80%;" href="detalle.php?id=<?php echo $proddest["idPro"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Detalle</a>
															</div>

														</div>
													</div>
												</div>
											<?php  } ?>
										</div>
									<?php }
								} else {

									for ($i = 1; $i <= 2; $i++) { ?>
										<div class="item <?php if ($i == 1) {
																echo "active";
															} ?>">
											<?php for ($j = 1; $j <= 4; $j++) {
												$proddest = $ProductosDestacados->fetch_assoc();
											?>
												<div class="col-sm-3 <?php if ($proddest["idPro"] == null) {
																			echo "hidden";
																		} ?>">
													<div class="">
														<div class="single-products borderproduc ">
															<div class="productinfo  text-center " style="background: white;padding-bottom:1em;">
																<a href="detalle.php?id=<?php echo $proddest["idPro"]; ?>"><img class="imgprod" src="images/productos/<?php echo $proddest["img1"]; ?>" alt="" /></a>


																<div style="text-align:start;margin-left:10px">
																	<h2 class="seiTitle"><b><?php echo $proddest["titulo"]; ?></b></h2>
																</div>
																<div class="seiDiseño descripcionSei-pro">
																	<p><?php echo $proddest["descripcion_corta"]; ?>
																</div>

																<div class="seiDiseño">
																	<div class="precioEstilo precioEstilo-pro">S/. <?php echo $proddest["precio"]; ?></div>
																</div>
																<div class="seiDiseño estrellas">
																	<p class="wr-pro estrellas">
																		<i class="fas fa-star" style="color:#E9F319"></i>
																		<i class="fas fa-star" style="color:#E9F319"></i>
																		<i class="fas fa-star" style="color:#E9F319"></i>
																		<i class="fas fa-star" style="color:#E9F319"></i>
																		<i class="fas fa-star" style="color:#E9F319"></i></p>
																</div>
																<a style="background: #6C3C87;color: white;width: 80%;" href="detalle.php?id=<?php echo $proddest["idPro"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Detalle</a>
															</div>

														</div>
													</div>
												</div>
											<?php  } ?>
										</div>

								<?php  }
								} ?>


							</div>
							<a class="left recommended-item-control" href="#destacado" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							</a>
							<a class="right recommended-item-control" href="#destacado" data-slide="next">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
					<!--/recommended_items-->



					<br><br>

					<div class="recommended_items" style="background:#6C3C87; margin-bottom:1.5em;">
						<!--recommended_items-->
						<br>
						<h2 class="title text-center" style="color: white;text-transform: uppercase;">Ofertas</h2>

						<div id="sales" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner" style="padding-bottom:1.5em;">

								<?php


								if (isMobileDevice()) {

									for ($i = 1; $i <= $num_ofertas; $i++) { ?>
										<div class="item <?php if ($i == 1) {
																echo "active";
															} ?>">
											<?php for ($j = 1; $j <= 1; $j++) {
												$oferta = $ofertas->fetch_assoc();
											?>
												<div class="col-sm-3 <?php if ($oferta["idPro"] == null) {
																			echo "hidden";
																		} ?>">
													<div class="sombra">
														<div class="single-products borderproduc">
															<div class="productinfo text-center" style="background: white;padding-bottom:1em;">
																<a href="detalle.php?id=<?php echo $oferta["idPro"]; ?>"><img class="imgprod " src="images/productos/<?php echo $oferta["img1"]; ?>" alt="" /></a>


																<div style="text-align:start">
																	<h2 class="seiTitle"><b><?php echo $oferta["titulo"]; ?></b></h2>
																</div>
																<div class="seiDiseño descripcionSei-pro">
																	<p><?php echo $oferta["descripcion_corta"]; ?>
																</div>
																<p class="ofe-pro" style="color:red">Oferta</p>
																<div class="seiDiseño">
																	<div class="precioEstilo precioEstilo-pro">S/. <?php echo $oferta["precio"]; ?></div>
																</div>
																<div class="seiDiseño estrellas">
																	<p class="wr-pro estrellas">
																		<i class="fas fa-star" style="color:#E9F319"></i>
																		<i class="fas fa-star" style="color:#E9F319"></i>
																		<i class="fas fa-star" style="color:#E9F319"></i>
																		<i class="fas fa-star" style="color:#E9F319"></i>
																		<i class="fas fa-star" style="color:#E9F319"></i></p>
																</div>
																<a style="background: #6C3C87;color: white;width: 80%;" href="detalle.php?id=<?php echo $oferta["idPro"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Detalle</a>
															</div>

														</div>
													</div>
												</div>
											<?php  } ?>
										</div>
									<?php }
								} else {

									for ($i = 1; $i <= $num_carousel; $i++) { ?>
										<div class="item <?php if ($i == 1) {
																echo "active";
															} ?>">
											<?php for ($j = 1; $j <= 4; $j++) {
												$oferta = $ofertas->fetch_assoc();
											?>
												<div class="col-sm-3 <?php if ($oferta["idPro"] == null) {
																			echo "hidden";
																		} ?>">
													<div class="sombra">
														<div class="single-products borderproduc">
															<div class="productinfo text-center" style="background: white;padding-bottom:1em;">
																<a href="detalle.php?id=<?php echo $oferta["idPro"]; ?>"><img class="imgprod" src="images/productos/<?php echo $oferta["img1"]; ?>" alt="" /></a>


																<div style="text-align:start;margin-left:10px">
																	<h2 class="seiTitle"><b><?php echo $oferta["titulo"]; ?></b></h2>
																</div>
																<div class="seiDiseño descripcionSei-pro">
																	<p><?php echo $oferta["descripcion_corta"]; ?>
																</div>
																<p class="ofe-pro" style="color:red">Oferta</p>
																<div class="seiDiseño">
																	<div class="precioEstilo precioEstilo-pro">S/. <?php echo $oferta["precio"]; ?></div>
																</div>
																<div class="seiDiseño estrellas">
																	<p class="wr-pro estrellas">
																		<i class="fas fa-star" style="color:#E9F319"></i>
																		<i class="fas fa-star" style="color:#E9F319"></i>
																		<i class="fas fa-star" style="color:#E9F319"></i>
																		<i class="fas fa-star" style="color:#E9F319"></i>
																		<i class="fas fa-star" style="color:#E9F319"></i></p>
																</div>
																<a style="background: #6C3C87;color: white;width: 80%;" href="detalle.php?id=<?php echo $oferta["idPro"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Detalle</a>
															</div>

														</div>
													</div>
												</div>
											<?php  } ?>
										</div>

								<?php  }
								} ?>
							</div>
							<a class="left recommended-item-control" href="#sales" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							</a>
							<a class="right recommended-item-control" href="#sales" data-slide="next">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
					<!--/recommended_items-->

	
	<br>


	<section class="container-fluid">
		<div class="row text-center">
			<h2 class="title text-center" style="color: #6C3C87;text-transform: uppercase;">LOS MEJORES ELECTRODOMÉSTICOS </h2>

			<div class="col-md-10 estilo">
				<div class="owl-carousel owl-theme">

					<?php while ($fila = $Me->fetch_assoc()) { ?>
						<div class="productinfo text-center borderbest" style="background: white;padding-bottom:1em;">
							<a href="detalle.php?id=<?php echo $fila["idPro"] ?>"><img class="estilo4 imgsec" src="images/productos/<?php echo $fila["img1"]; ?>" /></a>
							<div class="seiDiseño seiTitle">
								<h2><b><?php echo $fila["titulo"]; ?></b></h2>
							</div>
							<div class="seiDiseño descripcionSei">
								<p><?php echo $fila["descripcion_corta"] ?></p>
							</div>
							<p class="Ofe" style="color:red">Oferta</p>
							<div class="seiDiseño">
								<div class="precioEstilo">S/. <?php echo $fila["precio"]; ?></div>
							</div>
							<div class="seiDiseño estrellas">
								<p class="wr estrellas">
									<i class="fas fa-star" style="color:#E9F319"></i>
									<i class="fas fa-star" style="color:#E9F319"></i>
									<i class="fas fa-star" style="color:#E9F319"></i>
									<i class="fas fa-star" style="color:#E9F319"></i>
									<i class="fas fa-star" style="color:#E9F319"></i></p>
							</div>
							<a href="detalle.php?id=<?php echo $fila["idPro"] ?>" class=" btn btn-default add-to-cart carrito">Ver más <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
						</div>
					<?php } ?>

				</div>
			</div>
		</div>
	</section>
	<br>

	<section class="container-fluid">
		<div class="row text-center">
			<h2 class="title text-center" style="color: #6C3C87;text-transform: uppercase;">LAS MEJORES HERRAMIENTAS </h2>

			<div class="col-md-10 estilo">
				<div class="owl-carousel owl-theme">

					<?php while ($fila = $HerramientasCarruselSei->fetch_assoc()) { ?>
						<div class="productinfo text-center borderbest" style="background: white;padding-bottom:1em;">
							<a href="detalle.php?id=<?php echo $fila["idPro"] ?>"><img class="estilo4 imgsec" src="images/productos/<?php echo $fila["img1"]; ?>" /></a>
							<div class="seiDiseño seiTitle">
								<h2><b><?php echo $fila["titulo"]; ?></b></h2>
							</div>
							<div class="seiDiseño descripcionSei">
								<p><?php echo $fila["descripcion_corta"] ?></p>
							</div>
							<p class="Ofe" style="color:red">Oferta</p>
							<div class="seiDiseño">
								<div class="precioEstilo">S/. <?php echo $fila["precio"]; ?></div>
							</div>
							<div class="seiDiseño estrellas">
								<p class="wr estrellas">
									<i class="fas fa-star" style="color:#E9F319"></i>
									<i class="fas fa-star" style="color:#E9F319"></i>
									<i class="fas fa-star" style="color:#E9F319"></i>
									<i class="fas fa-star" style="color:#E9F319"></i>
									<i class="fas fa-star" style="color:#E9F319"></i></p>
							</div>
							<a href="detalle.php?id=<?php echo $fila["idPro"] ?>" class="btn btn-default add-to-cart carrito">Ver más <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
						</div>
					<?php } ?>

				</div>
			</div>
		</div>
	</section>
	<br>

	<section class="container-fluid">
		<div class="row text-center">
			<h2 class="title text-center" style="color: #6C3C87;text-transform: uppercase;">LO MEJOR EN TECNOLOGÍA </h2>

			<div class="col-md-10 estilo">
				<div class="owl-carousel owl-theme">

					<?php while ($fila = $TecnologiasCarruselSei->fetch_assoc()) { ?>
						<div class="productinfo text-center borderbest" style="background: white;padding-bottom:1em;">
							<a href="detalle.php?id=<?php echo $fila["idPro"] ?>"><img class="estilo4 imgsec" src="images/productos/<?php echo $fila["img1"]; ?>" /></a>
							<div class="seiDiseño seiTitle">
								<h2><b><?php echo $fila["titulo"]; ?></b></h2>
							</div>
							<div class="seiDiseño descripcionSei">
								<p><?php echo $fila["descripcion_corta"] ?></p>
							</div>
							<p class="Ofe" style="color:red">Oferta</p>
							<div class="seiDiseño">
								<div class="precioEstilo">S/. <?php echo $fila["precio"]; ?></div>
							</div>
							<div class="seiDiseño estrellas">
								<p class="wr estrellas">
									<i class="fas fa-star" style="color:#E9F319"></i>
									<i class="fas fa-star" style="color:#E9F319"></i>
									<i class="fas fa-star" style="color:#E9F319"></i>
									<i class="fas fa-star" style="color:#E9F319"></i>
									<i class="fas fa-star" style="color:#E9F319"></i></p>
							</div>
							<a href="detalle.php?id=<?php echo $fila["idPro"] ?>" class="btn btn-default add-to-cart carrito">Ver más <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
						</div>
					<?php } ?>

				</div>
			</div>
		</div>
	</section>


	<br>

	<section class="container-fluid" style="background:#6C3C87;">
		<div class="AreaElegirnos row text-center">
			<h2 class="title text-center" style="color: white;text-transform: uppercase;
		margin-top:20px">PORQUE COMPRAR EN SEI PERU</h2>
			<div class="col-md-2"></div>
			<div class="SeiElegirnos col-lg-2 col-md-6 col-sm-12">
				<a href="#">
					<h1><i class="nosotros fa fa-shopping-cart" aria-hidden="true"></i></h1>
				</a>
				<p> Productos para una vida sana y sostenible</p>
			</div>

			<div class="SeiElegirnos col-lg-2 col-md-6 col-sm-12">
				<a href="#">
					<h1><i class="nosotros fa fa-star" aria-hidden="true"></i></h1>
				</a>
				<p> Muchos clientes y varias recomendaciones</p>
			</div>

			<div class="SeiElegirnos col-lg-2 col-md-6 col-sm-12">
				<a href="#">
					<h1><i class="nosotros fa fa-users" aria-hidden="true"></i></h1>
				</a>
				<p> Estamos para ayudarte y ofrecerte el mejor servicio</p>
			</div>

			<div class="SeiElegirnos col-lg-2 col-md-6 col-sm-12">
				<a href="#">
					<h1><i class="nosotros fa fa-shopping-basket" aria-hidden="true"></i></h1>
				</a>
				<p> Expertos en diferentes articulos para tu hogar</p>
				<div class="col-md-2"></div>
			</div>
	</section>

	<section class="marcas">
		<h3 class="marcas-title">
			<span class="text-marcas-title">Marcas más buscadas</span>
		</h3>

		<ul id="marcas">
			<li><img class="img-marcas" src="images/marcas/<?php echo $r1 ?>" /></li>
			<li><img class="img-marcas" src="images/marcas/<?php echo $r2 ?>" /></li>
			<li><img class="img-marcas" src="images/marcas/<?php echo $r3 ?>" /></li>
			<li><img class="img-marcas" src="images/marcas/<?php echo $r4 ?>" /></li>
			<li><img class="img-marcas" src="images/marcas/<?php echo $r5 ?>" /></li>
			<li><img class="img-marcas" src="images/marcas/<?php echo $r6 ?>" /></li>
			<li><img class="img-marcas" src="images/marcas/<?php echo $r7 ?>" /></li>
			<li><img class="img-marcas" src="images/marcas/<?php echo $r8 ?>" /></li>
			<li><img class="img-marcas" src="images/marcas/<?php echo $r9 ?>" /></li>
			<li><img class="img-marcas" src="images/marcas/<?php echo $r10 ?>" /></li>
		</ul>

	</section><br><br><br><br><br><br><br>

	<footer id="footer">
		<!--Footer-->


		<?php include 'Views/footer.php' ?>

	</footer>

	<script>
		//Jquery auto height


		$(document).ready(function() {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 50,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 3,
						nav: false
					},
					1200: {
						items: 4,
						nav: true,
						loop: false,
						margin: 20
					},
					1500: {
						items: 5,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>

	<script type="text/javascript">
		$(window).load(function() {


			$("#marcas").flexisel({
				visibleItems: 5,
				itemsToScroll: 1,
				autoPlay: {
					enable: true,
					interval: 5000,
					pauseOnHover: true
				}
			});


		});
	</script>


	<!--/Footer-->


	<?php include 'Views/libfooter.php'; ?>

</body>

</html>