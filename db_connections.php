<?php 


class Database
{
    private $server_name = 'localhost';
    private $user_name = 'root';
    private $password = 'dbrt5';
    private $db_name = 'crud_db';
    private $conn;

    function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $this->conn = new mysqli(
            $this->server_name,
            $this->user_name,
            $this->password,
            $this->db_name

        );

        if ($this->conn->connect_error) {
            die('faild');
        }
        // echo "Alhamdulillah";
    }

    public function getConnection()
    {
        return $this->conn;
    }
}

