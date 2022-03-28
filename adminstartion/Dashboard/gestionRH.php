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
                                                            <th class="text-left">Telephone</th>
                                                            <th class="text-left">Email</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="myTable">
                                                        <?php $sql="SELECT * FROM `recrutement` ";
                                                              $result = $cnx->query($sql);
                                                              while ($row = $result->fetch_assoc()) {
                                                        ?>
                                                        <tr>
                                                            <!-- <td class="text-left"><img src="<?php echo 'data:file/pdf;base64,' . base64_encode($row['cv']); ?>"
                                                                                       width="20" height="20"  alt=""></td> -->
                                                            <td class="text-left">
                                                                <iframe src="<?php echo $row['cv'].'pdf'; ?>">

                                                                </iframe>
                                                            </td>
                                                            <td class="text-left"><?php echo $row['nom'];?></td>
                                                            <td class="text-left"><?php echo $row['prenom'];?></td>
                                                            <td class="text-left"><?php echo $row['tele'];?></td>
                                                            <td class="text-left"><?php echo $row['email'];?></td>
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