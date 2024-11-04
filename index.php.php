<?php
if(isset($_POST['submit'])){
$fullname = $_POST['fullname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$host = 'localhost:4307';
$user = 'root';
$pass = '';
$dbname = 'myhome';

$connection = mysqli_connect($host,$user,$pass,$dbname);
$sql = "INSERT INTO task(fullname,mobile,email,subject,message) values ('$fullname','$mobile','$email','$subject','$message')";
mysqli_query($connection,$sql);


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  
  <div class="left-side"></div>

 
  <div class="right-side">
    <h2>Contact Us</h2>
    <form action="#" method="POST">
      <div class="form-group">
        <label for="full-name">Full Name*</label>
        <input type="text" id="fullname" name="fullname" required>
      </div>

      <div class="form-group">
        <label for="mobile">Mobile Number*</label>
        <input type="tel" id="mobile" name="mobile" required>
      </div>

      <div class="form-group">
        <label for="email">Email Address*</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
      <label for="subject">Subject*</label>
      <input type="subject" id="subject" name="subject" required>
      </div>

      <div class="form-group">
        <label for="message">Message*</label>
        <textarea id="message" name="message" required></textarea>
      </div>

      <input type="submit" name="submit" value="Send Data">
    </form>
  </div>
</div>

</body>
</html>
