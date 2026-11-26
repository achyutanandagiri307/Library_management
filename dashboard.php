<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>

<body>

    <h1>Library Management System</h1>

    <h2>Admin Dashboard</h2>

    <p>Welcome, Admin!</p>

    <h3>Book Management</h3>

    <a href="addbook.php">Add Books</a>
    <br><br>

    <a href="managebooks.php">Update / Delete Books</a>
    <br><br>

    <h3>Request Management</h3>

    <a href="requests.php">Manage Student Requests</a>
    <br><br>

    <h3>Issue / Return Management</h3>

    <a href="issue_return.php">Issue / Return Books</a>
    <br><br>

    <a href="logout.php">Logout</a>

</body>
</html>