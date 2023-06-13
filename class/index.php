<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Live serve</title>
    </head>

    <body>

    </body>

</html>
<?php

 ## string function , echo explode(), implode() join()
	$x = 'Nazmul     Meriz    Alamin';
	$y = 'nazmul meriz ';
	//echo('string');
	//echo strtolower($x)
	//echo strtoupper($x)
	//echo strtoupper($x)
	//echo ucfirst($y)
	//echo ucwords($y)
	/* echo "<pre>";
	
	$ar = (explode(' ',$y));
	echo implode(" ",$ar);
	echo "</pre>";
	echo md5(12123);
	echo '<br>';
	$tm = trim($y);
	echo strlen($tm);
	echo '<br>';
	echo strlen($y);
	//echo trim($y); */
	
	
	##  types of arry
	$sing = ['rahman','nazmul','alamin','maraz'];
	$aso = ['name'=>'rahman','age'=>20 ,'gender'=>'male'];
	/* echo "<pre>";
	print_r($sing);
	print_r($aso);
	echo "</pre>"; */
	$asso = [
		0=>['rahman', 43,'male'],
		1=>['nazmul', 13,'male'],
		2=>['alamin', 23,'male'],
		3=>['meraz', 53,'male'],
		4=>['merazfs', 553,'male'],
	];
	foreach($asso as $name){
		foreach($name as $n){
			echo $n.' ' ;
		}
		echo '<br>';
	}
	echo '<br>';
	echo '<br>';
	
	$rowCount = count($asso);
    for ($row = 0; $row < $rowCount; $row++) { 
        $colCount = count($asso[$row]);
        for ($col = 0; $col < $colCount; $col++) { 
            echo $asso[$row][$col] . ' ' ; 
        }
        echo "<br/>";
	} 
	
	$service = [
		['fas fa-lis-ul', 'professionnal code', 'details'],
		['fas fa-lis-ul', 'professionnal code', 'details'],
		['fas fa-lis-ul', 'professionnal code', 'details'],
		['fas fa-lis-ul', 'professionnal code', 'details'],
		['fas fa-lis-ul', 'professionnal code', 'details'],
	]
	
	/* echo "<pre>";
	print_r($aso);
	echo "</pre>"; */



/* $emp = [
    [1,"sonoo",400000],  
    [2,"john",500000],  
    [3,"rahul",300000,300000,[4,5,7,8]],
];  
$rowCount = count($emp);
    for ($row = 0; $row < $rowCount; $row++) { 
        $colCount = count($emp[$row]);
        for ($col = 0; $col < $colCount; $col++) { 
            
            if(is_array($emp[$row][$col])){
                $iCount= count($emp[$row][$col]); 
                for ($i = 0; $i < $iCount; $i++){
                    echo $emp[$row][$col][$i].' ';
                }
                echo "<br/>";  
            }else{
                echo $emp[$row][$col].'  ';
            }
        }
        echo "<br/>";  
    }  
    echo "<br/>";  
    // echo (4%2);  
    // if ((4%2) != 0 ){
    //     echo 'hoyns';
    // }

    foreach ($emp as $em) {
        foreach ($em as $m) {
            if(is_array($m)){
                foreach ($m as $n) {
                    echo $n . '  ';
                }
                echo "<br/>"; 
            }else{
                echo $m. ' '; 
            }            
        }
        echo "<br/>";  
    }



 */

?>