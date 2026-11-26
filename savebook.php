<?php

$conn = mysqli_connect("localhost", "root", "", "library_db");

if (!$conn) {
    die("Database Connection Failed");
}

$title = $_POST['title'];
$author = $_POST['author'];
$available = $_POST['available'];

$sql = "INSERT INTO books (TITTLE, AUTHORE, maybeavailable)
        VALUES (?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "ssi",
    $title,
    $author,
    $available
);

if (mysqli_stmt_execute($stmt)) {
    echo "Book Added Successfully!";
} else {
    echo "Error Adding Book!";
}

mysqli_stmt_close($stmt);
mysqli_close($conn);

?>

<br><br>
<a href="addbook.php">Add Another Book</a>
<br><br>
<a href="dashboard.php">Back to Dashboard</a>