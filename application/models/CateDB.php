<?php
class CateDB extends Database
{
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

     function getNumCate()
     {
          $sql = "SELECT * FROM category;";

          return $this->getNum($sql);
     }
}
