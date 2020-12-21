<?php
class Product extends AdminController
{
    function __construct()
    {
        $this->cate = $this->model("catedb");
        $this->product = $this->model("productdb");
    }

    public function show()
    {
        $rowProduct = $this->product->getProduct();
        $rowCate = $this->cate->getCate();
        $cateNameList = array();
        foreach ($rowCate as $row) {
            $cateNameList[$row["CategoryID"]] = $row["CategoryName"];
        }

        $this->view("index", [
            "page" => "product/product",
            "info" => $rowProduct,
            "cate" => $cateNameList
        ]);
    }

    public function add($status = NULL)
    {
        $rowCate = $this->cate->getCate();
        $this->view("index", [
            "page" => "product/product-add",
            "cate" => $rowCate,
            "status" => $status
        ]);
    }

    public function edit($id)
    {
        $this->view("index", [
            "page" => "product/product-edit",
            "id" => $id,
        ]);
    }

    public function insertData()
    {
        if (isset($_POST["submit"])) {
            if (isset($_POST["productName"]) && isset($_FILES["productImg"]) && isset($_POST["productDesc"]) && isset($_POST["productShortDesc"]) && isset($_POST["productPrice"]) && isset($_POST["productCate"]) && isset($_POST["pIsNew"]) && isset($_POST["pSaleOff"]) && isset($_POST["quantity"])) {
                $productName = $_POST["productName"];
                $productDesc = $_POST["productDesc"];
                $productShortDesc = $_POST["productShortDesc"];
                $productPrice = $_POST["productPrice"];
                $productCate = $_POST["productCate"];
                $pIsNew = $_POST["pIsNew"];
                $pSaleOff = $_POST["pSaleOff"];
                $quantity = $_POST["quantity"];

                $file = $_FILES["productImg"];
                $fileName = $file["name"];
                $fileType = $file["type"];
                $fileTempName = $file["tmp_name"];
                $fileError = $file["error"];
                $fileSize = $file["size"];

                $fileExt = explode(".", $fileName);
                $fileActualExt = strtolower(end($fileExt));

                $allowed = array("jpg", "jpeg", "png");

                if (in_array($fileActualExt, $allowed)) {
                    if ($fileError === 0) { // no error => every thing is fine
                        if ($fileSize < 2000000) { // 2000000kb = 2000mb
                            $imageFullName = uniqid("image_", true) . "." . $fileActualExt; // create a random ID => image in db not have the same name => it not be overried
                            $fileDestination = "public/uploads/" . $imageFullName;
                            // before upload the file to server, check if we can actually upload data into db
                            $statusCheckExists = $this->product->checkExists($productName, $productCate);

                            if ($statusCheckExists === "stmtfailed") {
                                $this->add("stmtfailed");
                                exit();
                            } else if ($statusCheckExists !== false) {
                                $this->add("producttaken");
                                exit();
                            } else if ($statusCheckExists === false) {
                                $statusInsert = $this->product->insertproduct($productName, $imageFullName, $productShortDesc, $productDesc, $productPrice, $productCate, $pIsNew, $pSaleOff, $quantity);
                                
                                move_uploaded_file($fileTempName, $fileDestination);

                                if ($statusInsert === true) {
                                    $this->add("success");
                                    exit();
                                } else {
                                    $this->add('false');
                                    exit();
                                }
                            } else {
                                $this->add('hu');
                                exit();
                            }
                        } else {
                            $this->add('sizebig');
                            exit();
                        }
                    } else {
                        $this->add('error');
                        exit();
                    }
                } else {
                    $this->add('falsetype');
                    exit();
                }
            } else {
                $this->add("noinput");
            }
        }
    }
}
