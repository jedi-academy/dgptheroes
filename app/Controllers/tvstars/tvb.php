<?php
namespace App\Controllers\Tvstars;
use App\Controllers\BaseController;

class tvb extends \CodeIgniter\Controller
{
    public function index()
    {
       // connect to the model
       $places = new \App\Models\tvstars\tvb();
       // retrieve all the records
       $records = $places->findAll();
       // JSON encode and return the result
       return json_encode($records);
    }
}