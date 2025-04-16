<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Jewellery</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>~Jewellery Paradise~</h1>
        <nav>
            <a href="home.php">Home</a>
            <a href="add_jewelery.php">Add Jewellery</a>
            <a href="view_jewelery.php">View Jewellery</a>
        </nav>
    </header>
    <h2>Add New Jewellery</h2>
    <form action="add_jewelery.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="price">Price:</label>
        <input type="number" name="price" required><br><br>

        <label for="description">Description:</label>
        <textarea name="description" required></textarea><br><br>

        <label for="image">Upload Image:</label>
        <input type="file" name="image" accept="image/*"><br><br>

        <input type="submit" value="Add Jewellery">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
       
        //$image = $_FILES['image']['name'];
        //$target_dir = "uploads";                   // Folder to store uploaded images
        //$target_file = $target_dir . basename($image);
        //f (move_uploaded_file($_FILES['image']['tmp_name'], $target_file))

        $sql = "INSERT INTO jewelery (name, price, description) VALUES ('$name', '$price', '$description')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New jewellery item added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
    </body>
</html>