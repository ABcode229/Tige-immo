<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <a href="home.php" class="logo"><img src="/images/logo.jpg" ></a>

         <ul>
            <li><a href="post_property.php">publier une propriété<i class="fas fa-paper-plane"></i></a></li>
         </ul>
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <li><a href="#">mes annonces<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="dashboard.php">tableau de bord</a></li>
                     <li><a href="post_property.php">publier une propriété</a></li>
                     <li><a href="my_listings.php">mes annonces</a></li>
                  </ul>
               </li>
               <li><a href="#">choix<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="search.php">filter la recherche</a></li>
                     <li><a href="listings.php">toutes les annonces</a></li>
                  </ul>
               </li>
               <li><a href="#">aide<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="about.php">à propos de nous</a></i></li>
                     <li><a href="contact.php">contactez-nous</a></i></li>
                     <li><a href="contact.php#faq">FAQ</a></i></li>
                  </ul>
               </li>
            </ul>
         </div>

         <ul>
            <li><a href="saved.php">enregistré <i class="far fa-heart"></i></a></li>
            <li><a href="#">compte <i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="login.php">login </a></li>
                  <li><a href="register.php">register </a></li>
                  <?php if($user_id != ''){ ?>
                  <li><a href="update.php">update profile</a></li>
                  <li><a href="components/user_logout.php" onclick="return confirm('logout from this website?');">logout</a>
                  <?php } ?></li>
               </ul>
            </li>
         </ul>
      </section>
   </nav>

</header>

<!-- header section ends -->