<?php
class Contato extends Model{
	
	public function setContato($assunto, $email, $mensagem){
		$this->db->query("INSERT INTO contatos SET assunto ='$assunto' , email='$email' , mensagem= '$mensagem' ");
	}
}