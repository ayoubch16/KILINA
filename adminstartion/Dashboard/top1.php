<style>
    .parent {
        position: fixed;
        top: 230px;
        left: 0px;
        display: grid;
        z-index: -9;

    }

    .parent img {
        filter: brightness(0%);
    }

    .parent img:hover {
        filter: brightness(100%);
    }

    .div1 p {
        transform: rotate(-90deg);

    }

    .div2 {
        grid-area: 2 / 1 / 3 / 2;
        text-align: center;
    }

    .div3 {
        grid-area: 3 / 1 / 4 / 2;
        text-align: center;
    }

    .div4 {
        grid-area: 4 / 1 / 5 / 2;
        text-align: center;
    }

    .div5 {
        grid-area: 5 / 1 / 6 / 2;
        text-align: center;
    }

</style>

<div class="parent">
    <div class="div1 mb-4 pb-3"> <p>Follow us on</p> </div>
    <div class="div2 mb-2"> <a href=""><img class=" " src="img/icons/instagram.png" width="20" height="20" alt="" /></a></div>
    <div class="div3 mb-2">  <a href=""><img class="" src="img/icons/facebook.png" width="15" height="20" alt="" /></a> </div>
    <div class="div4 mb-2"><a href=""><img class="" src="img/icons/twitter.png" width="20" height="20" alt="" /></a></div>
    <div class="div5 mb-2"> <a href=""><img class="" src="img/icons/tik-tok.png" width="16" height="20" alt="" /></a> </div>
</div> 