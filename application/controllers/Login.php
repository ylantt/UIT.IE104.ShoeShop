<?php
class Login extends Controller
{
     public function __construct()
     {
          $this->user = $this->model("User");
     }

     public function show()
     {
     }

     public function loginUser() {
          $this->checkUserExists();
     }

     public function checkUserExists()
     {
          $_POST = json_decode(file_get_contents('php://input'), true);

          if (isset($_POST["name"]) && isset($_POST["password"])) {
               $password = $_POST["password"];
               $name = $_POST["name"];

               $status = $this->user->checkUserExists($password, $name);

               if ($status === false) { // not exsist
                    echo "wronglogin";
               } else {
                    $pwdHashed = $status["UserPwd"];
                    $checkPwd = password_verify($password, $pwdHashed);
     
                    if ($checkPwd === false) { // if password not match
                         echo "wronglogin";
                    } else if ($checkPwd === true) {
                         session_start();
                         $_SESSION["userID"] = $status["UserID"];
                         $_SESSION["userName"] = $status["Username"];
                         $_SESSION["Role"] = $status["UserRole"];
                    }
               }
          } else {
               echo "error";
          }
     }

     public function logout() {
          session_unset();
          session_destroy();
          header("location: ../home");
     }
}
