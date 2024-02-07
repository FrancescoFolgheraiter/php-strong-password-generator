<?php
    session_start();
    var_dump($_SESSION);
    if (isset($_GET['lengthPsw'])){
        $_SESSION["lunghezza"] = intval($_GET['lengthPsw']);
        $_SESSION["numeri"] = $_GET['numeri'];
        $_SESSION["lettere"] = $_GET['lettere'];
        $_SESSION["simboli"] = $_GET['simboli'];
        $_SESSION["repeat"]  = $_GET['repeat'];  
        header("Location: ./partials/result.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Strong password generator</title>
        <!--boostrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <h1 class="text-center mb-5">
                password generator
            </h1>
        </header>
        <main>
            <section>
                <div class="container">
                    <form action="" method="get">
                        <!--prima parte del form-->
                        <div class="mb-3">
                            <label class=" form-label " for="lengthPsw">
                                Inserisci la lunghezza della password da generare
                            </label>
                            <input class=" form-control w-25 " type="number" name="lengthPsw" id="lengthPsw" min="5" max="20" required placeholder="Inserisci un numero da 5 a 20">
                        </div>
                        <!--seconda  parte del form con opzioni avanzate-->
                        <div class="d-flex justify-content-around ">
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="numeri" name="numeri" id="numeri" checked>
                                    <label class="form-check-label" for="numeri">
                                        numeri
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="lettere" name="lettere" id="lettere" checked>
                                    <label class="form-check-label" for="lettere">
                                        lettere
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="simboli" name="simboli" id="simboli" checked>
                                    <label class="form-check-label" for="simboli">
                                        simboli
                                    </label>
                                </div>
                            </div>
                            <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="repeat" id="repeat" value="repeat">
                                <label class="form-check-label" for="repeat">
                                    Ripeti caratteri
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="repeat" id="no-repeat" value="no-repeat">
                                <label class="form-check-label" for="no-repeat">
                                    Non ripetere carattere
                                </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center ">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </section>
            
        </main>
    </body>
</html>