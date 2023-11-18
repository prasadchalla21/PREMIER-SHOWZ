<?php
// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moveis";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $subject = $_POST["Subject"];
    $sender = $_POST["Sender"];
    $phone = $_POST["Phone"];
    $message = $_POST["Message"];

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO contact (name, subject, sender, phone, message)
            VALUES ('$name', '$subject', '$sender', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        // Redirect to a thank you page after successful submission
        header("Location: thank_you.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
