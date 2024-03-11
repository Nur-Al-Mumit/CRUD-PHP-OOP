<?php

include 'db_connections.php';

class User
{
    private $connect;

    function __construct()
    {
        $this->connect =  new Database();
    }

    public function createUser($name, $dob, $mobile)
    {

        $connection = $this->connect->getConnection();
        $sql = "INSERT INTO users (name, dob, mobile) VALUES ('$name', '$dob', $mobile)";

        if ($connection->query($sql)) {
            echo "User created successfully";
        }
    }

    public function updateUser($id, $name, $dob, $mobile)
    {
        $connection = $this->connect->getConnection();
        $sql = "UPDATE users SET name = '$name', dob = '$dob', mobile = $mobile WHERE id = $id";

        if ($connection->query($sql)) {
            echo "User Info updated successfully";
        }
    }

    public function deleteUser($id)
    {
        $connection = $this->connect->getConnection();
        $sql = "DELETE FROM users WHERE id = $id";

        if ($connection->query($sql)) {
            echo "User deleted successfully";
        }
    }

    public function getUsers()
    {
        $connection = $this->connect->getConnection();
        $sql = "SELECT * FROM users";

        if ($connection->query($sql)) {
            return $connection->query($sql);
        }
    }

    public function getUser($id)
    {
        $connection = $this->connect->getConnection();

        $sql = "SELECT * FROM users WHERE id = $id";

        if ($connection->query($sql)->num_rows !== 0) {
            return $connection->query($sql)->fetch_assoc();
        }
    }
}
