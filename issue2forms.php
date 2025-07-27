<!DOCTYPE html>
<html lang="en">
<body>
  <?php
  //first initialising variables, create function test_input and mention it before the use of function
  include 'functionTest_input.php';
  $name=$email=$gender=$comment=$website="";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input ($_POST["name"]);
    $email = test_input ($_POST["email"]);
    $website = test_input ($_POST["website"]);
    $comment = test_input ($_POST["comment"]);
    $gender = test_input ($_POST["gender"]);
  } 

  // just realised to text this ofc u need the whole html template and the echos too... noice
  // anyways next

  // errors for the required messages
  // Set up blank error + input variables
  $nameErr = $emailErr = $genderErr = $websiteErr = "";
  $name = $email = $gender = $comment = $website = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
    }

    if (empty($_POST["website"])) {
      $website = "";
    } else {
      $website = test_input($_POST["website"]);
    }

    if (empty($_POST["comment"])) {
      $comment = "";
    } else {
      $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    }
  }
  // dit moet sws korter kunnen.... hmmmm.... misschien oreach gebruiken? idk

  // anyways notities gemaakt in obsidian. nu eventjes verder met extra validation
  $name = test_input($_POST["name"]);
  if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) { // preg want Perl-compatible Regular Expressions >> P Reg >> preg
    $nameErr = "Only letters and white space allowed";
  }

  // voor email en url:
  $email = test_input($_POST["email"]);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  }

  $website = test_input($_POST["website"]);
  if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
    $websiteErr = "Invalid URL";
  }

  ?> 
</body>
</html>