<?php   include 'db-conn.php';
        include 'header.php';

        if($_GET['edit']=='Modifier'){
            $textTop=$_GET['textTop'];
            $text1=str_replace("'","\'",$textTop);
            $textMV=$_GET['textMV'];
            $text2=str_replace("'","\'",$textMV);
            $prixL=$_GET['prixL'];
            $sql="UPDATE `module` SET `textTop`='$text1',`textMV`='$text2',`prixLivraison`=$prixL";
            if ($cnx->query($sql) == TRUE) { 
                
            } else {
                echo ' error !';  
            }  
             
        }
?>
<body>
<script>document.title="Gestion des Modules";</script>
<style>input[type='text'],input[type='number']{border:1px solid #9d9d9d;border-radius:5px;width:100%;height:50px}</style>
<div class="wrapper">
<?php include 'menu.php';?>
<?php 
        $sql="SELECT * FROM `module` WHERE id=1";
        $result = $cnx->query($sql);
        if ($row = $result->fetch_assoc()) {
        }
        ?>
<div class="main">
<?php include 'Top.php';?>
<main class="content">
<div class="container-fluid p-0">
<h1 class="h3 mb-3"><strong>Gestion des Modules</strong></h1>
<form>
<div class="row">
<div class="col-md-3"><h6>Texte de Top :</h6></div>
<div class="col-md-6"><input class="text-center" type="text" value="<?php echo $row['textTop'];?>" name="textTop" required/> </div>
</div><br><br>
<div class="row">
<div class="col-md-3"><h6>Texte Meilleur vendu :</h6></div>
<div class="col-md-6"><input class="text-center" type="text" value="<?php echo $row['textMV'];?>" name="textMV" required /> </div>
</div><br><br>
<div class="row">
<div class="col-md-3"><h6>Prix de Livraison :</h6></div>
<div class="col-md-6"><input class="text-center" type="number" value="<?php echo $row['prixLivraison'];?>" name="prixL" required /> </div>
</div><br><br>
<div class="row text-end">
<div class="col-md-6"> <input type="submit" name="edit" value="Modifier"> </div>
</div><br>
</form>
</div>
</main>
</div>
</div>
<?php include 'script.php';?>
</body>
</html>