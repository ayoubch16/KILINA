

<form>
    <input type="text" name="id" id="id" placeholder="id">
    <input type="text" name="quantite" id="quantite" placeholder="quantite">
    <input type="text" name="taille" id="taille" placeholder="taille"><br>
    <!-- <input type="text" name="price" id="price" placeholder="price">  -->
    <!-- <input type="submit" value="submit" onclick="Envoyer()"> <br> -->
    <button onclick="Envoyer()">Envoyer</button><br>
    <button onclick="Remove()">Remove</button><br>
    <button onclick="Test()">Test</button><br>
    <button onclick="Fermer()">Fermer</button><br>
    <p id="message"></p>

</form>
<script>
        function Envoyer(){
            // get the values
            const id = document.getElementById("id").value;
            const quantite = document.getElementById("quantite").value;
            const taille = document.getElementById("taille").value;
            let obj;
            // create an object
            const arr = {
                id:id,
                quantite:quantite,
                taille:taille
            };
            if(localStorage.getItem('object') === null){
                alert('yes');
                
                 obj=[{
                        id:0,
                        quantite:0,
                        taille:'0'
                    }];
            }else{
                alert('no');
                const str1 = localStorage.getItem("object");
               obj = JSON.parse(str1);
            }


            if(id=='' || quantite=='' || taille==''){
                alert('veuillez remplir tous les champs');
            }
            

            // const obj=new Array(1);
            
            // const str1 = localStorage.getItem("object");
            // const obj = JSON.parse(str1);

            // var lenghtObj=obj.length;
            // console.log(lenghtObj);

            // var size = Object.keys(myObj).length;
            // console.log(obj);

            obj.push(arr);
            // convert object to JSON string
            const jsonObj = JSON.stringify(obj);
            // save to localStorage
            localStorage.setItem("object", jsonObj);
            // get the string
            // from localStorage
            const str = localStorage.getItem("object");
            // convert string to valid object
            const parsedObj = JSON.parse(str);
            console.log(parsedObj);
            // display the object
            document.getElementById("message").innerHTML = parsedObj.id;

        }

        function Remove(){
            localStorage.removeItem('object');
            // const str1 = localStorage.getItem("object");
            // const obj = JSON.parse(str1);
            // var lenghtObj=obj.length;
            // console.log(lenghtObj);
        }

        function Test(){
            if(localStorage.getItem('object') === null){
                alert('yes');
            }else{
                alert('no');
            }
        }
        function Fermer(){
           localStorage.removeItem('object');
           localStorage.removeItem('panier');
        }

</script>