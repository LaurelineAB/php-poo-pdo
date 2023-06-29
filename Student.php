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
}

?>