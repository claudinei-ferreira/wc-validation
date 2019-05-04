<?php 
/**
 * EXEMPLO DE USO DO METODO QUE RETORNA O NOME DO DIA DA SEMANA
 */

require "Validation.class.php";

$validation = new Validation;

$data = date("Y-m-d", strtotime("2019-05-04"));

echo "A data " . date("d/m/Y", strtotime($data)) . " é " . $validation::getDayWeekName($data);

?>