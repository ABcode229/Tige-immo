<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

include 'components/save_send.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>tige-immo</title>
   <link rel="shortcut icon" type="x-icon" href="./images/logoicon.jpg">
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>


<!-- home section starts  -->

<div class="home">

   <section class="center">

      <form action="search.php" method="post">
         <h3>Trouvez Votre Maison</h3>
         <div class="box">
            <p>entrez location <span>*</span></p>
            <input type="text" name="h_location" required maxlength="100" placeholder="entrez nom de ville" class="input">
         </div>
         <div class="flex">
            <div class="box">
               <p>type de propriété <span>*</span></p>
               <select name="h_type" class="input" required>
                  <option value="villa">villa</option>
                  <option value="appartement">appartement</option>
                  <option value="plateau Bureau">plateau Bureau</option>
                  <option value="local commercial">local commercial</option>
                  <option value="unité industrielle">unité industrielle</option>
                  <option value="ecole">ecole</option>
                  <option value="maison">maison</option>
                  <option value="riade">riade</option>
                  <option value="bureau">bureau</option>
               </select>
            </div>
            <div class="box">
               <p>type d'offer <span>*</span></p>
               <select name="h_offer" class="input" required>
                  <option value="vente">vente</option>
                  <option value="location">location</option>
                  <option value="achat">achat</option>
                  <option value="revente">revente</option>
               </select>
            </div>
            <div class="box">
               <p>Etat du bien <span>*</span></p>
               <select name="h_min" class="input" required>
                  <option value="neuf">neuf</option>
                  <option value="ancien">ancien 1O-30ans</option>
                  <option value="récent">récent 5-10ans</option>
                  
               </select>
            </div>
            <div class="box">
               <p>Surface m² <span>*</span></p>
               <select name="h_max" class="input" required>
                  <option value="50">50 m²</option>
                  <option value="60">60 m²</option>
                  <option value="70">70 m²</option>
                  <option value="80">80 m²</option>
                  <option value="90">90 m²</option>
                  <option value="100">100 m²</option>
                  <option value="110">110 m²</option>
                  <option value="120">120 m²</option>
                  <option value="130">130 m²</option>
                  <option value="140">140 m²</option>
                  <option value="150">150 m²</option>
                  <option value="160">160 m²</option>
                  <option value="170">170 m²</option>
                  <option value="180">180 m²</option>
                  <option value="190">190 m²</option>
                  <option value="200">200 m²</option>
                  <option value="250">250 m²</option>
                  <option value="300">300 m²</option>
                  <option value="500">500 m²</option>
               
               </select>
            </div>
         </div>
         <input type="submit" value="rechercher une propriété" name="h_search" class="btn">
      </form>

   </section>

</div>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading">nos services</h1>

   <div class="box-container">
      
      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>Achat de Maison </h3>
         <p>Vous rêvez de devenir propriétaire </p>
      </div>
     
      
      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Location de Maison </h3>
         <p>Trouvez la maison parfaite à louer grâce à</p>
      </div>
     
  
      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>Vente de Maison</h3>
         <p>Vous souhaitez vendre votre propriété ? </p>
      </div>
     
      
      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Appartements et Immeubles</h3>
         <p>Explorez notre portefeuille d'appartements .</p>
      </div>
  
      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>Boutiques et Centres Commerciaux</h3>
         <p>Trouvez le local commercial idéal pour </p>
      </div>
      
    
      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>Service 24/7 </h3>
         <p>Notre équipe est disponible 24 heures sur 24, 7 .</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- listings section starts  -->

