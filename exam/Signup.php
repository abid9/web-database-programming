<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styl.css">
	<script src="js/valid.js" type="text/javascript"></script>

</head>
<body>
	<div class="header">
		<?php include("view/header.php"); ?>
	</div>

	<div class="nev">
		<div class="content">
			<?php include("view/nev.php") ?>
		</div>
	</div>

	<div class="mainfield">
		<div class="rightsidebar">
			<p style="font-size: 22px">Category:</p>
				<table style="font-size: 27px;">
					<tr><td><a href="#">BioGraphy</a></td></tr>
					
					<tr><td><a href="#">Horror</a></td></tr>
					
					<tr><td><a href="#">Thiller</a></td></tr>
					
					<tr><td><a href="#">Science Fiction</a></td></tr>
					
					<tr><td><a href="#">Hadis</a></td></tr>
				</table>>
		</div>

		<div class="mainsection">
			<h2>Sign Up Here</h2>
<form id="sform" name="sform" method="POST" action="userinsert.php" onsubmit="return validateForm();">
	<label>Username: </label>
    <input id="username"  name="name" type="text"  maxlength="16">
    <br><br>
    <label>Email  :</label>
    <input id="email"  name="email" type="email"  maxlength="88">
    <br><br>
    <label>Password:</label>
    <input id="password"  name="password" type="password"  maxlength="16">
    <br><br>
    <label>Gender:</label>
    <select input id="gender"  name="gender" >
      <option value=""></option>
      <option value="m">Male</option>
      <option value="f">Female</option>
       <option value="o">Other</option>
   </select>
   <br><br>
   <label>Country:</label>
   <select input id="nationality" input name="nationality" >
   		<option value=""></option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="India">India</option>
		<option value="Napal">Napal</option>
		<option value="Pakistan">Pakistan</option>
	</select>
	
    <input type="submit" value="Create Account">

  	</form>
  </div>
</div>
	
	<div class="footer">
		<?php include("view/footer.php") ?>
	</div>
</body>
</html>