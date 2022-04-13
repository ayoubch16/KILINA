<?php 
$c=$_GET['c'];
$p=$_GET['p'];
$t=$_GET['t'];
?>
<?php include 'header.php';?>

<body>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

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

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .swiper {
        margin-left: auto;
        margin-right: auto;
    }
    .infoTele{
        position: absolute;
        top: 20px;
        left: 20px;
        text-align: left;
        padding-left: 10px;
    }
    </style>
    <?php include 'navbar.php';?>
    <div id="page">
        <div class="container">
            <div class=" bg-white container animate__animated animate__fadeIn">
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php    $sqlc="SELECT * FROM `produits` ORDER BY `date` DESC LIMIT 3";
                                $resultc = $cnx->query($sqlc);
                                $cpt=0;
                                while ($rowc = $resultc->fetch_assoc()) { $cpt++?>
                        <div class="swiper-slide row">
                            <div class="col-sm-6 col-md">
                                <div class="infoTele">
                                    <h1>NEW</h1>
                                    <h5><?php echo $rowc['titre'];?></h5>
                                    <h3><?php echo $rowc['prix'];?> DH</h3>
                                </div>
                                <img class="img-fluid" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($rowc['img1']); ?>" alt="">
                            </div> 
                            <div class="col-sm-6 col-md">
                                <h1>NEW</h1>
                                <h5><?php echo $rowc['titre'];?></h5>
                                <h3><?php echo $rowc['prix'];?> DH</h3>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>

                <!-- Swiper JS -->
                <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

                <!-- Initialize Swiper -->
                <script>
                    var swiper = new Swiper(".mySwiper", {
                        slidesPerView: 1,
                        spaceBetween: 30,
                        loop: true,
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true,
                        },
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev",
                        },
                    });
                </script>
             
            </div>
        </div>
    </div>
    </div>

</body>

</html>