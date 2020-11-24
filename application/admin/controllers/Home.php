<?php
class Home extends AdminController
{
    public function show()
    {
        $this->view("index", [
            "page" => "dashboard"
        ]);
    }
}
