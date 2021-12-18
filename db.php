<?php
//DB Connection Credentials
$severname='localhost';
$username='root';
$passoword='';
$db="articles";




//Connect to the database if connection failed show 'connection failed' and hide the error 
$conn=new mysqli($severname, $username, $passoword, $db) or die('connection failed.');
    
?>