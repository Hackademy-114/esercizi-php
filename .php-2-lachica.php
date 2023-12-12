<?php

  $password = readline('Inserisci la password: ');

  
function checkPassword($password) {
    // Verifica lunghezza minima
    if (strlen($password) < 8) {
        echo "La password deve essere lunga almeno 8 caratteri.<br>";
        return false;
    }

//   caratteri e numericiJ


//   global
  function checkPassword($string){
    return checkLenght($string) && checkUpper($string) && checkSpecial($string) && checkNumber($string)
  };
  (checkPassword($passord));

  if (checkPassword($password)) {
    echo "Password accettata";
  }else{
    while((checkPassword($password) ==true));
    echo "Password non accettata \n";
    $password = readline("reimposta password: ");
    var_dump(checkPassword($password2));
  }