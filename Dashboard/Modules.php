<?php   include 'db-conn.php';
        include 'header.php';

        if($_GET['edit']=='Modifier'){
            $textTop=$_GET['textTop'];
            $text1=str_replace("'","\'",$textTop);
            $textMV=$_GET['textMV'];
            $text2=str_replace("'","\'",$textMV);
            $prixL=$_GET['prixL'];
            $sql="UPDATE `module` SET `textTop`='$text1',`textMV`='$text2',`prixLivraison`=$prixL";
            if ($cnx->query($sql) == TRUE) { 
                
            } else {
                echo ' error !';  
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
    .inputfile {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 2px dashed #9d9d9d
    }

    .inputfile:hover {
        cursor: pointer;
        border: 2px dashed #7456e7
    }

    #inputImg1,
    #inputImg2,
    #inputImg3,
    #inputImg4,
    #inputImg5 {
        display: none
    }

    .inputfile1 {
        height: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 2px dashed #9d9d9d
    }

    .inputfile1:hover {
        cursor: pointer;
        border: 2px dashed #7456e7
    }
    .inputfile1 img {
        width: 100%;
        height: 100%;
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
                    <form>
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
                                <h6>Images D'acceuil :</h6>
                            </div>
                            <div class="col-md-6 row">
                                <div class="col">
                                    <input type="file" onchange="loadFile1(event)" accept="image/*" name="img2" required
                                        id="inputImg1">
                                    <label class="mb-2 inputfile1" for="inputImg1">
                                        <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img1']); ?>" id="output1" width="100%" height="100" alt="">
                                    </label>
                                </div>
                                <div class="col">
                                    <input type="file" onchange="loadFile2(event)" accept="image/*" name="img2" required
                                        id="inputImg2">
                                    <label class="mb-2 inputfile1" for="inputImg2">
                                    <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img2']); ?>" id="output1" width="150" height="100" alt="">
                                    </label>
                                </div>
                                <div class="col">
                                    <input type="file" onchange="loadFile3(event)" accept="image/*" name="img2" required
                                        id="inputImg3">
                                    <label class="mb-2 inputfile1" for="inputImg3">
                                    <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img3']); ?>" id="output1" width="150" height="100" alt="">
                                    </label>
                                </div>

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
    <?php include 'script.php';?>
</body>

</html>