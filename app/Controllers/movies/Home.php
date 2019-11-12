<?php
namespace App\Controllers\movies;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        //Retrieve all player data from Players Model
        $starts = new \App\Models\movies\Start();
        $records = $starts->findAll();
        
        // get a template parser
        $parser = \Config\Services::parser();
        // tell it about the substitions
        return $parser->setData(['records' => $records])
            // and have it render the template with those
            ->render('movies/startList');
    }
    
    public function showme($id)
    {
        //Retrieve one player data from Players Model with $id
        $players = new \App\Models\movies\Start();
        $record = $players->find($id);
        
        // get a template parser
        $parser = \Config\Services::parser();
        
        // tell it about the substitions
        return $parser->setData($record)
            // and have it render the template with those
            ->render('movies/star');
    }
}