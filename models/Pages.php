<?php
class Pages extends Model{
    public function getPages(){
        $array = array();
        $sql = "SELECT id, url, title FROM pages";
        $sql = $this->db->query($sql);
        if ($sql->rowCount()>0){
            $array = $sql->fetchAll();
        }    
        return $array;  
    }

    public function existPage($url, $c = ''){
        $sql = "SELECT url, title, body FROM pages WHERE url = '$url' ";
        $sql = $this->db->query($sql);

        if ($sql->rowCount()>0){
            if($c==''){
                $array = array();
                $array = $sql->fetch();
                return $array;                
            }else{
                return true;
            }          
            
        }else{
            return 0;
        }
    }
}