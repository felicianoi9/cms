<?php
class Users extends Model{

   public function isLogged(){
       if(!isset($_SESSION['lgpainel']) || (isset($_SESSION['lgpainel']) && empty($_SESSION['lgpainel']))){
           header('Location: '.BASE.'painel/login');
           exit;
       }
   }

   public function logInPainel($email, $pass){
       $array = array();
       $sql = "SELECT * FROM users WHERE email='$email' AND password = '$pass' ";
       $sql = $this->db->query($sql);

       if($sql->rowCount()>0){
            $array = $sql->fetch();
            $_SESSION['lgpainel'] = $array['id'];
            foreach($array as $a){
                $this->userInfo[]=$a;
            } 
            return true;   
        }else{
            return false;
        }
   }
}