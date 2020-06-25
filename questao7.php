<?php include "header.php"; ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">

        <?php
                    //Número informados pelo usuário
                    $num1 = $_POST['n1']; //Valor do usuario
                    $num2 = $_POST['n2']; //Valor do usuario
                    $j  = 0;
                    $soma = 0;
                    //Alimentar o vetor A com 100 posições
                    for($i=1;$i<=100;$i++){
                        $a[$i-1] = rand($num1,$num2);
                    }

                    //Identificar os numeros pares e armazenar no vetor B com no maximo 10 posições
                    for($i=1;$i<=100;$i++){

                        //Verificando se o numero é PAR
                        if(($a[$i-1]%2) == 0){
                        //Controlando quantidade de 10 valores no vetor B
                        if($j <= 9){
                            $b[$j] = $a[$i-1];
                            //Soma dos numeros pares
                            $soma = $soma + $b[$j];
                        }
                            $j++;

                        }
                    }





                ?>
                
                <form action="" id="" name="" method="POST" class="form-group">
                <label for="">Numero 1</label>
                  <input type="text" id="n1" name="n1" class="form-control">
  
                <label for="">Numero 2</label>
                  <input type="text" id="n2" name="n2" class="form-control">
                
                <br>
                <button type="submit" class="btn btn-primary">Calcular</button>
              </form>
  
              <h1>Resultado</h1>
              <p><?php echo $soma; ?></p>
  
          </div>
        </div>
    </div>
  
  <?php include "footer.php"; ?>
  