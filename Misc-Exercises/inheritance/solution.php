<?php

// You are given two classes, Person and Student, where Person is the base class and Student is the 
// derived class. Completed code for Person and a declaration for Student are provided for you in the editor. 
// Observe that Student inherits all the properties of Person.

// Complete the Student class by writing the following:

// A Student class constructor, which has 4 parameters:
// A string, firstName.
// A string, lastName.
// An integer, id.
// An integer array (or vector) of test scores, scores.
// A char calculate() method that calculates a Student object's average and 
// returns the grade character representative of their calculated average

class Person 
{
    protected $firstName;
    protected $lastName;
    protected $id;

    public function __construct($firstName, $lastName, $id) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->id = $id;
    }

    public function getFirstName() {
        return $this->firstName;
    }
}

class Student extends Person 
{
    public $scores = array();

    public function calculate() {
        $grade = array_sum($this->scores)/count($this->scores);
        ($grade > 89) ? $tGrade = "A" : 
           ( ($grade > 79) ? $tGrade = "B" :
           ( ($grade > 69) ? $tGrade = "C" : $tGrade = "D"));

           return $tGrade;
    }
}

$temp = new Student("David", "Schwartz", 6);
$temp->scores = [100, 80];
echo $temp->calculate();
echo $temp->getFirstName();