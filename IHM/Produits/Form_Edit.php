<?php session_start();
$produit=$_SESSION['produit']; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>magasin de PC Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../public/style/dashboard.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="../Vendeur/index.php">magasin de PC</a>
    <input class="navbar-brand form-control-dark w-100" type="text" placeholder="" aria-label="Search" readonly>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="../../Gestion_Actions/Vendeurs.php?action=signout">Sign out</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="../Vendeur/index.php">
                            <span data-feather="home"></span>
                            Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../Gestion_Actions/Commandes.php?action=listCommande">
                            <span data-feather="file"></span>
                            Commandes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="produitslist.php">
                            <span data-feather="shopping-cart"></span>
                            Produits
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../Gestion_Actions/Clients.php?action=listClient">
                            <span data-feather="users"></span>
                            Clients
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Modofier Produit</h1>
            </div>
            <br>
            <div class="table-responsive">
                <form action="../../Gestion_Actions/Produits.php?action=Edit" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="<?=$produit[0]?>" name="id">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nom</label>
                        <input name="nom" value="<?=$produit[1]?>" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Marque</label>
                        <input name="marque" value="<?=$produit[2]?>" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Marque">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Categorie</label>
                        <input name="categorie" value="<?=$produit[3]?>" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Categorie">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Prix</label>
                        <input name="prix" value="<?=$produit[4]?>" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prix">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Quantite</label>
                        <input name="quantite" value="<?=$produit[6]?>" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Quantite">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"> <?=$produit[5]?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Pourcentage Reduction : </label>
                        <select name="pourcentageReduction" class="form-select form-select-lg mb-3" aria-label="Default select example">
                            <option selected value="<?=$produit[11]?>"><?= $produit[11] * 100 ?> %</option>
                            <option value="0">0%</option>
                            <option value="0.1">10%</option>
                            <option value="0.2">20%</option>
                            <option value="0.3">30%</option>
                            <option value="0.4">40%</option>
                            <option value="0.5">50%</option>
                            <option value="0.6">60%</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Premier image</label>
                        <input type="hidden" name="img1" value="<?=$produit[8]?>">
                        <input  name="image1" type="file" class="form-control" id="exampleFormControlInput1" accept=".png, .jpg, .jpeg">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Deuxieme image </label>
                        <input type="hidden" name="img2" value="<?=$produit[9]?>" >
                        <input name="image2" type="file" class="form-control" id="exampleFormControlInput1" accept=".png, .jpg, .jpeg" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Troisieme image</label>
                        <input type="hidden" name="img3" value="<?=$produit[10]?>" >
                        <input name="image3" type="file" class="form-control" id="exampleFormControlInput1" accept=".png, .jpg, .jpeg" >
                    </div>
                    <div class="mb-3">
                        <input  type="submit" class="btn btn-primary" id="exampleFormControlInput1" value="Modifier">
                    </div>
                </form>
            </div>
        </main>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>

<!-- Graphs -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>
</body>
</html>
