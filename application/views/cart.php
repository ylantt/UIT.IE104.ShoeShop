<?php
include "template/header.php";
include "template/nav.php"; ?>

<div>
    <h3 class="cart__title">Cart</h3>
    <div class = "cart__page">
        <table class="cart__table">
            <tr>
                <th class="cart__header">Product</th>
                <th class="cart__header">Quantity</th>
                <th class="cart__header">Subtotal</th>
            </tr>

            <tr>
                <td>
                    <div class="cart__info">
                        <img src="public/images/UtraBoost_Summer.jpg" alt="Ultra boost">
                        <div>
                            <p>ULTRABOOST SUMMER.RDY - White </p>
                            <small>Price: $216,25</small>
                            </br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1" min="1" max="999"/></td>
                <td>$216,25</td>
            </tr>

            <tr>
            <td>
                    <div class="cart__info">
                        <img src="public/images/UtraBoost_Summer.jpg" alt="Ultra boost">
                        <div>
                            <p>ULTRABOOST SUMMER.RDY </p>
                            <small>Price: $220,00</small>
                            </br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1" min="1" max="999"/></td>
                <td>$220,00</td>
            </tr>
        </table>

        <div class= "cart__total">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$436.25</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$35.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$471.25</td>
                </tr>
            </table>
        </div>

        <input class="cart__OrdBtn" type="button" name="" value="Proceed to checkout"/>
    </div>
</div>

<?php
include "template/footer.php";
