<?php
    function getName($n) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ?!-*$&';
        $randomString = '';
     
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
     
        return $randomString;
    };
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FONT-FAMILY -->

        <!-- LINK CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <!-- TITLE PAGE -->
        <title>Password Generator</title>
    </head>

        <!-- START BODY -->
    <body class="debug">
        <!-- START MAIN HEADER -->
        <header>
            <div class="container text-center ">
                <h1>
                    Password Generator
                </h1>
            </div>
        </header>
        <!-- END MAIN HEADER -->

        <!-- START MAIN -->
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="" method="$_GET">
                            <label for="lengthPSW">Inserisci lunghezza password da generare: </label>
                            <input type="number" id="lengthPSW" min="8" max="20" name="lengthPSW">
                            <button class=" ms-2 btn btn-success">Genera!</button>
                        </form>
                        <hr>
                    </div>
                    <div class="col-12">
                        <p>
                            Lunghezza password scelta: 
                            <?php 
                                if(isset($_GET["lengthPSW"]) && !empty($_GET["lengthPSW"])){ //controllo se l'array get[lengthPSW] esiste o se è vuoto
                                    echo $_GET["lengthPSW"];
                                }    
                            ?>
                        </p>
                        <hr>
                        <div>
                            <h6>
                                La password di lunghezza 
                                <strong>
                                    <?php 
                                        if(isset($_GET["lengthPSW"]) && !empty($_GET["lengthPSW"])){
                                            echo $_GET["lengthPSW"]; 
                                        }?>
                                </strong> 
                                generata casualmente è:
                                <?php 
                                    if(isset($_GET["lengthPSW"]) && !empty($_GET["lengthPSW"])){
                                        echo getName($_GET["lengthPSW"]);
                                    }?> 
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- END MAIN -->

        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="./js/script.js"></script>
    </body>
</html>