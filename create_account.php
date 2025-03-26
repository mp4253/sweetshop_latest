<?php

    $db = new mysqli(hostname:"localhost",
                     username:"root",
                     password:"",
                     database:"sweetshop",
                     port:3306 );

    if($db -> connect_error){
        echo "Connection Error.";
    }

    else{
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $username = $_POST['usernooname'];
            $email = $_POST['usernooemailing'];
            $password = password_hash($_POST['usernoopassword'], PASSWORD_DEFAULT);
            $confirm_password = password_hash($_POST['usernooconfirmpassword'], PASSWORD_DEFAULT);


            $sql_query = "INSERT INTO create_account(
                        username, email, password, confirm_password)
                        VALUES('$username', '$email', '$password', '$confirm_password')";

            if($db -> query($sql_query)){
                echo "Inserted Data Successfully.";
            }

            else{
                echo "Inserted Data not Successfully.";
            }

        }
    }


?>