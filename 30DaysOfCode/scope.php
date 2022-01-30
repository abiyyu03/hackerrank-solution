<?php
class Difference{
    private $elements=array();
    public $maximumDifference;
    function __construct($__elements)
    {
        $this->elements = $__elements;
        $this->maximumDifference = $maximumDifference;
    }
    
    function ComputeDifference()
    {
        // $ar = $this->elements;
        
        $this->maximumDifference = abs(min($this->elements) - max($this->elements));
    }
    
} //End of Difference class  


$N=intval(fgets(STDIN));
$a =array_map('intval', explode(' ', fgets(STDIN)));
$d=new Difference($a);
$d->ComputeDifference();
print ($d->maximumDifference);


// $ar = [8, 19, 3, 2, 7];
// $max = 0;
// for($i = 0;$i < sizeof($ar);$i++)
// {
//     for ($j=1; $j < sizeof($ar); $j++) { 
//         $result = abs($ar[$i]-$ar[$j]);
//         if($result > $max){
//             $max = $result;
//         }
//     }
// }
// echo $max;