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

$pac =new Model();



$id = $_GET["id"];
$ni = $pac->detalleProducto($id);
$detProduc = $ni->fetch_assoc();



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
                                            <h2 style="text-align: center;float: none;text-transform: uppercase;font-weight: bolder;">DETALLE DEL PRODUCTO</h2>
                                            
                                            <div class="clearfix"></div>
                                          </div>
                                          <div class="x_content">
                                            <br />
                                          <form class="form-horizontal form-label-left" action="Controlador/registro.php?function=insertProducto" id="frmDatosPacientes" enctype="multipart/form-data" method="POST">
                                                  <input type="hidden" class="form-control"  value="<?php echo $detProduc["idPro"] ?>" name="idproducto" id="idproducto"  >
                                                  <div class="form-group">
                                                        <label class="control-label col-lg-2 col-md-2 col-sm-2 col-xs-12" >TITULO <span class="required" style="color: red;font-weight: bolder;font-size: 15px;">*</span></label>
                                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12" style="margin-bottom:1em;">
                                                                <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo $detProduc["titulo"]?>"   tabindex="2"  >
                                                        </div>

                                                        <label class="control-label col-lg-2 col-md-2 col-sm-2 col-xs-4" >Precio<span class="required" style="color: red;font-weight: bolder;font-size: 15px;">*</span></label>
                                                        <div class="col-lg-3 col-md-10 col-sm-10 col-xs-8" style="margin-bottom:1em;">
                                                                <input type="text" class="form-control" name="precio" id="precio" value="<?php echo $detProduc["precio"]?>"   tabindex="2"  >
                                                        </div>

                                                        <label class="control-label col-lg-2 col-md-2 col-sm-2 col-xs-4" >Disponible<span class="required" style="color: red;font-weight: bolder;font-size: 15px;">*</span></label>
                                                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-8" style="margin-bottom:1em;">
                                                                <input type="text" class="form-control" name="disponible" id="disponible" value="<?php echo $detProduc["disponible"]?>"   tabindex="2"  >
                                                        </div>

                                                        <label class="control-label col-lg-1 col-md-2 col-sm-2 col-xs-4" >Oferta<span class="required" style="color: red;font-weight: bolder;font-size: 15px;">*</span></label>
                                                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-8" style="margin-bottom:1em;">
                                                                <input type="checkbox" class="form-control" name="oferta" id="oferta" value="1"   tabindex="2" <?php  if($detProduc["Oferta"]==1){echo 'checked';}?>  style="width:16%; margin:0;">
                                                        </div>


                                                          <label class="control-label col-lg-2 col-md-2 col-sm-2 col-xs-12" >GRUPO<span class="required" style="color: red;font-weight: bolder;font-size: 15px;">*</span></label>
                                                          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12" style="margin-bottom:1em;">
                                                                  <select class="form-control" name="subgrupo" id="subgrupo" required="required" value="<?php echo $detProduc["idsubgrupo"]?>">>
                                                                          <option >-- Seleccionar --</option>
                                                                          <?php if($detProduc["idsubgrupo"]=="1"){
                                                                                  echo '<option value="1" selected>Herramientas Eléctricas</option>
                                                                                  <option value="2">Herramientas Manuales</option>
                                                                                  <option value="3">Electrodomésticos y Gasodomésticos</option>
                                                                                  <option value="4">Tecnología</option>
                                                                                  <option value="5">Energía y Medio Ambiente</option>
                                                                                  <option value="6">Equipos de Protección Personal</option>
                                                                                  <option value="7">Limpieza y Hogar</option>';
                                                                          }
                                                                          else if($detProduc["idsubgrupo"]=="2"){
                                                                            echo '<option value="1" >Herramientas Eléctricas</option>
                                                                                  <option value="2" selected>Herramientas Manuales</option>
                                                                                  <option value="3">Hidrocarburos</option>
                                                                                  <option value="4">Tecnología</option>
                                                                                  <option value="5">Energía y Medio Ambiente</option>
                                                                                  <option value="6">Equipos de Protección Personal</option>
                                                                                  <option value="7">Limpieza y Hogar</option>';
                                                                          }
                                                                          else if($detProduc["idsubgrupo"]=="3"){
                                                                            echo '<option value="1" >Herramientas Eléctricas</option>
                                                                            <option value="2" >Herramientas Manuales</option>
                                                                            <option value="3" selected>Electrodomésticos y Gasodomésticos</option>
                                                                            <option value="4">Tecnología</option>
                                                                            <option value="5">Energía y Medio Ambiente</option>
                                                                            <option value="6">Equipos de Protección Personal</option>
                                                                            <option value="7">Limpieza y Hogar</option>';
                                                                          }
                                                                          else if($detProduc["idsubgrupo"]=="4"){
                                                                            echo '<option value="1" >Herramientas Eléctricas</option>
                                                                            <option value="2" >Herramientas Manuales</option>
                                                                            <option value="3">Electrodomésticos y Gasodomésticos</option>
                                                                            <option value="4" selected>Tecnología</option>
                                                                            <option value="5">Energía y Medio Ambiente</option>
                                                                            <option value="6">Equipos de Protección Personal</option>
                                                                            <option value="7">Limpieza y Hogar</option>';
                                                                          }
                                                                          else if($detProduc["idsubgrupo"]=="5"){
                                                                            echo '<option value="1" >Herramientas Eléctricas</option>
                                                                            <option value="2" >Herramientas Manuales</option>
                                                                            <option value="3">Electrodomésticos y Gasodomésticos</option>
                                                                            <option value="4">Tecnología</option>
                                                                            <option value="5" selected>Energía y Medio Ambiente</option>
                                                                            <option value="6">Equipos de Protección Personal</option>
                                                                            <option value="7">Limpieza y Hogar</option>';
                                                                          }
                                                                          else if($detProduc["idsubgrupo"]=="6"){
                                                                            echo '<option value="1" >Herramientas Eléctricas</option>
                                                                            <option value="2" >Herramientas Manuales</option>
                                                                            <option value="3" >Electrodomésticos y Gasodomésticos</option>
                                                                            <option value="4">Tecnología</option>
                                                                            <option value="5" selected>Energía y Medio Ambiente</option>
                                                                            <option value="6" selected>Equipos de Protección Personal</option>
                                                                            <option value="7">Limpieza y Hogar</option>';
                                                                          }
                                                                          else if($detProduc["idsubgrupo"]=="7"){
                                                                            echo '<option value="1" >Herramientas Eléctricas</option>
                                                                            <option value="2" >Herramientas Manuales</option>
                                                                            <option value="3" >Electrodomésticos y Gasodomésticos</option>
                                                                            <option value="4">Tecnología</option>
                                                                            <option value="5" selected>Energía y Medio Ambiente</option>
                                                                            <option value="6" >Equipos de Protección Personal</option>
                                                                            <option value="7" selected>Limpieza y Hogar</option>';
                                                                          }
                                                                          else{
                                                                            echo '<option value="1">Herramientas Eléctricas</option>
                                                                            <option value="2">Herramientas Manuales</option>
                                                                            <option value="3">Electrodomésticos y Gasodomésticos</option>
                                                                            <option value="4">Tecnología</option>
                                                                            <option value="5">Energía y Medio Ambiente</option>
                                                                            <option value="6">Equipos de Protección Personal</option>
                                                                            <option value="7">Limpieza y Hogar</option>';
                                                                          }
                                                                          ?>
                                                                          
                                                                  </select>
                                                          </div>
                                                        
                                                      </div>

                                                      <label class="control-label col-lg-2 col-md-2 col-sm-2 col-xs-12" >DESCRIPCIÓN CORTA <span class="required" style="color: red;font-weight: bolder;font-size: 15px;">*</span></label>
                                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12" style="margin-bottom:1em;">
                                                                <input type="text" class="form-control" maxlength="50" name="descripcion_corta" id="descripcion_corta" value="<?php echo $detProduc["descripcion_corta"]?>"   tabindex="2"  >
                                                        </div>
                                                   
                                                      <div class="form-group">
                                                          <label class="control-label col-md-2 col-sm-3 col-xs-12">DESCRIPCION</label>
                                                            <div class="col-md-9 col-sm-12 col-xs-12">
                                                                  <textarea class="form-control" name="descproducto" id="descproducto"><?php echo $detProduc["descr"]?></textarea>
                                                                  <script>CKEDITOR.replace( 'descproducto' );</script>
                                                          </div>
                                                          
                                                      </div>
                                                     
                                                      <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-12">IMAGEN 1  <span class="required" style="color: red;font-weight: bolder;font-size: 15px;">*</span></label>
                                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                                              <input type="file" class="form-control-file" id="img1" name="img1" style="margin-top: 9px;">
                                                        </div>

                                                        <label class="control-label col-md-2 col-sm-3 col-xs-12">FOTO  <span class="required" style="color: red;font-weight: bolder;font-size: 15px;" readonly>*</span></label>
                                                          <div class="col-md-3 col-sm-12 col-xs-12">
                                                                <img src="./../images/productos/<?php   echo $detProduc["img1"]; ?>" width="50">
                                                          </div>
                                                      </div>
                                                     <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-12">IMAGEN 2</label>
                                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                                              <input type="file" class="form-control-file" id="img2" name="img2" style="margin-top: 9px;">
                                                        </div>

                                                        <label class="control-label col-md-2 col-sm-3 col-xs-12">FOTO</label>
                                                          <div class="col-md-3 col-sm-12 col-xs-12">
                                                                <img src="./../images/productos/<?php   echo $detProduc["img2"]; ?>" width="50">
                                                          </div>
                                                      </div>
                                                      <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-12">IMAGEN 3</label>
                                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                                              <input type="file" class="form-control-file" id="img3" name="img3" style="margin-top: 9px;">
                                                        </div>

                                                        <label class="control-label col-md-2 col-sm-3 col-xs-12">FOTO</label>
                                                          <div class="col-md-3 col-sm-12 col-xs-12">
                                                                <img src="./../images/productos/<?php   echo $detProduc["img3"]; ?>" width="50">
                                                          </div>
                                                      </div>
                                                      <div class="form-group">
                                                        <label class="control-label col-md-2 col-sm-3 col-xs-12">IMAGEN 4</label>
                                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                                              <input type="file" class="form-control-file" id="img4" name="img4" style="margin-top: 9px;">
                                                        </div>

                                                        <label class="control-label col-md-2 col-sm-3 col-xs-12">FOTO</label>
                                                          <div class="col-md-3 col-sm-12 col-xs-12">
                                                                <img src="./../images/productos/<?php   echo $detProduc["img4"]; ?>" width="50">
                                                          </div>
                                                      </div>                              
                                             
                                        <div class="ln_solid"></div>

                                        <div class="form-group">
                                          <div class="col-md-9 col-md-offset-2">
                                            
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