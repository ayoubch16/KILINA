<?php 
$c=$_GET['c'];
$p=$_GET['p'];
$t=$_GET['t'];
?>
<?php include 'header.php';?>

<body>
       <!-- Link Swiper's CSS -->
       <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <style>
        #pro2,
        #pro3 {
            display: none
        }

        .carousel-indicators li {
            background-color: #EDCA51 !important
        }

        #carouselExampleIndicators {
            height: 500px;
            overflow: hidden
        }

        .imgGrande {
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .colorImg {
            border-radius: 50%;
            overflow: hidden
        }

        .colorImg img {
            width: 30px;
            height: 30px
        }

        .colorImg img:hover {
            transform: scale(1.1);
            transition: 1s
        }

        .favor .fa {
            color: red
        }

        .btnDetail {
            width: auto;
            height: 40px;
            color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #e1d106;
            text-align: center;
            font-size: 1rem
        }

        .btnDetail:hover {
            text-decoration: none;
            background-color: #000;
            color: #e1d106
        }

        .btnBoutique {
            border: 0;
            background: transparent
        }

        .btnBoutique:hover {
            border: 0;
            background: transparent
        }
        .swiper {
        width: 100%;
        height: 550px;
      }

      .swiper-slide {
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 18px;
        font-size: 22px;
        font-weight: bold;
        color: #000;
        background-color: #fff;
        border: 1px solid grey;
        padding: 5px;
        box-shadow: 0px 0px 9px 0px #000000;
      }

      /* .swiper-slide:nth-child(1n) {
        background-color: rgb(206, 17, 17);
      }

      .swiper-slide:nth-child(2n) {
        background-color: rgb(0, 140, 255);
      }

      .swiper-slide:nth-child(3n) {
        background-color: rgb(10, 184, 111);
      } */
      
    </style>
    <?php include 'navbar.php';?>
    <div id="page">
        <div class="container">
            <div class=" bg-white container animate__animated animate__fadeIn">
            <!-- Swiper -->
                <div class="swiper mySwiper p-1">
                    <div class="swiper-wrapper">
                    <?php 
                        $sqlc="SELECT * FROM `produits` ORDER BY `date` DESC LIMIT 3";
                        $resultc = $cnx->query($sqlc);
                        while ($rowc = $resultc->fetch_assoc()) {
                    ?>
                        <div class="swiper-slide row">
                            <div class="col-md"><img class="img-fluid" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($rowc['img1']); ?>" /></div>
                            <div class="col-md detailproduit">
                                <h1>New</h1>
                                <h3><?php echo $rowc['titre'] ;?></h3>
                                <h3><?php echo $rowc['prix']-$rowc['prix']*($rowc['remis']/100);?> DH</h3>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    </div>

                    <!-- Swiper JS -->
                    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

                    <!-- Initialize Swiper -->
                    <script>
                    var swiper = new Swiper(".mySwiper", {
                        effect: "cards",
                        grabCursor: true,
                    });
                    </script>
            </div>
        </div>
    </div>

</body>

</html>