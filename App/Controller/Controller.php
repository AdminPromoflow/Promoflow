<?php
session_start();
require_once('../Config/database.php');
require_once('../Models/Users.php');




    if ($_POST['module'] = "getUsers") {
      $db = new Database();
      $user = new Users($db);
      $result = json_encode($user->getUsers());
      echo $result;
    }
  /*  if ($_POST['module']=="createUser") {
      echo "hola tu";
    }*/
    if ($_POST['module']=="updateUsers2") {
      //echo json_encode($_POST['idUser'].$_POST['name'].$_POST['email'].$_POST['password'].$_POST['userType']);
    //  echo "Quiero llorar otra vez";
    }






 ?>
