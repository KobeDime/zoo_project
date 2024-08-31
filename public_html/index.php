<?php
session_start();
require_once '../db/db_connect.php';
require_once '../classes/table.php';
require_once '../functions/functions.php';

if (isset($_GET['page'])) {
    // Make sure 'page' parameter in URL matches the filename in the 'pages' directory
    $page = $_GET['page'];
    // Prevent directory traversal attacks
    if (preg_match('/^[a-zA-Z0-9_]+$/', $page)) {
        require_once '../pages/' . $page . '.php';
    } else {
        // Handle invalid page request
        require_once '../pages/home.php';
    }
} else {
    require_once '../pages/home.php';
}

$variables = [
    'title' => $title,
    'content' => $content
];

echo loadTemplate('../templates/layout.php', $variables);
