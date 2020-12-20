<?php 
require_once "./application/admin/views/template/permission.php"; 
require_once "./application/admin/views/template/header.php" 
?>
<div class="d-flex h-100">
     <div class="col-2 pl-0 h-100 w-25 fixed-top">
          <?php require_once "./application/admin/views/template/sidebar.php" ?>
     </div>
     <div class="col-12 w-100 pr-0">
          <?php require_once "./application/admin/views/template/navbar.php" ?>
          <div class="col-10 ml-auto">
               <?php
               require_once "./application/admin/views/pages/" . $data["page"] . ".php" ?>
          </div>
     </div>
</div>
<?php require_once "./application/admin/views/template/footer.php" ?>