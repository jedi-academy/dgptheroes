<?php
namespace App\Models\crossfire;
use App\Models\Simple\CSVModel;
/**
 * Crossfire Players Data
 */
class Cfplayers extends CSVModel
{
         protected $origin = WRITEPATH . 'data/crossfire/crossfireData.csv';
         protected $keyField = 'id'; 
         protected $validationRules = [];
}
