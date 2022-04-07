<?php
include_once 'include/header.php';




if(isset($_POST['login'])){
  if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['motdepasse'])){
    $validation = true;
    if(strlen($_POST['nom']) > 2){//strlen permet de verifier la longeur du mot introduit dans $_POST
      displayErrorMsg("Nom invalide.");
      $validation = false;
    }
    if(!strpos($_POST['email'], "@")){//strpos permet de verifier si il y a le @ dans l'adresse email
      displayErrorMsg("l'adresse email est pas valide.");
      $validation = false;
    }
    if($validation){
      echo "<p style=\" color: green;\"> Vos coordonnées ont bien été transmises.</p>";
    }
  }else {
    displayErrorMsg("Vous devez remplir tout les champs du formulaire");
  }
}
?>


<form action="<?php echo $_SERVER["php_self"]?>" method="POST">
    <fieldset>
    <div class="container">
             <h1 class="text-center">Gestion des produits</h1>
             <form>
               <fieldset>
                 <legend>Connexion administrateur</legend>
                 
                 <div class="form-group">
                   <label for="nom">Entrez votre nom</label>
                   <input type="text" class="form-control border border-dark" id="nom" placeholder="Nom">
                 </div>
                 
                 <div class="form-group">
                   <label for="email">Entrez votre mail</label>
                   <input type="email" class="form-control border border-dark" id="email" placeholder="exemple@exemple.com">
                 </div>
                 <div class="form-group">
                   <label for="email">Mot de passe</label>
                   <input type="password" class="form-control border border-dark" id="password" placeholder="password">
                 </div>
                 <button class=" btn btn-outline-dark" type="submit" name="login">Envoyer</button>
                 
                 <!-- <div class="form-group">
                   <label for="selection">Une liste select</label>
                   <select id="selection" class="form-control">
                     <option value="">Liste de choix...</option>
                     <optgroup label="Groupe d'options 1">
                       <option value="">Option 1</option>
                       <option value="">Option 2</option>
                       <option value="">Option 3</option>
                     </optgroup>
                     <optgroup label="Groupe d'options 2">
                       <option value="">Option 4</option>
                       <option value="">Option 5</option>
                     </optgroup>
                   </select>
                 </div> -->
                 <!-- <div class="form-group">
                   <label for="bio">Biographie</label>
                   <textarea class="form-control" id="bio" rows="3"></textarea>
                 </div> -->
               </fieldset>
             </form>
         </div>
    







<?php
include_once 'include/include_footer.php';
?>