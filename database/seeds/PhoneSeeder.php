<?php

use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    public function run()
    {
      $company = factory(App\Company::class)->create([
       'cell_phone' => '57101225';
       'company_id' => 1;
      ]);
    }
}
