<?php
if (isset($_SESSION['userID']) == false) :
    include "template/header.php";
    include "template/nav.php"; ?>
<div class="container">
    <div class=".error">
        <div class="error__body">
            <p class="error__title">PERMISSION DENIED</p>
            <p class="error__detail">You need to sign in first!</p>
            <p class="error__more-detail">
                The page you're looking for is denied. <br>
                Try to sign in or go back to the homepage.
            </p>
            <p>
                <a href="home" class="error__button error__button--large">
                    &LeftArrow; Back to Homepage
                </a>
            </p>
        </div>
    </div>
</div>
<?php 
exit();
endif;
