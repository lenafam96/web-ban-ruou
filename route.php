<?php

require 'controllers/ProductController.php';
require 'controllers/HomeController.php';
require_once 'controllers/Session.php';

$action = $_GET['action'] ?? 'home';
$category = $_GET['category'] ?? '';
$sort = $_POST['sort'] ?? '';
switch ($action) {
    case 'home':
        (new HomeController())->index($category, $sort);
        break;
    case 'login':
        (new HomeController())->login();
        break;
    case 'verification':
        (new HomeController())->verification();
        break;
    case 'logout':
        (new HomeController())->logout();
        break;
    case 'index':
    case 'create':
    case 'store':
    case 'edit':
    case 'update':
    case 'delete':
        (new ProductController())->check($action);
        break;
}
