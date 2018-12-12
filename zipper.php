<?php 

function zipper($array1, $array2){
    //figure out longer array
    //make a new array name for longer array

    //make a new merged array

    //for each entry in longer array..
        //add the longer array
        //if short array entry exists, add it too

    

    $mergedArray = Array();
    
    for($i=0; $i<count($array1); $i++){
        $mergedArray[] = $array1[$i];
        $mergedArray[] = $array2[$i];
        
    }
    return $mergedArray;







}

$array1 = Array(1,1,1,1,1,1,1,7);
$array2 = Array(0,0,0,0,0,0);

print_r(zipper($array1, $array2));