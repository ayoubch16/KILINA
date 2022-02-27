<?php include 'header1.php';?>
<style>
       p {
            margin: 0 !important;
        }
        .btnP ,.btnP1 {
            width: 150px;
            height: 35px;
            color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #000;
            color: #fff;
            border: 2px solid #000;
            text-align: center;
            font-size: 20px;
            margin: 0px 20px;
        }
        .btnP:hover {
            text-decoration: none;
            background-color: #fff;
            border: 2px solid #000;
            color: #000;
        }
        .btnP {
            background-color: #000;
            color: #fff;
            border: 2px solid #000;
        }
        .btnP1{ 
            background-color: #fff;
            border: 2px solid #000;
            color: #000;
        }
        .btnP1:hover {
            text-decoration: none;
            background-color: #000;
            color: #fff;
            border: 2px solid #000;
        }
        .flex-container {
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-flex-wrap: nowrap;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-align-content: center;
            -ms-flex-line-pack: center;
            align-content: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            }

        .flex-item:nth-child(1) {
            -webkit-order: 0;
            -ms-flex-order: 0;
            order: 0;
            -webkit-flex: 0 1 auto;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            -webkit-align-self: auto;
            -ms-flex-item-align: auto;
            align-self: auto;
            }

        .flex-item:nth-child(2) {
            -webkit-order: 0;
            -ms-flex-order: 0;
            order: 0;
            -webkit-flex: 0 1 auto;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            -webkit-align-self: auto;
            -ms-flex-item-align: auto;
            align-self: auto;
        }

        .flex-item:nth-child(3) {
            -webkit-order: 0;
            -ms-flex-order: 0;
            order: 0;
            -webkit-flex: 0 1 auto;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            -webkit-align-self: auto;
            -ms-flex-item-align: auto;
            align-self: auto;
            }
            .flex-item:nth-child(4) {
            -webkit-order: 0;
            -ms-flex-order: 0;
            order: 0;
            -webkit-flex: 0 1 auto;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            -webkit-align-self: auto;
            -ms-flex-item-align: auto;
            align-self: auto;
            }
            input[type="text"],input[type="password"],input[type="tele"],input[type="email"],textarea,select {
            width: 300px;
            height: 40px;
            border-radius: 10px;
            border: 1px solid #d9d9d9;
            background-color: #f7f7f7;
            margin-bottom: 20px;
        }
</style>
<script>
    document.title = 'Inscription';
    </script>
<body>
<?php include 'top1.php';?> 
<div class="panier bg-white container rounded p-4">
    <!-- panier vide -->
    <form method="GET" action="insereadmin.php">
    <div id="panier1" class="flex-container">
        <div class="flex-item my-2"> <h1>Inscription</h1></div>
<div class="flex-item my-2"><img src="img/icons/logo.png" width="150" height="60" alt=""></div>

        <div class="flex-item "> <h5>-Administrateur-</h5></div>
        <div id="infoPanier" class="bg-white">
                    <div class="row">
                        <div class="col-sm text-left mx-2">
                            <p style="font-size: 15px;">Nom :</p>
                            <input class="text-center" type="text" required name="nom">

                            <p style="font-size: 15px;">Tele :</p>
                            <input class="text-center" type="tele" required name="tele">



                            <p style="font-size: 15px;">Mot de passe :</p>
                            <input id="password" type="password" required name="mdp" onkeyup='check();'>

                            <p style="font-size: 15px;">Confirmer Mot de passe :</p>
                            <input id="confirm_password" type="password" required name="" onkeyup='check();'> <br>
                            <span id='message'></span>
                        </div>
                        <div class="col-sm text-left mx-2">
                            <p style="font-size: 15px;">Prenom :</p>
                            <input class="text-center" type="text" required name="prenom">

                            <p style="font-size: 15px;">CIN :</p>
                            <input class="text-center" type="text" required name="cin">

                            <p style="font-size: 15px;">Adresse Email :</p>
                            <input class="text-center" type="email" required name="email">

                            <p style="font-size: 15px;">Ville :</p>
                            <select class="text-center"  required name="ville">
                                <option>RABAT</option>
                                <option>CASABLANCA</option>
                                <option>SALE</option>
                                <option>MARRAKECH</option>
                                <option>MEKNESS</option>
                            </select>

                            
                        </div>
                    </div>
        </div> 
        <div class="flex-item my-2 row">
            <input class="btnP rounded" onclick="confirm('voulez vous confirmer l\'opération!');" type="submit"  value="Inscrire" />
            <input class="btnP1 rounded" type="reset"  value="Annuler" />
        </div>
    </div>
    </form>
 
</div>  
<script>
    var check = function() {
        if (document.getElementById('password').value ==
            document.getElementById('confirm_password').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'matching';
        } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'not matching';
        }
        }
</script>

</body>
