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
		$builder->join('company', 'vacancy.company_ID=company.companyID');
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
		$builder->join('company', 'vacancy.company_ID=company.companyID');
		$query = $builder->getWhere(['vacancy.vacancyID' => $vacancy]);
		$result = $query->getResult();
		if (count($result)>0){
			return $result;
		}
		else{
			return false;
		}
	}
	public function getSimilar($vacancy){
		$db      = \Config\Database::connect();

		$builder = $db->table('vacancy');

		$builder->select('area');
		$query = $builder->getWhere(['vacancy.vacancyID' => $vacancy]);
		$result = $query->getResult();
		$area = $result[0];
		$areaOG = $area->area;

		$builder->select('*');
		$builder->join('company', 'vacancy.company_ID=company.companyID');
		$builder->limit(5);
		$builder->where('vacancy.vacancyID !=', $vacancy);
		$builder->where('vacancy.area', $areaOG);
		$query = $builder->get();
		//$query = $builder->getWhere(['vacancy.area' => $areaOG]);
		$result = $query->getResult();

		if (count($result)>0){
			return $result;
		}
		else{
			return false;
		}
	}
}
