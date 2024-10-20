<?php
// controllers/ChatController.php

require_once '../config/config.php';
require_once '../models/Message.php';

class ChatController {
    private $messageModel;

    public function __construct($pdo) {
        $this->messageModel = new Message($pdo);
    }

    public function index() {
        $messages = $this->messageModel->getAllMessages();
        include '../views/chat.php';
    }

    public function sendMessage($username, $message) {
        if (!empty($username) && !empty($message)) {
            $this->messageModel->save($username, $message);
            header('Location: index.php'); // Rediriger après l'envoi
            exit();
        } else {
            echo "Nom d'utilisateur ou message vide."; // Message d'erreur
        }
    }
}
?>
