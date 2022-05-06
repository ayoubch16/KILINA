<?php   include 'db-conn.php';
        include 'header.php';

        if($_GET['edit']=='Modifier'){
            $description=str_replace("'","\'",$_GET['description']);
            $tele=str_replace("'","\'",$_GET['tele']);
            $email=str_replace("'","\'",$_GET['email']);
            $facebooklien=str_replace("'","\'",$_GET['facebooklien']);
            $tiktoklien=str_replace("'","\'",$_GET['tiktoklien']);
            $instagramlien=str_replace("'","\'",$_GET['instagramlien']);
            $twiterlien=str_replace("'","\'",$_GET['twiterlien']);
            $whatsappnum=str_replace("'","\'",$_GET['whatsappnum']);
            // $text1=str_replace("'","\'",);

            // $sql="UPDATE `footer` SET `textTop`='$text1',`textMV`='$text2',`prixLivraison`=$prixL";
            $sql="UPDATE `footer` SET `description`='$description',`tele`='$tele',`email`='$email',`facebooklien`='$facebooklien',`tiktoklien`='$tiktoklien',
            `instagramlien`='$instagramlien',`twiterlien`='$twiterlien',`whatsappnum`='$whatsappnum' WHERE `id`=1";
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
    input[type='number'] ,
    input[type='email'],
    input[type='link'],
    input[type='tele']{
        border: 1px solid #9d9d9d;
        border-radius: 5px;
        width: 100%;
        height: 40px;
        margin: 1px;
        
    }
    textarea{
        width: 100%;
        height: auto;
        resize: none;
    }
    </style>
    <div class="wrapper">
        <?php include 'menu.php';?>
        <?php 
        $sql="SELECT * FROM `footer` WHERE id=1";
        $result = $cnx->query($sql);
        if ($row = $result->fetch_assoc()) {
            
        }
        ?>
        <div class="main">
            <?php include 'Top.php';?>
            <main class="content">
                <div class="container-fluid p-0">
                    <h1 class="h3 mb-3"><strong>Gestion de Footer</strong></h1>
                    <form>
                        <div class="row">
                            <div class="col-md-3">
                                <h6>Description :</h6>
                            </div>
                            <div class="col-md-6">
                                <textarea   rows="8" name="description"><?php echo $row['description'];?></textarea>
                                
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-3">
                                <h6>Tele :</h6>
                            </div>
                            <div class="col-md-6"><input class="text-center" type="text"
                                    value="<?php echo $row['tele'];?>" name="tele" required /> </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-3">
                                <h6>Email :</h6>
                            </div>
                            <div class="col-md-6"><input class="text-center" type="email"
                                    value="<?php echo $row['email'];?>" name="email" required /> </div>
                        </div><br>
                        <hr>
                        <h2 class="text-center">Réseau social</h2>
                        <div class="row">
                            <div class="col-md-3">
                                <h6>Facebook :</h6>
                            </div>
                            <div class="col-md-6"><input class="text-center" type="link"
                                    value="<?php echo $row['facebooklien'];?>" name="facebooklien" required /> </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-3">
                                <h6>instagram :</h6>
                            </div>
                            <div class="col-md-6"><input class="text-center" type="link"
                                    value="<?php echo $row['instagramlien'];?>" name="instagramlien" required /> </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-3">
                                <h6>TikTok :</h6>
                            </div>
                            <div class="col-md-6"><input class="text-center" type="link"
                                    value="<?php echo $row['tiktoklien'];?>" name="tiktoklien" required /> </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-3">
                                <h6>Twiter :</h6>
                            </div>
                            <div class="col-md-6"><input class="text-center" type="link"
                                    value="<?php echo $row['twiterlien'];?>" name="twiterlien" required /> </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-3">
                                <h6>Whatsapp :</h6>
                            </div>
                            <div class="col-md-6"><input class="text-center" type="tele"
                                    value="<?php echo $row['whatsappnum'];?>" name="whatsappnum" required /> </div>
                        </div><br>
                        
                        <div class="row text-end">
                            <div class="col-md-6"> <input type="submit" name="edit" value="Modifier"> </div>
                        </div><br>
                    </form>
                </div>
            </main>
        </div>
    </div>
    <?php include 'script.php';?>
</body>

</html>