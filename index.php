<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Occasional Day</title>
     <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <link rel="stylesheet" href="mystyle/bootstrap.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="stylesheet" href="mystyle/color.css">-->
<link rel="stylesheet" href="mystyle/colorstyle.css">



    <link rel="shortcut icon" href="images/Occasionalday.png" type="image/png" sizes="any">
<!-- feedback   -->
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
       <script>
        ///////signup
        $(document).ready(function() {

            $("#btn").click(function() {

                var uidd = $("#name").val();
                var pwwd = $("#password").val();
                var mob = $("#mobile").val();
                var cat = "";
                if ($("#client").prop("selected"))
                    cat = "client";
                else
                    cat = "contributor";

                $.get("signup-process.php?name=" + uidd + "&password=" + pwwd + "&mobile=" + mob + "&category=" + cat,
                    function(response) {

                        alert(response);
                        $("#errUid").html(response);


                    });

            });


        });

    </script>

<!-- login   -->
   <script>
        ////////////////////login
        $(document).ready(function() {


            $("#btn2").click(function() {
                var uid = $("#exampleInputEmail1").val();
                var psd = $("#exampleInpifutPassword1").val();

                if (uid == "" || psd == "") {
                    alert("fill data please");
                } else {

                    $.get("ajax-login2.php?name=" + uid + "&pass=" + psd, function(response) {

                            alert(response.trim());
                            if (response.trim() == "client") {

                                location.href = "client-dash.php";
                            } else
                            if (response.trim() == "contributor") {
                                location.href = "contributor-dash.php";
                            } else {

                            }

                            /*$("#emailHelp").html(response);*/


                        }

                    )
                };
            });



        });

    </script>
<!---->
 <script>
        ////////////////////login
        $(document).ready(function() {


            $("#btn3").click(function() {
                var uid = $("#exampleInputEmail2").val();
                var psd = $("#exampleInpifutPassword2").val();

                if (uid == "" || psd == "") {
                    alert("fill data please");
                } else {

                    $.get("admin-login.php?name=" + uid + "&pass=" + psd, function(response) {

                            alert(response.trim());
                            if (response.trim() == "correct") {

                                location.href = "admin-control.php";
                            }



                            /*$("#emailHelp").html(response);*/


                        }

                    )
                };
            });



        });

    </script>
<!---->
  <script>
        function showpreview(file, ref) {



            var reader = new FileReader();
            reader.onload = function(e) {
                $(ref).prop('src', e.target.result);
            }
            reader.readAsDataURL(file.files[0]);


        }

    </script>
<!---->
</head>
<body>
<!--signin modal-->
    <div class="modal fade  " id="signin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog modal-sm " role="document">
            <div class="modal-content" >
                <div class="modal-header " >
                   <br>
                    <h5 class="modal-title des" id="exampleModalLabel" style="color:Red;">
                        <center>sign-in</center>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" style=" padding:10px;justify-content:center;">
                        <form action="ajax-login2.php">
                            <div class="form-group text-center" style="color:blue;"><b></b></div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="color:black">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="name" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" style="color:black">Password</label>
                                <input type="password" class="form-control" id="exampleInpifutPassword1" placeholder="Password" name="pass" required>
                            </div>
                            <br>

                            <button type="button" class="btn btn-primary btn-block " id="btn2">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
