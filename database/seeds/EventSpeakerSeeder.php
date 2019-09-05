<?php

use App\Speaker;
use Illuminate\Database\Seeder;

class EventSpeakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->speakers() as $speaker) {
        	if(! Speaker::where(['email' => $speaker['email']])->first()){
        		Speaker::create($speaker);
        	}
        }
    }

    private function speakers(){
    	return [
    		[
    			'first_name' => 'John Dave',
    			'last_name' => 'Del Rosario',
    			'email' => 'johndave.delrosario@example.com',
    			'contact' => '09123567890'
    		],
    	];
    }
}
