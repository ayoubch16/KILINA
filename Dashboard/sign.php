<?php include 'header1.php';?>
<style>p{margin:0!important}.form-input{width:300px;height:45px;background-color:#e8e8e7;border:1px solid #a2a2a1;border-radius:10px}.btnP{width:250px;height:48px;color:#fff;display:flex;justify-content:center;align-items:center;background-color:#000;text-align:center;font-size:20px}.btnP:hover{text-decoration:none;background-color:#fff;color:#000}.panier{text-align:center}.panier h1{font-size:42px;font-weight:bold}.flex-container{display:-ms-flexbox;display:-webkit-flex;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-align-content:center;-ms-flex-line-pack:center;align-content:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.flex-item:nth-child(1){-webkit-order:0;-ms-flex-order:0;order:0;-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;-webkit-align-self:auto;-ms-flex-item-align:auto;align-self:auto}.flex-item:nth-child(2){-webkit-order:0;-ms-flex-order:0;order:0;-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;-webkit-align-self:auto;-ms-flex-item-align:auto;align-self:auto}.flex-item:nth-child(3){-webkit-order:0;-ms-flex-order:0;order:0;-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;-webkit-align-self:auto;-ms-flex-item-align:auto;align-self:auto}.flex-item:nth-child(4){-webkit-order:0;-ms-flex-order:0;order:0;-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;-webkit-align-self:auto;-ms-flex-item-align:auto;align-self:auto}.flex-item:nth-child(5){-webkit-order:0;-ms-flex-order:0;order:0;-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;-webkit-align-self:auto;-ms-flex-item-align:auto;align-self:auto}.flex-item:nth-child(6){-webkit-order:0;-ms-flex-order:0;order:0;-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;-webkit-align-self:auto;-ms-flex-item-align:auto;align-self:auto}.flex-item:nth-child(7){-webkit-order:0;-ms-flex-order:0;order:0;-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;-webkit-align-self:auto;-ms-flex-item-align:auto;align-self:auto}</style>
<script>document.title="Sign Up";</script>
<body>
<?php include 'top1.php';?>
<div style="width:100vh" class="panier bg-white container rounded p-4">
<div id="panier1" class="flex-container">
<form method="POST" action="authen.php">
<div class="flex-item my-2"><img src="img/icons/logo.png" width="200" height="100" alt=""></div>
<div class="flex-item"> <h1>Bienvenu</h1></div>
<div class="flex-item"> <h5>-Administrateur-</h5></div>
<div class="flex-item my-2"> <p style="font-size:10px;text-align:left">Adresse Email</p><input class="form-input" type="email" required name="email" placeholder=""></div>
<div class="flex-item my-2"> <p style="font-size:10px;text-align:left">Mot de passe</p><input class="form-input" type="password" required name="mdp" placeholder=""></div>
<div class="flex-item text-right"> <a style="font-size:10px;color:#000" href="inscriptionadmin.php">Creer un nouvelle compte</a></div>
<div class="flex-item mx-4 my-2"><input type="submit" class="btnP rounded" value="Se connecter" name="" id=""></div>
</form>
</div>
</div>
</body>