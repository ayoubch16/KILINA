<?php 
$name=$_GET['name'];
$Ref=$_GET['Ref'];
$tele=$_GET['tele'];
$adresse=$_GET['adresse'];
$prix=$_GET['prix'];


?>
<!DOCTYPE html>
<html lang=en>
<head>
<meta charset=UTF-8>
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta name=viewport content="width=device-width, initial-scale=1.0">
<title>Ticket</title>
<link rel=stylesheet href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<style>@import url("https://fonts.googleapis.com/css2?family=Staatliches&display=swap");@import url("https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap");*{margin:0;padding:0;box-sizing:border-box}body,html{height:auto;width:auto;display:grid;color:black;font-size:14px;letter-spacing:.1em}.ticket{margin:auto;display:flex;background:white;border:1px solid #000}.left{display:flex}.ticket-info{padding:10px 30px;display:flex;flex-direction:column;text-align:center;justify-content:space-between;align-items:center}.show-name{font-size:32px;font-family:"Nanum Pen script",cursive}.show-name h1{font-size:48px;font-weight:700;letter-spacing:.1em;color:#4a437e}.time{padding:10px 0;color:#4a437e;text-align:center;display:flex;flex-direction:column;gap:10px;font-weight:700}.left .time{font-size:16px}</style>
</head>
<body>
<div class=ticket>
<div class=left>
<div class=ticket-info>
<p class>
<span>Monsieur / Madame : <?php echo $name ;?></span>
</p>
<div class=show-name>
<h1>Ref :</h1>
<h2><?php echo $Ref ;?></h2>
</div>
<div style="background-color: yellow;" class="time px-2">
<p>Prix : <?php echo $prix ;?> </p>
</div>
<div class="time">
<p>Tele : <?php echo $tele ;?> </p>
</div>
<div class="time">
<p>Adresse : <br> <?php echo $adresse ;?> </p>
</div>
</div>
</div>
</div>
<script>window.print();</script>
</body>
</html>