<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Wazaa Immo - Details</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-item.css" rel="stylesheet">

</head>
<?php Include"Waz_Connexion_BDD.php"; ?>
<?php $ID=$_GET['an_id'];?>
<?php $requete = "SELECT * FROM waz_annonces WHERE an_id = $ID";
    $result = $db->query($requete);
    $annonce = $result->fetch(PDO::FETCH_OBJ);
    $result->closeCursor(); 
?>

<body>



<?php Include"Waz_Nav.php"; ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

    <div class="col-lg-3">
      <img src="wazaa_logo.png" alt="Logo Wazaa" title="Logo Wazaa">
        <div class="list-group">
          <a href="#" class="list-group-item">Maisons</a>
          <a href="#" class="list-group-item">Appartements</a>
          <a href="#" class="list-group-item">Terrains</a>
        </div>
      </div>
      <!-- /.col-lg-3 -->



      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <?php if($ID==4){echo "<li data-target='#carouselExampleIndicators' data-slide-to='0' class='active'></li>";} 

            else if($ID==1 || $ID==2 || $ID==9){echo "<li data-target='#carouselExampleIndicators' data-slide-to='0' class='active'></li>";
            echo "<li data-target='#carouselExampleIndicators' data-slide-to='1'></li>";}

            else if($ID==3 || $ID==5 || $ID==6 ||$ID==7 || $ID==8){echo "<li data-target='#carouselExampleIndicators' data-slide-to='0' class='active'></li>";
            echo "<li data-target='#carouselExampleIndicators' data-slide-to='1'></li>";
            echo "<li data-target='#carouselExampleIndicators' data-slide-to='2'></li>";}
            
            else if($ID==10){echo "<li data-target='#carouselExampleIndicators' data-slide-to='0' class='active'></li>";
            echo "<li data-target='#carouselExampleIndicators' data-slide-to='1'></li>";
            echo "<li data-target='#carouselExampleIndicators' data-slide-to='2'></li>";
            echo "<li data-target='#carouselExampleIndicators' data-slide-to='3'></li>";
            echo "<li data-target='#carouselExampleIndicators' data-slide-to='4'></li>";}

            ?>
          </ol>
          <div class="carousel-inner" role="listbox">
          
          <?php if($ID==4){echo"<div class='carousel-item active'>
          <img class='d-block img-fluid' alt='Image du bien' title='Image du bien'class='card-img-top img-fluid' src='photos/annonce_".$ID."/".$ID."-1.jpg'>
            </div>";}


            else if($ID==1 || $ID==2 || $ID==9){echo"<div class='carousel-item active'>
          <img class='d-block img-fluid' alt='Image du bien' title='Image du bien'class='card-img-top img-fluid' src='photos/annonce_".$ID."/".$ID."-1.jpg'>
            </div>";
            echo "<div class='carousel-item'>
            <img class='d-block img-fluid' alt='Image du bien' title='Image du bien'class='card-img-top img-fluid' src='photos/annonce_".$ID."/".$ID."-2.jpg'>
            </div>";}

            else if($ID==3 || $ID==5 || $ID==6 ||$ID==7 || $ID==8){echo"<div class='carousel-item active'>
                <img class='d-block img-fluid' alt='Image du bien' title='Image du bien'class='card-img-top img-fluid' src='photos/annonce_".$ID."/".$ID."-1.jpg'>
                  </div>";
                  echo "<div class='carousel-item'>
                  <img class='d-block img-fluid' alt='Image du bien' title='Image du bien'class='card-img-top img-fluid' src='photos/annonce_".$ID."/".$ID."-2.jpg'>
                  </div>";
                  echo "<div class='carousel-item'>
                  <img class='d-block img-fluid' alt='Image du bien' title='Image du bien'class='card-img-top img-fluid' src='photos/annonce_".$ID."/".$ID."-3.jpg'>
                  </div>";}

            else if($ID==10){echo"<div class='carousel-item active'>
                    <img class='d-block img-fluid' alt='Image du bien' title='Image du bien'class='card-img-top img-fluid' src='photos/annonce_".$ID."/".$ID."-1.jpg'>
                      </div>";
                      echo "<div class='carousel-item'>
                      <img class='d-block img-fluid' alt='Image du bien' title='Image du bien'class='card-img-top img-fluid' src='photos/annonce_".$ID."/".$ID."-2.jpg'>
                      </div>";
                      echo "<div class='carousel-item'>
                      <img class='d-block img-fluid' alt='Image du bien' title='Image du bien'class='card-img-top img-fluid' src='photos/annonce_".$ID."/".$ID."-3.jpg'>
                      </div>";
                      echo "<div class='carousel-item'>
                      <img class='d-block img-fluid' alt='Image du bien' title='Image du bien'class='card-img-top img-fluid' src='photos/annonce_".$ID."/".$ID."-5.jpg'>
                      </div>";
                      echo "<div class='carousel-item'>
                      <img class='d-block img-fluid' alt='Image du bien' title='Image du bien'class='card-img-top img-fluid' src='photos/annonce_".$ID."/".$ID."-4.jpg'>
                      </div>";}
            
            echo "</div>"
            
            
            ?>


          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>



      <div class="col-lg-12">

        <div class="card mt-4">
          <div class="card-body">
            <h3 class="card-title"><?php if($annonce->an_type=1){echo "Maison";}else if($annonce->an_type=2){echo "Appartement";}else{echo"Terrain";};echo"  ";echo $annonce->an_titre; ?></h3>
            <br>
            <h4>Type d'offre:</h4>
            <?php if($annonce->an_offre=="A"){echo "Achat d'un montant de ".$annonce->an_prix."€.";}else if($annonce->an_offre=="L"){echo"Location d'un montant de ".$annonce->an_prix."€ par mois.";} else{echo"Viager";} ?>
            <br>
            <h4>Description</h4>
            <p class="card-text"><?php echo $annonce->an_description."Nombre de pièces: ".$annonce->an_pieces; ?></p>
            <h4>Localisation</h4>
            <p class="card-text"><?php echo $annonce->an_local; ?></p>
            <h4>Diagnostic energétique</h4>
            <p class="card-text"><?php echo $annonce->an_diagnostic; ?></p>
            <h4>Date d'ajout</h4>
            <p class="card-text"><?php echo $annonce->an_d_ajout; ?></p>

          </div>
        </div>
    
<br>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
