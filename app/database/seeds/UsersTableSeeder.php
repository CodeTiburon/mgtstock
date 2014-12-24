<?php
class UsersTableSeeder extends Seeder {

	public function run()
	{
            
            $user = new User();
            $user->fullname = 'Admin';
            $user->email    = 'admin@codetiburon.com';
            $user->password = 'admin123';
            $user->password_confirmation =  $user->password;
            $user->confirmed = 1;
            $user->save();
            
            $user = new User();
            $user->fullname = 'Registered user';
            $user->email    = 'user@codetiburon.com';
            $user->password = 'user123';
            $user->password_confirmation =  $user->password;
            $user->confirmed = 1;
            $user->save();
    }

}