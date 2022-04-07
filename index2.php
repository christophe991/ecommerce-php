<link rel="stylesheet" href="css/style3.css">

<body>
    <header>Zone du haut</header>
    <main>
        <aside>
        <div>D1</div>
        </aside>
        <div>
        <form action="<?php echo $_SERVER["php_self"]?>" method="POST">
    
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


        </div>
        
    </main>
    <!-- <aside class="left">Zone de gauche</aside>
    <aside class="right">Zone de droite</aside>
    <footer>Zone du bas</footer> -->
</body>