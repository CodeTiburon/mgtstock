<?php
class AssignedRolesTableSeeder extends Seeder {

	public function run()
	{
            $adminRole = Role::query()->where('name','=','admin')->first()->id;
            $userRole = Role::query()->where('name','=','user')->first()->id;
            
            $admin = User::query()->where('firstname','=','Admin')->first()->id;
            $user = User::query()->where('firstname','=','Ivan')->first()->id;
            $vadim = User::query()->where('firstname','=','Vadim')->first()->id;
            
            $roleUser = array(
                array('role_id' => $adminRole, 'user_id'=>$admin),
                array('role_id' => $userRole, 'user_id'=>$user),
                array('role_id' => $userRole, 'user_id'=>$vadim)
            );

            DB::table('assigned_roles')->insert($roleUser);
	}

}