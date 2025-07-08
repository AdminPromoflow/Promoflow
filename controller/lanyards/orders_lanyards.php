<?php
// Start the session
session_start();

class OrdersLanyardsForYou {
    // Function to handle incoming requests
    public function handleRequest() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $rawData = file_get_contents("php://input");
            $data = json_decode($rawData);

            if ($data !== null && isset($data->action)) {
                $action = $data->action;

                switch ($action) {
                    case "getOrdersInfo":
                      echo json_encode("hahah");
                        $this->getOrdersInfo($data);
                        break;
                    default:
                        http_response_code(400);
                        echo json_encode(["message" => "Unknown action"]);
                        break;
                }
            } else {
                http_response_code(400);
                echo json_encode(["message" => "Incomplete JSON data or missing action"]);
            }
        } else {
            http_response_code(405);
            echo json_encode(["message" => "Method not allowed"]);
        }
    }

    private function getOrdersInfo($data) {
        // Aquí puedes reemplazar con lógica real de base de datos
        $sampleOrders = [
            [
                "idOrder" => 101,
                "customerName" => "John Doe",
                "total" => 49.99,
                "status" => "Shipped"
            ],
            [
                "idOrder" => 102,
                "customerName" => "Jane Smith",
                "total" => 29.50,
                "status" => "Processing"
            ]
        ];

        echo json_encode([
            "success" => true,
            "orders" => $sampleOrders
        ]);
    }
}

// Instanciar y manejar la solicitud
$ordersLanyards = new OrdersLanyardsForYou();
$ordersLanyards->handleRequest();
?>
