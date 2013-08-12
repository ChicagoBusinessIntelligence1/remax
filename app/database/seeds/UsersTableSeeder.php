<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {

        $now = date('Y-m-d H:i:s');
    	// Uncomment the below to wipe the table clean before populating
        DB::table('users')->delete();

        $users = array([
            'first_name'=>'Mark',
            'last_name'=>'Feyman',
            'email'=>'mf847@yahoo.com',
            'password'=>Hash::make('pass'),
            'agent_id'=>'7',
            'created_at' => $now,
            'updated_at' => $now
            ]);

        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }

}