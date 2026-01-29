<?php

require 'dbConn.php';

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id=$id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $buying_price = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];

    $display = isset($_POST['display']) ? 'Yes' : 'No';

    $sql = "UPDATE products SET name='$name', buying_price='$buying_price', selling_price='$selling_price', display='$display' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Product updated successfully');</script>";
        header("Location: displayProduct.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div>

        <form method="POST" action="">

            <fieldset>
                <legend>EDIT PRODUCT</legend>
                <table>
                    <tr>
                        <td>Name <br> <input type="text" name="name" value="<?php echo $data['NAME']; ?>"></td>

                    </tr>
                    <tr>
                        <td>Buying Price <br> <input type="number" name="buying_price"
                                value="<?php echo $data['buying_price']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Selling Price <br> <input type="number" name="selling_price"
                                value="<?php echo $data['selling_price']; ?>">
                        </td>
                    </tr>
                </table>
                <hr>
                <input type="checkbox" name="display" value="Yes" <?php if ($data['display'] == 'Yes')
                    echo 'checked'; ?>>
                <label for="display">Display</label>
                <hr>
                <input type="submit" name="update" value="Save">

            </fieldset>
        </form>
    </div>
</body>

</html>