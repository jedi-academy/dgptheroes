<?php

    namespace App\Models\Start;
    use App\Models\Simple\CSVModel;
    class Creators extends \App\Models\Simple\CSVModel
    {
        protected $origin   =  WRITEPATH . 'data/movies/moviesData.csv';
        protected  $keyField ='id';
        protected $validationRules=[];


	
    }  