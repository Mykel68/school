<?php

$dbhost = "localhost";

$dbuser = "root";

$dbpass = "";

$dbname = "contact_form";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect!"); 
}

?>