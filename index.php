<?php
function sendFormValue(){
  if (isset($_GET['passwordLength'])) {
    $passwordLength = $_GET['passwordLength'];
    // echo "<h1 class='py-5'>$passwordLength</h1>";
    generatePassword($passwordLength);

  //OPPURE
  // }else{
    // echo "";
  }
}

function generatePassword($passwordLength){


    //* lettere minuscole random
    // echo "<br>";
    // chr viene utilizzato per convertire un numero intero in un carattere corrispondente nella codifica dei caratteri
    // $randomLowercaseLetter  = chr(rand(97,122));
    // echo $randomLowercaseLetter;
    
    //* lettere maiuscole random
    // echo "<br>";
    // chr viene utilizzato per convertire un numero intero in un carattere corrispondente nella codifica dei caratteri
    // $randomUppercaseLetter  = chr(rand(65,90));
    // echo $randomUppercaseLetter ;
  
    //* numeri random
    // echo "<br>";
    // $randomNumber = rand(0, 9);
    // echo $randomNumber;
  
    //* tutti i caratteri speciali
    // echo "<br>";
    $specialCharacters = [
      '!',
      '@', 
      '#', 
      '$', 
      '%', 
      '^',
      '&', 
      '*'
    ];
  
    // echo "<br>";
    //* caratteri speciali random
    // $randomSpecialCharacters = array_rand($specialCharacters, $passwordLength);
    // $randomSpecialCharacters = array_rand($specialCharacters, 2);
    // echo $specialCharacters[$randomSpecialCharacters[0]] . "<br>";
    // echo $specialCharacters[$randomSpecialCharacters[1]] . "<br>";
    // $randomSpecialCharacter = $specialCharacters[$randomSpecialCharacters[0]];
    // echo $randomSpecialCharacter;
  
    //* password con 4 caratteri
    // $password = "$randomLowercaseLetter$randomUppercaseLetter$randomNumber$randomSpecialCharacter";
    // echo $password;
    

  //   //creo una stringa vuota dove pusherò ogni carattere
  //   $password = '';

  // // controllo della lunghezza dell'array in base al numero inserito nell'input(in questo caso è il parametro della funzione)
  // if (strlen($password) < $passwordLength) {
  //   $password .= "$randomLowercaseLetter";
  // } 
  // if (strlen($password) < $passwordLength) {
  //   $password .= "$randomUppercaseLetter";
  // } 
  // if (strlen($password) < $passwordLength) {
  //   $password .= "$randomNumber";
  // } 
  // if (strlen($password) < $passwordLength) {
  //   $password .= "$randomSpecialCharacter";
  // } 
  // if (strlen($password) == $passwordLength) {
  //   // join viene utilizzato per restituire una stringa dagli elementi di un array
  //   // $passwordGenerated = join('', $password);
  //   // join e implode sono la stessa cosa
  //   // $passwordGenerated = implode('', $password);

  //   // stampo la password
  //   echo "<h1 class='py-5'>$password</h1>";
  //   var_dump($password);
  // }

  // ciclo for
    // $password = '';

    // // Se la password è più lunga di 5 caratteri, ne prendiamo solo i primi 5 caratteri
    // $password = substr($password, 0, $passwordLength);
    // // Stampa la stringa $password
    // echo $password;

  
  $passwordLength = $_GET['passwordLength'];

  $password = '';

    while (strlen($password) < $passwordLength) {
      // controllo della lunghezza dell'array in base al numero inserito nell'input(in questo caso è il parametro della funzione)
      if (strlen($password) < $passwordLength) {
        //* lettere minuscole random
        $randomLowercaseLetter  = chr(rand(97,122));
        $password .= "$randomLowercaseLetter";
      } 
      if (strlen($password) < $passwordLength) {
        //* lettere maiuscole random
        $randomUppercaseLetter  = chr(rand(65,90));
        $password .= "$randomUppercaseLetter";
      } 
      if (strlen($password) < $passwordLength) {
        //* numeri random
        $randomNumber = rand(0, 9);
        $password .= "$randomNumber";
      } 
      if (strlen($password) < $passwordLength) {
        //* caratteri speciali random
        $randomSpecialCharacters = array_rand($specialCharacters, 2);
        $randomSpecialCharacter = $specialCharacters[$randomSpecialCharacters[0]];
        $password .= "$randomSpecialCharacter";
      } 
      if (strlen($password) == $passwordLength) {
        // join viene utilizzato per restituire una stringa dagli elementi di un array
        // $passwordGenerated = join('', $password);
        // join e implode sono la stessa cosa
        // $passwordGenerated = implode('', $password);

        //* str_shuffle() mescola casualmente tutti i caratteri di una stringa
        $password = str_shuffle($password);

        // stampo la password
        echo "<h1 class='pt-5'>Password generata:</h1>";
        echo "<h1 class='py-5 pt-3'>$password</h1>";
        // var_dump($password); per verificare la lunghezza
        // var_dump($password);
      }
      

    }



}

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

    <form action="index.php" method="GET">

      <div class="form-group py-3">
        <h4 class="py-1" >Inserisci la lunghezza della tua password</h4>
        <p class="py-1" >Il numero inserito rappresenta il numero di caratteri di cui la password deve essere composta.</p>
        <input autofocus name="passwordLength" type="number" min="4" max="20" class="form-control py-3" id="passwordLength" placeholder="Inserisci il numero dei caratteri (min. 4, max. 20)">
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