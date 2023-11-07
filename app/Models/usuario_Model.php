<?php
namespace App\Models;
use CodeIgniter\Model;

class usuario_Model extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre','apellido','usuario','email','pass','perfil_id','baja'];

    public function getUsuarioAll(){
		$db = \Config\Database::connect();
		$builder = $db->table('usuarios');
		$builder->select('*');
		$builder->join('perfiles', 'perfiles.id_perfiles = usuarios.perfil_id');
		$query = $builder->get();
		return $query->getResultArray();
	  }

}