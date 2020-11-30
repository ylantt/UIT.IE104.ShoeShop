<div class="d-flex justify-content-between">
  <h1 class="text-primary">Products</h1>
  <form>
      <div class="form-inline pt-2">
      <div class="col"><button class="btn btn-primary"href="product-add.php">Add</button></div>
        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Sort By:
          </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">ID</a>
    <a class="dropdown-item" href="#">Price</a>
    <a class="dropdown-item" href="#">In Stock</a>
    <a class="dropdown-item" href="#">Sales</a>
  </div>
</div>
    <div class="col">
      <input type="text" class="form-control mr-sm-2" placeholder="Search">
    </div>
    <button type="submit" class="btn btn-outline-primary my-2  my-sm-0">Search</button>
    </div>
</form>
</div>


<table class="table table-hover">
     <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Desc</th>
            <th scope="col">ShortDesc</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            <th scope="col">In Stock</th>
            <th scope="col">IsNew</th>
            <th scope="col">Sales</th>
            <th scopr="côl">Action</th>
          </tr>
     </thead>
     <tbody>
          <tr data-toggle="modal" data-target="#productDetail">
               <th scope="row">1</th>
               <td><img src="./public/images/giay-nike-chinh-hang.jpg" alt="productImage" class="img-thumbnail"></td>
               <td>Made by Vans, for Winter</td>
               <td>Vans Shoes</td>
               <td>1000 &dollar;</td>
               <td>Clothes</td>
               <td >73</td>
               <td class="text-primary">True</td>
               <td><button type="button" class="btn btn-info">50%</button></td>
               <td><button type="button" class="btn btn-success">Edit</button>
               <button type="button" class="btn btn-danger">Delete</button>
               </td>
          </tr>

          <tr data-toggle="modal" data-target="#productDetail">
               <th scope="row">2</th>
               <td><img src="./public/images/giay-nike-chinh-hang.jpg" alt="productImage" class="img-thumbnail"></td>
               <td>Made by Vans, for Winter</td>
               <td>Vans Shoes</td>
               <td>1000 &dollar;</td>
               <td>Clothes</td>
               <td>100</td>
               <td class="text-primary">True</td>
               <td><button type="button" class="btn btn-info">50%</button></td>
               <td><button type="button" class="btn btn-success">Edit</button>
               <button type="button" class="btn btn-danger">Delete</button>
               </td>

          <tr data-toggle="modal" data-target="#productDetail">
               <th scope="row">3</th>
               <td><img src="./public/images/giay-nike-chinh-hang.jpg" alt="productImage" class="img-thumbnail"></td>
               <td>Made by Vans, for Winter</td>
               <td>Vans Shoes</td>
               <td>1000 &dollar;</td>
               <td>Clothes</td>
               <td>200</td>
               <td class="text-primary">True</td>
               <td><button type="button" class="btn btn-info">50%</button></td>
               <td><button type="button" class="btn btn-success">Edit</button>
               <button type="button" class="btn btn-danger">Delete</button>
               </td>
          </tr>

          <tr data-toggle="modal" data-target="#productDetail">
               <th scope="row">4</th>
               <td><img src="./public/images/giay-nike-chinh-hang.jpg" alt="productImage" class="img-thumbnail"></td>
               <td>Made by Vans, for Winter</td>
               <td>Vans Shoes</td>
               <td>1000 &dollar;</td>
               <td>Clothes</td>
               <td>50</td>
               <td class="text-primary">True</td>
               <td><button type="button" class="btn btn-info">50%</button></td>
               <td><button type="button" class="btn btn-success">Edit</button>
               <button type="button" class="btn btn-danger">Delete</button>
               </td>
          </tr>

          <tr data-toggle="modal" data-target="#productDetail">
               <th scope="row">5</th>
               <td><img src="./public/images/giay-nike-chinh-hang.jpg" alt="productImage" class="img-thumbnail"></td>
               <td>Made by Vans, for Winter</td>
               <td>Vans Shoes</td>
               <td>1000 &dollar;</td>
               <td>Clothes</td>
               <td>70</td>
               <td class="text-danger">False</td>
               <td><button type="button" class="btn btn-info">50%</button></td>
               <td><button type="button" class="btn btn-success">Edit</button>
               <button type="button" class="btn btn-danger">Delete</button>
               </td>
          </tr>
     </tbody>
</table>


<nav aria-label="Page navigation example" class="float-right">
     <ul class="pagination">
          <li class="page-item">
               <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
               </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
               <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
               </a>
          </li>
     </ul>
</nav>

