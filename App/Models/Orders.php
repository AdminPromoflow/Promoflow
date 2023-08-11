<?php
    class Orders {
      private $conn;
      private $id;
      private $created_date;
      private $name;
      private $runtype;
      private $description;
      private $finished_date;
      private $workgroup;


      function __construct($conn) {
          $this->conn = $conn;
      }
      function setId($id ){
        $this->id = $id;
      }
      function setCreatedDate($created_date){
        $this->created_date = $created_date ;
      }
      function setName($name){
        $this->name = $name;
      }
      function setRuntype($runtype){
        $this->runtype = $runtype;
      }
      function setDescription($description){
        $this->description = $description;
      }
      function setFinishedDate($finished_date){
        $this->finished_date = $finished_date;
      }
      function setWorkgroup($workgroup){
        $this->workgroup = $workgroup;
      }


       function createUser(){
         try{
           $sql = "INSERT INTO `Users`(`name`, `email`, `password`, `userType`)
                 VALUES (
                   '$this->name',
                   '$this->email',
                   '$this->password',
                   '$this->userType'
                 )";
           $this->conn->conn()->exec($sql);//echo "hola2"; exit;
           $this->conn->close();
           return "The user has been created";
             }
         catch(PDOException $e){
             return $query . "<br>" . $e->getMessage();
           }
       }
     }
?>
