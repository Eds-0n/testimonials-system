<?php
header('Content-Type: application/json');
require '../includes/functions.php';

$data = json_decode(file_get_contents('php://input'), true);

if (!containsBadWords($data['message'])) {
    $stmt = $pdo->prepare("INSERT INTO testimonials (name, company, email, message, rating) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([
        $data['name'],
        $data['company'],
        $data['email'],
        $data['message'],
        $data['rating']
    ]);
    echo json_encode(['success' => true]);
} else {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Conteúdo inadequado']);
}
?>