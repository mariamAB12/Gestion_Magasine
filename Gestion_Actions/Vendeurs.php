<?php
include_once '../Access_DB/Vendeurs.php';

$action = "index";
if (isset($_GET['action']))
    $action = $_GET['action'];
session_start();
//$_SESSION['Commandes']=listcommand();

switch ($action){
    case 'Login':
        login($_POST);
        if(isset($_SESSION['login']))
            header('Location:../IHM/Vendeur/index.php');
        else header('Location:Vendeurs.php');
        break;
    case 'signup':
        AddVendeur($_POST);
        header('Location:../IHM/Vendeur/Login.php');
        break;
    case 'Form_login':
        header('Location:../IHM/Vendeur/Login.php');
        break;
    case 'Form_signup':
        header('Location:../IHM/Vendeur/signup.php');
        break;
    case 'signout':
        unset($_SESSION['admin']);
        header('Location:Vendeurs.php');
        break;
    default:
        header('Location:../index.php');
}