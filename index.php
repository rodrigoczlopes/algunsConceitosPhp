<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Exemplo</title>
   <meta charset = "UTF-8">
</head>
<body>
   <form action="" method="post" >
      Primeiro Numero: <input name="num1" type="text"><br>
      Segundo Numero: <input name="num2" type="text"><br>
      Terceiro Numero: <input name="num3" type="text"><br> 
      <input type="submit" name="operacao" value="+">     
      <input type="submit" name="operacao" value="-">     
      <input type="submit" name="operacao" value="*">     
      <input type="submit" name="operacao" value="/">     
   </form> 
<?php

   $a = $_POST['num1'];
   $b = $_POST['num2'];
   $op= $_POST['operacao'];

   if( !empty($op) ) {
      if($op == '+')
         $d = $a + $b + $c;
      else if($op == '-')
         $d = $a - $b - $c;
      else if($op == '*')
         $d = $a*$b*$c;
      else
         $d = $a/$b/$c;

      echo "O resultado da operação é: $c";
   }
?>       
</body>

</html>