<?php   
$a=0;
$b=0;
$c=0;
for($i = 0;$i<count($arr);$i++)
{
    if($arr[$i] < 0)
    {
        $a+=1;
    }elseif ($arr[$i] > 0){
        $b+=1;
    } elseif($arr[$i] == 0)
    {
        $c+=1;
    }
    
}
echo $b/count($arr)."\n";
echo $a/count($arr)."\n";
echo $c/count($arr);
