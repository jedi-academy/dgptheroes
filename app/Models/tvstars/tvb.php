<?php
namespace App\Models\tvstars;
use App\Models\Simple\XMLModel;


class Tvb extends XMLModel
{
    protected $origin = WRITEPATH . '/writable/data/tvstars/tvstars.xml';
    
    protected $keyField = 'id';
    
    protected $validationRules = [];
    
}