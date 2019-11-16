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
        $parser = \Config\Services::parser();     
        $view = \Config\Services::renderer(); 
     
        return
        $view->render('crossfire/top').
        //$parser->setData(['records' => $data])->render('content') .
        //$table->generate().
        $parser->setData(['table' => $table->generate()], 'raw')->render('crossfire/cfplayerList').
        $view->render('crossfire/bottom');   
    }
    
    public function show($id = null)
    {
        //Retrieve one player data from Players Model with $id
        $cfplayers = new \App\Models\crossfire\Cfplayers();
        $record = $cfplayers->find($id);
        
        $parser = \Config\Services::parser();
        
        return
        $parser->render('crossfire/top').
        $parser->setData($record)->render('crossfire/oneCfplayer').
        $parser->render('crossfire/bottom');
    }
    public function edit($id = null) {
        
        parent::edit($id);
    }
}
