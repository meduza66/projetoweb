<?php include "header.php"; ?>

<div class="content-wrapper">
    
      <div class="content-header">
        <div class="container-fluid">
        <section class="content">
      <div class="container-fluid">
               
           
                    <h3 class="card-title">Questão 8</h3>
                    <br>
                </div>
                <?php
 
 $a01 = filter_input(INPUT_POST, "txtNumero1");
 $b02 = filter_input(INPUT_POST, "txtNumero2");
 $opera = filter_input(INPUT_POST, "slOperacao");
 $resul = "";
  
 if($a01  && $b02){
   switch($opera){
     case "+":
       $resul = ($a01 + $b02);
     break;
     case "-":
       $resul = ($a01 - $b02);
     break;
     case "*":
       $resul = ($a01 * $b02);
     break;
     case "/":
       $resul = ($a01 / $b02);
     break;
   }
 }
  
 ?>
 
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Operações</title>
     <style>
      input, select{padding:10px; margin: 5px;}
     </style>
   </head>
   <body>
     <h1><?=$resul;?></h1>
     <form method="post">
       <label>Número 1: <input type="text" name="txtNumero1"/></label><br>
       <label>Número 2: <input type="text" name="txtNumero2"/></label><br>
       <label>Operação:
         <select name="slOperacao">
           <option value="+">Adição</option>
           <option value="-">Subtração</option>
           <option value="*">Multiplicação</option>
           <option value="/">Divisão</option>
         </select>
       </label><br><br><br>
       <input type="submit" name="btnCalcular" value="Calcular">
     </form>
     <?php
 
 $a01 = filter_input(INPUT_POST, "txtNumero1");
 $b02 = filter_input(INPUT_POST, "txtNumero2");
 $opera = filter_input(INPUT_POST, "slOperacao");
 $resul = "";
  
 if($a01  && $b02){
   switch($opera){
     case "+":
       $resul = ($a01 + $b02);
     break;
     case "-":
       $resul = ($a01 - $b02);
     break;
     case "*":
       $resul = ($a01 * $b02);
     break;
     case "/":
       $resul = ($a01 / $b02);
     break;
   }
 }
  
 ?>
   </body>
 </html>
 </section>
 </div>
        </div>
      </div>
  

<?php include "footer.php"; ?>
