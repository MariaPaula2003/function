<?php 

function geralista($vetor){

?>

<?php
for($i = 0; $i < count($vetor);  $i++){
?>

<ul>
 <li><?php echo $vetor[$i] ?></li>
</ul>

<?php } ?>

<?php } 

$vetor = array('Branco', 'Verde', 'Vermelho');

 geralista($vetor);

?>



