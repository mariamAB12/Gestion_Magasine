<?php
include_once "connexion.php";
include_once "Produits.php";
$link=Connect();


function addCommande($data)
{
    global $link;
    $date=date("Y/m/d");
    $req="Insert into commandes (id_Client, date, total)
          VALUES ('{$data['id_Client']}',$date,'{$data['total']}')";
    mysqli_query($link,$req);
    $idcommand=$link->insert_id;
    foreach ($data['produits'] as $index => $produit) {
        $quntite=$data['quantity'][$index];
        $p=$data['produits'][$index];
        editQProduit($data['idp'],$quntite);
        $prix=prixunit($data['idp']);
       $reqdetails="Insert into detailscommande (id_Command, id_produit, quantite,prixunitaire)
                     VALUES ('$idcommand','{$data['idp']}','$quntite','$prix')";
        mysqli_query($link,$reqdetails);
    }
}

function annulercommande($id)
{
    global $link;
    $req="UPDATE commandes SET etat='Annuller' WHERE id_Command=$id";
    mysqli_query($link,$req);
    $req="UPDATE produits SET quantite=quantite+(SELECT quantite FROM detailscommande WHERE id_Produit=id_produit AND id_Command=3 ) WHERE id_Produit=(SELECT id_produit FROM detailscommande WHERE id_Command=$id )";
    mysqli_query($link,$req);
}

function Confirmecommande($id)
{
    global $link;
    $req="UPDATE commandes SET etat='Confirmer' WHERE id_Command={$id}";
    mysqli_query($link,$req);
}


function listcommand()
{
    global $link;
    $req="SELECT *  FROM commandes ";
    $commands=mysqli_query($link,$req);
    return mysqli_fetch_all($commands);
}

