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
   
    <form method="GET">
        <input type="text" name="person">
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </form>
    <?php
    /*
      $name = $_GET['person'];
      echo $name." is incredibly handsome and awesome.";
    */
      ?>
    
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>