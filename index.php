<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";






if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE HTML>  
<html>
<head>
<title>Simple php Form Validation</title>
<link rel="stylesheet" href="css/style.css" >


</head>
<body>  



<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input class="control" type="text" name="name" placeholder="Input Your Name">
  <br><br>
  E-mail: <input class="control" type="text" name="email" placeholder="Email Hare">
  <br><br>
  Website: <input class="control" type="text" name="website" placeholder="Your Website">
  <br><br>
  <textarea class="control  text" name="comment" rows="2" cols="20" placeholder="Write Your message"></textarea>
  <br><br>
  Gender:
  <input  type="radio" name="gender" value="female" >Female
  <input  type="radio" name="gender" value="male">Male
  <input  type="radio" name="gender" value="other">Other
  <br><br>
  <input class="submit" type="submit" name="submit" value="Submit">  
</form>

<?php

    
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>