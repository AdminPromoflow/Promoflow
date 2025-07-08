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
  public function getAllOrders() {
      try {
          // Preparar la consulta SQL
          $sql = $this->connection->getConnection()->prepare("SELECT * FROM `Orders`");

          // Ejecutar la consulta
          $sql->execute();

          // Obtener todos los resultados como un arreglo asociativo
          $orders = $sql->fetchAll(PDO::FETCH_ASSOC);

          // Cerrar la conexión
          $this->connection->closeConnection();

          // Retornar los datos
          return $orders;

      } catch (PDOException $e) {
          // Manejar errores
          echo "Error fetching orders: " . $e->getMessage();
          throw new Exception("Error retrieving orders from the database.");
      }
  }


}
?>
