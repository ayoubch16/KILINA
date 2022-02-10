<style>
    .dashboardNavbar {
        position: fixed;
        left: 0;
        top: 0;
        background-color: #9583ff;
        width: 20%;
        height: 600px;
    }
    .parent {
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: repeat(7, 1fr);
    grid-column-gap: 0px;
    grid-row-gap: 0px;
    }

    .div1 { grid-area: 1 / 1 / 2 / 2; text-align: center; padding: 10px;background-color: #000;}
    .div2 { grid-area: 2 / 1 / 3 / 2; text-align: center; padding: 10px;background-color: #000;}
    .div3 { grid-area: 3 / 1 / 4 / 2; text-align: center; padding: 10px;background-color: #000;}
    .div4 { grid-area: 4 / 1 / 5 / 2; text-align: center; padding: 10px;background-color: #000;}
    .div5 { grid-area: 4 / 1 / 5 / 2; text-align: center; padding: 10px;background-color: #000;}
    .div6 { grid-area: 5 / 1 / 6 / 2; text-align: center; padding: 10px;background-color: #000;}
    .div7 { grid-area: 6 / 1 / 7 / 2; text-align: center; padding: 10px;background-color: #000;}
    .btnBar {
        background-color: #000;
        color: #fff;
    }
</style>
<div class="dashboardNavbar">
    <div class="text-center" style="display: flex;justify-content: center;">
        <img src="image/logo.png" width="200" height="100"  alt="">
    </div>
    <div class="parent">
        <div class="div1"> <a class="btnBar p-3" href="">Acceuil</a> </div>
        <div class="div2"> <a class="btnBar p-3" href="">Acceuil</a> </div>
        <div class="div3"> <a class="btnBar p-3" href="">Acceuil</a> </div>
        <div class="div4"> <a class="btnBar p-3" href="">Acceuil</a> </div>
        <div class="div5"> <a class="btnBar p-3" href="">Acceuil</a> </div>
        <div class="div6"> <a class="btnBar p-3" href="">Acceuil</a> </div>
        <div class="div7"> <a class="btnBar p-3" href="">Acceuil</a> </div>
    </div> 


</div>