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
        return $parser->setData($record)
                        // and have it render the template with those
                        ->render('creators/oneCreator');
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
        $form = form_open('#');
        /*$form .= form_fieldset('ID') .
                $record['id'] . form_fieldset_close();
        $form .= form_fieldset('Name') .
                'Name: ' .
                form_input('Name', $record['Name']) . form_fieldset_close();
        $form .= form_fieldset('Date_of_birth') .
                'Date_of_birth: ' .
                form_textarea('Date_of_birth', $record['Date_of_birth']) . form_fieldset_close();
        $form .= form_submit('mySubmit','submit');*/
        $form .= form_close();
        //get a template parser
        $parser = \Config\Services::parser();
        // tell it about the substitions
        return $parser->setData(['form' => $form], 'raw')
                        // and have it render the template with those
                        ->render('creators/edit');
    }
    public function handle(){
          helper(['form', 'url']);
          
         // echo var_dump($this->request->getVar());
          $rules = [
              'Name' => 'required|min_length[2]',
              'Date_of_birth' => 'required|min_length[5]',
              'Grduate' => 'required|min_length[5]',
              'Country' => 'required|min_length[5]',
              'Game_company' => 'required|min_length[5]',
              'Representative works' => 'required|min_length[5]'
          ];
                if (! $this->validate($rules))
                {
                        echo $this->validator->listErrors();
                        echo view('edit', [
                                'validation' => $this->validator
                        ]);
                }
                else
                {
                        echo view('Success');
                }
    }
    
}
