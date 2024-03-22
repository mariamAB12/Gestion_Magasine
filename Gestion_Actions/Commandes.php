<?php
include_once '../Access_DB/Commandes.php';
include_once '../Access_DB/Produits.php';
$action = "afficher";
if (isset($_GET['action']))
    $action = $_GET['action'];
session_start();
$_SESSION['Commandes']=listcommand();
switch ($action){
    case 'cart':
        $_SESSION['pr']=findProduit($_GET['idp']);
        header('Location:../IHM/Commands/Cart.php');
        break;
    case 'add':
        addCommande($_POST);
        header('Location:Commandes.php');
        break;
    case 'listCommandes':
        header('Location:../IHM/Commands/Commandslist.php');
        break;
    case 'Annuler':
        annulercommande($_GET['id']);
        header('Location:Commandes.php?action=listCommandes');
        break;
    case 'Confirme':
        Confirmecommande($_GET['id']);
        header('Location:Commandes.php?action=listCommandes');
        break;
    default:
        header('Location:../index.php');
}