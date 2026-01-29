<?php

require 'dbConn.php';

?>

<!DOCTYPE html>
<html>

<head>
    <title>Display Products</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <section class="menu">

            <button> <a href="addProduct.php">Add Product</a></button>
            <button> <a href="displayProduct.php">Display Product</a></button>
            <button> <a href="search.php">Search Product</a></button>
        </section>

        <fieldset>
            <legend>DISPLAY</legend>

            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Profit</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM products WHERE display = 'Yes'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $profit = $row['selling_price'] - $row['buying_price'];
                            echo "<tr>";
                            echo "<td>" . $row['NAME'] . "</td>";
                            echo "<td>" . $profit . "</td>";
                            echo "<td><a href='editProduct.php?id=" . $row['id'] . "'>Edit</a></td>";
                            echo "<td><a href='deleteProduct.php?id=" . $row['id'] . "' onclick=\"return confirm('Are you sure you want to delete this product?');\">Delete</a></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No products to display</td></tr>";
                    }
                    ?>
                </tbody>

            </table>
        </fieldset>
    </div>
</body>

</html>