<?php
// models/Message.php

class Message {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function save($username, $message) {
        $stmt = $this->pdo->prepare("INSERT INTO messages (username, message) VALUES (:username, :message)");
        $result = $stmt->execute(['username' => $username, 'message' => $message]);

        if (!$result) {
            echo "Erreur lors de la sauvegarde du message."; // Message d'erreur
        }
    }

    public function getAllMessages() {
        $stmt = $this->pdo->query("SELECT * FROM messages ORDER BY created_at ASC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
