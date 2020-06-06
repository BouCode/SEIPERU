 <?php




    include("./../Controlador/config.php");
    // include (MODEL_PATH."funciones.php");
    // include (MODEL_PATH."global.php");
    include("../Modelo/funciones.php");
    include("../Modelo/global.php");

    $pac = new Model();
    $mod = new Model();
    $ni = $mod->consultaSlider();
    $mar = $mod->consultaMarcas();
    $categories = $mod->consultaCategories();


    ?>

 <table class="table bulk_action dataTable no-footer" id="pac" border="1" style="border: 1px solid white;">
     <thead style="background: #2a3f54;color: white;">
         <tr class="headings" style="font-size: 10px;">

             <th class="column-title" style="text-transform: uppercase;text-align: center;">No.</th>
             <th class="column-title" style="text-transform: uppercase;text-align: center;">IMAGEN</th>
             <th class="column-title" style="text-transform: uppercase;text-align: center;">TITULO</th>
             <th class="column-title" style="text-transform: uppercase;text-align: center;">SUBTITULO</th>
             <th class="column-title" style="text-transform: uppercase;text-align: center;">OPCION </th>


         </tr>
     </thead>

     <tbody>

         <?php

            while ($mue = $ni->fetch_assoc()) {
            ?>

             <tr class="even pointer">
                 <td style="text-transform: uppercase;text-align: center;color: black;font-size: 11px;">
                     <a><?php echo $mue["id"]; ?></a>
                 </td>
                 <td style="text-transform: uppercase;text-align: center;color: black;font-size: 11px;">
                     <a target="_blank" href="./../images/<?php echo $mue["image"]; ?>"><img style="width: 120px;" src="./../images/<?php echo $mue["image"]; ?>"> </a>
                 </td>
                 <td style="text-transform: uppercase;text-align: center;color: black;font-size: 11px;">
                     <a><?php echo $mue["title"]; ?></a>
                 </td>
                 <td style="text-transform: uppercase;text-align: center;color: black;font-size: 11px;">
                     <a><?php echo $mue["subtitle"]; ?></a>
                 </td>
                 <td style="text-align: CENTER;color: black;font-size: 11px;vertical-align: inherit;">
                     <a onclick="subirSLider(<?php echo $mue['id']; ?>);" data-toggle="modal" data-target=".bs-example-modal-smupload" class="btEdit btn btn-success btn-xs" title="EDITAR"><i class="fa fa-upload"></i> Actualizar Imagen</a>
                     <a onclick="subirTitle(<?php echo $mue['id']; ?>);" data-toggle="modal" data-target=".titleSlider" class="btEdit btn btn-primary btn-xs" title="EDITAR"><i class="fa fa-text-height"></i> Modificar Texto</a>
                 </td>
             </tr>
         <?php }   ?>
         <tr>
         </tr>
     </tbody>
 </table>



 <h2 style="text-transform: uppercase;">Lista de Marcas<small></small></h2>

 <table class="table bulk_action dataTable no-footer" id="pac" border="1" style="border: 1px solid white;">
     <thead style="background: #2a3f54;color: white;">
         <tr class="headings" style="font-size: 10px;">

             <th class="column-title" style="width:80%;text-transform: uppercase;text-align: center;">IMAGEN</th>
             <th class="column-title" style="width: 10%;text-transform: uppercase;text-align: center;">OPCION </th>
         </tr>
     </thead>

     <tbody>
         <?php

            while ($mue = $mar->fetch_assoc()) {
            ?>

             <tr class="even pointer">


                 <td class=" " style="text-transform: uppercase;text-align: center;color: black;font-size: 11px;">
                     <a target="_blank" href="./../images/marcas/<?php echo $mue["image"]; ?>"><img style="width: 120px;" src="./../images/marcas/<?php echo $mue["image"]; ?>"> </a>
                 </td>
                 <td class=" " style="text-align: CENTER;color: black;font-size: 11px;vertical-align: inherit;">
                     <a onclick="subirMarca(<?php echo $mue['id']; ?>);" data-toggle="modal" data-target=".marcasModal" class="btEdit btn btn-success btn-xs" title="EDITAR"><i class="fa fa-upload"></i> Actualizar </a>
                 </td>


             </tr>
         <?php }   ?>
     </tbody>
 </table>

 <!--<h2 style="text-transform: uppercase;">Lista de Categorías<small></small></h2>

 <table class="table bulk_action dataTable no-footer" id="pac" border="1" style="border: 1px solid white;">
     <thead style="background: #2a3f54;color: white;">
         <tr class="headings" style="font-size: 10px;">

             <th class="column-title" style="text-transform: uppercase;text-align: center;">No.</th>
             <th class="column-title" style="text-transform: uppercase;text-align: center;">IMAGEN</th>
             <th class="column-title" style="text-transform: uppercase;text-align: center;">TITULO</th>
             <th class="column-title" style="text-transform: uppercase;text-align: center;">OPCION </th>


         </tr>
     </thead>

     <tbody>

         <?php

            while ($cat = $categories->fetch_assoc()) {
            ?>

             <tr class="even pointer">
                 <td style="text-transform: uppercase;text-align: center;color: black;font-size: 11px;">
                     <a><?php echo $cat["id"]; ?></a>
                 </td>
                 <td style="text-transform: uppercase;text-align: center;color: black;font-size: 11px;">
                     <a target="_blank" href="./../images/<?php echo $cat["image"]; ?>"><img style="width: 120px;" src="./../images/<?php echo $cat["image"]; ?>"> </a>
                 </td>
                 <td style="text-transform: uppercase;text-align: center;color: black;font-size: 11px;">
                     <a><?php echo $cat["title"]; ?></a>
                 </td>
                 <td style="text-align: CENTER;color: black;font-size: 11px;vertical-align: inherit;">
                     <a onclick="subirSLider(<?php echo $cat['id']; ?>);" data-toggle="modal" data-target=".bs-example-modal-smupload" class="btEdit btn btn-success btn-xs" title="EDITAR"><i class="fa fa-upload"></i> Actualizar Imagen</a>
                     <a onclick="subirTitleCategories(<?php echo $cat['id']; ?>);" data-toggle="modal" data-target=".categories" class="btEdit btn btn-primary btn-xs" title="EDITAR"><i class="fa fa-text-height"></i> Modificar Texto</a>
                 </td>
             </tr>
         <?php }   ?>
         <tr>
         </tr>
     </tbody>
 </table>-->


 <!-- INICIO MODAL SLIDERSTITLE-->
 <div class="titleSlider modal fade titleSlider" tabindex="-1" id="titleSlider" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">

             <div class="modal-header" style="background:#2a3f54;color: white;text-transform: uppercase;text-align: center;">
                 <button type="button" class="close" data-dismiss="modal" style="color: white;opacity: 1;">&times;</button>
                 <h4 class="modal-title" id="pacient">ACTUALIZAR TÍTULOS</h4>
             </div>
             <div class="modal-body">
                 <form class="form-horizontal form-label-left" action="Controlador/registro.php?function=insertTitleSlider" method="POST">
                     <div class="container">
                         <div class="row">

                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12">Titulo</label>
                                     <div class="col-md-3 col-sm-12 col-xs-12">
                                         <input type="text" class="form-control" name="title" id="title" maxlength="50">

                                     </div>

                                 </div>
                             </div>
                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12">Subtitulo</label>
                                     <div class="col-md-3 col-sm-12 col-xs-12">
                                         <input type="text" class="form-control" name="subtitle" id="subtitle" maxlength="100">

                                     </div>

                                 </div>
                             </div>

                         </div>
                         <br><br>
                         <div class="col-md-offset-5 col-md-5 ">
                             <div class="form-group">
                                 <input type="hidden" name="iduserRe" id="idTitle">
                                 <input type="submit" value="Guardar" name="enviar" class="btEdit btn btn-danger" style="cursor: pointer">

                             </div>
                         </div>
                     </div>

                     <form>
             </div>

         </div>
     </div>
 </div>
 <!-- FIN MODAL SLIDERSTITLE-->

 <!-- INICIO MODAL CATEGORIAS
 <div class="categories modal fade categories" tabindex="-1" id="categories" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">

             <div class="modal-header" style="background:#2a3f54;color: white;text-transform: uppercase;text-align: center;">
                 <button type="button" class="close" data-dismiss="modal" style="color: white;opacity: 1;">&times;</button>
                 <h4 class="modal-title" id="pacient">ACTUALIZAR NOMBRE DE CATEGORIAS</h4>
             </div>
             <div class="modal-body">
                 <form class="form-horizontal form-label-left" action="Controlador/registro.php?function=insertTitleCategories" method="POST">
                     <div class="container">
                         <div class="row">

                             <div class="col-sm-12 text-center">
                                 <div class="form-group">
                                     <label class="control-label col-md-12 col-sm-12 col-xs-12">Titulo</label>
                                     <div class="col-md-12 col-sm-12 col-xs-12">
                                         <input type="text" class="form-control" name="title" id="title" maxlength="50">

                                     </div>

                                 </div>
                             </div>


                         </div>
                         <br><br>
                         <div class=" col-md-12 text-center">
                             <div class="form-group">
                                 <input type="hidden" name="idCategories" id="idTitleCategories">
                                 <input type="submit" value="Guardar" name="enviar" class="btEdit btn btn-danger" style="cursor: pointer">

                             </div>
                         </div>
                     </div>
                     <form>
             </div>

         </div>
     </div>
 </div>
 FIN MODAL CATEGORIAS-->