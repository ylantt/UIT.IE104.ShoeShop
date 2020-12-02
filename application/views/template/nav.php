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
               <li>
                    <p data-modal-target="#login" class="nav__button">Log in</p>
               </li>
               <li><a href=""><img src="./public/icon/loupe.svg" alt="Search" class="icon"></a></li>

               <li><a href="wishlist" class="flex-center"><img src="./public/icon/like.svg" alt="Wish list" class="icon"><span class="nav__notification">0</span></a></li>

               <li><a href="cart" class="flex-center"><img src="./public/icon/shopping-bags.svg" alt="Cart" class="icon"><span class="nav__notification">0</span></a></li>
          </ul>
     </div>
</nav>

<div class="login modal" id="login">
     <form class="login__box" method="POST" action="Login">
          <div class="close-icon icon" data-close-button>
               <i class="fas fa-times"></i>
          </div>
          <h3>Login</h3>
          <div class="text__box">
               <input type="text" placeholder="Username" name="username" />
          </div>
          <div class="text__box">
               <input type="password" placeholder="Password" name="password" />
          </div>
          <input class="login__btn" type="submit" name="submit" value="Sign in" />
          <div class="login__other">
               <p data-modal-target="#register">Don't have an account?</p>
               <a href="#">Forgot password?</a>
          </div>
     </form>
</div>

<div class="reg modal" id="register">
     <h2 class="reg__h2">Register</h2>
     <div class="reg__box">
          <div class="reg__form">
               <form method="POST" action="#">
                    <div class="close-icon" data-close-button>
                         <i class="fas fa-times"></i>
                    </div>
                    <p><input type="text" class="reg__input" id="username" placeholder="Username"> </p>
                    <p><input type="email" class="reg__input" id="email" placeholder="Email address"></p>
                    <p><input type="password" class="reg__input" id="password" placeholder="Passwword"></p>
                    <p> <input type="confirm_password" class="reg__input" id="confirm_password" placeholder="Confirm passwword"></p>
               </form>
               <div>
                    <button class="reg__button" type="submit" id="register">
                         REGISTER
                    </button>
               </div>
               <div class="reg__account">
               <span>Do you have an account?</span> 
               <span data-modal-target="#login" class="reg__account-login">Log in</span></div>
          </div>
     </div>
</div>