<?php

require 'dbConn.php';

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $buying_price = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];

    $display = isset($_POST['display']) ? 'Yes' : 'No';

    $sql = "INSERT INTO products (name, buying_price, selling_price, display) VALUES ('$name', '$buying_price', '$selling_price', '$display')";


    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New product added successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<style>
    table,tr,td{
        border: none
    }
</style>
<body>
    <div>

        <section class="menu">
    
            <button> <a href="addProduct.php">Add Product</a></button>
            <button> <a href="displayProduct.php">Display Product</a></button>
            <button> <a href="search.php">Search Product</a></button>
        </section>
    
        <form method="POST" action="">
            <fieldset>
                <legend>ADD PRODUCT</legend>
                <table>
                    <tr>
                        <td>Name <br> <input type="text" name="name" required></td>
    
                    </tr>
                    <tr>
                        <td>Buying Price <br> <input type="number" name="buying_price" required></td>
                    </tr>
                    <tr>
                        <td>Selling Price <br> <input type="number" name="selling_price" required>
                        </td>
                    </tr>
                </table>
                <hr>
                <input type="checkbox" name="display" value="Yes">
                <label for="display">Display</label>
                <hr>
                <input type="submit" name="save" value="Save">
    
            </fieldset>
        </form>
    </div>
</body>