<?php 

namespace DankiCode\Controllers;

class RegistrarController 
{	
	public function index() 
	{

		if (isset($_POST['registrar'])) {
			$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			$senha = addslashes($_POST['senha']);

			if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
				\DankiCode\Utilidades::alerta('E-mail inválido.');
				\DankiCode\Utilidades::redirect(INCLUDE_PATH . 'registrar');
			} else if (strlen($senha) < 6) {
				\DankiCode\Utilidades::alerta('Sua senha é muito curta.');
				\DankiCode\Utilidades::redirect(INCLUDE_PATH . 'registrar');
			} else {
				$senha = \DankiCode\Bcrypt::hash($senha);
				$registro = \DankiCode\MySql::connect();
				$registro = \DankiCode\MySql::connect()->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
				$registro->bindValue(':nome', $nome); 
				$registro->bindValue(':email', $email);
				$registro->bindValue(':senha', $senha);

				$registro->execute();

				\DankiCode\Utilidades::alerta('Registrado com sucesso!');
				//\DankiCode\Utilidades::redirect(INCLUDE_PATH);
                header('Location: ' . INCLUDE_PATH);
			}

		}

		\DankiCode\Views\MainView::render('registrar');
	}
}
