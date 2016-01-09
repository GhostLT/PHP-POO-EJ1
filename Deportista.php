<?php 
require_once('Persona.php');

class Deportista extends Persona
{
	public $nombre;
	public $pais;
	public $deporte;


public function correr()
{
	return "El deportista esta corriendo";
}



}
 ?>