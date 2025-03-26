<?php

// include "./database_connection.php";

$db = new mysqli(
    hostname: "localhost",
    username: "root",
    password: "",
    database: "sweetshop",
    port: 3306
);

if ($db->connect_error) {
    echo "Connection Error";
} else {

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = $_POST['usernooemailing'];

        $sql_query = "INSERT INTO password_forget(
                forget_email)
                VALUES('$email')";
    }

    if ($db->query($sql_query)) {
        echo "Inserted Data Successfully.";
    } else {
        echo "Inserted Data Not Successfully.";
    }
}
