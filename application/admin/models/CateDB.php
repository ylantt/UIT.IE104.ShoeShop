<?php
class CateDB extends Database
{
     public function checkExists($cateName)
     {
          $sql = "SELECT * FROM category WHERE CategoryName = ?";

          return $this->isExists($sql, "s", [$cateName]);
     }

     function insertCate($cateName)
     {
          $sql = "INSERT INTO category (CategoryName) VALUES (?)";
          return $this->insert($sql, "s", [$cateName]);
     }

     function getCate($id = NULL)
     {
          if ($id) {
               $sql = "SELECT * FROM category WHERE CategoryID = ?;";
               return $this->get($sql, "s", [$id]); // for edit
          } else {
               $sql = "SELECT * FROM category;";
               return $this->get($sql, "s", NULL); // for show
          }
     }

     function updatecate($id, $cateName)
     {
          $sql = "UPDATE category SET Tencategory = ? WHERE CategoryID = ?";
          return $this->update($sql, "sss", [$cateName, $id]);
     }

     function deletecate($id)
     {
          $sql = "DELETE FROM category WHERE CategoryID = ?";
          return $this->delete($sql, "s", [$id]);
     }

     function getNumCate()
     {
          $sql = "SELECT * FROM category;";

          return $this->getNum($sql);
     }
}
