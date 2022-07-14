<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "daystar"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// // sql to create table
// $sql = "CREATE TABLE students (
//      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     -- firstname VARCHAR(30) NOT NULL,
//     -- lastname VARCHAR(30) NOT NULL,
//     -- email VARCHAR(50),
//     -- reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     -- )";

//     -- if ($conn->query($sql) === TRUE) {
//     --     echo "Table students created successfully";
//     -- } else {
//     --     echo "Error creating table: " . $conn->error;
//     -- }

    // $sql ="INSERT INTO students (firstname, lastname, email)
    // VALUES ('John', 'Doe', 'john@example.com')"; 
    // if($conn->query($sql) === TRUE) {
    //     echo "New record created successfully";
    // } else{
    //     echo "Error: ". $sql ."<br>". $conn->error;}

    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO students (firstname, lastname, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $firstname, $lastname, $email);

    // set parameters and execute
    $firstname ="John";
    $lastname ="Doe";
    $email ="john@example.com";
    $stmt->execute();

    $firstname ="Mary";
    $lastname ="Moe";
    $email ="mary@example.com";
    $stmt->execute();

    $firstname ="Julie";
    $lastname ="Dooley";
    $email ="julie@example.com";
    $stmt->execute();

    echo "New records created successfully";
    $stmt->close();

    // SQL query to select data from database
    $sql = "SELECT * FROM students ORDER BY firstname";
    $result = $conn->query($sql);
    $conn->close();
    ?>


  
