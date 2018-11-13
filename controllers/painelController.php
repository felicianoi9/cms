<?php 
class painelController extends Controller{
    
    public function index(){  
        $data = array(
            'pages'=>''
        );
        $u = new Users();
        $u->isLogged();

        // Listagem de páginas para o View painel/home 
        $pages = new Pages();
        $data['pages'] = $pages->getPages();

        
        $this->loadTemplateInPainel('painel/home',$data);
    }

    /////////////// INÍCIO - Actions da Empresa /////////////////
    public function empresa(){
        $data = array(
            'empresa'=>''
        );
        $u = new Users();
        $u->isLogged();
        $empresa = new Empresa();
        $data['empresa'] = $empresa->getInfo();

        if(isset($_POST['texto'])){            
            
            $texto = addslashes($_POST['texto']);
            $missao = addslashes($_POST['missao']);
            $visao = addslashes($_POST['visao']);
            $valores = addslashes($_POST['valores']);

            $empresa->edit($texto, $missao, $visao, $valores );
            header('Location: '.BASE.'painel');
        }          
        $this->loadTemplateInPainel('painel/empresa_texto',$data); 
    }

    /////////////// FIM - Actions da Empresa /////////////////

    /////////////// INÍCIO - Actions do Menu /////////////////
    public function menus(){
        $data = array(
            'menus'=>''
        );
        $u = new Users();
        $u->isLogged();

        // Listagem de páginas para o View painel/home 
        $menus = new Menu();
        $data['menus'] = $menus->getMenu();

        
        $this->loadTemplateInPainel('painel/menus',$data);
    }

    public function menuAdd(){
        $data = array();
        $u = new Users();
        $u->isLogged();

        // Adiciona Menu à lista de menus
        if(isset($_POST['name']) && !empty($_POST['name'])){
            $menus = new Menu();
            $name = addslashes($_POST['name']);
            $url = addslashes($_POST['url']);

            $menus->add($name, $url);
            header('Location: '.BASE.'painel/menus');
        }          
        $this->loadTemplateInPainel('painel/menu_add',$data);  
    }

    public function menuEdit($id){
        $data = array(
            'menus'=>''
        );
        $u = new Users();
        $u->isLogged();
        $menus = new Menu();
        $data['menus'] = $menus->getMenu($id);
        // Edita Menu
        if(isset($_POST['name']) && !empty($_POST['name'])){
            $menus = new Menu();
            $name = addslashes($_POST['name']);
            $url = addslashes($_POST['url']);

            $menus->edit($id, $name, $url);
            header('Location: '.BASE.'painel/menus');
        }          
        $this->loadTemplateInPainel('painel/menu_edit',$data);  
    }

    public function menuDel($id){
        $data = array();
        $u = new Users();
        $u->isLogged();

        $menus = new Menu();
        $menus->del($id);
        header('Location: '.BASE.'painel/menus');              

    }
    //////////// FIM- Actions do Menu /////////////////

    /////////////// INÍCIO - Actions das páginas /////////////////
    public function pageAdd(){
        $data = array();
        $u = new Users();
        $u->isLogged();

        // Adiciona Menu à lista de páginas
        if(isset($_POST['title']) && !empty($_POST['title'])){
            $pages = new Pages();
            $title = addslashes(utf8_decode($_POST['title']));
            $url = addslashes($_POST['url']);
            $body = addslashes($_POST['body']);

            $pages->add($title, $url, $body);

            if(isset($_POST['add_menu']) && !empty($_POST['add_menu'])){
                $menu = new Menu();
                $menu->add($title, $url);
            }
            header('Location: '.BASE.'painel');
        }          
        $this->loadTemplateInPainel('painel/page_add',$data); 
    }

    public function pageEdit($id){
        $data = array(
            'page'=>''
        );
        $u = new Users();
        $u->isLogged();
        $page = new Pages();
        $data['page'] = $page->getPages($id);

        // Edita uma página (título, url e body)
        if(isset($_POST['title']) && !empty($_POST['title'])){
            
            $title = addslashes(utf8_decode($_POST['title']));
            $url = addslashes($_POST['url']);
            $body = addslashes($_POST['body']);

            $page->edit($id, $title, $url, $body);
            header('Location: '.BASE.'painel');
        }          
        $this->loadTemplateInPainel('painel/page_edit',$data); 
    }
    public function pageDel($id){
        $data = array();
        $u = new Users();
        $u->isLogged();

        $page = new Pages();
        $page->del($id);
        header('Location: '.BASE.'painel');              

    }
    /////////////// FIM - Actions das páginas ////////////////////

    /////////////// INÍCIO - Actions das Configurações /////////////////
    public function config(){
        $u = new Users();
        $u->isLogged();        
        $c = new Config();

        if(isset($_POST['site_title']) && !empty($_POST['site_title'])) {
            $site_title = addslashes($_POST['site_title']);
            $home_welcome = addslashes($_POST['home_welcome']);
            $site_template = addslashes($_POST['site_template']);
                       

            $arquivo = $_FILES['home_banner'];            
            //print_r($arquivo);exit;
            if(isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name']) ){  
                $arquivo['name'] = md5(time().rand(0,99)).'.png'; 
                move_uploaded_file($arquivo['tmp_name'], "assets/images/".$arquivo['name'] );                
                $c->setPropriedade('home_banner', $arquivo['name']);    
            }

            $c->setPropriedade('site_title', $site_title);
            $c->setPropriedade('home_welcome', $home_welcome);
            $c->setPropriedade('site_template', $site_template);
            

            header("Location: ".BASE."painel/config");
            exit;
        }

        $data = array();

        $array = $c->getConfig();
        $data['site_title'] = $array['site_title'];
        $data['site_template'] = $array['site_template'];
        $data['home_banner'] = $array['home_banner'];
        $data['home_welcome'] = $array['home_welcome'];
               
               
        $this->loadTemplateInPainel('painel/config',$data); 
    }
    /////////////// FIM - Actions das Configurações  ////////////////////
    public function login(){
        $data = array(
            'msg' => ''
        );
        $u = new Users();
        if(isset($_POST['email']) && !empty($_POST['email'])){
            $email = addslashes($_POST['email']);
            $pass = md5(addslashes($_POST['password']));
            if($u->logInPainel($email, $pass)){
                header('Location: '.BASE.'painel');
                exit;
            }else{
                $data['msg'] = "E-mail e/ou Senha inválidos ";
            }
            
        }
        $this->loadView('painel/login',$data);
    }

    public function logout(){
        unset($_SESSION['lgpainel']);
        header('Location: '.BASE.'painel');
    }

    
}