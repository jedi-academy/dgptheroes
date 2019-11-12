<?php
namespace App\Models\hiphop;

use App\Models\Simple\CSVModel;

class Musicians extends CSVModel
{
    protected $origin = WRITEPATH . 'data/hiphop/musiciansData.csv';
    protected $keyField = 'id';
    protected $validationRules = [];
}
