<?php 
    session_start();
    include __DIR__. '/function.php';
    if(empty(!$_SESSION['password']) && $_GET['password'] != '' ){        
        $password = rand_string($_GET['password']);
    }
    else{
        header("Location:./index.php?error=Iserire la lunghezza");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
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
                                <div class="info rounded-1 p-4 mt-5 text-center">
                                    <span class="fs-5">Password generato: <?php echo $password ?></span>
                                </div>
                            </div>
                        </div>
                    </div>              
                </div>
            </div>
        </main>
    </body>
</html>