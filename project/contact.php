<!DOCTYPE html>

<head>
    <title>Contact-pagina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <img src="rsp.png" alt="logo" height="50" width="50">
            </div>
            <ul class="nav navbar-nav">

            </ul>
            <ul class="nav navbar-nav navbar-nav">
                <li>
                    <a href="#">Rationale stemmen partij</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="contact.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="nav.png" alt="nav" height="25" width="30"> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="partij.html">over onze partij</a></li>
                        <li><a href="standpunten.html">standpunten</a></li>
                    </ul>
            </ul>
        </div>
    </nav>
    </div>
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
        header('Location: dank.php');
    }
    ?>
</body>

</html>