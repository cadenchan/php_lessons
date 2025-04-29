<?php
    include 'includes/header.php';
    include 'includes/dbh.inc.php';
?>

<main>
    <div>
        <section>
            <h1>Signup</h1>
            <!-- CONTINUE HERE AT 1:43:20 -->
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="text" name="mail" placeholder="Email">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd-repeat" placeholder="Repeat password">
                <button type="submit" name="signup-submit">Signup</button>
            </form>
        </section>
    </div>
</main>