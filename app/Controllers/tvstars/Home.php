<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;

class Home extends ResourcePresenter {

    public function index() {
        $data = [];
        $count = 0;
        foreach (config('App')->categories as $cat) {
            $data[] = ['name' => $cat];
        }

        $parser = service('parser');
        return $parser->setData(['cells' => $data], 'raw')
                        ->render('welcome_message');
        $places = new \App\Models\tvstars\tvb();
        // retrieve all the records
        $records = $places->findAll();
        $view = \Config\Services::renderer();
        $table = new \CodeIgniter\View\Table();
        $parser = \Config\Services::parser();
        // tell it about the substitions
        //return $parser->setData(['records' => $records])
        // and have it render the template with those

        $table->setHeading('ID', 'Name', 'Description');
        //add table row
        foreach ($records as $key => $value) {
            $table->addRow([$value->id, 'HongKong', 'Southern']);
        }

        $content = $table->generate();


        $output = $view->render('top') .
                $content .
                $view->render('bottom');
        return $output;
    }

    public function showme($id) {
        // connect to the model
        $places = new \App\Models\tvstars\tvb();
        // retrieve all the records
        $record = $places->find($id);
        // get a template parser
        $parser = \Config\Services::parser();
        // tell it about the substitions
        return $parser->setData($record)
                        // and have it render the template with those
                        ->render('oneplace');
    }

}
