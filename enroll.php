<?php
// Database connection
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "synergcampus";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$feedback_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name          = isset($_POST['first_name']) ? $conn->real_escape_string($_POST['first_name']) : '';
    $middle_name         = isset($_POST['middle_name']) ? $conn->real_escape_string($_POST['middle_name']) : '';
    $last_name           = isset($_POST['last_name']) ? $conn->real_escape_string($_POST['last_name']) : '';
    $email               = isset($_POST['email']) ? $conn->real_escape_string($_POST['email']) : '';
    $contact_number      = isset($_POST['contact_number']) ? $conn->real_escape_string($_POST['contact_number']) : '';
    $current_location    = isset($_POST['current_location']) ? $conn->real_escape_string($_POST['current_location']) : '';
    $dob                 = isset($_POST['dob']) ? $conn->real_escape_string($_POST['dob']) : '';
    $gender              = isset($_POST['gender']) ? $conn->real_escape_string($_POST['gender']) : '';
    $age                 = isset($_POST['age']) ? (int)$_POST['age'] : 0;
    $education           = isset($_POST['education']) ? $conn->real_escape_string($_POST['education']) : '';

    if ($age < 18) {
        $feedback_message = "You must be 18 years or older to enroll.";
    } else {
        $sql = "INSERT INTO enrollments 
                (first_name, middle_name, last_name, email, contact_number, current_location, date_of_birth, gender, age, education)
                VALUES 
                ('$first_name', '$middle_name', '$last_name', '$email', '$contact_number', '$current_location', '$dob', '$gender', '$age', '$education')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
                    alert('Thank you for enrolling! We\\'ll get back to you shortly.');
                    window.location.href = 'enroll.php';
                  </script>";
            exit();
        } else {
            $feedback_message = "Error: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll | Syner G Campus</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f8fa;
            color: #333;
        }
        nav ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            margin-left: 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: 500;
            font-size: 18px;
            padding: 5px 10px;
            transition: background-color 0.3s ease;
        }
        nav ul li a:hover {
            background-color: rgb(86, 99, 92);
            border-radius: 5px;
        }
        .contact-container {
            background-color: white;
            max-width: 900px;
            margin: 50px auto;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .contact-container h1 {
            text-align: center;
            color: #009688;
            margin-bottom: 20px;
            font-size: 36px;
        }
        .feedback-message {
            text-align: center;
            color: #009688;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
            display: block;
        }
        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 15px;
            border: 2px solid green;
            border-radius: 5px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: #009688;
            outline: none;
        }
        .form-group textarea {
            resize: vertical;
            height: 150px;
        }
        .form-group button {
            background-color: #009688;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }
        .form-group button:hover {
            background-color: #00796b;
        }
        .button-container {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        .back-button,
        .home-button {
            background-color: #009688;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }
        .back-button:hover,
        .home-button:hover {
            background-color: #00796b;
        }
    </style>
</head>
<body>

    <div class="contact-container">
        <h1>Enroll Now</h1>
        <?php if ($feedback_message): ?>
            <p class="feedback-message"><?php echo $feedback_message; ?></p>
        <?php endif; ?>
        <form action="enroll.php" method="POST">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="middle_name">Middle Name</label>
                <input type="text" id="middle_name" name="middle_name">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="contact_number">Contact Number</label>
                <input type="text" id="contact_number" name="contact_number" required>
            </div>
            <div class="form-group">
                <label for="current_location">Current Location</label>
                <input type="text" id="current_location" name="current_location" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" required>
            </div>
            <div class="form-group">
                <label for="education">Educational Attainment</label>
                <select id="education" name="education" required>
                    <option value="">Select</option>
                    <option value="High School">High School</option>
                    <option value="Undergraduate">Undergraduate</option>
                    <option value="Vocational">Vocational</option>
                    <option value="Graduate">Graduate</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Submit Enrollment</button>
                <div class="button-container">
                    <button class="back-button" type="button" onclick="window.history.back()">Go Back</button>
                    <a href="index.php" class="home-button">Go to Home</a>
                </div>
            </div>
        </form>
    </div>

</body>
</html>
