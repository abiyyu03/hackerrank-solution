<?php

class person {
    protected $firstName, $lastName, $id;
    
    public function __construct($first_name, $last_name, $identification) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }
    
    function printPerson() {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}
class Student extends person {
    private $testScores;
  
    /*	
    *   Class Constructor
    *   
    *   Parameters:
    *   firstName - A string denoting the Person's first name.
    *   lastName - A string denoting the Person's last name.
    *   id - An integer denoting the Person's ID number.
    *   scores - An array of integers denoting the Person's test scores.
    */
    function __construct($firstName,$lastName,$id,$scores){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->id = $id;
        $this->testScores = $scores;
    }

    function calculate(){
        $total = 0;
        for ($i=0; $i < sizeof($this->testScores); $i++) { 
            $total += $this->testScores[$i];
        }
        $result = $total/sizeof($this->testScores);
        if($result >= 90) { 
            $grade = "O"; 
        }elseif ($result >= 80 && $result < 90){
            $grade = "E";
        } elseif ($result >= 70 && $result < 80) {
            $grade = "A";
        } elseif($result >= 55 && $result < 70){
            $grade = "P";
        } elseif ($result >= 40 && $result < 55) {
            $grade = "D";
        } else {
            $grade = "T";
        }
        // echo "Name: ". $this->firstName.", ".$this->lastName.
        //     "\nID: ".$this->id.
        //     "\nGrade: ".$grade;
        return $grade;
            
    }

    /*	
    *   Function Name: calculate
    *   Return: A character denoting the grade.
    */
    // Write your function here
}


$file = fopen("php://stdin", "r");

$name_id = explode(' ', fgets($file));

$first_name = $name_id[0];
$last_name = $name_id[1];
$id = (int)$name_id[2];

fgets($file);

$scores = array_map(intval, explode(' ', fgets($file)));

$student = new Student($first_name, $last_name, $id, $scores);

$student->printPerson();

print("Grade: {$student->calculate()}");