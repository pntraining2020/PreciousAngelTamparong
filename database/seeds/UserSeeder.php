<?php

use App\model\user;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::insert([
            'firstname' => 'irish',
            'lastname' => 'rufo'    
        ]);
        
        user::insert([
            'firstname' => 'warren',
            'lastname' => 'ward'    
        ]);
      
    }
}
