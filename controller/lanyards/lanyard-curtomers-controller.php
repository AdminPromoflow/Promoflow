<?php
// Start the session
session_start();

class LanyardCustomersApiHandler {
    // Function to handle incoming requests
    public function handleRequest() {
        // Check if the request is POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get raw JSON data from the request body
            $rawData = file_get_contents("php://input");

            // Decode the JSON data
            $data = json_decode($rawData);

            // Check if JSON data is valid and contains an "action" field
            if ($data !== null && isset($data->action)) {
                // Get the action from the JSON data
                $action = $data->action;

                // Perform actions based on the request
                switch ($action) {
                    case "getAllLanyardCustomers":
                        $this->handleGetAllLanyardCustomers($data);
                        break;
                    default:
                        // Unknown action
                        http_response_code(400); // Bad Request
                        $response = array("message" => "Unknown action");
                        echo json_encode($response);
                        break;
                }
            } else {
                // Incomplete JSON data or missing action
                http_response_code(400); // Bad Request
                echo json_encode(array("message" => "Incomplete JSON data or missing action"));
            }
        } else {
            // The request is not a valid POST request
            http_response_code(405); // Method Not Allowed
            echo json_encode(array("message" => "Method not allowed"));
        }
    }

    // Function to handle user login
    private function handleGetAllLanyardCustomers($data) {
      echo ($rawData);  exit;

        // Logic to process user login
        // Create a database connection
        $connection = new Database();

        // Create a new Users instance and set user data
        $user = new Users($connection);

        // Check if $data is an object and if it contains the "email" property
        if (is_object($data) && property_exists($data, 'email')) {
            $user->setEmail($data->email);
        }
        else {
            // If the "email" property is missing in $data
            $response = array("message" => "Invalid data for login");
            echo json_encode($response);
        }
    }
}

// Include required files
//require_once '../config/database.php';
//require_once '../config/security.php';
//require_once '../models/users.php';

// Create an instance of the ApiHandler class and handle the request
$lanyardCustomersApiHandler = new LanyardCustomersApiHandler();
$lanyardCustomersApiHandler->handleRequest();
?>
