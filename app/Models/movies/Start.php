<?php
namespace App\Models\movies;

/**
 * Hockey Player Data
 */
class Start
{

	// mock data: an array of records (also arrays)
	protected $data = [
		'1'	 => [
			'id'			 => 1,
			'name'			 => 'Gong Yoo',
			'country'                   => 'Korea',
                         'gender'           	 => 'man',              
			'image'			 => '1.jpg',
                        'birthday'          	 =>'1979.7.10' ,
                        'constellation'		 => 'Cancer',
                        'production'		 => '鬼怪，釜山行，男与女',

		],
		'2'	 => [
			'id'			 => 2,
			'name'			 => 'Zhang Ruoyuan',
			'country'                   => 'Chian',
                         'gender'           	 => 'man',              
			'image'			 => '2.jpg',
                        'birthday'          	 =>'1988.8.24' ,
                        'constellation'		 => 'Virgo',
                        'production'		 => '无心法师，麻雀，法医秦明',
		],
		'3'	 => [
			'id'			 => 3,
			'name'			 => 'Luo Jin',
			'country'                   => 'China',
                         'gender'           	 => 'man',              
			'image'			 => '3.jpg',
                        'birthday'          	 =>'1981.11.30' ,
                        'constellation'		 => 'sagittarius',
                        'production'		 => '归去来，锦绣未央，幕后之王，美人心计',
		],
		'4'	 => [
			'id'			 => 4,
			'name'			 => 'Song Joongki',
			'country'                   => 'Korea',
                         'gender'           	 => 'man',              
			'image'			 => '4.jpg',
                        'birthday'          	 =>'1985.9.19' ,
                        'constellation'		 => 'Virgo',
                        'production'		 => '太阳的后裔，霜花店，狼少年',
		],
		'5'	 => [
			'id'			 => 5,
			'name'			 => 'Zhang Zifeng',
			'country'                   => 'China',
                         'gender'           	 => 'girl',              
			'image'			 => '5.jpg',
                        'birthday'          	 =>'2001.8.27' ,
                        'constellation'		 => 'Virgo',
                        'production'		 => '唐山大地震，唐人街探案，小别离，快把我哥带走',
		],
                '6'	 => [
			'id'			 => 6,
			'name'			 => 'Peng Xuchang',
			'country'                   => 'China',
                         'gender'           	 => 'man',              
			'image'			 => '6.jpg',
                        'birthday'          	 =>'1994.10.25' ,
                        'constellation'		 => 'Scorpio',
                        'production'		 => '闪光少女，都挺好，大象席地而坐，快把我哥带走',
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
