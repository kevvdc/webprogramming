<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>My First PHP Program</h3>
    <h1>Hello, Kevin Dela Cruz!</h1>
</body>
</html>

<?php
    echo "Hello, World!";
?> 

<br>


<h3>Basic Arithmetic Operations</h3>
<?php
    $x = 20;
    $y =5;
    $sum = $x + $y;
    $difference = $x - $y;
    $product = $x * $y;
    $equation = $x / $y;


    echo "the sum is $sum<br>";
    echo "the difference is $difference<br>";
    echo "the product is $product<br>";
    echo "the equation is $equation<br>";
?>

<br>


<h3>Conditional Statements</h3>
<?php
    if($x % $y == 0){
        echo "$x is a factor of $y";
    }else{
        echo "$x is not a factor of $y";
    }
?>

<br>


<h3>Loops</h3>
<?php
echo "mutiples of 3 and 5 from 1 to 100 are: <br>";
echo "---- mutiples of 3 ----<br>";
    for($i = 1; $i <= 100; $i++){
        if($i % 3 == 0){
        echo "$i <br>";
        }
    }

    echo "---- mutiples of 5 ----<br>";
     for($i = 1; $i <= 100; $i++){
        if($i % 5 == 0){
        echo "$i <br>";
        }
    }
?>

<br>

<h3>Arrays</h3>
<?php
    $products = array("Product A", "Product B", "Product C");
    var_dump($products);
?>

<br>


<?php
    $products = array("Product A", "Product B", "Product C");
    echo $products[0];
?>

<br>


<?php
    $products = array("Product A", "Product B", "Product C");
    $products[1] = "Product D";
    var_dump($products);
?>

<br>


<?php
    $products = array("Product A", "Product B", "Product C");
    foreach($products as $p){
        echo "$p <br>";
    }
?>

<br>


<?php
$products = array(
    array("name" => "Product A", "price" => 10.50, "stock" => 12),
    array("name" => "Product B", "price" => 5.60, "stock" => 7),
    array("name" => "Product C", "price" => 7.00, "stock" => 5)
);

foreach($products as $p){
    echo $p["name"] . " is " . $p["price"] . " pesos <br>";
}
?>