<?php
class Pages extends Model{
    public function getPages($id = 0){
        $array = array();
        $sql = "SELECT id, url, title FROM pages";
        if($id>0 ){
            $sql = "SELECT * FROM pages WHERE id='$id' "; 
        }
        $sql = $this->db->query($sql);
        if ($sql->rowCount()>0){
            if($id>0){
                $array = $sql->fetch();
            }else{
                $array = $sql->fetchAll();
            }
            
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
    public function add($title, $url, $body){        
        $this->db->query("INSERT INTO pages SET title='$title', url='$url', body='$body' ");
        
    }

    public function edit($id, $title, $url, $body){
        $this->db->query("UPDATE pages SET title='$title', url='$url', body='$body' WHERE id='$id' ");
    }

    public function del($id){
        $this->db->query("DELETE FROM pages WHERE id ='$id'");
    }
}