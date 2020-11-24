<?php
class Category extends AdminController
{
    public function show()
    {
        $this->view("index", [
            "page" => "category/category"
        ]);
    }
}
