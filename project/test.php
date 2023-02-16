<?php
session_start();

if (!isset($_SESSION['kansen'])) {
    $_SESSION['letters'] = array();
    $_SESSION['kansen'] = 12;
    $scherm = "woord";
} else {
    if (isset($_POST['woord'])) {
        $woord = $_POST['woord'];
        $_SESSION['woord'] = $woord;
    } elseif (isset($_POST['letter'])) {
        // verborgen code
    }

    //verborgen code
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Galgje</title>
</head>

<body>
    <?php
    if ($scherm == "woord") {
    ?>
        <form action="index.php" method="post">
            Woord: <input type="password" name="woord"><br>
            <input type="submit">
        </form>
    <?php
    } elseif ($scherm == "letter") {
    ?>
        <form action="index.php" method="post">
            Kansen: <?php echo $_SESSION['kansen']; ?><br>
            <?php echo $toonwoord; ?><br>
            <?php if (isset($error)) echo $error; ?><br>
            Letter: <input type="text" name="letter"><br>
            <input type="submit">
        </form>
    <?php
    } elseif ($scherm == "einde") {
        echo $scherm;
    ?>
        <p>EINDE</p>
    <?php
    }
    ?>

</body>

</html>