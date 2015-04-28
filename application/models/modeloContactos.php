<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ModeloContactos extends CI_Model {
	//Obtiene todos los productos.
	public function getContactos(){
		$this->db->select("*")->from("contactos")->where("estado",1)->order_by("nombre");
		$query = $this->db->get();
		if ($query->num_rows()>0) {
			return $query->result();
		}
	}	
	//Obtiene los datos de un producto por ID.
	public function getContactobyId($id){
		$this->db->select("*")->from("contactos")->where("id_contacto", $id);
		$query = $this->db->get();
		if ($query->num_rows()>0) {
			return $query->result();
		}
	}
	//Hace la insercion de un producto.
	public function insertarContacto($data){
		$this->db->insert("contactos",$data);
	}
	//Modifica el producto
	public function modificarContacto($id,$data){
		$this->db->update('contactos', $data, "id_contacto = $id");
	}
	//Ahce una baja logica de un producto
	public function eliminarContacto($id,$data){
		$this->db->update('contactos',$data, "id_contacto = $id");
	}
}