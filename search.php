<!DOCTYPE html>
<html>

<head>
    <title>Search Product</title>
    <script src="script.js"></script>
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
    td,
    th {
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


    <fieldset>
        <legend>SEARCH</legend>
        <input type="text" id="search_text" placeholder="Search Product">
        <button onclick="searchProduct()">Search by Name</button>
        <br><br>

        <table>
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>PROFIT</th>
                    <th colspan="2">ACTION</th>
                </tr>
            </thead>
            <tbody id="search_result">
            </tbody>
        </table>
    </fieldset>
</body>

</html>