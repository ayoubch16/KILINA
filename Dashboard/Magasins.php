<?php 
include 'db-conn.php';
include 'header.php';?>
<body>
<style>.edit img{filter:brightness(0%)}.edit img:hover{filter:brightness(100%)}</style>
<script>document.title="Nos Boutique";</script>
<div class="wrapper">
<?php include 'menu.php';?>
<div class="main">
<?php include 'Top.php';?>
<main class="content">
<div class="container-fluid p-0">
<h1 class="h3 mb-3"><strong>Nos Boutique</strong></h1>
<div class="row">
<div class="col-xl col-xxl">
<div class="w-100">
<div class="col-sm">
<div class="card">
<div class="card-body">
<div class="table-responsive table-upgrade">
<table class="table">
<thead>
<tr>
<th class="text-left"></th>
<th class="text-left">Ville</th>
<th class="text-left">Adresse</th>
<th class="text-left">Telephone</th>
<th class="text-left">localisation</th>
<th class="text-left"></th>
</tr>
</thead>
<tbody id="myTable">
<?php $sql="SELECT * FROM `boutiques1` ";
                                                              $result = $cnx->query($sql);
                                                              while ($row = $result->fetch_assoc()) {
                                                        ?>
<tr>
<td class="text-left"><img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['image']); ?>" width="20" height="20" alt=""></td>
<td class="text-left"><?php echo $row['ville'];?></td>
<td class="text-left"><?php echo $row['adresse'];?></td>
<td class="text-left"><?php echo $row['tele'];?></td>
<td class="text-left edit">
<a href="<?php echo $row['localisation'];?>"><img src="img/icons/placeholder.png" width="20" height="20" alt=""></a>
</td>
<td class="text-left edit">
<a href="removeboutique.php?id=<?php echo $row['id'];?>"><img src="img/icons/trash.png" width="15" height="20" alt=""></a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="gestionboutique">
<form class="needs-validation border p-4" action="boutique.php" method="POST" novalidate enctype="multipart/form-data">
<h2 class="text-center">Ajouter Boutique</h2>
<div class="row">
<div class="col-md mb-3">
<label for="validationCustom01">Ville</label>
<input type="text" class="form-control" id="validationCustom01" placeholder="Ville" name="ville" required>
</div>
<div class="col-md mb-3">
<label for="validationCustom02">Adresse</label>
<input type="text" class="form-control" id="validationCustom02" placeholder="Adresse" name="adresse" required>
</div>
</div>
<div class="row">
<div class="col-md mb-3">
<label for="validationCustom03">Telephone</label>
<input type="text" class="form-control" id="validationCustom03" placeholder="Telephone" name="tele" required>
</div>
<div class="col-md mb-3">
<label for="validationCustom04">Lien</label>
<input type="lien" class="form-control" id="validationCustom04" placeholder="lienMaps" name="lien" required>
</div>
</div>
<div class="row">
<div class="col-md-4 mb-3">
<label for="validationCustom05">Image</label>
<input type="file" class="form-control" id="validationCustom05" name="img1">
</div>
</div>
<div class="form-group">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
<label class="form-check-label" for="invalidCheck">
Agree to terms and conditions
</label>
<div class="invalid-feedback">
You must agree before submitting.
</div>
</div>
</div>
<button class="btn btn-primary" type="submit">Ajouter Boutique</button>
</form>
</div>
<script>(function(){window.addEventListener("load",function(){var b=document.getElementsByClassName("needs-validation");var a=Array.prototype.filter.call(b,function(c){c.addEventListener("submit",function(d){if(c.checkValidity()===false){d.preventDefault();d.stopPropagation()}c.classList.add("was-validated")},false)})},false)})();</script>
</div>
</main>
</div>
</div>
<?php include 'script.php';?>
</body>
</html>