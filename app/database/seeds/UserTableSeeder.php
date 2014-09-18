<?php
	class UserTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
                'id' => 1,
                'username' => 'yamid',
                'first_name' => 'Yamid',
                'last_name' => 'Viloria Ortega',
                'email' => 'yamid@email.com',
                'password' => Hash::make('1234'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime      
        )); 
    }
 
}