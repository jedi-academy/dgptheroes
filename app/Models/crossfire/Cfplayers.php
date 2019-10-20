<?php
namespace App\Models\crossfire;

/**
 * Crossfire Players Data
 */
class Cfplayers
{

	
	protected $data = [
		'1'	 => [
			'id'			 => 1,
			'name'			 => 'Li Ma',
			'city'                   => 'Yancheng,Jiangsu',
			'image'			 => 'Ma_Li.jpg',
                        'club'			 => 'White shark e-sports club',
                        'main weapon'		 => 'AWM-A',
                        'position'		 => 'captain+commander+sniper',
                        'nickname'		 => 'white shark',
		],
		'2'	 => [
			'id'			 => 2,
			'name'			 => 'Shuai Lang',
			'city'                   => 'Liaoyang,Liaoning',
			'image'			 => 'Lang_Shuai.jpg',
                        'club'			 => 'Liaoning Qingcheng e-sports club',
                        'main weapon'		 => 'AWM',
                        'position'		 => 'captain+sniper',
                        'nickname'		 => '70KG',
		],
		'3'	 => [
			'id'			 => 3,
			'name'			 => 'Jinjun Xu',
			'city'                   => 'Huizhou,Guangdong',
			'image'			 => 'Xu_Jinjun.jpg',
                        'club'			 => 'White shark e-sports club',
                        'main weapon'		 => 'AK-47',
                        'position'		 => 'breakthrough',
                        'nickname'		 => 'stone',
		],
		'4'	 => [
			'id'			 => 4,
			'name'			 => 'Zhe Ma',
			'city'                   => 'Qiqihar,Heilongjiang',
			'image'			 => 'Ma_Zhe.jpg',
                        'club'			 => 'SV e-sports club',
                        'main weapon'		 => 'AWM',
                        'position'		 => 'captain+sniper',
                        'nickname'		 => 'MZin',
		],
		'5'	 => [
			'id'			 => 5,
			'name'			 => 'Zhen Wang',
			'city'                   => 'Suihua,Heilongjiang',
			'image'			 => 'Wang_Zhen.jpg',
                        'club'			 => 'Q9 e-sports club',
                        'main weapon'		 => 'AK-47-B',
                        'position'		 => 'breakthrough',
                        'nickname'		 => 'WzZz',
		],
                '6'	 => [
			'id'			 => 6,
			'name'			 => 'Nianpeng Sun',
			'city'                   => 'Mohe,Heilongjiang',
			'image'			 => 'Sun_Nianpeng.jpg',
                        'club'			 => 'HG Clan e-sports club',
                        'main weapon'		 => 'Barrett M82A1',
                        'position'		 => 'captain+commander+sniper',
                        'nickname'		 => 'Enpi',
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
