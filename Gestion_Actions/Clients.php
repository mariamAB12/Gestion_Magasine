<?php
include_once '../Access_DB/Clients.php';
$action = "index";
if (isset($_GET['action']))
    $action = $_GET['action'];
session_start();
$_SESSION['Clients']=listClients();
switch ($action){
    case 'Login':
        login($_POST);
        header('Location:Clients.php');
        break;
    case 'signup':
        addClient($_POST);
        header('Location:../IHM/Client/Login.php');
        break;
    case 'Form_login':
        header('Location:../IHM/Client/Login.php');
        break;
    case 'Form_signup':
        header('Location:../IHM/Client/signup.php');
        break;
    case 'signout':
        unset($_SESSION["loginClient"]);
        header('Location:Clients.php');
        break;
    case 'compte':
        header('Location:../IHM/Client/MonCompte.php');
        break;
    case 'listClients':
        header('Location:../IHM/Client/listClients.php');
        break;
    case 'block':
        break;
    default:
        header('Location:../index.php');
}