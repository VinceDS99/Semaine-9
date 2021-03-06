<?php Include"Waz_Entete.php"; ?>

<body>
      <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="Waz_Index.php">Accueil</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="Waz_Index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Waz_Contact.php">Contact</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="Waz_Administration.php">Administration</a>
            <span class="sr-only">(current)</span>         
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
  <div class="row">


   <div class="col-lg-3">
        <img src="wazaa_logo.png" alt="Logo Wazaa" title="Logo Wazaa">
   
        <div class="list-group">
          <a href="Waz_Ajout.php" class="list-group-item">Ajouter une annonce</a>
          <a href="Waz_Photos.php" class="list-group-item">Télécharger photos</a>
          <a href="Waz_Visibilite.php" class="list-group-item">Visibilité du site</a>
        </div>
    </div>


    <form method="post" action="traitement.php" id="AjoutAnnonce">
            <div class="form-group">

            <br>


         <fieldset>
            <legend><h1>Formulaire d'ajout</h1></legend>
            <br>
            <h4>Type d'offre</h4>
            <br>
                  <div class="custom-control custom-radio">
        <input type="radio" id="Offre1" name="customRadio" class="custom-control-input" checked="checked">
        <label class="custom-control-label" for="customRadio1" >Achat</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="Offre2" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio2">Location</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="Offre3" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio3">Viager</label>
      </div>

            <fieldset>
          <h4>Type de bien</h4>
          <div class="form-group">
            <label for="exampleFormControlSelect1"></label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Maison</option>
              <option>Appartement</option>
              <option>Immeuble</option>
              <option>Garage</option>
              <option>Terrain</option>
              <option>Locaux professionnels</option>
              <option>Bureaux</option>
            </select>
         </fieldset>

         <h4>Nombre de pièces</h4>
            <br>
                  <div class="custom-control custom-radio">
        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio1">1</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio2">2</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio3">3</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio4">4</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio5">5</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio6">6</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio+6" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio+6">+6</label>
      </div>




      <br>
            <label for="Référence"><h4>Référence</h4></label><input type="text" class="form-control" name="Réference" id="Référence"><br>
            <p style="color : red;" id="erreur3"></p>
            <br>
            <label for="Titre"><h4>Titre</h4></label><input type="text" class="form-control" name="Titre" id="Titre"><br>
            <p style="color : red;" id="erreur4"></p>
            <br>



            <fieldset>
         <label for="Description"><h4>Description</h4></label>
         <textarea class="form-control" id="Description" rows="3"></textarea> <br> 
         <p style="color : red;" id="erreur5"></p>
         </fieldset>
         <br>
         <fieldset>
         <label for="Localisation"><h4>Localisation</h4></label>
         <textarea class="form-control" id="Localisation" rows="2"></textarea> <br> 
         <p style="color : red;" id="erreur6"></p>
         </fieldset>

         <label for="SurfaceHabitable"><h4>Surface Habitable</h4></label><input type="text" class="form-control" name="SurfaceHabitable" id="SurfaceHabitable"><br>

            <br>

            <label for="SurfaceTotale"><h4>Surface totale</h4></label><input type="text" class="form-control" name="SurfaceTotale" id="SurfaceTotale"><br>
            <p style="color : red;" id="erreur7"></p>
          

                  <p>
        <p><h4>Options</h4></p> 
        <input type="checkbox" name="Jardin" value="Jardin"> Jardin<br> 
        <input type="checkbox" name="Garage" value="Garage"> Garage<br>
        <input type="checkbox" name="Parking" value="Parking"> Parking<br> 
        <input type="checkbox" name="Piscine" value="Piscine"> Piscine<br> 
        <input type="checkbox" name="Combles aménageables" value="Combles aménageables"> Combles aménageables<br> 
        <input type="checkbox" name="Cuisine ouverte" value="Cuisine ouverte"> Cuisine ouverte<br> 
        <input type="checkbox" name="Sans travaux" value="Sans travaux"> Sans travaux<br> 
        <input type="checkbox" name="Avec travaux" value="Avec travaux"> Avec travaux<br> 
        <input type="checkbox" name="Cave" value="Cave"> Cave<br> 
        <input type="checkbox" name="Plain-pied" value="Plain-pied"> Plain-pied<br> 
        <input type="checkbox" name="Ascenseur" value="Ascenseur"> Ascenseur<br> 
        <input type="checkbox" name="Terrasse/balcon" value="Terrasse/balcon"> Terrasse/balcon<br> 
        <input type="checkbox" name="Cheminée" value="Cheminée"> Cheminée
      </p>
      <p style="color : red;" id="erreur8"></p>


      <label for="Prix"><h4>Prix</h4></label><input type="text" class="form-control" name="Prix" id="Prix"><br>
            <p style="color : red;" id="erreur9"></p>

            <h4>Diagnostic énergetique</h4>
            <br>
                  <div class="custom-control custom-radio">
        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio1">A</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio2">B</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio3">C</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio4">D</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio5">E</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio6">F</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio7" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio7">G</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio8" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio8">Vierge</label>
      </div>
      <p style="color : red;" id="erreur10"></p>
      <br>


      <label for="DateAjout"><h4>Date d'ajout</h4></label><input type="date" class="form-control" name="DateAjout" id="DateAjout"><br>
            <p style="color : red;" id="erreur11"></p>

            <label for="DateModification"><h4>DateModification</h4></label><input type="datetime" class="form-control" name="DateModification" id="DateModification"><br>
            <p style="color : red;" id="erreur12"></p>

         </fieldset>

         <input type="checkbox" name="Ajout" value="Ajouter cette annonce à la liste" id="Ajout">Ajouter cette annonce à la liste
         <p style="color : red;" id="erreur13"></p>
         <br>
         <br>
         <button type="submit" class="btn btn-dark" onClick="Formulaire2()">Ajouter </button>
         <button  type="reset" class="btn btn-dark" href="Waz_Index.php">Annuler </button>
    
        </form>
        
        <hr>
 </section>

    
        




 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="Waz_Formu.js"></script>
</body>


</html>

    











