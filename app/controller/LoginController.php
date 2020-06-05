<?php

class LoginController
{
	public function index(){
		$loader = new \Twig\Loader\FilesystemLoader('app/view');
		$twig = new \Twig\Environment($loader, [
			//'cache' => '/path/to/compilation_cache',
			'auto_reload' => true
		]);
		$template = $twig->load('login.html');
		return $template->render();
	}

	public function check(){
	/**
	 * Recebe - Email e Senha digitado e enviado pelo formulário
	 * Aciona o Médotdo validateLogin para validar o login
	 */
	
	 try{
			$user = new User;
			$user->setEmail($_POST['email']);
			$user->setSenha($_POST['senha']);
			$user->validateLogin();
			header('Location: http://localhost/login/login02/dashboard');

			}catch(\Exception $e){
				header('Location: http://localhost/login/login02/');
	 }
	}
}