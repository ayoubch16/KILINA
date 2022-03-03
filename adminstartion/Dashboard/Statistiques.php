<?php include 'header.php';
$c=$_GET['c'];


?>
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
            border-bottom: 1px solid #f2f2f2;
            width: 100%;
            height: 40px;
            margin-right: 10px;
        }
        .barRech button{
            border: none;
            width: auto;
            height: 40px;
            padding: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            
        }
</style>


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
                <form action="">
                    <div class="barRech row">
                        <div class="col-sm"><input type="text" name="c"></div>
                        <div class="col-sm-2"><button type="submit"><img src="img/icons/search.png" width="20" height="20" alt=""></button></div>
                    </div>
                </form>
                    <!-- <div class="row">
                        <form action="">
                            <div class="barRech row">
                                
                                        <input type="text"  name="c">
                                        <button type="submit"><img src="img/icons/search.png" width="20" height="20" alt=""></button>   
                                         <input style="border: none;background-color: #fff;display: inline;" type="submit" value="&#x2192;" name="" id="">   
                                
                            </div>
                        </form>
                    </div> -->
                    <div class="row">
                        <div class="col-xl col-xxl ">
                        <h5 class="h3 mb-3">Statistiques</h5>
                            <div class="w-100">
                                <div class="col-sm">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Statistiques</h5>
                                        </div>
                                        <div class="align-self-center chart chart-lg p-2">
                                            <canvas id="myChart2" ></canvas>
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
											<div class="chart chart-sm p-2">
                                                <canvas id="myChart" ></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>

                        <div class="col-xl-4 col-xxl-7">
                            <h5 class="card-title mb-4">Produits Similaire</h5>
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
    <?php 
    $ref=empty($c)? " ":"  WHERE `Ref`='$c' ";
      $sql1="SELECT SUM(`quantite`),SUM(`quantitevendu`) FROM `produits` $ref ";
      echo $sql1;
      $result1 = $cnx->query($sql1);
      if ($row1 = $result1->fetch_assoc()) { 
          $qnt=$row1["SUM(`quantite`)"];
          $qntvendu=$row1["SUM(`quantitevendu`)"];
      }
    ?>
    <?php 
    $nbr=array();
    for($i=1;$i<=12;$i++){
        if($i<10){
            $sql2="SELECT  COUNT(*) FROM commandes WHERE DATE_FORMAT(dateCmd,'%m') ='0$i' ";
        }else{
            $sql2="SELECT  COUNT(*) FROM commandes WHERE DATE_FORMAT(dateCmd,'%m') ='$i' ";
        }
        $result2 = $cnx->query($sql2);
        if ($row2 = $result2->fetch_assoc()) { 
            $nbr[$i]=$row2["COUNT(*)"]; }
    }

    ?>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [ 'En stock','Vendu'],
                datasets: [{
                    data: [<?php echo $qnt ;?>, <?php echo $qntvendu ;?>],
                    backgroundColor: [
                        '#FDEB02',
                        '#495057'
                    ],
                    borderColor: [
                        '#FDEB02',
                        '#495057'
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
   
<script>
        const ctx2 = document.getElementById('myChart2').getContext('2d');
        const myChart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: 'nombre des commandes',
                data: [<?php echo $nbr[1];?>, <?php echo $nbr[2];?>, <?php echo $nbr[3];?>, <?php echo $nbr[4];?>, <?php echo $nbr[5];?>, <?php echo $nbr[6];?>,<?php echo $nbr[7];?>, <?php echo $nbr[8];?>, <?php echo $nbr[9];?>, <?php echo $nbr[10];?>, <?php echo $nbr[11];?>, <?php echo $nbr[12];?>],
                backgroundColor: [
                    '#FDEB02',
                    '#FDEB02',
                    '#FDEB02',
                    '#FDEB02',
                    '#FDEB02',
                    '#FDEB02',
                    '#FDEB02',
                    '#FDEB02',
                    '#FDEB02',
                    '#FDEB02',
                    '#FDEB02',
                    '#FDEB02'
                ]
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

