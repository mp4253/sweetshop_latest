<?php

$db = new mysqli(hostname: "localhost", username: "root", password: "", port: 3306);


if($db -> connect_error){
    echo "Connection Error";
}

else{
    // echo "Connection successful";

    $sql_query = "CREATE DATABASE sweetshop";

    if($db -> query($sql_query)){
        echo "Database Created Successfully.";
    }

    else{
        echo "Database NOT created.";
    }

}


?>