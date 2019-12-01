<?php
namespace App\Models\hiphop;

use App\Models\Simple\CSVModel;

class Musicians extends CSVModel
{
    protected $origin = WRITEPATH . 'data/hiphop/musiciansData.csv';
    protected $keyField = 'id';
    protected $validationRules = [
              'name' => 'required|min_length[2]',
              'select' => 'required',
              'birthdate' => 'required|valid_date',
              'yearsactive' => 'required',
              'labels' => 'required',
              'instruments' => 'required',
              'website' => 'required'
    ];
}
