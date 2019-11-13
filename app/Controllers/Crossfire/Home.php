<?php
namespace App\Controllers\Crossfire;
use CodeIgniter\RESTful\ResourcePresenter;

class Home extends ResourcePresenter
{
    public function index()
    {
        //Retrieve all player data from Players Model
        $cfplayers = new \App\Models\crossfire\Cfplayers();
        $headings = $cfplayers->fields;
        $data = $cfplayers->findAll();
        
        $table = new \CodeIgniter\View\Table();
        unset($headings[count($headings)-1]);
        unset($headings[count($headings)-1]);
        unset($headings[count($headings)-1]);
        $table->setHeading($headings);
        
        foreach($data as $record){
        $linkedThing = anchor("/crossfire/home/showme/".$record->id,"{$record->id}");
        $table->addRow($linkedThing, $record->name, $record->club,$record->nickname); 
     }
        $parser = \Config\Services::parser();     
        $view = \Config\Services::renderer();
        $output = $view->render('crossfire/top').
        //$parser->setData(['records' => $data])->render('content') .
        $table->generate().
        $view->render('crossfire/bottom');
     
        return $output;
        
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
