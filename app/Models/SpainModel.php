<?php namespace App\Models;

use CodeIgniter\Model;
class SpainModel extends Model
{
  public function getTest()
  {
    $data = $this->db->query('SELECT * FROM campingsPlaceMysql.campings_general_data_use WHERE addressCountry = "ESPAGNE"');
    return $data->getResult();
  }
}