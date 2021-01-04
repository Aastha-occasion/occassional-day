<?php

include_once("connect.php");
session_start();
//echo $_SESSION["name"];
$mailer = $_SESSION["name"];
$email2 = $_GET["email2"];
//echo $email2;
 $btn=$_GET["btn"];

if($btn=="mail")
{
        $to = $email2;
    $subject = "Feedback";
    $message = $mailer."want you and your company to organise their event.Kindly contact with them.\n";
    $headers = $mailer;
    if(mail($to,$subject,$message,$headers))
    {
       $text1 = "mail sent succsessfully";
        // echo "sent succsessfully";
    }
    else
    {
       $text1 = "mail not sent! sorry for inconvinience";
        //echo "sorry for inconvinience";
    }
     
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mail</title>
      <script src="js/angular.min.js"></script>
    <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <link rel="stylesheet" href="mystyle/bootstrap.css">
 <link rel="shortcut icon" href="images/eventday.png" type="image/png" sizes="any">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="shortcut icon" href="images/eventday.png" type="image/png" sizes="any">
     <script>
         var abc = <?php echo json_encode($text1); ?>;
    alert(abc);
         location.href = "plan-a-function.php";
    </script>
</head>
<body>
    
</body>
</html>