<?php
class User extends AdminController
{
    public function show()
    {
        $this->view("index", [
            "page" => "user/user"
        ]);
    }

    public function add()
    {
        $this->view("index", [
            "page" => "user/user-add"
        ]);
    }

    public function edit()
    {
        $this->view("index", [
            "page" => "user/user-edit"
        ]);
    }
}
