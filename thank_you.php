<?php
// Check if the 'first_name' and 'last_name' are passed in the URL
if (isset($_GET['first_name']) && isset($_GET['last_name'])) {
    $first_name = htmlspecialchars($_GET['first_name']);
    $last_name = htmlspecialchars($_GET['last_name']);
} else {
    $first_name = $last_name = 'Guest';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            text-align: center;
            padding: 50px;
        }

        h1 {
            color: #0044cc;
        }

        p {
            font-size: 1.2rem;
        }
    </style>
</head>
<body>

    <h1>Thank you for enrolling, <?php echo $first_name . ' ' . $last_name; ?>!</h1>
    <p>We appreciate your submission. Our team will get back to you shortly.</p>

</body>
</html>
