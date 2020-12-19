<?php
class Home extends Controller
{
    function __construct()
    {
        $this->cate = $this->model("catedb");
        $this->product = $this->model("productdb");
    }

    public function show()
    {
        $rowProduct = $this->product->getProduct(8);
        $rowCate = $this->cate->getCate();
        $cateNameList = array();
        foreach ($rowCate as $row) {
            $cateNameList[$row["CategoryID"]] = $row["CategoryName"];
        }

        $this->view("home", [
            "info" => $rowProduct,
            "cate" => $cateNameList
        ]);
    }
}
