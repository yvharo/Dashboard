<!DOCTYPE html>

<head>
    <title>Contact-pagina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="left">
                    <img src="rsp.png" alt="rsp" width="70px">
                </div>
            </div>
            <div class="text-center">
                <h1>Rationale stemmen partij</h1>
            </div>
            <div class="right">
                <img src="nav.png" alt="nav" width="40px">
            </div>
        </div>
    </nav>
    <h1>Meld je aan</h1>
    <div class="container">
        <form action="form.php" method="post">
            <p>voornaam</p>
            <input type="text" name="voornaam">
            <P>achternaam</P>
            <input type="text" name="achternaam">
            <p>e-mail</p>
            <input type="text" name="email">
            <p>telefoon nummer</p>
            <input type="number" name="tel">
            <P>account wachtwoord</P>
            <input type="password" name="password">
            <p>mogelijke vragen of opmerkingen</p>
            <textarea></textarea>
            <button type="submit" name="submit" class="btn-primary">aanmelden</button>
        </form>
    </div>
    <?php

    if (isset($_POST['submit']) && $_POST['submit'] != '') {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            header('Location: dank.php');
        } else {
            echo ("E-mailadres is ongeldig!");
        }

        $userEmail = $_POST['submit'];
    }
    ?>
</body>

</html>