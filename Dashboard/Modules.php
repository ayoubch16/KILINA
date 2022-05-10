<?php   include 'db-conn.php';
        include 'header.php';

        if($_POST['edit']=='Modifier'){
            $txtimg1=" ";$txtimg2=" ";$txtimg3=" ";
            $textTop=$_POST['textTop'];
            $text1=str_replace("'","\'",$textTop);
            $textMV=$_POST['textMV'];
            $text2=str_replace("'","\'",$textMV);
            $prixL=$_POST['prixL'];
            $imgData1 = addslashes(file_get_contents($_FILES['img1']['tmp_name']));
            if( $imgData1 != null ){  $txtimg1=" , `img1`='$imgData1'  ";}

            $imgData2 = addslashes(file_get_contents($_FILES['img2']['tmp_name']));
            if( $imgData2 != null ){  $txtimg2=" , `img2`='$imgData2'  ";}

            $imgData3 = addslashes(file_get_contents($_FILES['img3']['tmp_name']));
            if( $imgData3 != null ){  $txtimg3=" , `img3`='$imgData3'  ";}
            $sql="UPDATE `module` SET `textTop`='$text1',`textMV`='$text2', `prixLivraison`=$prixL ".$txtimg1." ".$txtimg2." ".$txtimg3;
            if ($cnx->query($sql) == TRUE) { 
                
            } else {
                echo ' error !';  
                echo '<br>'.$sql;
            }  
             
        }
?>

<body>
    <script>
    document.title = "Gestion des Modules";
    </script>
    <style>
    input[type='text'],
    input[type='number'] {
        border: 1px solid #9d9d9d;
        border-radius: 5px;
        width: 100%;
        height: 50px
    }
   
    #inputImg1, #inputImg2, #inputImg3{
        display: none;
    }
    .inputfile {
        height:80px;
        width: 200px;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 2px dashed #9d9d9d;
        margin-left: 2px;
    }

    .inputfile:hover {
        cursor: pointer;
        border: 2px dashed #7456e7;
    }

    </style>
    <div class="wrapper">
        <?php include 'menu.php';?>
        <?php 
        $sql="SELECT * FROM `module` WHERE id=1";
        $result = $cnx->query($sql);
        if ($row = $result->fetch_assoc()) {
        }
        ?>
        <div class="main">
            <?php include 'Top.php';?>
            <main class="content">
                <div class="container-fluid p-0">
                    <h1 class="h3 mb-3"><strong>Gestion des Modules</strong></h1>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-3">
                                <h6>Texte de Top :</h6>
                            </div>
                            <div class="col-md-6"><input class="text-center" type="text"
                                    value="<?php echo $row['textTop'];?>" name="textTop" required /> </div>
                        </div><br><br>
                        <div class="row">
                            <div class="col-md-3">
                                <h6>Texte Meilleur vendu :</h6>
                            </div>
                            <div class="col-md-6"><input class="text-center" type="text"
                                    value="<?php echo $row['textMV'];?>" name="textMV" required /> </div>
                        </div><br><br>
                        <div class="row">
                            <div class="col-md-3">
                                <h6>Prix de Livraison :</h6>
                            </div>
                            <div class="col-md-6"><input class="text-center" type="number"
                                    value="<?php echo $row['prixLivraison'];?>" name="prixL" required /> </div>
                        </div><br><br>
                        <div class="row">
                            <div class="col-md-3">
                                <h6>les Images de Coverture :</h6>
                            </div>
                            <div class="col-md-6 row">
                                <input type="file" onchange="loadFile1(event)" accept="image/*" name="img1"
                                    id="inputImg1">
                                <label class="mb-2 inputfile" for="inputImg1">
                                    <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img1']); ?>" id="output1" width="150" height="70" alt="">
                                </label>
                                <input type="file" onchange="loadFile2(event)" accept="image/*" name="img2"
                                    id="inputImg2">
                                <label class="mb-2 inputfile" for="inputImg2">
                                    <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img2']); ?>" id="output2" width="150" height="70" alt="">
                                </label>
                                <input type="file" onchange="loadFile3(event)" accept="image/*" name="img3"
                                    id="inputImg3">
                                <label class="mb-2 inputfile" for="inputImg3">
                                    <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img3']); ?>" id="output3" width="150" height="70" alt="">
                                </label>
                            </div>
                        </div><br><br>
                        <div class="row text-end">
                            <div class="col-md-6"> <input type="submit" name="edit" value="Modifier"> </div>
                        </div><br>
                    </form>
                </div>
            </main>
        </div>
    </div>
    <?php include 'script.php';?>
    <script>
        var loadFile1 = function(a) {
            var b = document.getElementById("output1");
            b.style.width = "100%";
            b.style.height = "100%";
            b.src = URL.createObjectURL(a.target.files[0])
        };
        var loadFile2 = function(a) {
            var b = document.getElementById("output2");
            b.style.width = "100%";
            b.style.height = "100%";
            b.src = URL.createObjectURL(a.target.files[0])
        };
        var loadFile3 = function(a) {
            var b = document.getElementById("output3");
            b.style.width = "100%";
            b.style.height = "100%";
            b.src = URL.createObjectURL(a.target.files[0])
        };
    </script>
</body>

</html>