<?php
session_start();

/*---------------------------------  Imports  --------------------------------*/

require_once('../Config/database.php');
require_once('../Models/Users.php');
require_once('../Models/Categories.php');
require_once('../Models/Groups.php');
require_once('../Models/Products.php');
require_once('../Models/Orders.php');
require_once('../Models/Jobs.php');
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

        echo(json_encode( $result) ); // Examine successful result
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

      //echo(json_encode( $result) );
      setOrdersContent($result);
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
        $db = new Database();
        $order = new Orders($db);
        $order->setId($value["id"]);
        $result2 =  ($order->verifyRepeatOrder()["COUNT(*)"]);


        if ($result2 == '0') {
          $db = new Database();
          $order = new Orders($db);
          $order->setId($value["id"]);
          $order->setCreatedDate($value["created_date"]);
          $order->setName($value["name"]);
          $order->setRuntype($value["runtype"]);
          $order->setDescription($value["description"]);
          $order->setFinishedDate($value["finished_date"]);
          $order->setWorkgroup($value["workgroup"]);
          json_encode($order->createUser());
        }
        elseif ($result2 == '1') {
        }
      }
     }

     function setOrdersContent($result){
       foreach ($result["jobs"] as $item => $value) {/*
         $db = new Database();
         $job = new Jobs($db);
         $job->setId($value["id"]);
         $job->setStatus($value["status"]);
         $job->setCustomer($value["customer"]);
         $job->setContact($value["contact"]);
         $job->setQuantityAllocated($value["quantity_allocated"]);
         $job->setQuantityPrinted($value["quantity_printed"]);
         $job->setQuantityDespatched($value["quantity_despatched"]);
         $job->setTotalTransfer($value["total_transfer"]);
         $job->setTotalSelling($value["total_selling"]);
         $job->setTotal($value["total"]);
         $job->setProductCode($value["product_code"]);
         $job->setClientReference($value["client_reference"]);
         $job->setTotalPrcost($value["setTotalPrcost"]);
         $job->setTitle($value["title"]);
         $job->setCategory($value["category"]);
         $job->setQuantity($value["quantity"]);
         $job->setAuto081($value["auto081"]);
         $job->setService($value["service"]);
         $job->setSupplierReference($value["supplier_reference"]);
         $job->setReprintof($value["reprintof"]);
         $job->setReprintas($value["reprintas"]);
         $job->setReorderof($value["reorderof"]);
         $job->setReorderas($value["reorderas"]);
         $job->setProductName($value["product_name"]);
         $job->setSpec($value["spec"]);
         $job->setTurnaround($value["turnaround"]);
         $job->setSchedule($value["schedule"]);
         $job->setWeight($value["weight"]);
         $job->setStatusText($value["status_text"]);
         $job->setCustosetStatusNotemer($value["status_note"]);
         $job->setHeight($value["height"]);
         $job->setWidth($value["width"]);
         $job->setBleed($value["bleed"]);
         $job->setResellerWorkgroup($value["reseller_workgroup"]);
         $job->setResellerDetails($value["customer"]);
         $job->setCustomer($value["reseller_details"]);
         $job->setProductSpec($value["product_spec"]);
         $job->setProductDesign($value["product_design"]);
         $job->setProductSpecial($value["product_special"]);
         $job->setProductPartner_code($value["product_partner_code"]);
         $job->setProdWorkgroup($value["prod_workgroup"]);
         $job->setMultifile($value["multifile"]);
         $job->setExpectedDespatch_date($value["expected_despatch_date"]);
         $job->setFrontFilename($value["front_filename"]);
         $job->setReverseFilename($value["reverse_filename"]);
         $job->setFeeChargedOnJob($value["fee_charged_on_job"]);
         $job->setPages($value["pages"]);
         $job->setDespatches($value["despatches"]);
         $job->setAddresses($value["addresses"]);
         $job->setRevenue($value["revenue"]);
         $job->setNotes($value["notes"]);
         $job->setFinishes($value["finishes"]);
         $job->setOrientation($value["orientation"]);
         $job->setOrderCode($value["order_code"]);
         $job->setPackageCode($value["package_code"]);
         $job->setJobmakerPack($value["jobmaker_pack"]);
         $job->setFilePaths($value["file_paths"]);
         $job->setReverse($value["reverse"]);


         echo $value["id"];*/
       }
      //echo json_encode($result);
     }

 ?>
