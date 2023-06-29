<?php

class Student
{
    //ATTRIBUTES
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    private array $grades;
    
    //CONSTRUCTOR
    public function __construct (string $firstName, string $lastName, string $email)
    {
        $this->id = -1;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->grades = [];
    }
    
    //ID
    public function getId() : int
    {
        return $this->id;
    }
    public function setId(int $id) : void
    {
        $this->id = $id;
    }
    
    //FIRST NAME
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    public function setFirstName(string $firstName) : void
    {
        $this->firstName = $firstName;
    }
    
    //LAST NAME
    public function getLastName() : string
    {
        return $this->lastName;
    }
    public function setLastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }
    
    //EMAIL
    public function getEmail() : string
    {
        return $this->email;
    }
    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }
    
    //GRADES
    public function getGrades() : array
    {
        return $this->grades;
    }
    public function setGrades(array $grades) : void
    {
        $this->grades = $grades;
    }
    
    //METHODS
    public function getFullName() : string
    {
        echo $this->firstName .' '. $this->lastName;
        return $this->firstName . $this->lastName;
    }
    
    public function addGrade(int $newGrade) : array
    {
        array_push($this->grades, $newGrade);
        return $this->grades;
    }
    
    public function removeGrade(int $grade) : array
    {
        $key = array_search($grade, $this->grades);
        array_splice($this->grades, $key, 1);
        return $this->grades;
    }
    
    public function getAverage() : float
    {
        if (count($this->grades) !== 0)
        {
            $sum = 0;
            foreach($this->grades as $grade)
            {
                $sum = $sum + $grade;
            }
            $average = $sum / count($this->grades);
            return $average;
        }
    }
}

// $student = new Student("Laureline", "Aga-Bibrac", "email@test.fr");
// $student->getFullName();
// $student->addGrade(10);
// $student->addGrade(16);
// $student->addGrade(17);
// $student->removeGrade(17);
// $student->getAverage();
?>