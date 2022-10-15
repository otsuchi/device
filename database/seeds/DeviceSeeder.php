<?php

use Illuminate\Database\Seeder;
use App\Device;
class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Device::create([
            'id' => '1',
            'name' => 'ペースメーカ',
        ]);
        
        
        Device::create([
            'id' => '2',
            'name' => 'ICD',
        ]);
        
        Device::create([
            'id' => '3',
            'name' => 'CRT-P',
        ]);
        
        Device::create([
            'id' => '4',
            'name' => 'CRT-D',
        ]);
        
        Device::create([
            'id' => '5',
            'name' => 'S-ICD',
        ]);
        
        Device::create([
            'id' => '6',
            'name' => 'ICM',
        ]);
        //
    }
}
