<?php

$conn = mysqli_connect("localhost", "root", "", "library_db");

if (!$conn) {
    die("Database Connection Failed");
}

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM books WHERE BOOK_ID = ?";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {

        echo "Book Deleted Successfully!";

    } else {

        echo "Error Deleting Book!";
    }

    mysqli_stmt_close($stmt);

} else {

    echo "Book ID Not Found!";
}

mysqli_close($conn);

?>

<br><br>

<a href="managebooks.php">Back to Manage Books</a>