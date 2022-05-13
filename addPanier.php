<?php 
include 'dbconnect.php';
session_start();
$_SESSION['titre1']='Ajouter un produit';

$sql="SELECT * FROM `produits` WHERE id=5 ";
$result = $cnx->query($sql);
if ($row = $result->fetch_assoc()) {
          echo '<script>
                  document.cookie = "id='.$row['id'].'";
                  alert(document.cookie);
            </script>';
}
// echo '<script>
//           document.cookie = "titre1=Ajouter un produit";
//           alert(document.cookie);
//     </script>';
// $_SESSION['panier'] = array();
// $_SESSION['panier']['id'] = array();
// $_SESSION['panier']['titre'] = array();
// $_SESSION['panier']['prix'] = array();
// $_SESSION['panier']['quantite'] = array();
// $_SESSION['panier']['image'] = array();
// $_SESSION['panier']['total'] = 0;


class Panier {
    public $id;public $titre;public $prix;public $quantite;public $image;public $total;

    function set_id($id) { $this->id = $id; } function get_id() { return $this->id; }

    function set_titre($titre) { $this->titre = $titre; } function get_titre() { return $this->titre; }

    function set_prix($prix) { $this->prix = $prix; } function get_prix() { return $this->prix; }

    function set_quantite($quantite) { $this->quantite = $quantite; } function get_quantite() { return $this->quantite; }

    function set_image($image) { $this->image = $image; } function get_image() { return $this->image; }

    function set_total($total) { $this->total = $total; } function get_total() { return $this->total; }
  

  }
  $panier1=new Panier();
    $panier1->set_id(1);
    $panier1->set_titre("Titre 1");
    $panier1->set_prix(10);
    $panier1->set_quantite(1);
    $panier1->set_image("image1.jpg");
    $panier1->set_total(10);
    // array_push($_SESSION['panier']['id'],$panier1->get_id());
    // array_push($_SESSION['panier']['titre'],$panier1->get_titre());
    // array_push($_SESSION['panier']['prix'],$panier1->get_prix());
    // array_push($_SESSION['panier']['quantite'],$panier1->get_quantite());
    // array_push($_SESSION['panier']['image'],$panier1->get_image());
    // array_push($_SESSION['panier']['total'],$panier1->get_total());

    
  






?>