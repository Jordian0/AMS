<?php
require_once 'config.php';

// Set the content type to JSON
header('Content-Type: application/json');

// Handle HTTP methods
$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case 'GET':
        // Read Operation
        $table = $_GET['mca_ai']; // Assuming the table name is provided as a query parameter
        $stmt = $pdo->query("SELECT * FROM `$table`");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
        break;

    case 'POST':
        // Create Operation
        $data = json_decode(file_get_contents('php://input'), true);
        $name = $data['name'];
        $enrollNo = $data['enrollNo'];
        $selected_table = $data['course-select'];

        $stmt = $pdo->prepare("INSERT INTO `$selected_table` (name, stid) VALUES (?, ?)");
        $stmt->execute([$name, $enrollNo]);
        echo json_encode(['message' => 'Record added successfully']);
        break;

    case 'DELETE':
        // Delete Operation
        $id = $_GET['id'];
        // Assuming the ID parameter is provided as a query parameter
        $stmt = $pdo->prepare('DELETE FROM books WHERE id=?');
        $stmt->execute([$id]);

        echo json_encode(['message' => 'Record deleted successfully']);
        break;

    default:
        // Invalid method
        http_response_code(405);
        echo json_encode(['error' => 'Method not allowed']);
        break;
}
?>
