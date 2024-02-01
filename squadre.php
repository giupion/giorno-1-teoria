<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data dinamica in  Php - By Targetweb</title>
</head>

<body>



<?php
//è associativo non numerico
$numerico = array('Elemento 1', 'Elemento 2', 'Elemento 3'); //puoi accedere [1,1]
$associativo = array('chiave1' => 'Valore 1', 'chiave2' => 'Valore 2', 'chiave3' => 'Valore 3');

$squadrepokemon = 
    array('ash'=>array('charizard','pikachu','pidgeot','lapras','greninja','serperior'),
    'misty'=>array('staryu','goldeen','gyarados','starmie','togetic','seaking'),
    'brock'=>array('bonsly','onix','golem','kabutops','sudowoodo','omastar'),
'lance'=>array('dragonite','dragonite','dragonite','gyarados','aerodactyl','charizard',));

  
$allenatori = array_keys($squadrepokemon); 
  //estrai i nomi degli allenatori in particolare l'array con i nomi di tuttl iallenatori è sempre un array
 
  
//iteri ovviamnete la lunghezza dell'array allenatore!
 //estrai l'array degli allenatori in php con array_keys
  for($i=0;$i<count($allenatori);$i++){
    $allenatore=$allenatori[$i]; //poi assegni  ciascun allenatore iesimo alla vaiabile allenatore ed iteri ciascuno di essi
    $pokemon=$squadrepokemon[$allenatore];//assegni alla variabile pokemon l'array squadre con indice allenatore,cioe definisco l'arra pokemon di ciascun allenatore
    echo "<h1>".($allenatore) ."</h1>"; //qua stampo ogni allenatore
  
    //il singolo allenatore
for($j=0;$j<count($pokemon);$j++){ //itero come lunghezza prendo quella del singolo array dei pokemon dell'allenatore
    echo "<li>". ($pokemon[$j]) ."</li>"; //stampo ogni pokemon dell'array con indice j
}
   
    
  }
  print_r( $squadrepokemon['ash'][1]); //puoi accedere a associativo solo cosi

  $squadre = 
  array( array('Magmortar','Magcargo','Ninetales','Arcanine','Rapidash','Moltres',),
  array('Lapras','Articuno','Glalie','Froslass','Mamoswine','Abomasnow',),
  array('Alakazam','Gengar','Machamp','Jolteon','Rayquaza','Spiritomb',),
array('Arceus','Dragonite','Gallade','Gardevoir','Umbreon','Flygon',));

//parte da 1 quindi 0<1? si quidni vado giu verificata 0<1 si e stampo e incremento,1<
//$squadre righe e colonne  //$squadre[$i] sono le righe con il loro indice
for($i=0;$i<count($squadre);$i++) // con squdre 0 ho accesso al primo array alla riga, j<0? no e stampo
{for($j=0;$j<count($squadre[$i]);$j++) //questo rappresenta la colonnadi ciscun arrai e si tiene conto della lunghezza dell'elemento iesimo per iterare fino alla fine
{  echo "<p>" . $squadre[$i][$j] . "</p>";}} //per esempio [1][1] srampo seconda riga seconda colonna cioe articuno

$calendariolotte=array(
    array('ash'=>array(
        'pokemon'=>array ('charizard','pikachu','pidgeot','lapras','greninja','serperior'),
'scontri'=> array ('misty','brock','lance')),

    'misty'=>array('pokemon'=>array('staryu','goldeen','gyarados','starmie','togetic','seaking'),
    'scontri'=> array ('ash','brock','lance')),

    'brock'=> array('pokemon'=>array('bonsly','onix','golem','kabutops','sudowoodo','omastar'),
    'scontri'=> array ('misty','ash','lance')
),
'lance'=>array('pokemon'=>array('dragonite','dragonite','dragonite','gyarados','aerodactyl','charizard'),
'scontri'=>array('ash','misty','brock')))
);


foreach ($calendariolotte as $allenatori) {
    // Itera attraverso l'array interno di ogni allenatore
   foreach($allenatori as $allenatore=>$specificheallenatore){

    echo "<h1>". $allenatore . "</h1>";

    echo "<p> Pokemon: ". implode(', ',$specificheallenatore['pokemon'] ). "<p/>"; //implode per convertire array in strighe

    echo "<p> Scontri: ". implode(', ',$specificheallenatore['scontri']). "</p>";
   }
}
$trainers = array_keys($calendariolotte); 


for($i=0;$i<count($trainers);$i++)
{$pokemon=array_keys($trainers);
    for ($j=0;$j<count($pokemon);$j++)
{}}

//ora stampo tutto



?> 


</body>

</html>