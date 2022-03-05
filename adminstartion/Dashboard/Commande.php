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

    .barRech input[type="text"] {
        border: none;
        border-bottom: 1px solid #f2f2f2;
        width: 300px;
        height: 40px;
        margin-right: 10px;
    }

    .statusL a {
        color: #08cf07;
        background-color: #e5fbe5;
        padding: 5px;
        border-radius: 5px;
    }

    .statusA a {
        color: #fc4b4b;
        background-color: #ffecec;
        padding: 5px;
        border-radius: 5px;
    }

    .statusE a {
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

    .statusF {
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
        border: 1px solid #d9d9d9;
        width: 250px;
        height: 40px;
        border-radius: 10px;
        padding: 5px;
        margin: 5px;
    }

    .bardelai input[type="submit"] {
        background-color: #fcea01;
        border: 1px solid #fcea01;
        width: 250px;
        height: 40px;
        border-radius: 10px;
        padding: 5px;
        margin: 5px;
    }

    .bardelai input[type="submit"]:hover {
        background-color: #000;
        border: 1px solid #000;
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

    #info {
        display: none;
    }
    </style>
    <script>
    document.title = 'Commandes';
    </script>
    <script>
    $(document).ready(function() {
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
                    <h1 class="h3 mb-3"><strong>Commandes</strong></h1>
                    <div class="row">
                        <div class="barRech">

                            <input type="text" id="myInput"><span><img src="img/icons/search.png" width="20" height="20"
                                    alt=""></span>

                        </div>
                        <form action="importdata.php">
                            <div class="row mb-3" style="display: flex; justify-content: space-between;">
                                <div class="bardelai col-5">
                                    <input type="date" name="datedebut">
                                    <input type="date" name="datefin">
                                    <input type="submit" value="Import/Export">
                                </div>

                                <div class="barfilter col-4">
                                    <span class="statusL mx-2"><a href="Commande.php?c=1">Livrée</a></span>
                                    <span class="statusA mx-2"><a href="Commande.php?c=2">Annuler</a></span>
                                    <span class="statusE mx-2"><a href="Commande.php?c=3">En cours</a></span>
                                    <span class="statusF"><img src="img/icons/filtericone.png" width="40" height="40"
                                            alt=""></span>

                                </div>

                            </div>
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
                                                            <th class="text-left">Commandes</th>
                                                            <th class="text-left">Clients</th>
                                                            <th class="text-left">Articles</th>
                                                            <th class="text-left"></th>
                                                            <th class="text-left"></th>
                                                            <th class="text-left">Ville</th>
                                                            <th class="text-left">Date</th>
                                                            <th class="text-left">Prix</th>
                                                            <th class="text-left">Status</th>
                                                            <th class="text-left">Paiment</th>
                                                            <th class="text-left"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="myTable">
                                                        <?php      $c=$_GET['c'];
                                                                    $txt=" ";
                                                            if($c==1){
                                                                $txt=" WHERE `statusCmd`='Livrée' ";       
                                                            }
                                                            if($c==2){
                                                                $txt=" WHERE `statusCmd`='Annuler' ";       
                                                            }
                                                            if($c==3){
                                                                $txt="  WHERE `statusCmd`='En cours' ";       
                                                            }
                                                              $sql="SELECT * FROM `commandes` $txt  ORDER BY `dateCmd`,`ReffCmd` DESC ";
                                                              $result = $cnx->query($sql);
                                                                  while ($row = $result->fetch_assoc()) {
                                                            ?>
                                                        <tr>
                                                            <td class="text-left"><?php echo $row['ReffCmd'] ;?></td>
                                                            <td class="text-left"><?php echo $row['ReffClient'] ;?></td>
                                                            <td class="text-left">
                                                                <?php echo str_replace("-","<br>",$row['ReffProd']);?>
                                                            </td>
                                                            <td class="text-left">
                                                                <?php echo str_replace("-","<br>",$row['tailleProd']);?>
                                                            </td>
                                                            <td class="text-left">
                                                                <?php echo str_replace("-","<br>",$row['QntProd']);?>
                                                            </td>
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
                                                            <!-- <td><button onclick="afficher()"><img src="img/icons/edit.png" width="20"
                                                                        height="20" alt=""></button></td> -->
                                                             <td><img style="cursor: pointer;" onclick="afficher('<?php echo $row['ReffCmd'] ;?>')" src="img/icons/edit.png" width="20"
                                                                        height="20" alt=""></td>
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
    <style>
        .card input[type="text"] , .card select {
            width: 100%;
            height: 50px;
            border: 1px solid #c3cdd5;
            background-color: #f8f9fa;
            border-radius: 5px;
            margin: 10px;
        }
        .btnM {
            background-color: #000;
            color: #fff;
            border-radius: 5px;
            padding: 10px;
            margin: 5px;
        }
        .btnM:hover {
            background-color: #fff;
            color: #000;
            text-decoration: none;
        }
    </style>

    <div id="info" style="position: fixed;left: 30%;right: 30%;top:10%;bottom: 10%;" class="col-6 card text-center border">
        <form action="">    
        <div style="display: flex;justify-content: space-between;" class="card-header bg-light">
             <h3 id="txtRef" class="col text-center">544568A</h3>
             <h3 class="col-2 text-end" style="color: red;cursor: pointer;" onclick="fermer()">X</h3>
             
        </div>
        <div class="card-body border" style="background-color: #fff;">
            <div class="row">
                <div class="col">
                    <h5>Nom</h5>
                    <input type="text" >
                </div>
                <div class="col">
                    <h5>Prenom</h5>
                    <input type="text" >
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h5>Adresse</h5>
                    <input type="text" >
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h5>Article</h5>
                    <input type="text" >
                </div>
                <div class="col">
                    <h5>Prix</h5>
                    <input type="text" >
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h5>Ville</h5>
                    <input type="text" >
                </div>
                <div class="col">
                    <h5>Status</h5>
                    <select name="status" id="">
                        <option>Livrée</option>
                        <option>Annuler</option>
                        <option>En cours</option>
                    </select>
                </div>
            </div>
            
        </div>
        <div class="card-footer bg-light border">
            <input class="btnM" type="submit" value="Modifier">
        </div>
        </form>
    </div>
        <script>
            function afficher(id){
                document.getElementById('info').style.display='block';
                document.getElementById('txtRef').innerHTML=id;
            }
            function fermer(){
                document.getElementById('info').style.display='none';
            }
        </script>









    <?php include 'script.php';?>

</body>

</html>