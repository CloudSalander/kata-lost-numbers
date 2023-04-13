<?php
//TODO: Entrada de datos por terminal o formulario.
$numbers = [1,2];
if(checkArray($numbers)) {
	echo "Ok,lets go!";
}
else {
	echo "Ordered integer array entered not valid. So sorry:(";
}

/*
No aclaran que es un array incorrecto. Asumo que, o bien no está ordenado, o bien
está vacío, o un elemento,o bien contiene algo que no es un entero 
*/
function checkArray(array $numbers): bool {
	if(count($numbers) <= 1) return false;
	for($i = 0; $i < count($numbers)-1; ++$i) {
		if(!is_int($numbers[$i]) || $numbers[$i] >= $numbers[$i+1]) return false;
	}
	if(!is_int($numbers[count($numbers) - 1])) return false;
	return true;
 }
?>