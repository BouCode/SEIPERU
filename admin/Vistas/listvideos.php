<?php


include ("./../Controlador/config.php");
// include (MODEL_PATH."funciones.php");
// include (MODEL_PATH."global.php");
include ("../Modelo/funciones.php");
include ("../Modelo/global.php");


$pac =new Model();
$ni = $pac->consultaAllVideos();

?>




                                              <table class="table bulk_action dataTable no-footer"  id="pac3" border="1" style="border: 1px solid white;">
                                                    <thead style="background: #2a3f54;color: white;">
                                                        <tr class="headings" style="font-size: 10px;">

                                                                <th class="column-title" style="width:1%;text-transform: uppercase;text-align: center;">ID</th>
                                                                <th class="column-title" style="width:10%;text-transform: uppercase;text-align: center;">TITULO </th>
                                                                <th class="column-title" style="width:40%;text-transform: uppercase;text-align: center;">URL </th>
                                                                <th class="column-title" style="width:5%;text-transform: uppercase;text-align: center;">OPCIONES </th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php

                                                              while($mue = $ni->fetch_assoc()){
                                                                ?>

                                                            <tr class="even pointer">

                                                                    <td class=" " style="text-transform: uppercase;text-align: center;color: black;font-size: 11px;">
                                                                       <?php   echo $mue["idvid"]; ?>
                                                                     </td>

                                                                     <td class=" " style="text-align: left;color: black;font-size: 12px;">
                                                                       <?php
                                                                        echo $mue["title"]; ?>
                                                                     </td>

                                                                    <td class=" " style="text-align: left;color: black;font-size: 12px;">
                                                                       <?php
                                                                        echo $mue["url"]; ?>
                                                                     </td>

                                                                      <td class=" " style="text-align: CENTER;color: black;font-size: 11px;vertical-align: inherit;">
                                                                        <a href="editVideo.php?id=<?php echo $mue["idvid"]; ?>" class="btEdit btn btn-success btn-xs" title="EDITAR"  ><i class="fa fa-edit"></i> Editar</a>
                                                                        <a onclick="eliminarVid(<?php   echo $mue['idvid']; ?>)" class="btEdit btn btn-danger btn-xs" title="ELIMINAR"  ><i class="fa fa-close"></i></a>
                                                                      </td>


                                                            </tr>
                                                        <?php }   ?>
                                                    </tbody>
                                                </table>
