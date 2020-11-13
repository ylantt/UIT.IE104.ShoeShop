<?php
include "template/header.php";
include "template/nav.php"; ?>
    <div class="register">
        <h2 class="reg__h2">Register</h2>
        <div class="reg__box">
            <div class="reg__boxleft">
            </div>
            <div class="reg__boxright">
                <div  class="reg__form">
                    <form>
                        <p><input type="text" class="reg__input" id="username" placeholder="username"> </p>
                        <p><input type="email"class="reg__input" id="email" placeholder="email address"></p>
                        <p><input type="password" class="reg__input"id="password" placeholder="passwword"></p>
                        <p> <input type="confirm_password" class="reg__input" id="confirm_password" placeholder="confirm passwword"></p>
                    </form>
                    <div>
                        <button class="reg__button" type="submit" id="register">
                            REGISTER
                        </button>
                    </div>
                    <p class="reg__account">Do you have an Account? <a href="#">Log in</a></p>
                </div>
            </div>
        </div>
        <p class="reg__account">Login Form</p>
    </div>
<?php
include "template/footer.php";
