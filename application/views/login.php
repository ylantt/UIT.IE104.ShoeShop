<?php
include "template/header.php";
include "template/nav.php"; ?>

    <div class = "login__background">
        <div class = "login__box">
            <h1>Login</h1>
            <div class="text__box">
                <input type ="text" placeholder="Username" name="" value=""/>
            </div>
            <div class="text__box">
                <input type="password" placeholder="Password" name="" value=""/>
            </div>
            <input class="login__btn" type="button" name="" value="Sign in"/>
            <a class ="login__other" herf="#">Don't have an account?</a>
            </br>
            <a class ="login__other" href="#">Forgot password?</a>
        </div>
    </div>

<?php
include "template/footer.php";
