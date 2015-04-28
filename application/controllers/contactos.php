<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactos extends CI_Controller {

	public function index(){
		$this->load->helper('url');
		$this->load->view('index');
	}

	public function login(){
		$this->load->view('login');
	}

	private function getAll(){
		//Se guardan los datos del formulario en variables
		$ap = $this->input->post("ap");
		$am = $this->input->post("am");
		$nombre = $this->input->post("nombre");
		$phone = $this->input->post("phone");
		$direccion = $this->input->post("direccion");
		$email = $this->input->post("email");
		$imagen = $this->input->post("files");
		if ($nombre =="") {
			$res = false;
		}else{
			$res = true;
		}
		//se regresan las variables en un array.
		return array($ap, $am, $nombre, $phone, $direccion,$email,$imagen,$res);
	}

	public function agregarContacto(){
		$this->load->database();
		$this->load->model('modeloContactos');
		//Se llama a la funcion getAll() y se guarda en una lista.
		list($ap, $am, $nombre, $phone, $direccion,$email,$imagen,$res)=self::getAll();
		if($res){
			//Codigo para subir la imagen.
			echo "<script>alert('Contacto Agregado con exito');</script>";
			$ruta_servidor="../../img";
			$ruta_temp=$_FILES['files']['tmp_name'];
			$file_name=$_FILES['files']['name'];
			$ruta_destino=$ruta_servidor.'/'.$file_name;
			echo $ruta_destino;
			move_uploaded_file($ruta_temp, $ruta_destino);
			//Se crea un array con las variables del formulario.
			$data = array("ap"=>$ap,"am"=>$am, "nombre"=>$nombre, "phone"=>$phone, "direccion"=>$direccion, "email"=>$email, "imagen"=>$ruta_destino, "estado"=>$estado=1);
			//Se manda el array para el insert.
			$this->modeloContactos->insertarContacto($data);
			self::index();
		}
		$this->load->view('agregarContacto');
	}

	public function detalles(){
		$this->load->model('modeloContactos');
		$id = $this->input->post("id");
		$data = $this->modeloContactos->getContactoById($id);
		$cielo = array("data" =>$data);
		$this->load->view('detalles', $cielo);
	}

	public function eliminarCatalogo(){
		$this->load->model('modeloContactos');
		$data = $this->modeloContactos->getContactos();
		//$numProductos = $this->Modelo_producto->countProducts();
		$cielo = array("data"=>$data);
		$this->load->view('eliminarCatalogo', $cielo);
	}

	public function eliminar(){
		$id = $this->input->post("id");
		$this->load->model('modeloContactos');
		$data = array("estado"=>$estado=0);
		$this->modeloContactos->eliminarContacto($id,$data);
		self::index();
	}

	public function modificarCatalogo(){
		$this->load->model('modeloContactos');
		$data = $this->modeloContactos->getContactos();
		//$numProductos = $this->Modelo_producto->countProducts();
		$cielo = array("data"=>$data);
		$this->load->view('modificarCatalogo', $cielo);
	}

	public function modificar(){
		$id = $this->input->post("id");
		$this->load->model('modeloContactos');
		if ($this->input->post("button")==TRUE) {
			list($ap, $am, $nombre, $phone, $direccion,$email,$imagen,$res)=self::getAll();
			$data = array("ap"=>$ap,"am"=>$am, "nombre"=>$nombre, "phone"=>$phone, "direccion"=>$direccion, "email"=>$email, "estado"=>$estado=1);
			$data = $this->modeloContactos->modificarContacto($id,$data);
			self::index();
		}else{
			$data = $this->modeloContactos->getContactoById($id);
			$cielo = array("data" =>$data);
			$this->load->view('modificar', $cielo);
		}
	}
}