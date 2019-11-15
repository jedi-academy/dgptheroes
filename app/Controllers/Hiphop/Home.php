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
            $linkedThing = anchor("/Hiphop/Home/showme/$record->id", $record->id);
            $table->addRow([$linkedThing, $record->name, $record->gender, $record->birthdate, $record->yearsactive, $record->labels, $record->instruments, $record->website]);
        }
        
        $content = $table->generate();
        
        return $content;
        
        /*
          $parser = \Config\Services::parser();

          // tell it about the substitions
          return $parser->setData(['records' => $records])
          // and have it render the template with those
          ->render('placeslist');
         */

        /*
          $model = new \App\Models\Places();
          $headings = $model->fields;
          $data = $model->findAll();

          $table = new \CodeIgniter\View\Table();
          // drop the last heading column
          unset($headings[count($headings)-1]);
          $table->setHeading($headings);

          foreach($data as $record) {
          //  unset($record[count($record)-1]);
          //  $table-addRow($record);
          $table->addRow($record->id, $record->name, $record->description);
          }

          $content = $table->generate();
         */

        /*
        $parser = \Config\Services::parser();

        $output = $parser->render('top') .
                //$parser->setData(['records' => $records]) -> render('content').
                $table->generate() .
                $parser->render('bottom');

        return $output;
         */
        
        
    }

    public function showme($id) {
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
