<?php

    // include "./database_connection.php";

    $db = new mysqli(hostname: "localhost", 
                     username: "root",
                     database: "sweetshop",
                     password: "",
                     port: 3306 );

    if($db -> connect_error){
        echo "Connection Error";
    }

    else{
        
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $username = $_POST['usernoonaam'];
            $password = md5($_POST['usernoopassword']);

            $sql_query = "INSERT INTO users(
                username, password)
                VALUES('$username', '$password')";
          

        }

        if($db -> query($sql_query)){
            echo "Inserted Data Successfully.";
        }

        else{
            echo "Inserted Data Not Successfully.";
        }

    }


    


?>