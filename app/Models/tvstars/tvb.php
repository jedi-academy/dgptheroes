<?php
namespace App\Models;

class Places
{
	protected $data = [
		'1'	 => [
			'id'			 => 1,
			'name'			 => 'Bobby Au-yeung',
			'description'	 => 'Au-yeung graduated from TVB Artiste Training Academy in 1982 and began appearing in many television dramas as background extras, to roles with minor speaking parts, and later to major supporting roles.',
			'link'			 => 'http://artiste.tvb.com/main/artistedetail/auyeungchunwah',
			'image'			 => 'Bobby Au-yeung.jpg',
		],
		'2'	 => [
			'id'			 => 2,
			'name'			 => 'Law Lan',
			'description'	 => 'It was her performance as 龍婆 (lung poh, which is old dragon lady literally) in the movie, Bullets Over Summer, which garnered her the "Best Actress" award at the 19th Hong Kong Film Award in 2000, making her the oldest winner of this coveted award.',
			'link'			 => 'https://en.wikipedia.org/wiki/Law_Lan',
			'image'			 => 'Law Lan.jpg',
		],
		'3'	 => [
			'id'			 => 3,
			'name'			 => 'Anderson Junior',
			'description'	 => 'A country at the centre of the Southeast Asian Indochinese peninsula composed of 76 provinces.',
			'link'			 => 'http://artiste.tvb.com/main/artistedetail/andersonjunior',
			'image'			 => 'Anderson Junior.jpg',
		],
		'4'	 => [
			'id'			 => 4,
			'name'			 => 'Ngo Ka Nin',
			'description'	 => 'An artist of TVB',
			'link'			 => 'http://artiste.tvb.com/main/artistedetail/ngokanin',
			'image'			 => 'Ngo Ka Nin.jpg',
		],
		'5'	 => [
			'id'			 => 5,
			'name'			 => 'Tsang Wai Kuen',
			'description'	 => 'An artist of TVB',
			'link'			 => 'http://artiste.tvb.com/main/artistedetail/saviotsang',
			'image'			 => 'Tsang Wai Kuen.jpg',
		],
                 '6'	 => [
			'id'			 => 6,
			'name'			 => 'Moses Chan',
			'description'	 => 'Moses Chan Ho (born April 16, 1971) is an actor from Hong Kong. Having started his career working mostly on films, Chan subsequently concentrated on his TV acting career with TVB',
			'link'			 => 'https://en.wikipedia.org/wiki/Moses_Chan',
			'image'			 => 'Moses Chan.jpg',
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
