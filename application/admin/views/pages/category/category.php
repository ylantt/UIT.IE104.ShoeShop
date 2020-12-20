<?php
// require_once("./application/views/template/modal-delete.php");

if (isset($data["status"])) {
  if ($data["status"] === "success") {
    echo '<div class="text-white p-3 bg-success">Thêm danh mục sản phẩm thành công!</div>';
  } else if ($data["status"] === "stmtfailed" || $data["status"] === "noinput") {
    echo '<div class="text-white p-3 bg-danger">Có lỗi xảy ra, vui lòng thử lại!</div>';
  }
} ?>
<div class="d-flex justify-content-between">
  <h1 class="text-primary">Categories</h1>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
  </form>
</div>

<h4 class="text-info pb-2">Add category</h4>
<form class="ml-1 cate needs-validation" action="category/adddb" method="POST" novalidate>
  <div class="form-group row">
    <label for="cateName" class="col-1">Name: </label>
    <div class="col-3">
      <input type="text" name="cateName" id="cateName" class="form-control" required>
      <div class="invalid-feedback">
        Please fill in this field!
      </div>
    </div>
    <button class="btn btn-primary col-1 submit" type="submit" style="height: 38px;">Add</button>
  </div>
</form>

<h4 class="text-info pb-2 mt-5">Category List</h4>
<table class="table table-hover" id="table">
  <tr>
    <th>ID</th>
    <th>Category Name</th>
    <th>&nbsp;</th>
  </tr>
  <?php
        foreach ($data["info"] as $row) : ?>
  <tr>
    <td><?php echo $row["CategoryID"] ?></td>
    <td><?php echo $row["CategoryName"] ?></td>
    <td><button class="btn btn-success">Edit</button> <button class="btn btn-danger ml-2 deleteBtn" id="deleteBtn" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $row['CategoryID'] ?>" data-link="category/">Delete</button></td>
  </tr>
  <?php endforeach; ?>
</table>