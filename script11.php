<script>
    function Afficher(){
        // document.getElementById("message").innerHTML = localStorage.getItem("panier");
        // document.getElementById("message").innerHTML = "bien";
    //  // get the string
    //         // from localStorage
                // id:id,
                // quantite:quantite,
                // taille:taille,
                // prix:prix
            const str = localStorage.getItem("panier");
            let text='';
    //         // convert string to valid object
            const parsedObj = JSON.parse(str);
            for(let i=0;i < parsedObj.lenght;i++){
                text +=i+'-->'+parsedObj[i].id+'<br>';
            } 
        document.getElementById("message").innerHTML = text;
    //         console.log(parsedObj);
    //         // display the object
    //         document.getElementById("message").innerHTML = parsedObj.id;
    }
</script>
<button onclick="Afficher()">Afficher</button>
<h1 id="message">Test </h1>