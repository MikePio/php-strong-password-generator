<?php

// collegamento con il file functions.php in cui sono incluse tutte le funzioni necessarie
require_once('./functions.php');

$min = 4;
$max = 20;

/* utilizzato per ottenere l'action del form dinamicamente: action=<?php echo $_SERVER['PHP_SELF'] ?> */
// var_dump($_SERVER);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' /> -->
  <title>PHP HOTEL</title>
</head>

<body class="bg-dark text-white">
  <div class="container p-5">
    <h1 class="py-1">Generatore di password sicure</h1>
    <div class="pb-2">Questo sito ti da la possibilità di generare una password sicura composta da almeno una lettera maiuscola, una lettera minuscola, carattere speciale e un numero. Il numero di caratteri della password viene scelto dall'utente.</div>

    <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="GET">
    <!-- STESSA COSA DI -->
    <!-- <form action="index.php" method="GET"> -->

      <div class="form-group py-3">
        <h4 class="py-1" >Inserisci la lunghezza della tua password</h4>
        <p class="py-1" >Il numero inserito rappresenta il numero di caratteri di cui la password deve essere composta.</p>
        <?php echo "<input autofocus name='passwordLength' type='number'  min='$min' max='$max'  class='form-control py-3' id='passwordLength' placeholder='Inserisci il numero dei caratteri (min. $min, max. $max)'>"?>
      </div>

      <button type="submit" class="btn btn-primary p-2 px-3">Genera password</button>

    </form>

  <?php
    //funzione che stampa la lunghezza della password
    sendFormValue();

    //funzione che stampa la password generata    
    // if (isset($_GET['passwordLength'])) {
    //   $passwordLength = $_GET['passwordLength'];
    //   generatePassword($passwordLength);
    // };









  ?>    

  </div>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>