<?php

namespace App\Models;
use CodeIgniter\Model;

class VacanciesModel extends Model
{
    protected $table      = 'vacancy';
	protected $returnType     = 'array';

    public function listVacancies()
    {
		$db      = \Config\Database::connect();

		$builder = $db->table('vacancy');

		$builder->select('*');
		$builder->join('company', 'vacancy.company_ID=company.ID');
		$builder->limit(10);
		$query = $builder->get();

		$result = $query->getResult();
		if (count($result)>0){
			return $result;
		}
		else{
			return false;
		}
    }
	public function getVacancyDetail($vacancy){
		$db      = \Config\Database::connect();

		$builder = $db->table('vacancy');

		$builder->select('*');
		$builder->join('company', 'vacancy.company_ID=company.ID');
		$query = $builder->getWhere(['ID' => $vacancy]);
		$result = $query->getResult();
		if (count($result)>0){
			return $result;
		}
		else{
			return false;
		}
	}
}
