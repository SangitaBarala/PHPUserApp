<?php

//receive the data

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$password =$_POST['pwd'];

//connect to database

const SERVER_NAME="localhost";
const DB_USER_NAME="root";
const PASSWORD="sangi2529";
const DB_NAME="php_database";

$connection = new mysqli(SERVER_NAME, DB_USER_NAME, PASSWORD, DB_NAME);

if($connection->connect_error){
    die(header('LOCATION: index.php?userNotAdded=1'));
}
//prepare sql query to insert data into database

$query = "INSERT INTO users(firstname, lastname, email, password) VALUES('${firstName}','${lastName}','${email}','${password}')";

//execute te sql query

if(!$connection->query($query)){
    die(header('LOCATION: index.php?userNotAdded=1'));
}

//echo "Query is executed successfully";
$connection->close();

//redirecting the result to view page (index.html)
header('LOCATION: index.php?userAdded=1');

