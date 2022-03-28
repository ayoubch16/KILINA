<?php include 'header.php';?>
<body>
<style>.barRech{background-color:#fff;padding:10px;border-radius:10px;margin-bottom:20px;width:350px;height:60px;box-shadow:-2px 11px 13px -15px #000}.barRech input[type="text"]{border:0;border-bottom:1px solid #f2f2f2;width:300px;height:40px;margin-right:10px}</style>
<script>document.title="Data Base";</script>
<script>$(document).ready(function(){$("#myInput").on("keyup",function(){var a=$(this).val().toLowerCase();$("#myTable tr").filter(function(){$(this).toggle($(this).text().toLowerCase().indexOf(a)>-1)})})});</script>
<div class="wrapper">
<?php include 'menu.php';?>
<div class="main">
<?php include 'Top.php';?>
<main class="content">
<div class="container-fluid p-0">
<h1 class="h3 mb-3"><strong>Data Base</strong></h1>
<div class="row">
<div class="barRech">
<input type="text" id="myInput"><span><img src="img/icons/search.png" width="20" height="20" alt=""></span>
</div>
</div>
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
<th class="text-left">Reff</th>
<th class="text-left">Clients</th>
<th class="text-left">Tele</th>
<th class="text-left">Ville</th>
<th class="text-left">Email</th>
</tr>
</thead>
<tbody id="myTable">
<?php $sql="SELECT * FROM `clients` ";
                                                         $result = $cnx->query($sql);
                                                         while ($row = $result->fetch_assoc()) {
                                                       ?>
<tr>
<td class="text-left"> <?php echo $row['Reff'];?></td>
<td class="text-left"><?php echo $row['prenom'];?> <?php echo $row['nom'];?></td>
<td class="text-left"><?php echo $row['tele'];?></td>
<td class="text-left"><?php echo $row['ville'];?></td>
<td class="text-left"><?php echo $row['email'];?></td>
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
</div>
</main>
</div>
</div>
<?php include 'script.php';?>
</body>
</html>