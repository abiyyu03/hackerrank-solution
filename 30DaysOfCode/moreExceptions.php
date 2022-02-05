<?php
class Calculator
{
    function power($n,$p)
    {
        try {
            if($n < 0 || $p < 0)
            {
                throw new Exception("n and p should be non-negative");
            }
            $result = 1;
            for($i=0;$i<$p;$i++){
                $result*=$n;
            }
            echo $result;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

$myCalculator=new Calculator();
$T=intval(fgets(STDIN));
while($T-->0){
    list($n, $p)  = explode(" ", trim(fgets(STDIN)));
    try{
        $ans=$myCalculator->power($n,$p);
        echo $ans."\n";
    }
    catch(Exception $e){
        echo $e->getMessage()."\n";
    }
}
?>