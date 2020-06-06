<?php

session_start();
unset ($_SESSION['loggedin'],$_SESSION['nom'],$_SESSION['ape'],$_SESSION['id']);
session_destroy();

//header('Location: index.php');
header('Location: ./index.php');

?>