<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 8 ; $i++) { 
	        DB::table("data")->insert([
	        	"name" => Str::random(10),
	        	"image" => asset("image/".$i.".jpg")
	        ]);
    	}
    }
}
