<?php
class homeController extends Controller{

	public function index(){

		$data = array(
			'testimony'=>array()
		);

		$testimony = new Testimony();

		$data['testimony'] = $testimony->getTestimony(2);

		$this->loadTemplate('home',$data);
	}


}