<?php
class Order extends AdminController
{
    public function show()
    {
        $this->view("index", [
            "page" => "order/order"
        ]);
    }

    public function add()
    {
        $this->view("index", [
            "page" => "order/order-add"
        ]);
    }

    public function edit()
    {
        $this->view("index", [
            "page" => "order/order-edit"
        ]);
    }
}
