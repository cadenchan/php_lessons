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
        //Loop

        //while loop
        $x = 1;
        while ($x < 5) {
            echo "Hello there<br>";
            $x++;
        }
        //do while loop
        $y = 1;
        do {
            echo "Hi there<br>";
            $y++;
        }
        while ($y < 5);
        //for loop
    
        for ($z = 1; $z <= 10; $z++) {
            echo "Hi<br>";
        }
        //foreach loop
        $array = array("Daniel", "Jane", "Jacob");
        foreach ($array as $loopdata) {
            echo "My name is ".$loopdata."<br>";
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>