<?php
if (isset($_SESSION['userID']) == false) {
     echo "You need Sign up First!<br>";
     echo "<a href='/home'> Back to homepage</a>";
     exit();
}