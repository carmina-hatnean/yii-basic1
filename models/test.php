<?php 

class Person
{
    public $name;
    protected $age;
    private $phone;

    public function __construct($name,$age,$phone)
    {
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;
    }
        public function hello()
       {
            return "Hello from person";
       }


    }

    

class Employee extends Person
{
    private $salary;

    public function __construct($name, $age, $phone, $salary)
    {
        parent:: __construct($name, $age, $phone);
        $this->salary = $salary;
    }

    public function hello()
    {
        return "I am an employee: $this->name";
    }

}

$employee = new Employee("John",27,'123456',2000);
echo $employee->hello();



?>