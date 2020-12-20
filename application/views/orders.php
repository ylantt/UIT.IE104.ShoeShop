<?php
include "template/permission.php";
include "template/header.php";
include "template/nav.php"; ?>
<div class="container">
  <nav>
    <ul class="breadcrumb">
      <li class="breadcrumb-items">
        <a href="home">Home</a>
      </li>
      <span>&ThickSpace;&#62;&ThickSpace;</span>
      <li class="breadcrumb-item active">
        Orders
      </li>
    </ul>
  </nav>
  <div class="orders__title-container">
    User Orders
  </div>
  <div class="orders__table-container">
    <table class="orders__customers">
      <tr>
        <th>Images</th>
        <th>ID</th>
        <th>Delivery Date</th>
        <th>Receive Date(expected)</th>
        <th>Total</th>
        <th>Status</th>
        <th>Detail</th>
      </tr>
      <tr href="#orders-detail.php">
        <td><img style="width:10rem;height:10rem" src="public/images/giay-nike-chinh-hang.jpg"></td>
        <td>1</td>
        <td>16/12/2020</td>
        <td>20/12/2020</td>
        <td>500$</td>
        <td style="color:#FF7D00;">Not shipped</td>
        <td><a href="order-detail" style="color:#444">Detail</a></td>
      </tr>
      <tr>
        <td><img style="width:10rem;height:10rem" src="public/images/tui-lv-hop-6.jpg"></td>
        <td>2</td>
        <td>15/12/2020</td>
        <td>29/12/2020</td>
        <td>700$</td>
        <td style="color:#15616D">Delivered</td>
        <td><a href="order-detail" style="color:#444">Detail</a></td>
      </tr>
      <tr>
        <td><img style="width:10rem;height:10rem" src="public/images/UtraBoost_Summer.jpg"></td>
        <td>3</td>
        <td>11/12/2020</td>
        <td>17/12/2020</td>
        <td>5000$</td>
        <td style="color:#15616D">Delivered</td>
        <td><a href="order-detail" style="color:#444">Detail</a></td>
      </tr>
      <tr>
        <td><img style="width:10rem;height:10rem" src="public/images/image-1.png"></td>
        <td>4</td>
        <td>15/12/2020</td>
        <td>19/12/2020</td>
        <td>400$</td>
        <td style="color:#FF7D00">Not shipped</td>
        <td><a href="order-detail" style="color:#444">Detail</a></td>
      </tr>
      <tr>
        <td><img style="width:10rem;height:10rem" src="public/images/red.jpg"></td>
        <td>5</td>
        <td>16/12/2020</td>
        <td>20/12/2020</td>
        <td>500$</td>
        <td style="color:#FF7D00">Not shipped</td>
        <td><a href="order-detail" style="color:#444">Detail</a></td>
      </tr>
    </table>
  </div>
</div>
<?php
include "template/footer.php";
