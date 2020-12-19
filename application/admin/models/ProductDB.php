<?php
class ProductDB extends Database
{
     public function checkExists($productName, $productCate)
     {
          $sql = "SELECT * FROM product WHERE ProductName = ? AND CategoryID = ?";

          return $this->isExists($sql, "ss", [$productName, $productCate]);
     }

     function insertProduct($productName, $productImage, $shortDesc, $productDesc, $price, $categoryID, $isNew, $percentSaleOff)
     {
          $sql = "INSERT INTO product (ProductName, ProductImage, ShortDesc, ProductDesc, Price, CategoryID, IsNew, PercentSaleOff) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

          return $this->insert($sql, "ssssssss", [$productName, $productImage, $shortDesc, $productDesc, $price, $categoryID, $isNew, $percentSaleOff]);
     }

     function getProduct($id = NULL)
     {
          if ($id) {
               $sql = "SELECT * FROM product WHERE ProductID = ?;";
               return $this->get($sql, "s", [$id]); // for edit
          } else {
               $sql = "SELECT * FROM product;";
               return $this->get($sql, "s", NULL); // for show
          }
     }

     function updateProduct($id, $productName)
     {
          $sql = "UPDATE product SET ProductName = ? WHERE ProductID = ?";
          return $this->update($sql, "sss", [$productName, $id]);
     }

     function deleteProduct($id)
     {
          $sql = "DELETE FROM product WHERE ProductID = ?";
          return $this->delete($sql, "s", [$id]);
     }

     function getNumProduct()
     {
          $sql = "SELECT * FROM product;";

          return $this->getNum($sql);
     }
}
