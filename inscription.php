<?php
include_once 'include/header.php';
?>
 <h1 class="text-center">Inscription</h1>
             <form>
               <fieldset>
            <div class="container">
                 
                <div class="form-group">
                   <label for="email">Nom</label>
                   <input type="email" class="form-control border border-dark" id="email" placeholder="nom">
                 </div>
                <div class="form-group">
                   <label for="email">Prenom</label>
                   <input type="email" class="form-control border border-dark" id="email" placeholder="prenom">
                 </div>
                <div class="form-group">
                   <label for="email">Date de naissance</label>
                   <input type="email" class="form-control border border-dark" id="email" placeholder="12/11/1992">
                 </div>
                <div class="form-group">
                   <label for="email">Adresse</label>
                   <input type="email" class="form-control border border-dark" id="email" placeholder="adresse">
                 </div>
                <div class="form-group">
                   <label for="email">Entrez votre mail</label>
                   <input type="email" class="form-control border border-dark" id="email" placeholder="exemple@exemple.com">
                 </div>
                 <div class="form-group">
                   <label for="email">Mot de passe</label>
                   <input type="password" class="form-control border border-dark" id="password" placeholder="password">
                 </div>
                 <div class="form-group">
                   <label for="email">Confimez mot de passe</label>
                   <input type="password" class="form-control border border-dark" id="password" placeholder="password">
                 </div>
                 <button class=" btn btn-outline-dark" type="submit">Envoyer</button>
                 
            
               </fieldset>
             </form>
         </div>
        </div>


<?php 
include_once 'include/include_footer.php';
?>