<?php
  $a_int = 1;
  $b_bool = FALSE ;
  $c_str = 'rodrigo';
  $d_str = "Juliete";
  
  // if ($b_bool != FALSE){
  //   echo 'Essa variável é verdade';
  // } else{
  //   echo'Essa variável é falsa';
  // }
    $cerveja = 'amstel';
  switch($cerveja)
  {
      case 'amstel';
      case 'stella artois';
      case 'heineken';
          echo 'Boa escolha';
          break;
      default;
          echo 'Por favor faça uma nova seleção...';
          break;
  }

  // echo 'Essa variável é do tipo:' .' '. gettype($d_str);


?>