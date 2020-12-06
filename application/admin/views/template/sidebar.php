<?php
$arr = ["home" => "Dashboard", "category" => "Categories", "product" => "Products", "order" => "Orders", "user" => "Users"];

$url = substr($_GET['url'], 6);
$active = $url ? $url : "home";
?>

<div class="list-group sidebar bg-dark h-100">
     <?php
     foreach ($arr as $key => $value) :
     ?>
               <a class="list-group-item list-group-item-action text-light bg-dark <?php 
               if ($active == $key) 
               {echo "active";} 
               ?>" href="<?php echo "/admin/" . $key ?>"><?php echo $value; ?></a>
     <?php
     endforeach;
     ?>
</div>