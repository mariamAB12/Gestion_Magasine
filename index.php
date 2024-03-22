<?php
include("Access_DB/Produits.php");
session_start();

$produits=listProduit();
include("IHM/public/nav_barre.php");
include("IHM/public/header.php");

?>



<main class="container">

    <?php
    if (isset($_SESSION["loginClient"])) {
        echo "<h1 class='text-center mt-4'>Bienvenue, " . $_SESSION["loginClient"] . " !</h1>";
        echo "<p class='text-center'>Vous êtes connecté à votre espace personnel.</p>";


    } else {
        echo "<h1 class='text-center mt-4'>Bienvenue sur notre magasin de PC !</h1>";
        echo "<p class='text-center'>Découvrez nos produits et commandez en ligne.</p>";
    }
    ?>


    <div class="tab-content">
        <div id="tab-1" class="tab-pane fade show p-0 active">
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <?php foreach ($produits as $produit) {
                            if($produit[6]>0){
                            ?>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="rounded position-relative fruite-item">
                                    <div class="fruite-img">
                                        <img src="IHM/public/imgs/<?=$produit[7]?>" class="img-fluid w-100 rounded-top" alt="">
                                    </div>
                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;"><?=$produit[2]?></div>
                                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                        <h4><?=$produit[1]?></h4>
                                        <p><?=substr($produit[3], 0, 50) . "..."?></p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p class="text-dark fs-5 fw-bold mb-0"><?=$produit[5]?> DH</p>
                                            <a href="Gestion_Actions/Commandes.php?action=cart&idp=<?=$produit[0]?>" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Ajouter au panier</a>
                                            <?php if($produit[6]<15){ ?>
                                            <span class="text-danger font-weight-bolder align-bottom"> <?=$produit[6]?> left &nbsp&nbsp</span>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }}?>
                    </div>
                </div>
            </div>
        </div>

</main>
<hr/>

<?php
include("IHM/public/footer.php")
?>
