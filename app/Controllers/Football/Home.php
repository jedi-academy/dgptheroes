<?php
namespace App\Controllers\Football;
use CodeIgniter\RESTful\ResourcePresenter;

class Home extends ResourcePresenter
{
    public function index()
    {
        /*
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
         */
        $model = new \App\Models\football\FootballPalyers();
        $headings = $model->fields;
        $data = $model->findAll();

        $table = new \CodeIgniter\View\Table();
        unset($headings[count($headings) - 1]);
        unset($headings[count($headings) - 1]);
        unset($headings[count($headings) - 1]);
        unset($headings[count($headings) - 1]);
        unset($headings[count($headings) - 1]);
        $table->setHeading($headings);

        foreach ($data as $key => $value) {
            $linkedThing = anchor("/football/home/show/" . $value->id, "{$value->id}");
            $table->addRow([$linkedThing, $value->name, $value->age]);
        }
        $view = \Config\Services::renderer();
        $output = $view->render('football/top') .
                $table->generate() .
                $view->render('football/bottom');

        return $output;
    }
    
    public function show($id = NULL)
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
    public function edit($id = null) {
        parent::edit($id);
    }
}