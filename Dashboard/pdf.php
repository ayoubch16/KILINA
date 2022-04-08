<?php
 $sql="SELECT * FROM `recrutement` ";
 $result = $cnx->query($sql);
 if ($row = $result->fetch_assoc()) {}
  $file='cv.pdf';
  $filename='cv.pdf';
  header('Content-type:application/pdf');
  header('Content-Disposition : inline;filename=cv.pdf');
  header('Content-Transfer-Encoding:binary');
  header('Accept-Ranges : bytes');


?>