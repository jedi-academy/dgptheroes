<?php
namespace App\Controllers\Creators;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        //Retrieve all player data from Players Model
        
        $model = new \App\Models\creators\Creators();
        $headings = $model->fields;
        $data = $model->findAll();
        
        $table = new \CodeIgniter\View\Table();
     unset($headings[count($headings)-1]);
     $table->setHeading($headings);
     
     foreach ($data as $key => $value) {
     $linkedThing = anchor("Home/showme/$value->id","want to see more?");
     $table->addRow([$linkedThing, $value->Name, $value->Date_of_birth,$value->Grduate,$value->Country,$value->Game_company,$value->Representative_works,$value->Identifier,$value->image]);
}
     $view = \Config\Services::renderer();
     $output = $view->render('top') .
             
     $table->generate().
     $view->render('bottom');

       return $output;
    }
    
    public function showme($id)
    {
        //Retrieve one player data from Players Model with $id
        $creators = new \App\Models\creators\Game();
        $record = $creators->find($id);
        
        // get a template parser
        $parser = \Config\Services::parser();
        
        // tell it about the substitions
        return $parser->setData($record)
            // and have it render the template with those
            ->render('creators/oneCreator');
    }
}