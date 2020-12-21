<?php
if (isset($_SESSION['userID']) == false) :
    include "template/header.php";
    include "template/nav.php"; ?>
    <div class="container">
        <div class=".error">
            <div class="error__body">
                <p class="error__title">PERMISSION DENIED</p>
                <p class="error__detail">You are not an administrator!</p>
                <p class="error__more-detail">
                    The page you're looking for is denied. <br>
                    Try again or go back to the homepage.
                </p>
                <p>
                    <a href="home" class="error__button error__button--large">
                        &LeftArrow; Back to Homepage
                    </a>
                </p>
            </div>
        </div>
    </div>

    </body>
    <?php
    include "template/script-line.php"; ?>

    </html>
<?php
    exit();
endif;
?>