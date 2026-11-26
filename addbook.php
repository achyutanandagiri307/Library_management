<!DOCTYPE html>
<html>
<head>
    <title>Add New Book</title>
</head>

<body>

    <h1>Add New Book</h1>

    <form action="savebook.php" method="POST">

        <label>Book ID:</label>
        <input type="text" name="book_id" required>

        <br><br>

        <label>Book Name:</label>
        <input type="text" name="book_name" required>

        <br><br>

        <label>Author:</label>
        <input type="text" name="author" required>

        <br><br>

        <label>Category:</label>
        <input type="text" name="category" required>

        <br><br>

        <label>Quantity:</label>
        <input type="number" name="quantity" min="1" required>

        <br><br>

        <button type="submit">Add Book</button>

    </form>

    <br>

    <a href="dashboard.php">Back to Dashboard</a>

</body>
</html>