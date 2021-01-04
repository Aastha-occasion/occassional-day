<?php
session_start();
echo $_SESSION["name"];
if(!isset($_SESSION["name"]))
{
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>client profile</title>
            <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <link rel="stylesheet" href="mystyle/bootstrap.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<script>

		function showpreview(file,ref) 
		{
			
			
        
            var reader = new FileReader();
            reader.onload = function (e) {
                $(ref).prop('src', e.target.result);
            }
            reader.readAsDataURL(file.files[0]);
        

    }
	
	</script>
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
    </nav>
        
    <div class="container" style="margin-top:110px; border:1px black dotted;background-color:white;">
        
    
<form action="client-data-profile.php" method="post" enctype="multipart/form-data">
 <div class="form-row" style="background-color:gold;">
     <div class="form-group" style="color:black; margin-left:37%;">
         <h2>client profile</h2>
     </div>
 </div>
 <!--<hr style="margin-top:0px;">-->
  <div class="form-row">
    <div class="form-group col-md-5" style="margin-top:30px;">
      <label for="txtname">Email</label>
      <input type="email" name="txtname" class="form-control" id="txtname" placeholder="name" value="<?php echo $_SESSION["name"];?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" readOnly>
    </div>
    <div class="form-group col-md-4" style="margin-top:30px;">
      <label for="txtdob">Date of Birth</label>
      <input type="date" class="form-control" id="txtdob" name="txtdob" placeholder="Password" required>
    </div>
    
						<div class="col-md-3  form-group">
							Pic: <br>
							<img src="images/blank-profile-picture-973460_960_720.png" class="mt-1 mb-1" width="100" height="100" alt="" id="pic">
							<input type="file" accept="image/*" multiple name="ppic" id="ppic" onchange="showpreview(this,pic);" required>

						</div>
					</div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="txtadress" placeholder="1234 Main St" required>
  </div>
   <div class="form-group col-md-3">
    <label for="occupation">Occupation</label>
    <select name="occupation" id="occupation" class="form-control" required>
        <option>Choose...</option>
        <option>Job</option>
        <option>Buisness</option>
        <option>Student</option>
    </select>
  </div>
  
  
   <div class="form-group col-md-3">
    <label for="mobile">Mobile</label>
    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="mobile no:" pattern="[6-9]{1}[0-9]{9}" >
  </div>
  </div><div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" name="txtadress2" placeholder="Apartment, studio, or floor" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" name="txtcity" class="form-control" id="inputCity" placeholder="city" >
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select type="text" id="inputState" name="inputState" class="form-control" required>
        <option selected>Choose...</option>
        <!--state-->
        <option>Andhra Pradesh</option>
        <option>	Arunachal Pradesh</option>
        <option>Assam</option>
        <option>Bihar</option>
        <option>Chattisgarh</option>
        <option>Goa</option>
        <option>Gujrat</option>
        <option>Haryana</option>
        <option> Himachal Pardesh</option>
        <option>Jammu and Kashmir</option>
        <option>Jharkhand</option>
        <option>Karnatka</option>
        <option>Kerala</option>
        <option>Madhya Pradesh</option>
        <option>Maharashtra</option>
        <option>Manipur</option>
        <option>Meghalaya</option>
        <option>Mizoram</option>
        <option>Nagaland</option>
        <option>Odisha</option>
        <option>Punjab</option>
        <option>Rajasthan</option>
        <option>Sikkim</option>
        <option>Tamil Nadu</option>
        <option>Telangana</option>
        <option>Tripura</option>
        <option>Uttar Pradesh</option>
        <option>Uttarakhand</option>
        <option>West Bengal</option>
    
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" name="zip" id="inputZip" pattern="[0-9]{1}[0-9]{5}" >
    </div>
  </div>
 <br>
  <input type="submit" class="btn btn-warning btn-block" name="btn" id="btn" value="submit">
</form><br>

    </div>
    <nav class="navbar position-sticky-bottom" style="bottom:0px;color:#686868;margin-top:80px;text-align:center;display:flex;justify-content:center;background-color:#343a40">
            <div class="footer-bottom">
                &copy;event day.com | Designed by banglore computer educations
            </div>
        </nav>
</body>
</html>