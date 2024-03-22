<?php
include_once '../Access_DB/Produits.php';
$action = "afficher";
if (isset($_GET['action']))
    $action = $_GET['action'];
session_start();
$_SESSION['Produits']=listProduit();
switch ($action){
    case 'Form_Add':
        header('Location:../IHM/Produits/Form_ajout.php');
        break;
    case 'Add':
        AddProduit($_POST);
        header('Location:Produits.php');
        break;
    case 'Form_Edit':
        $_SESSION['produit']=findProduit($_GET['id']);
        header('Location:../IHM/Produits/Form_Edit.php');
        break;
    case 'Edit':
        editProduit($_POST);
        header('Location:Produits.php');
        break;
    case 'Delete':
        deleteProduit($_GET['id']);
        header('Location:Produits.php');
        break;
    case 'listProduits':
        header('Location:Produits.php');
        break;
    default:
        header('Location:../IHM/Produits/produitslist.php');
}