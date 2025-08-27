<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1 style="color:#9e85e2;"><b>Estetique Program For Product</b></h1>
    <h3 style="color:#9e85e2;">Dynamic Table</h3>
    <hr>
    </header>

    <?php
        $products = array(
            array("name" => "Product A", "price" => 10.50, "stock" => 12),
            array("name" => "Product B", "price" => 5.60, "stock" => 7),
            array("name" => "Product C", "price" => 7.00, "stock" => 5),
            array("name" => "Product D", "price" => 9.00, "stock" => 11),
            array("name" => "Product E", "price" => 17.75, "stock" => 9),
            array("name" => "Product F", "price" => 7.00, "stock" => 10)
        );
    ?>

    <table>
    <tr>
        <th>No.</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Stock</th>
    </tr>

    <?php
        $no=1;
        foreach ($products as $p) {
            $style = ($p["stock"] < 10) ? 'style="color: #eb3131ff;"' : '';
    ?>
        <tr <?php echo $style; ?>>
            <td><?=$no++;?></td>
            <td><?= $p["name"] ?></td>
            <td><?= $p["price"] ?></td>
            <td><?= $p["stock"] ?></td>
        </tr>
    <?php
    }
    ?>
</table>

</body>
</html>



