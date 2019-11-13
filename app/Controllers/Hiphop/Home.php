<?php
namespace App\Controllers\Hiphop;
use CodeIgniter\RESTful\ResourcePresenter;

class Home extends ResourcePresenter
{
    protected $modelName = 'App\Models\hiphop\Musicians';
    
    public function index()
    {
       return view('templates/list',$this->model->findAll());
    }
    
    public function showme($id)
    {
        // connect to the model
        $musicians = new \App\Models\hiphop\Musicians();
        // retrieve all the records
        $record = $musicians->find($id);      
        // get a template parser
        $parser = \Config\Services::parser();        
        // tell it about the substitions
        return $parser->setData($record)
            // and have it render the template with those
            ->render('hiphop/musicianIntro');
    }
}