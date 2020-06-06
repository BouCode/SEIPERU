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

include "Modelo/funciones.php";
include "Modelo/global.php";
include 'Vistas/librerias.php'; 
include ("Controlador/conexion.php"); 



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
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2 style="text-transform: uppercase;">Lista de Slider <small></small></h2>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content">
                            
                             
                                        <div class="alert alert-success alert-dismissible fade in hidden" role="alert" id="alerify">
                                              <button type="button" class="close" ><span aria-hidden="true" id="closealert">×</span>
                                              </button>
                                              <strong id="pacte"></strong>
                                          </div>
                                        <div class="dataTables_wrapper form-inline dt-bootstrap no-footer" id="datagridConso"> 
                                        </div><br><br>
                                          <div class="row hidden">
                                            <div class="col-sm-2">   
                                              <a href="ExportarGeneral.php" class="btn btn-success" ><i class="fa fa-download"></i> Exportar EXCEL</a>                                         
                                            </div>
                                                
                                        </div>
                              </div>

                              
                            </div>
                         </div>

                         <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2 style="text-transform: uppercase;">NOSOTROS <small></small></h2>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content">
                              <?php $pac =new Model();
                               $niNo = $pac->nosotros();
                               $mueNo = $niNo->fetch_assoc();
                              ?>
                                  <form class="form-horizontal form-label-left" action="Controlador/registro.php?function=registroNosotros" id="frmDatosPacientes" enctype="multipart/form-data" method="POST">
                                                  
                                                  <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-12">Descripcion</label>
                                                        <div class="col-md-9 col-sm-12 col-xs-12">
                                                           <textarea class="form-control" name="descripcion" id="descripcion" rows="6"><?php echo $mueNo["descripcion"]?></textarea>
                                                        </div>
                                                        
                                                      </div>
                                                   
                                                      <div class="form-group">
                                                          <label class="control-label col-md-2 col-sm-3 col-xs-12">Video URL</label>
                                                            <div class="col-md-9 col-sm-12 col-xs-12">
                                                                  <textarea class="form-control" name="url" id="url" rows="1"><?php echo $mueNo["url"]?></textarea>
                                                                 
                                                          </div>
                                                          
                                                      </div>
                                                     
                                                      <div class="form-group">
                                                          <label class="control-label col-md-2 col-sm-3 col-xs-12">Misión</label>
                                                            <div class="col-md-9 col-sm-12 col-xs-12">
                                                                  <textarea class="form-control" name="mision" id="mision" rows="4"><?php echo $mueNo["mision"]?></textarea>
                                                                 
                                                          </div>
                                                          
                                                      </div>

                                                      <div class="form-group">
                                                          <label class="control-label col-md-2 col-sm-3 col-xs-12">Visión</label>
                                                            <div class="col-md-9 col-sm-12 col-xs-12">
                                                                  <textarea class="form-control" name="vision" id="vision" rows="4"><?php echo $mueNo["vision"]?></textarea>
                                                                 
                                                          </div>
                                                          
                                                      </div>

                                                      <div class="form-group">
                                                          <label class="control-label col-md-2 col-sm-3 col-xs-12">Valores</label>
                                                            <div class="col-md-9 col-sm-12 col-xs-12">
                                                                  <textarea class="form-control" name="valores" id="valores" rows="4"><?php echo $mueNo["valores"]?></textarea>
                                                                 
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


                  
                  </div>
        </div>

  <!-- INICIO MODAL SLIDERS-->
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
                                   <input type="hidden" name="iduserRe"  id="iduserRe" >
                                  </form>
                                 
                                   
                                    <br />
                                    <br />
                                    <br />
                                    <br />
                            </div>                 
                             
                         
                    </div>
                  </div> 
</div>
  <!-- FIN MODAL SLIDERS-->  
 

  <!-- INICIO MODAL MARCAS-->
                <div class="marcas modal fade marcasModal" tabindex="-1" id="marcasModal" role="dialog" aria-hidden="true" >
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <div class="modal-header" style="background:#2a3f54;color: white;text-transform: uppercase;text-align: center;">
                                    <button type="button" class="close" data-dismiss="modal" style="color: white;opacity: 1;">&times;</button>
                                    <h4 class="modal-title" id="pacient">ACTUALIZAR MARCAS</h4>
                                </div>
                            <div class="modal-body">
                            <link href="./js/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
                            <script src="./js/dropzone/dist/dropzone.js"></script>
                                  <form action="upload.php?function=uploadMarcas" class="dropzone" method="POST" id="formupload">
                                   <input type="hidden" name="iduserMarca"  id="iduserMarca" >
                                  </form>
                                 
                                   
                                    <br />
                                    <br />
                                    <br />
                                    <br />
                            </div>                 
                             
                         
                    </div>
                  </div>
  <!-- FIN MODAL MARCAS-->
  

  
                <?php include 'Vistas/footer.php';?>     
        <!-- footer content -->
       
   