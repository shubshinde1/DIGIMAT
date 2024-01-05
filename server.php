<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $host = "localhost";
    $username = "root";
    $password = "tonystark@12";
    $database = "digitisematrix";

    // Create a database connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the SQL statement with placeholders
    $sql = $conn->prepare("INSERT INTO contactus (name, company, phone, email, paidmedia, digitalexperience, emails, contentcreation, strategies, other) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $sql->bind_param("ssssiiiiii", $name, $company, $phone, $email, $paidmedia, $digitalexperience, $emails, $contentcreation, $strategies, $other);

    // Input data
    $name = $_POST["name"];
    $company = $_POST["company"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    // Handle checkbox values
    $paidmedia = isset($_POST["paidmedia"]) ? 1 : 0;
    $digitalexperience = isset($_POST["digitalexperience"]) ? 1 : 0;
    $emails = isset($_POST["emails"]) ? 1 : 0;
    $contentcreation = isset($_POST["contentcreation"]) ? 1 : 0;
    $strategies = isset($_POST["strategies"]) ? 1 : 0;
    $other = isset($_POST["other"]) ? 1 : 0;

    // Execute the prepared statement
    if ($sql->execute()) {
        // Provide feedback to the user, e.g., redirect or display success message
        echo "Form submitted successfully!";
    } else {
        // Handle the case where the form data fails to insert into the database
        echo "Error submitting form. Please try again later.";
    }

    // Close the prepared statement and the database connection
    $sql->close();
    $conn->close();
} else {
    // Handle the case where the request method is not POST
    echo "Invalid request method!";
}
?>
