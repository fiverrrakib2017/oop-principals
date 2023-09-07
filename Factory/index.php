<?php


class Employee{
    public $name=NULL;
    public $salary=NULL;
    public $company=NULL;
    public function __construct($name,$salary,$company){
        $this->name=$name;
        $this->salary=$salary;
        $this->company=$company;
    }
    public  function getEmployee(){
        echo '<b>--------Employee Information----------</b><br>';
        echo 'Name :'.$this->name."<br>";
        echo 'Salary :'.$this->salary."<br>";
        echo 'Company :'.$this->company."<br>"; 
    }
}

class Factory{
    public static function create($name,$salary,$company){
        return new Employee($name,$salary,$company);
    }
}

$object=Factory::create("Rakib Mahmud",25000,"Neways internation limited");
$object2=Factory::create("shakib khan",12000,"Gouriupr IT Solution");

$object->getEmployee();
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$object2->getEmployee();
