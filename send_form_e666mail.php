
<?php

//if(isset($_POST['email'])) {

 

    // EDIT THE 2 LINES BELOW AS REQUIRED

    $email_to = "elshamy8618@gmail.com";

    $email_subject = "course registration";
   
//}

 /*  function died($error) {

        // your error code can go here

        echo "We are very sorry, but there were error(s) found with the form you submitted. ";

        echo "These errors appear below.<br /><br />";

        echo $error."<br /><br />";

        echo "Please go back and fix these errors.<br /><br />";

        die();

    }

 

 

    // validation expected data exists

    if(!isset($_POST['entry.54272485']) ||

        !isset($_POST['entry.2147234292']) ||

        !isset($_POST['entry.1545413064']) ||

        !isset($_POST['entry.576839647']) ||

        !isset($_POST['entry.1062816849'])) {

        died('We are sorry, but there appears to be a problem with the form you submitted.');       

    }

 
*/
     

  $email_from = "ahmedshamy86@gmail.com";

    $name = $_POST['entry.54272485']; // required

    $Datee = $_POST['entry.2147234292']; // required

    $phone = $_POST['entry.1545413064']; // required

    $city = $_POST['entry.576839647']; // not required

    $qualifcation = $_POST['entry.1062816849']; // required

    
    $email_message = "Form details below.\n\n";
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "Name: ".clean_string($name)."\n";

    $email_message .= "Date Of Birth: ".clean_string($Datee)."\n";

    $email_message .= "Phone : ".clean_string($phone)."\n";

    $email_message .= "City : ".clean_string($city)."\n";

    $email_message .= "Qualifcation : ".clean_string($qualifcation)."\n";

 

// create email headers

$headers = 'From: '.$email_from."\r\n".

'Reply-To: '.$email_from."\r\n" .

'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $email_message, $headers);  

?>

 

<!-- include your own success html here -->

 

Thank you for contacting us. We will be in touch with you very soon.

 

<?php

 

}

?>
