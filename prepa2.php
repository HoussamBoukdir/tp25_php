<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prepa2.php" method="post" >
        <label for="">Quantity: </label>
        <input type="number" name="quantity" id=""> <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
$item = "Tacos";
$price = 10;
$quantity = $_POST['quantity'] ;
$total = null;
$total = $quantity * $price;
echo "Total price for $quantity $item(s) is: $" . $total . "<br>";
?>