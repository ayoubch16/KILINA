<style>.footer-footer a:hover{color:#fff}</style>
<?php
include 'db-conn.php'; 
$sqlfooter="SELECT * FROM `footer` WHERE `id`=1";
$resultfooter = $cnx->query($sqlfooter);
if ($rowf = $resultfooter->fetch_assoc()) {
}?>
<footer class="animate__animated animate__fadeInUpBig">
<div class="container">
<div class="row">
<div style="display:grid" class="section1 col-md">
<h3>Kilina Collection</h3>
<p style="text-align: justify;">
    <?php 
     echo str_replace(".",".<br>",$rowf['description']);
    // echo $rowf['description'];
     ?>
</p>
</div>
<div style="display:grid" class="section4 col-md-4">
<h4 class="p-3 text-left">NOUS CONTACTER</h4>

<div class="p-3 text-left">
<a target="blanc" href="<?php echo $rowf['facebooklien']; ?>"><img style="filter: invert(100%) sepia(0%) saturate(1373%) hue-rotate(210deg) brightness(114%) contrast(100%);" src="image/tiktokb.png" alt=""></a>
<a target="blanc" href="<?php echo $rowf['tiktoklien']; ?>"><img src="image/facebookb.png" alt=""></a>
<a target="blanc" href="<?php echo $rowf['instagramlien']; ?>"><img src="image/instagramb.png" alt=""></a>
<a target="blanc" href="<?php echo $rowf['twiterlien']; ?>"><img style="filter: invert(100%) sepia(0%) saturate(1373%) hue-rotate(210deg) brightness(114%) contrast(100%);" src="image/twitterb.png" alt=""></a>
<a target="blanc" href="https://wa.me/<?php echo $rowf['whatsappnum']; ?>"><img src="image/whatsappb.png" alt=""></a>
</div>
<div class="p-3 text-left">
<!-- <h6>Tele : 05 30 02 44 53</h6> -->
<h6>Tele  : <?php echo $rowf['tele']; ?></h6>
<h6>Email : <?php echo $rowf['email']; ?></h6>


</div>
</div>
</div>
</div>

<!--<div class="footer-footer text-center">-->
<!--<p style="text-align:center">powered by <a target="blanck" href="https://www.tradeline-solutions.com/">Trade Line Solution</a> </p>-->
<p style="text-align:center;margin-bottom: 0px;"> &#169; 2022 Kilina . All rights reserved. </p>
</div>
</footer>