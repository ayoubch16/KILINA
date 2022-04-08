<?php 
include 'db-conn.php';
include 'header.php';?>

<body>
    <style>
    .edit img {
        filter: brightness(0%);
    }

    .edit img:hover {
        filter: brightness(100%);
    }
    iframe{
        width: 150px;
        height: 250px;
    }
    .cv{
        position: absolute;
        top: 10%;
        left: 30%;
        right: 30%;
        width: 40%;
        height: 80%;
        padding: 10px;
    }
    #cv{
        display: none;
    }
    </style>
    <script>
    document.title = 'Gestion du Recrutement';
    </script>

    <div class="wrapper">
        <?php include 'menu.php';?>
        <div class="main">
            <?php include 'Top.php';?>
            <main class="content">
                <div class="container-fluid p-0">
                    <h1 class="h3 mb-3"><strong>Gestion du Recrutement</strong></h1>
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
                                                            <th class="text-left">Nom</th>
                                                            <th class="text-left">Prenom</th>
                                                            <th class="text-left">Email</th>
                                                            <th class="text-left">Telephone</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="myTable">
                                                        <?php $sql="SELECT * FROM `recrutement` order by `id` DESC ";
                                                              $result = $cnx->query($sql);
                                                              while ($row = $result->fetch_assoc()) {
                                                        ?>
                                                        <tr>
                                                            <td class="text-left"><button onclick="afficher('<?php echo 'data:application/pdf;base64,' . base64_encode($row['cv']);?>')">Voir CV</button></td>
                                                            <td class="text-left"><?php echo $row['nom'];?></td>
                                                            <td class="text-left"><?php echo $row['prenom'];?></td>
                                                            <td class="text-left"><?php echo $row['tele'];?></td>
                                                            <td class="text-left"><?php echo $row['email'];?></td>
                                                            <td><a href="updateUser.php?a=6&c=<?php echo $row['id'];?>"><i class="align-middle" data-feather="trash"></i></a></td>
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
            <div id="cv" class="cv bg-light p-2">
                <div class="text-end bg-white"><button onclick="fermer()"><i class="align-middle" data-feather="x-square"></i></button></div>
                <embed id="cvT" src="" width="100%" height="100%" type='application/pdf'/>
            </div>

        </div>
    </div>
    <script>
        function afficher(text) { 
            document.getElementById('cv').style.display='block';
            document.getElementById('cvT').src=text;
         }
         function fermer(){
            document.getElementById('cv').style.display='none';
         }
    </script>


    <?php include 'script.php';?>


</body>

</html>