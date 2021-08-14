<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include("head.php") ?>
  <body class="container">
<br>

    <form class="" action="bhaskara.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="a_min">Digite o número mínimo de A (a)</label>
      <input type="text" class="form-control" name="a_min" value="">
    </div>
      <div class="form-group col-md-6">
      <label for="Amax">Digite o número máximo de A (a)</label>
      <input type="text" class="form-control" name="Amax" value="">
    </div>  
  </div>
  
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="b_min">Digite o número mínimo de B (b)</label>
      <input type="text" class="form-control" name="b_min" value="" >
    </div>
     <div class="form-group col-md-6">
      <label for="Bmax">Digite o número máximo de B (b)</label>
      <input type="text" class="form-control" name="Bmax" value=" " >
    </div >
    
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="c_min">Digite o número mínimo de C (c)</label>
      <input type="text" class="form-control" name="c_min" value="" >
    </div>
     <div class="form-group col-md-6">
      <label for="Cmax">Digite o número máximo de C (c)</label>
      <input type="text" class="form-control" name="Cmax" value="" >
    </div>  
    
  </div>
  <div>
    <center>
      <input type="reset" value="Limpar">
      <input type="submit"value="Enviar">
    </center>        
  </div>
</form>


  </body>
</html>