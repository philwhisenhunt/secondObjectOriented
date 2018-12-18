<?php 

function zipper($array1, $array2){
  
    $mergedArray = Array();

    if($array1 < $array2){
        $lessThanArray = $array1;
        $greaterArray = $array2;
    }
    else{
        $lessThanArray = $array2;
        $greaterArray = $array1;
    }
    
    for($i=0; $i<count($greaterArray); $i++){

        if($i < count($greaterArray)){
            $mergedArray[] = $greaterArray[$i];
        }

        if($i < count($lessThanArray)){
            $mergedArray[] = $lessThanArray[$i];

        }
        
    }
    return $mergedArray;







}

$array1 = Array(1,1,1,1,1,1,1,7);
$array2 = Array(0,0,0,0,0,0);

print_r(zipper($array1, $array2));