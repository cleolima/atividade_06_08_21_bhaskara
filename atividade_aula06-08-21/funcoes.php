<?php


function calc_delta($a_min, $b_min, $c_min)
{
  $delta_ret = ($b_min * $b_min) - (4 * $a_min * $c_min);

  return $delta_ret;
}

function calc_x1($a_min, $b_min, $delta_vlr)
{
  $x1_ret = (-$b_min + sqrt($delta_vlr)) / (2 * $a_min);

  return $x1_ret;
}

function calc_x2($a_min, $b_min, $delta_vlr)
{
  $x2_ret = (-$b_min - sqrt($delta_vlr)) / (2 * $a_min);

  return $x2_ret;
}

function calc_bhaskara($a_min, $b_min, $c_min)
{
  if($a_min == 0) {

    return NULL;
  }

  $ret = array();
  $ret['delta'] = calc_delta($a_min, $b_min, $c_min);

  if($ret['delta'] < 0)   {
      $ret['x1'] = NULL;
      $ret['x2'] = NULL;

      return $ret;
  } else if($ret['delta'] == 0) {
    $ret['x1'] = calc_x1($a_min, $b_min, $ret['delta']);
    $ret['x2'] = NULL;

    return $ret;
  } else {
    $ret['x1'] = calc_x1($a_min, $b_min, $ret['delta']);
    $ret['x2'] = calc_x2($a_min, $b_min, $ret['delta']);
  }

  return $ret;
}
//== inserir no banco de dados ==
function get_insert_sql($a_min, $b_min, $c_min, $delta_ret, $x1_ret, $x2_ret)
{
 $query = "insert into bhaskara (a_min, b_min, c_min, delta, x1, x2) values ('$a_min','$b_min','$c_min','$delta_ret','$x1_ret', '$x2_ret')";
  return($query);
}

function connect_and_write_db($a_min, $b_min, $c_min, $delta_ret, $x1_ret, $x2_ret){
  $conn = mysqli_connect('localhost', 'root', '', 'ds3semestre');


  $query = get_insert_sql($a_min, $b_min, $c_min, $delta_ret, $x1_ret, $x2_ret);

  $result = mysqli_query($conn, $query);
}



 ?>
