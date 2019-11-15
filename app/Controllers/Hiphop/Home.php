<?php

namespace App\Controllers\Hiphop;

use CodeIgniter\RESTful\ResourcePresenter;

class Home extends ResourcePresenter {

    protected $modelName = 'App\Models\hiphop\Musicians';

    public function index() {
        // connect to the model
        $Musicians = new \App\Models\hiphop\Musicians();
        $headings = $Musicians->fields;
        // retrieve all the records
        $data = $Musicians->findAll();

        $table = new \CodeIgniter\View\Table();
        unset($headings[count($headings) - 1]);
        $table->setHeading($headings);

        foreach ($data as $record) {
            //  unset($record[count($record)-1]);
            //  $table-addRow($record);
            $linkedThing = anchor("/hiphop/home/show/$record->id", $record->id);
            $table->addRow([$linkedThing, $record->name, $record->gender, $record->birthdate, $record->yearsactive, $record->labels, $record->instruments, $record->website]);
        }

        $parser = \Config\Services::parser();

        $output = $parser->render('hiphop/top').
                  $table->generate().
                  $parser->render('hiphop/bottom');

        return $output;
    }

    public function show($id = null) {
        // connect to the model
        $musicians = new \App\Models\hiphop\Musicians();
        // retrieve all the records
        $record = $musicians->find($id);
        // get a template parser
        $parser = \Config\Services::parser();
        // tell it about the substitions
        
        $output = $parser->render('hiphop/top').
                  $parser->setData($record)->render('hiphop/musicianIntro').
                  $parser->render('hiphop/bottom');
        
        return $output;
    }

}
