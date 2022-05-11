<style>
        .parent {
            position: fixed;
            top: 230px;
            left: 0;
            display: grid;
        }

        .parent img {
            filter: brightness(0%)
        }

        .parent img:hover {
            filter: brightness(100%)
        }

        .div1 p {
            transform: rotate(-90deg)
        }

        .div2 {
            grid-area: 2 / 1 / 3 / 2;
            text-align: center
        }

        .div3 {
            grid-area: 3 / 1 / 4 / 2;
            text-align: center
        }

        .div4 {
            grid-area: 4 / 1 / 5 / 2;
            text-align: center
        }

        .div5 {
            grid-area: 5 / 1 / 6 / 2;
            text-align: center
        }

        @media screen and (max-width: 580px) {
            .parentReseaux {
                display: none;
            }
        }
</style>
<style>
    .ListeCmd{
        position: absolute;
        top: 0;
        right: 0;
        width: 40%;
        height: 100%;
        background-color: #000;
    }
</style>
<div class="reduction">
    <?php 
            include 'dbconnect.php';
            $sql="SELECT * FROM `module` WHERE id=1";
            $result = $cnx->query($sql);
            if ($row = $result->fetch_assoc()) {
            }
        ?>
    <p><?php echo $row['textTop'];?></p>
</div>
<div class="parent">
    <div class="div1 mb-4 pb-3">
        <p>Follow us on</p>
    </div>
    <div class="div2 mb-2"> <a href="https://instagram.com/kilina.officiel/"><img class="" src="../image/instagram.png"
                width="20" height="20" alt="" /></a></div>
    <div class="div3 mb-2"> <a href="https://www.facebook.com/kilina.officiel/"><img class=""
                src="../image/facebook.png" width="15" height="20" alt="" /></a> </div>
    <div class="div4 mb-2"> <a href="https://mobile.twitter.com/kilinaofficiel/"><img class=""
                src="../image/twitter.png" width="20" height="20" alt="" /></a></div>
    <div class="div5 mb-2"> <a href="https://vm.tiktok.com/ZMLChb4ta/"><img class="" src="../image/tik-tok.png"
                width="16" height="20" alt="" /></a> </div>
</div>
<div class="ListeCmd">
    

</div>