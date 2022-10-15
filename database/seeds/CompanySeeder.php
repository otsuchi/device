<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'id' => '1',
            'name' => 'メドトロニック',
        ]);
        
        
        Company::create([
            'id' => '2',
            'name' => 'アボット',
        ]);
        
        Company::create([
            'id' => '3',
            'name' => 'ボストン',
        ]);
        
        Company::create([
            'id' => '4',
            'name' => 'バイオトロニック',
        ]);
        
        Company::create([
            'id' => '5',
            'name' => 'マイクロポート',
        ]);
    }
}
