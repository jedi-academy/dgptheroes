<?php
namespace App\Models\hockey;

/**
 * Hockey Player Data
 */
class Players
{

	// mock data: an array of records (also arrays)
	protected $data = [
		'1'	 => [
			'id'			 => 1,
			'name'			 => 'Gordie Howe',
			'city'                   => 'Floral',
			'image'			 => 'ghowe.jpg',
                        'goals'			 => 801,
                        'team'			 => 'Detroit Red Wings',
                        'position'		 => 'Right Wing',
                        'nickname'		 => 'Mr.Hockey',
		],
		'2'	 => [
			'id'			 => 2,
			'name'			 => 'Wayne Gretzky',
			'city'                   => 'Brantford',
			'image'			 => 'wgretzky.jpg',
                        'goals'			 => 894,
                        'team'			 => 'Los Angeles Kings',
                        'position'		 => 'Center',
                        'nickname'		 => 'The Great One',
		],
		'3'	 => [
			'id'			 => 3,
			'name'			 => 'Bobby Orr',
			'city'                   => 'Parry Sound',
			'image'			 => 'borr.jpg',
                        'goals'			 => 270,
                        'team'			 => 'Boston Bruins',
                        'position'		 => 'Defense',
                        'nickname'		 => 'Number Four, Bobby Orr',
		],
		'4'	 => [
			'id'			 => 4,
			'name'			 => 'Mario Lemieux',
			'city'                   => 'Montreal',
			'image'			 => 'mlemieux.jpg',
                        'goals'			 => 690,
                        'team'			 => 'Pittsburgh Penguins',
                        'position'		 => 'Center',
                        'nickname'		 => 'The Magnificent One',
		],
		'5'	 => [
			'id'			 => 5,
			'name'			 => 'Maurice Richard',
			'city'                   => 'Montreal',
			'image'			 => 'mrichard.jpg',
                        'goals'			 => 544,
                        'team'			 => 'Montreal Canadiens',
                        'position'		 => 'Right Wing',
                        'nickname'		 => 'The Rocket',
		],
                '6'	 => [
			'id'			 => 6,
			'name'			 => 'Alexander Ovechkin',
			'city'                   => 'Moscow',
			'image'			 => 'aovechkin.jpg',
                        'goals'			 => 662,
                        'team'			 => 'Washington Capitals',
                        'position'		 => 'Left Wing',
                        'nickname'		 => 'The Great Eight',
		],
	];

	public function findAll()
	{
		return $this->data;
	}

	public function find($id = null)
	{
		if ( ! empty($id) && isset($this->data[$id]))
			return $this->data[$id];
		return null;
	}

}
