<!DOCTYPE html>
<html>

<head>
    <title>Search Product</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>


<body>
    <div>
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
    </div>
</body>

</html>