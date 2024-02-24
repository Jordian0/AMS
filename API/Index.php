<!-- define API endpoints for CRUD operations -->
<?php
    require_once 'config.php';

    // set the content type to JSON
    header('Content-Type: application/json');

    // handle HTTP methods
    $method = $_SERVER['REQUEST_METHOD'];
    switch($method) {
        case 'GET':
            // Read Operation
            $stmt = $pdo->query('SELCT * FROM books');
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($result);
            break;

        case 'POST':
            // Create Operation
            $data = json_decode(file_get_contents('php://input'), true);
            $title = $data['title'];
            $author = $data['author'];
            $published_at = $data['published_at'];

            $stmt = $pdo->prepare('INSERT INTO books (title, author, published_at) VALUES (?, ?, ?)');
            $stmt->execute([$title, $author, $published_at]);
            echo json_encode(['message' => 'Book added successfully']);
            break;

        case 'DELETE':
            // Delete Operation
            $id = $_GET['id'];
            $stmt = $pdo->prepare('DELETE FROM books WHERE id=?');
            $stmt->execute([$id]);

            echo json_encode(['message' => 'Book deleted successfully']);
            break;

        default:
            // Invalid method
            http_response_code(405);
            echo json_encode(['error' => 'Method not allowed']);
            break;
    }
?>
