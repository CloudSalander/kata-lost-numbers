<?php
declare(strict_types = 1);
//TODO: Entrada de datos por terminal o formulario.
$numbers = [1,4,7];
if(checkArray($numbers)) {
	print_r(getLostNumbers($numbers));
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

function getLostNumbers(array $numbers): array {
	$all_numbers = generateCompleteList($numbers[0],$numbers[count($numbers)-1]);
	return array_diff($all_numbers,$numbers);
}

function generateCompleteList(int $begin, int $end): array {
	$complete_list = array();
	while($begin <= $end) {
		array_push($complete_list, $begin);
		++$begin;
	}
	return $complete_list;
}
?>