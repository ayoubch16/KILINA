<?php 
include 'dbconnect.php';
session_start();
require_once('Product.class.php');
// $_SESSION['Prod'] = new Product($id,$qnt,$taille);
    $id=29;
    $qnt=$_GET['quantite'];
    $taille=$_GET['taille'];
    $id=$_GET['ref'];
    $_SESSION['Prod'] = new Product($id,$qnt,$taille);
    echo $qnt.' '.$taille.' '.$id;

    
?>
   
   
   
   
   
   
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .ListeCmd{
        position: absolute;
        top: 1%;
        right: 0;
        width: 460px;
        min-height: 100%;
        max-height: auto;
        background-color: #000;
        z-index: 100;
        box-shadow: 0px 0px 23px -2px #000000;
        background-color: #fff;
    }
    .ImgProd{
        /* width: 100px; */
        height:100px
    }
    .detaileCmd > p{
        font-size: 15px;
        margin-bottom: 0 !important;
    }
    .ListeCmd .divListeCmd  li {
        list-style: none;
    }
    .lien a{
        text-decoration: none;
        color:  #bfbfbf;
    }
    .lien a:hover{
        text-decoration: underline;
        color:  #bfbfbf;
    }
    .btn-close{
        border: none;
        background: transparent;
        color: #000;
        size: 15px;
        border-radius: 50%;
       
    }
    .btn-close:hover{
        color: red;
        size: 15px;

    }


    
    @media screen and (max-width:700px){
        .ListeCmd{
           
            width: 100%;
            height: 100%;
        }
    }
</style>
<div class="ListeCmd bg-light">
    <?php 
   
        echo 'Bonjour ' . $_SESSION['Prod']->getId();
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class=" row">
                        <h5 class="card-title text-left col-sm p-1">Votre panier () </h5>
                        <button onclick="fermerPanier()" type="button" class="btn-close p-2" aria-label="Close">X</button>
                </div>
                
                <ol class="divListeCmd">
                <li>
                <div class='row'>
                <div class='col-sm-4'>
                <img src='image/prod.jpg' class='ImgProd' alt='...'>
                </div>
                <div class='col-sm detaileCmd'>
                <h4 class='titre'>Titre</h4>
                <h6  style='color:red;'><span class='prixproduit'>200</span>DH</h6>
                <p>Taille :   <span class='taille'>M</span></p>
                <p >Quantité: <span class='qnt'>2</span></p>
                </div>
                </div>
                <div class='text-center lien'>
                <a href=''>Modifier</a>
                <a href=''>Supression</a>
                </div>
                <hr>
                </li>
                </ol>
                
                

            </div>
        </div>
    </div>
    
    <div class=" p-2" >
    <hr>
        <div class="row">
            <div class="col"> <h5 class="text-left">Sous-total :</h5> </div>
            <div class="col"> <h5 id="prixprod" class="text-right">428,00 DHS</h5> </div>
        </div>
    </div>


</div>