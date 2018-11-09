<?php
class Pages extends Model{
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