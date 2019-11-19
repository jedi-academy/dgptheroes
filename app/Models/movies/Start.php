<?php
namespace App\Models\movies;

use App\Models\Simple\CSVModel;


class Start extends CSVModel
{
    protected $origin = WRITEPATH . 'data/movies/moviesData.csv';
    protected $keyField = 'id';
    protected $validationRules = [];
}
