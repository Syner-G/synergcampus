<?php
// view_contact_details.php

include 'db.php';

if (!isset($_GET['id'])) {
    echo "No contact ID specified.";
    exit;
}

$contact_id = $_GET['id'];

// Fetch the contact details from the database
$sql = "SELECT * FROM messages WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $contact_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "No message found.";
    exit;
}

$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Contact Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background: #fff;
            padding: 25px;
            max-width: 700px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h2 {
            margin-top: 0;
        }
        p {
            margin: 12px 0;
        }
        .message-box {
            background: #f9f9f9;
            padding: 15px;
            border: 1px solid #ccc;
            white-space: pre-wrap;
        }
        .back-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
        }
        .back-btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Contact Message Details</h2>
        <p><strong>Name:</strong> <?= htmlspecialchars($data['name']) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($data['email']) ?></p>
        <p><strong>Subject:</strong> <?= htmlspecialchars($data['subject']) ?></p>
        <p><strong>Message:</strong></p>
        <div class="message-box"><?= nl2br(htmlspecialchars($data['message'])) ?></div>

        <a class="back-btn" href="admin_dashboard.php?section=contacts">Back to Contacts</a>
    </div>
</body>
</html>
