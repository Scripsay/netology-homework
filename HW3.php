<?php
error_reporting (E_ALL);
$AnimalPlanet = [
'Africa' => ['Rhinocerotidae', 'Loxodonta africana'],
'Antarctica' =>  ["Lobodon carcinophagus","Pygoscelis adeliae","Ursus maritimus"],
'Asia' =>  ["Helarctos malayanus", "Panthera uncia","Saiga_tatarica", "Scandentia"],
'Europe' =>  ["Capreolus capreolus", "Martes", "Tetrao urogallus"],
'North America' =>  ["Canis lupus", "Mustela erminea"],
'Australia' =>  ["Phascolarctos cinereus", "Macropus"],
'South America' =>  [ "Vicugna pacos", "Lama guanicoe", "Concolor"]
];



foreach ($AnimalPlanet as $key => $Animal) {

var_dump ($Animal);

echo "<table>";
foreach ($Animal as  $value) {
echo "<tr>";
  echo "<td>$value</td>";
  echo "</tr>";
}
echo "</table";
};
//str_word_count ($AnimalPlanet;2);
