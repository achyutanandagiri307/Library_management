<?php

$conn = mysqli_connect("localhost", "root", "", "library_db");

if (!$conn) {
    die("Database Connection Failed");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["book_id"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $available = $_POST["available"];

    $sql = "UPDATE books SET TITTLE=?, AUTHORE=?, maybeavailable=?
            WHERE BOOK_ID=?";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param(
        $stmt,
        "ssii",
        $title,
        $author,
        $available,
        $id
    );

    if (mysqli_stmt_execute($stmt)) {
        header("Location: managebooks.php");
        exit();
    } else {
        echo "Update Failed";
    }

} else {

    $id = $_GET["id"];

    $sql = "SELECT * FROM books WHERE BOOK_ID=?";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $book = mysqli_fetch_assoc($result);

    if (!$book) {
        die("Book Not Found");
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Book</title>
</head>

<body>

    <h1>Update Book Details</h1>

    <form method="POST" action="updatebook.php">

        <input type="hidden" name="book_id"
        value="<?php echo $book['BOOK_ID']; ?>">

        <label>Book Title:</label>
        <input type="text" name="title"
        value="<?php echo htmlspecialchars($book['TITTLE']); ?>" required>

        <br><br>

        <label>Author:</label>
        <input type="text" name="author"
        value="<?php echo htmlspecialchars($book['AUTHORE']); ?>" required>

        <br><br>

        <label>Available Quantity:</label>
        <input type="number" name="available"
        value="<?php echo $book['maybeavailable']; ?>" min="0" required>

        <br><br>

        <button type="submit">Update Book</button>

    </form>

    <br>

    <a href="managebooks.php">Back to Manage Books</a>

</body>
</html>

<?php
mysqli_close($conn);
?>