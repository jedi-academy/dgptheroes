<?php
namespace App\Models;
use App\Models\Simple\XMLModel;


class tvb extends XMLModel
{
    protected $origin = WRITEPATH . '/writable/data/tvstars/tvstars.xml';
    
    protected $keyField = 'id';
    
    protected $validationRules = [];
    
}