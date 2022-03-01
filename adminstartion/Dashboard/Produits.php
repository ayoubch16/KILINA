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
    document.title = 'Produits';
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
					<h1 class="h3 mb-3"><strong>Produits</strong></h1>
                    <div class="row">
                        <div class="barRech">
                            
                                    <input type="text"  id="myInput"><span><img src="img/icons/search.png" width="20" height="20" alt=""></span>
                               
                        </div>
                        <a class="barAjote" style="font-size: 1rem;display: flex;justify-content: center;align-items: center;" href="AjouterProduit.php">
                            Ajouter un produit &#43;
                        </a>
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
                                                                <th class="text-left">Reference</th>
                                                                <th class="text-left">Description</th>
                                                                <th class="text-left">Quantite</th>
                                                                <th class="text-left">Taille</th>
                                                                <th class="text-left">Prix</th>
                                                                <th class="text-left">Remis</th>
                                                                
                                                                <th class="text-left"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="myTable">
                                                        <?php $sql="SELECT * FROM `produits` ORDER BY `date` DESC ";
                                                         $result = $cnx->query($sql);
                                                         while ($row = $result->fetch_assoc()) {
                                                       ?>
                                                            <tr>
                                                                <td class="text-left"><img width="30" height="30"
                                                                    src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img1']); ?>"
                                                                    alt=""></td>
                                                                <td class="text-left"><?php echo $row['Ref'];?></td>
                                                                <td class="text-left"><?php echo $row['description'];?></t d>
                                                                <td class="text-left"><?php echo $row['quantite'];?></td>
                                                                <td class="text-left"><?php echo str_replace('-',' ',$row['taille']);?></td>
                                                                <td class="text-left"><?php echo $row['prix'];?></td>
                                                                <td class="text-left"><?php echo $row['remis'];?></td>
                                                                <td class="text-left edit">
                                                                        <a href=""><img src="img/icons/trash.png" width="15" height="20" alt=""></a>
                                                                        <a href="ModifierProduit.php?id=<?php echo $row['id'];?>"><img src="img/icons/edit.png" width="20" height="20" alt=""></a>
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




				</div>
			</main>

		</div>
	</div>

	<?php include 'script.php';?>



</body>

</html>