<?php
include_once 'funcoes.php';
echo '<pre>';

$a_min = $_POST['a_min'];
$Amax = $_POST['Amax'];
$b_min = $_POST['b_min'];
$Bmax = $_POST['Bmax'];
$c_min = $_POST['c_min'];
$Cmax = $_POST['Cmax'];

$a_valores = array();
for ($i = $a_min; $i <= $Amax; $i++) {
  $a_valores[] = $i;
 
}
$b_valores = array();
for ($i= $b_min; $i <= $Bmax; $i++) {
  $b_valores[] = $i;
 
}
$c_valores = array();
for ($i= $c_min; $i <= $Cmax; $i++) {
 $c_valores[] = $i;
}


 
$resultados = array();

foreach ($a_valores as $chave_a => $valor_a) {
  foreach ($b_valores as $chave_b => $valor_b) {
    foreach ($c_valores as $chave_c => $valor_c) {
      $resultado_temp = calc_bhaskara($valor_a, $valor_b, $valor_c);
      if($resultado_temp != NULL && $resultado_temp['x1'] != NULL && $resultado_temp['x2'] != NULL){
      $resultados[] = $resultado_temp;
    }
    }
  }
}

var_dump($resultados);

$result = calc_bhaskara($a_min, $b_min, $c_min);

var_dump($result);
connect_and_write_db($a_min, $b_min, $c_min, $delta_ret, $x1_ret, $x2_ret);


 



 ?>
