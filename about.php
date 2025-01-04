<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>tige-immo</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="shortcut icon" type="x-icon" href="./images/logoicon.jpg">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">
      <div class="image">
         <img src="images/about.webp" alt="">
      </div>
      <div class="content">
         <h3>Pourquoi nous choisir ?</h3>
         <p>en tige-immo nous nous engageons à vous offrir une expérience immobilière exceptionnelle grâce à :
            Expertise locale : Une connaissance approfondie du marché immobilier local pour vous guider dans vos choix.
            Accompagnement personnalisé : Une approche sur mesure adaptée à vos besoins, qu'il s'agisse de vendre, d'acheter ou de louer.
            Transparence et fiabilité : Des informations claires et une gestion professionnelle à chaque étape de votre projet.
            Large portefeuille de biens : Une vaste sélection de propriétés pour répondre à toutes vos attentes.
            Service client de qualité : Une équipe disponible et réactive pour répondre à vos questions et assurer votre satisfaction.</p>
         <a href="contact.php" class="inline-btn">Contactez-nous</a>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="heading">3 étapes simples</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>rechercher une propriété</h3>
         <p>Trouvez facilement la maison ou l'appartement de vos rêves grâce à notre moteur de recherche avancé. Parcourez nos annonces et découvrez des propriétés qui répondent parfaitement à vos attentes.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>contacter les agents</h3>
         <p>Besoin de conseils ? Nos agents immobiliers sont là pour vous accompagner à chaque étape. Contactez-nous pour obtenir des informations détaillées ou planifier une visite Nos agents expérimentés sont à votre disposition pour répondre.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>profiter de la propriété</h3>
         <p>Votre rêve devient réalité !Une fois votre propriété idéale trouvée, profitez pleinement de votre nouvel espace de vie. Laissez-nous nous occuper des formalités pendant que vous savourez votre nouvelle acquisition.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->
 <div class="tst">
 <div class="cart-slider">
         
        <button class="prev">&lt;</button>
        <div class="slider">
            <div class="slider-track">
                <div class="slide">
                    <img src="images/1.png" alt="Product 1" class="product-image">
                    
                </div>
                <div class="slide">
                    <img src="images/2.png" alt="Product 2" class="product-image">
                   
                </div>
                <div class="slide">
                    <img src="images/3.png" alt="Product 3" class="product-image">
                   
                </div>
                <div class="slide">
                    <img src="images/4.png" alt="Product 4" class="product-image">
                    
                </div>
                <div class="slide">
                    <img src="images/5.png" alt="Product 4" class="product-image">
                    
                </div>
                <div class="slide">
                    <img src="images/6.png" alt="Product 4" class="product-image">
                    
                </div>
                <div class="slide">
                    <img src="images/7.png" alt="Product 4" class="product-image">
                    
                </div>
                <div class="slide">
                    <img src="images/8.png" alt="Product 4" class="product-image">
                    
                </div>
                
                
            </div>
        </div>
        <button class="next">&gt;</button>
    </div>

    <!-- Modal -->
    <div class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modal-img" alt="Enlarged product">
    </div>
 </div>


<!-- review section starts  -->

<section class="reviews">

   <h1 class="heading">Avis des clients</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/imrev1.jpeg" alt="">
            <div>
               <h3>Salma ben mousa</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Un grand merci à l’équipe pour leur soutien tout au long de la vente de notre appartement. Ils ont su répondre à toutes nos attentes et nous ont accompagnés avec une grande expertise. Nous recommandons vivement!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/imrev4.jpeg" alt="">
            <div>
               <h3>Amin azizi</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>L'équipe de tige-immo a été incroyablement réactive et professionnelle. Ils ont répondu à toutes nos questions et ont toujours été là pour nous guider. Grâce à eux, nous avons trouvé notre appartement de rêve en un rien de temps!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/imrev5.jpeg" alt="">
            <div>
               <h3>Yasir Art</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Un service de qualité ! L'accompagnement personnalisé a été très apprécié. L'agent a pris le temps de bien comprendre nos attentes et nous a orientés vers les meilleures options. Nous sommes ravis de notre achat!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/imrev2.jpeg" alt="">
            <div>
               <h3>Hanan loutfi</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Un service exceptionnel ! Les agents étaient toujours disponibles et ont su nous guider dans notre recherche de bien. Nous sommes ravis de notre nouvelle maison </p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/imrev3.jpeg" alt="">
            <div>
               <h3>kamal youssf</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Merci à tige-immo pour leur aide précieuse. Ils ont su trouver l'appartement parfait pour moi. Une équipe sérieuse et toujours disponible pour répondre à mes questions.</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/imrev6.jpeg" alt="">
            <div>
               <h3>majida aitnor</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Grâce à tige-immo, nous avons trouvé la maison de nos rêves. L'équipe a été extrêmement réactive et professionnelle à chaque étape de notre projet. Un service impeccable !</p>
      </div>

   </div>

</section>

<!-- review section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>