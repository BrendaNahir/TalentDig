<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{
	protected $table ='productos';
	protected $primaryKey ='id_producto';

	protected $useAutoIncrement=true;


	protected $returnType= 'array';
	protected $useSoftDeletes = false;

	protected $allowedFields = ['cod_producto','nombre_p','descripcion','precio','stock','categoria_id','imagen'];

	protected $useaTimestamps = false;
	protected $createdField = '' ;
	protected $updatedField= '';
	protected $deletedField = '';

	public function getProductoAll(){
		$db = \Config\Database::connect();
		$builder = $db->table('productos');
		$builder->select('*');
		$builder->join('producto_categoria', 'producto_categoria.id_categoria = productos.categoria_id');
		$query = $builder->get();
		return $query->getResultArray();
	  }

}  