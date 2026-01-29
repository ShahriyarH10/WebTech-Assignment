<?php

require 'dbConn.php';
$name = $_GET['NAME'];

if (!empty($name)) {
    $sql = "SELECT * FROM products WHERE NAME LIKE '%$name%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $profit = $row['selling_price'] - $row['buying_price'];
            echo "<tr>
                    <td>" . $row['NAME'] . "</td>
                    <td>" . $profit . "</td>
                    <td><a href='editProduct.php?id=" . $row['id'] . "'>Edit</a></td>
                    <td><a href='deleteProduct.php?id=" . $row['id'] . "'>Delete</a></td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No products found</td></tr>";
    }
}

?>