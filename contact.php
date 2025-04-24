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
    include 'includes/dbh.inc.php';
?>

<body class="bg-danger-subtle">
    <form action="">
        <input type="text" name="first" placeholder="firstname">
        <br>
        <input type="text" name="last" placeholder="lastname">
        <br>
        <input type="text" name="email" placeholder="e-mail">
        <br>
        <input type="text" name="uid" placeholder="username">
        <br>
        <input type="password" name="pwd" placeholder="password">
        <br>
        <button type="submit" name="submit">Sign up</button>
    </form>
    <?php
        $sql = "";
        mysqli_query($conn, $sql);

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>