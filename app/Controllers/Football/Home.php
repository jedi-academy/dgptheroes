<?php
namespace App\Controllers\Football;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        // connect to the model
        $FootballPalyers = new \App\Models\football\FootballPalyers();
        // retrieve all the records
        $records = $FootballPalyers->findAll();     
        // get a template parser
        $parser = \Config\Services::parser();       
        // tell it about the substitions
        return $parser->setData(['records' => $records])
            // and have it render the template with those
            ->render('football/FootballPalyersList');
    }
    
    public function showme($id)
    {
        // connect to the model
        $FootballPalyers = new \App\Models\football\FootballPalyers();
        // retrieve all the records
        $record = $FootballPalyers->find($id);      
        // get a template parser
        $parser = \Config\Services::parser();        
        // tell it about the substitions
        return $parser->setData($record)
            // and have it render the template with those
            ->render('football/FootballPalyersIntro');
    }
}