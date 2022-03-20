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

<?php 
        if( $_GET['c']=='1'){
                echo "#recrutement{ display: block; } #reclamation{ display: none; }" ;
        }else{
                echo "#recrutement{ display: none; } #reclamation{ display: block; }" ;
        }
?>
</style>

<body>
    <script>
    document.title = 'Information';
    </script>

    <div id="page">
        <div id="information" class=" bg-white container rounded p-4">
            <form class="g-3 needs-validation" novalidate action="reclamation.php" method="POST" novalidate
                    enctype="multipart/form-data">
            <div id="recrutement">
                <h2 class="text-center">Recrutement</h2>

                    <div class="row my-2 p-2">
                        <div class="col-md">
                            <label for="validationCustom01" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="nom" name="nom"
                                required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md">
                            <label for="validationCustom01" class="form-label">Prenom</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="prenom"
                                name="prenom" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="row my-2 p-2">
                        <div class="col-md">
                            <label for="validationCustom01" class="form-label">Email</label>
                            <input type="email" class="form-control" id="validationCustom01" placeholder="email"
                                name="email" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md">
                            <label for="validationCustom01" class="form-label">Telephone</label>
                            <input type="tel" class="form-control" id="validationCustom01" placeholder="telephone"
                                name="telephone" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="row my-2 p-2">
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">CV</label>
                            <input type="file" class="form-control" id="validationCustom01" placeholder="cv" name="cv"
                                required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="row my-2 p-2">
                        <!-- <button >Envoyer !</button> -->
                        <input class="btn btn-primary" type="submit" value="Envoyer !" />
                    </div>
                

            </div>
            <div id="reclamation">
                <h2 class="text-center">Reclamation</h2>
                    <div class="row my-2 p-2">
                        <div class="col-md">
                            <label for="validationCustom01" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="nom" name="nom"
                                required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md">
                            <label for="validationCustom01" class="form-label">Prenom</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="prenom"
                                name="prenom" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="row my-2 p-2">
                        <div class="col-md">
                            <label for="validationCustom01" class="form-label">Email</label>
                            <input type="email" class="form-control" id="validationCustom01" placeholder="email"
                                name="email" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md">
                            <label for="validationCustom01" class="form-label">Telephone</label>
                            <input type="tel" class="form-control" id="validationCustom01" placeholder="telephone"
                                name="telephone" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="row my-2 p-2">
                        <div class="col-md">
                            <label for="validationCustom01" class="form-label">Message</label><br>
                            <textarea class="p-3" name="message" rows="10" style="width: 100%;resize: none;"></textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="row my-2 p-2">
                        <!-- <button >Envoyer !</button> -->
                        <input class="btn btn-primary" type="submit" value="Envoyer !" />
                    </div>
               

            </div>
            </form>
        </div>
    </div>

</body>
<?php include 'footer.php';?>