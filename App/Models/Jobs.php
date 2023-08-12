<?php
    class Jobs {
      private $conn;
      private $id;
      private $status;
      private $customer;
      private $contact;
      private $quantity_allocated;
      private $quantity_printed;
      private $quantity_despatched;
      private $total_transfer;
      private $total_selling;
      private $total;
      private $product_code;
      private $client_reference;
      private $total_prcost;
      private $title;
      private $category;
      private $quantity;
      private $auto081;
      private $service;
      private $supplier_reference;
      private $reprintof;
      private $reprintas;
      private $reorderof;
      private $reorderas;
      private $product_name;
      private $spec;
      private $turnaround;
      private $schedule;
      private $weight;
      private $status_text;
      private $status_note;
      private $height;
      private $width;
      private $bleed;
      private $reseller_workgroup;
      private $reseller_details;
      private $product_spec;
      private $product_design;
      private $product_special;
      private $product_partner_code;
      private $prod_workgroup;
      private $multifile;
      private $expected_despatch_date;
      private $front_filename;
      private $reverse_filename;
      private $fee_charged_on_job;
      private $pages;
      private $despatches;
      private $addresses;
      private $revenue;
      private $notes;
      private $finishes;
      private $orientation;
      private $order_code;
      private $package_code;
      private $jobmaker_pack;
      private $file_paths;
      private $reverse;


      function __construct($conn) {
          $this->conn = $conn;
      }
      function setId($id){
        $this->id = $id;
      }
      function setStatus($status){
        $this->status = $status;
      }
      function setCustomer($customer){
        $this->customer = $customer;
      }
      function setContact($contact){
        $this->contact = $contact;
      }
      function setQuantityAllocated($quantity_allocated){
        $this->quantity_allocated = $quantity_allocated;
      }
      function setQuantityPrinted($quantity_printed){
        $this->quantity_printed = $quantity_printed;
      }
      function setQuantityDespatched($quantity_despatched){
        $this->quantity_despatched = $quantity_despatched;
      }
      function setTotalTransfer($total_transfer){
        $this->total_transfer = $total_transfer;
      }
      function setTotalSelling($total_selling){
        $this->total_selling = $total_selling;
      }
      function setTotal($total){
        $this->total = $total;
      }
      function setProductCode($product_code){
        $this->product_code = $product_code;
      }
      function setClientReference($client_reference){
        $this->client_reference = $client_reference;
      }
      function setTotalPrcost($total_prcost){
        $this->total_prcost = $total_prcost;
      }
      function setTitle($title){
        $this->title = $title;
      }
      function setCategory($category){
        $this->category = $category;
      }
      function setQuantity($quantity){
        $this->quantity = $quantity;
      }
      function setAuto081($auto081){
        $this->auto081 = $auto081;
      }
      function setService($service){
        $this->service = $service ;
      }
      function setSupplierReference($supplier_reference){
        $this->supplier_reference = $supplier_reference;
      }
      function setReprintof($reprintof){
        $this->reprintof = $reprintof;
      }
      function setReprintas($reprintas){
        $this->reprintas = $reprintas;
      }
      function setReorderof($reorderof){
        $this->reorderof = $reorderof;
      }
      function setReorderas($reorderas){
        $this->reorderas = $reorderas;
      }
      function setProductName($product_name){
        $this->product_name = $product_name;
      }
      function setSpec($spec){
        $this->spec = $spec;
      }
      function setTurnaround($turnaround){
        $this->turnaround = $turnaround;
      }
      function setSchedule($schedule){
        $this->schedule = $schedule;
      }
      function setWeight($weight){
        $this->weight = $weight;
      }
      function setStatusText($status_text){
        $this->status_text = $status_text;
      }
      function setStatusNote($status_note){
        $this->status_note = $status_note;
      }
      function setHeight($height){
        $this->height = $height;
      }
      function setWidth($width){
        $this->width = $width;
      }
      function setBleed($bleed){
        $this->bleed = $bleed;
      }
      function setResellerWorkgroup($reseller_workgroup){
        $this->reseller_workgroup = $reseller_workgroup;
      }
      function setResellerDetails($reseller_details){
        $this->reseller_details = $reseller_details;
      }
      function setProductSpec($product_spec){
        $this->product_spec = $product_spec;
      }
      function setProductDesign($product_design){
        $this->product_design = $product_design;
      }
      function setProductSpecial($product_special){
        $this->product_special = $product_special;
      }
      function setProductPartnerCode($product_partner_code){
        $this->product_partner_code = $product_partner_code;
      }
      function setProdWorkgroup($prod_workgroup){
        $this->prod_workgroup = $prod_workgroup;
      }
      function setMultifile($multifile){
        $this->multifile = $multifile;
      }
      function setExpectedDespatchDate($expected_despatch_date){
        $this->expected_despatch_date = $expected_despatch_date;
      }
      function setFrontFilename($front_filename){
        $this->front_filename = $front_filename;
      }
      function setReverseFilename($reverse_filename){
        $this->reverse_filename = $reverse_filename;
      }
      function setFeeChargedOnJob($fee_charged_on_job){
        $this->fee_charged_on_job = $fee_charged_on_job;
      }
      function setPages($pages){
        $this->pages = $pages;
      }
      function setDespatches($despatches){
        $this->despatches = $despatches;
      }
      function setAddresses($addresses){
        $this->addresses = $addresses;
      }
      function setRevenue($revenue){
        $this->revenue = $revenue;
      }
      function setNotes($notes){
        $this->notes = $notes;
      }
      function setFinishes($finishes){
        $this->finishes = $finishes;
      }
      function setOrientation($orientation){
        $this->orientation = $orientation;
      }
      function setOrderCode($order_code){
        $this->order_code = $order_code;
      }
      function setPackageCode($package_code){
        $this->package_code = $package_code;
      }
      function setJobmakerPack($jobmaker_pack){
        $this->jobmaker_pack = $jobmaker_pack;
      }
      function setFilePaths($file_paths){
        $this->file_paths = $file_paths;
      }
      function setReverse($reverse){
        $this->reverse = $reverse;
      }



       function createJob(){
         try{
           $sql = "INSERT INTO `Jobs`(`id`, `status`, `customer`, `cotact`,
              `quantity_allocated`, `quantity_printed`, `quantity_despatched`,
              `total_transfer`, `total_selling`, `total`, `product_code`,
              `client_reference`, `total_prcost`, `title`, `category`, `quantity`,
              `auto081`, `service`, `supplier_reference`, `reprintof`,
             `reprintas`, `reorderof`, `reorderas`, `product_name`, `spec`,
             `turnaround`, `schedule`, `weight`, `status_text`, `status_note`,
            `height`, `width`, `bleed`, `reseller_workgroup`, `reseller_details`,
            `product_spec`, `product_design`, `product_special`,
            `product_partner_code`, `prod_workgroup`, `complete`, `multifile`,
            `expected_despatch_date`, `front_filename`, `reverse_filename`,
            `fee_charged_on_job`, `pages`, `despatches`, `addresses`,
                    `revenue`, `notes`, `finishes`, `orientation`, `order_code`,
                    `package_code`, `jobmaker_pack`, `file_paths`, `data_no`,
                     `print_ref`, `project`, `PO_sent`, `approval_sent`, `C_due_date`,
                      `artwork_pre_approved`, `C_artwork`, `C_artwork_visual`,
                      `C_approved_PDF`, `C_approved_visual`, `box_no`,
                       `act_despatch_date`, `UK_tracking_no`, `delivered_date`,
                        `nett_sale`, `service_level`, `status_order`, `note`,
                        `UK_track_link`, `delivery_image`, `not_sure`, `PO_received`,
                         `idUser`) VALUES (
                           '','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',']','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')";
           $this->conn->conn()->exec($sql);//echo "hola2"; exit;
           $this->conn->close();
           return "The order has been created";
             }
         catch(PDOException $e){
             return $query . "<br>" . $e->getMessage();
           }
       }
       function verifyRepeatJob(){
         try{ //SELECT COUNT(*) FROM `Order` WHERE `id` = ''
          $sql = $this->conn->conn()->query("SELECT COUNT(*) FROM `Order` WHERE `id` = '$this->id'");
          $data = $sql->fetch(PDO::FETCH_ASSOC);
          $this->conn->close();
          return $data;
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
       }
     }
?>
