<?php
for ($i=0; $i < 5; $i++) {  
    for ($k=0; $k < 5; $k++) {
        if($k < 5-$i-1)
        {
           echo " ";    
        } else {
           echo "#"; 
        }
    }
    echo "\n";
}