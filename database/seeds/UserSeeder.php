<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Person;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $useradmin = User::where('email','admin@admin.com')->first();
    	if ($useradmin) {
    		$useradmin->delete();
    	}
    	$useradmin = User::create([
			'name' => 'admin',
            'surname' => 'admin',
	        'email' => 'admin@admin.com',
	        'password' => Hash::make('admin')
    	]);

        $person = new Person;
        $person->name = $useradmin->name;
        $person->surname = $useradmin->surname;        
        $person->user_id = $useradmin->id;

        $person->save();

        $useradmin->person()->save($person);
    }
}
