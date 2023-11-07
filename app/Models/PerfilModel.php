<?php

namespace App\Models;

use CodeIgniter\Model;

class PerfilModel extends Model
{
	protected $table ='perfiles';
	protected $primaryKey ='id_perfiles';

	protected $useAutoIncrement=true;


	protected $returnType= 'array';
	protected $useSoftDeletes = false;

	protected $allowedFields = ['descripcion'];

	protected $useaTimestamps = false;
	protected $createdField = '' ;
	protected $updatedField= '';
	protected $deletedField = '';

}  