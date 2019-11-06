<?php
namespace App\Models\crossfire;

/**
 * Crossfire Players Data
 */
class Cfplayers extends Simple\CSVModel
{
         protected $origin = WRITEPATH . 'data/crossfire/crossfireData.csv';
         protected $keyField = 'id'; 
         protected $validationRules = [];
}
