<?php

namespace App\Models\football;

use App\Models\Simple\CSVModel;

class FootballPalyers extends CSVModel {

    protected $origin = WRITEPATH . 'data/football/footballdata.csv';
    protected $keyField = 'id';
    protected $validationRules = [];
}