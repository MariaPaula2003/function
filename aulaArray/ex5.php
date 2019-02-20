<?php
$vetor = array();

$vetor[0] = 'frutas';
$vetor[1] = 'banana';
$vetor[2] = 'caju';
$vetor[3] = 'lixia';
$vetor[4] = 'melancia';
$vetor[5] = 'pera';
$vetor[6] = 'laranja';
$vetor[7] = 'manga';
$vetor[8] = 'amora';
$vetor[9] = 'uva';

echo '<pre>';

print_r($vetor);
?>

<select>
<?php for($i = 0; $i <10; $i++){?>
	<option><?php echo $vetor[$i];?></option>
<?php } ?>
</select>

?>

