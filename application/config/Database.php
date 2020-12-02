<?php
class Database
{
    public $conn; // hold connection
    public $error;

    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "ie104";

    // connect to DB
    public function __construct()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password);

        // if(!$this->conn){
        //     $this->error ="Connection fail".$this->conn->connect_error;
        //    return false;
        //   }

        mysqli_select_db($this->conn, $this->dbname);
        // mysqli_query($this->con, "SET NAMES 'utf8'");  

    }

    // Select or Read data
    public function select($query)
    {
        $result = $this->conn->query($query) or
            die($this->conn->error . __LINE__);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    // Insert data
    public function insert($query)
    {
        $insert_row = $this->conn->query($query) or
            die($this->conn->error . __LINE__);
        if ($insert_row) {
            return $insert_row;
        } else {
            return false;
        }
    }

    // Update data
    public function update($query)
    {
        $update_row = $this->conn->query($query) or
            die($this->conn->error . __LINE__);
        if ($update_row) {
            return $update_row;
        } else {
            return false;
        }
    }

    // Delete data
    public function delete($query)
    {
        $delete_row = $this->conn->query($query) or
            die($this->conn->error . __LINE__);
        if ($delete_row) {
            return $delete_row;
        } else {
            return false;
        }
    }
}
