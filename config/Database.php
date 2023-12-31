<?php

include_once 'config/db.php';

class Database {
    private static $instance = null;
    private $connection;

    private function __construct() {
        try {
            $this->connection = new PDO(DB_DSN, DB_USER, DB_PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion: " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }

    // Empêcher le clonage pour s'assurer qu'on ne peut pas cloner l'instance
    private function __clone() { }

    // Empêcher la désérialisation pour éviter la création de multiples instances
    public function __wakeup() {
        throw new \Exception("Cannot unserialize a singleton.");
    }
    
}

?>
