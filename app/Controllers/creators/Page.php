<?php
namespace App\Controllers\creators;
use App\Controllers\BaseController;

class Page extends BaseController
{
    public function index()
    {
        //Retrieve all player data from Players Model
        $creators = new \App\Models\creators\Game();
        $records = $creators->findAll();
        
        // get a template parser
        $parser = \Config\Services::parser();
        
        // tell it about the substitions
        return $parser->setData(['records' => $records])
            // and have it render the template with those
            ->render('creators\creatorsList');
    }
    
    public function showme($id)
    {
        //Retrieve one player data from Players Model with $id
        $creators = new \App\Models\creators\Game();
        $record = $creators->find($id);
        
        // get a template parser
        $parser = \Config\Services::parser();
        
        // tell it about the substitions
        return $parser->setData($record)
            // and have it render the template with those
            ->render('creators\oneCreator');
    }
}