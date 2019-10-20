<?php
namespace App\Models\hiphop;

class Musicians
{

	// mock data: an array of records (also arrays)
	protected $data = [
		'1'	 => [
			'id'			 => 1,
			'name'			 => 'H.E.R.',
                        'gender'                 => 'Female',
                        'birthdate'              => 'June 27, 1997',
                        'years active'           => '2011-present',
                        'labels'                 => 'RCA, MBK',
                        'instruments'            => 'Vocals, Guitar',
                        'website'                => 'her-official.com',
                        			
		],
		'2'	 => [
			'id'			 => 2,
			'name'			 => 'PostMalone',
                        'gender'                 => 'Male',
			'birthdate'              => 'July 4, 1995',
                        'years active'           => '2013-present',
                        'labels'                 => 'Republic',
                        'instruments'            => 'Vocals, Guitar',
                        'website'                => 'postmalone.com',
		],
		'3'	 => [
			'id'			 => 3,
			'name'			 => 'Eminem',
                        'gender'                 => 'Male',
			'birthdate'              => 'October 17, 1972',
                        'years active'           => '1988-present',
                        'labels'                 => 'Aftermath, Shady, Interscope, Web',
                        'instruments'            => 'Vocals',
                        'website'                => 'eminem.com',
		],
		'4'	 => [
			'id'			 => 4,
			'name'			 => 'ChildishGambino',
                        'gender'                 => 'Male',
			'birthdate'              => 'September 25, 1983',
                        'years active'           => '2005-present',
                        'labels'                 => 'Island, RCA, Liberator',
                        'instruments'            => 'Vocals, Guitar, Piano, Keyboards, Drums, Programmer',
                        'website'                => 'childishgambino.com',
		],
		'5'	 => [
			'id'			 => 5,
			'name'			 => 'J.Cole',
                        'gender'                 => 'Male',
			'birthdate'              => 'January 28, 1985',
                        'years active'           => '2007-present',
                        'labels'                 => 'Dreamville, Roc Nation, Interscope, Columbia, ByStorm',
                        'instruments'            => 'Vocals, Keyboards, Sampler',
                        'website'                => 'dreamville.com',
		],
                '6'	 => [
			'id'			 => 6,
			'name'			 => 'KendrickLamar',
                        'gender'                 => 'Male',
			'birthdate'              => 'June 27, 1987',
                        'years active'           => '2004-present',
                        'labels'                 => 'Vocals',
                        'website'                => 'kendricklamar.com',
		],
	];

	public function findAll()
	{
		return $this->data;
	}

	public function find($id = null)
	{
            if (!empty($id) && isset($this->data[$id])) 
            {
            return $this->data[$id];
            }
            return null;
	}
}
