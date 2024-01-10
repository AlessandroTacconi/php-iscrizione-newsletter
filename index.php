    <?php
        if (isset($_GET["email"])) {
            $email = $_GET["email"];
            if (str_contains($email, '@') && str_contains($email, '.')) {
                //Email valida
                echo '<div class="alert alert-success" role="alert">
                        Bravo, la tua e-mail è valida
                      </div>';
            } else {
                //Email non valida
                echo '<div class="alert alert-danger" role="alert">
                        Mi dispiace, la tua e-mail non è valida
                      </div>';
            }
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>PHP Iscrizione Newsletter</title>
</head>
<body>
  <div class="container text-center">
    <h2>Iscrizione Newsletter</h2>
    <!-- form -->
    <form action="index.php" method="get">
      <div class="mb-3">
        <label for="email" class="form-label">La Tua Email</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="email">
      </div>
      <button type="submit" class="btn btn-primary">Invia</button>
    </form>
    <!-- /form -->

  </div>
</body>
</html>


