<div class = "d-flex justify-content-between">
    <h1 class = "text-primary">Categories</h1>
    <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>

   
<div class = "row">
  <div class="col-sm-5 pt-3">
  <h4 class = "text-info pb-2">Category List</h4>
    <table class = "table table-hover" id="table">
      <tr>
        <th>ID</th>
        <th>Category Name</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Converse</td>
     </tr>
     <tr>
         <td>2</td>
         <td>Vans</td>      
      </tr>
      <tr>
          <td>3</td>
          <td>Palladium</td>
      </tr>
    </table>
  </div>
  <div class="col-sm-7 pl-4 pt-3 ">
    <h4 class = "text-info pb-2">Category Mangagement</h4>
    <h6>Category ID: </h6>
    <input type = "text" name="cateID" id= "cateID">
    <h6>Category Name: </h6>
    <input type="text" name="cateName" id="cateName">
    <div class="btn-group d-block pt-3 " role="group" aria-label="Category execution">
      <button class = "btn btn-primary mr-3" onclick="addCategory();">Add</button>
      <button class = "btn btn-info" onclick="editCategory();">Edit</button>
      <button class = "btn btn-danger ml-3" onclick="removeSelectedRow();">Remove</button>
    </div>
  </div>
</div>
        
        <script>
            
            var rIndex,
                table = document.getElementById("table");
            
            // check the empty input
            function checkEmptyInput()
            {
                var isEmpty = false,
                    cateID = document.getElementById("cateID").value,
                    cateName = document.getElementById("cateName").value;
            
                if(cateID === ""){
                    alert("First Name Connot Be Empty");
                    isEmpty = true;
                }
                else if(cateName === ""){
                    alert("Last Name Connot Be Empty");
                    isEmpty = true;
                }
                
                return isEmpty;
            }
            
            // add Row
            function addCategory()
            {
                // get the table by id
                // create a new row and cells
                // get value from input text
                // set the values into row cell's
                if(!checkEmptyInput()){
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
            function selectedRowToInput()
            {
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                      // get the seected row index
                      rIndex = this.rowIndex;
                      document.getElementById("cateID").value = this.cells[0].innerHTML;
                      document.getElementById("cateName").value = this.cells[1].innerHTML;
                      
                    };
                }
            }
            selectedRowToInput();
            
            function editCategory()
            {
                var cateID = document.getElementById("cateID").value,
                    cateName = document.getElementById("cateName").value;
               if(!checkEmptyInput()){
                table.rows[rIndex].cells[0].innerHTML = cateID;
                table.rows[rIndex].cells[1].innerHTML = cateName;
              }
            }
            
            function removeSelectedRow()
            {
                table.deleteRow(rIndex);
                // clear input text
                document.getElementById("cateID").value = "";
                document.getElementById("cateName").value = "";
            }
        </script>



<!--

<script>
     var rIndex,
    table = document.getElementById("Catetable");
            
            // check the empty input
            function checkEmptyInput()
            {
                var isEmpty = false,
                    cateID = document.getElementById("cateID").value,
                    cateName = document.getElementById("cateName").value,
            
                if(cateID === ""){
                    alert("Category ID Connot Be Empty");
                    isEmpty = true;
                }
                else if(cateName === ""){
                    alert("Category Name Connot Be Empty");
                    isEmpty = true;
                }
                return isEmpty;
            }
            
            // add Row
            function addCategory()
            {
                // get the table by id
                // create a new row and cells
                // get value from input text
                // set the values into row cell's
                if(!checkEmptyInput()){
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
            function selectedRowToInput()
            {
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                      // get the seected row index
                      rIndex = this.rowIndex;
                      document.getElementById("cateID").value = this.cells[0].innerHTML;
                      document.getElementById("cateName").value = this.cells[1].innerHTML;
                    };
                }
            }
            
            selectedRowToInput();
            
            function editCategory()
            {
                var cateID = document.getElementById("cateID").value,
                    cateName = document.getElementById("cateName").value;
               if(!checkEmptyInput()){
                table.rows[rIndex].cells[0].innerHTML = cateID;
                table.rows[rIndex].cells[1].innerHTML = cateName;
              }
            }
            
            function removeSelectedRow()
            {
                table.deletedRow(rIndex);
                // clear input text
                document.getElementById("cateID").value = "";
                document.getElementById("cateName").value = "";
                
            }
