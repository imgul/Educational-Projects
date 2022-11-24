<?php
/*
Student Name : Gul
Student ID : 200335158
Description : A website to interact with the database
*/

// Connection Info
$host = "localhost";
$user = "root";
$pass = "";
$db = "courses";

// Create connection
$conn = mysqli_connect($host, $user, $pass, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
