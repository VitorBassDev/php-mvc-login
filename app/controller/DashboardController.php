<?php
	class DashboardController
	{
		public function index()
		{
			echo 'Usuário Logado com Sucesso <a href="http://localhost/login/login02/dashboard/logout"> Logout </a>';
		}

		public function logout(){

			unset($_SESSION['usr']);
			session_destroy();
			header('Location: http://localhost/login/login02/');
		}
	}