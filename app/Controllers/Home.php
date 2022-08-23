<?php namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController
{
  public function index()
  {
    $home_model = new HomeModel();

    $data = $home_model->getTest(); 
    
    return view('welcome_message', $data); 
  }
}