<div class="d-flex justify-content-between">
     <h1 class="text-primary">Users</h1>
     <form>
          <div class="form-inline pt-2">
               <div class="col"><a class="btn btn-primary" href="product/add">Add</a></div>
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
               <th scope="col">Username</th>
               <th scope="col">Email</th>
               <th scope="col">Full name</th>
               <th scope="col">Address</th>
               <th scope="col">Phone</th>
               <th scopr="col">Role</th>
               <th scopr="col">Action</th>
          </tr>
     </thead>
     <tbody>
          <tr data-toggle="modal" data-target="#userDetail">
               <th scope="row">1</th>
               <td style="width: 20px;"><img src="../public/admin/images/giay-nike-chinh-hang.jpg" alt="userImage" class="img-fluid"></td>
               <td>dunghocgioi</td>
               <td>dunghocgioi@gmail.com</td>
               <td>Phan Hoàng Dung</td>
               <td>District 1, Ho Chi Minh</td>
               <td>0945738643</td>
               <td>User</td>
               <td><a href="product/edit" class="btn btn-success">Edit</a>
                    <button type="button" class="btn btn-danger">Delete</button>
               </td>
          </tr>

          <tr data-toggle="modal" data-target="#userDetail">
               <th scope="row">2</th>
               <td style="width: 20px;"><img src="../public/admin/images/giay-nike-chinh-hang.jpg" alt="userImage" class="img-fluid"></td>
               <td>dunghocgioi</td>
               <td>dunghocgioi@gmail.com</td>
               <td>Phan Hoàng Dung</td>
               <td>District 1, Ho Chi Minh</td>
               <td>0945738643</td>
               <td>User</td>
               <td><a href="product/edit" class="btn btn-success">Edit</a>
                    <button type="button" class="btn btn-danger">Delete</button>
               </td>
          </tr>


          <tr data-toggle="modal" data-target="#userDetail">
               <th scope="row">3</th>
               <td style="width: 20px;"><img src="../public/admin/images/giay-nike-chinh-hang.jpg" alt="userImage" class="img-fluid"></td>
               <td>dunghocgioi</td>
               <td>dunghocgioi@gmail.com</td>
               <td>Phan Hoàng Dung</td>
               <td>District 1, Ho Chi Minh</td>
               <td>0945738643</td>
               <td>User</td>
               <td><a href="product/edit" class="btn btn-success">Edit</a>
                    <button type="button" class="btn btn-danger">Delete</button>
               </td>
          </tr>


          <tr data-toggle="modal" data-target="#userDetail">
               <th scope="row">4</th>
               <td style="width: 20px;"><img src="../public/admin/images/giay-nike-chinh-hang.jpg" alt="userImage" class="img-fluid"></td>
               <td>dunghocgioi</td>
               <td>dunghocgioi@gmail.com</td>
               <td>Phan Hoàng Dung</td>
               <td>District 1, Ho Chi Minh</td>
               <td>0945738643</td>
               <td>User</td>
               <td><a href="product/edit" class="btn btn-success">Edit</a>
                    <button type="button" class="btn btn-danger">Delete</button>
               </td>
          </tr>

          <tr data-toggle="modal" data-target="#userDetail">
               <th scope="row">5</th>
               <td style="width: 20px;"><img src="../public/admin/images/giay-nike-chinh-hang.jpg" alt="userImage" class="img-fluid"></td>
               <td>dunghocgioi</td>
               <td>dunghocgioi@gmail.com</td>
               <td>Phan Hoàng Dung</td>
               <td>District 1, Ho Chi Minh</td>
               <td>0945738643</td>
               <td>Admin</td>
               <td><a href="product/edit" class="btn btn-success">Edit</a>
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



<div class="modal fade" id="productDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title text-primary" id="exampleModalLongTitle">Product <span>1</span> detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
               <div class="modal-body">
                    <p><span class="text-success font-weight-bold">Name: </span><span>namemmmmm mmmmmmm</span></p>
                    <p><span class="text-success font-weight-bold">Description: </span><span>namem mmmm mmmmmmm namemmmmmmmm mmmm namemm mmmmmmmm mm nam emmmmmmm mmmmmnam emmmm mmmmm mm mnamemmm mmmm m mmmmnamemmm mmmmmmmmm namemmmm mmm mmmmm namemmm mmmm mmmmm name mmmm mmm mmmmm namemm mmmm mmmmmm namemm mmmmmmm mmmnamemm mmmm mmmmm mnamemm mmmmmm mmmmnamem mmmmmm m mmmm namemmmmmmmm mmmm</span></p>
                    <p><span class="text-success font-weight-bold">Short description: </span><span>namemmm mmmmmmmmm namemmmmm mm mmmmm namem mmmmmmmm mmm namemm mmmmm mmmm mnamemm mmm mmmmm mmnamem mmmm mmmmmmm nam emmmm mmm mmmmm na memmmmmm mmmmmm</span></p>
               </div>
               <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
          </div>
     </div>
</div>
