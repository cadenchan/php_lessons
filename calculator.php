<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<?php
    include 'includes/header.php';
?>

<body class="bg-danger-subtle">
    <form action="">
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">
        <select name="operator" id="">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br>
        <button type="submit" class="btn btn-primary" name="submit" value="submit">
            Calculate
        </button>
    </form>
    <p>Result: </p>
    <?php
        if (isset($_GET['submit'])) {
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $operator = $_GET['operator'];
            switch ($operator) {
                case "None":
                    echo "You need to select a method.";
                break;
                case "Add":
                    echo $result1 + $result2;
                break;
                case "Subtract":
                    echo $result1 - $result2;
                break;
                case "Multiply":
                    echo $result1 * $result2;
                break;
                case "Divide":
                    echo $result1 / $result2;
                break;

            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>