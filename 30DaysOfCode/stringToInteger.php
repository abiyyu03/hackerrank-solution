<?php

$S = rtrim(fgets(STDIN), "\r\n");

try {
    new ReflectionClass('ReflectionClass'.((int)$S.""!==$S));
    echo $S;
} catch (Exception $e) {
    echo "Bad String";
}

// // //create function with an exception
// function checkNum($number) {
//   if($number>1) {
//     throw new Exception("Value must be 1 or below");
//   }
//   return true;
// }

// //trigger exception in a "try" block
// try {
//   checkNum(-1);
//   //If the exception is thrown, this text will not be shown
//   echo 'If you see this, the number is 1 or below';
// }

// //catch exception
// catch(Exception $e) {
//   echo 'Message: ' .$e->getMessage();
// }
// ?>