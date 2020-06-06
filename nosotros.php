<?php

include_once ('config.php');
//include (MODEL_PATH."productos.php");
include ("Model/productos.php");

$pac = new Productos();
$nis = $pac->nosotros();

$mueNo = $nis->fetch_assoc();
function debugToConsole($msg) { 
  echo "<script>console.log(".json_encode($msg).")</script>";
}

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
								<img src="images/us_2.jpg" class="img-carousel img-responsive" alt="" style="margin: 0; width:100%;"/>
							</div>
							<div class="item">
								<img src="images/us_1.png" class="img-carousel img-responsive" alt="" style="margin: 0; width:100%;"/>
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

	<div id="contact-page" class="container">
    	<div class="bg">

				<div class="row" style="margin: 1.5em 0 1.5em 0; min-height: auto;">  	
						
						<div class="col-xs-12 col-sm-6" style="min-height:25em; padding-bottom:15px; padding-top:15px; display:block; align-items:center; margin-bottom:1em; ">
							<div class=" panel-default" style="min-height:80%; display: flex; align-items: center; margin:0; background: #FAF1FF; border:none; shadow:none;">
								<div class="panel-body-us">
									<p style="margin-bottom: 0; color: #696763; font-size: 1.2em; line-height: 25px; text-align: justify;">
									<?php 
									echo $mueNo['descripcion'];
									?>
									</p>
								</div>
							</div>
						</div>

						<?php 
								$new_url = str_replace("https://www.youtube.com/watch?v=","https://www.youtube.com/embed/",$mueNo['url']);
								
								?>
						
						<div class="col-xs-12 col-sm-6" style="height:25em; padding-bottom:15px; padding-top:15px;margin-bottom:1em">        
                <iframe height="100%" width="100%" src="<?php echo $new_url; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	
						</div>

				</div> 
	    	  	
    		<div class="row">  	
	    		
	    		<div class="col-sm-12">
						<div class="contact-info">
							<div class="panel-group" id="accordion">
								

									<div class="panel panel-default shadow-2">
										<a href="#collapse2" data-toggle="collapse" data-parent="#accordion">
										<div class="panel-heading">
											<span class="caret" style="margin-right:1em;"></span><h2>Misión</h2>
										</div>
										</a>
										<div class="collapse panel-collapse" id="collapse2">
											<div class="panel-body" >
											<p>

											<?php 
											echo $mueNo['mision'];
											?>

											</p>
											</div>
										</div>
									</div>

									<div class="panel panel-default shadow-2">
									<a href="#collapse3" data-toggle="collapse" data-parent="#accordion">
									<div class="panel-heading">
									<span class="caret" style="margin-right:1em;"></span><h2>Visión</h2>
									</div>
									</a>

									<div class="collapse panel-collapse" id="collapse3">
									<div class="panel-body" >
									<p>
											<?php 
											echo $mueNo['vision'];
											?>
									</p>
									</div>
									</div>
									</div>

									<div class="panel panel-default shadow-2">
									<a href="#collapse4" data-toggle="collapse" data-parent="#accordion">
									<div class="panel-heading">
									<span class="caret" style="margin-right:1em;"></span><h2>Valores</h2>
									</div>
									</a>

									<div class="collapse panel-collapse" id="collapse4">
									<div class="panel-body">
									<p>

									<?php 
											echo $mueNo['valores'];
											?>

									</p>
									</div>
									</div>
									</div>
								</div>

						
	    			</div>
    			</div>    			
			</div>  
			
    	</div>	
    </div>
	<br><br> 
	

	
	<footer id="footer"><!--Footer-->
		
		
	 <?php include 'Views/footer.php'?>
		
	</footer><!--/Footer-->
	

	<?php include 'Views/libfooter.php'?>
 
</body>
</html>