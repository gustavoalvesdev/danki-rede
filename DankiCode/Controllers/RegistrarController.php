<?php 

namespace DankiCode\Controllers;

class RegistrarController 
{	
	public function index() 
	{
		\DankiCode\Views\MainView::render('registrar');
	}
}
