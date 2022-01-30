<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$number);

$tempPhoneNumber = [];
$phoneNumber = [];
$queryList = [];

//create two arrays from file data. One for the phonebook and one for the list of name to check
while($fileContents = fgets($_fp)){
    if(strpos($fileContents," ")){
        $tempPhoneNumber = explode(" ",$fileContents);
        $phoneNumber[$tempPhoneNumber[0]] = $tempPhoneNumber[1];
    } else {
        array_push($queryList,$fileContents);
    }
}

//count the users in the users array that are used to querythe phoneNumber array
$count = count($queryList);

for($i = 0;$i < $count;$i++){
    $nameToCheck = trim($queryList[$i]);
    if(array_key_exists($nameToCheck,$phoneNumber)){
        echo $nameToCheck."=".$phoneNumber[$nameToCheck];
    } else {
        echo "Not found\n";
    }
}
fclose($_fp);
?>
