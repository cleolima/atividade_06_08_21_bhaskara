<?php 

class Dados{

	function __construct()
	{
		$this->a= 2;
		$this->b= -16;
		$this->c= -18;

		$this->delta= null;
		$this->x1= null;
		$this->x2= null;
	}


}

class Delta extends Dados{

	public function calc_delta()
{
  $this->delta = ($this->b * $this->b) - (4 * $this->a * $this->c);

  return $this->delta;

  if($this->delta >= 0) {

    $this->resultado = $this->delta;

  } else {
    $this->resultado = 'NAO EXISTE';
  }
  return($this->resultado);
  
}

	
}

class ValorXs extends Dados{

public function x1()
{
  $this->x1 = (- $this->b + sqrt($this->delta)) / (2 * $this->a);
  return $this->x1;
}

public function x2()
{
  
  if($this->delta == 0 ) {

    $this->x2 = NULL;

  } else {

    $this->x2 = (- $this->b - sqrt($this->delta)) / (2 * $this->a);
  }
  return $this->x2;
}


}


//instancia as classes
$dados = new Dados;
$delta_valor = new Delta();
$x_valor = new ValorXs();

echo "<pre>";

//exibe os valores de a, b e c
var_dump($dados->a);
var_dump($dados->b);
var_dump($dados->c);
echo "<br>";
//calcula delta e exibe valor de delta
$delta_valor->calc_delta();
var_dump($delta_valor->delta);


//defino o valor de delta na classe ValorXs
$x_valor->delta = $delta_valor->delta;


//calcula x1 e exibe valor de x1
$x_valor->x1();
var_dump($x_valor->x1);

//calcula x2 e exibe valor de x2
$x_valor->x2();
var_dump($x_valor->x2);


//inclui nas variaveis de saída de dados os valores de delta, x1 e x2
$dados->delta = $delta_valor->delta;
$dados->x1 = $x_valor->x1;
$dados->x2 = $x_valor->x2;
//var_dump($dados);


?>