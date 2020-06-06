<?php 


error_reporting(0);
session_start();


if ($_SESSION['loggedin'] == false) {
  
  echo"<script type=\"text/javascript\">alert('Esta pagina es solo para usuarios registrados'); window.location='index.php';</script>";  
  exit;
} 

include_once ('Controlador/config.php');
// include (MODEL_PATH."funciones.php");
// include (MODEL_PATH."global.php");
include ('Modelo/funciones.php');
include ('Modelo/global.php');
include("Controlador/conexion.php");

$pac =new Model();
 $ni = $pac->contacto();
 $detCo= $ni->fetch_assoc();



include 'Vistas/librerias.php';  

?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      
        <?php include 'Vistas/menu.php';  ?>
        <!-- top navigation -->
        <div class="top_nav">
            <?php include 'Vistas/usuario.php';  ?>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="background: #e8e8e8;">
      
                  <div class="row">
                              <div class="col-md-offset-1 col-md-9 col-sm-12 col-xs-12 ">

                                    <div class="x_panel">
                                          <div class="x_title">
                                            <h2 style="text-align: center;float: none;text-transform: uppercase;font-weight: bolder;">CONTACTENOS</h2>
                                            
                                            <div class="clearfix"></div>
                                          </div>
                                          <div class="x_content">
                                            <br />                                                
                                          <form class="form-horizontal form-label-left" action="Controlador/registro.php?function=contacto" id="frmDatosPacientes" enctype="multipart/form-data" method="POST">
                                                  
                                                  <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-12">Calidad</label>
                                                        <div class="col-md-9 col-sm-12 col-xs-12">
                                                           <textarea class="form-control" name="texto1" id="texto1" rows="4"><?php echo $detCo["texto1"]?></textarea>
                                                        </div>
                                                        
                                                      </div>
                                                   
                                                      <div class="form-group">
                                                          <label class="control-label col-md-2 col-sm-3 col-xs-12">Garantia</label>
                                                            <div class="col-md-9 col-sm-12 col-xs-12">
                                                                  <textarea class="form-control" name="texto2" id="texto2" rows="4"><?php echo $detCo["texto2"]?></textarea>
                                                                 
                                                          </div>
                                                          
                                                      </div>
                                                     
                                                      <div class="form-group">
                                                          <label class="control-label col-md-2 col-sm-3 col-xs-12">Distribución</label>
                                                            <div class="col-md-9 col-sm-12 col-xs-12">
                                                                  <textarea class="form-control" name="texto3" id="texto3" rows="4"><?php echo $detCo["texto3"]?></textarea>
                                                                 
                                                          </div>
                                                          
                                                      </div>
                                                                                          
                                             
                                        <div class="ln_solid"></div>

                                        <div class="form-group">
                                          <div class="col-md-9 col-md-offset-2">
                                            
                                            <input type="submit" value="Guardar" name="enviar"  class="btEdit btn btn-danger" style="cursor: pointer">
                                           
                                          </div>
                                        </div>

                                      </form>
                                    </div>
                              </div>


                        </div>



                    <!-- FIN -->





                  </div>
                  
                 
        </div>

        <!-- footer content -->
       <?php include 'Vistas/footer.php';  ?>
   <style>

#hiddenMap {
width:320px;
margin: 0 0 30px 0;
position:relative;
}
.toolbar {
position: fixed;
z-index: 100;
margin-left:2px;
bottom: 20%;
}

   </style>