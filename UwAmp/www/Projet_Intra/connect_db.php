<?php header('Content-Type: text/html; charset=utf-8');
         $servername = "localhost";
         $username = "root";
         $password = "root";
         $db = "intra";
     
         // Create connection
         $conn = new mysqli($servername, $username, $password, $db);
 
         // Checkconnection
         if($conn->connect_error){
             die("Connection failed:" . $conn->connect_error);
         }
?>