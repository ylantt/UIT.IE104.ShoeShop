<?php
$pages = array();
$pages["home"] = "Home";
$pages["products"] = "Shop";
$pages["about"] = "About";

isset($_GET['url']) ? $activePage = $_GET['url'] : $activePage = "home";

?>

<nav class="nav">
     <div class="container flex-center">
          <ul class="flex-center list-pages">
               <?php foreach ($pages as $url => $title) : ?>
                    <li>
                         <a <?php if ($url === $activePage) : ?> class="active" <?php endif; ?> href="<?php echo $url; ?>">
                              <?php echo $title; ?>
                         </a></li>

               <?php endforeach; ?>
          </ul>

          <a href="home" class="nav__logo">
               <p class="nav__logo-name">N7</p>
               <p class="nav__logo-tagline">Every step matters.</p>
          </a>

          <ul class="flex-center">
               <?php if (isset($_GET['url']) && $_GET['url'] == 'login') : ?>
                    <li><a href="login" class="active">Log in</a></li>
               <?php else : ?>
                    <li><a href="login">Log in</a></li>
               <?php endif; ?>
               <li><a href=""><img src="./public/icon/loupe.svg" alt="Search" class="icon"></a></li>

               <li><a href="whishlist" class="flex-center"><img src="./public/icon/like.svg" alt="Wish list" class="icon"><span class="nav__notification">0</span></a></li>

               <li><a href="cart" class="flex-center"><img src="./public/icon/shopping-bags.svg" alt="Cart" class="icon"><span class="nav__notification">0</span></a></li>
          </ul>
     </div>
</nav>