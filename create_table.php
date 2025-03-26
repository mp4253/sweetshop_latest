<?php

$db = new mysqli(
    hostname: "localhost",
    username: "root",
    database: "sweetshop",
    password: "",
    port: 3306
);

if ($db->connect_error) {
    echo "Connection Error";
}

// include "./database_connection.php";



else {

    // $sql_query = "CREATE TABLE users(
    //     id INT(10) NOT NULL AUTO_INCREMENT,
    //     username VARCHAR(15) NOT NULL,
    //     password VARCHAR(30) NOT NULL,
    //     PRIMARY KEY(id)
    //   )";

    // $sql_query = "CREATE TABLE create_account(
    //         id INT(10) NOT NULL AUTO_INCREMENT,
    //         forget_password VARCHAR(30) NOT NULL,
    //         PRIMARY KEY(id)
    //     )";

    $sql_query = "CREATE TABLE create_account(
        id INT(10) NOT NULL AUTO_INCREMENT,
        usernmame VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL,
        password VARCHAR(30) NOT NULL,
        confirm_password VARCHAR(30) NOT NULL,
        PRIMARY KEY(id)
    )";

    if ($db->query($sql_query)) {
        echo "Table created successfully.";
    } else {
        echo "Table is not created.";
    }
}

$db->close();
