<?php 

//Classes e Objetos


class MyClass{
	
//As propriedades e metodos vem para aqui
	public static $prop1 = "Eu sou uma propriedade";

	public function setProperty ($newval){

		$this->prop1 = $newval;
	}

	public function getProperty (){

		return $this->prop1 . "<br />";
	}

}

//instanciar objeto
$obj = new MyClass;
$obj2 = new MyClass;

//var_dump($obj);
echo $obj->prop1;// mostra conteudo da propriedade

echo $obj->getProperty();
echo $obj2->getProperty();

$obj->setProperty("Eu sou outra propriedade!");
$obj2->setProperty("Eu sou uma outra propriedade do objct2");

echo $obj->getProperty();
echo $obj2->getProperty();



class Pessoa{
	//Propriedades|Atributos
	public $nome;
	public $idade;
	public $sexo;
	//Métodos|Funções|Ações
	public function __construct(){
		echo "<br />A class ",__CLASS__," foi instanciada<br />";
	}
	public function __destruct(){
		echo "<br />A class ",__CLASS__," foi destruida<br />";
	}
	public function andar(){
		echo "Executando a função andar!";
	}
	public function correr(){
		echo "Executando a função correr!";
	}
	public function saltar(){
		echo "Executando a função saltar!";
	}

}
$cliente = new Pessoa();
$funcionario = new Pessoa();
$outros = new Pessoa();



$cliente->nome = "André Lopes";
$funcionario->nome = "João Antunes";
$outros->nome = "Miguel Cardoso";

$cliente->idade = "25";
$funcionario->idade = "50";
$outros->idade = "100";

$cliente->sexo = "M";
$funcionario->sexo = "F";
$outros->sexo = "F";


echo "Olá o meu nome é " . $cliente->nome;
echo " tenho " . $cliente->idade;
echo "sou do sexo " . $cliente->sexo;
$cliente->andar(); 


function abc(){
	echo "olá";
}

abc();

foreach (range(0,50,10)as $number){
	echo $number;
}


foreach (range('z','a') as $letter){
	echo $letter;
}



//destroi objecto
unset($cliente);

//Herança, as classes podem herdar propriedades e metodos

class MyNewClass extends MyClass{
	public $prop1 = "Eu sou uma nova propriedade";

	public function NovoMetodo(){
		echo "Novo metodo para a class ",__CLASS__,"<br />";
	}
} 

$newobj = new MyNewClass;
//Usa o metodo da nova class
echo $newobj->NovoMetodo();
//Usa o metodo da class Pai
echo $newobj->getProperty();
//aceder nova propriedade
echo $newobj->prop1;


//Visiblidade (public, private, protected) tanto para metds como propr

//Public -> Podem ser acedidas em qq lugar
//private -> Só pode ser acedida dentro da classe que os define
//Protected -> Só pode ser acedida dentro da classe ou por classe descendente


//Um método ou propriedade defenida como static pode ser acedida 
//sem instanciar a class


?>