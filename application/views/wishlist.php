<?php
include "login-first.php";
include "template/header.php";
include "template/nav.php"; ?>
<div class="wishlist"> 
    <!-- <div class="container"> -->
        <h3 class="wishlist__title">Wishlist</h3>
        <div class="wishlist__page">
            <table class="wishlist__table">
                <thead>
                    <th class="wishlist__header">Product</th>
                    <th class="wishlist__header">Quanity</th>
                    <th class="wishlist__header">Subtotal</th>
                    <th class="wishlist__header"></th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="wishlist__info">
                                <img  src="public/images/Vans.jpg" alt="vans">
                                <div>
                                    <p class="wishlist__product-name">Vans Authentic Check Block</p>
                                    <small>Price: <span class="wishlist__product-price">$200,99</span></small>
                                    <p><button class="wishlist__addcart"><i class="fas fa-shopping-cart"></i> Add to cart</button></p>
                                </div>
                            </div>
                        <td>
                            <input type="number" step="1" value="1" min="1" max="999">
                        </td>
                        <td>
                            <p>$200,99</p> 
                        </td>
                        <td><button><i class="fas fa-trash-alt icon-trash" aria-hidden="true"></i></button></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="wishlist__info">
                                <img  src="public/images/red.jpg" alt="vans">
                                <div>
                                    <p class="wishlist__product-name">VANS AUTHENTIC - Red</p>
                                    <small>Price: <span class="wishlist__product-price">$200,99</span></small>
                                    <p><button class="wishlist__addcart"><i class="fas fa-shopping-cart"></i> Add to cart</button></p>
                                </div>
                            </div>
                        <td>
                            <input type="number" step="1" value="1" min="1" max="999">
                        </td>
                        <td>
                            <p>$200,99</p> 
                        </td>
                        <td><button><i class="fas fa-trash-alt icon-trash" aria-hidden="true"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    <!-- </div> -->
</div>

<?php
include "template/footer.php";
