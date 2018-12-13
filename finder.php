<?php
function findIt(array $seq){

//make a for loop to cycle through each part of the array
//make an associative array for each entry but..
//if the key exists, then increase the count of that array by one

//for each thing, see if a key exists
//if it does then add to it,
//else make a new key
    $keyArray = Array();

    for($i=0; $i<count($seq); $i++){
        
        if(array_key_exists($seq[$i], $keyArray)){
            $keyArray[$seq[$i]] += 1;
        }
        else{
            $keyArray[$seq[$i]] = 1;
        }
    }

// return $keyArray;

    foreach($keyArray as $entry => $value){

        if($value % 2 != 0){
        return $entry;

        }
    }

}

$seq = Array(20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5);
print_r(findIt($seq));