</script>


<table class="table" id = "list">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Category</th>
      <th scope="col"></th>
      <th scope="col" class ="d-flex justify-content-end">
        <button type="button" class="btn btn-success" data-target = "#addPopup" data-toggle="modal" id = "AddCategory">Add</button>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Converse</td>
      <td></td>
      <td class ="d-flex justify-content-end">
          <button type="button" class="btn btn-primary" data-target = "#editPopup" data-toggle="modal">Edit</button>
          <button type="button" class="btn btn-danger ml-3" data-target = "#deletePopup" data-toggle="modal">Delete</button>  
      </td>
    </tr>

    <tr>
      <th scope="row">2</th>
      <td>Vans</td>
      <td></td>
      <td class ="d-flex justify-content-end">
          <button type="button" class="btn btn-primary" data-target = "#editPopup" data-toggle="modal">Edit</button>
          <button type="button" class="btn btn-danger ml-3" data-target = "#deletePopup" data-toggle="modal">Delete</button>  
      </td>
    </tr>

    <tr>
      <th scope="row">3</th>
      <td>Palladium</td>
      <td></td>
      <td class ="d-flex justify-content-end">
          <button type="button" class="btn btn-primary" data-target = "#editPopup" data-toggle="modal">Edit</button>
          <button type="button" class="btn btn-danger ml-3" data-target = "#deletePopup" data-toggle="modal">Delete</button>  
      </td>
    </tr>

    <tr>
      <th scope="row">4</th>
      <td>Adidas</td>
      <td></td>
      <td class ="d-flex justify-content-end">
          <button type="button" class="btn btn-primary" data-target = "#editPopup" data-toggle="modal">Edit</button>
          <button type="button" class="btn btn-danger ml-3" data-target = "#deletePopup" data-toggle="modal">Delete</button>  
      </td>
    </tr>

  </tbody>
</table>



<div class="row">
  <div class="col-sm-5">
  <h4 class = "text-info">Categories List</h4>
  <table class="table table-hover" id = "Catetable">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Category</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Converse</td>
      </tr>

      <tr>
        <th scope="row">2</th>
        <td>Vans</td>
      </tr>

      <tr>
        <th scope="row">3</th>
        <td>Palladium</td>
      </tr>

      <tr>
        <th scope="row">4</th>
        <td>Adidas</td>
      </tr>

    </tbody>
  </table>
  </div>

  <div class="col-sm-7">
    <h4 class = "text-info">Category Mangagement</h4>
    <h6>Category ID: </h6>
    <input type = "text" name="cateID" id= "cateID">
    <h6>Category Name: </h6>
    <input type="text" name="cateName" id="cateName">

    <div class="btn-group d-block " role="group" aria-label="Category execution">
    
      <button class = "btn btn-primary" onclick="addCategory();">Add</button>
      <button class = "btn btn-info" onclick="editCategory();">Edit</button>
      <button class = "btn btn-danger" onclick="removeSelectedRow();">Remove</button>
    </div>
</div>


<div class="modal" tabindex="-1" id="deletePopup">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete this category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure to delete this category ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id = "deleteBtn">Delete</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal" tabindex="-1" id="editPopup">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Enter new category name:</p>
        <input type = "text" class="form-control" rows="1" id="add">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="changeCategory()" id="changeBtn">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal" tabindex="-1" id="addPopup">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Enter new category ID:</p>
        <input type = "text" class="form-control" rows="1" id="addID">
      </div>
      <div class="modal-body">
        <p>Enter new category name:</p>
        <input type = "text" class="form-control" rows="1" id="addName">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id = "addBtn" onclick="addCategory()">Add</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
-->


