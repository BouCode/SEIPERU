<?php

include_once ('config.php');
//include (MODEL_PATH."productos.php");
include ("Model/productos.php");

$pac = new Productos();

$niCo = $pac->contacto();
$detCo = $niCo->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="es">
<head>
    
	<?php include 'Views/head.php'?>
</head><!--/head-->

<body>

	<?php include 'Views/header.php'?>


	<section id="slider" ><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12" style="padding-left:0;padding-right:0;">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<img src="images/contact-us.jpg" class="img-carousel img-responsive" alt="" style="margin: 0; width:100%;"/>
							</div>
							<div class="item">
								<img src="images/contact-us-2.jpg" class="img-carousel img-responsive" alt="" style="margin: 0; width:100%;"/>
							</div>					
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
	</section><!--/slider-->

	<div id="contact-page" class="container" style="padding-bottom:2em; background: #FAF1FF;">
    	<div class="bg">
	    	  	
    		<div class="row">  	<br>
				<div class="col-sm-7">
	    			<div class="contact-info"><br><br>
	    				
							<div class="row" data-v-fc83bb56="" style="margin-bottom:1.5em;">
									<div class="col-sm-2" data-v-fc83bb56="">
										<img src="images/razon3.7c1e9d2.png" alt="" width="45px" data-v-fc83bb56="">
									</div>
									<div class="col-sm-8" data-v-fc83bb56="">
										<div class="razon" data-v-fc83bb56="">
												<h4 class="razon-title" style="color: black;font-size: 25px;">Calidad</h4>
												<p class="razon-p" data-v-fc83bb56="">
												<?php echo $detCo["texto1"]?></p>
										</div>
									</div>
							</div>	
							<div class="row" data-v-fc83bb56="" style="margin-bottom:1.5em;">
									<div class="col-sm-2" data-v-fc83bb56="">
										<img src="images/razon2.b51d2b2.png" alt="" width="45px" data-v-fc83bb56="">
									</div>
									<div class="col-sm-8" data-v-fc83bb56="">
										<div class="razon" data-v-fc83bb56="">
												<h4 class="razon-title" style="color: black;font-size: 25px;">Garantia</h4>
												<p class="razon-p" data-v-fc83bb56="">
												<?php echo $detCo["texto2"]?></p>
										</div>
									</div>
							</div>	
							<div class="row" data-v-fc83bb56="" style="margin-bottom:1.5em;">
									<div class="col-sm-2" data-v-fc83bb56="">
										<img src="images/razon4.0036e77.png" alt="" width="45px" data-v-fc83bb56="">
									</div>
									<div class="col-sm-8" data-v-fc83bb56="">
										<div class="razon" data-v-fc83bb56="">
												<h4 class="razon-title" style="color: black;font-size: 25px;">Distribución</h4>
												<p class="razon-p" data-v-fc83bb56="">
												<?php echo $detCo["texto3"]?> </p>
										</div>
									</div>
							</div>						
	    				
	    			</div>
    			</div>
	    		<div class="col-sm-5" style="box-shadow: 0 0 12.2px 3.8px rgba(0,0,0,.07);border-radius: 11px;"><br>
	    			<div class="contact-form"><br>
	    				<h2 class="title text-center" style="font-size: 29px;text-transform: none;">Deja tus datos para más información</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="enviar.php" style="background:#FAF1FF;">
				            <div class="form-group col-md-12">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Nombres y Apellidos">
				            </div>
				           
				            <div class="form-group col-md-12">
				                <input type="text" name="tele" class="form-control" required="required" placeholder="Telefono">
							</div>
							<div class="form-group col-md-12">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="2" placeholder="Escribe tu mensaje"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
								<input type="submit" name="submit" class="btn btn-primary pull-right" value="Enviar" 
								style="width: 100%;font-size: 19px;border-radius: 10px;">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		    			
			</div>  
			
    	</div>	
    </div>
	<footer id="footer"><!--Footer-->
		
		
	 <?php include 'Views/footer.php'?>
		
	</footer><!--/Footer-->
	

	<?php include 'Views/libfooter.php'?>
 
</body>
</html>