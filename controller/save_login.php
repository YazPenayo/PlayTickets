<?php
session_start();
   include_once "../models/functions.php";
   $show = getShowForId($_GET["id_show"]);
   $id=$_SESSION["id"];
   $comp=login();
   /*var_dump($comp);
   exit;*/
$logged_in = false;
   foreach($comp as $compara)//lopez no lo entenderias YO ENCONTRE VARIABLES EN ESPAÑOL EN TU CODIGO SALU2
   {
      if (($compara->email === $_POST["email"]) && (password_verify($_POST["_password"], $compara->_password))&& ($compara->id_rol===1))
     {
      $logged_in = true;
      $_SESSION["email"] =$compara->email;
      $_SESSION["name"]=$compara->user_name;
      //echo $_SESSION["email"],$_SESSION["name"];
      break;
         
     }
     if(($compara->email === $_POST["email"]) && (password_verify($_POST["_password"], $compara->_password))&& ($compara->id_rol===2))
      {
      header("location: ../view/supplier.php");
      }
      
      if(($compara->email === $_POST["email"]) && (password_verify($_POST["_password"], $compara->_password))&& ($compara->id_rol===3))
      {
      header("location: ../view/counter_staff.php");
      }
   }
   if ($logged_in) 
   {
      header("location: ../view/view_purchase.php?id_show=$id");
   } 
   else 
   {
      echo "Usuario o contraseña incorrectos.";
   }    

?>

