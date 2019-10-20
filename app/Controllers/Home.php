<?php
namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{
		$data = [];
		$count = 0;
		foreach (config('App')->categories as $cat)
		{
			$data[] = ['name' => $cat];
		}

		$parser = service('parser');
		return $parser->setData(['cells' => $data], 'raw')
						->render('welcome_message');
	}

}