<!---->
<!--signup modal-->
    <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md bg-dark" role="document" style="height:400px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel" style="margin-left:auto;">
                        <div class="row">
                            <div class="col-md-12 form-group  text-primary text-center">
                                <h2>
                                    <font face="Times New Roman">Sign-up</font>
                                </h2>
                            </div>
                        </div>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container bg-white">

                        <form action="signup-process.php" enctype="multipart/form-da
                           ta">
                            <face face="Comic Sans MS" align="center"><b>
                                    <div style="color:red;">Get started - it's free!</div>
                                </b></face>
                            <div class="form-row">
                                <div class="col-md-10 offset-md-1">
                                    <label for="name">Email:-</label>
                                    <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" name="name" id="name" placeholder="email" required>
                                    <small id="errUid" class="form-text text-primary">we keep your data safe.</small>
                                </div>
                            </div><br>
                            <div class="form-row">
                                <div class="col-md-10 offset-md-1">
                                    <label for="password">Password:-</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="password" required>
                                </div>
                            </div><br>
                            <div class="form-row">
                                <div class="col-md-10 offset-md-1">
                                    <label for="mobile">Mobile:-</label>
                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="mobile" required pattern="[6-9]{1}[0-9]{9}">
                                </div>
                            </div><br>
                            <!--category-->
                            <div class="form-row">
                                <div class="col-md-10 offset-md-1 form-group">
                                    <label for="category">category:-</label>
                                    <select name="category" id="category" class="form-control" required>category:-
                                        <option value="select" id="select">select</option>
                                        <option value="client" id="client" name="client">client</option>
                                        <option value="contributor" id="contributor" name="contributor">contributor</option>


                                    </select>

                                </div>
                            </div><br>

                            <!--/////////////////////////-->

                            <br>
                            <div class="form-row">
                                <div class="col-md-12 form-group text-center">
                                    <!--<input type="submit" value="submit" name="btn" class="btn btn-danger " style="width:80px; ">-->
                                    <button type="button" value="submit" name="submit" class="btn btn-primary btn-block" id="btn">Submit</button>
                                </div>
                            </div>




                        </form>


                        <br>
                    </div>
                </div>

            </div>
        </div>
    </div>

<!---->
<!--admin modal-->
 <div class="modal fade  " id="admino" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm " role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title des" id="exampleModalLabel">
                        <center>Admin-Control</center>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" style=" padding:10px;justify-content:center;">
                        <form action="admin-login.php.php">
                            <div class="form-group text-center" style="color:blue;"><b></b></div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Admin Email address</label>
                                <input type="password" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter email" name="name">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInpifutPassword2" placeholder="Password" name="pass">
                            </div>
                            <br>

                            <button type="button" class="btn btn-primary btn-block " id="btn3">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

<!-- navbar  -->

