<?php
include_once 'config/Database.php';  // Assurez-vous que ce chemin est correct.

class User {
    public static function getAll($firstnameSearch, $lastnameSearch, $emailSearch) {
        $connection = Database::getInstance()->getConnection();

        $stmt = $connection->prepare("SELECT * FROM users WHERE firstname LIKE ? AND lastname LIKE ? AND email LIKE ? LIMIT 200");
        $stmt->execute(['%' . $firstnameSearch . '%', '%' . $lastnameSearch . '%', '%' . $emailSearch . '%']);

        return $stmt->fetchAll();
    }

    public static function getById($id) {
        $connection = Database::getInstance()->getConnection();

        $stmt = $connection->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    public static function update($id, $firstname, $lastname, $email) {
        $connection = Database::getInstance()->getConnection();
    
        $stmt = $connection->prepare("UPDATE users SET firstname = ?, lastname = ?, email = ? WHERE id = ?");
        return $stmt->execute([$firstname, $lastname, $email, $id]);
    }

    public static function create($firstname, $lastname, $email) {
        $connection = Database::getInstance()->getConnection();
    
        $stmt = $connection->prepare("INSERT INTO users (firstname, lastname, email) VALUES (:firstname, :lastname, :email)");
        $stmt->execute(['firstname' => $firstname, 'lastname' => $lastname, 'email' => $email]);
    
        return $connection->lastInsertId();
    }
}
?>
