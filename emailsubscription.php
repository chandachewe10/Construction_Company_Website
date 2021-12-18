<?php
//Include the PHP file to connect to the database for email subscription using core PHP
require 'db.php';

// Validate the email submited first before inserting it into the Database

//Allow upload variable
$allow=1;

//Check if the request of post has been submited here and proceed
if($_SERVER['REQUEST_METHOD']=='POST') {


//Get the email submited and validated
$email =filter_var($_POST['emailsubscription'], FILTER_VALIDATE_EMAIL);

 //Check if email exists in the table
 
 $check = "SELECT email FROM emailsubscription WHERE email = '$email'";
 $retrievemail=$conn->query($check);
 if($retrievemail->num_rows > 0){
    echo "<script type='text/javascript'>alert('Whooops email already exists.');
    window.location='index.php';
    </script>";  
 }

else{
  $sql="INSERT INTO emailsubscription (email) values('$email')";
  $check=$conn->query($sql);
  if($check==TRUE){
    
    echo "<script type='text/javascript'>alert('We have recorded your email, thank you.');
    window.location='index.php';
    </script>";
      
  }
  else{
      echo 'error occured '.$conn->error;
  }
}
}

?>