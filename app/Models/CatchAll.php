<?php

use App\Models\Campings_general_data_use;

class CatchAll extends Campings_general_data_use
{
    public function getNews($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}