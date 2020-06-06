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
include ("Controlador/conexion.php"); 

function debugToConsole($msg) { 
  echo "<script>console.log(".json_encode($msg).")</script>";
}

$pac =new Model();


$id = $_GET["id"];

debugToConsole($id);
debugToConsole("hola");
$ni = $pac->detalleVideo($id);
debugToConsole($ni);
$detVideo = $ni->fetch_assoc();



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
                                            <h2 style="text-align: center;float: none;text-transform: uppercase;font-weight: bolder;">DETALLE DEL VIDEO</h2>
                                            
                                            <div class="clearfix"></div>
                                          </div>
                                          <div class="x_content">
                                            <br />
                                          <form class="form-horizontal form-label-left" action="Controlador/registro.php?function=insertVideo" id="frmDatosPacientes" enctype="multipart/form-data" method="POST">
                                                  <input type="hidden" class="form-control"  value="<?php echo $detVideo["idvid"] ?>" name="idvideo" id="idvideo"  >
                                                  <div class="form-group">
                                                        <label class="control-label col-lg-2 col-md-2 col-sm-2 col-xs-12" >Título<span class="required" style="color: red;font-weight: bolder;font-size: 15px;">*</span></label>
                                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12" style="margin-bottom:1em;">
                                                                <input type="text" class="form-control" name="titlevideo" id="titlevideo" value="<?php echo $detVideo["title"]?>"   tabindex="2"  >
                                                        </div>

                                                        <label class="control-label col-lg-2 col-md-2 col-sm-2 col-xs-12" >URL<span class="required" style="color: red;font-weight: bolder;font-size: 15px;">*</span></label>
                                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12" style="margin-bottom:1em;">
                                                                <input type="text" class="form-control" name="urlvideo" id="urlvideo" value="<?php echo $detVideo["url"]?>"   tabindex="2"  >
                                                        </div>
                                                      
                                                      </div>
                                                   
                                                                                 
                                             
                                        <div class="ln_solid"></div>

                                        <div class="form-group">
                                          <div style="display:flex;justify-content:center;">
                                            
                                            <!--<a href="ImporConsol.php?id=<?php echo $id; ?>" class="btn btn-info btn-xs"><i class="fa fa-cloud-download"></i> Importar</a>-->
                                            <!--<a href="imprimir.php?id=<?php echo $id; ?>" target="blank" class="btEdit btn btn-danger"> 
                                            <i class="fa fa-save"></i> Guardar</a>-->
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