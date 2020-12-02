<?php
class Login extends Controller
{
     public function show()
     {
          $user = $this->model("User");
          $test = $user->insertUser();
     }
}
