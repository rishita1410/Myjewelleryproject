<!DOCTYPE html>
<html>
<head>
    <title>View Jewellery</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>~Jewellery Paradise~</h1>
        <nav>
            <a href="home.php">Home</a>
            <a href="add_jewelery.php">Add Jewellery</a>
            <a href="view_jewelery.php">View Jewellery</a>
            <a href="cart.php" class="cart-button"> Cart🛒</a>
        </nav>
    </header>
    <h2>Jewellery Collection</h2>

    <div class="jewellery-container">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "jewelery_db";

        $conn = new mysqli($servername, $username, $password, $database);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM jewelery";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='jewellery-card'>";
                echo "<img src='uploads/goldnecklace.jpg" . $row['image'] . "' alt='Image' class='jewellery-image'>";
                echo "<h3>" . $row['name'] . "</h3>";
                echo "<p class='price'>Price: ₹" . $row['price'] . "</p>";
                echo "<p class='description'>" . $row['description'] . "</p>";
                echo "<button class='add-to-cart'>Add to Cart</button>";
                echo "</div>";
            }
        } else {
            echo "<p>No Jewellery Items found</p>";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
