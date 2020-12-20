<?php
class ProductDB extends Database
{
     function getProduct($num = NULL, $id = NULL)
     {
          if ($id) {
               $sql = "SELECT * FROM product WHERE ProductID = ?;";
               return $this->get($sql, "s", [$id]); // for edit
          } else {
               if ($num) {
                    $sql = "SELECT * FROM product LIMIT $num;";
               } else {
                    $sql = "SELECT * FROM product;";
               }
               return $this->get($sql, "s", NULL); // for show
          }
     }

     function getNumProduct()
     {
          $sql = "SELECT * FROM product;";

          return $this->getNum($sql);
     }
}
