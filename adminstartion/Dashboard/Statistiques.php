<?php include 'header.php';?>

<body>
    <script>
    document.title = 'Statistiques';
    </script>
    <div class="wrapper">
        <?php include 'menu.php';?>


        <div class="main">
            <?php include 'Top.php';?>

            <main class="content">
                <div class="container-fluid p-0">
                    <h1 class="h3 mb-3"><strong>Statistiques</strong></h1>
                    <div class="row">
                        <div class="col-xl col-xxl ">
                            <div class="w-100">
                                <div class="col-sm">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Statistiques</h5>
                                        </div>
                                        <div class="align-self-center chart chart-lg">
                                            <canvas id="chartjs-dashboard-bar"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="row">
								<div class="w-100 col-sm">
									<div class="col-sm">
										<div class="card">
											<div class="card-header">
												<h5 class="card-title mb-0">Statistiques</h5>
											</div>
											<div class="chart chart-sm">
                                                <canvas id="myChart" ></canvas>
											</div>
										</div>
									</div>
								</div>
								<!-- <div class="w-100 col-sm">
									<div class="col-sm">
										<div class="card flex-fill w-100">
											<div class="card-body py-3">
												<span style="position: absolute; top: 5px;left: 5px;">JK457R</span>
												<img src="img/photos/produitSimilaire.png" width="200" height="200" alt="">
											</div>
										</div>
									</div>
								</div> -->
							</div>
                        </div>

                        <div class="col-xl-4 col-xxl-7">
                            <h5 class="card-title mb-3">Produits Similaire</h5>
                            <?php $sql="SELECT * FROM `produits` ORDER BY `date` DESC LIMIT 4";
                                       $result = $cnx->query($sql);
                                       while ($row = $result->fetch_assoc()) {
                            ?>
                                                           
                            <div class="card flex-fill w-100">
                                <div class="card-body py-3">
                                    <span style="position: absolute; top: 5px;left: 5px;"><?php echo $row['Ref']?></span>
                                    <img style="width: 100%;" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img1']); ?>"  alt="">
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <?php include 'script.php';?>
<script>
	const ctx = document.getElementById('myChart').getContext('2d');
	const myChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
			labels: ['Vendu', 'En stock'],
			datasets: [{
				data: [1586, 50],
				backgroundColor: [
					'#9583FF',
					'#D8CECE'
				],
				borderColor: [
					'#9583FF',
					'#D8CECE'
				],
				borderWidth: 1
			}]
		},
		options: {
            animation :{
                animateScale:true
            }
			
		}
	});
</script>

</body>
</html>

