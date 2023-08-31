<?php
include_once 'config/db.php';

class User {
    public static function getAll($firstnameSearch, $lastnameSearch, $emailSearch) {
        global $pdo;

        $stmt = $pdo->prepare("SELECT * FROM users WHERE firstname LIKE ? AND lastname LIKE ? AND email LIKE ? LIMIT 200");
        $stmt->execute(['%' . $firstnameSearch . '%', '%' . $lastnameSearch . '%', '%' . $emailSearch . '%']);

        return $stmt->fetchAll();
    }

    public static function getById($id) {
        global $pdo;

        $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);

        return $stmt->fetch();
    }
    public static function update($id, $firstname, $lastname, $email) {
        global $pdo;
    
        $stmt = $pdo->prepare("UPDATE users SET firstname = ?, lastname = ?, email = ? WHERE id = ?");
        return $stmt->execute([$firstname, $lastname, $email, $id]);
    }
    
}
?>
