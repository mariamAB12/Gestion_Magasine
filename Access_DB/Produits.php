<?php
include_once "connexion.php";
$link=Connect();

function AddProduit($data)
{
    global $link;
    $newimage1='';
    $newimage2='';
    $newimage3='';
    if($_FILES["image1"]["error"] === 0){
        $name=$_FILES["image1"]["name"];
        $imageext1=explode('.',$name);
        $imageext1=strtolower(end($imageext1));
        $newimage1=uniqid();
        $newimage1 .='.'.$imageext1;
        move_uploaded_file($_FILES["image1"]["tmp_name"], "../IHM/public/imgs/".$newimage1);
    }
    if($_FILES["image2"]["error"] === 0){
        $name=$_FILES["image2"]["name"];
        $imageext2=explode('.',$name);
        $imageext2=strtolower(end($imageext2));
        $newimage2=uniqid();
        $newimage2 .='.'.$imageext2;
        move_uploaded_file($_FILES["image2"]["tmp_name"], "../IHM/public/images/".$newimage2);
    }
    if($_FILES["image3"]["error"] === 0){
        $name=$_FILES["image3"]["name"];
        $imageext3=explode('.',$name);
        $imageext3=strtolower(end($imageext3));
        $newimage3=uniqid();
        $newimage3 .='.'.$imageext3;
        move_uploaded_file($_FILES["image1"]["tmp_name"], "../IHM/public/images/".$newimage3);
    }
    $req="Insert into produits (nom, marque, categorie, prix, description, quantite, image1, image2, image3,pourcentageReduction)
          VALUES ('{$data['nom']}','{$data['marque']}','{$data['categorie']}','{$data['prix']}','{$data['description']}','{$data['quantite']}','$newimage1','$newimage2','$newimage3','{$data['pourcentageReduction']}')";
    mysqli_query($link,$req);
}

function editQProduit($id, $qte)
{
    global $link;
    $req="UPDATE produits SET quantite=quantite-{$qte} WHERE id_Produit='{$id}'";
    mysqli_query($link,$req);
}
function editProduit($data)
{
    global $link;
    $newimage1='';
    $newimage2='';
    $newimage3='';
        if($_FILES["image1"]["error"] === 0){
            $name=$_FILES["image1"]["name"];
            $imageext1=explode('.',$name);
            $imageext1=strtolower(end($imageext1));
            $newimage1=uniqid();
            $newimage1 .='.'.$imageext1;
            move_uploaded_file($_FILES["image1"]["tmp_name"], "../IHM/public/images/".$newimage1);
        }else $newimage1=$data['img1'];
    if($_FILES["image2"]["error"] === 0){
        $name=$_FILES["image2"]["name"];
        $imageext2=explode('.',$name);
        $imageext2=strtolower(end($imageext2));
        $newimage2=uniqid();
        $newimage2 .='.'.$imageext2;
        move_uploaded_file($_FILES["image2"]["tmp_name"], "../IHM/public/images/".$newimage2);
    }else $newimage2=$data['img2'];

    if($_FILES["image3"]["error"] === 0){
        $name=$_FILES["image3"]["name"];
        $imageext3=explode('.',$name);
        $imageext3=strtolower(end($imageext3));
        $newimage3=uniqid();
        $newimage3 .='.'.$imageext3;
        move_uploaded_file($_FILES["image1"]["tmp_name"], "../IHM/public/images/".$newimage3);
    } else $newimage3=$data['img3'];
    $req="UPDATE produits 
        SET nom='{$data['nom']}', marque='{$data['marque']}', categorie='{$data['categorie']}', prix='{$data['prix']}', description='{$data['description']}', quantite='{$data['quantite']}', image1='$newimage1', image2='$newimage2', image3='$newimage3',pourcentageReduction='{$data['pourcentageReduction']}' 
        WHERE id_Produit='{$data['id']}'";
    mysqli_query($link,$req);
}


function deleteProduit($id)
{
    global $link;
    $req="DELETE FROM produits WHERE id_Produit='$id'";
    mysqli_query($link,$req);
}

function findProduit($id)
{
    global $link;
    $req="SELECT *  FROM produits WHERE id_Produit='$id'";
    $produit=mysqli_query($link,$req);
    return mysqli_fetch_row($produit);
}


function listProduit()
{
    global $link;
    $req="SELECT *  FROM produits";
    $produit=mysqli_query($link,$req);
    return mysqli_fetch_all($produit);
}

function prixunit($id)
{
    global $link;
    $req="SELECT (prix-(prix*pourcentageReduction)) as 'prixpromo'  FROM produits WHERE id_Produit=$id ";
    $produit=mysqli_query($link,$req);
    $prix= mysqli_fetch_assoc($produit);
    return $prix['prixpromo'];
}