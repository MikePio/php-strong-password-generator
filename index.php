<?php
$test = '$test';


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
    <div class="pb-2">Questo sito ti da la possibilità di generare una password sicura composta da almeno una lettera maiuscola, una lettera minuscola, carattere speciale e un numero.
      Il numero di caratteri della password viene scelto dall'utente.</div>

    <form>

      <div class="form-group py-3">
        <h4 class="py-1" >Inserisci la lunghezza della tua password</h4>
        <p class="py-1" >Il numero inserito rappresenta il numero di caratteri di cui la password deve essere composta.</p>
        <input type="number" class="form-control py-3" id="passwordLenght" placeholder="Inserisci il numero dei caratteri (min. 4, max. 20)">
      </div>

      <button type="submit" class="btn btn-primary p-2 px-3">Genera password</button>

    </form>

  </div>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>