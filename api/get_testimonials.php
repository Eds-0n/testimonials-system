<?php
header('Content-Type: application/json');
require '../includes/functions.php';

$page = $_GET['page'] ?? 1;
$perPage = 10;

$testimonials = getTestimonials($page, $perPage);
$total = getTotalTestimonials();
$totalPages = ceil($total / $perPage);

echo json_encode([
    'testimonials' => $testimonials,
    'totalPages' => $totalPages
]);
?>