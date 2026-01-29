<?php

require 'dbConn.php';

?>

<!DOCTYPE html>
<html>

<head>
    <title>Display Products</title>
</head>
<style>
    .menu {
        margin-bottom: 20px;
    }

    .menu button {
        margin-right: 4px;
        padding: 10px;

    }

    .menu a {
        text-decoration: none;
        color: black;
    }

    fieldset {
        width: 300px;
        padding: 20px;
    }

    table {
        width: 300px;
        border-collapse: collapse;
    }

    tr,
    td {
        padding: 5px;
        border: 1px black solid;
    }
</style>

<body>
    <section class="menu">

        <button> <a href="addProduct.php">Add Product</a></button>
        <button> <a href="displayProduct.php">Display Product</a></button>
        <button> <a href="search.php">Search Product</a></button>
    </section>

    <h3></h3>
    <fieldset>
        <legend>Display</legend>

        <table>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Profit</td>
                    <td colspan="2"></td>

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
</body>

</html>