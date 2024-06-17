<?php
if (isset($_POST['submit'])) {
    // Retrieve form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];

    // Establish database connection
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contact";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("INSERT INTO your_table_name (first_name, last_name, email, mobile, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $firstName, $lastName, $email, $mobile, $message);
    $stmt->execute();

    // Check the result
    if ($stmt->affected_rows > 0) {
        echo "<script>alert('Query successfully submitted. Thank you')</script>";
    } else {
        echo "<script>alert('Something went wrong!!')</script>";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>