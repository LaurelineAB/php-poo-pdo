<?php

class User {
    //ATTRIBUTES
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    
    //CONSTRUCTOR
    public function __construct(string $firstName, string $lastName, string $email)
    {
        $this->id = -1;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
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
    
    //METHODS
    public function getFullName() : void
    {
        echo $this->firstName . ' ' . $this->lastName;
    }
}

// $user = new User("Laureline","Aga-Bibrac","email@test.fr");
// $user->getFullName();

?>