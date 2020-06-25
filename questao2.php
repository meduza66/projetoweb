<?php include "header.php"; ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">

          <?php

            $num1 = $_POST['numero1'];
            $num2 = $_POST['numero2'];
            $num3 = $_POST['numero3'];

            $media = $num1 + $num2 + $num3 / 3;
        
          ?>

            <form action="" id="" name="" method="POST" class="form-group">
              <label for="">Numero 1</label>
                <input type="text" id="numero1" name="numero1" class="form-control">

              <label for="">Numero 2</label>
                <input type="text" id="numero2" name="numero2" class="form-control">
                
              <label for="">Numero 3</label>
                <input type="text" id="numero3" name="numero3" class="form-control">
              
              <br>
              <button type="submit" class="btn btn-primary">Calcular</button>
            </form>

            <h1>Resultado</h1>
            <p><?php echo $media; ?></p>

        </div>
      </div>
  </div>

<?php include "footer.php"; ?>




    