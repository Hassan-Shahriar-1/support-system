<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name'=>'Oleaon-Admin',
            'email'=>'newazgddo@gmail.com',
            'role'=>'1',
            'password'=>Hash::make('123456789'),
        ]);
    }
}