<?php include 'header.php';?>
<?php include 'navbar.php';?>
<style>
     .inputBox1 {
        border: 2px solid #D0D0D0;

        background-color: #FAFAFA;
        height: 60px;
        }
        .inputBox1 input {
                width: 100%;
                border: none;
                background-color: #FAFAFA;
        }
        .btnS1 {
            border: 2px solid #000;
            background-color: #EDCA51;
            color: #000;
        }
        .btnS1:hover {
            border: 2px solid #EDCA51;
            background-color: #000;
            color: #EDCA51;
        }
</style>

<body>
    <script>
    document.title = 'Information ';
    </script>

    <div id="information" class=" bg-white container rounded p-4">
        <h2>Les information personnel</h2>
        <div class="row text-center m-3">
            <div class="col text-left">
                <div>
                    <p class="mx-3">Nom et Prenom :</p>
                    <div class="inputBox1 mx-3 p-2 row">
                        <input type="text" name="nom"  id="">
                    </div>
                </div>
                <div>
                    <p class="mx-3">Ville :</p>
                    <div class="inputBox1 mx-3 p-2 row">
                        <input type="text" name="ville"  id="">
                    </div>
                </div>
                <div>
                    <p class="mx-3">Email :</p>
                    <div class="inputBox1 mx-3 p-2 row">
                        <input type="emai" name="email"  id="">
                    </div>
                </div>
            </div>
            <div class="col text-left">
                <div>
                    <p class="mx-3">Adresse :</p>
                    <div class="inputBox1 mx-3 p-2 row">
                        <input type="text" name="adresse"  id="">
                    </div>
                </div>
                <div>
                    <p class="mx-3">Tele :</p>
                    <div class="inputBox1 mx-3 p-2 row">
                        <input type="text" name="tele"  id="">
                    </div>
                </div>
                <div>
                    <p class="mx-3">Adresse :</p>
                    <div class="inputBox1 mx-3 p-2 row">
                        <input type="text" name="adresse"  id="">
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="text-center m-4">
            <div class="row" style="justify-content: center;">
                <button class="col-3 mx-3 p-2 btnS1">Valide</button>
                <button class="col-3 mx-3 p-2">Annuler</button>
            </div>

        </div>
    </div>

</body>
<?php include 'footer.php';?>