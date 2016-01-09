<?php 
class Persona{
	//dentro del modelo vamos a incluir las caracteristicas
	//propias de la Persona llamadas Propiedades 
	//o Atributos unicos del objeto
	public $cabeza;
	private $brazos;
	private $piernas;
	public $genero;
	

//ahora vamos a crear el METODO CONSTRUCTOR; aqui vamos a definir los valores que van a tener las
//propiedades privadas

	public function __construct()
	{
		$this->cabeza=1;
		$this->brazos=1;
		$this->piernas=1;
		$this->genero="masculino";
    }

//los metodos son como funciones en el interior del objeto
	public function cabeza()
	{
		return $this->cabeza;
	}

	public function genero()
	{
		return $this->genero;
	}

	public function andar()
	{
		return "la persona esta andando";
	}

}


 ?>