<?php
 	$servername = "localhost";
    $username = "root";
    $password = NULL;
    $dbname = 'userinformation';

	$conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if($conn->select_db($dbname) === false){
        $sql  = "CREATE DATABASE IF NOT EXISTS userinformation";
        
        if($conn->query($sql) ===TRUE){
            $conn->select_db($dbname);
            $sql = "CREATE TABLE information (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	        	name VARCHAR(30) NOT NULL,
	        	furigana VARCHAR(30) NOT NULL,
            	district VARCHAR(50) NOT NULL,
            	address VARCHAR(200) NOT NULL,
	        	email VARCHAR(50) NOT NULL,
            	password VARCHAR(80) NOT NULL
                )";
            if($conn->query($sql) === false){
                echo "Error creating database: " . $db->error;
            }
        } else {
            echo "Error creating database: " . $db->error;
        }
    }
	?> 
