<?php 

function zipper($array1, $array2){
  
    $mergedArray = Array();

    $maxSize = count($array1);
    if($maxSize < count($array2)){
        $maxSize = count($array2);
    }

    
    for($i=0; $i< $maxSize; $i++){

        if($i < count($array1)){
            $mergedArray[] = $array1[$i];
        }

        if($i < count($array2)){
            $mergedArray[] = $array2[$i];

        }
        
    }

    echo "Are you sure you want to do this?  Type 'yes' to continue: ";
    $handle = fopen ("php://stdin","r");
    $line = fgets($handle);
    if(trim($line) != 'yes'){
        echo "ABORTING!\n";
        exit;
    }
    fclose($handle);
    echo "\n"; 
    echo "Thank you, continuing...\n";
    return $mergedArray;







}

$array1 = Array(1,1,1,1,1,1,1,7);
$array2 = Array(0,0,0,0,0,0,0,0,0,0,0,0,0);

print_r(zipper($array1, $array2));