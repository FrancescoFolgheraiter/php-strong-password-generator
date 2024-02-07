<?php
session_start();
var_dump($_SESSION["lunghezza"])
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Passowrd generated</title>
    </head>
    <body>

        <header>

        </header>
        <main>
            <section>
                <div class="container">
                    <div id="result">
                        <?php
                        if (!empty($_SESSION["lunghezza"])) {
                            include __DIR__ ."./function.php";
                            echo "Password generata: ";
                            echo "<h2>".generatorPsw($_SESSION["lunghezza"])."</h2>";
                            echo " lunghezza di :".$_SESSION["lunghezza"];
                        }
                        else{
                            echo "Genera la tua password";
                        }
                        ?>
                    </div>
                    <div>
                        <a href="killSession.php">
                            Esci
                        </a>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>