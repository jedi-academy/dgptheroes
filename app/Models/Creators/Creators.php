<?php

namespace App\Models\Creators;

use App\Models\Simple\XMLModel;

class Creators extends XMLModel {

    protected $origin = WRITEPATH . 'data/creators/xmldata.xml';
    protected $keyField = 'id';
    protected $validationRules = [
            'Name' => 'required|min_length[5]',
            'Date_of_birth' => 'required|min_length[5]',
            'Grduate' => 'required|min_length[5]',
            'Country' => 'required|min_length[5]',
            'Game_company' => 'required|min_length[5]',
            'Representative_works' => 'required|min_length[5]',
            'Identifier' => 'required|min_length[5]'
    ];

}
