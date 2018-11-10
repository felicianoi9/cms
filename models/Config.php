<?php
class Config extends Model{
    public function getConfig(){
        $array = array();
        $sql = "SELECT * FROM config ";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount()>0){
            foreach($sql->fetchAll() as $c){
                $array[$c['name']] = $c['valor'];
            }
        } 
        return $array;
    }
    public function setPropriedade($name, $valor) {

		$this->db->query("UPDATE config SET valor = '$valor' WHERE name = '$name'");

	}

}