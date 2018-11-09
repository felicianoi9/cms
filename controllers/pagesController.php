<?php
class pagesController extends Controller{
    public function index($params){
        $data = array(
            'url'=>'',
            'title'=> '',
            'body'=>''
        );

        $p = new Pages();		
        $page = $p->existPage($params);
        $data['url'] = $page['url'];
        $data['title'] = $page['title'];
        $data['body'] = $page['body'];


		$this->loadTemplate('pages',$data);
    }
}