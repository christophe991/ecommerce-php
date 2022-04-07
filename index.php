<?php
include_once "include/include_header.php";
include_once "connexion_bdd.php";

$bdd = new PDO("mysql:host=localhost;dbname=commerce;charset=utf8", "root", "");
$product = $bdd->query("SELECT img, titre, plateforme, genre, prix FROM produit");

?>

<h1 class="text-center">Bienvenue</h1>


<?php if (empty($product)) : ?>
    <tr>
        <td colspan="4" class="errors center">Aucun produit conrrespondant</td>
    </tr>
<?php else : ?>
    <?php foreach ($product as $products) : ?>
        <main class="">
            
            <div class="card bg-dark mb-3 d-flex" style="max-width: 20rem;">
                <div class="card-header  text-white">Titre : <?= $products["titre"]; ?></div>
                <div class="card-body bg-light">
                    <!-- <div class="card-title "> <?= $products["img"]; ?></div> -->
                    <div class="card-title ">Plateforme : <?= $products["plateforme"]; ?></div>
                    <div class="card-text">Genre : <?= $products["genre"]; ?></div>
                    <div class="card-text mt-3">Prix : <?= $products["prix"]; ?>€</div>
                    <button class="btn btn-outline-dark mt-5">Détail</button>
                </div>
            </div>
        </main>
    <?php endforeach; ?>
<?php endif; ?>
<?php
include_once "include/include_footer.php";
?>