<?php

namespace App\Controllers\Creators;

use CodeIgniter\RESTful\ResourcePresenter;

class Home extends ResourcePresenter {

    public function index() {
        //Retrieve all player data from Players Model

        $model = new \App\Models\Creators\Creators();
        $headings = $model->fields;
        $data = $model->findAll();

        $table = new \CodeIgniter\View\Table();
        unset($headings[count($headings) - 1]);
        unset($headings[count($headings) - 1]);
        unset($headings[count($headings) - 1]);
        $table->setHeading($headings);

        foreach ($data as $key => $value) {
            $linkedThing = anchor("/creators/home/show/" . $value->id, "want to see more?");
            $table->addRow([$linkedThing, $value->Name, $value->Date_of_birth, $value->Grduate, $value->Country, $value->Game_company]);
        }
        $view = \Config\Services::renderer();
        $output = $view->render('creators/top') .
                $table->generate() .
                $view->render('creators/bottom');

        return $output;
    }

    public function show($id = NULL) {
        //Retrieve one player data from Players Model with $id
        $creators = new \App\Models\Creators\Creators();
        $record = $creators->find($id);

        // get a template parser
        $parser = \Config\Services::parser();

        // tell it about the substitions
        return $parser->setData($record)->render('creators/oneCreator') . $parser ->render('creators/top') .$parser ->render('creators/bottom');
    }

    public function edit($id = null) {
        parent::edit($id);
        // connect to the model
        $creators = new \App\Models\Creators\Creators();
        // retrieve all the records
        $record = $creators->find($id);
        // build a form to present this destination
        // nothing is editable (nor will the ID be), but it should look familar
        helper('form');
        
        echo form_open('#');
        
        $name = ['name' => 'Joe', 'id' => 'name_id','placeholder' => 'Edit Name'];;
        echo form_input();
        
        echo form_close();
        /*$form = form_open('#');
        $form .= form_fieldset('ID') .
                $record['id'] . form_fieldset_close();
        $form .= form_fieldset('Name') .
                'Name: ' .
                form_input('Name', $record['Name']) . form_fieldset_close();
        $form .= form_fieldset('Date_of_birth') .
                'Date_of_birth: ' .
                form_textarea('Date_of_birth', $record['Date_of_birth']) . form_fieldset_close();
        
        $form .= form_close();*/
        
        //get a template parser
        
        $parser = \Config\Services::parser();
        // tell it about the substitions
        return $parser->setData(['form' => $form], 'raw')
                        // and have it render the template with those
                        ->render('creators/oneCreator');
    }

}
