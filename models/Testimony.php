<?php
class Testimony extends Model{
    public function getTestimony($limit = 0){
        $array = array();
        $sql = "SELECT * FROM testimony ORDER BY RAND() ";
        if($limit>0){
            $sql.=" LIMIT ".$limit;
        }
        $sql = $this->db->query($sql);

        if($sql->rowCount()>0){
            $array = $sql->fetchAll();
        }

        return $array;
    }
}