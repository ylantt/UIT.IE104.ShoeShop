<?php
if (isset($_SESSION['userID']) == false) {
     echo "You need Sign up First!<br>";
     echo "<a href='/home'> Back to homepage</a>";
     exit();
} else {
     if (isset($_SESSION['Role'])) {
          $permission = $_SESSION['Role'];
          if ($permission != 1) {
               echo "Don't have Permission to access this page<br>";
               echo "<a href='/home'> Back to homepage</a>";
               exit();
          }
     }
}
