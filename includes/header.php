<?php
    session_start();
?>

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

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark " data-bs-theme="dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="datatypes.php">Data Types</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="operators.php">Operators</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="conditionals.php">Conditionals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="calculator.php">Calculator</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="calendar.php">Calendar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="loops.php">Loops</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="arrays.php">Arrays</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="functions.php">Functions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div>
            <?php
                if (isset($_SESSION['userId'])) {
                    echo '<form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form>';
                    
                }
                else {
                    echo '<form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username/E-mail...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="login-submit">Login</button>
                <a href="signup.php">Signup</a>
            </form>';
                }
            ?>
            
            
        </div>
    </header>
    <br>
    <?php
        if (isset($_SESSION['userId'])) {
            echo '<p>You are logged in!</p>';
        }
        else {
            echo '<p>You are logged out!</p>';
        }
    ?>
</body>

</html>