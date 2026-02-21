<?php
define('BASE_URL', '/backlit-frame');
require __DIR__ . '/../../data/catalog.php';


// GET 
$category = $_GET['category'] ?? '';
$currentPage = max(1, (int) ($_GET['page'] ?? 1));

// filtration
$items = $catalogItems;

if ($category) {
    $items = array_filter($items, function ($item) use ($category) {
        return isset($item['category']) && $item['category'] === $category;
    });
}

// pagination
$itemsPerPage = 12;

$totalItems = count($items);
$totalPages = max(1, ceil($totalItems / $itemsPerPage));

$currentPage = min($currentPage, $totalPages);

$offset = ($currentPage - 1) * $itemsPerPage;
$paginatedItems = array_slice($items, $offset, $itemsPerPage);
