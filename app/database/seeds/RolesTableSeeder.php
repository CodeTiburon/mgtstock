<?php


class RolesTableSeeder extends Seeder {

	public function run()
	{
		
            Role::create([
                    'name' => 'admin' // id:1
            ]);
            
            Role::create([
                    'name' => 'guest' //id:2
            ]);
            
            Role::create([
                    'name' => 'user' //id:3
            ]);
		
	}

}