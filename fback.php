<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Feedback</title>
    <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <link rel="stylesheet" href="mystyle/bootstrap.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="mystyle/color.css">




    <link rel="shortcut icon" href="images/eventday.png" type="image/png" sizes="any">
    <script>
        
        $(document).ready(function() {

            $("#feedback").click(function() {

                var email1 = $("#email1").val();
                var message = $("#message").val();
                if (email1 == "" || message == "") {
                    alert("fill data please");
                } else {
                    $.get("feedback.php?email1=" + email1 + "&message=" + message, function(response) {

                        alert(response);




                    });
                }

            });


        });

    </script>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-image:linear-gradient(#595959,#333333)">
        <a class="navbar-brand" href="images/eventday.png" style="margin-top:10px;">
            <img src="images/eventday.png" width="50" height="50" class="d-inline-block align-top" alt="" style="border:1px gold solid; ">
            <font face="Berlin Sans FB" style="color:gold;font-size:30px;opacity:20;margin-left:15px;">
                Event Day</font>
            <br>
            <p style="margin-left:82px;margin-top:-10px;font-size:12px;color:white">With You Everytime</p>
        </a>
         <ul class="navbar-nav mr-auto a2" style="margin-left:20px;">
      <li class="nav-item active" >
          <a class="nav-link" href="index.php" style="color:white">Home</a>
      </li>
        </ul>
    </nav>
    <br><br><br><br><br><br>
    <div class="footer-section contact-form ft3 container" style="color:red;">
        <h2>contact us</h2>
        <br>
        <form action="feedback.php">
            <input type="email" name="email1" id="email1" class="text-input contact-input form-control" placeholder="your email adress..."><br>
            <textarea name="message" id="message" class="text-input contact-input form-control" placeholder="your message..."></textarea><br>
            <input type="button" class="btn btn-md btn-warning btn5" id="feedback" value="&#9993 Send" style="color:black">
        </form>
    </div>
    <nav class="navbar position-sticky-bottom navb1" style="bottom:0px;color:white;margin-top:224px;text-align:center;display:flex;justify-content:center;background-color:#333333" id="navb1">
        <div class="footer-bottom" >
            &copy;event day.com | Designed by banglore computer educations
        </div>
    </nav>
</body>

</html>
