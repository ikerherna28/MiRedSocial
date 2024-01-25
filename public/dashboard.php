<?php session_start();

$user = $_SESSION['user'];
$izena = $_SESSION['izena'];
$abizena = $_SESSION['abizena'];
$emaila = $_SESSION['emaila'];
?>

<!DOCTYPE html>

<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erabiltzaile Informazioa</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>


<body>
    <header>
        <div class="header-line">
            XIKER, IKER ETA HEGOI
        </div>
    </header>

    <div class="container">
        <div class="login-box">
            <div class="title-box blue-background">
                <h2>Erabiltzailearen Informazioa</h2>
            </div>
            <form action="registrationConfirm.php" method="post">
                <div class="info-box">
                    <div class="info-item">
                        <p>Erabiltzaile izena:</p>
                        <div class="user-info">
                            <?php
                            echo "@" . $user; ?>
                        </div>
                    </div>

                    <div class="info-item">
                        <p>Izena:</p>
                        <div class="user-info">
                            <?php
                            echo $izena; ?>
                        </div>
                    </div>

                    <div class="info-item">
                        <p>Abizena:</p>
                        <div class="user-info">
                            <?php
                            echo $abizena; ?>
                        </div>
                    </div>

                    <div class="info-item">
                        <p>Emaila:</p>
                        <div class="user-info">
                            <?php
                            echo $emaila; ?>
                        </div>
                        <p><a href="index.html">Amaitu saioa</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>