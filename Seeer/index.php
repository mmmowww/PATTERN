<?php
// Логика подключение к одному ядру многих, с разными провами доступа
// 
require_once "core.php";
class Render {
	public function Render(){
		Data::info();
	}
};

class userAdmin{
public function GET(){
$REN = new Render();
$REN->Render();	
}
public function Admin(){
	Data::GetInfo();
	Data::DeleteInfo();
}
};
class userModer{
public function GET(){	
$REN = new Render();
$REN->Render();	
}
public function Moder(){
	Data::DeleteInfo();
}
};
class user{
public function GET(){
$REN = new Render();
$REN->Render();	
}
};



?>