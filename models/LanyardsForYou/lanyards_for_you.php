<?php
class LanyardsForYou_Model {
  // Private variables
  private $connection;
  private $email;

  // Constructor that initializes the connection
  function __construct($connection) {
    $this->connection = $connection;
  }

  // Set email (lo dejamos si lo necesitas para pasar el valor internamente)
  public function setEmail($email) {
    $this->email = $email;
  }

  
}
?>
