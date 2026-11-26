<?php

$conn = mysqli_connect("localhost", "root", "", "library_db");

if (!$conn) {
    die("Database Connection Failed");
}

$sql = "SELECT * FROM books";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Books</title>
</head>

<body>

    <h1>Manage Books</h1>

    <table border="1" cellpadding="10">

        <tr>
            <th>Book ID</th>
            <th>Book Title</th>
            <th>Author</th>
            <th>Available Quantity</th>
            <th>Action</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>

        <tr>
            <td><?php echo $row['BOOK_ID']; ?></td>

            <td><?php echo htmlspecialchars($row['TITTLE']); ?></td>

            <td><?php echo htmlspecialchars($row['AUTHORE']); ?></td>

            <td><?php echo $row['maybeavailable']; ?></td>

            <td>
                <a href="updatebook.php?id=<?php echo $row['BOOK_ID']; ?>">
                    Update
                </a>

                |

                <a href="deletebook.php?id=<?php echo $row['BOOK_ID']; ?>">
                    Delete
                </a>
            </td>
        </tr>

        <?php
        }
        ?>

    </table>

    <br>

    <a href="addbook.php">Add New Book</a>

    <br><br>

    <a href="dashboard.php">Back to Dashboard</a>

</body>
</html>

<?php
mysqli_close($conn);
?>