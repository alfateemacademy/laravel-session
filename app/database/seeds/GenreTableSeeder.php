<?php

class GenreTableSeeder extends Seeder {

    public function run()
    {
    	$genres = [
    		'Action', 'Comedy', 'Family', 'History', 'Mystery', 'Sci-Fi'
    	];

    	foreach($genres as $genre)
    	{
	        Genre::create([
	        	'name' => $genre,
	        	'slug' => Str::slug($genre)
	        ]);
    	}

        

    }

}