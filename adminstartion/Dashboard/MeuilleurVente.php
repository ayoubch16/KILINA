<?php include 'header.php';?>

<body>
    <style>
        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .edit .img1 {
            filter: brightness(0%);
        }

        .edit .img1:hover {
            filter: brightness(100%);
        }
        .edit .img2 {
            filter: brightness(100%);
        }

        .edit .img2:hover {
            filter: brightness(0%);
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

        .barRech input[type="text"] {
            border: none;
            border-bottom: 1px solid #f2f2f2;
            width: 300px;
            height: 40px;
            margin-right: 10px;
        }
        .btnAjoute {
             background-color: #FCEA01;
             color: #000;
             padding: 10px;
             min-width: 150px;
        }
    </style>
    <script>
    document.title = 'Meuilleur Vente';
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
                    <h1 class="h3 mb-3"><strong>Meuilleur Vente</strong></h1>
                    <div class="barRech">
                        <input id="myInput" type="text" ><span><img src="img/icons/search.png" width="20"
                                        height="20" alt=""></span>
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
                                                            <th class="text-left">Prix</th>
                                                            <th class="text-left">Remis</th>
                                                            <!-- <th class="text-left">Couleur</th> -->
                                                            <th class="text-left"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="myTable">
                                                        <?php   $cpt=0;
                                                                $sql="SELECT * FROM `produits` ORDER BY `date` DESC ";
                                                                $result = $cnx->query($sql);
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $cpt++;
                                                       ?>
                                                        <tr>
                                                            <td class="text-left"><img width="30" height="30"
                                                                    src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img1']); ?>"
                                                                    alt=""></td>
                                                            <td class="text-left"><?php echo $row['Ref'];?></td>
                                                            <td class="text-left"><?php echo $row['titre'];?></td>
                                                            <td class="text-left"><?php echo $row['quantite'];?></td>
                                                            <td class="text-left"><?php echo $row['prix'].'DH';?></td>
                                                            <td class="text-left"><?php echo $row['remis'];?> %</td>
                                                            <td class="text-left edit">
                                                                <?php 
                                                                    if($row['meilleurV']=='NMV'){
                                                                ?>
                                                                <a href="updateMV.php?ref=<?php echo $row['Ref'];?>&mv=<?php echo $row['meilleurV'];?>"><img class="img1" src="img/icons/star.png" width="20" height="20" alt=""></a>
                                                                <?php }else{?>
                                                                <a href="updateMV.php?ref=<?php echo $row['Ref'];?>&mv=<?php echo $row['meilleurV'];?>"><img class="img2" src="img/icons/star.png" width="20" height="20" alt=""></a>
                                                                <?php } ?>
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