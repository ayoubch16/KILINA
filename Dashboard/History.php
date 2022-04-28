<?php include 'header.php';?>
<body>
<style>.dot{width:10px;height:10px;border-radius:50%}.barRech{background-color:#fff;padding:10px;border-radius:10px;margin-bottom:20px;width:350px;height:60px;box-shadow:-2px 11px 13px -15px #000}.barRech input[type="text"]{border:0;border-bottom:1px solid #f2f2f2;width:300px;height:40px;margin-right:10px}.btnAjoute{background-color:#fcea01;color:#000;padding:10px;min-width:150px}</style>
<script>document.title="History des Operations";</script>
<script>$(document).ready(function(){$("#myInput").on("keyup",function(){var a=$(this).val().toLowerCase();$("#myTable tr").filter(function(){$(this).toggle($(this).text().toLowerCase().indexOf(a)>-1)})})});</script>
<div class="wrapper">
<?php include 'menu.php';?>
<div class="main">
<?php include 'Top.php';?>
<main class="content">
<div class="container-fluid p-0">
<h1 class="h3 mb-3"><strong>History des Operations</strong></h1>
<div class="barRech">
<input id="myInput" type="text"><span><img src="img/icons/search.png" width="20" height="20" alt=""></span>
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
<th class="text-left">Reffuser</th>
<th class="text-left">Action</th>
<th class="text-left">Product</th>
<th class="text-left">date</th>
</tr>
</thead>
<tbody id="myTable">
<?php $sql="SELECT * FROM `history` ORDER BY `date` DESC ";$result=$cnx->query($sql);while($row=$result->fetch_assoc()){                                                                    
?>
<tr>
<td class="text-left">
<?php $reff=$row['Reffuser'];$sqlref="SELECT * FROM `users` WHERE `Reffuser`='$reff' ";$resultref=$cnx->query($sqlref);if($rowref=$resultref->fetch_assoc()){}
echo $rowref['nomuser'].' '.$rowref['prenomuser']; ?>
</td>
<td class="text-left"><?php echo $row['Action'];?></td>
<td class="text-left"><?php echo $row['Product'];?></td>
<td class="text-left"><?php echo $row['date'];?></td>
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