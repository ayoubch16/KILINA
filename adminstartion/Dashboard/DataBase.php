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
<div class="wrapper">
        <?php include 'menu.php';?>
		

		<div class="main">
          <?php include 'Top.php';?>

			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong>Produits</strong></h1>
                    <div class="row">
                        <div class="barRech">
                            <form action="">
                                    <input type="text" name="motcle" id=""><span><img src="img/icons/search.png" width="20" height="20" alt=""></span>
                                <!-- <input type="submit"  > -->
                            </form>
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
                                                                <th class="text-left">Clients</th>
                                                                <th class="text-left">Mote passe</th>
                                                                <th class="text-left">Tele</th>
                                                                <th class="text-left">Ville</th>
                                                                <th class="text-left">Email</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php for ($x = 0; $x <= 20; $x++) {?>
                                                            <tr>
                                                                <td class="text-left">Mouad SABER</td>
                                                                <td class="text-left">*****</td>
                                                                <td class="text-left">0611223344</td>
                                                                <td class="text-left">SALE</td>
                                                                <td class="text-left">MouadSaber@gmail.com</td>
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