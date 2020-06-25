<?php include "header.php"; ?>
<div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
<?php
    
    $comb   =   $_POST['combustivel'];
    $dist   =   $_POST['distancia'];
    
    

    function consumo($dist,$comb){
        $consumo_medio = ($dist/$comb);
        return $consumo_medio;
    }
?>

 

  
    <section class="content">
      <div class="container-fluid">
               
           
                    <h3 class="card-title">Questão 10</h3>
                    <br>
                </div>
               <form name="form_consumo" id="form_consumo" action="" method="POST" class="form-horizontal">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="distancia" class="col-sm-2 col-form-label">Distância</label>
                        <div class="col-sm-10">
                        <input type="number" min="1" class="form-control" id="distancia" name="distancia" placeholder=>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="combustivel" class="col-sm-2 col-form-label">Combustível</label>
                        <div class="col-sm-10">
                          
                        <input type="number" min="1" class="form-control" id="combustivel" name="combustivel" placeholder=>
                        </div>
                    </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-info">Calcular</button>
                    
                    <!-- /.card-footer -->
                </form>
            </div>
    
            <?php echo "Consumo médio de seu veículo é: ".consumo($dist,$comb)."Km/lts.";?>
    
    
      </div>
    </section>
    </section>
  </div>
>

  </body>
</html>




    