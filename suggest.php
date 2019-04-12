<?php 

$people[] = 'Steve';
$people[] = 'Anne';
$people[] = 'Ben';
$people[] = 'Charles';
$people[] = 'Dickson';
$people[] = 'Ellen';
$people[] = 'Francis';
$people[] = 'George';
$people[] = 'Hamish';
$people[] = 'Ian';
$people[] = 'Jeckyle';
$people[] = 'Kattie';
$people[] = 'Amanda';
$people[] = 'Hal';
$people[] = 'Tom';
$people[] = 'John';
$people[] = 'Rachel';
$people[] = 'Greg';
$people[] = 'Brad';
$people[] = 'Jhonson';
$people[] = 'Starc';
$people[] = 'Cook';
$people[] = 'Mike';
$people[] = 'Zelda';
$people[] = 'Evan';
$people[] = 'Chan';
$people[] = 'Mohammed';
$people[] = 'Lee';
$people[] = 'Xavier';
$people[] = 'Yonda';
$people[] = 'Olivia';

//Get Query String
$q = $_REQUEST['q'];

$suggestion = "";

//Get Suggestions
if($q !== ""){
	$q = strtolower($q);
	$len = strlen($q);
	foreach ($people as $person) {
		if(stristr($q, substr($person,0, $len))){
			if($suggestion === ""){
				$suggestion = $person;			
			}else{
				$suggestion .= ", $person";
			}
		}
	}
}

echo $suggestion === "" ? "No Suggestions" : $suggestion;














 ?>