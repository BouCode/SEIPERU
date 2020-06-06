
<?php 

include_once ('config.php');
// include (MODEL_PATH."funciones.php");
include "../Modelo/funciones.php";

      
$sel =new Model();

$function = $_GET["function"];
     
if($function =="registroNosotros"){

            
          $nosotros = array();
          $nosotros['descripcion'] = $_POST["descripcion"];
          $nosotros['url'] = $_POST["url"];  
          $nosotros['mision'] = $_POST["mision"];  
          $nosotros['vision'] = $_POST["vision"];  
          $nosotros['valores'] = $_POST["valores"];         
          $ni2 = $sel->InsertNosotros($nosotros);
          echo"<script type=\"text/javascript\">window.location='./../consolidado.php';alert('Se actualizo correctamente'); </script>";     
         
}

else if($function =="insertProducto"){

        
        $uploadDir = './../../images/productos/';

        $producto = array();
        $producto['idproducto'] = $_POST["idproducto"];
        $producto['titulo'] = $_POST["titulo"];
        $producto['precio'] = $_POST["precio"];
        $producto['disponible'] = $_POST["disponible"];
        $producto['oferta'] = $_POST["oferta"];
        $producto['descripcion_corta'] = $_POST["descripcion_corta"];
        $producto['subgrupo'] = $_POST["subgrupo"];
        $producto['descproducto'] = $_POST["descproducto"];
        $producto['img1'] = $_FILES['img1']['name'];
        if($producto['img1']!=""){
                $tmpFile = $_FILES['img1']['tmp_name'];
                $filename = $uploadDir.'/'. $_FILES['img1']['name'];
                move_uploaded_file($tmpFile,$filename);

        }
        
        
        $producto['img2'] = $_FILES['img2']['name'];
        if ($producto['img2']!=""){
                $tmpFile = $_FILES['img2']['tmp_name'];
                $filename = $uploadDir.'/'. $_FILES['img2']['name'];
                move_uploaded_file($tmpFile,$filename);

        }



        $producto['img3'] = $_FILES['img3']['name'];
        if ($producto['img3']!=""){
                $tmpFile = $_FILES['img3']['tmp_name'];
                $filename = $uploadDir.'/'. $_FILES['img3']['name'];
                move_uploaded_file($tmpFile,$filename);

        }


        $producto['img4'] = $_FILES['img4']['name'];
        if ($producto['img4']!=""){
                $tmpFile = $_FILES['img4']['tmp_name'];
                $filename = $uploadDir.'/'. $_FILES['img4']['name'];
                move_uploaded_file($tmpFile,$filename);

        }


      
        $ni2 = $sel->InsertProducts($producto); 
        echo"<script type=\"text/javascript\">window.location='./../productos.php';alert('Producto guardado'); </script>"; 
       
}

else if($function =="insertTitleSlider"){

        
        echo"<script type=\"text/javascript\">window.location='./../consolidado.php';alert('Se actualizo correctamente'); </script>";  
        $iduser = $_POST['iduserRe'];
          
        $titleSlider = array();
        $titleSlider['iduser'] = $_POST["iduserRe"];
        $titleSlider['title'] = $_POST["title"];
        $titleSlider['subtitle'] = $_POST["subtitle"];


        $ni2 = $sel->uploadTitleSlider($titleSlider); 
        
       
}

/*else if($function =="insertTitleCategories"){

        
        
        $iduser = $_POST['idCategories'];
          
        $titleCategories = array();
        $titleCategories['iduser'] = $_POST["idCategories"];
        $titleCategories['title'] = $_POST["title"];

       
        $ni2 = $sel->uploadTitleCategories($titleCategories); 
        echo"<script type=\"text/javascript\">window.location='./../consolidado.php';alert('Se actualizo correctamente'); </script>";  
       
}*/

else if($function =="insertVideo"){
 
        $video = array();
        $video['idvideo'] = $_POST["idvideo"];
        $video['titlevideo'] = $_POST["titlevideo"];
        $video['urlvideo'] = $_POST["urlvideo"];

      
        $ni2 = $sel->InsertVids($video); 
        echo"<script type=\"text/javascript\">window.location='./../adminvideos.php';alert('Video guardado'); </script>";  
       
}



else if($function =="insertServicio"){

        
        $uploadDir = './../../images/';

        $servicio = array();
        $servicio['idsube'] = $_POST["idsube"];
        $servicio['titulo'] = $_POST["titulo"];
        $servicio['descservicio'] = $_POST["descservicio"];
        $servicio['img'] = $_FILES['img']['name'];
        if($servicio['img']!=""){
                $tmpFile = $_FILES['img']['tmp_name'];
                $filename = $uploadDir.'/'. $_FILES['img']['name'];
                move_uploaded_file($tmpFile,$filename);
        }
        
      
        $ni2 = $sel->InsertServices($servicio); 
        echo"<script type=\"text/javascript\">window.location='./../servicios.php';alert('Servicio actualizado'); </script>";  
       
}


else if($function =="insertVentas"){

        
        $uploadDir = './../../images/';

        $servicio = array();
        $servicio['idVen'] = $_POST["idVen"];
        $servicio['titulo'] = $_POST["titulo"];
        $servicio['texto'] = $_POST["texto"];
        $servicio['img'] = $_FILES['img']['name'];
        if($servicio['img']!=""){
                $tmpFile = $_FILES['img']['tmp_name'];
                $filename = $uploadDir.'/'. $_FILES['img']['name'];
                move_uploaded_file($tmpFile,$filename);
        }
        
      
        $ni2 = $sel->InsertSole($servicio); 
        echo"<script type=\"text/javascript\">window.location='./../ventas.php';alert('Actualizado correctamente'); </script>";  
       
}


else if($function =="contacto"){


        $contact = array();
        $contact['texto1'] = $_POST["texto1"];
        $contact['texto2'] = $_POST["texto2"];
        $contact['texto3'] = $_POST["texto3"];
             
        $ni2 = $sel->updateContact($contact); 
        echo"<script type=\"text/javascript\">window.location='./../editContacto.php';alert('Actualizado correctamente'); </script>";  
       
}else if($function ==""){


        $contact = array();
        $contact['texto1'] = $_POST["texto1"];
        $contact['texto2'] = $_POST["texto2"];
        $contact['texto3'] = $_POST["texto3"];
             
        $ni2 = $sel->updateContact($contact); 
        echo"<script type=\"text/javascript\">window.location='./../editContacto.php';alert('Actualizado correctamente'); </script>";  
       
}else if($function =="elimPro"){

            
        $eli = array();
        $eli['id'] = $_POST["ide"];        
        $ni2 = $sel->eliminarProducto($eli);   
       
}

else if($function =="elimVid"){

            
        $eli = array();
        $eli['id'] = $_POST["ide"];        
        $ni2 = $sel->eliminarVideo($eli);   
       
}



 ?>