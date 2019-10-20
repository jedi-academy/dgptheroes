<?php
namespace App\Controllers\Crossfire;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        //Retrieve all player data from Players Model
        $cfplayers = new \App\Models\crossfire\Cfplayers();
        $records = $cfplayers->findAll();
        
        // get a template parser
        $parser = \Config\Services::parser();
        
        // tell it about the substitions
        return $parser->setData(['records' => $records])
            // and have it render the template with those
            ->render('crossfire/cfplayerList');
    }
    
    public function showme($id)
    {
        //Retrieve one player data from Players Model with $id
        $cfplayers = new \App\Models\crossfire\Cfplayers();
        $record = $cfplayers->find($id);
        
        // get a template parser
        $parser = \Config\Services::parser();
        
        // tell it about the substitions
        return $parser->setData($record)
            // and have it render the template with those
            ->render('crossfire/oneCfplayer');
    }
}