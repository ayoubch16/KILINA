<?php   include 'db-conn.php';
        include 'header.php';
?>

<body>

    <script>
    document.title = 'Gestion des Modules';
    </script>
    <style>
        input[type='text'] {
            border: 1px solid #9d9d9d;
            border-radius: 5px;
            width: 100%;
        }
    </style>

<div class="wrapper">
        <?php include 'menu.php';?>
		

		<div class="main">
          <?php include 'Top.php';?>

			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong>Gestion des Modules</strong></h1>
                    <form>

                        <div class="row">
                            <div class="col-md-3"><h3>Texte de Top :</h3></div>
                            <div class="col-md-6"><input type="text" name="textTop" /> </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-3"><h3>Texte Meilleur vendu :</h3></div>
                            <div class="col-md-6"><input type="text" name="textMV" /> </div>
                        </div><br>

                        <div class="row text-end">
                            
                            <div class="col-md-6"> <input type="submit" value="Modifier"> </div>
                        </div><br>



                    </form>


				</div>
			</main>

		</div>
	</div>

	<?php include 'script.php';?>



</body>

</html>