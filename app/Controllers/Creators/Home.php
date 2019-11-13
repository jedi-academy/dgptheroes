<?php
namespace App\Controllers\Creators;
use CodeIgniter\RESTful\ResourcePresenter;

class Home extends ResourcePresenter
{
    public function index()
    {
        //Retrieve all player data from Players Model
        
        $model = new \App\Models\Creators\Creators();
        $headings = $model->fields;
        $data = $model->findAll();
        
        $table = new \CodeIgniter\View\Table();
     unset($headings[count($headings)-1]);
     unset($headings[count($headings)-1]);
     unset($headings[count($headings)-1]);
     $table->setHeading($headings);
     
     foreach ($data as $key => $value) {
        $linkedThing = anchor("/creators/home/show/".$value->id,"want to see more?");
        $table->addRow([$linkedThing, $value->Name, $value->Date_of_birth,$value->Grduate,$value->Country,$value->Game_company]);
   }
     $view = \Config\Services::renderer();
     $output = $view->render('creators/top') .
             
     $table->generate().
     $view->render('creators/bottom');

       return $output;
    }
    
    public function show($id = NULL)
    {
        //Retrieve one player data from Players Model with $id
        $creators = new \App\Models\Creators\Creators();
        $record = $creators->find($id);
        
        // get a template parser
        $parser = \Config\Services::parser();
        
        // tell it about the substitions
        return $parser->setData($record)
            // and have it render the template with those
            ->render('creators/oneCreator');
    }
}