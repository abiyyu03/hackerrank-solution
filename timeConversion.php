<?php
$s = "24:40:22PM";
$hour = substr($s,0,2);
$type = substr($s,8,2); 
//Jika PM
if($type == "PM") 
{
    //mengubah jadi Military format
    $result = number_format($hour)+12;
    if($result < 24) 
    {
        echo substr(str_replace($hour,$result,$s),0,8);
    } else {
        echo substr($s,0,8);
    }
//Jika AM
} elseif($type == "AM") 
{    
    if($hour < 12) 
    {
        echo substr($s,0,8);
    } else {
        echo substr(str_replace($hour,"00",$s),0,8);
    } 
}