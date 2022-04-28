<?php include 'header.php';?>
<?php include 'navbar.php';?>
<body>
<script>document.title="Panier ";</script>
<style>p{margin:0!important}.btnP{width:327px;height:48px;color:#000;display:flex;justify-content:center;align-items:center;background-color:#e1d106;text-align:center;font-size:20px;border:0}.btnP:hover{text-decoration:none;background-color:#000;color:#e1d106}.btnP:hover>img{filter:invert(85%) sepia(18%) saturate(7468%) hue-rotate(11deg) brightness(106%) contrast(95%)}.btnP1{width:auto;height:48px;color:#000;padding:5px;display:flex;justify-content:center;align-items:center;background-color:#e1d106;text-align:center;font-size:20px}.btnP1:hover{text-decoration:none;background-color:#000;color:#e1d106}.panier{text-align:center}.panier h1{font-size:42px;font-weight:bold}.flex-container{display:-ms-flexbox;display:-webkit-flex;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-align-content:center;-ms-flex-line-pack:center;align-content:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.flex-item:nth-child(1){-webkit-order:0;-ms-flex-order:0;order:0;-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;-webkit-align-self:auto;-ms-flex-item-align:auto;align-self:auto}.flex-item:nth-child(2){-webkit-order:0;-ms-flex-order:0;order:0;-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;-webkit-align-self:auto;-ms-flex-item-align:auto;align-self:auto}.flex-item:nth-child(3){-webkit-order:0;-ms-flex-order:0;order:0;-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;-webkit-align-self:auto;-ms-flex-item-align:auto;align-self:auto}.flex-item:nth-child(4){-webkit-order:0;-ms-flex-order:0;order:0;-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;-webkit-align-self:auto;-ms-flex-item-align:auto;align-self:auto}</style>
<?php $sqlcpt="SELECT count(*) FROM `panier` WHERE `etat`='V'";$resultcpt=$cnx->query($sqlcpt);$count;while($rowcpt=$resultcpt->fetch_assoc()){$count=$rowcpt['count(*)'];} ?>
<div id="page">
<?php 
        if($_GET['c']=='1'){?>
<div class="panier bg-white container rounded p-4">
<div id="felicitation" class="flex-container">
<div class="flex-item my-2"><img src="image/icone/felicitation.png" width="200" height="200" alt="">
</div>
<div class="flex-item my-2">
<h1>Félicitation</h1>
</div>
<div class="flex-item my-2">
<h5>votre demande sera <br>traite dans 24H</h5>
</div>
<div class="flex-item my-2"><button class="btnP rounded">RETOUR</button></div>
</div>
</div>
<?php }else{ ?>
<?php if($count == 0) {?>
<div class="panier bg-white container rounded p-4">
<div id="vide" class="flex-container">
<div class="flex-item my-2"><img src="image/icone/panier.png" width="200" height="200" alt=""></div>
<div class="flex-item my-2">
<h3>Votre panier est vide</h3>
</div>
</div>
</div>
<?php }else{ ?>
<form id="panier" action="confirmerCmd.php">
<div class="panier container">
<div class="listeproduct">
<div class="row">
<div class="col bg-white rounded p-4 my-1 mx-2">
<?php $refClient=$_SESSION["Reff"];$sql="SELECT  * FROM `panier` WHERE `RefClient`='$refClient' AND `etat`='V' ORDER BY `date` DESC";$result=$cnx->query($sql);$cpt=0;while($row=$result->fetch_assoc()){$refProd=$row['RefProd'];$sql1="SELECT * FROM `produits` WHERE `Ref`='$refProd' ";$result1=$cnx->query($sql1);while($row1=$result1->fetch_assoc()){$cpt++;  ?>
<div class="row">
<div class="col-sm">
<img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row1['img1']); ?>" width="200" height="300" alt="">
</div>
<div class="col-sm text-left">
<input style="display:none" type="text" name="RefClient" value="<?php echo $_SESSION["Reff"]?>">
<h3 class="mb-3" style="font-size:25px"><?php echo $row1['titre'];?></h3>
<p style="font-size:10px"><?php echo $row1['description'];?> </p>
<p style="font-size:10px">Réfe : <input style="border:0" readonly type="text" value="<?php echo $row1['Ref'];?>" name="ref<?php echo $cpt;?>" id=""></p>
<div class="row my-3">
<div class="col">
<p style="font-size:20px">Taille :</p>
<?php $taille=explode("-",$row1['taille']);for($x=0;$x<=count($taille)-2;$x++){?>
<input type="radio" required name="taille<?php echo $cpt;?>" value="<?php echo $taille[$x];?>"><span class="mx-1"><?php echo $taille[$x];?></span>
<?php } ?>
</div>
<div class="col">
<p style="font-size:20px">Quantité(s) :</p>
<select onchange="claculer()" class="qnt" name="Qnt<?php echo $cpt;?>">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
</select>
</div>
</div>
<div class="my-3">
<p style="font-size:20px">Prix :</p>
<input style="display:none;" type="text" name="prixachate<?php echo $cpt;?>" value="<?php echo $row1['prixa'];?>" id="">
<input style="display:none;" type="text" name="prixvente<?php echo $cpt;?>" value="<?php echo $row1['prix']-$row1['prix']*($row1['remis']/100);?>" id="">
<h5 id="prix<?php echo $cpt;?>" class="prixproduit" style="font-size:1rem;width:auto">
<?php echo $row1['prix']-$row1['prix']*($row1['remis']/100);?>DH</h5>
</div>
<div class="flex-item mx-2 row">
<a onclick="confirm('vous voulez supprimer ce produit ?')" style="width:50px" href="removepanier.php?ref=<?php echo $row1['Ref'];?>" class="mx-1 btnP rounded"><img src="image/icone/trash.png" width="30px" height="30px" alt=""></a>
</div>
</div>
</div>
<hr>
<?php } } ?>
<input style="display:none" type="text" name="cpt" value="<?php echo $cpt;?>">
</div>
<div class="col-md-4 col-sm bg-white rounded p-4 my-1 mx-2">
<div class="row mt-3">
<div class="col text-left">
<h6>Livraison</h6>
</div>
<div class="col-4 text-left row">
<h6 id="prixlivr">
<?php 
    $sqlprixL="SELECT * FROM `module` WHERE id=1";
    $resultprixL = $cnx->query($sqlprixL);
    if ($rowprixL = $resultprixL->fetch_assoc()) {
    }
    echo $rowprixL['prixLivraison'] ;
?>.00</h6>
<h6> DH</h6>
</div>
</div>
<div class="row mt-3">
<div class="col text-left">
<h6>Montant</h6>
</div>
<div class="col-4 text-left row">
<h6 id="prixprod">0000.10</h6>
<h6> DH</h6>
</div>
</div>
<div class="row mt-3">
<div class="col text-left row">
<h6>Montant total</h6>
</div>
<div class="col-4 text-left row">
<input style="display:none" type="text" name="prixtotale" value="000.00" id="inputprix">
<h6 id="prixtotale" style="color:#19aa09">000.00 </h6>
<h6 style="color:#19aa09"> DH</h6>
</div>
</div>
<hr>
<h1 style="font-size:40px">Payment</h1>
<p style="font-size:14px">Choisissez le mode de paiement ci-dessous</p>
<div class="row p-3 text-center">
<div class="col-md col-sm mx-2 p-2">
<button onclick="confirm('voulez vous confirmer l\'opération?')" type="submit" class="buttonPanier text-center p-2 bg-white">
<img src="image/icone/liveraison.png" width="44" height="29" alt=""><br>
<span style="font-size:10px">a la livraison</span>
</button>
</div>
<div class="col-md col-sm mx-2 p-2">
<button disabled class="buttonPanier text-center p-2 bg-white">
<img src="image/icone/carte.png" width="44" height="29" alt=""><br>
<span style="font-size:10px">par carte bancaire</span>
</button>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
<?php } } ?>
</div>
<?php 
        echo "<script>document.getElementById('remis').innerHTML='15';</script>";
     ?>
