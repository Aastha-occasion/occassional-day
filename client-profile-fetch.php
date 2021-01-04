<?php
session_start();
echo $_SESSION["name"];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>client profile-fetch</title>
    <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <link rel="stylesheet" href="mystyle/bootstrap.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script>
        function showpreview(file, ref) {



            var reader = new FileReader();
            reader.onload = function(e) {
                $(ref).prop('src', e.target.result);
            }
            reader.readAsDataURL(file.files[0]);


        }

    </script>
    <!--///////////////////////////////////-->
    <script>
        $(document).ready(function() {

            $(".loading").ajaxStart(function() {

                $(".loading").css("display", "block");
            });
            $(".loading").ajaxStop(function() {
                $(".loading").css("display", "none");

            });

            ///////////////////////////////////

            $("#name").blur(function() {
                var name = $("name").val();
                $.get("ajaxcheck.php?name=" + name, function(response) {
                    $("#errUid").html(response);
                });

            });

        });

    </script>
    <!--///////////////////////////////-->
    <script>
        /*alert("hlo");*/
        $(document).ready(function() {
            $("#btnSearch").click(function() {
                var name = $("#name").val();


                //var pwd=$("#txtPwd").val();
                //"ajax-check-uid.php?uid="+uid+"&pwd="+pwd;

                
                /*$("#id").val(aryJson[0].name in table);*/
                
                $.getJSON("jsonfetchrecord.php?name=" + name, function(aryJson)

                    {

                        /*alert(JSON.stringify(aryJson));*/
                        $("#txtdob").val(aryJson[0].dob);
                        $("#txtadress").val(aryJson[0].address);
                    
                    $("#occupation").val(aryJson[0].occupation);
                    
                    $("#inputAddress2").val(aryJson[0].address2);
                    $("#inputState").val(aryJson[0].state);
                    $("#inputZip").val(aryJson[0].zip);
                    $("#mobile").val(aryJson[0].mobile);
                        /*$occ = (aryJson[0].Occupation);*/
                       /* if ($occ == "Job") {
                            $("#Job").prop("checked", "true");
                        } else
                        if ($occ == "Buissness") {
                            $("#Buisness").prop("checked", "true");
                        } else
                            $("#Student").prop("checked", "true");*/

                        //====================

                        //====================
                        $("#inputCity").val(aryJson[0].city);
                        //-=--=-=-=====
                        var pic = aryJson[0].picname;
                        $("#pic").prop("src", "uploads/" + pic);
                        $("#hdn").val(pic);
                    });
            });
        });

    </script>
    <!--///////////////////////////////-->
    <style>
        .loading {
            position: absolute;
            width: 70px;
            height: 70px;
            background-image: url(images/loading1.gif);
            margin-left: 40%;
            margin-top: 15%;
            z-index: 10;
            display: none;
        }

    </style>
</head>

<body style="background-color:#595959;">
   <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-image:linear-gradient(#595959,#333333)">
        <a class="navbar-brand" href="images/eventday.png" style="margin-top:10px;">
            <img src="images/eventday.png" width="50" height="50" class="d-inline-block align-top" alt="" style="border:1px gold solid; ">
            <font face="Berlin Sans FB" style="color:gold;font-size:30px;opacity:20;margin-left:15px;">
                Event Day</font>
            <br>
            <p style="margin-left:82px;margin-top:-10px;font-size:12px;color:white">With You Everytime</p>
        </a>
         <ul class="navbar-nav ml-auto" style="margin-right:15px;">
        <li class="nav-item">
            <div style="text-align:top;"> <a class="nav-link text-white" href="log-out.php">
                    <font style="margin-top:-10px; color:gold;">log-out</font>
                </a></div>
        </li>
            </ul>
    </nav><br>
    

    <div class="container" style="margin-top:110px; border:1px black dotted;background-color:white;">


        <form action="client-profile-fetch-update.php" method="post" enctype="multipart/form-data">
            <div class="form-row" style="background-color:gold;">
                <div class="form-group" style="color:black; margin-left:37%;">
                    <h2><font face="Times New Roman">Update Your Profile</font></h2>
                </div>
            </div>
            <input type="hidden" name="hdn" id="hdn">
            <div class="loading"></div>
            <!--<hr style="margin-top:0px;">-->
            <div class="form-row">
                <div class="form-group col-md-5" style="margin-top:30px;">
                   
                    <label for="txtname">Email</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="name" value="<?php echo $_SESSION["name"];?>" readOnly>
                    <small id="errUid" class="form-text text-primary"></small>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label> &nbsp;</label>
                            <input type="button" class="form-control btn btn-primary btn-block" id="btnSearch" name="btnSearch" value="Fetch" style="width:200px;">

                        </div>
                    </div>
                </div>
                <div class="form-group col-md-4" style="margin-top:30px;">
                    <label for="txtdob">Date of Birth</label>
                    <input type="date" class="form-control" id="txtdob" name="txtdob" placeholder="dob">
                </div>

                <div class="col-md-3  form-group">
                    Pic: <br>
                    <img src="images/blank-profile-picture-973460_960_720.png" class="mt-1 mb-1" width="100" height="100" alt="" id="pic">
                    <input type="file" accept="image/*" multiple name="ppic" id="ppic" onchange="showpreview(this,pic);">

                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="txtadress" name="txtadress" placeholder="1234 Main St">
                </div>
                <div class="form-group col-md-3">
                    <label for="occupation">Occupation</label>
                    <select name="occupation" id="occupation" class="form-control">
                        <option>Choose...</option>
                        <option id="Job" name="Job">Job</option>
                        <option id="Buisness" name="Business">Buisness</option>
                        <option id="Student" name="Student">Student</option>
                    </select>
                </div>


                <div class="form-group col-md-3">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="mobile no:">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" name="txtadress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" name="txtcity" class="form-control" id="inputCity" placeholder="city">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select type="text" id="inputState" name="inputState" class="form-control">

                        <option value="">------------Select State------------</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Goa">Goa</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Uttaranchal">Uttaranchal</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" name="zip" id="inputZip">
                </div>
            </div>
            <br>
            <input type="submit" class="btn btn-warning btn-block" name="btn" id="btn" value="Update">
        </form><br>

    </div>
    <nav class="navbar position-sticky-bottom" style="bottom:0px;color:#686868;margin-top:80px;text-align:center;display:flex;justify-content:center;background-color:#343a40">
            <div class="footer-bottom">
                &copy;event day.com | Designed by banglore computer educations
            </div>
        </nav>
</body>

</html>
