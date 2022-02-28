<?php include 'header.php';?>
<?php include 'navbar.php';?>
<body>
    <script>
        document.title = 'Connexion ';
    </script>
    <style>
        p {
            margin: 0 !important;
        }
        .btnP{
            width: 150px;
            color: #000;
            padding: 5px;
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
        .btnP1{
            width: 150px;
            height: 35px;
            color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            border: 2px solid #000;
            color: #000;
            text-align: center;
            font-size: 20px;
            margin: 0px 20px;
        }
        .btnP1:hover {
            text-decoration: none;
            background-color: #000;
            color: #fff;
            border: 2px solid #000;
        }

        .panier {
            text-align: center;
        }
        .panier h1{
            font-size: 42px;
            font-weight: bold;
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
        input[type="text"],input[type="password"],input[type="tele"],input[type="email"]{
            width: 300px;
            height: 40px;
            border-radius: 10px;
            border: 1px solid #d9d9d9;
            background-color: #f7f7f7;
            margin-bottom: 20px;
        }
    </style>
<div id="page">
<div class="panier bg-white container rounded p-4">
    <!-- inscription -->
    <form method="POST" action="authen.php">
    <div id="panier1" class="flex-container">
        <div class="flex-item my-2"> <h1>Connexion</h1></div>
        <div id="infoPanier" class="bg-white">
                    <div class="row">
                        <div class="col-sm text-left mx-2">
                            <p style="font-size: 15px;">Adresse Email :</p>
                            <input class="text-center" type="email" name="email">

                            <p style="font-size: 15px;">Mot de passe :</p>
                            <input id="password" type="password" name="mdp" >
                        </div>

                    </div>
        </div> 
        <div  class="flex-item my-1">
            <a style="color: #000;" href="Inscription.php">créer votre compte</a>
        </div>
        <div class="flex-item my-2 row">
            <input class="btnP rounded" type="submit"  value="Connexion" />
        </div>
    </div>
    </form>
 
</div>



</div>




    
   

</body>
<?php include 'footer.php';?>
