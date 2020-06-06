<?php


include_once ('config.php');
//include (MODEL_PATH."productos.php");//
//include (MODEL_PATH."global.php");
include ("Model/productos.php");


$pac = new Productos();


$id = $_GET["id"];
$ni = $pac->ventas($id);
$detSub = $ni->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="es">
<head>
    
	<?php include 'Views/head.php'?>
</head><!--/head-->

<body>

	<?php include 'Views/header.php'?>


	<section id="slider"><!--slider-->
		<div class="header_top" style="background: black;">
			
				<img src="images/<?php echo $detSub["img"]?>" style="width: 100%;">
			
		</div>
	</section><!--/slider--><br><br>

	<div id="contact-page" class="container" style="background: #FAF1FF;">
    	<div class="bg">
	    	  	
    		<div class="row">  	
	    		
	    		<div class="col-sm-12">
	    			<div class="contact-info"><br>
	    				<h2 class="title"><?php echo $detSub["titulo"]?></h2>
	    				<address>
	    					<p> <?php echo $detSub["texto"]?></p>
						
	    				</address>
						<br><br><br>
	    				</address>
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