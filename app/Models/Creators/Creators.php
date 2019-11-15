<?php

namespace App\Models\Creators;

use App\Models\Simple\XMLModel;

class Creators extends XMLModel {

    protected $origin = WRITEPATH . 'data/creators/xmldata.xml';
    protected $keyField = 'id';
    protected $validationRules = [];

}
