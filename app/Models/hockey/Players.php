<?php
namespace App\Models\hockey;

use App\Models\Simple\XMLModel;

/**
 * Hockey Player Model
 */
class Players extends XMLModel
{
    protected $origin = WRITEPATH . 'data/hockey/hockeyData.xml';
    protected $keyField = 'id';
    protected $validationRules = [];
}
