<?php   include 'db-conn.php';
        include 'header.php';
?>

<body>
    <style>
        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }
        .edit img{
            filter: brightness(0%);
        }
        .edit img:hover{
            filter: brightness(100%);
        }
        .barRech {
            background-color: #fff;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 20px;
            width: 350px;
            height: 60px;
            box-shadow: -2px 11px 13px -15px #000000;
        }
        .barRech  input[type="text"] {
            border: none;
            border-bottom: 1px solid #f2f2f2;
            width: 300px;
            height: 40px;
            margin-right: 10px;
        }
        .barAjote {
            background-color: #000;
            padding: 10px;
            color: #fff;
            border-radius: 10px;
            margin-bottom: 20px;
            margin-left: 20px;
            width: 200px;
            height: 60px;
            box-shadow: -2px 11px 13px -15px #000000;
        }
        .barAjote:hover {
            color: #000;
            background-color: #fff;
            text-decoration: none;
        }
    </style>
    <script>
    document.title = 'Gestion des Utilisateurs';
    </script>
    <script>
            $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            });
    </script>
<div class="wrapper">
        <?php include 'menu.php';?>
		

		<div class="main">
          <?php include 'Top.php';?>

			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong>Gestion des Utilisateurs</strong></h1>
                    <div class="row">
                        <div class="barRech">
                                    <input type="text"  id="myInput"><span><img src="img/icons/search.png" width="20" height="20" alt=""></span>
                        </div>
                    </div>
					<div class="row">
						<div class="col-xl col-xxl ">
                                <div class="w-100">
                                <div class="col-sm">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive table-upgrade">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th class="text-left">CIN</th>
                                                                <th class="text-left">Nom Prenom</th>
                                                                <th class="text-left">Tele</th>
                                                                <th class="text-left">Adresse Email</th>
                                                                <th class="text-left">Ville</th>
                                                                <th class="text-left">Etat de compte</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="myTable">
                                                        <?php $sql="SELECT * FROM `users` ";
                                                         $result = $cnx->query($sql);
                                                         while ($row = $result->fetch_assoc()) {
                                                            ?>
                                                            <tr>
                                                                <td class="text-left"></td>
                                                                <td class="text-left"><?php echo $row['CINuser'];?></td>
                                                                <td class="text-left"><?php echo $row['nomuser'].' '.$row['prenomuser'];?></t d>
                                                                <td class="text-left"><?php echo $row['teleuser'];?></td>
                                                                <td class="text-left"><?php echo $row['emailuser'];?></td>
                                                                <td class="text-left"><?php echo $row['ville'];?></td>
                                                                <!-- <td class="text-left"><?php echo $row['etatCompte'];?></td> -->
                                                                <th>
                                                                    <?php if( $row['etatCompte']=='NV'){?>
                                                                                <a href="">Activer</a>
                                                                    <?php }else{?>
                                                                                 <a href="">Desactiver</a>
                                                                    <?php }  ?>
                                                                </th>
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