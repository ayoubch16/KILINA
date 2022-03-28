<?php include 'header.php';?>
<?php include 'navbar.php';?>
<style>/*<![CDATA[*/.inputBox1{border:2px solid #d0d0d0;background-color:#fafafa;height:60px}.inputBox1 input{width:100%;border:0;background-color:#fafafa}.btnS1{border:2px solid #000;background-color:#edca51;color:#000}.btnS1:hover{border:2px solid #edca51;background-color:#000;color:#edca51}<?php if($_GET['c']=='1') {
    echo "#recrutement{ display: block; } #reclamation{ display: none; }";
}

else {
    echo "#recrutement{ display: none; } #reclamation{ display: block; }";
}

?>/*]]>*/</style>
<body>
<script>document.title="Information";</script>
<div id="page">
<div id="information" class="bg-white container rounded p-4">
<div id="recrutement">
<h2 class="text-center">Recrutement</h2>
<form action="recrutement.php" method="POST" enctype="multipart/form-data">
<div class="form-row">
<div class="col-md-6 mb-3">
<label for="label01">Nom :</label>
<input type="text" class="form-control" id="label01" name="nom" required/>
</div>
<div class="col-md-6 mb-3">
<label for="label02">Prenom :</label>
<input type="text" class="form-control" id="label02" name="prenom" required/>
</div>
</div>
<div class="form-row">
<div class="col-md-6 mb-3">
<label for="label03">Tele :</label>
<input type="text" class="form-control" id="label03" name="tele" required/>
</div>
<div class="col-md-6 mb-3">
<label for="label04">Email :</label>
<input type="email" class="form-control" id="label04" name="email" required/>
</div>
</div>
<div class="form-row">
<div class="col-md-6 mb-3">
<label for="label05">CV :</label>
<input type="file" class="form-control" id="label05" name="cv" />
</div>
</div>
<button class="btn btn-primary" type="submit">Envoyer</button>
</form>
</div>
<div id="reclamation">
<h1 class="text-center">Reclamation</h1>
<form class="needs-validation" action="reclamation.php" method="GET" novalidate>
<div class="form-row">
<div class="col-md-6 mb-3">
<label for="validationCustom01">Nom :</label>
<input type="text" class="form-control" id="validationCustom01" name="nom" required>
<div class="valid-feedback">
Looks good!
</div>
</div>
<div class="col-md-6 mb-3">
<label for="validationCustom02">Prenom :</label>
<input type="text" class="form-control" id="validationCustom02" name="prenom" required>
<div class="valid-feedback">
Looks good!
</div>
</div>
</div>
<div class="form-row">
<div class="col-md-6 mb-3">
<label for="validationCustom013">Email :</label>
<input type="email" class="form-control" id="validationCustom013" name="email" required>
<div class="valid-feedback">
Looks good!
</div>
</div>
<div class="col-md-6 mb-3">
<label for="validationCustom04">Telephone :</label>
<input type="text" class="form-control" id="validationCustom04" name="tele" required>
<div class="valid-feedback">
Looks good!
</div>
</div>
<div class="col-md mb-3">
<label for="validationCustom05">Message :</label>
<textarea class="form-control" id="validationCustom05" rows="10" style="resize:none" name="message" required></textarea>
<div class="valid-feedback">
Looks good!
</div>
</div>
</div>
<div class="form-group">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
<label class="form-check-label" for="invalidCheck">
Accepter les Conditions Générales de Kilina .
</label>
<div class="invalid-feedback">
Vous Devez Accepter Avant De Envoyer Les Informations .
</div>
</div>
</div>
<button class="btn btn-primary" type="submit">Envoyer</button>
</form>
<script>(function(){window.addEventListener("load",function(){var b=document.getElementsByClassName("needs-validation");var a=Array.prototype.filter.call(b,function(c){c.addEventListener("submit",function(d){if(c.checkValidity()===false){d.preventDefault();d.stopPropagation()}c.classList.add("was-validated")},false)})},false)})();</script>
</div>
</div>
</div>
</body>
<?php include 'footer.php';?>