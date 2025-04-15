<?php
session_start();
session_unset();
session_destroy();

if (isset($_GET['admin'])) {
    header("Location: admin_login.php"); // Redirect admin to admin login
} else {
    header("Location: admin_login.php"); // Redirect user to user login
}
exit();
?>
