<?php
include "template/header.php";
include "template/nav.php"; ?>

<div class="detail">
    <div class="container">
        <div class="detail__container">
            <nav>
                <ul class="breadcrumb">
                    <li class="breadcrumb-items">
                        <a href="home">Home</a>
                    </li>
                    <span>&ThickSpace;&#62;&ThickSpace;</span>
                    <li class="breadcrumb-item active">
                        Product Details
                    </li>
                </ul>
            </nav>
        </div>
        <div class="detail__container">
            <div class="detail__row">
                <div class="detail__product-image">
                    <img src="/public/uploads/<?= $data["info"]["ProductImage"]; ?>" alt="item-image">
                </div>
                <div class="detail__productdetails">
                    <h3 class="detail__product-name"><?= $data["info"]["ProductName"] ?></h3>
                    <span class="detail__price">&dollar;<?= $data["info"]["Price"] ?></span>
                    <span class="detail__stock">
                        <?php if ($data["info"]["QuanInStock"] != 0) : ?>
                            <b>In stock: <?= $data["info"]["QuanInStock"] ?></b>
                        <?php else : ?>
                            <b>Out of stock</b>
                        <?php endif; ?>
                        <span>
                            SKU PR_<?= $data["info"]["ProductID"] ?>
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
                    <p class="detail__final"><?= $data["info"]["ShortDesc"] ?>
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
                                <?= $data["info"]["ProductDesc"] ?>
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
