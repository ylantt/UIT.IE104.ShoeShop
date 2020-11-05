<?php
include "template/header.php";
include "template/nav.php"; ?>

<div>
    <div class ="container">
        <h3 class="cart__title">Cart</h3>
        <div class = "cart__page">
            <table class="cart__table">
                <tr>
                    <th class="cart__header">Product</th>
                    <th class="cart__header text-center">Quantity</th>
                    <th class="cart__header text-center">Subtotal</th>
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
                    <td class="text-center"><input type="number" value="1" min="1" max="999"/></td>
                    <td class="text-center">$216,25</td>
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
                    <td class="text-center"><input type="number" value="1" min="1" max="999"/></td>
                    <td class="text-center">$220,00</td>
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
