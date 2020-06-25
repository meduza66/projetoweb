<?php include "header.php"; ?>
<div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
            

        <?php

          $ac = $_POST['velocidade'];
          $ab = 16;
          $ad = 100;
          $plani = 10;
          $resultado1 = $ac * $ab / $ad;
          $resultado2 = $ac + $resultado1;   
          $resu3 = $resultado2 / $plani; 
        ?>
  <section class="content">
      <div class="container-fluid">
               
            
                    <h3 class="card-title">Questão 9</h3>
                </div>

            <form action="" id="" name="" method="POST" class="form-group">
              <label for="">Desconto</label>
                <input type="text" id="velocidade" name="velocidade" class="form-control">
                

  
              
              <br>
              <button type="submit" class="btn btn-primary">Calcular pacelas </button>
            </form>

            <h1>Preço total </h1>
            
            <h3><p><?php echo $resultado2," Reais"; ?></p>
          
            </h3>
            
            <h1>Preço da pacela</h1>
            
            <h3><p><?php echo "10 pacelas de ", $resu3," Reais"; ?></p>
            
            </h3>
            </section>
        </div>
      </div>
  </div>

<?php include "footer.php"; ?>