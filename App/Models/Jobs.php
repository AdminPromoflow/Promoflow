<?php
    class Jobs {
      private $conn;



      function __construct($conn) {
          $this->conn = $conn;
      }
      function setId($id ){
        $this->id = $id;
      }



       function createJob(){
         try{
           $sql = "INSERT INTO `Order`(`id`, `created_date`, `name`, `runtype`, `description`, `finished_date`, `workgroup`)
            VALUES (
              '$this->id',
              '$this->created_date',
              '$this->name',
              '$this->runtype',
              '$this->description',
              '$this->finished_date',
              '$this->workgroup'
            )";
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
