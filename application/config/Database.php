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
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

        if(!$this->conn){
            die("Connection failed: " . mysqli_connect_error());
          }

        mysqli_select_db($this->conn, $this->dbname);
        // mysqli_query($this->con, "SET NAMES 'utf8'");  
    }

    public function isExists($sql, $numOfAgm, $arrAgm)
    {
        $stmt = mysqli_stmt_init($this->conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            return "stmtfailed";
        }

        mysqli_stmt_bind_param($stmt, $numOfAgm, ...$arrAgm);

        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row; // return all the data from the db if user exists
        } else {
            return false; // if user not exist
        }

        mysqli_stmt_close($stmt);
    }

    // Select or Read data
    public function get($sql, $numOfAgm, $arrAgm)
    {
        $stmt = mysqli_stmt_init($this->conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            return "stmtfailed";
        }

        if ($arrAgm) {
            mysqli_stmt_bind_param($stmt, $numOfAgm, ...$arrAgm);
        }

        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        $dataList = array();

        while ($row = mysqli_fetch_assoc($resultData)) {
            $dataList[] = $row;
        }

        mysqli_stmt_close($stmt);

        return $dataList;
    }

    // Insert data
    public function insert($sql, $numOfAgm, $arrAgm)
    {
        $stmt = mysqli_stmt_init($this->conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            return "stmtfailed";
        }

        mysqli_stmt_bind_param($stmt, $numOfAgm, ...$arrAgm);
        mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
        return true;
    }

    // Update data
    public function update($sql, $numOfAgm, $arrAgm)
    {
        $stmt = mysqli_stmt_init($this->conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            return "stmtfailed";
        }

        mysqli_stmt_bind_param($stmt, $numOfAgm, ...$arrAgm);
        mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
        return true;
    }

    // Delete data
    public function delete($sql, $numOfAgm, $arrAgm)
    {
        $stmt = mysqli_stmt_init($this->conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            return "stmtfailed";
        }

        mysqli_stmt_bind_param($stmt, $numOfAgm, ...$arrAgm);

        mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
        return true;
    }

    public function getNum($sql) {
        $stmt = mysqli_stmt_init($this->conn);

          if (!mysqli_stmt_prepare($stmt, $sql)) {
               return "stmtfailed";
          }

          mysqli_stmt_execute($stmt);

          $resultData = mysqli_stmt_get_result($stmt);

          return mysqli_num_rows($resultData);
    }
}
