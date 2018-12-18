<?php 

function zipper( $array2){
    $array1 = [];
    echo "Type in a value for array1";
    $handle = fopen ("php://stdin","r");
    $array1[0] = array(fgets($handle));

    echo "Type in a value for array2";
    $handle = fopen ("php://stdin","r");
    $array1[1] = array(fgets($handle));

    echo "Type in value for array3";
    $handle = fopen ("php://stdin","r");
    $array1[2] = array(fgets($handle));



    // if(($array1) != Array()){
    //     echo "ABORTING!\n";
    //     exit;
    // }
    fclose($handle);
    echo "\n"; 
    echo "Thank you for your input, here is your zippered array...\n";
    print_r($array1);

    //resume original code
  
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
    return $array1;
    return $mergedArray;



}

// $array1 = Array(1,1,1,1,1,1,1,7);
$array2 = Array(0,0,0,0,0,0,0,0,0,0,0,0,0);

// print_r(zipper($array1, $array2));
print_r(zipper($array2));