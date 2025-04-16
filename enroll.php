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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name          = $conn->real_escape_string($_POST['first_name']);
    $middle_name         = $conn->real_escape_string($_POST['middle_name']);
    $last_name           = $conn->real_escape_string($_POST['last_name']);
    $email               = $conn->real_escape_string($_POST['email']);
    $contact_number      = $conn->real_escape_string($_POST['contact_number']);
    $current_location    = $conn->real_escape_string($_POST['current_location']);
    $dob                 = $conn->real_escape_string($_POST['dob']);
    $gender              = $conn->real_escape_string($_POST['gender']);
    $education           = $conn->real_escape_string($_POST['education']);

    // Validate age is 18+
    $today = new DateTime();
    $birthdate = new DateTime($dob);
    $age = $today->diff($birthdate)->y;

    if ($age < 18) {
        echo "<script>
                alert('You must be 18 years or older to enroll.');
                window.history.back();
              </script>";
        exit();
    }

    $sql = "INSERT INTO enrollments 
            (first_name, middle_name, last_name, email, contact_number, current_location, date_of_birth, gender, education)
            VALUES 
            ('$first_name', '$middle_name', '$last_name', '$email', '$contact_number', '$current_location', '$dob', '$gender', '$education')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Thank you for enrolling! We\\'ll get back to you shortly.');
                window.location.href = 'enroll.php';
              </script>";
        exit();
    } else {
        echo "<script>
                alert('Error: " . $conn->error . "');
              </script>";
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
        <form id="enrollForm" action="enroll.php" method="POST">
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

    <script>
        // Validate age based on DOB (must be 18 or older)
        document.getElementById('enrollForm').addEventListener('submit', function (e) {
            const dobInput = document.getElementById("dob").value;
            if (!dobInput) return;

            const dob = new Date(dobInput);
            const today = new Date();
            let age = today.getFullYear() - dob.getFullYear();
            const m = today.getMonth() - dob.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) {
                age--;
            }

            if (age < 18) {
                alert("You must be 18 years or older to enroll.");
                e.preventDefault();
            }
        });
    </script>

</body>
</html>
