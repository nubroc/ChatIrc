<?php
// views/chat.php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Chat IRC</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .messages { border: 1px solid #ccc; padding: 10px; height: 300px; overflow-y: scroll; }
        .message { margin-bottom: 10px; }
        form { margin-top: 10px; }
    </style>
</head>
<body>
    <h1>Chat IRC</h1>
    <div class="messages">
        <?php foreach ($messages as $msg): ?>
            <div class="message"><strong><?php echo htmlspecialchars($msg['username']); ?>:</strong> <?php echo htmlspecialchars($msg['message']); ?> <em>(<?php echo $msg['created_at']; ?>)</em></div>
        <?php endforeach; ?>
    </div>
    <form action="index.php" method="post">
        <input type="text" name="username" placeholder="Votre nom" required>
        <input type="text" name="message" placeholder="Votre message" required>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
