<?php
include "template/header.php";
include "template/nav.php"; ?>
<div>
<div class="detail__container_bg">
<div class="detail__container">
    <nav aria-label="detail__breadcrumb">
        <ul class="detail__breadcrumb">
            <li class="detail__breadcrumb-items">
                <a href="home" style="color:whitesmoke;text-decoration: none;">Home</a>
            </li>
            <li class="detail__breadcrumb-item active" aria-current="page">
                 Product Details
            </li>
        </ul>
    </nav>
</div>
</div>
<div class="detail__container">
    <div class="detail__row">
        <div>
            <img src="public/images/giay-nike-chinh-hang.jpg" >
        </div>
        <div class="detail__productdetails">
            <h1>Nike Shoes </h1>
            <span class="detail__price">$1200.00
            <span class="detail__stock">
                <b>In stock</b>  
                <span>
                    <span>SKU </span>
                    24-MB01
                </span>
            </span>
            <div class="detail__qty-add-cart">
                <label for="detail__qty">Quantity</label>
                <input type="number" placeholder="1" id="detail__qty">
                <a href=cart>Add to cart</a>
            </div>
            <div class="detail__buttons">
                <a href="wishlist">Wish list</a>
            </div>
            <p class="detail__final">This is a productive product create by Luon Vuituoi<br>
            This product is suitable for anyone as long as they have money<br>
            This not too expendsive but only 1000$
            </p>
        </span>
        </div>
    </div>
<div class="detail__area">
    <div class="detail__container">
        <div class="detail__buttons">
            <div class="nav" role="tablist">
                <a style="color:black;padding-left:5rem">Product Details</a>
            </div>
        </div>
        <div class=".detail__container">
            <div class="detail__items">
                <div class="detail__items_container">
                    <p>Convenience is next to nothing when your day is crammed with action. So whether you're heading to class, gym, or the unbeaten path, make sure you've got your Strive Shoulder Pack stuffed with all your essentials, and extras as well.                        
                    </p>
                    <ul>
                    <li>
                        Zippered main compartment.</li>
                    <li>Front zippered pocket.</li>
                    <li>Waterproof chair</li>
                    <li>CManual functional</li>
                    <li>Atheletics Design</li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php
include "template/footer.php";
