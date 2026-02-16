<?php
define('BASE_URL', '/backlit-frame');
require __DIR__ . '/../../data/catalog.php';


// GET 
$category = $_GET['category'] ?? '';
$currentPage = max(1, (int) ($_GET['page'] ?? 1));
$search = trim($_GET['q'] ?? '');

// filtration
$items = $catalogItems;

if ($category) {
    $items = array_filter($items, function ($item) use ($category) {
        return isset($item['category']) && $item['category'] === $category;
    });
}

// search
// if ($search !== '') {
//     $items = array_filter($items, function ($item) use ($search) {
//         $inTitle = isset($item['title']) && stripos($item['title'], $search) !== false;
//         $inDesc = isset($item['description']) && stripos($item['description'], $search) !== false;
//         return $inTitle || $inDesc;
//     });
// }

// pagination
$itemsPerPage = 12;

$totalItems = count($items);
$totalPages = max(1, ceil($totalItems / $itemsPerPage));

$currentPage = min($currentPage, $totalPages);

$offset = ($currentPage - 1) * $itemsPerPage;
$paginatedItems = array_slice($items, $offset, $itemsPerPage);
