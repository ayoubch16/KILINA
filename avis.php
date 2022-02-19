
<?php include 'header.php';?>
<?php include 'navbar.php';?>
<body>
    <script>
        document.title = 'Avis ';
    </script>
<div id="page">
<h5 class="text-center m-3 p-3">Nous restons a votre ecoute afin de satisfaire</h5>
<div class="avis bg-white container rounded p-4">
    
    <div class="row text-center">
        
        <div class="col text-left">
            <p class="mx-3">Nom :</p>
            
            <div class="inputBox mx-3 p-2 row">
                <div class="p-2"><img src="image/icone/utilisateur.png" /></div>
            <input type="text" name="nom" placeholder="Votre nom" id="">
            </div>
        </div>
        
        <div class="col text-left">
            <p class="mx-3">Telephone :</p>
            <div class="inputBox mx-3 p-2 row">
                <div class="p-2"><img src="image/icone/telephone.png" /></div>
            <input type="text" name="tele" placeholder="Votre telephone" id="">
            </div>
        </div>

        <div class="col text-left">
            <p class="mx-3">Adresse Email :</p>
            <div class="inputBox mx-3 p-2 row">
                <div class="p-2"><img src="image/icone/email.png" /></div>
            <input type="text" name="email" placeholder="Votre Adresse email" id="">
            </div>
        </div>
        
    </div>
    <p class="mx-3 mt-4">Commentaire :</p>
    <div class="row ">
        <div class="col text-left">
            
            <div class="inputBox mx-3 p-2 row"> 
                
                <input type="text" name="email" placeholder="Votre Commentaire" id="">
            </div>
        </div>
        <div class="col-3 px-3 mx-3">
            <!-- <a class=" inputBox btnS mx-3 p-2 ">
                Send
            </a> -->
            <div class="inputBox btnS mx-3 p-2">
                    <p>send</p>
            </div>
            
        </div>
        
    </div>

    <div class="cdg my-4">
        <input class="mx-2" type="checkbox" name="ok" id="">
        <span>J'accepte <a href="" style="color:#E7C54F">les conditions generales d'utilisation</a></span>
    </div>
       
</div>
<div class="container p-4">
    <div class="row text-center">
        <div class="col text-left">
            <p>Ce texte latin, généralement utilisé, proviendrait d'un texte latin écrit par Cicéron en 45 avant J.-C., sans copier le texte original au complet, il reprendrait seulement certaines parties et ajouterait des fautes.</p>
        </div>
        <div class="col ">
            <div class="row">
                <div class="imgContact"><img src="image/icone/telephone.png" width="20" height="20" alt=""></div>
                <h4 class="mx-2">05 00 000 000</h4>
            </div>
            <div class="row">
                <div class="imgContact"><img src="image/icone/email.png" width="20" height="20" alt=""></div>
                <h4 class="mx-2">contact@za3bola.com</h4>
            </div>
        </div>
    </div>
</div>
</div>
    
</body>
<?php include 'footer.php';?>
