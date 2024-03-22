<?php session_start();
$produits=$_SESSION['Produits']; ?>
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
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="../../index.php">magasin de PC</a>
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
                        <a class="nav-link" href="../../Gestion_Actions/Commandes.php?action=listCommandes">
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
                        <a class="nav-link" href="../../Gestion_Actions/Clients.php?action=listClients">
                            <span data-feather="users"></span>
                            Clients
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Produits</h1>
            </div>
            <br>
            <h2> <a class="btn btn-primary" href="../../Gestion_Actions/Produits.php?action=Form_Add">Ajouter</a> </h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>#ID</th>
                        <th>NOM</th>
                        <th>MARQUE</th>
                        <th>CATEGORIE</th>
                        <th>PRIX</th>
                        <th>QUANTITE</th>
                        <th>P.R</th>
                        <th colspan="2"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($produits as $produit){?>
                    <tr>
                        <td><?= $produit[0] ?></td>
                        <td><?= $produit[1] ?></td>
                        <td><?= $produit[4] ?></td>
                        <td><?= $produit[2] ?></td>
                        <td><?= $produit[5] ?></td>
                        <td><?= $produit[6] ?></td>
                        <td><?= $produit[10] * 100 ?> %</td>
                        <td colspan="2">
                            <a class="btn btn-warning btn-sm" href="../../Gestion_Actions/Produits.php?action=Form_Edit&id=<?= $produit[0] ?>">Modifier</a>
                            <a class="btn btn-danger btn-sm" href="../../Gestion_Actions/Produits.php?action=Delete&id=<?= $produit[0] ?>">Supprimer</a>
                        </td>
                    </tr>
                    <?php }?>
                    </tbody>
                </table>
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
