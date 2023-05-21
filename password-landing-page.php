<?php
// non necessario
// require_once('./functions.php');

session_start();

if (isset($_SESSION['password'])) {
  $password = $_SESSION['password'];
} else {
  header('Location: ./index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
  <title>Password landing page</title>
</head>

<body class="bg-dark text-white text-center">

  <div class="container p-5 d-flex flex-column align-items-center">

    <h1 class="py-1">Generatore di password sicure</h1>

    <?php
    // stampo la password 
    // echo  "$password" ;
    echo "<div class='alert alert-primary my-3' role='alert'>
    <strong>Password generata:</strong>
    <h1 class='mt-3'>$password</h1>
    </div>";
    ?>

    <a href="index.php"><button href="index.php" class="btn btn-primary p-2 px-3">Torna alla homepage</button></a>


  </div>

</body>

</html>