<?php
// Логика в том что бы отделить постоянные вещи от меняющихся
// И меняющиеся добовлять при тех или иных условиях
require_once "bd.php";
class Render{
	public function Render(){
		$MyBd = array("bob","tom","grom","dimon");
		foreach($MyBd as $BD){
			static $L = 0;
			echo $MyBd[$L];
			echo "</br>";
			echo $BD::$life;
			echo "</br>";
			echo $BD::$age;
			echo "</br>";
			if($BD::$life != 1){
			echo "</br>";
			echo $BD::$adres;
			echo "</br>";
			echo $BD::$education;
			echo "</br>";
			}
			
			echo "</br>=====</br>";
			$L++;
	}
}
};

$REN = new Render();
$REN->Render();	

?>