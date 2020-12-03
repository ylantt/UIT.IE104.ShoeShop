<?php
class Product extends AdminController
{
    public function show()
    {
        $this->view("index", [
            "page" => "product/product"
        ]);
    }

    public function add()
    {
        $this->view("index", [
            "page" => "product/product-add"
        ]);
    }

    public function edit()
    {
        $this->view("index", [
            "page" => "product/product-edit"
        ]);
    }
}
