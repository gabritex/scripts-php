<?php

class Person{
	private $_name;
	private $_job;
	private $_age;

	public function __construct($name,$job,$age){
		$this->_name = $name;
		$this->_job = $job;
		$this->_age = $age;
	}

	public function changeJob($newjob){
		$this->_job = $newjob;
	}

	public function happyBirtday(){
		++$this->_age;
	}
}

//criar duas novas pessoas
$person1 = new Person("Tom","Tecnico",34);
$person2 = new Person("Jon","Eng",39);

//mostra valores iniciais
echo "<br />Person 1: ", print_r($person1, TRUE);
echo "<br />Person 2: ", print_r($person2, TRUE);

//Tom foi promovido e fez anos
$person1->changeJob("Técnico superior");
$person1->happyBirtday();

//Jon tb fez anos
$person2->happyBirtday();

echo "<br />Person 1: ", print_r($person1, TRUE);
echo "<br />Person 2: ", print_r($person2, TRUE);

?>