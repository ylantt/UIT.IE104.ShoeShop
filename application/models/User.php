<?php
class User extends Database
{
     public function checkUserExists($username, $email) {
          $sql = "SELECT * FROM user WHERE Username = ? OR Email = ?;";
          $stmt = mysqli_stmt_init($this->conn);

          // some people type code into the form => we have to create repare statement to make sure it run into the db without any input from user and later on, we add the input from the user to run them seperately that will prevent any sort of code to get injected into our database
          if (!mysqli_stmt_prepare($stmt, $sql)) {
               return "stmtfailed";
          }

          mysqli_stmt_bind_param($stmt, "ss", $username, $email);

          mysqli_stmt_execute($stmt);

          $resultData = mysqli_stmt_get_result($stmt);

          if ($row = mysqli_fetch_assoc($resultData)) {
               return $row; // return all the data from the db if user exists
          } else {
               return false; // if user not exist
          }

          mysqli_stmt_close($stmt);
     }

     function insertUser($username, $email, $password) {
          $sql = "INSERT INTO user (Username, Email, UserPwd, UserRole) VALUES (?, ?, ?, 0)";
          $stmt = mysqli_stmt_init($this->conn);

          if (!mysqli_stmt_prepare($stmt, $sql)) {
               return "stmtfailed";
          }

          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
          mysqli_stmt_execute($stmt);

          mysqli_stmt_close($stmt);
          return true;
     }
}
