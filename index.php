<?php
include_once 'controllers/UserController.php';

$controller = new UserController();

if (isset($_GET['action']) && $_GET['action'] == 'update' && isset($_GET['id'])) {
    $controller->update($_GET['id']);
} elseif (isset($_GET['action']) && $_GET['action'] == 'detail' && isset($_GET['id'])) {
    $controller->detail($_GET['id']);
} else {
    $controller->list();
}

?>
