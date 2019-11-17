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

        $output = $parser->render('hiphop/top') .
                $table->generate() .
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

        $output = $parser->render('hiphop/top') .
                $parser->setData($record)->render('hiphop/musicianIntro') .
                $parser->render('hiphop/bottom');

        return $output;
    }

    public function edit($id = null) {
        $musicians = new \App\Models\hiphop\Musicians();
        $record = $musicians->find($id);
        
        helper('form');
        echo form_open('hiphop/home/update');
        $data_name = array('name' => 'name', 'id' => 'name_id', 'placeholder' => 'Edit Name');
        echo form_input($data_name);
        echo '<br><br>';
        $data_gender = array('Male' => 'He', 'Female' => 'She');
        echo form_dropdown('select', $data_gender, 'He', 'class="dropdown_box"');
        echo '<br><br>';
        $data_birthdate = array('name' => 'birthdate', 'id' => 'birthdate_id', 'placeholder' => 'Edit Birthdate');
        echo form_input($data_birthdate);
        echo '<br><br>';
        $data_yearsactive = array('name' => 'yearsactive', 'id' => 'yearsactive_id', 'placeholder' => 'Edit Years Active');
        echo form_input($data_yearsactive);
        echo '<br><br>';
        $data_labels = array('name' => 'labels', 'id' => 'labels_id', 'placeholder' => 'Edit Labels');
        echo form_input($data_labels);
        echo '<br><br>';
        $data_instruments = array('name' => 'instruments', 'id' => 'instruments_id', 'placeholder' => 'Edit Instruments');
        echo form_input($data_instruments);
        echo '<br><br>';
        $data_website = array('name' => 'website', 'id' => 'website_id', 'placeholder' => 'Edit Website');
        echo form_input($data_website);
        echo '<br><br>';
        echo form_submit('submit','submit');
        echo form_close();
        
        /*
        //get a template parser
        $parser = \Config\Services::parser();
        // tell it about the substitions
        $output = $parser->render('hiphop/top') .
                  $parser->setData(['form' => $form])->render('hiphop/musicianEdit') .
                  $parser->render('hiphop/bottom');

        return $output;
         */
    }
    
    public function update($id = null) {
        $musicians = new \App\Models\hiphop\Musicians();
        
        $data = array(
            'name' => $this->input->post('name'),
            'gender' => $this->input->post('select'),
            'birthdate' => $this->input->post('birthdate'),
            'yearsactive' => $this->input->post('yearsactive'),
            'labels' => $this->input->post('labels'),
            'instruments' => $this->input->post('instruments'),
            'website' => $this->input->post('website')
        );       
        $musicians->update($id, $data);
        
        $record = $musicians->find($id);
        
        // get a template parser
        $parser = \Config\Services::parser();
        // tell it about the substitions

        $output = $parser->render('hiphop/top') .
                $parser->setData($record)->render('hiphop/musicianIntro') .
                $parser->render('hiphop/bottom');

        return $output;
    }

}
