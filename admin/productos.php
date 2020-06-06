<?php 


error_reporting(0);
session_start();


if ($_SESSION['loggedin'] == false) {
  
  echo"<script type=\"text/javascript\">alert('Debes iniciar sesión para continuar.'); window.location='index.php';</script>";  
  exit;
} 

include_once ('Controlador/config.php');
// include (MODEL_PATH."funciones.php");
// include (MODEL_PATH."global.php");
include ('Modelo/funciones.php');
include ('Modelo/global.php');
include ("Controlador/conexion.php"); 

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
        <div class="right_col" role="main">
      
                  <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2 style="text-transform: uppercase;">Lista de productos <small></small></h2>
                                <a style="float: right;" href="editProducto.php" class="btn btn-primary">Nuevo producto</a>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content">
                            
                             
                                        <div class="alert alert-success alert-dismissible fade in hidden" role="alert" id="alerify">
                                              <button type="button" class="close" ><span aria-hidden="true" id="closealert">×</span>
                                              </button>
                                              <strong id="pacte"></strong>
                                          </div>
                                            <div class="dataTables_wrapper form-inline dt-bootstrap no-footer" id="dataproductos"> 
                                              
                                            
                                            </div><br><br>
                              </div>
                            </div>
                         </div>
                  
                  </div>
        </div>

    
 <!-- FIN MODAL -->
                <div class="modal fade bs-example-modal-smupload" tabindex="-1" id="myModal" role="dialog" aria-hidden="true" >
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <div class="modal-header" style="background:#2a3f54;color: white;text-transform: uppercase;text-align: center;">
                                    <button type="button" class="close" data-dismiss="modal" style="color: white;opacity: 1;">&times;</button>
                                    <h4 class="modal-title" id="pacient">ACTUALIZAR IMAGEN DE PORTADA</h4>
                                </div>
                            <div class="modal-body">
                            <link href="./js/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
                            <script src="./js/dropzone/dist/dropzone.js"></script>
                                  <form action="upload.php?function=upload" class="dropzone" method="POST" id="formupload">
                                    <input type="hidden" name="iduserupload"  id="iduserupload">
                                    <input type="hidden" name="iddpac" id="iddpac">
                                    <input type="hidden" name="etapa" id="etapa" value="pre">
                                  </form>
                                 
                                   
                                    <br />
                                    <br />
                                    <br />
                                    <br />
                            </div>                 
                             
                         
                    </div>
                  </div>
                <!-- FIN MODAL -->


        <!-- footer content -->
       <?php include 'Vistas/footer.php';  ?>
   