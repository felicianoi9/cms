<?php
class homeController extends Controller{

	public function index(){

		$data = array();

		if(isset($_POST['email'])){

			echo "oi";exit;
			$assunto= addslashes($_POST['assunto_contato']); 
			$email= addslashes($_POST['email_contato']); 
			$mensagem= addslashes($_POST['mensagem_contato']); 

			$contato = new Contato();
			print_r($_POST);exit;
			$contato->setContato($assunto, $email, $mensagem);
		}

		


		
		$this->loadTemplate('home',$data);
	}

}