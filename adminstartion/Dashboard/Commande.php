<?php include 'header.php';?>
<body>
    <style>
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
            border-bottom: 1px solid gray;
            width: 300px;
            height: 40px;
            margin-right: 10px;
        }
        .statusL {
            color: #08cf07;
            background-color: #e5fbe5;
            padding: 5px;
            border-radius: 5px;
        }
        .statusA {
            color: #fc4b4b;
            background-color: #ffecec;
            padding: 5px;
            border-radius: 5px;
        }
        .statusE {
            color: #c2c800;
            background-color: #feffe2;
            padding: 5px;
            border-radius: 5px;
        }
        .bardelai {
            background-color: #fff;
            border-radius: 10px;
            padding: 5px;
            height: 50px;
            display: flex;
            justify-content: start;
            align-items: center;
        }
        .statusF{
            background-color: #313233;
            border-radius: 10px;
            padding: 5px;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: start;
            align-items: center;
        }
        .bardelai input[type="date"] {
                background-color: #f6f6f6;
                border: 1px solid  #d9d9d9;
                width: 250px;
                height: 40px;
                border-radius: 10px;
                padding: 5px;
                margin: 5px;
        }
        .bardelai input[type="submit"] {
                background-color: #fcea01;
                border: 1px solid  #fcea01;
                width: 250px;
                height: 40px;
                border-radius: 10px;
                padding: 5px;
                margin: 5px;
        }
        .bardelai input[type="submit"]:hover {
                background-color: #000;
                border: 1px solid  #000;
                color: #fcea01;

        }
        .barfilter {
            background-color: #fff;
            border-radius: 10px;
            padding: 5px;
            height: 50px;
            width: auto;
            display: flex;
            justify-content: end;
            align-items: center;
        }

    </style>
    <script>
    document.title = 'Commandes';
    </script>
<div class="wrapper">
        <?php include 'menu.php';?>
		

		<div class="main">
          <?php include 'Top.php';?>

			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong>Commandes</strong></h1>
                    <div class="row">
                        <div class="barRech">
                            <form action="">
                                    <input type="text" name="motcle" id=""><span><img src="img/icons/search.png" width="20" height="20" alt=""></span>
                                <!-- <input type="submit"  > -->
                            </form>
                        </div>
                        <div class="row mb-3" style="display: flex; justify-content: space-between;">
                            <div class="bardelai col-5">
                                    <input type="date" name="datedebut">
                                    <input type="date" name="datefin">
                                    <input type="submit"  value="Import/Export">
                            </div>
                            <div class="barfilter col-4">
                                    <span class="statusL mx-2">Livrée</span> 
                                    <span class="statusA mx-2">Annuler</span>
                                    <span class="statusE mx-2">En cours</span> 
                                    <span class="statusF"><img src="img/icons/filtericone.png" width="40" height="40" alt=""></span>

                            </div>

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
                                                                <th class="text-left">Commandes</th>
                                                                <th class="text-left">Clients</th>
                                                                <th class="text-left">Articles</th>
                                                                <th class="text-left">Ville</th>
                                                                <th class="text-left">Date</th>
                                                                <th class="text-left">Prix</th>
                                                                <th class="text-left">Status</th>
                                                                <th class="text-left">Paiment</th>
                                                                <th class="text-left"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $sql="SELECT * FROM `commandes` ORDER BY `dateCmd`,`ReffCmd` DESC ";
                                                                  $result = $cnx->query($sql);
                                                                  while ($row = $result->fetch_assoc()) {
                                                            ?>
                                                            <tr>
                                                                <td class="text-left"><?php echo $row['ReffCmd'] ;?></td>
                                                                <td class="text-left"><?php echo $row['ReffClient'] ;?></td>
                                                                <td class="text-left"><?php echo str_replace("-","<br>",$row['ReffProd'] );?></td>
                                                                <td class="text-left"><?php echo $row['villeCmd'] ;?></td>
                                                                <td class="text-left"><?php echo $row['dateCmd'] ;?></td>
                                                                <td class="text-left"><?php echo $row['prixCmd'] ;?></td>
                                                                <td class="text-left">
                                                                    <?php if($row['statusCmd']=='En cours'){?>
                                                                        <span class="statusE">En cours</span>    
                                                                    <?php } ?>
                                                                    <?php if($row['statusCmd']=='Annuler'){?>
                                                                        <span class="statusA">Annuler</span>    
                                                                    <?php } ?>
                                                                    <?php if($row['statusCmd']=='Livrée'){?>
                                                                        <span class="statusL">Livrée</span>    
                                                                    <?php } ?>
                                                                </td>
                                                                <td class="text-left"><?php echo $row['PaimentCmd'] ;?></td>
                                                                <td><a href=""><img src="img/icons/edit.png" width="20" height="20" alt=""></a></td>
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

