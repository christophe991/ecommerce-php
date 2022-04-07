<?php
include_once 'include/header.php';
?>
<form action="">
    <fieldset>
        <div class="container">
            <h1 class="text-center">Gestion des produits</h1>
            <form>
                <fieldset>
                    <legend>Connexion administrateur</legend>

                    <div class="form-group">
                        <label for="nom">Titre</label>
                        <input type="text" class="form-control border border-dark" id="nom" placeholder="titre">
                    </div>

                    <div class="form-group">
                        <label for="email">Plateforme</label>
                        <input type="email" class="form-control border border-dark" id="email" placeholder="xbox">
                    </div>
                    <div class="form-group">
                        <label for="email">Genre</label>
                        <input type="password" class="form-control border border-dark" id="password" placeholder="action">
                    </div>
                    <div class="form-group">
                        <label for="email">Prix</label>
                        <input type="password" class="form-control border border-dark" id="password" placeholder="">
                    </div>
                    

                    <div class="form-group">
                        <label for="selection">Choisir plateforme</label>
                        <select id="selection" class="form-control">
                            <option value="">Liste de choix...</option>
                            <optgroup label="Groupe d'options 1">
                                <option value="">Xbox one</option>
                                <option value="">PS4</option>
                                
                            </optgroup>
                    <button class=" btn btn-outline-dark" type="submit">Envoyer</button>

                </fieldset>
            </form>
        </div>

        <?php
        include_once 'include/include_footer.php';
        ?>