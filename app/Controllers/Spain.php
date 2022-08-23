<?php namespace App\Controllers;

use App\Models\SpainModel;

class Spain extends BaseController
{
  public function index()
  {
    $spain_model = new SpainModel();

    $data = $spain_model->getTest(); 
    
    // return view('Spain/es', $data); 
    return json_encode($data); 
  }
}