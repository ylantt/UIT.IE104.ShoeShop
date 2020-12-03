<div class="d-flex justify-content-between">
  <h1 class="text-primary">Categories</h1>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
  </form>
</div>

<h4 class="text-info pb-2">Add category</h4>
<div class="row ml-1">
  <div><label for="cateName" class="mr-3">Name: </label>
    <input type="text" name="cateName" id="cateName">
  </div>
  <button class="btn btn-primary ml-5" onclick="addCategory();">Add</button>
</div>

<h4 class="text-info pb-2 mt-5">Category List</h4>
<table class="table table-hover" id="table">
  <tr>
    <th>ID</th>
    <th>Category Name</th>
    <th>&nbsp;</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Converse</td>
    <td><button class="btn btn-success">Edit</button> <button class="btn btn-danger ml-2">Delete</button></td>
  </tr>
  <tr>
    <td>2</td>
    <td>Vans</td>
    <td><button class="btn btn-success">Edit</button> <button class="btn btn-danger ml-2">Delete</button></td>
  </tr>
  <tr>
    <td>3</td>
    <td>Palladium</td>
    <td><button class="btn btn-success">Edit</button> <button class="btn btn-danger ml-2">Delete</button></td>
  </tr>
</table>

<script>
  var rIndex,
    table = document.getElementById("table");

  // check the empty input
  function checkEmptyInput() {
    var isEmpty = false,
      cateID = document.getElementById("cateID").value,
      cateName = document.getElementById("cateName").value;

    if (cateID === "") {
      alert("First Name Connot Be Empty");
      isEmpty = true;
    } else if (cateName === "") {
      alert("Last Name Connot Be Empty");
      isEmpty = true;
    }

    return isEmpty;
  }

  // add Row
  function addCategory() {
    // get the table by id
    // create a new row and cells
    // get value from input text
    // set the values into row cell's
    if (!checkEmptyInput()) {
      var newRow = table.insertRow(table.length),
        cell1 = newRow.insertCell(0),
        cell2 = newRow.insertCell(1),

        cateID = document.getElementById("cateID").value,
        cateName = document.getElementById("cateName").value;

      cell1.innerHTML = cateID;
      cell2.innerHTML = cateName;

      // call the function to set the event to the new row
      selectedRowToInput();
    }
  }

  // display selected row data into input text
  function selectedRowToInput() {

    for (var i = 1; i < table.rows.length; i++) {
      table.rows[i].onclick = function() {
        // get the seected row index
        rIndex = this.rowIndex;
        document.getElementById("cateID").value = this.cells[0].innerHTML;
        document.getElementById("cateName").value = this.cells[1].innerHTML;

      };
    }
  }
  selectedRowToInput();

  function editCategory() {
    var cateID = document.getElementById("cateID").value,
      cateName = document.getElementById("cateName").value;
    if (!checkEmptyInput()) {
      table.rows[rIndex].cells[0].innerHTML = cateID;
      table.rows[rIndex].cells[1].innerHTML = cateName;
    }
  }

  function removeSelectedRow() {
    table.deleteRow(rIndex);
    // clear input text
    document.getElementById("cateID").value = "";
    document.getElementById("cateName").value = "";
  }
</script>