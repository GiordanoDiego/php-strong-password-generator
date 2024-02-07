<?php
    include __DIR__.'/functions.php'; 
    session_start();

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
                    <div class="col-12" >
                        <form action="" method="$_GET">
                            <div class="mb-2">
                                <input type="checkbox" id="containsNum" name="containsNum" value="1" checked>
                                <label for="containsNum"> Numeri </label>
                                
                                <input type="checkbox" id="containsLett" name="containsLett" value="1"  checked>
                                <label for="containsLett"> Lettere </label>
                                
                                <input type="checkbox" id="containsSC" name="containsSC" value="1" checked>
                                <label for="containsSC"> Simboli speciali (*&?!-) </label>
                            </div>
                            <label for="lengthPSW">Inserisci lunghezza password da generare: </label>
                            <input type="number" id="lengthPSW" min="8" max="20" name="lengthPSW">
                            <button class=" ms-2 btn btn-success">Genera!</button>
                        </form>
                        <hr>
                    </div>
                    
                    <!-- salvo lunghezza e password generata in sessione -->
                    <div class="col-12">
                    <?php 
                        if(isset($_GET["lengthPSW"]) && !empty($_GET["lengthPSW"])){ //controllo sl'array get[lengthPSW] esiste o se è vuoto
                            $_SESSION["pswLength"] = $_GET["lengthPSW"];
                           
                            if(!isset($_GET["containsNum"])) {
                                $_GET["containsNum"] = 0;
                            }
                            if(!isset($_GET["containsLett"])) {
                                $_GET["containsLett"] = 0;
                            }
                            if(!isset($_GET["containsSC"])) {
                                $_GET["containsSC"] = 0;
                            }
                            $_SESSION["pswGenerated"] = getName($_GET["lengthPSW"], $_GET["containsNum"], $_GET["containsLett"], $_GET["containsSC"]);
                            header('Location: ./passwordGenerated.php');
                        }else{
                            echo '<p class="text-danger text-center fs-5 ">Inserisci una lunghezza valida (8-20 caratteri)</p>';
                        }    
                    ?>
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