<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-image:linear-gradient(#333333,#0009)">
   <a class="navbar-brand" href="images/Occasionalday.png" style="margin-top:10px;">
                <img src="images/eventday.png" width="50" height="50" class="d-inline-block align-top" alt="" style="border:1px gold solid; ">
                <font face="Berlin Sans FB" style="color:gold;font-size:30px;opacity:20;margin-left:15px;">
                    Ocassional Days</font>
                <br>
                <p style="margin-left:82px;margin-top:-10px;font-size:12px;color:white">With You Everytime</p>
            </a>           
              
<!--                <p style="margin-left:60px;margin-top:-15px;font-size:13px">With You Everytime</p>-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse a1" id="navbarSupportedContent" >
  
    <ul class="navbar-nav ml-auto a2" style="margin-right:20px;">
      <li class="nav-item active" >
          <a class="nav-link" href="#" data-toggle="modal" data-target="#signin">Sign-in</a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="#" data-toggle="modal" data-target="#signup">Sign-up</a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="#" data-toggle="modal" data-target="#admino">Admin</a>
      </li>
     
     
    </ul>

  </div>
</nav>
<!---->
<br><br><br><br><br>
<center>
<p>We Help you to find Best <span style="color:red">Occasional Organiser </span>for your Function
</p></center>

<!--carousel-->
    <div class="page-wrapper">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide c1" data-ride="carousel">
                <ol class="carousel-indicators cn">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>

                </ol>
                <div class="carousel-inner c2" style="padding:10px;">
                    <div class="carousel-item active">
                        <img src="images/home-banner.jpg" class="d-block w-100 img1" alt="..." >
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Occasion's you remeber</h5>
                            <p>We help you and others to organise an Occasion in great manner</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/photoshoot.jpg" class="d-block w-100 img2" alt="..." >
                        <div class="carousel-caption d-none d-md-block">
                            <h5 >Photoshoot</h5>
                            <p>“We are most alive when we’re in love.”</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="images/celebrate.jpg" class="d-block w-100 img3" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Celebrations</h5>
                            <p>Celebrate every Occasions with us.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
<!---->
<br><br>
  <div class="col-md-12" style="display:flex;justify-content:center;margin-top:30px;">
            <h3>
                <font face="Comic Sans MS" color="red">Our Services </font>
            </h3>
        </div>
        <br>
<center>
<div class="container" >
   <div class="form-row col-md-12">
    <div class="ser form-group col-md-3"><div class="col-md-11 aq"><a href="our-services.php#planning" class="qwe"><img src="images/planning.jpg" alt="" style="width:120px;height:120px;">
                    <div class="txt">Plan an Occasion</div>
                </a></div></div>
    <div class="ser form-group col-md-3"><div class="col-md-11 aq"><a href="our-services.php#management" class="qwe"><img src="images/management.jpg" alt="" style="width:120px;height:120px;">
                    <div class="txt" >Manage your Occasion</div>
                </a></div></div>
    <div class="ser form-group col-md-3"><div class="col-md-11 aq"><a href="our-services.php#post" class="qwe"><img src="images/cam.png" alt="" style="width:100px;height:100px;">
                    <div class="txt" style="padding-top:20px;">Pre and Post Occasions</div>
                </a></div></div>
    <div class="ser form-group col-md-3"><div class="col-md-11 aq"><a href="our-services.php#find" class="qwe"><img src="images/findpeople.png" alt="" style="width:120px;height:95px;">
                    <div class="txt">Be a Contributor or Find Contributors</div>
                </a></div></div>
</div>
</div>
</center>
<!---->
<br><hr><br>
<div class="fgh" style="margin-left:10px;margin-right:10px;">
<center><p style="color:darkblue" class="dfg">Choose <span style="color:red">Occasional-Day </span>on any <span style="color:Green">Day as your need</span><br>
We provide you best Contributor near your locality
</p></center></div>
<br><hr><br><br>
<!--footer-->
 <div class="footer ">
        <div class="footer-content ">
            <div class="footer-section about">

                <h1 class="logo-text"><span style="color:gold;">Occassional </span>Day</h1>
                <p>we help you to find different person who is able to make your auspicious day to ever remembering day</p>
                <div class="contact">
                    <i class="fas fa-phone"> &#9990; 9814178410</i><br>
                    <i class="fas fa-envelope">&#9993; ocassionalday@gmail.com</i>
                </div>
                <div class="socials">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-section links">
                <h2>quick links</h2>
                <br>
                <ul>
                    <a href="events.php" style="text-decoration:none">
                        <li>Occasionals</li>
                    </a>
                    <a href="team.php" style="text-decoration:none">
                        <li>About Me</li>
                    </a>
                    <a href="mentor.php" style="text-decoration:none">
                        <li>mentors</li>
                    </a>
                     <a href="fback.php" class="fd1" style="text-decoration:none">
                        <li>FeedBack</li>
                    </a>

                </ul>
            </div>
            <div class="footer-section contact-form ft3">
                <h2>Contact us</h2>
                <br>
                <form action="feedback.php">
                    <input type="email" name="email1" id="email1" class="text-input contact-input form-control" placeholder="your email adress..."><br>
                    <textarea name="message" id="message" class="text-input contact-input form-control" placeholder="your message..."></textarea><br>
                    <input type="button" class="btn btn-md btn-warning btn5" id="feedback" value="&#9993 Send" style="color:black">
                </form>
            </div>
        </div><br><br>
         <nav class="navbar position-sticky-bottom">
            <div class="footer-bottom">
                &copy;occassional day.com | Designed by Aastha
            </div>
        </nav>
    </div>
</body>
</html>