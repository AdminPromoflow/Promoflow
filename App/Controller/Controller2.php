<?php
session_start();
require_once('../Config/database.php');
require_once('../Models/Users.php');
require_once('../Models/Categories.php');
require_once('../pest-master/PestJSON.php');
include ('../Data/flapi_credentials.php');

    if ($_POST['module']=="updateUsers") {
      $db = new Database();
      $user = new Users($db);
      $user->setIdUser($_POST['idUser']);
      $user->setName($_POST['name']);
      $user->setEmail($_POST['email']);
      $user->setPassword($_POST['password']);
      $user->setUserType($_POST['userType']);
      $result = json_encode($user->updateUser());
      echo $result;
    }
    elseif ($_POST['module']=="loginUser") {
      $db = new Database();
      $user = new Users($db);
      $user->setEmail($_POST['email']);
      $user->setPassword($_POST['password']);
      $result = json_encode($user->readUserExist());
      echo $result;
      $_SESSION['loginUser'] = 'active';
    }
    elseif ($_POST['module']=="createUser") {

      $db = new Database();
      $user = new Users($db);
      $user->setEmail($_POST['email']);
      $countUsers = ($user->verifyRepeatUser()["COUNT(*)"]);

      if ($countUsers == 0) {
        $db = new Database();
        $user = new Users($db);
        $user->setName($_POST['name']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        $user->setUserType($_POST['userType']);
        $result = json_encode($user->createUser());
      }
      echo $countUsers;

    }
    elseif ($_POST['module']=="deleteUser") {

      $db = new Database();
      $user = new Users($db);
      $user->setIdUser($_POST['idUser']);
      $result = json_encode($user->deleteUser());
      echo $result;
    }

      elseif ($_POST['module']=="verifyLogin") {
        if ($_SESSION['loginUser'] == 'active') {
          echo json_encode(1);
        }
        else {
          echo json_encode(0);
        }
      }

      elseif ($_POST['module']=="logout") {
        session_destroy();
      }

      elseif ($_POST['module']=="requestProductsExample") {
      }

      elseif ($_POST['module']=="getOrders") {
      //  $url = 'https://NKA1.API:46fKgJsZP7@dev-7.flyerlink.com/api.php/runs?state=waiting&days=60&prod_workgrp=NKA1&format=json';

      // Init the library (put in your TC credentials here)
          $apiClient = new PestJSON('https://dev-7.flyerlink.com/api.php');
          //  $apiClient->setupAuth( 'username', 'password' );
          $apiClient->setupAuth($flapi[0],$flapi[1]);

          // Make a simple get call (this returns tag types in JSON format)
          try {
              $result = $apiClient->get('/runs?state=waiting&days=120&format=json');
          }
          catch (Exception $e) {
              // Handle error. In practice there are several exception types,
              // which you can use to differentiate between different error conditions
              die( $e->getMessage());
          }
          // Examine successful result

          echo(json_encode( $result) );




      //  $json = file_get_contents('../../Json/GETRunsAwaitingProduction.json');
        // Display data
      //  echo ($json);
    }

      elseif ($_POST['module']=="getOrdersContent") {
        $apiClient = new PestJSON('https://dev-7.flyerlink.com/api.php');
        //  $apiClient->setupAuth( 'username', 'password' );
        $apiClient->setupAuth($flapi[0],$flapi[1]);

        // Make a simple get call (this returns tag types in JSON format)
        try {
            $result = $apiClient->get('/runs/'.$_POST['idOrder'].'/jobs?format=json');
        }
        catch (Exception $e) {
            // Handle error. In practice there are several exception types,
            // which you can use to differentiate between different error conditions
            die( $e->getMessage());
        }
        // Examine successful result

        echo(json_encode( $result) );

        //$url =  'https://NKA1.API:46fKgJsZP7@dev-7.flyerlink.com/api.php/runs/'.$_POST['idOrder'].'/jobs?format=json';
      //  $json = file_get_contents('../../Json/GETRUNJobs.json');
        // Display data
      //  echo ($json);
      }
      elseif ($_POST['module']=="getCustomers") {
        //$url =  'https://NKA1.API:46fKgJsZP7@dev-7.flyerlink.com/api.php/runs/'.$_POST['idOrder'].'/jobs?format=json';
        $json = file_get_contents('../../Json/Customer.json');
        // Display data
        echo ($json);
      }
      elseif ($_POST['module']=="getCategories") {
        $db = new Database();
        $user = new Categories($db);
        $result = json_encode($user->getCategories());
        echo $result;
      }



      //




 ?>
