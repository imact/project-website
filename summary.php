<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "student registration";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $surname = $_POST["surname"];
    $firstname = $_POST["firstname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $birthdate = $_POST["birthdate"];
    $address = $_POST["address"];
    $sex = $_POST["sex"];

    $sql = "INSERT INTO stud_info (surname, firstname, username, password, birthdate, address, sex) VALUES ('$surname', '$firstname', '$username', '$password', '$birthdate', '$address', '$sex')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>