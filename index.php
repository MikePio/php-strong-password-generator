<?php
function sendFormValue(){
  if (isset($_GET['passwordLength'])) {
    $passwordLength = $_GET['passwordLength'];
    echo "<h1 class='py-5'>$passwordLength</h1>";
  //OPPURE
  // }else{
    // echo "";
  }
}

function generatePassword($passwordLength){
  //creo un array vuoto dove pusherò ogni carattere
  $passwordArray = [];

  //array delle lettere minuscole

  //array delle lettere maiuscole

  //array dei numeri

  //array dei caratteri speciali

//TODO bozza da finire della funzione per generare la password
  // controllo della lunghezza dell'array in base al numero inserito nell'input(in questo caso è il parametro della funzione)
  if (count($passwordArray) < $passwordLength) {
    
    var_dump($passwordArray);
  } else {
    // join viene utilizzato per restituire una stringa dagli elementi di un array
    $passwordGenerated = join('', $passwordArray);
    // join e implode sono la stessa cosa
    $passwordGenerated = implode('', $passwordArray);

    // stampo la password
    echo "<h1 class='py-5'>$passwordGenerated</h1>";
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
        <input name="passwordLength" type="number" min="4" max="20" class="form-control py-3" id="passwordLength" placeholder="Inserisci il numero dei caratteri (min. 4, max. 20)">
      </div>

      <button type="submit" class="btn btn-primary p-2 px-3">Genera password</button>

    </form>

  <?php
    //funzione che stampa la lunghezza della password
    sendFormValue();

    //funzione che stampa la password generata
    // generatePassword($passwordLength);



  //* tutte le lettere minuscole dalla a alla z 
  echo "<br>";
  foreach( range('a', 'z') as $elements) {
    echo $elements . " ";
  }

  //* lettere minuscole random
  echo "<br>";
  // chr viene utilizzato per convertire un numero intero in un carattere corrispondente nella codifica dei caratteri
  $letter = chr(rand(97,122));
  echo $letter;


  
  //* tutte le lettere maiuscole dalla A alla Z 
  echo "<br>";
  foreach( range('A', 'Z') as $elements) {
    echo $elements . " ";
  }
  
  //* lettere maiuscole random
  echo "<br>";
  // chr viene utilizzato per convertire un numero intero in un carattere corrispondente nella codifica dei caratteri
  $letter = chr(rand(65,90));
  echo $letter;



  //* tutti i numeri da 1 a 9
  echo "<br>";
  foreach( range('1', '9') as $elements) {
      echo $elements . " ";
  }

  //* numeri random
  echo "<br>";
  echo rand(0, 9);



  //* tutti i caratteri speciali
  echo "<br>";
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
  foreach($specialCharacters as $elements) {
    echo "$elements ";
  }

  echo "<br>";
  //* caratteri speciali random
  // $randomSpecialCharacters = array_rand($specialCharacters, $passwordLength);
  $randomSpecialCharacters = array_rand($specialCharacters, 2);
  echo $specialCharacters[$randomSpecialCharacters[0]] . "<br>";
  echo $specialCharacters[$randomSpecialCharacters[1]] . "<br>";


  ?>    

  </div>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>