<?php
namespace App\Controllers\Crossfire;
use CodeIgniter\RESTful\ResourcePresenter;

class Home extends ResourcePresenter
{
    public function index()
    {
        //Retrieve all player data from Players Model
        $cfplayers = new \App\Models\crossfire\Cfplayers();
        $data = $cfplayers->findAll();
        
        $table = new \CodeIgniter\View\Table();
        $table->setHeading('id', 'name','club');
        
        foreach($data as $record){
        $linkedThing = anchor("/crossfire/home/show/".$record->id,"{$record->id}");
        $table->addRow($linkedThing, $record->name, $record->club); 
     }
        //$parser = \Config\Services::parser();     
        $view = \Config\Services::renderer();
        $output = $view->render('crossfire/top').
        //$parser->setData(['records' => $data])->render('content') .
        $table->generate().
        $view->render('crossfire/bottom');
     
        return $output;   
    }
    
    public function show($id = NULL)
    {
        //Retrieve one player data from Players Model with $id
        $cfplayers = new \App\Models\crossfire\Cfplayers();
        $record = $cfplayers->find($id);
        
        // get a template parser
        $parser = \Config\Services::parser();
        
        // tell it about the substitions
        return 
        $parser->setData($record)->render('crossfire/oneCfplayer').
        $parser->render('crossfire/bottom');
    }
}
