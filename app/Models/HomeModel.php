<?php namespace App\Models;

use CodeIgniter\Model;
class HomeModel extends Model
{
  public function getTest()
  {
    $data = $this->db->query('SELECT * FROM campingsPlaceMysql.campings_general_data_use');
    return $data->getResult();
  }
}