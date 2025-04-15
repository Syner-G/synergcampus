<?php
// Include database connection
$conn = new mysqli('localhost', 'root', '', 'synergcampus');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch summary counts for the dashboard               
$total_users = $conn->query("SELECT COUNT(*) AS count FROM users")->fetch_assoc()['count'];
$total_enrollments = $conn->query("SELECT COUNT(*) AS count FROM enrollments")->fetch_assoc()['count'];
$total_inquiries = $conn->query("SELECT COUNT(*) AS count FROM inquiries")->fetch_assoc()['count'];

// Handle deletions
if (isset($_GET['delete_id']) && isset($_GET['section'])) {
    $delete_id = intval($_GET['delete_id']);
    $section = $_GET['section'];

    if ($section == 'enrollments') {
        $conn->query("DELETE FROM enrollments WHERE id = $delete_id");
    } elseif ($section == 'contacts') {
        $conn->query("DELETE FROM inquiries WHERE id = $delete_id");
    } elseif ($section == 'students') {
        $conn->query("DELETE FROM users WHERE id = $delete_id");
    }

    header("Location: admin_dashboard.php?section=$section");
    exit();
}

$section = $_GET['section'] ?? 'dashboard';
$id = intval($_GET['id'] ?? 0);
$data = null;

if (($section == 'enrollments') || ($section == 'contacts') || ($section == 'students')) {
    $table = ($section == 'enrollments') ? 'enrollments' : (($section == 'contacts') ? 'inquiries' : 'users');
    if ($id > 0) {
        $query = $conn->query("SELECT * FROM $table WHERE id = $id");
        if ($query && $query->num_rows > 0) {
            $data = $query->fetch_assoc();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard | Syner G Campus</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
         /* Reset & Global Styles */
        * {
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        /* Sidebar */
.sidebar {
    width: 270px;
    background: linear-gradient(135deg, #003366, #0ee7a8); /* Academic Blue Theme */
    color: white;
    position: fixed;
    height: 100%;
    padding-top: 20px;
    transition: all 0.3s ease-in-out;
    box-shadow: 5px 0 10px rgba(0, 0, 0, 0.2);
    overflow-y: auto;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
}

/* Logo */
.sidebar .logo {
    text-align: center;
    margin-bottom: 20px;
}
.sidebar .logo img {
    width: 150px;
    border-radius: 50%;
    border: 3px solid white;
    padding: 5px;
}

/* Sidebar Navigation */
.sidebar ul {
    list-style-type: none;
    padding: 0;
}
.sidebar ul li {
    padding: 12px 20px;
    display: flex;
    align-items: center;
    transition: all 0.3s ease-in-out;
}
.sidebar ul li a {
    color: white;
    text-decoration: none;
    font-size: 16px;
    display: flex;
    align-items: center;
    width: 100%;
    transition: all 0.3s;
    padding: 12px 15px;
    border-radius: 10px;
    font-weight: bold;
}

/* Sidebar Icons */
.sidebar ul li a i {
    margin-right: 12px;
    font-size: 18px;
}

/* Hover Effects */
.sidebar ul li:hover {
    background: rgba(255, 255, 255, 0.2);
    border-radius: 10px;
}

/* Active Link */
.sidebar ul li.active {
    background: rgba(255, 255, 255, 0.3);
    border-radius: 10px;
}

/* Collapsible Sidebar */
.sidebar.collapsed {
    width: 80px;
}
.sidebar.collapsed ul li a {
    justify-content: center;
}
.sidebar.collapsed ul li a i {
    margin: 0;
}
.sidebar.collapsed ul li a span {
    display: none;
}

/* Responsive */
@media (max-width: 768px) {
    .sidebar {
        width: 80px;
    }
    .sidebar ul li a {
        justify-content: center;
    }
    .sidebar ul li a span {
        display: none;
    }
}
        /* Main Content */
        .main-content {
            margin-left: 250px;
            padding: 30px;
        }
        /* School Campus Header */
.header {
    background: linear-gradient(to right, #0a3d62, #0ee7a8); /* School-themed colors */
    color: white;
    padding: 15px 20px;
    text-align: center;
    border-radius: 5px;
    margin-bottom: 20px;
    font-family: 'Georgia', serif; /* Academic feel */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Logo Styling */
.header img {
    width: 60px;
    height: auto;
    position: absolute;
    left: 20px;
    top: 10px;
}

/* School Name */
.header h1 {
    font-size: 28px;
    margin: 0;
    text-transform: uppercase;
    letter-spacing: 2px;
}

/* Navigation Bar */
.navbar {
    display: flex;
    justify-content: center;
    background: #154360; /* Darker blue for contrast */
    padding: 10px 0;
    border-radius: 5px;
}

.navbar a {
    color: white;
    text-decoration: none;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
}

.navbar a:hover {
    background: rgba(255, 255, 255, 0.2);
    border-radius: 5px;
}

       /* Dashboard Cards */
       .cards {
            display: flex;
            gap: 20px;
            margin-top: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }
        .card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            flex: 1;
            min-width: 280px;
            max-width: 300px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-left: 5px solid #0ee7a8;
        }
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
        .card i {
            font-size: 40px;
            margin-bottom: 10px;
            color: #3498db;
        }
        .card h3 {
            margin: 10px 0;
            font-size: 22px;
            color: #2c3e50;
        }
        .card p {
            font-size: 16px;
            color: #666;
        }
        .card a {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 15px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s ease;
        }
        .card a:hover {
            background: #2980b9;
        }
        /* Table Container */
.table-container {
    width: 100%;
    overflow-x: auto;
    background: #f5f7fa; /* Light academic background */
    padding: 20px;
    border-radius: 12px;
}

/* Table Styles */
table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1);
}

/* Table Headers */
table th {
    background: linear-gradient(to right, #0ee7a8, #004085); /* University Blue */
    color: white;
    font-weight: bold;
    text-transform: uppercase;
    padding: 5px;
}

/* School Campus Table */
table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    font-size: 18px;
    font-family: 'Georgia', serif; /* Academic style */
    background: #f8f9fa;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Table Header */
thead {
    background: #0a3d62; /* Deep blue header */
    color: white;
    text-transform: uppercase;
}

th, td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 2px solid #0a3d62;
}

/* Alternating Row Colors */
tbody tr:nth-child(even) {
    background: #eef7ff; /* Light blue for readability */
}

tbody tr:nth-child(odd) {
    background: #ffffff;
}

/* Hover Effect */
tbody tr:hover {
    background: #b0d4f1; /* Slight blue tint on hover */
    transition: 0.3s;
}

/* Table Borders */
th {
    border-bottom: 3px solid #154360;
    padding: 15px;
}

td {
    border-bottom: 1px solid #154360;
}

/* Responsive Table */
@media (max-width: 768px) {
    table {
        font-size: 16px;
    }
}


/* Alternate Row Colors */
table tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* Hover Effect */
table tr:hover {
    background-color: #eaf4ff;
    transition: background 0.3s ease;
}

/* Action Buttons */
.action-btn {
    display: inline-block;
    padding: 6px 12px;
    margin: 2px;
    text-decoration: none;
    color: white;
    border-radius: 5px;
    font-size: 14px;
    font-weight: bold;
    transition: background 0.3s ease, transform 0.2s ease;
}

/* View Button */
.action-btn.view {
    background-color: #3498db;
}

.action-btn.view:hover {
    background-color: #1f639c;
    transform: scale(1.05);
}

/* Delete Button */
.action-btn.delete {
    background-color: #e74c3c;
}

.action-btn.delete:hover {
    background-color: #c0392b;
    transform: scale(1.05);
}

/* Back Button */
.back-btn {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background: #2c3e50;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background 0.3s, transform 0.2s;
    font-weight: bold;
}

.back-btn:hover {
    background: #2980b9;
    transform: scale(1.05);
}

/* Responsive Design */
@media (max-width: 768px) {
    .table-container {
        overflow-x: scroll;
    }

    table th, table td {
        padding: 10px;
    }

    .sidebar { width: 200px; }
    .main-content { margin-left: 200px; }
    .cards { flex-direction: column; }
}
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo"><img src="img/gg.png" alt="Syner G Campus Logo"></div>
        <ul>
            <li><a href="admin_dashboard.php?section=dashboard"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="admin_dashboard.php?section=enrollments"><i class="fas fa-user-graduate"></i> View Enrollments</a></li>
            <li><a href="admin_dashboard.php?section=contacts"><i class="fas fa-envelope"></i> View Message</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="header"><h1>Admin Dashboard</h1></div>
        <?php if ($data): ?>
            <div class="container">
                <h2><?= ucfirst($section) ?> Details</h2>
                <div class="details">
                    <?php foreach ($data as $key => $value): ?>
                        <p><strong><?= ucfirst(str_replace('_', ' ', $key)) ?>:</strong> <?= htmlspecialchars($value) ?></p>
                    <?php endforeach; ?>
                </div>
                <a class="back-btn" href="admin_dashboard.php?section=<?= $section ?>">Back to <?= ucfirst($section) ?></a>
            </div>
        <?php elseif ($section == 'dashboard'): ?>
            <div class="cards">
                <div class="card"><i class="fas fa-book"></i><h3><?= $total_enrollments; ?></h3><p>Total Enrollments</p></div>
                <div class="card"><i class="fas fa-envelope"></i><h3><?= $total_inquiries; ?></h3><p>Total Inquiries</p></div>
            </div>
        <?php elseif ($section == 'enrollments' || $section == 'contacts' || $section == 'students'): ?>
            <h2><?= ucfirst($section) ?> List</h2>
            <table>
                <tr>
                    <?php 
                    // Determine table based on section: enrollments, inquiries (contacts), or users (students)
                    $tableName = ($section == 'enrollments') ? 'enrollments' : (($section == 'contacts') ? 'inquiries' : 'users');
                    $result = $conn->query("SELECT * FROM $tableName");
if ($result && $result->num_rows > 0) {
    $columns = array_keys($result->fetch_assoc());
    foreach ($columns as $col) {
        echo "<th>" . ucfirst(str_replace('_', ' ', $col)) . "</th>";
    }
                }
                    ?>
                    <th>Actions</th>
                </tr>
                <?php 
                $result->data_seek(0);
                while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <?php foreach ($columns as $col) echo "<td>" . htmlspecialchars($row[$col]) . "</td>"; ?>
                        <td>
                            <a href="admin_dashboard.php?section=<?= $section ?>&id=<?= $row['id']; ?>" class="action-btn view">View Details</a>
                            <a href="?section=<?= $section ?>&delete_id=<?= $row['id']; ?>" class="action-btn delete" onclick="return confirm('Delete this entry?');">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        <?php endif; ?>
    </div>
    <script>
</body>
</html>

<?php
$conn->close();
?>
