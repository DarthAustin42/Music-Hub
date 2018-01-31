<?php

# database/seeds/RecordTableSeeder.php

use App\Models\Record;  
use Illuminate\Database\Seeder;

class RecordTableSeeder extends Seeder  
{
    public function run()
    {
        Record::create([
            'title' => 'Without You',
            'author' => 'Eminem',
            'album' => 'The Eminem Show',
	    'genre' => 'Rap',
	    'time' => '4:50'
        ]);
    }
}

