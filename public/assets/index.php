<?php
define('BASE_URL', '/murumba/public');

$request = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// remove project folder & public from URL
$request = str_replace(['murumba/public', 'murumba'], '', $request);
$request = trim($request, '/');

switch ($request) {
    case '':
        require '../app/views/home.php';
        break;

    case 'about':
        require '../app/views/about.php';
        break;
    case 'contact':
        require '../app/views/contact.php';
        break;
    case 'admission':
        require '../app/views/admission.php';
        break;

    default:
        http_response_code(404);
        echo "Page not found";
}
