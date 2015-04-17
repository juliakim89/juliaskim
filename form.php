<?php include('includes/header.php'); ?>
  
<?php
// define variables and set to empty values
$nameErr = $emailErr = "";
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = result($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = result($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }
    
}

function result($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<div class="row">
	<div class="small-6 small-centered column">
		<h2>Form</h2>
		<form class="row" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="columns">
				<label>Name</label>
				<input type="text" name="name" value="<?php echo $name; ?>">
				<p class="error"><?php echo $nameErr; ?></p>
			</div>
			<div class="columns">
				<label>Email</label>
				<input type="text" name="email" value="<?php echo $email; ?>">
				<p class="error"><?php echo $emailErr; ?></p>
			</div>
			<div class="columns">
				<input type="submit" name="submit" value="Submit">
			</div>
		</form>
	</div>
</div>

<div class="row">
	<div class="small-6 small-centered column">
		<?php
		echo "<h2>Result:</h2>";
		echo $name;
		echo "<br>";
		echo $email;
		echo "<br>";
		?>
	</div>
</div>
    
<?php include('includes/footer.php'); ?>