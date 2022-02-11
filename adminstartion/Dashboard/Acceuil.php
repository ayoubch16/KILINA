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
													<div class="col-4 mt-0" style="display: flex;justify-content: center;align-items: center;">
														<img src="./img/icons/shopping.png"  alt="" style="width: 3rem;height: 3rem;" />
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
													<div class="col-4 mt-0" style="display: flex;justify-content: center;align-items: center;">
														<img src="./img/icons/shopping.png"  alt="" style="width: 3rem;height: 3rem;" />
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
													<div class="col-4 mt-0" style="display: flex;justify-content: center;align-items: center;">
														<img src="./img/icons/shopping.png"  alt="" style="width: 3rem;height: 3rem;" />
													</div>
													<div class="col-auto">
                                                        <h6>Clients</h6>
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
													<div class="col-4 mt-0" style="display: flex;justify-content: center;align-items: center;">
														<img src="./img/icons/shopping.png"  alt="" style="width: 3rem;height: 3rem;" />
													</div>
													<div class="col-auto">
                                                        <h6>Produits</h6>
                                                        <h2>12505</h2>
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
                                                <canvas id="chartjs-dashboard-bar"></canvas>
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
                                            <?php for ($x = 0; $x <= 20; $x++) {?>
                                            <tr>
                                                <td>PA5425</td>
                                                <td style="text-align: right;">125 DH</td>
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

</body>

</html>