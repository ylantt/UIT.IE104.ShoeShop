<?php
include "template/permission.php";
include "template/header.php";
include "template/nav.php"; ?>

<div class="cart">
    <div class ="container">
        <h3 class="cart__title">Cart</h3>
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
                    <td><input type="number" value="1" min="1" max="999"/></td>
                    <td>$216,25</td>
                    <td><i class="fas fa-trash-alt icon-trash"></i></td>
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
                    <td><input type="number" value="1" min="1" max="999"/></td>
                    <td>$220,00</td>
                    <td><i class="fas fa-trash-alt icon-trash"></i></td>
                </tr>
            </table>
        </div>
    </div>

    <div class ="container cart__bottom">
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
                <tr class="cart__total-resut">
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
