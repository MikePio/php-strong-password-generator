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
        echo "<div class='alert alert-primary my-3' role='alert'>
        <strong>Password generata:</strong><h1 class='mt-3'>$password</h1>
        </div>";

        // var_dump($password); per verificare la lunghezza
        // var_dump($password);
      }
      

    }



}

?>    