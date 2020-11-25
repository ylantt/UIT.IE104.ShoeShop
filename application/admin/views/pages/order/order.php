<div class="d-flex justify-content-between">
     <h1 class="text-primary">Orders</h1>
     <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
     </form>
</div>

<table class="table table-hover">
     <thead>
          <tr>
               <th scope="col">ID</th>
               <th scope="col">Customer</th>
               <th scope="col">Address</th>
               <th scope="col">Date</th>
               <th scope="col">Total</th>
               <th scope="col">Status</th>
               <th scope="col">Action</th>
          </tr>
     </thead>
     <tbody>
          <tr data-toggle="modal" data-target="#orderDetail">
               <th scope="row">1</th>
               <td>Otto</td>
               <td>District 1, Ho Chi Minh</td>
               <td>01/02/2002</td>
               <td>1000 &dollar;</td>
               <td class="text-warning">Not yet shipped<button type="button" class="btn" data-toggle="tooltip" title="Change status to Delivered" data-placement="Delivered">&#9989;</button>
               <td><button type="button" class="btn btn-danger">Delete</button></td>
          </tr>

          <tr data-toggle="modal" data-target="#orderDetail">
               <th scope="row">1</th>
               <td>Otto</td>
               <td>District 1, Ho Chi Minh</td>
               <td>01/02/2002</td>
               <td>1000 &dollar;</td>
               <td class="text-success">Delivered</td>
               <td><button type="button" class="btn btn-danger">Delete</button></td>
          </tr>

          <tr data-toggle="modal" data-target="#orderDetail">
               <th scope="row">1</th>
               <td>Otto</td>
               <td>District 1, Ho Chi Minh</td>
               <td>01/02/2002</td>
               <td>1000 &dollar;</td>
               <td class="text-success">Delivered</td>
               <td><button type="button" class="btn btn-danger">Delete</button></td>
          </tr>

          <tr data-toggle="modal" data-target="#orderDetail">
               <th scope="row">1</th>
               <td>Otto</td>
               <td>District 1, Ho Chi Minh</td>
               <td>01/02/2002</td>
               <td>1000 &dollar;</td>
               <td class="text-success">Delivered</td>
               <td><button type="button" class="btn btn-danger">Delete</button></td>
          </tr>

          <tr data-toggle="modal" data-target="#orderDetail">
               <th scope="row">1</th>
               <td>Otto</td>
               <td>District 1, Ho Chi Minh</td>
               <td>01/02/2002</td>
               <td>1000 &dollar;</td>
               <td class="text-success">Delivered</td>
               <td><button type="button" class="btn btn-danger">Delete</button></td>
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

<div class="modal fade" id="orderDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Products of Order #<span>1</span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
               <div class="modal-body">
                    <table class="table table-hover table-sm">
                         <thead>
                              <tr>
                                   <th scope="col">Product ID</th>
                                   <th scope="col">Product name</th>
                                   <th scope="col">Quantity</th>
                              </tr>
                         </thead>
                         <tbody>
                              <tr>
                                   <th scope="row">1</th>
                                   <td>Otto</td>
                                   <td>10</td>
                              </tr>

                              <tr>
                                   <th scope="row">1</th>
                                   <td>Otto</td>
                                   <td>10</td>
                              </tr>

                         </tbody>
                    </table>

               </div>
               <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
          </div>
     </div>
</div>