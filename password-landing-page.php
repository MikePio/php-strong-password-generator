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
    <h1 id='password-output' class='mt-3'>$password</h1>
    </div>";
    ?>

    <div class="d-flex flex-wrap">
      <a href="index.php"><button class="btn btn-primary p-2 px-3 me-2">Torna alla homepage</button></a>
      <button onclick="copyToClipboard()" class="btn btn-primary p-2 px-4">Copia password</button>
    </div>


  </div>

<script>

  function copyToClipboard() {
  /* Trova l'elemento <div> contenente la stringa da copiare */
  var divElement = document.getElementById("password-output");

  /* Crea un elemento di input temporaneo */
  var tempInput = document.createElement("input");
  
  /* Assegna il valore della stringa da copiare all'input temporaneo */
  tempInput.value = divElement.textContent;
  
  /* Aggiungi l'input temporaneo al documento */
  document.body.appendChild(tempInput);
  
  /* Seleziona il testo nell'input temporaneo */
  tempInput.select();
  
  /* Copia il testo negli appunti del sistema operativo */
  document.execCommand("copy");
  
  /* Rimuovi l'input temporaneo dal documento */
  document.body.removeChild(tempInput);
  
  /* Notifica l'utente che la copia è stata effettuata */
  alert("Testo copiato negli appunti!");
}


</script>

</body>

</html>