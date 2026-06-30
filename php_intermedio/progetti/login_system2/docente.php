<?php

session_start();


if (!isset($_SESSION["utente"])) {
    header("Location: index.php");
    exit;
}
?>

<h1>Are Docente</h1>

<p>
    <strong><?= $_SESSION["utente"]["nome"] ?></strong><br>
    <?= $_SESSION["utente"]["email"] ?>
</p>

<a href="logout.php">Logout</a>