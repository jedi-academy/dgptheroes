<?php
namespace App\Controllers\Tvstars;
use App\Controllers\BaseController;

class Tvstars extends BaseController
{
	public function index()
    {
		// connect to the model
	$places = new \App\Models\tvstars\tvb();
	// retrieve all the records
	$records = $places->findAll();
	// get a template parser
	$parser = \Config\Services::parser();
	// tell it about the substitions
	return $parser->setData(['records' => $records])
    // and have it render the template with those
    ->render('placeslist');
    }
	public function showme($id)
	{
	// connect to the model
	$places = new \App\Models\tvstars\tvb();
	// retrieve all the records
	$record = $places->find($id);
	// get a template parser
	$parser = \Config\Services::parser();
	// tell it about the substitions
	return $parser->setData($record)
    // and have it render the template with those
    ->render('oneplace');
	}
}