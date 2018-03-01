<?php

class Employee {

    public $id;
    public $firstName;
    public $lastName;
    public $mobile;
    public $department;
    
    function getAllEmployees(){
    	$emp1 = new Employee();
    	$emp1 ->id ="E001";
    	$emp1 ->firstName = "John";
    	$emp1 ->lastName ="Doe";
    	$emp1 ->department ="Sales";
    	$emp1 ->mobile="+1767898999";
    	
    	$emp2 = new Employee();
    	$emp2 ->id ="E002";
    	$emp2 ->firstName = "Jane";
    	$emp2 ->lastName ="Doe";
    	$emp2 ->department ="Marketing";
    	$emp2 ->mobile="+1767898885";
    	$empArray = array($emp1,$emp2);
    	return $empArray;
    }

}

?>