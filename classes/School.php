<?php
require "User.php";
require "Student.php";

class School
{
    //ATTRIBUTES
    private int $id;
    private User $teacher;
    private array $students;
    
    //CONSTRUCTOR
    public function __construct(User $teacher)
    {
        $this->id = -1;
        $this->teacher = $teacher;
        $this->students = [];
    }
    
    
    //ID
    public function getId() : User
    {
        return $this->id;
    }
    public function setId($id) : void
    {
        $this->id = $id;
    }
    
    //TEACHER
    public function getTeacher() : User
    {
        return $this->teacher;
    }
    public function setTeacher($teacher) : void
    {
        $this->teacher = $teacher;
    }
    
    //STUDENTS
    public function getStudents() : array
    {
        return $this->students;
    }
    public function setStudents($students) : void
    {
        $this->students = $students;
    }
    
    
    //METHODS
    public function addStudent(Student $student) : array
    {
        array_push($this->students, $student);
        return($this->students);
    }
    
    public function removeStudent(Student $student) : array
    {
        $key = array_search($student,$this->students);
        array_splice($this->students, $key, 1);
        return $this->students;
    }
}

$student1 = new Student("Laureline", "Aga-Bibrac", "email@test.fr");
$student2 = new Student("Marie","Richir","email");
$teacher = new User("Mari","Doucet","email");
$school = new School($teacher);
$school->addStudent($student1);
$school->addStudent($student2);
// $school->removeStudent($student1);
var_dump($school);
?>