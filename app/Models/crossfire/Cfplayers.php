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
         protected $validationRules = [
             'name' => 'required|min_length[5]',
             'club' => 'required|min_length[5]',
             'city' => 'required|min_length[5]',
             //'main weapon' => 'required|min_length[5]',
             'position' => 'required|min_length[5]',
             'nickname' => 'required|min_length[3]'
         ];
}
