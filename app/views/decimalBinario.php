<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Binario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="public/images/binary.png" width="15%" height="15%"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="?controller=conversiones&action=biDec">Decimal a Binario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="?controller=conversiones&action=decBi">Binario a Decimal</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container p-4 fadeIn">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="h3 mb-3 font-weight-normal text-center">Conversion de Binario a IP</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card card-body">
                <form method="post" action="?controller=conversiones&action=binarioDecimal">
                    <div class="form-group">
                        <input type="number" name="ip1" id="ip1" class="form-control" placeholder="Parte de IP 1" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="ip2" id="ip2" class="form-control" placeholder="Parte de IP 2" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="ip3" id="ip3" class="form-control" placeholder="Parte de IP 3" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="ip4" id="ip4" class="form-control" placeholder="Parte de IP 4" required>
                    </div>
                    <input type="submit" class="btn btn-success btn-block fadeIn fourth" name="register" value="Convertir">
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>