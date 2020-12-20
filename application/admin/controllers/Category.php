<?php
class Category extends AdminController
{
    function __construct()
    {
        $this->cate = $this->model("catedb");
    }

    public function show($status = NULL)
    {
        $rowCate = $this->cate->getCate();
        $this->view("index", [
            "page" => "category/category",
            "status" => $status,
            "info" => $rowCate
        ]);
    }

    public function addDB()
    {
        if (isset($_POST["cateName"])) {
            $cateName = $_POST["cateName"];

            $statusCheckExists = $this->cate->checkExists($cateName);

            if ($statusCheckExists === "stmtfailed") {
                $this->show("stmtfailed");
                exit();
            } else if ($statusCheckExists !== false) {
                $this->show("catetaken");
                exit();
            } else if ($statusCheckExists === false) {
                $statusInsert = $this->cate->insertCate($cateName);
                if ($statusInsert === true) {
                    $this->show("success");
                    exit();
                } else {
                    $this->show('hi');
                    exit();
                }
            } else {
                $this->show('hu');
                exit();
            }
        } else {
            $this->show("noinput");
        }
    }
}
