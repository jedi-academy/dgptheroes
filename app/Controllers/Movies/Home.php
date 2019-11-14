<?php
namespace App\Controllers\movies;
use CodeIgniter\RESTful\ResourcePresenter;

class Home extends ResourcePresenter
{
    public function index()
    {
        //Retrieve all player data from Players Model
        $Start = new \App\Models\movies\Start();
        $headings = $Start->fields;
        $records = $Start->findAll();
        
  $table = new \CodeIgniter\View\Table();
     unset($headings[count($headings)-1]);
     unset($headings[count($headings)-1]);
     unset($headings[count($headings)-1]);
     $table->setHeading($headings);
     
     foreach ($records as $key => $value) {
        $linkedThing = anchor("/movies/home/show/".$value->id,"more information?");
        $table->addRow([$linkedThing, $value->Name, $value->country,$value->gender,$value->birthday,$value->constellation]);
   }
     $view = \Config\Services::renderer();
     $output = $view->render('creators/top');
             
     $table->generate();
     $view->render('creators/bottom');

       return $output;
    
    }
    
    public function show($id=null)
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