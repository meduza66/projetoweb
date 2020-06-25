<?php include "header.php"; ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
        <section class="content">
      <div class="container-fluid">
               
            
                    <h3 class="card-title">Questão 6</h3>
                </div>
        <?php

          $ac = $_POST['velocidade'];
          $ab = 7;
          $ad = 100;
          $resultado1 = $ac * $ab / $ad;
          $resultado2 = $ac -$resultado1;    
        ?>

            <form action="" id="" name="" method="POST" class="form-group">
              <label for="">Desconto</label>
                <input type="text" id="velocidade" name="velocidade" class="form-control">

  
              
              <br>
              <button type="submit" class="btn btn-primary">Calcular Desconto </button>
            </form>

            <h1>Preço com desconto </h1>
            
            <h3><p><?php echo $resultado2," Reais"; ?></p>
            <p><?php echo $ac," Valor sem desconto "; ?></p>
            </h3>
            </section>
        </div>
      </div>
  </div>

<?php include "footer.php"; ?>