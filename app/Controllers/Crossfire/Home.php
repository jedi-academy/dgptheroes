<?php
namespace App\Controllers\Crossfire;
use CodeIgniter\RESTful\ResourcePresenter;
helper('form');

class Home extends ResourcePresenter
{
    public function index()
    {
        //Retrieve all player data from Players Model
        $cfplayers = new \App\Models\crossfire\Cfplayers();
        $data = $cfplayers->findAll();
        
        $table = new \CodeIgniter\View\Table();
        $table->setHeading('id', 'name','club');
        
        foreach($data as $record){
        $linkedThing = anchor("/crossfire/home/show/".$record->id,"{$record->id}");
        $table->addRow($linkedThing, $record->name, $record->club); 
     }
        $parser = \Config\Services::parser();     
        $view = \Config\Services::renderer(); 
     
        return
        $view->render('crossfire/top').
        //$parser->setData(['records' => $data])->render('content') .
        //$table->generate().
        $parser->setData(['table' => $table->generate()], 'raw')->render('crossfire/cfplayerList').
        $view->render('crossfire/bottom');   
    }
    
    public function show($id = null)
    {
        //Retrieve one player data from Players Model with $id
        $cfplayers = new \App\Models\crossfire\Cfplayers();
        $record = $cfplayers->find($id);
        
        $parser = \Config\Services::parser();
        
        return
        $parser->render('crossfire/top').
        $parser->setData($record)->render('crossfire/oneCfplayer').
        $parser->render('crossfire/bottom');
    }
    public function edit($id = NULL) {
        $cfplayers = new \App\Models\crossfire\Cfplayers();
        $record = $cfplayers->find($id);
        /*
                helper('form');
                
		$form = form_open('/crossfire/home/update/'.$id);
                $form .= 'Id:'.form_input('id', $record['id']).'<br><br>';
                $form .= 'Name:'.form_input('name', $record['name']).'<br><br>';
                $form .= 'Club:' .form_input('club', $record['club']).'<br><br>';
                $form .= 'City:' .form_input('city', $record['city']).'<br><br>';
                $form .= 'Main weapon:' .form_input('main weapon', $record['main weapon']).'<br><br>';
                $form .= 'Position:' .form_input('position', $record['position']).'<br><br>';
                $form .= 'Nickname:' .form_input('nickname', $record['nickname']).'<br><br>';
                $form .= 'Image:'.form_dropdown('select',  $record['image']).'<br><br>';
                
                $form .= form_submit('Submit','please update');
		// don't include any buttons yet
		$form .= form_close();
        */
		//get a template parser
		$parser = \Config\Services::parser();
		// tell it about the substitions
		return 
                $parser->render('crossfire/top').
                $parser->render('crossfire/editPage').
                //$parser->render('crossfire/editPage').
                $parser->render('crossfire/bottom');
    }
    
    public function handle() {
        $cfplayers = new \App\Models\crossfire\Cfplayers();
        helper(['form', 'url']);
        
     //   echo var_dump($this->request->getVar());
        
                if (! $this->validate($cfplayers->validationRules))
                {
                    echo $this->validator->listErrors();
                        echo view('crossfire/editPage', [
                                'validation' => $this->validator
                        ]);
                }
                else
                {
                        echo view('crossfire/Success');
                }
    }
}
