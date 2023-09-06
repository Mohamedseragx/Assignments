<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["book_name"]) && isset($_POST["price"]) && isset($_POST["author"])) {
        $book_name = $_POST["book_name"];
        $price = $_POST["price"];
        $author = $_POST["author"];

        echo "<table>
                <tr>
                    <th>Book Name</th>
                    <th>Price</th>
                    <th>Author</th>
                </tr>
                <tr>
                    <td>$book_name</td>
                    <td>$price</td>
                    <td>$author</td>
                </tr>
            </table>";
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="book_name">Book Name:</label>
    <input type="text" id="book_name" name="book_name" required><br>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" required><br>

    <label for="author">Author:</label>
    <input type="text" id="author" name="author" required><br>

    <input type="submit" value="Submit">
</form>