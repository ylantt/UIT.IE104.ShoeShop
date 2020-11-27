<?php
class AdminController
{
     public function model($model)
     {
          require_once "./application/admin/models/" . $model . ".php";
          return new $model;
     }

     public function view($view, $data = [])
     {
          require_once "./application/admin/views/" . $view . ".php";
     }
}
