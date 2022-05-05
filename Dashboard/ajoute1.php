<?php 

echo '<br>/'.$_POST['couleur1'];
$imgData1 = addslashes(file_get_contents($_FILES['imgColor1']['tmp_name']));
echo '<br>/'.$imgData1;


?>