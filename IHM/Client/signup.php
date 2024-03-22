
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="../public/style/signin.css" rel="stylesheet">
</head>

<body class="text-center">
<form class="form-signin" action="../../Gestion_Actions/Clients.php?action=signup" method="post">
    <h1><a class="brand">Your Magasine</a></h1>
    <br/>
    <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>

    <label for="inputEmail" class="sr-only">Nom</label>
    <input name="nom" type="text" id="inputEmail" class="form-control" placeholder="Nom" required autofocus><br>
    <label for="inputPassword" class="sr-only">Prenom</label>
    <input name="prenom" type="text" id="inputPassword" class="form-control" placeholder="Prenom" required><br>
    <label for="inputEmail" class="sr-only">telephone</label>
    <input name="telephone" type="text" id="inputEmail" class="form-control" placeholder="telephone" required><br>
    <label for="inputPassword" class="sr-only">adresse</label>
    <input name="adresse" type="text" id="inputPassword" class="form-control" placeholder="adresse" required><br>
    <label for="inputEmail" class="sr-only">Email</label>
    <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required><br>
    <label for="inputPassword" class="sr-only">Password</label>
    <input name="psswd" type="password" id="inputPassword" class="form-control" placeholder="Password" required><br>

    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign Up"/>
    <br>
    If you have an account <a href="Login.php" class="form-link">Sign in</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2023-2024</p>
</form>
</body>
</html>
