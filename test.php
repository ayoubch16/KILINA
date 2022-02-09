<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>


    input[type="radio"].color {
        display: none;
    }

    input[type="radio"].color+label {
        color:gray;
    }
    input[type="radio"].color+label:hover {
        color:#000;
        cursor: pointer;
    }

    input[type="radio"].color1+label {
        background-color: #fff;
    }

    input[type="radio"].color1:checked+label {
        color: #000;
    }

    input[type="radio"].color2:checked+label {
        color: #000;
    }

    input[type="radio"].color3:checked+label {
        color: #000;
    }

    input[type="radio"].color4:checked+label {
        color: #000;
    }
    input[type="radio"].color5:checked+label {
        color: #000;
    }




    </style>
</head>
<body>

  <!-- <input type="radio" class="color color1" name="color" id="c1">
  <input type="radio" class="color color2" name="color" id="c2">
 
  <label  for="c1">S</label>
  <label  for="c2">M</label> -->
                                <input type="radio" name="color" value="S" class="color color1" id="color1">
                                <label for="color1">S</label>
                                <input type="radio" name="color" value="M" class="color color2" id="color2">
                                <label for="color2">L</label>
                                <input type="radio" name="color" value="L" class="color color3" id="color3">
                                <label for="color3">M</label> 
                                <input type="radio" name="color" value="XL" class="color color4" id="color4">
                                <label for="color4">XL</label> 
                                <input type="radio" name="color" value="XXL" class="color color5" id="color5">
                                <label for="color5">XXL</label> 
 
    
</body>
</html>