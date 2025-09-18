<?php
include "db_connection.php";

class Contact {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function insertMessage($data) {
        $sql = "INSERT INTO contact_tb (user_name, user_email, subject, message) 
                VALUES (:name, :email, :subject, :message)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":name", $data['name']);
        $stmt->bindParam(":email", $data['email']);
        $stmt->bindParam(":subject", $data['subject']);
        $stmt->bindParam(":message", $data['message']);
        return $stmt->execute();
    }

    public function getMessages() {
        $sql = "SELECT * FROM contact_tb ORDER BY id DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
