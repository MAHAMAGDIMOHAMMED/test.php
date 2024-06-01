<?php

$first_name="";
$email="";
$password="";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $first_name = $_POST['fname'];
    $email = $_POST['mail'];
    $password = $_POST['pw'];
}
echo "<br>";
echo "<br>";

?>
 <!DOCTYPE html>
  <html>
    <head>
    <title> task mahi 7 </title> 
</head>
<body>
<form method="POST" action = "<?php $_SERVER['PHP_SELF']?>">
<label for="fname">First Name: </label>
        <input type="text" id="fname" name="fname"> <br><br>
        <label for="email"> Email: </label>
        <input type= "email" id="email" name="mail"> <br><br>
        <label for="pw"> password: </label>
        <input type="password" id="pw" name="pw"> <br><br>
        <input type="submit" value="Sign Up">
</form>
<h4>
<?php
    echo "welcome $first_name";
?>
</h4>
<h5>
     <?php
      echo "your email is : $email";
       ?> 
       </h5>
 </body>
 </html> 