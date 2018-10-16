<!DOCTYPE html>
<html lang="ru">
  <head>
     <meta charset="UTF-8"> 
     <title>Домашнее задание № 1</title>
  </head>
  <body>     

<?php


$continents=[
	'Africa' => [
		'lion', 
		'elephant', 
		'leopard'
	], 
	'Antarctica'=> [
		'Leopard seal', 
		'Crabeater seal', 
		'Adélie Penguin'
	], 
	'Australia'=> [
		'kangaroo', 
		'koala', 
		'numbat'
	], 
	'Eurasia'=> [
		'Meles meles', 
		'Nannospalax leucodon', 
		'Sicista betulina'
	], 
	'North America'=> [
		'Alopex lagopus', 
		'Canis latrans', 
		'Canis lupus', 
		'Canis rufus', 
		'Urocyon cinereoargenteus'
	], 
	'South America'=> [
		'Lynx rufus', 
		'	Panthera onca', 
		'Puma concolor', 
		'Puma yagouaroundi', 
		'Herpestes javanicus'
	]
];



$name=[];
foreach ($continents as $animals) {
	foreach ($animals as $animal) {
		if (count(explode(" ", $animal))==2) {
			$name[]=explode(' ', $animal);
			}
			

		}
	}
foreach ($name as $double_name) {      
    $one[] = $double_name[0];
    $two[] = $double_name[1];
}

for ($i=0; $i < count($one); $i++) { 
    $spisok[]="$one[$i] $two[$i]<br>";
}
$spisok=implode(' ', $spisok);
echo $spisok;                          
echo '<br>';

shuffle($one);
shuffle($two);
$result = array_combine($one, $two);


foreach ($result as $key => $value) {
    echo $key.' '.$value.'<br/>';
}
?>


  </body>
</html>