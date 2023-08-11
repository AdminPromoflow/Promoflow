<?php
session_start();

/*---------------------------------  Imports  --------------------------------*/

require_once('../Config/database.php');
require_once('../Models/Users.php');
require_once('../Models/Categories.php');
require_once('../Models/Groups.php');
require_once('../Models/Products.php');
require_once('../pest-master/PestJSON.php');
include ('../Data/flapi_credentials.php');


/*--------------------------------  CRUD users  ------------------------------*/

    if ($_POST['module']=="createUser") {
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

    elseif ($_POST['module']=="updateUsers") {
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

    elseif ($_POST['module']=="deleteUser") {
      $db = new Database();
      $user = new Users($db);
      $user->setIdUser($_POST['idUser']);
      $result = json_encode($user->deleteUser());
      echo $result;
    }


/*----------------------------------  Login  ---------------------------------*/

     elseif ($_POST['module']=="loginUser") {
      $db = new Database();
      $user = new Users($db);
      $user->setEmail($_POST['email']);
      $user->setPassword($_POST['password']);
      $result = json_encode($user->readUserExist());
      echo $result;
      $_SESSION['loginUser'] = 'active';
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


/*--------------------------------- Get Orders  ------------------------------*/

    elseif ($_POST['module']=="getOrders") {
        $apiClient = new PestJSON('https://dev-7.flyerlink.com/api.php'); // Init the library (put in your TC credentials here)
        $apiClient->setupAuth($flapi[0],$flapi[1]); //  $apiClient->setupAuth( 'username', 'password' );

        try { // Make a simple get call (this returns tag types in JSON format)
            $result = $apiClient->get('/runs?state=waiting&days=120&format=json');
        }
        catch (Exception $e) { // Handle error. In practice there are several exception types,
            die( $e->getMessage()); // which you can use to differentiate between different error conditions
        }

        //echo(json_encode( $result) ); // Examine successful result
        setOrders($result);
    }



    elseif ($_POST['module']=="getOrdersContent") {
      $apiClient = new PestJSON('https://dev-7.flyerlink.com/api.php');
      $apiClient->setupAuth($flapi[0],$flapi[1]);

      try {
          $result = $apiClient->get('/runs/'.$_POST['idOrder'].'/jobs?format=json');
      }
      catch (Exception $e) {
          die( $e->getMessage());
      }

      echo(json_encode( $result) );
    }


/*---------------------------------  Products  -------------------------------*/

    elseif ($_POST['module']=="getCategories") {
      $db = new Database();
      $category = new Categories($db);
      $result = json_encode($category->getCategories());
      echo $result;
    }

    elseif ($_POST['module']=="getGroups") {
      $db = new Database();
      $group = new Groups($db);
      $group->setIdCategory($_POST['id']);
      $result = json_encode($group->getGroups());
      echo $result;
    }

    elseif ($_POST['module']=="getProducts") {
      $db = new Database();
      $product = new Products($db);
      $product->setIdGroup($_POST['id']);
      $result = json_encode($product->getProducts());
      echo $result;
    }


/*---------------------------------  Customers  ------------------------------*/

    /*elseif ($_POST['module']=="getCustomers") {
      $json = file_get_contents('../../Json/Customer.json');
      echo ($json);
    }*/


    function setOrders($result){
      //echo "Hola";

      foreach ($result["runs"] as $item => $value) {

        echo $value["id"]."\n";
        echo $value["name"]."\n";
        echo $value["runtype"]."\n";
        echo $value["description"]."\n";
        echo $value["finished_date"]."\n";
        echo $value["workgroup"]."\n";
      }
     }


 ?>
