<?php
include_once "connexion.php";
$link=Connect();

 function addClient($data)
 {
     global $link;
     $req="Insert into clients (nomClient, prenom, telephone, adresse, email, password)
          VALUES ('{$data['nom']}','{$data['prenom']}','{$data['telephone']}','{$data['adresse']}','{$data['email']}','{$data['psswd']}')";
     mysqli_query($link,$req);

 }

function editClient($data)
{
    global $link;
    $req="UPDATE clients SET nomClient='{$data['nom']}', prenom='{$data['prenom']}', telephone='{$data['telephone']}', adresse='{$data['adresse']}', email='{$data['email']}', password='{$data['psswd']}'
          WHERE id_Client='{$data['id']}'";
    mysqli_query($link,$req);

}

function login($data)
{
    global $link;
    $req="Select * From vendeur where user='{$data['email']}'";
    $rest=mysqli_query($link,$req);
    $idc=mysqli_fetch_assoc($rest);
    if($idc && $idc['pass']===$data['password']) {
        session_start();
        $_SESSION['admin'] = "active";
        return true;
    }else{
        $req="Select * From clients where email='{$data['email']}'";
        $rest=mysqli_query($link,$req);
        $idc=mysqli_fetch_assoc($rest);
        if($idc && $idc['password']===$data['password']){
            session_start();
            $_SESSION['loginClient']=$idc['nomClient'];
            $_SESSION['idc']=$idc['id_Client'];
            return true;
        }else
            return false;
    }

}
function listClients()
{
    global $link;
    $req="SELECT *  FROM clients";
    $client=mysqli_query($link,$req);
    return mysqli_fetch_all($client);

}