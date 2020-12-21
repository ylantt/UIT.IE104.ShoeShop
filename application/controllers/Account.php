<?php
class Account extends Controller
{
     function __construct()
     {
          $this->user = $this->model("user");
     }

     public function show($id, $status = NULL)
     {
          $rowUser = $this->user->getUser($id)[0];

          $this->view("account", [
               "info" => $rowUser,
               "status" => $status
          ]);
     }

     public function updateDB($id)
     {
          $Username = $_POST["Username"];
          $FullName = isset($_POST["FullName"]) ? $_POST["FullName"] : '';
          $PhoneNum = isset($_POST["PhoneNum"]) ? $_POST["PhoneNum"] : '';
          $Email = isset($_POST["Email"]) ? $_POST["Email"] : '';
          $AddrInfo = isset($_POST["AddrInfo"]) ? $_POST["AddrInfo"] : '';
          $statusCheckExists = false;

          if ($Email != $_POST["oEmail"]) {
               $statusCheckExists = $this->user->checkUserExists(NULL, $Email);
          }

          if ($statusCheckExists === "stmtfailed") {
               $this->show($id, "stmtfailed");
               header("location: /account/" + $id);
               exit();
          } else if ($statusCheckExists !== false) {
               $this->show($id, "usertaken");
               header("location: /account/" + $id);
               exit();
          } else if ($statusCheckExists === false) {
               $statusUpdate = $this->user->updateUser($id, $FullName, $PhoneNum, $Email, $AddrInfo);
               if ($statusUpdate === true) {
                    $this->show($id, "success");
                    header("location: /account/" + $id);
                    exit();
               }
          }
     }
}
