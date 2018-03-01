<?php
include("Employee.php");
class Service {
		
	public function getAll() {
		$employee = new Employee();
		$data = $employee ->getAllEmployees();
		return $data;
	}
	
}