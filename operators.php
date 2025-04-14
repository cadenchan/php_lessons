<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle.css">
</head>

<?php
    include 'includes/header.php';
?>

<body class="bg-danger-subtle">
 
    <?php
        //Arithmetic Operators
        echo (2+3).', ';
        echo (7-4).', ';
        echo (3*4).', ';
        echo (6%4).', ';
        echo (3**4).'<br>';
    ?>
    <?php
        //Assignment Operators
        $x = 300;
        $x += 20;
        echo $x.", ";

        $x = 100;
        $x /= 4;
        echo $x."<br>";
    ?>
    <?php
        //Comparison Operators
        $x = 5;
        $y = "6";
        if ($x == $y) {
            echo "True!";
        }
        else {
            echo "False!";
        }
        if ($x != $y) {
            echo "True!";
        }
        else {
            echo "False!";
        }
        if ($x === $y) {
            echo "True!";
        }
        else {
            echo "False!";
        }
        if ($x < $y) {
            echo "True!";
        }
        else {
            echo "False!";
        }
        if ($x > $y) {
            echo "True!";
        }
        else {
            echo "False!";
        }
        if ($x >= $y) {
            echo "True!";
        }
        else {
            echo "False!";
        }
        if ($x !== $y) {
            echo "True!";
        }
        else {
            echo "False!";
        }
        if ($x <> $y) {
            echo "True!";
        }
        else {
            echo "False!";
        }
    ?>
    <br>
    <?php
        //Increment/Decrement Operators
        $x = 10;
        echo ++$x.", ";
        echo --$x;
    ?>
    <br>
    <?php
        //Logical Operators
        $x = 10;
        $y = 20;
        if ($x == $y or 1 == 1) {
            echo "True";
        }
        if ($x == $y and 1 == 1) {
            echo "True";
        }
        if ($x == $y || 1 == 1) {
            echo "True";
        }
        if ($x == $y && 1 == 1) {
            echo "True";
        }
        if ($x == $y xor 1 == 1) {
            echo "True";
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>