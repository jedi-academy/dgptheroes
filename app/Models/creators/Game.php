  <?php 
    namespace App\Models\creators;
    use CodeIgniter\Model;
    class Game extends Model
    {
        protected $data   = [
     
             '6'	 => [ 
            'id'			 => 6,
            'Name'     => 'Hironobu_Sakaguchi',
            'Date of birth'         =>'1962-11-25',
            'Grduate'         =>'Yokohama National University',
            'Country'           => 'Japan',
            'Game company'         =>'SQUARE',
            'Representative works'         =>'<<Final Fantasy>>  <<Kingdom Hearts>>',
            'Identifier'        => 'Hironobu Sakaguchi doesn’t feature in Develop Magazine’s list of all time greats, but his 2000 induction into the Academy of Interactive Arts & Sciences’ Hall of Fame is sure to come as some solace. In 1987 he created the epic role-playing game, Final Fantasy, the name of which was inspired by the idea that if it did not sell he would go back to the university he had dropped out of several years earlier. Final Fantasy was a tremendous success. It is one of the best-selling video game franchises ever – the series had sold almost 100 million units as of 2010 – and is credited with popularizing many of the standard features of today’s role-playing games. Sakaguchi has also developed other successful games including Blue Dragon and Kingdom Hearts.',
            'imagename'         =>'Hironobu_Sakaguchi.png'
            ],
             '5'	 => [ 
            'id'			 => 5,
            'Name'     => 'Michael_Morhaime',
            'Date of birth'         =>'1966',
            'Grduate'         =>'University of California, Los Angeles',
            'Country'           => 'American',
            'Game company'         =>'Blizzard Entertainment',
            'Representative works'         =>'<<World of Warcraft>>',
            'Identifier'        => 'It’s no surprise that Michael Morhaime ranked in Develop Magazine’s top ten list of heroes, in which he took the number nine spot. In 2008 he was honored at the Annual Technology and Engineering Emmy Awards and was also inducted into the Academy of Interactive Arts & Sciences’ Hall of Fame. As the president and co-founder of Blizzard Entertainment, he has created such iconic games as Diablo and World of Warcraft. WoW, the defining massively multiplayer online role-playing game (MMORPG), has a massive 12 million subscribers, giving it a 62% market share and the world record as the most popular game of its kind. In 2009, Morhaime received an annual compensation approaching the $1 million mark.',
            'imagename'         =>'Michael_Morhaime.png'
             ],
             '4'	 => [ 
            'id'			 => 4,
            'Name'     => 'Satoshi_Tajiri',
            'Date of birth'         =>'1965-8-28',
            'Grduate'         =>'National Tokyo Institute of industry',
            'Country'           => 'Japan',
            'Game company'         =>'GAME FREAK',
            'Representative works'         =>'<<Pokemon>>',
            'Identifier'        => 'Gotta catch ‘em all! Satoshi Tajiri created video games that were inspired by his childhood hobby of insect collecting. Still, it’s lucky for everyone who grew up trying to be the best Poketrainer of them all that Tajiri was perhaps something of a strange child, because without him we wouldn’t have Pokémon. The development took six years and almost bankrupted Tajiri’s company, Game Freak, but in 1996 the game was released to the world at large. Tajiri’s contribution to, and influence on, video game design has been recognized by IGN, Electronic Gaming Monthly and Edge magazine, and he is an undisputed giant of the industry. We trust the man who refused his salary while working on Pokémon is reaping the benefits of his hard work now.',
            'imagename'         =>'Satoshi_Tajiri.png'
            ],
             '3'	 => [ 
            'id'			 => 3,
            'Name'     => 'John_Carmack',
            'Date of birth'         =>'1970-8-20',
            'Grduate'         =>'Kansas University',
            'Country'           => 'American',
            'Game company'         =>'id Software',
            'Representative works'         =>'<<Doom>> <<Quake>> <<Rage>> <<Wolfenstein>>',
            'Identifier'        => 'From the primitive graphics and gameplay of Commander Keen to the immersive, multiplayer, first-person shooter environments of Quake and Doom, John Carmack has always been at the cutting edge of video game programming and design. It was this that saw him inducted into the Academy of Interactive Arts & Sciences’ Hall of Fame in 2001, awarded at the Technology & Engineering Emmy Awards in 2007, and placed at number two in Develop Magazine’s survey of heroes. In 2010 he was further honored with the Lifetime Achievement Award at the Game Developers Conference. A generous man and advocate of open source software, Carmack’s success might best be measured in the esteem with which he is held both inside and outside of his industry.',
            'imagename'         =>'John_Carmack.png'
            ],
             '2'	 => [ 
            'id'			 => 2,
            'Name'     => 'Hideo_Kojima',
            'Date of birth'         =>'1963-8-24',
            'Grduate'         =>'A Japan ordinary University',
            'Country'           => 'Japan',
            'Game company'         =>'Hideo Kojima studio',
            'Representative works'         =>'<<Metal Gear>>',
            'Identifier'        => 'The current director of Kojima Productions and Vice President of Konami Digital Entertainment, Hideo Kojima has created and developed a plethora of acclaimed video games and video game franchises – and must surely be earning a salary that mirrors this success. Metal Gear, Boktai and Policenauts are among his most well-known projects, with the Metal Gear series of stealth games a massive hit in particular, selling over 27 million copies worldwide. Newsweek named him in their top ten people in the world of 2002, and in 2008 he received the first ever Lifetime Achievement Award for a video game designer at the MTV Game Awards. In 2009 he received another lifetime achievement award, this time from the Game Developers Conference.',
            'imagename'         =>'Hideo_Kojima.png'
            ],
             '1'	 => [ 
            'id'			 => 1,
            'Name'     => 'Chen_Xinghan',
            'Date of birth'         =>'Unknown',
            'Grduate'         =>'Shanghai Jiao Tong University,University of Southern California',
            'Country'           => 'China',
            'Game company'         =>'Thatgamecompany',
            'Representative works'         =>'<<Cloud>> <<Flow>> <<Flower>> <<Journey>>',
            'Identifier'        => 'Chen Xinghan is a Chinese producer of award-winning Games <<cloud>>, <<floating world>> and <<flower>> and co founded the thatgame company with kellee Santiago.Chen Xinghan works have always been unique, "flower" and "floating" have proved the talent and creativity of this designer to the world. In 2012, he developed "the traveller of wind" for PS3, which is also an alternative game beyond people traditional concept of the game, from sensory identity to spiritual resonance, which is his consistent style. The traveller of the wind lets players experience the wonderful feeling of exploring the vast unknown land, which is quite a kind of free and unrestrained sense of relief. Walking on the boundless earth, weaving their own journey, which is the simple and profound theme of this work.',
            'imagename'         =>'Chen_Xinghan.png'
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