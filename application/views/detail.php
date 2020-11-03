<?php
include "template/header.php";
include "template/nav.php"; ?>

<div class="detail">
    <div class="container">
        <div class="detail__container">
            <nav>
                <ul class="detail__breadcrumb">
                    <li class="detail__breadcrumb-items">
                        <a href="home">Home</a>
                    </li>
                    <span>&ThickSpace;&#62;&ThickSpace;</span>
                    <li class="detail__breadcrumb-item active">
                        Product Details
                    </li>
                </ul>
            </nav>
        </div>
        <div class="detail__container">
            <div class="detail__row">
                <div class="detail__product-image">
                    <img src="public/images/giay-nike-chinh-hang.jpg">
                </div>
                <div class="detail__productdetails">
                    <h3 class="detail__product-name">Nike Shoes </h3>
                    <span class="detail__price">$1200.00</span>
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
                        <div class="btn-add-cart" href=cart>Add to cart</div>
                    </div>
                    <div class="detail__buttons">
                        <div class="btn-add-wishlist" href="wishlist">Add to wish list</div>
                    </div>
                    <p class="detail__final">This is a productive product create by Luon Vuituoi. This product is suitable for anyone as long as they have money. This not too expendsive but only 1000$
                    </p>

                </div>
            </div>
            <div class="detail__area">
                <div class="detail__container">
                    <div class="detail__info">
                        Product Details
                    </div>
                    <div class="detail__content">
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
</div>
<?php
include "template/footer.php";
