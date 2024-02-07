<?php
function generatorPsw($number){
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*";
    $password = "";
    for ($i=0; $i < $number ; $i++) { 
        $randomPosition = rand(0 , strlen($characters)-1);
        $password .= $characters[$randomPosition];
    }
    return $password;
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
                        <div class="mb-3">
                            <label class=" form-label " for="lengthPsw">
                                Inserisci la lunghezza della password da generare
                            </label>
                            <input class=" form-control w-25 " type="number" name="lengthPsw" id="lengthPsw" min="5" max="20" placeholder="Inserisci un numero da 5 a 20">
                        </div>
                        <div class="d-flex justify-content-center ">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </section>
            <section>
                <div class="container">
                    <div id="result">
                        <?php
                        if (!isset($_GET['lengthPsw'])) {
                            echo "Genera la tua password";
                        }
                        else{
                            echo "Password generata: ";
                            echo generatorPsw(intval($_GET['lengthPsw']));
                            echo " lunghezza di :". $_GET['lengthPsw'];
                        }
                        ?>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>