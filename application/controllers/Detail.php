<?php
class Detail extends Controller
{
    function __construct()
    {
        $this->cate = $this->model("catedb");
        $this->product = $this->model("productdb");
    }

    public function show($id)
    {
        $rowProduct = $this->product->getProduct(NULL, $id)[0];
        $rowCate = $this->cate->getCate();
        $cateNameList = array();
        foreach ($rowCate as $row) {
            $cateNameList[$row["CategoryID"]] = $row["CategoryName"];
        }
        
        $this->view("detail", [
            "info" => $rowProduct,
            "cate" => $cateNameList
        ]);
    }
}
