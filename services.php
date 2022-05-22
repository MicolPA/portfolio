<?php
class Services {

	public $name;
	public $age;
	public $email;

	function __construct() {
		$this->name = 'Micol Peralta';
		$this->age = $this->getAge();
		$this->email = 'contacto@micolperalta.com';
	}

	

	function getAge() {

		$birthdate = new DateTime('1998/11/18');
        $now = new DateTime();
        $difference = $now->diff($birthdate);
        $age = $difference->y;
         
        return $difference->y;
	}

	function getProject($fileName, $data) {
	   extract($data);
	   include($fileName);
	}
}

?>