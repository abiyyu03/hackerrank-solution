<?php
class Person{
    public $age;
   public function __construct($initialAge){
          // Add some more code to run some checks on initialAge
        $this->age = $initialAge;
        if($this->age < 0 ){
            echo "Age is not valid, setting age to 0.\n";
            $this->age =0;
        } 

    }
   public  function amIOld(){
        // Do some computations in here and print out the correct statement to the console 
        if ($this->age < 13) {
            echo "You are young.\n";
        } elseif($this->age < 18 && $this->age >= 13) {
            echo "You are a teenager.\n";
        } else {
            echo "You are old.\n";
        }

    }
   public  function yearPasses(){
          // Increment the age of the person in here
          $this->age++;

    }
   
      
}

$T = intval(fgets(STDIN));
 for($i=0;$i<$T;$i++){
     $age=intval(fgets(STDIN));
     $p=new Person($age);
     $p->amIOld();
     for($j=0;$j<3;$j++){
         $p->yearPasses();
     }
     $p->amIOld();
     echo "\n";
         
 }
?>