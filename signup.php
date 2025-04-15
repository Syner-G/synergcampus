<?php
include 'db.php'; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course_id = $_POST['course'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (name, email, course_id) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $name, $email, $course_id);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to a thank you page or display a success message
        echo "Sign up successful! Welcome, " . htmlspecialchars($name) . "!";
        // Optionally, you can redirect to another page
        // header("Location: thank_you.php");
        // exit();
    } else {
        echo "Error: " . $stmt->error; // Display error message if the query fails
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>