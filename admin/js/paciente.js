window.onload = function () {
        CargarCon();
        cargarProductos();
        cargarServicios();
        cargarVentas();
        cargarVideos();
}

$(document).ready(function(){
    
});



function CargarCon()
{    
    $('#datagridConso').load('Vistas/listgrupos.php');
}


function cargarProductos()
{    
    $('#dataproductos').load('Vistas/listproductos.php');
}

function cargarVideos()
{    
    $('#datavideos').load('Vistas/listvideos.php');
}


function cargarServicios()
{    
    $('#dataservicios').load('Vistas/listservicios.php');
}

function cargarVentas()
{    
    $('#dataformas').load('Vistas/listventas.php');
}



function guardarNosotros()
{
  
    var descrip =  CKEDITOR.instances.editor1.getData();
    var contenido = descrip.replace(/&nbsp;/gi, ' ');
    contenido = contenido.replace(/&/g, "%26");
    
       
        $.ajax({
            type: "POST",
            dataType: 'html',
            url: "Controlador/registro.php?function=registroNosotros",
            data: "texto="+contenido,
    
            success: function(resp){               
               
                alert("Guardado correctamente");
                location.reload();
               
            }
        }); 
} 

function subirSLider(id){
    $("#iduserRe").val(id);
}

/*function subirTitleCategories(id){
    $("#idCategories").val(id);
}*/

function subirTitle(id){
    $("#idTitle").val(id);
}

function subirMarca(id){
    $("#iduserMarca").val(id);
}


function eliminarProd(id)
{
    var opcion = confirm("¿Esta seguro de eliminar el producto?");
        if (opcion == true) {
            
            $.ajax({
                type: "POST",
                dataType: 'html',
                url: "Controlador/registro.php?function=elimPro",
                data: "ide="+id,
        
                        success: function(resp){               

                            cargarProductos(id);                    
                        }
            });


        } 
}

function eliminarVid(id)
{
    var opcion = confirm("¿Esta seguro de eliminar el video?");
        if (opcion == true) {
            
            $.ajax({
                type: "POST",
                dataType: 'html',
                url: "Controlador/registro.php?function=elimVid",
                data: "ide="+id,
        
                        success: function(resp){               

                            cargarVideos(id);                    
                        }
            });


        } 
}
            