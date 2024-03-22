<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
    <div class="container-fluid">
        <li class="nav-item">
            <a class="navbar-brand text-white text-center">Your Magasine</a>
        </li>
        <div class="collapse navbar-collapse justify-content-md-end" id="navbarsExample08">
            <ul class="navbar-nav row">
                <li class="nav-item col-2">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown col-3">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Produits</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Desktop</a></li>
                        <li><a class="dropdown-item" href="#">Portable</a></li>
                    </ul>
                </li>
                <li class="nav-item col-2">
                    <a class="nav-link " href="#">Panel</a>
                </li>

                <?php if (isset($_SESSION["admin"])) { ?>
                    <li class="nav-item dropdown col-3">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./IHM/Vendeur/index.php">Dashboard</a></li>
                            <li><a class="dropdown-item" href="./Gestion_Actions/Produits.php?action=listProduits">Produits</a></li>
                            <li><a class="dropdown-item" href="./Gestion_Actions/Clients.php?action=listClients">Clients</a></li>
                            <li><a class="dropdown-item" href="./Gestion_Actions/Commandes.php?action=listCommandes">Commandes</a></li>
                            <li><a class="dropdown-item" href="Gestion_Actions/Vendeurs.php?action=signout">Sign Out</a></li>
                        </ul>
                    </li>

                <?php }else {
                    if (isset($_SESSION["loginClient"])) { ?>
                <li class="nav-item col-4">
                    <a class="nav-link " href="Gestion_Actions/Clients.php?action=signout">Sign Out</a>
                </li>
                <?php } else { ?>
                <li class="nav-item col-3">
                    <a class="nav-link " href="Gestion_Actions/Clients.php?action=Form_login">Sign In</a>
                </li>
                <?php } }?>
            </ul>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>