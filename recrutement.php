<?php 
  $nom=$_GET['nom'];
  $prenom=$_GET['prenom'];
  $email=$_GET['email'];
  $telephone=$_GET['tele'];
  $cv=$_GET['cv'];
//   $source=fil_get_contents();
//   $fichier='';

  

  $subject = 'Nouveau Reclamation';

  $emailT='
  <h1 style="color: #000;font-size: 60px;text-align: center;">KILINA</h1>

  <pre style="font-size: 18px;">
  <h1>   '.$subject.' :</h1>
  Nom             :     '.$nom.'

  prenom          :     '.$prenom.'

  tele            :     '.$telephone.' 

  Email           :     '.$email.'

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
//   $headers  = 'MIME-Version: 1.0' . "\r\n";
//   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


//   $headers .= 'From: notif.immo@tradeline-solutions.com' . "\r\n" .
//               'Reply-To: notif.immo@tradeline-solutions.com' . "\r\n" .
//               'X-Mailer: PHP/' . phpversion();
//   // mail('ayoubchoukri16@gmail.com', $subject, $emailT, $headers);
//   if (mail('ayoubchoukri16@gmail.com', $subject, $emailT, $headers))
//   {
//       echo "-->Message accepted";
//   }
//   else
//   {
//       echo "-->Error: Message not accepted";
//   }

?>