<section class="listings">

   <h1 class="heading">dernières annonces</h1>

   <div class="box-container">
      <?php
         $total_images = 0;
         $select_properties = $conn->prepare("SELECT * FROM `property` ORDER BY date DESC LIMIT 6");
         $select_properties->execute();
         if($select_properties->rowCount() > 0){
            while($fetch_property = $select_properties->fetch(PDO::FETCH_ASSOC)){
               
            $select_user = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_user->execute([$fetch_property['user_id']]);
            $fetch_user = $select_user->fetch(PDO::FETCH_ASSOC);

            if(!empty($fetch_property['image_02'])){
               $image_coutn_02 = 1;
            }else{
               $image_coutn_02 = 0;
            }
            if(!empty($fetch_property['image_03'])){
               $image_coutn_03 = 1;
            }else{
               $image_coutn_03 = 0;
            }
            if(!empty($fetch_property['image_04'])){
               $image_coutn_04 = 1;
            }else{
               $image_coutn_04 = 0;
            }
            if(!empty($fetch_property['image_05'])){
               $image_coutn_05 = 1;
            }else{
               $image_coutn_05 = 0;
            }

            $total_images = (1 + $image_coutn_02 + $image_coutn_03 + $image_coutn_04 + $image_coutn_05);

            $select_saved = $conn->prepare("SELECT * FROM `saved` WHERE property_id = ? and user_id = ?");
            $select_saved->execute([$fetch_property['id'], $user_id]);

      ?>
      <form action="" method="POST">
         <div class="box">
            <input type="hidden" name="property_id" value="<?= $fetch_property['id']; ?>">
            <?php
               if($select_saved->rowCount() > 0){
            ?>
            <button type="submit" name="save" class="save"><i class="fas fa-heart"></i><span>enregistré</span></button>
            <?php
               }else{ 
            ?>
            <button type="submit" name="save" class="save"><i class="far fa-heart"></i><span>sauvegarder</span></button>
            <?php
               }
            ?>
            <div class="thumb">
               <p class="total-images"><i class="far fa-image"></i><span><?= $total_images; ?></span></p> 
               <img src="uploaded_files/<?= $fetch_property['image_01']; ?>" alt="">
            </div>
            <div class="admin">
               <h3><?= substr($fetch_user['name'], 0, 1); ?></h3>
               <div>
                  <p><?= $fetch_user['name']; ?></p>
                  <span><?= $fetch_property['date']; ?></span>
               </div>
            </div>
         </div>
         <div class="box">
            <div class="price"><span><?= $fetch_property['price']; ?>DH</span></div>
            <h3 class="name"><?= $fetch_property['property_name']; ?></h3>
            <p class="location"><i class="fas fa-map-marker-alt"></i><span><?= $fetch_property['address']; ?></span></p>
            <div class="flex">
               <p><i class="fas fa-house"></i><span><?= $fetch_property['type']; ?></span></p>
               <p><i class="fas fa-tag"></i><span><?= $fetch_property['offer']; ?></span></p>
               <p><i class="fas fa-bed"></i><span><?= $fetch_property['bhk']; ?> BHK</span></p>
               <p><i class="fas fa-trowel"></i><span><?= $fetch_property['status']; ?></span></p>
               <p><i class="fas fa-couch"></i><span><?= $fetch_property['furnished']; ?></span></p>
               <p><i class="fas fa-maximize"></i><span><?= $fetch_property['carpet']; ?>m²</span></p>
            </div>
            <div class="flex-btn">
               <a href="view_property.php?get_id=<?= $fetch_property['id']; ?>" class="btn">voir la propriété</a>
               <input type="submit" value="envoyer une demande" name="send" class="btn">
            </div>
         </div>
      </form>
      <?php
         }
      }else{
         echo '<p class="empty">aucune propriété ajoutée pour linstant! <a href="post_property.php" style="margin-top:1.5rem;" class="btn">ajouter un nouveau</a></p>';
      }
      ?>
      
   </div>

   <div style="margin-top: 2rem; text-align:center;">
      <a href="listings.php" class="inline-btn">voir tout</a>
   </div>

</section>

<!-- listings section ends -->








<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

<script>

   let range = document.querySelector("#range");
   range.oninput = () =>{
      document.querySelector('#output').innerHTML = range.value;
   }

</script>

</body>
</html>