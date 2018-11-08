<?php
class homeController extends Controller{

	public function index(){

		$dados = array(
			'quantidade'=>5,
			'idade'=>'29',
			'nome'=> 'Rogério'
		);

		$this->loadTemplate('home',$dados);
	}


}