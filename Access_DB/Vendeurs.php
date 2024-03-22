<?php
include_once "connexion.php";
$link=Connect();



function AddVendeur($data)
{
    global $link;
    $req="Insert into vendeur (nom, prenom, telephone, adresse, email, psswd)
          VALUES ('{$data['nom']}','{$data['prenom']}','{$data['telephone']}','{$data['adresse']}','{$data['email']}','{$data['psswd']}')";
    mysqli_query($link,$req);
}

function login($data)
{
    global $link;
    $req="Select * From vendeur where email='{$data['email']}'";
    $rest=mysqli_query($link,$req);
    $idv=mysqli_fetch_assoc($rest);
    if($idv && $idv['psswd']===$data['password']){
        session_start();
        $_SESSION['login']=$idv['nom'];
        $_SESSION['idv']=$idv['id_Vendeur'];
        return true;
    }else
        return false;
}