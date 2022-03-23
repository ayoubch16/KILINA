<!DOCTYPE html>
<html lang="en">
<?php include 'db-conn.php';?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css"
        integrity="sha512-NZ19NrT58XPK5sXqXnnvtf9T5kLXSzGQlVZL9taZWeTBtXoN3xIfTdxbkQh6QSoJfJgpojRqMfhyqBAAEeiXcA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Tableau</title>
    <style>
        th,td {
            font-size: 0.8rem;
          
        }
    </style>
</head>

<body id="page">
    <div  class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-center">Commandes</th>
                    <th scope="col" class="text-center">Clients</th>
                    <th scope="col" class="text-center">Articles</th>
                    <th scope="col" class="text-center"></th>
                    <th scope="col" class="text-center"></th>
                    <th scope="col" class="text-center">Ville</th>
                    <th scope="col" class="text-center">Date</th>
                    <th scope="col" class="text-center">Prix</th>
                </tr>
            </thead>
            <tbody>
                <?php  
                    $date11=$_GET['datedebut'];
                    $date22=$_GET['datefin'];
                    $date1 = new DateTime($date11);
                    $date2 = new DateTime($date22);
                    $date1=date_format($date1, 'Y-m-d');
                    $date2=date_format($date2, 'Y-m-d');
                     
                    $sql="SELECT * FROM `commandes` WHERE (`dateCmd` BETWEEN '$date1' AND '$date2') ";
                    $result = $cnx->query($sql);
                    $cpt=0;
                    // echo $sql;
                    while ($row = $result->fetch_assoc()) {
                        
                ?>
                <tr>
                <td class="text-center"><?php echo $row['ReffCmd'] ;?></td>
                <td class="text-center">
                <?php 
                      $Reff=$row['ReffClient'];
                      $sql1="SELECT * FROM `clients` WHERE `Reff`='$Reff' ";
                      $result1 = $cnx->query($sql1);
                      if ($row1 = $result1->fetch_assoc()) {
                            echo $row1['nom'].' '.$row1['prenom'];
                      }
                ?>
                </td>
                <td class="text-center">
                    <?php echo str_replace("-","<br>",$row['ReffProd']);?>
                </td>
                <td class="text-center">
                    <?php echo str_replace("-","<br>",$row['tailleProd']);?>
                </td>
                <td class="text-center">
                    <?php echo str_replace("-","<br>",$row['QntProd']);?>
                </td>
                <td class="text-center"><?php echo $row['villeCmd'] ;?></td>
                <td class="text-center"><?php echo $row['dateCmd'] ;?></td>
                <td  class="text-center prix" ><?php echo $row['prixCmd'] ;?></td>
            </tr>
            <?php
                $cpt++;
                } ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td id="sum"></td>
                </tr>
            </tbody>
        </table>
    </div>
        

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.min.js"
        integrity="sha512-Pv/SmxhkTB6tWGQWDa6gHgJpfBdIpyUy59QkbshS1948GRmj6WgZz18PaDMOqaEyKLRAvgil7sx/WACNGE4Txw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
 
    <script>
        window.print();
    </script>

</body>

</html>