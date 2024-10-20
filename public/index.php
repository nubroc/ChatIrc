<?php
// public/index.php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../config/config.php';
require_once '../controllers/ChatController.php';

$controller = new ChatController($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifiez les données POST
    var_dump($_POST); // Pour déboguer et voir les données reçues

    if (isset($_POST['username']) && isset($_POST['message'])) {
        $username = htmlspecialchars($_POST['username']);
        $message = htmlspecialchars($_POST['message']);
        
        // Envoyez le message au contrôleur
        $controller->sendMessage($username, $message);
    } else {
        echo "Nom d'utilisateur ou message manquant."; // Message d'erreur
    }
} else {
    $controller->index();
}
?>