<script>/*<![CDATA[*/let listeprix=document.getElementsByClassName("prixproduit");let listqnt=document.getElementsByClassName("qnt");var somme=0;for(i=0;i<listeprix.length;i++){somme=somme+parseFloat(listeprix[i].innerHTML)*listqnt[i].value}document.getElementById("prixprod").innerHTML=somme.toFixed(2);var prixlivr=parseFloat(document.getElementById("prixlivr").innerHTML);var prixprod=parseFloat(document.getElementById("prixprod").innerHTML);prixtotale=prixprod+prixlivr;document.getElementById("prixtotale").innerHTML=prixtotale.toFixed(2);document.getElementById("inputprix").value=prixtotale.toFixed(2);function claculer(){let listqnt=document.getElementsByClassName("qnt");var a=0;for(i=0;i<listeprix.length;i++){a=a+parseFloat(listeprix[i].innerHTML)*listqnt[i].value}document.getElementById("prixprod").innerHTML=a.toFixed(2);var c=parseFloat(document.getElementById("prixlivr").innerHTML);var b=parseFloat(document.getElementById("prixprod").innerHTML);prixtotale=b+c;document.getElementById("prixtotale").innerHTML=prixtotale.toFixed(2);document.getElementById("inputprix").value=prixtotale.toFixed(2)};/*]]>*/</script>
</body>
<?php include 'footer.php';?>