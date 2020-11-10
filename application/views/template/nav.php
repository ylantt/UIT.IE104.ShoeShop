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