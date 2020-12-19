<?php
if (isset($data["status"])) {
  if ($data["status"] === "success") {
    echo '<div class="text-white p-3 bg-success">Add product successfully!</div>';
  } else {
    echo '<div class="text-white p-3 bg-danger">Something went wrong! Please try again</div>';
  } 
} ?>

<div class="d-flex justify-content-between  pt-3">
  <h1 class="text-primary text-uppercase">
    Add product
  </h1>
</div>
<hr>
<div class="ml-3">
  <form enctype="multipart/form-data" class="needs-validation" action="product/insertData" method="POST" novalidate>
    <div class="form-group row">
      <label for="productName" class="col-sm-2">Product Name</label>
      <div class="col-sm-5">
        <input type="text" name="productName" id="productName" class="form-control" required>
        <div class="invalid-feedback">
          Please fill in this field!
        </div>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-2">
        <label for="productImg">Image</label>
      </div>
      <div class="col-sm-5">
        <input type="file" class="form-control-file" id="productImg" name="productImg" required>
        <div class="invalid-feedback">
          Please fill in this field!
        </div>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-2">
        <label for="productDesc">Description:</label>
      </div>
      <div class="col-sm-5">
        <textarea class="form-control" id="productDesc" rows="3" name="productDesc" required></textarea>
        <div class="invalid-feedback">
          Please fill in this field!
        </div>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-2">
        <label for="productShortDesc">Short Description:</label>
      </div>
      <div class="col-sm-5">
        <textarea class="form-control" id="productShortDesc" rows="3" maxlength="250" name="productShortDesc" required></textarea>
        <div class="invalid-feedback">
          Please fill in this field!
        </div>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-2">
        <label class="productPrice">Price:</label>
      </div>
      <div class="col-sm-5">
        <input type="number" class="form-control" id="productPrice" name="productPrice" required>
        <div class="invalid-feedback">
          Please fill in this field!
        </div>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-2">
        <label for="productCate">Category:</label>
      </div>
      <div class="col-sm-2">
        <select name="productCate" id="productCate" class="form-control" required>
          <?php foreach ($data["cate"] as $row) : ?>
            <option value="<?= $row["CategoryID"]; ?>"><?= $row["CategoryName"]; ?></option>
          <?php endforeach; ?>
        </select>
        <div class="invalid-feedback">
          Please fill in this field!
        </div>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-2">
        <p>IsNew:</p>
      </div>
      <div class="col-sm-2">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="pIsNew" id="true" value="1">
          <label class="form-check-label" for="true">True</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="pIsNew" id="false" value="0" checked>
          <label class="form-check-label" for="false">False</label>
        </div>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-2">
        <label for="pSaleOff">Percent Sale off:</label>
      </div>
      <div class="col-sm-2">
        <input type="number" value="0" class="form-control" id="pSaleOff" name="pSaleOff" required>
        <div class="invalid-feedback">
          Please fill in this field!
        </div>
      </div>
    </div>
    <button class="btn btn-success pt-2 md-2 mb-5 submit" type="submit" name="submit">Add</button>
  </form>
</div>