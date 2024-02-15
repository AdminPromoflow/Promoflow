<?php
require_once('../../../config/database.php');

require_once('../../../models/W3P/W3P_orders/Orders.php');

require_once('../../../models/W3P/W3P_orders/Customers.php');

require_once('../../../models/W3P/W3P_orders/Jobs.php');

require_once('../../../controller/assets/libs/W3P_orders/pest-master/PestJSON.php');

require_once('../../../controller/assets/data/W3P_orders/flapi_credentials.php');

/*--------------------------------- Get Orders  ------------------------------*/

    if ($_POST['module']=="getOrders") {
        $apiClient = new PestJSON('https://dev-7.flyerlink.com/api.php'); // Init the library (put in your TC credentials here)
        $apiClient->setupAuth($flapi[0],$flapi[1]); //  $apiClient->setupAuth( 'username', 'password' );

        try { // Make a simple get call (this returns tag types in JSON format)
            $result = $apiClient->get('/runs?state=waiting&days=160&format=json');
          //  $result = $apiClient->get('/runs?&days=160&format=json');
        }
        catch (Exception $e) { // Handle error. In practice there are several exception types,
            die( $e->getMessage()); // which you can use to differentiate between different error conditions
        }
        createOrders($result);

        echo(json_encode( $result) ); // Examine successful result
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

    //  echo(json_encode( $result) );
      createJobs($result, $_POST['idOrder']);
    }
   function createOrders($result){

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
          $order->setFinishedDate("2030-01-12");
          $order->setWorkgroup($value["workgroup"]);
         json_encode($order->createOrders());
        }
        elseif ($result2 == '1') {
        }
      }
     }
   function createJobs($result, $idOrder){

      // echo json_encode($result);
       $searchedCharacter = "'";
       $neewCharacter = "''";
       $customerInfo = array();
       $customerInfoReturn = array();


       $varDataNo = 50224;

        foreach ($result["jobs"] as $item => $value) {


           $db = new Database();
           $job = new Jobs($db);


           $job->set_Id(str_replace($searchedCharacter, $neewCharacter, $value["id"]));



           $result2 =  ($job->verifyRepeatJob()["COUNT(*)"]);


           //echo $value["despatch_customer_code"]."  ";
           if ($result2 == '0'){


           $customerInfo[] = $value["addresses"];
           $customerInfo[] = $value["reseller_details"];



           $customerInfoReturn = saveCustomer($customerInfo);


           $idCustomer = $customerInfoReturn[0];
           $nameCustomer = $customerInfoReturn[1];


           $db = new Database();
           $job = new Jobs($db);


           $dataNo = $job->getLastDataNo()["data_no"];


           if ($dataNo == NULL || $dataNo == "" || $dataNo == false) {
             $dataNo = 10000;
           }


           else {
             $dataNo = intval($dataNo)  + 1;
           }
          // echo json_encode ($dataNo);exit;


           $db = new Database();
           $job = new Jobs($db);

           $job->set_addresses($idCustomer);
           $job->set_product_code(  str_replace($searchedCharacter, $neewCharacter, $value["product_code"])  );
           $job->set_idUser($_SESSION['idUser']);
           $job->set_idOrder($idOrder);
           $job->set_idSuppliers(1);
           $job->set_data_no($dataNo);
           $job->set_customer(str_replace($searchedCharacter, $neewCharacter, $nameCustomer));
           $job->set_print_ref("We are working on it");
           $job->set_project("We are working on it");
           $job->set_qty(  str_replace($searchedCharacter, $neewCharacter, $value["quantity_allocated"])  );







          //  json_encode($job->createJob() );
         }
        }
      //echo json_encode($result);
     }
     function saveCustomer($customerInfo){
      //   echo json_encode($customerInfo);
      $idCustomer;
      $customerInfoReturn = array();

      foreach ( $customerInfo[0] as $item => $value) {
        $db = new Database();
        $customer = new Customers($db);
        $customer->setDespatchCustomerCode($value["despatch_customer_code"]);
        $result2 =  ($customer->verifyRepeatCustomer()["COUNT(*)"]);

        //echo $value["despatch_customer_code"]."  ";
        if ($result2 == '0'){
        $db = new Database();
        $customer = new Customers($db);
        $customer->setName($value["name"]);
        $customer->setAddr1($value["addr1"]);
        $customer->setAddr2($value["addr2"]);
        $customer->setAddr3($value["addr3"]);
        $customer->setAddr4($value["addr4"]);
        $customer->setAddr5($value["addr5"]);
        $customer->setAddr6($value["addr6"]);
        $customer->setPostcode($value["postcode"]);
        $customer->setCountrycode($value["countrycode"]);
        $customer->setContact($value["contact"]);
        $customer->setTelephone($value["telephone"]);
        $customer->setEmail($value["email"]);
        $customer->setBestName($value["best_name"]);
        $customer->setCountry($value["country"]);
        $customer->setQuantity($value["quantity"]);
        $customer->setDespatchMethod($value["despatch_method"]);
        $customer->setDespatchMethodName($value["despatch_method_name"]);
        $customer->setDespatchCustomerCode($value["despatch_customer_code"]);
        $customer->setDespatchCustomerAddressId($value["despatch_customer_address_id"]);
        $customer->setLine($value["line"]);
        $customer->createCustomer();
      }
      $customerInfoReturn[] = $value["despatch_customer_code"];
      $customerInfoReturn[] = $value["name"];

        //$idCustomer = $value["despatch_customer_code"];
      }


      return $customerInfoReturn;
     }

 ?>
