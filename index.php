<?php
    include __DIR__. '/function.php';

    if(isset($_GET['password']) && $_GET['password'] !== ''){   
        $password = rand_string($_GET['password']);
    }
    elseif(isset($_GET['password']) && $_GET['password'] === ''){
        $error ='Nessun parametro valido inserito';
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet"  href="./css/style.css">
        <title>Document</title>
    </head>
    <body>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="fw-semibold text-secondary">Strong Password Generator</h1>
                        <h2 class="fw-semibold text-white">Genera una password sicura</h2>
                    </div>
                </div>
                <div class="row justify-content-center">      
                    <div class="col-8">
                        <div class="row">
                            <div class="col-12">
                            <?php if(isset($error)) { ?>
                                <div class="info rounded-1 p-4">
                                    <span class="fs-5"><?php echo $error; ?></span>
                                </div>
                            <?php } ?>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="bg-white rounded-1">
                                    <form action="./index.php" method="GET">
                                        <div class="d-flex p-4">
                                            <div class="col-sm-6">
                                                <label for="inputPassword6" class="col-form-label fs-5">lunghezza password:</label>
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="password" name="password" id="inputPassword6" class="form-control" placeholder="numero">
                                            </div>                                        
                                        </div>
                                        <div class="px-4">
                                            <span class="fw-semibold fs-5">Password generato:</span>
                                            <p><?php echo $password; ?></p>
                                        </div>
                                        <div class="col-sm-12 p-4">
                                            <button type="submit" class="btn btn-primary">Invia</button>
                                            <button type="cancel" class="btn btn-secondary">Annulla</button>
                                        </div>
                                    </form>
                                </div>  
                            </div>
                        </div>
                    </div>              
                </div>
            </div>
        </main>
    </body>
</html>