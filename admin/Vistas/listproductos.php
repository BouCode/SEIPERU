 <?php 


include ("./../Controlador/config.php");
// include (MODEL_PATH."funciones.php");
// include (MODEL_PATH."global.php");
include ("../Modelo/funciones.php");
include ("../Modelo/global.php");


$pac =new Model();
$ni = $pac->consultaAllProduct();

?>  


<script type="text/javascript">
                                
                                    $(document).ready(function() {


                                   

                                              var d = new Date();
                                              var month = d.getMonth()+1;
                                              var day = d.getDate();
                                              var output = d.getFullYear() + '/' +
                                              ((''+month).length<2 ? '0' : '') + month + '/' +
                                              ((''+day).length<2 ? '0' : '') + day;


                                                $('#pac3').DataTable( {
                                                  "searching": true,
                                                  "pageLength": 10,
                                                  "order": [0, "desc"],
                                                  dom: '<fBtip>',
                                                 buttons: [
                                                        {
                                                            extend: 'excel',
                                                            text:'EXPORTAR A EXCEL',
                                                            title: 'PacientesRegistrados'+ output,
                                                            exportOptions: {
                                                              columns: [0, 1, 2, 3,4,5,6,7,8,9]
                                                            },
                                                            customize: function(xlsx) {
                                                              var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                                              $('row[r=2] c', sheet).attr('s', '47');
                                                          }
                                                        }
                                                        
                                                  ],                                                  
                                                  language: {
                                                        "decimal": "",
                                                        "searchPlaceholder": "Columna ..",
                                                        "emptyTable": "No hay registros para mostrar",
                                                        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                                                        "infoEmpty": "Mostrando 0 a 0 de 0 Entradas",
                                                        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                                                        "infoPostFix": "",
                                                        "thousands": ",",
                                                        "lengthMenu": "Mostrar _MENU_ filas",
                                                        "loadingRecords": "Cargando...",
                                                        "processing": "Procesando...",
                                                        "search": "Buscar por: ",
                                                        "zeroRecords": "Sin resultados encontrados",
                                                        "paginate": {
                                                            "first": "Primero",
                                                            "last": "Ultimo",
                                                            "next": "Siguiente",
                                                            "previous": "Anterior"
                                                        }
                                                    },

                                                
                                                    
                                                  });
                                      

                                  

                                        $('#pac3_filter').addClass('form-group');
                                        $('#pac3_filter').css('text-align','left');
                                        $('#pac3_filter').css('float','left');
                                        $('.dt-buttons').css('display','none');
                                      //  $('.dt-buttons').css('margin-top','-57px');
                                        $('#pac3_filter label input').addClass('form-control');
                                        $('#pac3_length label select').addClass('form-control');
                                       
                                    } );


                

                                </script>




                                              <table class="table bulk_action dataTable no-footer"  id="pac3" border="1" style="border: 1px solid white;">
                                                    <thead style="background: #2a3f54;color: white;">
                                                        <tr class="headings" style="font-size: 10px;">
                                                                                 
                                                                <th class="column-title" style="width:1%;text-transform: uppercase;text-align: center;">ID</th>
                                                                <th class="column-title" style="width:15%;text-transform: uppercase;text-align: center;">TITULO </th>
                                                                <th class="column-title" style="width:8%;text-transform: uppercase;text-align: center;">PRECIO </th>
                                                                <th class="column-title" style="width:4%;text-transform: uppercase;text-align: center;">DISPONIBLE </th>
                                                                <th class="column-title" style="width:4%;text-transform: uppercase;text-align: center;">OFERTA </th>
                                                                <th class="column-title" style="width:14%;text-transform: uppercase;text-align: center;">DESC. CORTA </th>
                                                                <th class="column-title" style="width:20%;text-transform: uppercase;text-align: center;">DESCRIPCION </th>
                                                                <th class="column-title" style="width:10%;text-transform: uppercase;text-align: center;">IMAGEN 1 </th>
                                                                <!--<th class="column-title" style="width:10%;text-transform: uppercase;text-align: center;">IMAGEN 2 </th>
                                                                <th class="column-title" style="width:10%;text-transform: uppercase;text-align: center;">IMAGEN 3 </th>
                                                                <th class="column-title" style="width:10%;text-transform: uppercase;text-align: center;">IMAGEN 4 </th>-->
                                                                <th class="column-title" style="width:10%;text-transform: uppercase;text-align: center;">OPCIONES </th>
                                                        </tr>
                                                    </thead>
                                                 
                                                    <tbody>
                                                        <?php  
                                                              
                                                              while($mue = $ni->fetch_assoc()){ 
                                                                ?>

                                                            <tr class="even pointer">                                                                     

                                                                    <td class=" " style="text-transform: uppercase;text-align: center;color: black;font-size: 11px;">
                                                                       <?php   echo $mue["idPro"]; ?>
                                                                     </td>                            
                                                                    <td class=" " style="text-align: left;color: black;font-size: 12px;">
                                                                       <?php   echo $mue["titulo"]; ?>
                                                                     </td>
                                                                     <td class=" " style="text-align: center;color: black;font-size: 12px;">
                                                                       <?php   echo $mue["precio"]; ?>
                                                                     </td>
                                                                     <td class=" " style="text-align: center;color: black;font-size: 12px;">
                                                                       <?php   echo $mue["disponible"]; ?>
                                                                     </td>
                                                                     <td class=" " style="text-align: center;color: black;font-size: 12px;">
                                                                      <input type="checkbox" class="form-control" name="" id="" value="1"   tabindex="2" <?php  if($mue["Oferta"]==1){echo 'checked';}?>  style="width:25%; margin:0;">
                                                                     </td>
                                                                     <td class=" " style="text-align: center;color: black;font-size: 12px;">
                                                                       <?php   echo $mue["descripcion_corta"]; ?>
                                                                     </td>
                                                                    <td class=" " style="text-align: left;color: black;font-size: 12px;">
                                                                       <?php  
                                                                        $rest = substr($mue["descr"], 0, 120)."..";
                                                                        echo $rest; ?>
                                                                     </td>
                                                                    <td class=" " style="text-transform: uppercase;text-align: center;color: black;font-size: 11px;">
                                                                        <a target="_blank" href="./../images/productos/<?php   echo $mue["img1"]; ?>"><img style="width: 50px;" src="./../images/productos/<?php   echo $mue["img1"]; ?>"> </a>
                                                                     </td>
                                                                    <!--<td class=" " style="text-transform: uppercase;text-align: center;color: black;font-size: 11px;">
                                                                        <a target="_blank" href="./../images/productos/<?php   echo $mue["img2"]; ?>"><img style="width: 50px;" src="./../images/productos/<?php   echo $mue["img2"]; ?>"> </a>
                                                                     </td>
                                                                     <td class=" " style="text-transform: uppercase;text-align: center;color: black;font-size: 11px;">
                                                                        <a target="_blank" href="./../images/productos/<?php   echo $mue["img3"]; ?>"><img style="width: 50px;" src="./../images/productos/<?php   echo $mue["img3"]; ?>"> </a>
                                                                     </td>
                                                                     <td class=" " style="text-transform: uppercase;text-align: center;color: black;font-size: 11px;">
                                                                        <a target="_blank" href="./../images/productos/<?php   echo $mue["img4"]; ?>"><img style="width: 50px;" src="./../images/productos/<?php   echo $mue["img4"]; ?>"> </a>
                                                                     </td>-->
                                                                      <td class=" " style="text-align: CENTER;color: black;font-size: 11px;vertical-align: inherit;">
                                                                        <a href="editProducto.php?id=<?php echo $mue["idPro"]; ?>" class="btEdit btn btn-success btn-xs" title="EDITAR"  ><i class="fa fa-edit"></i></a>
                                                                        <a onclick="eliminarProd(<?php   echo $mue['idPro']; ?>)" class="btEdit btn btn-danger btn-xs" title="ELIMINAR"  ><i class="fa fa-close"></i></a>
                                                                      </td>

                                                                     
                                                            </tr>
                                                        <?php }   ?>
                                                    </tbody>
                                                </table>                           

