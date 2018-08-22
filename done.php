<?php
if($_POST["btn_submit"]) {
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
        
        if($conn->query($sql) === TRUE){
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
                echo "Error creating table: " . $db->error;
            }
        } else {
            echo "Error creating database: " . $db->error;
        }
    }

    if(isset($_POST['user_name'])){
        if(!isset($_POST['user_name']) || !isset($_POST['user_furigana']) || !isset($_POST['user_district']) || !isset($_POST['user_address']) || !isset($_POST['user_email']) || !isset($_POST['user_password'])) {
            die('We are sorry, please input to form');
        }
        $conname = $_POST['user_name'];
        $furigana = $_POST['user_furigana'];
        $district = $_POST['user_district'];
        $address = $_POST['user_address'];
        $email = $_POST['user_email'];
        $password = $_POST['user_password']; 
        $error_message = "";
        $hashed_password = SHA1('password');

        $sql = "INSERT INTO information (name, furigana, district, address, email, password) VALUES ('". $conname . "','" . $furigana ."','" . $district ."','" . $address ."','" . $email ."', '" . $hashed_password ."')";
        if($conn->query($sql) === TRUE){
            echo "<link rel='stylesheet' href='custom.css'/>";
            echo "<div class = 'success_login'>会員登録ありがとうございました。 ! </div>";
        }
        else {
            echo "会員登録ことができません" ;
        }
    }
    $conn->close();
}
?>