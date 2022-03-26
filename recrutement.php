<?php 
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $email=$_POST['email'];
  $telephone=$_POST['tele'];
  $cv=$_POST['cv'];
  // $file = addslashes(file_get_contents($_FILES['cv']['tmp_name']));
  // $src = chunk_split(base64_encode(file_get_contents($_FILES['cv']['tmp_name'])));
  $b64Doc = chunk_split(base64_encode(file_get_contents($_FILES['cv']['tmp_name'])));
  // $src='data:application/pdf;base64,'. base64_encode($file); 
  $toDay   = date("Y-m-d");

  // we give the file a random name
  $name    = "archive_".$toDay."_XXXXX_.pdf";
  
  // a route is created, (it must already be created in its repository(pdf)).
  $rute    = "pdf/".$name;
  
  // decode base64
  $pdf_b64 = base64_decode($base_64);
  
  // you record the file in existing folder
  if(file_put_contents($rute, $pdf_b64)){
      //just to force download by the browser
      header("Content-type: application/pdf");
  
      //print base64 decoded
      echo $pdf_b64;
  }


  $subject = 'Nouveau Reclamation';

  $emailT='
  <h1 style="color: #000;font-size: 60px;text-align: center;">KILINA</h1>

  <pre style="font-size: 18px;">
  <h1>   '.$subject.' :</h1>
  Nom             :     '.$nom.'

  prenom          :     '.$prenom.'

  tele            :     '.$telephone.' 

  Email           :     '.$email.'

  CV              :     '.$cv.'

  CV              :     '.$source.'
  <iframe name="myiframe" id="myiframe" src="'.$src.'">


  </pre>
  </div>
  <h4>
      <pre>
      Contactez-nous sur : 
                    Allo : <a href="tel:+212530024453">05 30 02 44 53</a> 
                Whatsapp : <a href="https://wa.me/0664937499">06 64 93 74 99</a>
      </pre>
  </h4>
  ';
 echo $emailT;
//  if (mail('ayoubchoukri16@gmail.com', $subject, $emailT, $headers))
//   {
//       echo "-->Message accepted";
//   }
//   else
//   {
//       echo "-->Error: Message not accepted";
//   }

?>


