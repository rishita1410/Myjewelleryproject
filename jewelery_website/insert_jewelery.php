<?php
$conn= new mysqli("localhost","root","","jewelery_db");
if($conn->connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}
$imagePath="uploads" . goldnecklace.jpg(C:/xampp/htdocs/jewelry_website/uploads/goldnecklace.jpg);

$name=$_POST['name'];
$price=$_POST['price'];
$description=$_POST['description'];
$image= $imagePath;

$sql="INSERT INTO jewelery (name, price, description, image) VALUES ('$name', '$price', '$description', '$image')";
if($conn->query($sql)===TRUE)
{
    echo "<p>Jewelry item added successfully!</p>";
    echo "<p><a href='view_jewelery.php'>View Jewelery</a></p>";
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>