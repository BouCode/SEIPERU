<?php

include_once ('Controlador/config.php');
// include (MODEL_PATH."funciones.php");

include ('./Modelo/funciones.php');
include ("Controlador/conexion.php"); 

$sel =new Model();
$function  = $_GET['function'];

if($function=="upload"){

    $uploadDir = './../images';
    $iduser = $_POST['iduserRe'];
      
    if (!empty($_FILES)) {
     $tmpFile = $_FILES['file']['tmp_name'];
     $filename = $uploadDir.'/'. $_FILES['file']['name'];
     move_uploaded_file($tmpFile,$filename);
    }
    
    $files  = array();
    $files['iduser']= $_POST['iduserRe'];
    $files['namefile'] = $_FILES['file']['name'];
   
    $ni = $sel->InsertFilesUpload($files);
}

if($function=="uploadMarcas"){

    $uploadDir = './../images/marcas';
    $iduser = $_POST['iduserMarca'];
      
    if (!empty($_FILES)) {
     $tmpFile = $_FILES['file']['tmp_name'];
     $filename = $uploadDir.'/'. $_FILES['file']['name'];
     move_uploaded_file($tmpFile,$filename);
    }
    
    $files  = array();
    $files['iduser']= $_POST['iduserMarca'];
    $files['namefile'] = $_FILES['file']['name'];
   
    $ni = $sel->uploadMarcas($files);

}

/*if($function=="uploadTitle"){

        $iduser = $_POST['iduserRe'];
          
        $titleSlider = array();
        $titleSlider['iduser'] = $_POST["iduserRe"];
        $titleSlider['title'] = $_POST["title"];
        $titleSlider['subtitle'] = $_POST["subtitle"];


        $ni2 = $sel->uploadTitleSlider($titleSlider); 
   
    $ni = $sel->uploadMarcas($files);

}*/





?>