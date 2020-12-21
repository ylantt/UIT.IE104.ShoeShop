<?php
$pages = array();
$pages["home"] = "Home";
$pages["#"] = "Collection";
$pages["about"] = "About";

isset($_GET['url']) ? $activePage = $_GET['url'] : $activePage = "home";

?>

<nav class="nav">
     <div class="container flex-center">
          <ul class="flex-center list-pages">
               <?php foreach ($pages as $url => $title) : ?>
                    <li <?php if ($title === "Collection") : ?> class="disabled-link" <?php elseif ($url === $activePage) : ?> class="active" <?php endif; ?>>
                         <a href="<?php echo $url; ?>">
                              <?php echo $title; ?>
                         </a>
                    </li>
               <?php endforeach; ?>
          </ul>

          <a href="home" class="logo">
               <p class="logo__name">N7</p>
               <p class="logo__tagline">Every step matters.</p>
          </a>

          <ul class="flex-center">
               <li><a href=""><img src="./public/icon/loupe.svg" alt="Search" class="icon"></a></li>

               <li><a href="wishlist" class="flex-center"><img src="./public/icon/like.svg" alt="Wish list" class="icon"><span class="nav__notification">0</span></a></li>

               <li><a href="cart" class="flex-center"><img src="./public/icon/shopping-bags.svg" alt="Cart" class="icon"><span class="nav__notification">0</span></a></li>

               <?php if (isset($_SESSION["userID"])): ?>
               <li>
                    <a href="/account/show/<?php echo $_SESSION["userID"]; ?>" class="nav__button nav__account"><?php echo $_SESSION["userName"]; ?></a>
                    <a href="/login/logout" class="nav__log-out">Log out</a>
               </li>
               <?php else: ?>
               <li>
                    <p data-modal-target="#login" class="nav__button">Sign in</p>
               </li>
                    <?php endif; ?>
          </ul>
     </div>
</nav>

<div class="login modal" id="login">
     <p class='result-data'>&nbsp;</p>
     <div class="modal__content">
          <h3 class="heading-h4">Sign in</h3>
          <form class="form" method="POST" action="Login">
               <div class="close-icon icon" data-close-button>
                    <i class="fas fa-times"></i>
               </div>
               <div class="text__box">
                    <input type="text" placeholder="Username/Email" name="name" />
               </div>
               <div class="text__box">
                    <input type="password" placeholder="Password" name="password" />
               </div>
               <input name="location" value="<?php echo isset($_GET["url"]) ? $_GET["url"] : "home" ?>">
               <input class="btn-submit" type="submit" name="submit" value="Sign in" id="login-btn" />
               <div class="modal__account">
                    <p data-modal-target="#register">Not a member? <span class="modal__link">Join Us.</span></p>
                    <a href="#">Forgot password?</a>
               </div>
          </form>
     </div>
</div>

<div class="reg modal" id="register">
     <p class='result-data'>&nbsp;</p>
     <div class="modal__content">
          <h2 class="heading-h4">Sign up</h2>
          <div class="reg__box">
               <form method="POST" action="Register/insertUser" class="form">
                    <div class="close-icon icon" data-close-button>
                         <i class="fas fa-times"></i>
                    </div>
                    <p class="text__box"><input type="text" name="username" placeholder="Username"> </p>
                    <p class="text__box"><input type="email" name="email" placeholder="Email address"></p>
                    <p class="text__box"><input type="password" name="password" placeholder="Passwword"></p>
                    <p class="text__box"> <input type="password" name="pwdrepeat" placeholder="Confirm passwword"></p>
                    <div>
                         <input class="btn-submit" type="submit" name="submit" value="Sign up" id="reg-btn" />
                    </div>
               </form>
          </div>
          <div class="modal__account">
               <span>Already a Member?</span>
               <span data-modal-target="#login" class="modal__link">Sign in.</span>
          </div>
     </div>
</div>