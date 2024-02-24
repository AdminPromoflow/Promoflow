<?php
    class Jobs {
      private $conn;
      private $id;
      private $addresses;
      private $product_code;
      private $idUser;
      private $idOrder;
      private $idSuppliers;
      private $data_no;
      private $customer;
      private $print_ref;
      private $project;
      private $qty;
      private $supplier;
      private $c_order_date;
      private $po_sent;
      private $approval_sent;
      private $s_despatch_sent;
      private $c_due_date;
      private $artwork_pre_approved;
      private $c_artwork;
      private $c_artwork_visual;
      private $c_approved_pdf;
      private $box_no;
      private $act_despatch_date;
      private $uk_trading_no;
      private $delivered_date;
      private $nett_sale;
      private $customer_reference_1;
      private $s_ref;
      private $s_email;
      private $item;
      private $size;
      private $material;
      private $weigth_thickness_Capacity;
      private $print;
      private $coverage;
      private $print_style;
      private $finish_1;
      private $finish_2;
      private $finish_3;
      private $service_level;
      private $status;
      private $notes;
      private $note;
      private $company_name;
      private $attn;
      private $tel;
      private $email;
      private $delivery_address;
      private $uk_track_link;
      private $delivery_image;
      private $product_image;
      private $not_sure;
      private $po_received;



      function __construct($conn) {
          $this->conn = $conn;
      }
      function set_Id($id){
        $this->id = $id;
      }
      function set_addresses($addresses){
        $this->addresses = $addresses;
      }
      function set_product_code($product_code){
        $this-> product_code= $product_code;
      }
      function set_idUser($idUser){
        $this->idUser = $idUser;
      }
      function set_idOrder($idOrder){
        $this->idOrder = $idOrder;
      }
      function set_idSuppliers($idSuppliers){
        $this->idSuppliers = $idSuppliers;
      }
      function set_data_no($data_no){
        $this->data_no = $data_no;
      }
      function set_customer($customer){
        $this->customer = $customer;
      }
      function set_print_ref($print_ref){
        $this->print_ref = $print_ref;
      }
      function set_project($project){
        $this->project = $project;
      }
      function set_qty($qty){
        $this->qty = $qty;
      }
      function set_supplier($supplier){
        $this->supplier = $supplier;
      }
      function set_c_order_date($c_order_date){
        $this->c_order_date = $c_order_date;
      }
      function set_po_sent($po_sent){
        $this->po_sent = $po_sent;
      }
      function set_approval_sent($approval_sent){
        $this->approval_sent = $approval_sent;
      }
      function set_s_despatch_sent($s_despatch_sent){
        $this->s_despatch_sent = $s_despatch_sent;
      }
      function set_c_due_date($c_due_date){
        $this->c_due_date = $c_due_date;
      }
      function set_artwork_pre_approved($artwork_pre_approved){
        $this->artwork_pre_approved = $artwork_pre_approved;
      }
      function set_c_artwork($c_artwork){
        $this->c_artwork = $c_artwork;
      }
      function set_c_artwork_visual($c_artwork_visual){
        $this->c_artwork_visual = $c_artwork_visual;
      }
      function set_c_approved_pdf($c_approved_pdf){
        $this->c_approved_pdf = $c_approved_pdf;
      }
      function set_box_no($box_no){
        $this->box_no = $box_no;
      }
      function set_act_despatch_date($act_despatch_date){
        $this->act_despatch_date = $act_despatch_date;
      }
      function set_uk_trading_no($uk_trading_no){
        $this->uk_trading_no = $uk_trading_no;
      }
      function set_delivered_date($delivered_date){
        $this->delivered_date = $delivered_date;
      }
      function set_nett_sale($nett_sale){
        $this->nett_sale = $nett_sale;
      }
      function set_customer_reference_1($customer_reference_1){
        $this->customer_reference_1 = $customer_reference_1;
      }
      function set_s_ref($s_ref){
        $this->s_ref = $s_ref;
      }
      function set_s_email($s_email){
        $this->s_email = $s_email;
      }
      function set_item($item){
        $this->item = $item;
      }
      function set_size($size){
        $this->size = $size;
      }
      function set_material($material){
        $this->material = $material;
      }
      function set_weigth_thickness_Capacity($weigth_thickness_Capacity){
        $this->weigth_thickness_Capacity = $weigth_thickness_Capacity;
      }
      function set_print($print){
        $this->print = $print;
      }
      function set_coverage($coverage){
        $this->coverage = $coverage;
      }
      function set_print_style($print_style){
        $this->print_style = $print_style;
      }
      function set_finish_1($finish_1){
        $this->finish_1 = $finish_1;
      }
      function set_finish_2($finish_2){
        $this->finish_2 = $finish_2;
      }
      function set_finish_3($finish_3){
        $this->finish_3 = $finish_3;
      }
      function set_service_level($service_level){
        $this->service_level = $service_level;
      }
      function set_status($status){
        $this->status = $status;
      }
      function set_notes($notes){
        $this->notes = $notes;
      }
      function set_note($note){
        $this->note = $note;
      }
      function set_company_name($company_name){
        $this->company_name = $company_name;
      }
      function set_attn($attn){
        $this->attn = $attn;
      }
      function set_tel($tel){
        $this->tel = $tel;
      }
      function set_email($email){
        $this->email = $email;
      }
      function set_delivery_address($delivery_address){
        $this->delivery_address = $delivery_address;
      }
      function set_uk_track_link($uk_track_link){
        $this->uk_track_link = $uk_track_link;
      }
      function set_delivery_image($delivery_image){
        $this->delivery_image = $delivery_image;
      }
      function set_product_image($product_image){
        $this->product_image = $product_image;
      }
      function set_not_sure($not_sure){
        $this->not_sure = $not_sure;
      }
      function set_po_received($po_received){
        $this->po_received = $po_received;
      }






       function createJob(){
         try{
           $sql = "INSERT INTO `Jobs`
            (
             `addresses`,
             `product_code`,
             `idUser`,
             `idOrder`,
             `idSuppliers`,
             `data_no`,
             `customer`,
             `print_ref`,
             `project`,
             `qty`)


             SELECT
             '$this->addresses',
             '$this->product_code',
             '$this->idUser',
             '$this->idOrder',
             '$this->idSuppliers',
             '$this->data_no',
             '$this->customer',
             '$this->print_ref',
             '$this->project',
             '$this->qty'

             WHERE NOT EXISTS (

               SELECT *
               FROM Jobs

               WHERE`product_code` = '$this->product_code'
               AND `idOrder` = '$this->idOrder'

             )
             LIMIT 1";

           $this->conn->getConnection()->exec($sql);//echo "hola2"; exit;
           $this->conn->closeConnection() ;
           return "The order has been created";
             }
         catch(PDOException $e){
             return $query . "<br>" . $e->getMessage();
           }
       }
       function verifyRepeatJob(){
         try{ //SELECT COUNT(*) FROM `Order` WHERE `id` = ''
          $sql = $this->conn->getConnection()->query("SELECT COUNT(*) FROM `Jobs` WHERE `id` = '$this->id'");
          $data = $sql->fetch(PDO::FETCH_ASSOC);
          $this->conn->closeConnection() ;
          return $data;
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
       }

       function getLastDataNo(){
         try{ //SELECT COUNT(*) FROM `Order` WHERE `id` = ''
          $sql = $this->conn->getConnection()->query("SELECT `data_no` FROM `Jobs`  ORDER BY `data_no` DESC LIMIT 1");
          $data = $sql->fetch(PDO::FETCH_ASSOC);
          $this->conn->closeConnection() ;
          return $data;
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
       }
       function getToSendPO(){
         try{ //SELECT COUNT(*) FROM `Order` WHERE `id` = ''
          $sql = $this->conn->getConnection()->query("SELECT  `Jobs`.*, `product`.`name`

              FROM `Jobs`
              JOIN `product` ON `Jobs`.`product_code` = `product`.`id`
              WHERE `idOrder` = '$this->idOrder'");
          $data = $sql->fetchAll(PDO::FETCH_ASSOC);
          $this->conn->closeConnection() ;
          return $data;
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
       }
     }





?>
