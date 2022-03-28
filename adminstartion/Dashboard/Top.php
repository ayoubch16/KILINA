<style>.compte{text-decoration:none;color:#000}.compte:hover{text-decoration:none;color:#000}</style>
<nav class="navbar navbar-expand navbar-light navbar-bg">
<a class="sidebar-toggle js-sidebar-toggle">
<i class="hamburger align-self-center"></i>
</a>
<div class="navbar-collapse collapse">
<ul class="navbar-nav navbar-align">
<li class="nav-item dropdown">
<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
<div class="position-relative">
<i class="align-middle" data-feather="bell"></i>
<span class="indicator"></span>
</div>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
<div class="dropdown-menu-header">
Nouvelles commandes
</div>
<div class="list-group">
<?php 
									$sql1="SELECT *,DATEDIFF(SYSDATE(),`dateCmd`) as per FROM `commandes` ORDER BY `dateCmd` DESC LIMIT 9";
									$result1 = $cnx->query($sql1);
                                    while ($row1 = $result1->fetch_assoc()) {
										$refclient=$row1['ReffClient'];
										$sqlnom="SELECT * FROM `clients` WHERE `Reff`='$refclient'";
										$resultnom = $cnx->query($sqlnom);
                                        if ($rownom = $resultnom->fetch_assoc()) {
											$txtnom=$rownom['nom'].' '.$rownom['prenom'].' |  Prix:'.$row1['prixCmd'].'DH';
										}
									?>
<a href="Commande.php" class="list-group-item">
<div class="row g-0 align-items-center">
<div class="col-2">
<i class="text-danger" data-feather="alert-circle"></i>
</div>
<div class="col-10">
<div class="text-dark">Ref : <?php echo $row1['ReffCmd']?></div>
<div class="text-muted small mt-1"><?php echo $txtnom;?></div>
<div class="text-muted small mt-1"><?php echo $row1['per']?>d ago</div>
</div>
</div>
</a>
<?php } ?>
</div>
</div>
</li>
<li class="nav-item">
<a class="nav-link d-none d-sm-inline-block" href="#">
<img src="img/avatars/user.png" class="img-fluid rounded me-1" width="30" height="30" alt="ayoub choukri" />
<span class="text-dark">
<?php if($_SESSION["Reffuser"] != null) { ?>
<a class="compte" href="deconnecter.php"><?php echo $_SESSION['prenomuser'].' '.substr( $_SESSION['nomuser'], 0, 2);?> </a>
<?php } else {?>
<a class="compte" href="../sign.php">Compte</a>
<?php } ?>
</span>
</a>
</li>
</ul>
</div>
</nav>