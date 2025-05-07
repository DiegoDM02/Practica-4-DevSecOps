<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/index.php';
        break;
    case '' :
        require __DIR__ . '/index.php';
        break;
    case '/about' :
        echo "<h1>Acerca de</h1><p>Esta es una app PHP simple corriendo en Docker.</p>";
        break;
    default:
        http_response_code(404);
        echo "<h1>404 - Página no encontrada</h1>";
        break;
}
?>
