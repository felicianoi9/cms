<?php
class Empresa extends Model{
	public function getInfo(){
		$texto = array();
		$sql = $this->db->query("SELECT texto, missao, visao, valores FROM site_empresa WHERE id = 1");
		if($sql->rowCount()>0 ){
			$texto = $sql->fetch();

		}


		return $texto;

	}

	public function edit($texto, $missao, $visao, $valores ){
		$this->db->query("UPDATE site_empresa SET texto='$texto', texto='$texto', missao='$missao', visao='$visao', valores='$valores' ");
	}
}