<?php include 'header.php';?>
<body>
    <script>
    document.title = 'Acceuil';
    </script>
<div class="wrapper">
        <?php include 'menu.php';?>
		

		<div class="main">
          <?php include 'Top.php';?>

			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong>Acceuil</strong> </h1>
					<div class="row">
						<div class="col-xl col-xxl ">
							<div class="w-100 d-flex">
								<div class="row">

									<div class="col-sm">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col-sm col-4  mt-0" style="display: flex;justify-content: center;align-items: center;">
														<img src="./img/photos/cmdImg.png"  alt="" style="width: 3rem;height: 3rem;border-radius: 10px;" />
													</div>
													<div class="col-auto">
                                                        <h6>Commandes</h6>
                                                        <h2>12505</h2>
													</div>
												</div>
											</div>
										</div>
									</div>
                                    <div class="col-sm">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col-sm col-4 mt-0" style="display: flex;justify-content: center;align-items: center;">
														<img src="./img/photos/venteImg.png"  alt="" style="width: 3rem;height: 3rem;border-radius: 10px;" />
													</div>
													<div class="col-auto">
                                                        <h6>Ventes</h6>
                                                        <h2>12505</h2>
													</div>
												</div>
											</div>
										</div>
									</div>
                                    <div class="col-sm">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col-sm col-4 mt-0" style="display: flex;justify-content: center;align-items: center;">
														<img src="./img/photos/clientImg.png"  alt="" style="width: 3rem;height: 3rem;border-radius: 10px;" />
													</div>
													<div class="col-auto">
														<?php $sql="SELECT COUNT(*) FROM `clients` ";
																$result = $cnx->query($sql);
																if ($row = $result->fetch_assoc()) {
																	$clients=$row['COUNT(*)'];
																}
															?>
                                                        <h6>Clients</h6>
                                                        <h2><?php echo $clients;?></h2>
													</div>
												</div>
											</div>
										</div>
									</div>
                                    <div class="col-sm">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col-sm col-4 mt-0" style="display: flex;justify-content: center;align-items: center;">
														<img src="./img/photos/prodImg.png"  alt="" style="width: 3rem;height: 3rem;border-radius: 10px;" />
													</div>
													<div class="col-auto">
															<?php $sql="SELECT COUNT(*) FROM `produits` ";
																$result = $cnx->query($sql);
																if ($row = $result->fetch_assoc()) {
																	$produits=$row['COUNT(*)'];
																}
															?>
                                                        <h6>Produits</h6>
                                                        <h2><?php echo $produits?></h2>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                            <div class="w-100">			
									<div class="col-sm">
										<div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Statistiques</h5>
                                        </div>
                                            <div class="align-self-center chart chart-lg">
												<canvas id="myChart" ></canvas>
                                            </div>
										</div>
									</div>
							</div>
						</div>

						<div class="col-xl-4 col-xxl-7">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<h5 class="card-title mb-0">Meilleur vente</h5>
								</div>
								<div class="card-body py-3">
                                        <table style="width: 100%;">
                                            <tr>
                                                <th>Reference</th>
                                                <th style="text-align: right;">Prix</th>
                                            </tr>
											<?php $sql="SELECT * FROM `produits` ";
													$result = $cnx->query($sql);
													 while($row = $result->fetch_assoc()) {
											?>
                                            <tr>
                                                <td><?php echo $row['Ref'];?></td>
                                                <td style="text-align: right;"><?php echo $row['prix'];?> DH</td>
                                            </tr>
                                            <?php } ?>
                                        </table>
								</div>
							</div>
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
		type: 'bar',
		data: {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
			datasets: [{
				data: [100, 120, 80, 60, 40, 30,200, 180, 160, 140, 120, 30],
				backgroundColor: [
					'#9583FF',
					'#9583FF',
					'#9583FF',
					'#9583FF',
					'#9583FF',
					'#9583FF',     
					'#9583FF',
					'#9583FF',
					'#9583FF',
					'#9583FF',
					'#9583FF',
					'#9583FF'
				],
				borderColor: [
					'#9583FF',
					'#9583FF',
					'#9583FF',
					'#9583FF',
					'#9583FF',
					'#9583FF',
					'#9583FF',
					'#9583FF',
					'#9583FF',
					'#9583FF',
					'#9583FF',
					'#9583FF'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				y: {
					beginAtZero: true
				}
			}
		}
	});
</script>

</body>

</html>