<?php

require 'dbConn.php';
$id = $_GET['id'];

if (isset($_POST['delete'])) {
    $sql = "DELETE FROM products WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Product deleted successfully');</script>";
        header("Location: displayProduct.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$sql = "SELECT * FROM products WHERE id=$id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Delete Product</title>
</head>
<style>
    fieldset {
        width: 300px;
        padding: 20px;
    }

    p {
        margin: 3px 0;
    }
</style>

<body>
    <form method="POST" action="">
        <fieldset>
            <legend>DELETE PRODUCT</legend>
            <p>Name: <?php echo $data['NAME']; ?></p>
            <p>Buying Price: <?php echo $data['buying_price']; ?></p>
            <p>Selling Price: <?php echo $data['selling_price']; ?></p>
            <p>Displayable: <?php echo $data['display']; ?></p>
            <hr>
            <input type="submit" name="delete" value="Delete">
        </fieldset>
    </form>
</body>

</html>