<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriaModel extends Model
{
	protected $table ='producto_categoria';
	protected $primaryKey ='id_categoria';

	protected $useAutoIncrement=true;


	protected $returnType= 'array';
	protected $useSoftDeletes = false;

	protected $allowedFields = ['descripcion_categoria'];

	protected $useaTimestamps = false;
	protected $createdField = '' ;
	protected $updatedField= '';
	protected $deletedField = '';

}  