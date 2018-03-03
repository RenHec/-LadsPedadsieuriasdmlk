<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
      $user = factory(App\User::class)->create([
        'dpi' => '195258656852',
        'first_name' => 'HECTOR',
        'second_name' => 'RENATO',
        'first_last_name' => 'DE LA CRUZ',
        'second_last_name' => 'OJEDA',
        'username' => 'RENATO.OJEDA',
        'email' => 'RENATO.OJEDA.1993@GMAIL.COM',
        'password' => bcrypt('ADMIN123'),
        'direction' => 'BARRIO BELEN, COLONIA LA COOPERATIVA',
        'rol_id' => '1',
        'municipality_id' => '270',
        'phone_id' => '1',
        'estado' => '1'
      ]);
    }
}
