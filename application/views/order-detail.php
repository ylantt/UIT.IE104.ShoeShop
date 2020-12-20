<?php
include "template/permission.php";
include "template/header.php";
include "template/nav.php"; ?>

<div class="cart">
    <div class ="container">
        <h3 class="cart__title">Orders Details</h3>
        <div class = "cart__page">
            <table class="cart__table">
                <tr>
                    <th class="cart__header">Product</th>
                    <th class="cart__header">Quantity</th>
                    <th class="cart__header">Subtotal</th>
                    <th class="cart__header"></th>
                </tr>
                <tr>
                    <td>
                        <div class="cart__info">
                            <img src="public/images/UtraBoost_Summer.jpg" alt="Ultra boost">
                            <div>
                                <p class="cart__product-name">ULTRABOOST SUMMER.RDY - White </p>
                                <small>Price: <span class="cart__product-price">$220,00</span></small>
                            </div>
                        </div>
                    </td>
                    <td>5</td>
                    <td>$250</td>
                </tr>

                <tr>
                    <td>
                        <div class="cart__info">
                            <img src="public/images/UtraBoost_Summer.jpg" alt="Ultra boost">
                            <div>
                                <p class="cart__product-name">ULTRABOOST SUMMER.RDY </p>
                                <small>Price: <span class="cart__product-price">$220,00</span></small>
                            </div>
                        </div>
                    </td>
                    <td>7</td>
                    <td>$250</td>
                </tr>
            </table>
        </div>
    </div>

    <div class ="container cart__bottom">
        <div class= "cart__total">
        <table>
                <tr>
                    <td>Order ID:</td>
                    <td>1234421</td>
                </tr>
                <tr>
                    <td>Total:</td>
                    <td>$500</td>
                </tr>
                <tr class="cart__total-resut">
                    <td>Status:</td>
                    <td>Not shipped</td>
                </tr>
            </table>
            </div>

<input class="cart__OrdBtn" type="button" name="" value="Return to Orders"/>
</div>

    

</div>

<?php
include "template/footer.php";