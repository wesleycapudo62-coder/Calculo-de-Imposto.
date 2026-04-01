<! DOCTYPE html>
<html>
<head>
</head>
<body>
          
          <p>Calculo de imposto</p>

          <form method="POST" action="">
              <label>digite seu salario:</label>
              <input type="text" name="salario">
              
              <input type="submit" value="calcular">
              </form>
              <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $salario = floatval ($_POST[ 'salario']);
              

              $aliquota= 0;
              $parcela= 0;

              if ($salario <= 2259.20) {
                $aliquota = 0;
                $parcela = 0;
              }
               
              elseif ($salario >= 2259.21 && $salario <= 2826.65) {
                $aliquota= 7.5;
                $parcela= 169.44;
              }

              elseif ($salario >= 2826.66 && $salario <= 3751.05) {
                $aliquota= 15;
                $parcela= 381.44;
                
              }


             elseif ($salario >= 3751.06 && $salario <= 4664.68) {
                $aliquota= 22.5;
                $parcela= 662.77;
             }


             else {
                  $aliquota= 27.5;
                  $parcela= 896.00;
                  
             }  

                  echo "Aliquota: $aliquota% <br>";
                  echo "Parcela a deduzir: R$ $parcela";
                  
                  
              }
                  ?>
