<?php
class Menu extends Model{
    public function getMenu($id=0){
        $array = array();
        $sql = "SELECT * FROM menu";
        if($id>0){
            $sql.=" WHERE id='$id'";
        }
        $sql = $this->db->query($sql);

        if($sql->rowCount()>0){
            if($id>0){
                $array = $sql->fetch();
            }else{
                $array = $sql->fetchAll();
            }
            
        }
        return $array;
    }
    public function add($name, $url){        
        $this->db->query("INSERT INTO menu SET name='$name', url='$url' ");
    }

    public function edit($id, $name, $url){
        $this->db->query("UPDATE menu SET name='$name', url='$url' WHERE id ='$id'");
    }

    public function del($id){
        $this->db->query("DELETE FROM menu WHERE id ='$id'");
    }
} 
