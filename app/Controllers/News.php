<?php 


namespace App\Controllers;

use CatchAll;

class News extends BaseController
{
    public function index($slug = null)
    {

        $model = model(CatchAll::class);
        $data = $model->getNews($slug);


        return view('News/overview', $data);
    }
}

