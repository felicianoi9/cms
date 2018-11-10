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