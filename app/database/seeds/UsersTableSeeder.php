<?php
class UsersTableSeeder extends Seeder {

	public function run()
	{
            
            $user = new User();
            $user->firstname = 'Admin';
            $user->lastname = 'Sys';
            $user->email    = 'admin@codetiburon.com';
            $user->password = 'admin123';
            $user->password_confirmation =  $user->password;
            $user->confirmed = 1;
            $user->save();
            
            $user = new User();
            $user->firstname = 'Ivan';
            $user->lastname = 'Petrov';
            $user->email    = 'ivan@codetiburon.com';
            $user->password = 'user123';
            $user->password_confirmation =  $user->password;
            $user->confirmed = 1;
            $user->save();
            
            $user = new User();
            $user->firstname = 'Vadim';
            $user->lastname = 'Ilyasov';
            $user->email    = 'vadim@codetiburon.com';
            $user->password = 'vadim123';
            $user->password_confirmation =  $user->password;
            $user->confirmed = 1;
            $user->save();
    }

}