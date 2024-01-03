<?php

include('connection.php');
include('functions.php');






if($_SERVER['REQUEST_METHOD']=='POST')
{
$user_name = $_POST['uname'];
$Email = $_POST['email'];
$Subject = $_POST['subject'];
$Msg = $_POST['msg'];



// $nameErr = $emailErr = $genderErr = $websiteErr = "";
// $name = $email = $gender = $comment = $website = "";




  $name = $_POST["uname"];
  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    echo "Only letters and white space allowed <br>";
  }
}

$email = $_POST["email"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email format";
}

$email = $_POST["msg"];
if (empty($_POST["msg"])) {
  
  echo 'write a valid messsage';
}

$sql = "insert into email (user_name,email,subject,msg ) values ('$user_name','$Email','$Subject','$Msg');";
$result = mysqli_query($con,$sql);





extract($_POST);
$query = "insert into contact_form (uname,email,subject,msg) values ('$uname','$email','$subject','$msg')";
$result = $mysqli->query($query);
if(!result){
    echo 'something went wrong'.$mysqli_err;
}
echo 'thank you';
$mysqli->close(); 
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>thank you</h1>
</body>
</html>

