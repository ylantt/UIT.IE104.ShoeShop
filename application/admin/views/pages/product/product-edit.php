<div class="d-flex justify-content-between  pt-3">
<h1 class="text-primary text-uppercase">
    Edit product
</h1>
</div>
<hr>
<div class="ml-3">
<form>
  <div class="form-group row">
  <div class="col-sm-2">
    <label>Image</label>
    </div>
    <div class="col-sm-1">
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-2">
    <label>Description:</label>
    </div>
    <div class="col-sm-5">
    <textarea class="form-control" id="desc" rows="3"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-2">
    <label>Short Description:</label>
    </div>
    <div class="col-sm-5">
    <textarea class="form-control" id="shortdesc" rows="3" maxlength="250"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-2">
    <label>Price:</label>
    </div>
    <div class="col-sm-5">
      <input type="number" class="form-control" id="price">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-2">
    <label>Category:</label>
    </div>
    <div class="col-sm-2">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Choose
  </button>
  <div class="dropdown-menu" >
    <a class="dropdown-item">Clothes</a>
    <a class="dropdown-item">Shoes</a>
    <a class="dropdown-item">Accessories</a>
  </div>
</div>
  </div>
  <div class="form-group row">
    <div class="col-sm-2">
    <label>Quantity in stock:</label>
    </div>
    <div class="col-sm-2">
    <input type="number" class="form-control" id="instock">
</div>
  </div>
  <div class="form-group row">
    <div class="col-sm-2">
    <label>IsNew:</label>
    </div>
    <div class="col-sm-2">
    <div class="form-check">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">True</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">False</label>
</div>
</div>
</div>
<div class="form-group row">
    <div class="col-sm-2">
    <label>Sales:</label>
    </div>
    <div class="col-sm-2">
      <input type="number" class="form-control" id="sales">
    </div>
  </div>
  <form>
      <div class="d-flex justify-content-between">
  <div class="form-inline">
  <div class="col-sm-5"><button class="btn btn-success">Add</button></div>
  <div class="col"><button class="btn btn-danger">Delete</button></div>
  </div>
  </div>
</form>
</form>
</div>