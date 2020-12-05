<?php
// require_once "../includes/functions.inc.php";

class Register extends Controller
{
     public function __construct()
     {
          $this->user = $this->model("User");
     }

     public function show()
     {
     }

     public function checkUserExists()
     {
          $_POST = json_decode(file_get_contents('php://input'), true);

          if (isset($_POST["username"]) && isset($_POST["email"])) {
               $email = $_POST["email"];
               $username = $_POST["username"];

               $status = $this->user->checkUserExists($username, $email);

               if ($status === "stmtfailed") {
                    echo "error";
               } else if ($status !== false) {
                    echo "usernametaken";
               }
          } else {
               echo "error";
          }
     }

     public function insertUser()
     {
          $_POST = json_decode(file_get_contents('php://input'), true);

          if (isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"])) {
               $email = $_POST["email"];
               $username = $_POST["username"];
               $password = $_POST["password"];

               $statusInsert = $this->user->insertUser($username, $email, $password);

               if ($statusInsert === "stmtfailed") {
                    echo "error";
               } else if ($statusInsert === true) {
                    echo "success";
               } else {
                    echo "error";
               }
          } else {
               echo "error";
          }
     }
}
