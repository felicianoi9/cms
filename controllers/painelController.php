<?php 
class painelController extends Controller{
    
    public function index(){  
        $u = new Users();
        $u->isLogged();

        $data = array();
        $this->loadTemplateInPainel('painel/home',$data);
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