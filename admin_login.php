<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'synergcampus');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the user is the hardcoded admin
    if ($username === 'admin' && $password === 'admin123') {
        session_regenerate_id(true);
        $_SESSION['admin'] = $username;
        header('Location: admin_dashboard.php');
        exit();
    }

    // Check the database for admin credentials
    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $admin = $result->fetch_assoc();
        if (password_verify($password, $admin['password'])) {
            $_SESSION['admin'] = $admin['username'];
            header("Location: admin_dashboard.php");
            exit();
        } else {
            $error = "Invalid password!";
        }
    } else {
        $error = "User not found!";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: url('img/s.png') no-repeat center center fixed;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    padding: 20px;
}

/* Glassmorphism Effect */
.container {
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    width: 350px;
    text-align: center;
    border: 1px solid rgba(255, 255, 255, 0.3);
}

/* Title */
h2 {
    color: #fff;
    font-size: 26px;
    font-weight: 600;
    margin-bottom: 15px;
}

/* Form Styles */
form {
    display: flex;
    flex-direction: column;
}

/* Label Styling */
label {
    font-size: 14px;
    color: #fff;
    text-align: left;
    margin-bottom: 5px;
}

/* Input Fields */
input {
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-radius: 5px;
    outline: none;
    background: rgba(255, 255, 255, 0.3);
    color: #fff;
    font-size: 14px;
    transition: 0.3s ease-in-out;
}

input::placeholder {
    color: rgba(255, 255, 255, 0.7);
}

input:focus {
    background: rgba(255, 255, 255, 0.5);
    border-color: #fff;
    box-shadow: 0 0 5px rgba(196, 27, 27, 0.7);
}

/* Show Password Checkbox */
.checkbox-container {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 15px;
}

.checkbox-container label {
    font-size: 14px;
    color: #fff;
    cursor: pointer;
}

/* Login Button */
button {
    background: #f4b400;
    color: #fff;
    font-size: 16px;
    padding: 12px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: 600;
    transition: 0.3s;
}

button:hover {
    background: #e09b00;
    transform: scale(1.05);
}

/* Signup Link */
p {
    margin-top: 10px;
    font-size: 14px;
    color: #fff;
}

p a {
    color: #ffefba;
    text-decoration: none;
    font-weight: bold;
}

p a:hover {
    text-decoration: underline;
}

/* Error Message */
.error {
    color: #ff6b6b;
    background: rgba(255, 0, 0, 0.1);
    padding: 8px;
    border-radius: 5px;
    margin-bottom: 15px;
    font-weight: bold;
}

/* Responsive Design */
@media (max-width: 480px) {
    .container {
        width: 90%;
        padding: 20px;
    }
}

    </style>
</head>
<body>

    <div class="login-container">
        <h2>Admin Login</h2>
        <form method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        </form>
    </div>

</body>

</html>
