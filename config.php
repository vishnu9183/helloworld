<?php
global $con;
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbName='blood_bank';
$dbport='3308';
 function __construct(){
    if(!isset($this->db)){
        // Connect to the database
       $con = new mysqli($this->dbHost, $this->dbUser, $this->dbpass, $this->dbName);
        if($conn->connect_error){
            die("Failed to connect with MySQL: " . $conn->connect_error);
        }else{
            $this->db = $con;
        }
    }
}

?>