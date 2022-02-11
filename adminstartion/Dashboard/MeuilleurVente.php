<?php include 'header.php';?>
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
            border-bottom: 1px solid gray;
            width: 300px;
            height: 40px;
            margin-right: 10px;
        }
    </style>
    <script>
    document.title = 'Statistiques';
    </script>
<div class="wrapper">
        <?php include 'menu.php';?>
		

		<div class="main">
          <?php include 'Top.php';?>

			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong>Meuilleur Vente</strong></h1>
                    <div class="barRech">
                            <form action="">
                                    <input type="text" name="motcle" id=""><span><img src="img/icons/search.png" width="20" height="20" alt=""></span>
                                <!-- <input type="submit"  > -->
                            </form>
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
                                                                <th class="text-left"></th>
                                                                <th class="text-left">Reference</th>
                                                                <th class="text-left">Description</th>
                                                                <th class="text-left">Quantite</th>
                                                                <th class="text-left">Taille</th>
                                                                <th class="text-left">Prix</th>
                                                                <th class="text-left">Remis</th>
                                                                <th class="text-left">Couleur</th>
                                                                <th class="text-left"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php for ($x = 0; $x <= 20; $x++) {?>
                                                            <tr>
                                                                <td class="text-left"><input type="checkbox"></td>
                                                                <td class="text-left">PN15D5D4</td>
                                                                <td class="text-left">jean bleu</td>
                                                                <td class="text-left">1252</td>
                                                                <td class="text-left">S.M.L.X.XXL</td>
                                                                <td class="text-left">120 DH</td>
                                                                <td class="text-left">20 %</td>
                                                                <td class="text-left">
                                                                    <div class="row p-2">
                                                                        <p class="dot mx-1 " style="background-color:aquamarine;"></p>
                                                                        <p class="dot mx-1 " style="background-color:red;"></p>
                                                                        <p class="dot mx-1 " style="background-color:green;"></p>
                                                                        <p class="dot mx-1 " style="background-color:black;"></p>
                                                                    </div>

                                                                </td>
                                                                <td class="text-left edit">
                                                                        <a href=""><img src="img/icons/trash.png" width="15" height="20" alt=""></a>
                                                                        <a href=""><img src="img/icons/edit.png" width="20" height="20" alt=""></a>
                                                                        <a href=""><img src="img/icons/star.png" width="20" height="20" alt=""></a>
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